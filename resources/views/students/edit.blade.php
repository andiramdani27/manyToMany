@extends ('layouts.master')
{{--
<nav class="navbar navbar-inverse">
	<div class="navbar-header">


		<ul class="nav navbar-nav">
			<li>
				<a href="{{ URL::to('students') }}">Összes óvodás</a>
			</li>
			<li>
				<a href="{{ URL::to('students/create') }}">Óvodás felvitele</a>
      </li>
      <li>
        <a>
				<form action="{{ route('students.destroy', $student) }}" method="post">
					{{ csrf_field() }} {{ method_field('delete') }}
					<button class="btn-link text-danger" type="submit">Óvodás törlése</button>
        </form>
      </a>
      </li> 
		</ul>
	</div>
</nav>
--}}




@section('title', "EDIT $student->first_name")


@section('edit')
{{--
@foreach

    ($student->address as $address)
    <li>
    {{$address->city}}
  </li>
 
@endforeach
</ul>

--}}
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>
    
    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $student->first_name }}</h1>

        <form action="{{ url('students', $student) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="form-group">
            <label for="name">Óvodás családneve</label>
            <input type="text" class="form-control" name="first_name" value="{{ $student->first_name }}">
          </div>
          <div class="form-group">
                <label for="name">Óvodás keresztneve</label>
                <input type="text" class="form-control" name="last_name" value="{{ $student->last_name }}">
              </div>
          <div class="form-group">
            <label for="city">Jele</label>
            <input type="text" class="form-control" name="sign" value="{{ $student->sign }}">
          </div>
          <div class="form-group"> 
            <label for="age">Életkora</label>
            <input type="text" class="form-control" name="age" value="{{ $student->age }}">
          </div>

          <div class="form-group"> 
            <label for="city">Város</label>
            <input type="text" class="form-control" name="city" value="{{ $student->address->city }}">
          </div>

          <div class="form-group"> 
            <label for="zip">Irányítószám</label>
            <input type="text" class="form-control" name="zip" value="{{ $student->address->zip }}">
          </div>

          <div class="form-group"> 
            <label for="street_name">Utca neve</label>
            <input type="text" class="form-control" name="street_name" value="{{ $student->address->street_name }}">
          </div>

          <div class="form-group"> 
            <label for="street_number">Házszám</label>
            <input type="text" class="form-control" name="street_number" value="{{ $student->address->street_number }}">
          </div>
          
          <div class="form-group"> 
            <label for="siblings_num">Testvérek száma</label>
            <input type="text" class="form-control" name="siblings_num" value="{{ $student->address->siblings_num }}">
          </div>


          
          <button type="submit" class="btn btn-primary">
            Update
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
