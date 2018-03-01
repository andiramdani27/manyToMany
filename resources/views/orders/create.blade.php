{{-- 
@extends ('layouts.master') 
@section ('form')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Vásárló felvitele</h1>
    <form class="card" action="/customers" method="post">
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="first_name">Keresztnév</label>
          <input type="text" class="form-control" name="first_name" placeholder="Keresztnév">
        </div>
        <div class="form-group">
          <label for="last_name">Családnév</label>
          <input type="text" class="form-control" name="last_name" placeholder="Családnév">
        </div>
        <div class="form-group">
          <label for="product_name">Terméknév</label>
          <input type="text" class="form-control" name="product_name" placeholder="Terméknév">
        </div>

        <div class="form-group">
          <label for="ordered_quantity">Ár</label>
          <input type="text" class="form-control" name="ordered_quantity" placeholder="Termék mennyisége">
        </div>

        <button type="submit" class="btn btn-primary">
          Felvisz
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
 --}} {{-- 
@extends ('layouts.master') 
@section('title', "Order") 
@section('main')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Rendelés</h1>
    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1"></h1>
        <form action="/orders" method="post" id="orderform">
          {{ csrf_field() }} {{ method_field('patch') }}

          <h3 class='h5 pb-2'>Rendelések</h3>
          <div class="row form-group">
            @foreach ($customers as $id => $customer)
            <div class="form-check col-md-6">
              <label class="form-check-label" for="{{ $customer }}">
                  <input type="checkbox" name="customers[]" value="{{ $id }}"
                    {{ $customer->products()->allRelatedIds()->contains($id) ? "checked" : "" }}>
                  {{ $customer->last_name  }} 
                </label>
            </div>
            @endforeach
          </div>
          <div class="row form-group">
            @foreach ($products as $id => $product)
            <div class="form-check col-md-6">
              <label class="form-check-label" for="{{ $product }}">
                  <input type="checkbox" name="products[]" value="{{ $id }}"
                    {{ $product->customers()->allRelatedIds()->contains($id) ? "checked" : "" }}>
                  {{ $product->product_name }} 
                </label>
            </div>
            @endforeach
          </div>
          <div class="form-group">
            <label for="ordered_quantity">rendelt mennyiség</label>
            <input type="number" class="form-control" name="ordered_quantity" </div>
            <button type="submit" class="btn btn-primary">
            Update
          </button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
 --}} 
@extends ('layouts.master') 
@section('title', "Order") 
@section('main')

  {{--  <h1>Products</h1>
  <div >
    <ul>
      @foreach ($products as $product)

      <li>
        Termék neve : {{ $product->product_name }} <br> ID : {{ $product->id }} <br> Ára: {{ $product->price }} -, forint
        <br>

        <hr>

      </li>
      @endforeach
    </ul>
  </div>  --}}

  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="h4 text-uppercase">Rendelés</h1>
      <div class="card">
        <div class="card-block">
          <h1 class="h3 pb-1"></h1>
          <form action="/orders" method="post" id="orderform">
            {{ csrf_field() }}

            <h3 class='h5 pb-2'>Vásárlók</h3>
            <div class="row form-group">
              @foreach ($customers as $id => $customer)
              <div class="form-check col-md-6">
                <label class="form-check-label" for="{{ 'customer_id' }}">
                  <input type="checkbox" name="customer_id" value="{{ $customer->id }}">
                   
                  {{ $customer->last_name  }}  {{ $customer->first_name  }}  
                </label>
              </div>
              @endforeach
            </div>

            

            <div class="row form-group">
              @foreach ($products as $id => $product)
              <div class="form-check col-md-6">
                <label class="form-check-label" for="{{ '$product_id' }}">
                  <input type="checkbox" name="product_id" value="{{ $product->id }}">
                
                  ID:{{ $product->id }} {{ $product->product_name }} 
                </label>
              </div>
              @endforeach
            </div>

            <div>
              <label for="ordered_quantity">Mennyiség</label>
              <select name="ordered_quantity" form="orderform">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>

             

            {{--  <div>
              <label for="product_id">Product_id</label>
              <select name="product_id" form="orderform">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
            </div>    --}}

            {{--  <div class="form-group">
              <label for="ordered_quantity">rendelt mennyiség</label>
              <input type="text" class="form-control" name="ordered_quantity" >   
            </div>  --}}
            <button type="submit" class="btn btn-primary">
            Create
          </button>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection