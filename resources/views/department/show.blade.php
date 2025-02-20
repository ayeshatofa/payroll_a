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
                    <h4>Show Department Detials</h4>
                    <a href="{{route('department.index')}}" class="btn btn-danger float-right">Click me</a>
                </div>
                <div class="card-body">
                   <div class="mb-3">
                    <label for="">Department Name</label>
                    <p>{{$department->dep_name}}</p>
                   </div>
                </div>
                </div>
        </div>
    </div>
@endsection