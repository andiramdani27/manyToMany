@extends ('layouts.master') 
@section('main')
<h1 class="ml-1">Vásárlók</h1>
<div class="row justify-content-center">
	<ul>
        {{--  @foreach ($orders->customer as $customer)  --}}
        @foreach ($orders as $order)
        {{--  @foreach ($order->customer as $customer)  --}}
        {{--  @foreach ($customers as $customer)  --}}
        

        <li>
			{{ $order->id}}
			
        </li>
		{{--  <li>
			{{ $customer->last_name }} {{ $customer->first_name }}
			<hr style="color:blue;"> Vásárló címe : <br> Lakóhely :{{ $customer->city }}, {{ $customer->street_name }} {{ $customer->street_number }} <br>Email:
			{{ $customer->email }} <br>Telefon : {{ $customer->phone_number }}
			{{ $customer->products->product_name }}
			<br>
			<hr>
        </li>  --}}
        
{{--  
        <li>
			{{ $order->id }} {{ $customer->first_name }} 
			<hr style="color:blue;"> Vásárló címe : <br> Lakóhely :{{ $customer->city }}, {{ $customer->street_name }} {{ $customer->street_number }} <br>Email:
			{{ $customer->email }} <br>Telefon : {{ $customer->phone_number }}
			{{ $customer->products->product_name }}
			<br>
			<hr>
		</li>  --}}
        {{--  @endforeach  --}}
        @endforeach
	</ul>

</div>
@endsection