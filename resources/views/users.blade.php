<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @include('layouts.cdn')
    @include('welcome')
    </head>
<body>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
    <table class="table">
        {{-- <pre>
        @dd($students)
        {{print_r($students)}}
        </pre> --}}
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->age}}</td>
                <td>
                    @if($student->status == 1)
                    <button class="btn btn-success">Active</button>
                    @else
                    <button class="btn btn-danger">Inactive</button>
                    @endif
                </td>
                <td>
                    {{-- <a href="{{url('/users/delete/')}}/{{$student->id}}">
                    <button class="btn btn-danger">Delete</button>
                    </a> --}}
                    <a href="{{route('users.delete',['id'=>$student->id])}}">
                    <button class="btn btn-danger">Trash</button>
                    </a>
                    <a href="{{route('users.edit',['id'=>$student->id])}}">
                        <button class="btn btn-success">Edit</button></td>
                    </a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>