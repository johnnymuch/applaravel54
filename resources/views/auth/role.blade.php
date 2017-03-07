@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="pull-left">
				<h3>Role</h3>
			</div>
			<div class="pull-right">
				<h3><a href="{{ url('auth/rolecreate') }}">Create New Roles</a></h3>
			</div>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Display Name</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
				@php $i = 1; @endphp
				@foreach($roles as $role)
					<tr>
						<th>{{$i++}}</th>
						<th>{{$role->name}}</th>
						<th>{{$role->display_name}}</th>
						<th>{{$role->description}}</th>
						<th>
							<a class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i></a>
							<a class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
						</th>
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection