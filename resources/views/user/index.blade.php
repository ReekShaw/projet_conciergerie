@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            
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
                                    </thead>
                                    @forelse ($tasks as $task)                                    

                                    <!-- Table Body -->                         
                                    <tbody>                                        
                                        <tr>
                                            <!-- Task Name -->
                                            <td>
                                            <input class="archiver" type="checkbox">                                                
                                            <div class="task">{{ $task->title }}</div><span id="fait"></span>
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