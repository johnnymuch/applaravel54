@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">CREATE</div>
				<div class="panel-body">
					<div class="row">				
						 {!! Form::open(array('route' => 'category.store','method'=>'POST')) !!}
							 <div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Name:</strong>
									{!! Form::text('name',null, array('placeholder' => 'Name','class' => 'form-control')) !!}
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Description:</strong>
									{!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 text-center">
									<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</div>
						</div>
					  {!! Form::close() !!}	
	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


