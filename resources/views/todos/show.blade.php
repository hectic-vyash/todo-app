@extends('layouts.app')

@section('content')
    <h1 class="text-center my-2">{{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Description
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
        </div>
    </div>
@endsection()