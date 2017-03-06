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
				@forearch($users as $user)
					<tr>
						<td>echo $user->name;</td>
						<td></td>
						<td></td>
					</tr>
				@endforearch
			</table>
		</div>
	</div>
@endsection