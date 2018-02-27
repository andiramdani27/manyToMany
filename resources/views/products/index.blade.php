@extends ('layouts.master')





@section('main')

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Név</td>
			<td>Ár</td>
			<td>ÁFA</td>
			<td>Rendelt mennyiség</td>
			

		</tr>
	</thead>
	<tbody>
		@foreach( $products as $product)

		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->product_name }}</td>
			<td>{{ $product->price }}</td>
			<td>{{ $product->VAT }}</td>
			<td>{{ $product->ordered_quantity }}</td>
			
			<td>
				<!-- delete the (uses the destroy method DESTROY /products/{id} -->
				<!-- show the (uses the show method found at GET /products/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('products/' . $product->id) }}">Show this</a>	
				
				<!-- edit this (uses the edit method found at GET /products/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this</a>
				
				
				{{--Miért a legutolsót akarja törölni?--}}
				{{--  <a class="btn btn-small btn-danger" href="{{ route('products.destroy', $product->id) }}">Product törlése</a>  --}}

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection

@section('index')

<h1 class="ml-1">Products</h1>
<div class="row justify-content-center">
	<ul>
		@foreach ($products as $product)


		<li>
			Termék neve : {{ $product->product_name }} <br> 
			Ára: {{ $product->price }} <br>
			AFA :({{ $product->VAT }})% <br>
			Rendelt:mennyiség: {{ $product->ordered_quantity}}  
			<hr>
			 

		</li>

		@endforeach

	</ul>

</div>
@endsection



