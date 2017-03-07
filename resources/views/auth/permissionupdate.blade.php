@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel-default well">
				<div class="panel-heading">
					<h3>Create Permission</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(['method' => 'POST', 'url'=>url('/auth/permissionupdate'.'/'.$permissions->id), 'class' => 'form-horizontal']) !!}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					       {!! Form::label('name', 'Name') !!}
					       {!! Form::text('name', $permissions->name, ['class' => 'form-control', 'required' => 'required']) !!}
					       <small class="text-danger">{{ $errors->first('name') }}</small>
					   </div>
					   <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
   					       {!! Form::label('display_name', 'Display Name') !!}
   					       {!! Form::text('display_name', $permissions->display_name, ['class' => 'form-control', 'required' => 'required']) !!}
   					       <small class="text-danger">{{ $errors->first('display_name') }}</small>
   					   </div>
   					  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
  					       {!! Form::label('description', 'Decription') !!}
  					       {!! Form::text('description', $permissions->description, ['class' => 'form-control', 'required' => 'required']) !!}
  					       <small class="text-danger">{{ $errors->first('description') }}</small>
  					   </div>

  					   	<div class="form-group">
  					   	    <div class="checkbox{{ $errors->has('users') ? ' has-error' : '' }}">
  					   	        <label for="users">
  					   	            {!! Form::checkbox('users', '1', null, ['id' => 'users']) !!} USER
  					   	        </label>
  					   	    </div>
  					   	    <small class="text-danger">{{ $errors->first('users') }}</small>
  					   	</div>

  						<div class="form-group">
  						    <div class="checkbox{{ $errors->has('roles') ? ' has-error' : '' }}">
  						        <label for="roles">
  						            {!! Form::checkbox('roles', '1', null, ['id' => 'roles']) !!} ROLE
  						        </label>
  						    </div>
  						    <small class="text-danger">{{ $errors->first('roles') }}</small>
  						</div>
  					   {!! Form::submit('Save ', ['class' => 'btn btn-info pull-right']) !!}					   
					{!! Form::close() !!}
				</div>
			  </div>
			</div>
		</div>
	</div>
@endsection