@extends('layout.struct')

@section('content')


<div class="container">


    <h1 class="text-center  my-5">All Employees</h1>


        <table class="table my-5 text-center">
            <thead class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>postion</th>
                <th>Department</th>
                <th>date</th>
                <th>Actions</th>
            </thead>
            <tbody>



            @foreach ($employees as $employee_data)
            <tr>
                <td>{{ $employee_data->id }}</td>
                <td>{{ $employee_data->name }}</td>
                <td>{{ $employee_data->email }}</td>
                <td>{{ $employee_data->position }}</td>
                <td>{{ $employee_data->department }}</td>
                <td>{{ $employee_data->hire_date }}</td>
                <td>
                    <a href="showsingle/{{ $employee_data->id }}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                    <a href="deleteemp/{{ $employee_data->id }}" class="btn btn-danger" title="Show"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>


@endsection
