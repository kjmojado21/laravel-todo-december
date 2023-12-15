@extends('layouts.app')

@section('title','Index')

@section('content')
    <form action="" method="post">
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
@endsection
