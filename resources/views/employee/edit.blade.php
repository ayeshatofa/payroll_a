@extends('layout.master')
@section('title')
    Employee Page
@endsection

@section('content')
<div class="my-5"></div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Back</h4>
                    <a href="{{route('employee.index')}}" class="btn btn-danger float-right">Click me</a>
                </div>
                <div class="card-body">
                    <form action="{{route('employee.update', $employee->emp_id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-5">
                            <label for="name">Name: </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$employee->name}}">
                            @error('name')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="address">Address: </label>
                            <textarea name="address" id="address" class="form-control" rows="3">{{$employee->address}}</textarea>
                            @error('address')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="date_of_join">Date of Join: </label>
                            <input type="date" name="date_of_join" id="" value="{{$employee->date_of_join}} ">
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