<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Task;
use DB;

class AdminTaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    //----- Fonction affichage tâches ------\\
    public function index(){

        $tasks = DB::table('users')
        ->join('tasks', function($join) {
            $join->on('users.id', '=', 'tasks.assigned_to');
        })
        ->select('users.name', 'tasks.title', 'tasks.id', 'tasks.assigned_to')
        ->get();
        //return view ('tasks.index', ['tasks' => $tasks]);
        return $tasks;

    }

    //----- Fonction affichage concierges ------\\
    public function users_name(){
        $users = DB::table('users')
        ->select('name', 'id')
        ->where('is_permission', '=', 1)
        ->get();
        //return view ('tasks.index', ['users' => $users]);
        return $users;
    }

    //----- Fonction affichages ------\\
    public function affichage(){
        $tasks=$this->index();
        $users=$this->users_name();
        return view('admin.index')->with(['tasks' => $tasks, 'users' => $users]);
        
    }

    //----- Fonction ajout tâches ------\\
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'bail|required|max:255'

        ]);
        

        $request->user()->tasks()->create([
            'title' => $request->title,
            'assigned_to' => $request->users_name
        ]);

        return redirect('/admin/tasks');
    }

    //----- Fonction suppression tâches ------\\
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/admin/tasks');
    }
}
