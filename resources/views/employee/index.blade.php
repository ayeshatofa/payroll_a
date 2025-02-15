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
                    <h4>Employee List</h4>
                    <a href="{{route('employee.create')}}" class="btn btn-danger float-right">Click me</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Date Of Join</th>
                                 <th>Actions</th> 

                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee) 
                                <tr>
                                    <td>{{$employee->emp_id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>{{$employee->date_of_join}}</td>

                                    {{-- <td>{{$employee->status == true ? 1:0}}</td> --}}
                                    <td>
                                        <a href="{{route('employee.edit', $employee->emp_id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('employee.show', $employee->emp_id)}}" class="btn btn-info">Show</a>
                                        <form action="{{route('employee.destroy', $employee->emp_id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure to delete this user?')">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection