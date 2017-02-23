@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                  <div class="col-md-6"><h4>Category</h4></div>
                  <div class="col-md-6 pull-right"><a href="{{ route('category.create') }}" class="btn btn-md btn-info pull-right"><i class="glyphicon glyphicon-plus"></i> Create</a></div>
                </div>
                 
                <div class="panel-body">
               		<table class="table table-striped" id="myTable">
               			<tr>
               				<th>ID</th>
               				<th>Name</th>
               				<th width="68%">Decription</th>
               				<th>Status</th>
               			</tr>
               			<tr>
                       <?php $i = 1; ?>
               				@foreach ($category as $cate)                      
      						      <tr>
      						      	<td>{{ $i++ }}</td>
      						      	<td>{{ $cate -> name }}</td>
      						      	<td>{{ $cate -> description }}</td>
      						      	<td>						      	
      						      		<a href="{{ route('category.edit',$cate->id) }}" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"> Edit</i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $cate->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}                        
      						      </tr>
							     @endforeach 
               	
               		</table>
                  {!! $category->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


