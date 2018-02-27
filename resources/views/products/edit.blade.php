@extends ('layouts.master') {{--
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
          <form action="{{ route('students.destroy', $product) }}" method="post">
            {{ csrf_field() }} {{ method_field('delete') }}
            <button class="btn-link text-danger" type="submit">Óvodás törlése</button>
          </form>
        </a>
      </li>
    </ul>
  </div>
</nav>
--}} 
@section('title', "EDIT $product->product_name") 
@section('edit') {{-- @foreach ($product->customers as $customers)
<li>
  {{$customers->city}}
</li>
@endforeach
</ul>
--}}
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>
    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $product->product_name }}</h1>
        <form action="{{ url('students', $product) }}" method="POST">
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
          </div>
          <div class="form-group">
            <label for="city">Város</label>
            <input type="text" class="form-control" name="city" value="{{ $product->customers->city }}">
          </div>
          <div class="form-group">
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
          </div>


          <button type="submit" class="btn btn-primary">
            Update
          </button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>
    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $product->name }}</h1>
        <form action="{{ url('products', $product) }}" method="post">
          {{ csrf_field() }} {{ method_field('patch') }}
          <div class="form-group">
            <label for="product_name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->product_name }}">
          </div>
          <div class="form-group">
            <label for="city">Farm City</label>
            <input type="text" class="form-control" name="city" value="{{ $product->customers->city }}">
          </div>
          <div class="form-group">
            <label for="website">Farm Website</label>
            <input type="text" class="form-control" name="website" value="{{ $product->customers->zip }}">
          </div>
          <h3 class='h5 pb-2'>Markets</h3>
          <div class="row form-group">
            @foreach (customers as $id => $customer)
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