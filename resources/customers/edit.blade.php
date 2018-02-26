@extends ('layouts.master')


<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<ul class="nav navbar-nav">
			<li>
				<a href="{{ URL::to('addresses') }}">Összes cím</a>
			</li>
			<li>
				<a href="{{ URL::to('addresses/create') }}">Cím felvitele</a>
      </li>
      <li>
        <a>
				<form action="{{ route('addresses.destroy', $address) }}" method="post">
					{{ csrf_field() }} {{ method_field('delete') }}
					<button class="btn-link text-danger" type="submit">Cím törlése</button>
        </form>
      </a>
      </li>
		</ul>
	</div>
</nav>


{{-- and end with 
@section('title', "Edit $address->name" )
--}}

@section('edit')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>

    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $address->name }}</h1>

        <form action="{{ url('addresses', $address) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="form-group">
            <label for="student_id">Óvodás azonosítója</label>
            <input type="text" class="form-control" name="student_id" value="{{ $address->student_id }}">
          </div>
          <div class="form-group">
                <label for="city">Lakcím</label>
                <input type="text" class="form-control" name="city" value="{{ $address->city }}">
              </div>
          <div class="form-group">
            <label for="zip">Irányítószám</label>
            <input type="text" class="form-control" name="zip" value="{{ $address->zip }}">
          </div>
          <div class="form-group">
            <label for="street_name">Utcanév</label>
            <input type="text" class="form-control" name="street_name" value="{{ $address->street_name }}">
          </div>
          <div class="form-group">
            <label for="street_number">Házszám</label>
            <input type="text" class="form-control" name="street_number" value="{{ $address->street_number }}">
          </div>
          <div class="form-group">
            <label for="siblings_num">Testvérek száma</label>
            <input type="text" class="form-control" name="siblings_num" value="{{ $address->siblings_num }}">
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
