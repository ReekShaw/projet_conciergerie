<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Task;
use DB;
use Auth;
class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }
    //----- Fonction affichage tâches ------\\
    // public function index(Request $request)
    // {
    //     return view('user.index', [
    //         'tasks' => $this->tasks->forUser($request->user())
    //     ]);
    // }

    public function index(){
        $id = Auth::user()->name;
        
        $tasks = DB::table('tasks')
        ->select('tasks.*')
        ->join('users', 'users.id', '=', 'tasks.assigned_to')
        ->where('users.name', '=', $id)
        ->get();

        return view('user.index', ['tasks' => $tasks]);
    }
    

}