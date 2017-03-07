@extends ('layouts.app')
@section('content')
	<div class="container">
		<div class="row well">
			<h3>View Permission</h3>
			<table class="table table-striped">
			{{-- @foreach($permissions as $key->$) --}}
				<tr>
					<td>ID</td>
					<td>{{$permissions->id}}</td>
				
				</tr>
				<tr>
					<td>Name</td>
					<td>{{$permissions->name}}</td>
				
				</tr>
				<tr>
					<td>Desplay Name</td>
					<td>{{$permissions->display_name}}</td>
					
				</tr>
				<tr>
					<td>Description</td>
					<td>{{ $permissions->description }}</td>
					
				</tr>
			</table>
		</div>
	</div>
@endsection