<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Input Student</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> 
                Input Student's Information
            </div>
            <div class="panel-body">
            <form method="post" action="{{ route('post-student') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" required name="fullname" id="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" required name="age" id="age"class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" required name="address"id="address" class="form-control">
                </div>
                <button class="btn btn-success">Register</button>
            </form>
            </div>    
        </div>
    </div>
</body>
</html>