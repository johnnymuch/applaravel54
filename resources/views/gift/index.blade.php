@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                  <div class="col-md-6"><h4>Welcome Gift</h4></div>
                  <div class="col-md-6 pull-right"><a href="{{ route('create') }}" class="btn btn-md btn-info pull-right"><i class="glyphicon glyphicon-plus"></i> Create</a></div>
                </div>                 
                <div class="panel-body">
                	<table class="table-condensed table">
                		<tr>
               				<th>ID</th>
               				<th>Name</th>
               				<th>Category</th>
               				<th>Photo</th>
               				<th>Status</th>
               			</tr>

               			<?php $i = 1; ?>
               			@foreach($gifts as $gift)
               			<tr>               			
					      	<td>{{ $i++ }}</td>
					      	<td>{{ $gift -> name }}</td>
					      	<td>{{ $gift -> category }}</td>					 
					      	<td>{{ $gift -> photo }}</td>	
					      	<td>
					      		<a href="" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"> Edit</i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-edit"> Delete</i></a>
					      	</td>				 
						  </tr>	
						@endforeach	


                	    </table>             		
               		 {!! $gifts->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


