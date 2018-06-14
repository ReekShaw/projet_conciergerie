@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <div class="panel panel-default">

                <div class="panel-heading">
                    Nouvelle tâche
                </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')

                        <!-- New Task Form -->
                        <form action="/admin/task" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Task title -->
                            <div class="form-group">
                                <label for="task-title" class="col-sm-3 control-label">Tâche</label>

                                <div class="col-sm-6">
                                    <input type="text" name="title" id="task-title" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">                                    
                                <label class="col-sm-3 control-label" for="">Attribué à...</label>

                                <div class="col-sm-6">
                                    <select class="form-control" name="users_name">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>    
                                </div>                         
                            </div>
                        
                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Ajouter tâche
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
                <!-- Current Tasks -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tâche en cours
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                    <!-- Table Headings -->
                                    <thead>
                                        <th>Tâche</th>
                                        <th>Assigné pour..</th>
                                        <th>Action</th>                                        
                                    </thead>
                                    @forelse ($tasks as $task)                                    

                                    <!-- Table Body -->                         
                                    <tbody>                                        
                                        <tr>
                                            <!-- Task Name -->
                                            <td>
                                                <div>{{ $task->title }}</div>
                                            </td>
                                            <td>
                                                <div>{{ $task->name }}</div>
                                            </td>
                                            
                                            <td>
                                                <form action="/admin/task/{{ $task->id }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                    <p>Aucune tâche à afficher...</p>                                    
                                    </tbody>
                                    
                                @endforelse
                            </table>
                        </div>
                    </div>
            
        </div>
    </div>
@endsection