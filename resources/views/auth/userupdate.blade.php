@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="panel-heading">
				<h3>User</h3>
			</div>			
			<div class="panel-default well">
				<div class="panel-body">
					<div class="col-md-8 col-md-offset-2">
						{!! Form::open(['method' => 'POST', 'url'=>url('/auth/userupdate'.'/'.$users->id), 'class' => 'form-horizontal']) !!}
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							    {!! Form::label('name', 'Name') !!}
							    {!! Form::text('name', $users->name, ['class' => 'form-control', 'required' => 'required']) !!}
							    <small class="text-danger">{{ $errors->first('name') }}</small>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							    {!! Form::label('email', 'Email') !!}
							    {!! Form::text('email', $users->email, ['class' => 'form-control', 'required' => 'required']) !!}
							    <small class="text-danger">{{ $errors->first('email') }}</small>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							    {!! Form::label('password', 'Password') !!}
							   
							        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
							        <small class="text-danger">{{ $errors->first('password') }}</small>								
							</div>

							<div class="form-group">
							    <div class="checkbox{{ $errors->has('permission') ? ' has-error' : '' }}">
							        <label for="permission">
							            {!! Form::checkbox('permission', '1', null, ['id' => 'permission']) !!} Permission
							        </label>
							    </div>
							    <small class="text-danger">{{ $errors->first('permission') }}</small>
							</div>
							<div class="form-group">
							    <div class="checkbox{{ $errors->has('role') ? ' has-error' : '' }}">
							        <label for="role">
							            {!! Form::checkbox('role', '1', null, ['id' => 'role']) !!} ROLE
							        </label>
							    </div>
							    <small class="text-danger">{{ $errors->first('role') }}</small>
							</div>
							{!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection