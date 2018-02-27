@extends('layouts.master') 


@section('title', "$product->product_name")

@section ('show')


    <div class="row justify-content-center">
      <div class="card col">

        <div class="card-block">
          <div class="row">
            <h1 class="col-11 pb-2">{{ $product->product_name }}</h1>
            <div class="col-1 d-flex justify-content-end">
                <a href="{{ route('products.edit', $product) }}">&nbsp; Termék szerkesztése &nbsp;<span class="fa fa-pencil" aria-hidden="true"></span></a>
                <form action="{{ route('products.destroy', $product) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="fa fa-trash btn-link text-danger" type="submit">&nbsp; Termék törlése &nbsp;</button>
                </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 d-flex flex-column">
             
              <ul class="list-group">
                <li class="list-group-item text-muted">Terméknév: {{ $product->product_name }}</li>
                <li class="list-group-item text-muted">Ár: {{ $product->price }}</li>
                <li class="list-group-item text-muted">ÁFA: {{ $product->VAT }}</li>
                {{--  <li class="list-group-item text-muted">Rendelt mennyiség: {{ $product->ordered_quantity }}</li>  --}}
                @foreach($product -> customers as $customer)
                <li class="list-group-item text-muted">name: {{ $customer->last_name }} {{$customer->first_name }}</li>
                <li class="list-group-item text-muted">telefonszám: {{$customer->phone_number }} </li>
                @endforeach
              </ul>
            </div>

        </div>

      </div>
    </div>
@endsection