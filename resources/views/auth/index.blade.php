@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<h2>User Role</h2>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
				@php $i = 1; @endphp
				@foreach($users as $select)
					<tr>
						<th>{{$i++}}</th>
						<th>{{$select->name}}</th>
						<th>{{$select->email}}</th>
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection