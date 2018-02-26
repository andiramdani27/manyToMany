@extends('layouts.master') 

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
        </form></a>
      </li>
		</ul>
	</div>
</nav>
{{--}}
@section('title', "$addresses->student_id")
--}}
@section ('show')


    <div class="row justify-content-center">
      <div class="card col">

        <div class="card-block">
          <div class="row">
            <h1 class="col-11 pb-2">{{-- $addresses->student_id --}}</h1>
            <div class="col-1 d-flex justify-content-end">
                <a href="{{ route('addresses.edit', $address) }}">&nbsp; Cím szerkesztése &nbsp;<span class="fa fa-pencil" aria-hidden="true"></span></a>
                <form action="{{ route('addresses.destroy', $address) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="fa fa-trash btn-link text-danger" type="submit">&nbsp; Cím törlése &nbsp;</button>
                </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 d-flex flex-column">
              <img class="pb-3" src="{{ asset('img/gyerek.png') }}"/>
              <ul class="list-group">
                <li class="list-group-item text-muted">Óvodás azonosítója: {{ $address->student_id }}</li>
                <li class="list-group-item text-muted">Lakóhely: {{ $address->city }}</li>
                <li class="list-group-item text-muted">Irányítószám: {{ $address->zip }}</li>
                <li class="list-group-item text-muted">Utcanév: {{ $address->street_name }}</li>
                <li class="list-group-item text-muted">Házszám: {{ $address->street_number }}</li>
                <li class="list-group-item text-muted">Testvérek száma : {{ $address->siblings_num }}</li>
              </ul>
            </div>

        </div>

      </div>
    </div>
@endsection