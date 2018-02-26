@extends ('layouts.master')



@section('main')

<h1 class="ml-1">Ovisok</h1>
<div class="row justify-content-center">
	<ul>
		@foreach ($customers as $customer)


		<li>
			Tanuló címe : {{ $customer->street_name }} {{ $customer->street_number }} Irányítószáma: {{ $customer->zip }} Lakóhely :{{ $customer->city
            }}. Testvéreinek száma {{ $customer->siblings_num }}
            
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
			<td>Vezetéknév</td>
			<td>Keresztnév</td>
			<td>Település</td>
			<td>Irányítószám</td>
			<td>Utcanév</td>
			<td>Házszám</td>
			
		</tr>
	</thead>
	<tbody>
		@foreach($customers as $key => $value)
		<tr>
			<td>{{ $value->student_id }}</td>
			<td>{{ $value->first_name }}</td>
			<td>{{ $value->last_name }}</td>	
			<td>{{ $value->city }}</td>
			<td>{{ $value->zip }}</td>
			<td>{{ $value->street_name }}</td>
			<td>{{ $value->street_number }}</td>
			<td>{{ $value->siblings_num }}</td>
			

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				

			
				<a class="btn btn-small btn-success" href="{{ URL::to('customers/' . $value->id) }}">Mutasd a vasarlot</a>

				
				<a class="btn btn-small btn-info" href="{{ URL::to('customers/' . $value->id . '/edit') }}">vasarlót módosít</a>

					   

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection



