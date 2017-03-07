@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<h2>View Roles</h2>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>{{$roles->id}}</th>
				</tr>
				<tr>
					<th>Name</th>
					<th>{{$roles->name}}</th>
				</tr>
				<tr>
					<th>Display</th>
					<th>{{$roles->display_name}}</th>
				</tr>
				<tr>
					<th>Description</th>
					<th>{{$roles->description}}</th>
				</tr>
			</table>
		</div>
	</div>
@endsection


