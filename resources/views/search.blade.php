<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	<title></title>
</head>
<body>
	@include('inc.header')
	<div class="container">
		<div class="row">
			<legend class="text-center">Search Employee</legend>
			@if(count($employees) ===0)
				<h5 class="text-center">No results for Name = "<?php echo($Search) ?>"</h5>
			@elseif(count($employees) >=1 )
				<h4 class="text-center">Search results for Name = "<?php echo($Search) ?>":</p></h4>
			@endif
			@if(session('info'))
				{{session('info')}}
			@endif
			<table class="table table-primary table-hover text-center">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Avatar</th>
			      <th scope="col">Name</th>
			      <th scope="col">Age</th>
			      <th scope="col">Sex</th>
			      <th scope="col">Email</th>
			      <th scope="col">Phone number</th>
			      <th scope="col">Skill</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($employees) > 0)
					@foreach($employees ->all() as $employee)
				    <tr class="table-primary">
				      <th scope="row">{{ $employee->id }}</th>
				      <td><img style="width: 30px; height: 30px; border-radius: 50%;" class="img-home" src="http://localhost:81/crud_tutorial/public/img/{{$employee->image}}" alt=""></td>
				      <td>{{ $employee->name}}</td>
				      <td>{{ $employee->age}}</td>
				      <td>{{ $employee->sex}}</td>
				      <td>{{ $employee->email}}</td>
				      <td>{{ $employee->phonenumber}}</td>
				      <td>{{ $employee->skill}}</td>
				      <td class="group-button">
				      	<a href='{{url("/read/{$employee->id}")}}' class="badge badge-primary text-center button">Read</a> |
				      	<a href='{{url("/update/{$employee->id}")}}' class="badge badge-warning text-center button">Update</a> |
				      	<a href='{{url("/delete/{$employee->id}")}}' class="badge badge-danger button">Delete</a>
				      </td>
				    </tr>
			    	@endforeach
			  	@endif
			  </tbody>
			</table>
			<p>About <?php echo(count($employees)) ?> results</p>
		</div>
	</div>
</body>
</html>
@include('inc.footer')