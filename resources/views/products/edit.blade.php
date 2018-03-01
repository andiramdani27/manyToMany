@extends ('layouts.master') 



@section('title', "EDIT $product->product_name") 
@section('edit') {{-- @foreach ($product->customers as $customers)
<li>
  {{$customers->price}}
</li>
@endforeach
</ul>
--}}

{{--  <div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>
    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $product->product_name }}</h1>
        <form action="{{ url('products', $product) }}" method="POST">
          {{ csrf_field() }} {{ method_field('patch') }}
          <div class="form-group">
            <label for="product_name">neve</label>
            <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
          </div>
          <div class="form-group">
            <label for="price">Ár</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
          </div>
          <div class="form-group">
            <label for="VAT">ÁFA</label>
            <input type="text" class="form-control" name="VAT" value="{{ $product->VAT }}">
          </div>
          <div class="form-group">
            <label for="ordered_quantity">Rendelt mennyiség</label>
            <input type="text" class="form-control" name="ordered_quantity" value="{{ $product->ordered_quantity }}">
          </div>  --}}
          
          {{--  <div class="form-group">
            <label for="zip">Irányítószám</label>
            <input type="text" class="form-control" name="zip" value="{{ $product->customers->zip }}">
          </div>
          <div class="form-group">
            <label for="street_name">Utca neve</label>
            <input type="text" class="form-control" name="street_name" value="{{ $product->customers->street_name }}">
          </div>
          <div class="form-group">
            <label for="street_number">Házszám</label>
            <input type="text" class="form-control" name="street_number" value="{{ $product->customers->street_number }}">
          </div>  --}}


          {{--  <button type="submit" class="btn btn-primary">
            Update
          </button>
        </form>
      </div>
    </div>
  </div>
</div>  --}}


<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>
    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $product->product_name }}</h1>
        <form action="{{ url('products', $product) }}" method="post">
          {{ csrf_field() }} {{ method_field('patch') }}
          <div class="form-group">
            <label for="product_name">Name</label>
            <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
          </div>
          <div class="form-group">
            <label for="price">Ár</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
          </div>
          {{--  <div class="form-group">
            <label for="VAT">Áfa</label>
            <input type="text" class="form-control" name="VAT" value="{{ $product->VAT }}">
          </div>  --}}
          <div >
              <label for="VAT">ÁFA</label><br>
              
  
              <input type="radio" name="VAT" value="5"> 5<br>
              <input type="radio" name="VAT" value="18"> 18%<br>
              <input type="radio" name="VAT" value="27"> 27% <br>
  
              @if($errors->has('VAT'))
                  <span class="help-block">{{ $errors->first('VAT') }}</span>
              @endif
          </div>
          {{--  <div class="form-group">
            <label for="ordered_quantity">rendelt mennyiség</label>
            <input type="text" class="form-control" name="ordered_quantity" value="{{ $product->ordered_quantity }}">
          </div>  --}}
          <h3 class='h4 pb-2'>Vásárlók</h3>
          <div class="row form-group">
            @foreach ($customers as $id => $customer)
            <div class="form-check col-md-6">
              <label class="form-check-label" for="{{ $customer }}">
                  <input type="checkbox" name="customers[]" value="{{ $id }}"
                    {{ $product->customers()->allRelatedIds()->contains($id) ? "checked" : "" }}>
                  {{ $customer }} 
                </label>
            </div>
            @endforeach
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