@extends('layouts.master') 


@section('title', "$customer->first_name")

@section ('show')


    <div class="row justify-content-center">
      <div class="card col">

        <div class="card-block">
          <div class="row">
            <h1 class="col-11 pb-2">{{$customer->first_name}}</h1>
            <div class="col-1 d-flex justify-content-end">
                <a href="{{ route('customers.edit', $customer) }}">&nbsp; Vásárló szerkesztése &nbsp;<span class="fa fa-pencil" aria-hidden="true"></span></a>
                <form action="{{ route('customers.destroy', $customer) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="fa fa-trash btn-link text-danger" type="submit">&nbsp; Vásárló törlése &nbsp;</button>
                </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 d-flex flex-column">
  
              <ul class="list-group">
                <li class="list-group-item text-muted">Vásárló azonosítója: {{ $customer->id }}</li>
                <li class="list-group-item text-muted">Lakóhely: {{ $customer->city }}</li>
                <li class="list-group-item text-muted">Irányítószám: {{ $customer->zip }}</li>
                <li class="list-group-item text-muted">Utcanév: {{ $customer->street_name }}</li>
                <li class="list-group-item text-muted">Házszám: {{ $customer->street_number }}</li>
                <li class="list-group-item text-muted">Telefonszám : {{ $customer->phone_number }}</li>
                <li class="list-group-item text-muted">Email : {{ $customer->email }}</li>
                @foreach ($customer->products as $product)
                <li class="list-group-item text-muted">Rendelt termék : {{ $product->product_name }}</li>
                <li class="list-group-item text-muted">Ár : {{ $product->price }} forint</li>
                <li class="list-group-item text-muted">ÁFA : {{ $product->VAT }}</li>
                {{--  <li class="list-group-item text-muted">Rendelt mennyiség : {{ $product->ordered_quantity }}</li>  --}}
                @endforeach
                
              </ul>
            </div>

        </div>

      </div>
    </div>
@endsection