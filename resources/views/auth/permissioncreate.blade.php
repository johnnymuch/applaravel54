@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="panel-default">
				<div class="panel-heading">
					<h3>Permission</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(['method' => 'POST', 'class' => 'form-horizontal']) !!}
						<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
					       {!! Form::label('inputname', 'Input label') !!}
					       {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
					       <small class="text-danger">{{ $errors->first('inputname') }}</small>
					   </div>					   
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection