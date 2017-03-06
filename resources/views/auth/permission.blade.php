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
					</tr>
			
				@endforeach
			</table>
		</div>
	</div>
@endsection