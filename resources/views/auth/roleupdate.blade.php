@extends ('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel-heading">
				<h3>Update Role</h3>
				</div>
				<div class="panel-default well">
					<div class="panel-body">
						{!! Form::open(['method' => 'POST','url'=>url('/auth/roleupdate'.'/'.$roles->id), 'class' => 'form-horizontal']) !!}
							
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							    {!! Form::label('name', 'Name') !!}
							    {!! Form::text('name', $roles->name, ['class' => 'form-control', 'required' => 'required']) !!}
							    <small class="text-danger">{{ $errors->first('name') }}</small>
							</div>

							<div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
							    {!! Form::label('display_name', 'Display Name') !!}
							    {!! Form::text('display_name', $roles->display_name, ['class' => 'form-control', 'required' => 'required']) !!}
							    <small class="text-danger">{{ $errors->first('display_name') }}</small>
							</div>

							<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
							    {!! Form::label('description', 'Description') !!}
							    {!! Form::text('description', $roles->description, ['class' => 'form-control', 'required' => 'required']) !!}
							    <small class="text-danger">{{ $errors->first('description') }}</small>
							</div>

							<div class="form-group">
							    <div class="checkbox{{ $errors->has('permission') ? ' has-error' : '' }}">
							        <label for="permission">
							            {!! Form::checkbox('permission', '1', null, ['id' => 'permission']) !!} PERMISSION
							        </label>
							    </div>
							    <small class="text-danger">{{ $errors->first('permission') }}</small>
							</div>

							<div class="form-group">
							    <div class="checkbox{{ $errors->has('users') ? ' has-error' : '' }}">
							        <label for="users">
							            {!! Form::checkbox('users', '1', null, ['id' => 'users']) !!} USERS
							        </label>
							    </div>
							    <small class="text-danger">{{ $errors->first('users') }}</small>
							</div>

							{!! Form::submit('Submit Data', ['class' => 'btn btn-info pull-right']) !!}
						   
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection