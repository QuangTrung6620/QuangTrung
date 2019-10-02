<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student List</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
<body>
    <table class="table table-bordered">
	<tr>
		<th>STT</th>
		<th>Full Name</th>
		<th>Age</th>
		<th>Address</th>
	</tr>
        @php
            $index=1;
        @endphp
	@foreach ($studentList as $item)
		<tr>
			<td>{{ $index++ }}</td>
			<td>{{ $item->fullname }}</td>
			<td>{{ $item->age }}</td>
			<td>{{ $item->address }}</td>
		</tr>
	@endforeach
</table>
</body>
</html>