@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Students </h2>

        <div class="row">
        <button type="button" onclick="location.href='/form-add-student'" class="btn btn-success" style="margin-bottom: 15px;"> + Add new student</button>
        </div>


        <div class="row">
            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Date Creation</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
                @endforeach
                
                </tbody>
            </table>


        </div>
   
</div>
@endsection