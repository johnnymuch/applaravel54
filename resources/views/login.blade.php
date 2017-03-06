@extends('layouts.header')
@section('content')
<div class="container">
	<div class="row">
		<div class="panel-body">Login Area</div>
		<div class="col-md-4 col-md-offset-4">
			<div class="from-group">
				<label for="email">Email</div>
			<input class="form-control" type="text" name="email" id="email" placeholder="Please Enter Name Hare">
			</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" name="password" id="password" placeholder="Please Enter Your Password">
		</div>
	</div>		
</div>    
@endsection
