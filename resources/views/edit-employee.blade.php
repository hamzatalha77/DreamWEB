<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @if(Session::has('employee_update'))
    <span>{{Session::get('employee_update')}}</span>
    @endif
      <!-- Modal -->

        <form action="{{route('update.employee')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$employee->id}}">
                <div class="mb-3">
                  <label>First name</label>
                  <input type="text" name="fname" value="{{$employee->fname}}" class="form-control"  placeholder="enter your first name">
                </div>
                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="{{$employee->lname}}" class="form-control" placeholder="enter your last name">
                  </div>
                  <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$employee->address}}" class="form-control" placeholder="enter your adress">
                  </div>
                  <div class="mb-3">
                    <label>Mobile</label>
                    <input type="text" name="mobile" value="{{$employee->mobile}}" class="form-control" placeholder="enter your mobile">
                  </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
