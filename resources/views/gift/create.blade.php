@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Welcome Gift
					</div>
					<div class="panel-body">
						<div class="row">
							 {!! Form::open(array('route' => 'gift.store','method'=>'POST')) !!}
							 <div class="col-xs-10 col-sm-10 col-md-offset-1">
								<div class="form-group">
									<label for="">Name</label>
									{!! Form::text('name',null, array('placeholder' => 'Name','class' => 'form-control')) !!}
								</div>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-offset-1">
								<div class="form-group">
									<label for="">Category</label>
									{!! Form::text('category',null, array('placeholder' => 'Category','class' => 'form-control')) !!}
								</div>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-offset-1">
								<div class="form-group">
									<label for="">Photo</label>
									{!! Form::file('photo',null, array('placeholder' => 'Photo','class' => 'form-control')) !!}
								</div>
							</div>
							 {!! Form::close() !!}	
						</div>
							<div class="col-xs-10 col-sm-10 col-md-offset-1">
									<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection