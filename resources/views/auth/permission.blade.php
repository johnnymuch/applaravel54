@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<h2>User Permission</h2>
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
							<a class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i></a>				
							<a class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
						</th>
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection