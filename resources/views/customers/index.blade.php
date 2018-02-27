@extends ('layouts.master') 
@section('main')
<h1 class="ml-1">Vásárlók</h1>
<div class="row justify-content-center">
	<ul>
		@foreach ($customers as $customer)

		<li>
			{{ $customer->last_name }} {{ $customer->first_name }}
			<hr style="color:blue;"> Vásárló címe : <br> Lakóhely :{{ $customer->city }}, {{ $customer->street_name }} {{ $customer->street_number }} <br>Email:
			{{ $customer->email }} <br>Telefon : {{ $customer->phone_number }}
			{{--  {{ $customer->products->product_name }}  --}}
			<br>
			<hr>
		</li>
		@endforeach
	</ul>

</div>
@endsection
 
@section('index') @if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Vezetéknév</td>
			<td>Keresztnév</td>
			<td>Település</td>
			<td>Irányítószám</td>
			<td>Utcanév</td>
			<td>Házszám</td>
			<td>Email</td>
			<td>Telefon</td>
	
		</tr>
	</thead>
	<tbody>
		@foreach($customers as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->first_name }}</td>
			<td>{{ $value->last_name }}</td>
			<td>{{ $value->city }}</td>
			<td>{{ $value->zip }}</td>
			<td>{{ $value->street_name }}</td>
			<td>{{ $value->street_number }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->phone_number }}</td>
		
			<td>
				<a class="btn btn-small btn-success" href="{{ URL::to('customers/' . $value->id) }}">Mutasd a vasarlot</a>

				<a class="btn btn-small btn-info" href="{{ URL::to('customers/' . $value->id . '/edit') }}">Vásárlót módosít</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
 
@section('modal')

<div class="grid">
	<ul>
		@foreach ($customers as $customer)

		<li>
			<div class=inner_grid>
			{{ $customer->last_name }} {{ $customer->first_name }}
			<hr style="color:blue;"> Vásárló címe : <br> Lakóhely :{{ $customer->city }}, {{ $customer->street_name }} {{ $customer->street_number }} <br>Email:
			{{ $customer->email }} <br>Telefon : {{ $customer->phone_number }} <br>
			
			@foreach ($customer->products as $product)
			Termék : {{ $product->product_name }} ,
			Ár : {{ $product->price }} forint , 
			ÁFA : {{ $product->VAT }} ,
			{{--  Rendelt mennyiség : {{ $product->ordered_quantity }} <br>  --}}
			@endforeach

			<br>
			<hr>
			</div>
		</li>
		@endforeach
	</ul>

</div>
@endsection