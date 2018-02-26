@extends ('layouts.master')



@section('main')

<h1 class="ml-1">Ovisok</h1>
<div class="row justify-content-center">
	<ul>
		@foreach ($addresses as $address)


		<li>
			Tanuló címe : {{ $address->street_name }} {{ $address->street_number }} Irányítószáma: {{ $address->zip }} Lakóhely :{{ $address->city
            }}. Testvéreinek száma {{ $address->siblings_num }}
            
		</li>

        @endforeach

    </ul>
    

</div>
@endsection

@section('index') 
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Település</td>
			<td>Irányítószám</td>
			<td>Utcanév</td>
			<td>Házszám</td>
			<td>Testvérek száma</td>
		</tr>
	</thead>
	<tbody>
		@foreach($addresses as $key => $value)
		<tr>
			<td>{{ $value->student_id }}</td>
			<td>{{ $value->city }}</td>
			<td>{{ $value->zip }}</td>
			<td>{{ $value->street_name }}</td>
			<td>{{ $value->street_number }}</td>
			<td>{{ $value->siblings_num }}</td>
			

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				

			
				<a class="btn btn-small btn-success" href="{{ URL::to('addresses/' . $value->id) }}">Mutasd a címet</a>

				
				<a class="btn btn-small btn-info" href="{{ URL::to('addresses/' . $value->id . '/edit') }}">Címet módosít</a>

					   

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection



