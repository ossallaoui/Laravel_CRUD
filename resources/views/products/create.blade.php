@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3>Add New Product</h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('products.index') }}">Back To Product</a>
			</div>
		</div>
	</div>

	<form action="{{ route('products.store') }}" method="POST">
			@csrf
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<strong>Name:</strong>
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
				</div>

				<div class="col-lg-12">
					<div class="form-group">
						<strong>Detail:</strong>
						<textarea name="detail" placeholder="detail" class="form-control">
							
						</textarea>
					</div>
				</div>
				<div class="col-lg-12">
					
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</div>
	</form>
@endsection