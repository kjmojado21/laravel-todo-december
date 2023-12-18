@extends('layouts.app')

@section('title','Index')

@section('content')
    {{-- <form action="/store" method="post"> --}}
    <form action="{{route('todo.store')}}" method="post">
        @csrf
        <h3 class="text-center">TODO APP</h3>
        <div class="row">
            <div class="col-10">
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">
                    Add <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="mt-5">
        <ul class="list-group">
            @foreach ($all_tasks as $task)
                <li class="list-group-item">{{$task->name}}</li>
            @endforeach
        </ul>
    </div>


@endsection
