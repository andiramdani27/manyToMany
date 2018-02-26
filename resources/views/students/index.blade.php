@extends ('layouts.master')


@section('main')

<h1 class="ml-1">Ovisok</h1>
<div class="row justify-content-center">
	<ul>
		@foreach ($students as $student)


		<li>
			Tanuló neve : {{ $student->last_name }} {{ $student->first_name }}  jele: {{ $student->sign }} Életkora :{{ $student->age
			}} éves. 
			Testvérek száma : {{ $student-> siblings_num }}

		</li>

		@endforeach

	</ul>

</div>
@endsection


@section('index')

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Vezetéknév</td>
			<td>Keresztnév</td>
			<td>Jel</td>
			<td>Életkor</td>
			<td>Testvérek száma</td>

		</tr>
	</thead>
	<tbody>
		@foreach( $students as $student)

		<tr>
			<td>{{ $student->id }}</td>
			<td>{{ $student->last_name }}</td>
			<td>{{ $student->first_name }}</td>
			<td>{{ $student->sign }}</td>
			<td>{{ $student->age }}</td>
			<td>{{ $student->siblings_num }}</td>
			<td>
				<!-- delete the student (uses the destroy method DESTROY /students/{id} -->
				<!-- show the student (uses the show method found at GET /students/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('students/' . $student->id) }}">Show this Student</a>	
				
				<!-- edit this student (uses the edit method found at GET /students/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('students/' . $student->id . '/edit') }}">Edit this Student</a>
				
				
				{{--Miért a legutolsót akarja törölni?--}}
				<a class="btn btn-small btn-danger" href="{{ route('students.destroy', $student->id) }}">Óvodás törlése</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection



