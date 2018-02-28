@extends ('layouts.master') 
@section('index')
<h1 class="ml-1">Rendelések</h1>
<div class="row justify-content-center">
	<ul>
		@foreach ($orders as $order)

		<li>
			Rendelés azonosító: {{$order->id}} <br> {{ $order->customer_id}}. számú vevő : {{ $order->product_id}} számú termékből
			: {{ $order->ordered_quantity}} darabot rendelt <br>
			Ekkor : {{ $order->created_at}}
			
			<hr>
		</li>


		@endforeach
	</ul>
</div>
@endsection