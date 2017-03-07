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
					{!! Form::open(['method' => 'POST', 'url'=>url('/auth/permissionstore'), 'class' => 'form-horizontal']) !!}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					       {!! Form::label('name', 'Name') !!}
					       {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					       <small class="text-danger">{{ $errors->first('name') }}</small>
					   </div>
					   <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
   					       {!! Form::label('display_name', 'Display Name') !!}
   					       {!! Form::text('display_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
   					       <small class="text-danger">{{ $errors->first('display_name') }}</small>
   					   </div>
   					  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
  					       {!! Form::label('description', 'Decription') !!}
  					       {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
  					       <small class="text-danger">{{ $errors->first('description') }}</small>
  					   </div>
  					   {!! Form::submit('Save ', ['class' => 'btn btn-info pull-right']) !!}					   
					{!! Form::close() !!}
				</div>
			  </div>
			</div>
		</div>
	</div>
@endsection