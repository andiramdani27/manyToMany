@extends('layouts.master') 


@section('title', "$student->first_name")

@section ('show')


    <div class="row justify-content-center">
      <div class="card col">

        <div class="card-block">
          <div class="row">
            <h1 class="col-11 pb-2">{{ $student->first_name }}</h1>
            <div class="col-1 d-flex justify-content-end">
                <a href="{{ route('students.edit', $student) }}">&nbsp; Óvodás szerkesztése &nbsp;<span class="fa fa-pencil" aria-hidden="true"></span></a>
                <form action="{{ route('students.destroy', $student) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="fa fa-trash btn-link text-danger" type="submit">&nbsp; Óvodás törlése &nbsp;</button>
                </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 d-flex flex-column">
              <img class="pb-3" src="{{ asset('img/gyerek.png') }}"/>
              <ul class="list-group">
                <li class="list-group-item text-muted">Vezetéknév: {{ $student->last_name }}</li>
                <li class="list-group-item text-muted">Keresztnév: {{ $student->first_name }}</li>
                <li class="list-group-item text-muted">Jel: {{ $student->sign }}</li>
                <li class="list-group-item text-muted">Életkor: {{ $student->age }}</li>
              </ul>
            </div>

        </div>

      </div>
    </div>
@endsection