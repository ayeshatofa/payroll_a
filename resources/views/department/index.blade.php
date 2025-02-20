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
                    <h4>Department List</h4>
                    <a href="{{route('department.create')}}" class="btn btn-danger float-right">Click me</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Department ID</th>
                                <th>Department Name</th>
                                

                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department) 
                                <tr>
                                    <td>{{$department->dep_id}}</td>
                                    <td>{{$department->dep_name}}</td>

                                    {{-- <td>{{$employee->status == true ? 1:0}}</td> --}}
                                    <td>
                                        <a href="{{route('department.edit', $department->dep_id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('department.show', $department->dep_id)}}" class="btn btn-info">Show</a>
                                        <form action="{{route('department.destroy', $department->dep_id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure to delete this user?')">
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