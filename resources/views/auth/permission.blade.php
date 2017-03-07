@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="pull-left">
				<h2>User Permission</h2>
			</div>
			<div class="pull-right">
				<h2><a href="{{ url('auth/permissioncreate') }}">Create New Permission</a></h2>
			</div>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Display Name</th>
					<th>Action</th>
				</tr>
				@php $i = 1; @endphp
				@foreach($permissions as $permission)
					<tr>
						<th>{{$i++}}</th>
						<th>{{$permission->name}}</th>
						<th>{{$permission->display_name}}</th>
						<th>
							<a class="btn btn-sm btn-info" href="{{ url('auth/permissionshow'.'/'.$permission->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a class="btn btn-sm btn-success" href="{{ url('auth/permissionedit'.'/'.$permission->id) }}"><i class="glyphicon glyphicon-edit"></i></a>				
							<a class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
						</th>
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection