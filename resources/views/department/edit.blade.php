@extends('layout.master1')
@section('title')
    Department Page
@endsection

@section('content')
<div class="my-5"></div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Back</h4>
                    <a href="{{route('department.index')}}" class="btn btn-danger float-right">Click me</a>
                </div>
                <div class="card-body">
                    <form action="{{route('department.update', $department->dep_id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-5">
                            <label for="name">Department Name: </label>
                            <input type="text" name="dep_name" id="name" class="form-control" value="{{$department->dep_name}}">
                            @error('name')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection