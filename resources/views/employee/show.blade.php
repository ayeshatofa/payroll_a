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
                    <h4>Show Employee Detials</h4>
                    <a href="{{route('employee.index')}}" class="btn btn-danger float-right">Click me</a>
                </div>
                <div class="card-body">
                   <div class="mb-3">
                    <label for="">Name</label>
                    <p>{{$employee->name}}</p>
                   </div>
                   <div class="mb-3">
                    <label for="">Address</label>
                    <p>{{$employee->address}}</p>
                   </div>
                   <div class="mb-3">
                    <label for="">Date of Join</label>
                    <p>{{$employee->date_of_join }}</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection