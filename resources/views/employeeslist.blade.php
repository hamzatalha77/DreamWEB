<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Employees List</title>
</head>
<body>
    @if(Session::has('employee_delete'))
    <span>{{Session::get('employee_update')}}</span>
    @endif
 <a href="{{route('employee.add')}}">Add Employee</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        @foreach ($employees as $employee)
        <tbody>
          <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->fname}}</td>
            <td>{{$employee->lname}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->mobile}}</td>
            <td>
                <a href="/edit-employee/{{$employee->id}}">Edit</a>
                <a href="/delete-employee/{{$employee->id}}">Delete</a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
</body>
</html>
