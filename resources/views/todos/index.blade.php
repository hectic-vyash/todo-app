@extends('layouts.app')

@section('content')
    <h1 class="text-center my-2 font-weight-bold">ToDo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header bg-dark">
                    My list
                    <a href="/new-todo" class="btn btn-success btn-sm float-right">New</a>
                </div>
                @if(session()->has('success'))
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item bg-dark text-success">
                                {{session()->get('success')}}
                            </li>
                        </ul>
                    </div>
                @endif
                <div class="card-body bg-dark">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            @if(!$todo->completed)

                                <li class="list-group-item bg-dark">{{$todo->name}}
                                    <a href="/todos/{{$todo->id}}" class="btn btn-outline-info btn-sm float-right">View</a>
                                    <a href="/todos/{{$todo->id}}/completed" class="btn btn-outline-success btn-sm float-right">Done</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection()