@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="pull-left"> <h3>User</h3></div>
			<div class="pull-right"><h3><a href="{{ url('auth/usercreate')}}">Create New Users</a></h3></div>
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>QR CODE</th>
					<th>Action</th>
				</tr>
				@php $i = 1; @endphp
				@foreach($users as $user)
					<tr>
						<th>{{$i++}}</th>
						<th>{{$user->name}}</th>
						<th>{{$user->email}}</th>
						<th>Code</th>
						<th>
							<a class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a class="btn btn-sm btn-success" href="{{ url('auth/useredit'.'/'.$user->id) }}"><i class="glyphicon glyphicon-edit"></i></a>
							<a class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
						</th>
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection
