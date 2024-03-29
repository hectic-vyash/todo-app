@extends('layouts.app')

@section('content')
    <h1 class="text-center my-2">New ToDo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header bg-dark">

                </div>
                <div class="card-body bg-dark">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    @endif
                        <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control bg-dark" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control bg-dark" placeholder="Description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type='submit' class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection()

