@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<h2>User Role</h2>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Display Name</th>
					<th>Action</th>
				</tr>
				@php $i = 1; @endphp
				@foreach($roles as $role)
					<tr>
						<th>{{$i++}}</th>
						<th>{{$role->name}}</th>
						<th>{{$role->display_name}}</th>
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection