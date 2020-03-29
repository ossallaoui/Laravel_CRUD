@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3>Laravel 6 CRUD Application from Scratch</h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
			</div>
		</div>
	</div>

	@if($message = Session::get('success'))

		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th> No </th>
			<th> Name </th>
			<th> Detail </th>
			<th> Action </th>
		</tr>
		@foreach($products as $key => $product)
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->detail }}</td>
				<td> 
						<form action="{{ route('products.create', $product->id) }}" method="POST">
							<a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
							<a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Edit</a>
							@csrf
							@method('DELETE')
						</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection