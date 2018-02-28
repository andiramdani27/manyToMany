@extends ('layouts.master')

{{--@include ('students.submitstudent')--}}

@section ('form')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Termék felvitele</h1>

    <form class="card" action="/products" method="post">
      @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            Please fix the following errors
        </div>
       @endif
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
          <label for="product_name">Terméknév</label>
          <input type="text" class="form-control" id="product_name" name="product_name" required placeholder="Termék neve" value="{{ old('product_name') }}">
          @if($errors->has('product_name'))
              <span class="help-block">{{ $errors->first('product_name') }}</span>
          @endif
      </div>
      <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
          <label for="price">ÁR</label>
          <input type="text" class="form-control" id="price" name="price" required placeholder="Termék ára" value="{{ old('price') }}">
          @if($errors->has('price'))
              <span class="help-block">{{ $errors->first('price') }}</span>
          @endif
      </div>
      <div class="form-group{{ $errors->has('VAT') ? ' has-error' : '' }}">
          <label for="VAT">ÁFA</label>
          <input type="text" class="form-control" id="VAT" name="VAT" required placeholder="ÁFA" value="{{ old('VAT') }}"> 
          @if($errors->has('VAT'))
              <span class="help-block">{{ $errors->first('VAT') }}</span>
          @endif
      </div>
      <div class="form-group{{ $errors->has('ordered_quantity') ? ' has-error' : '' }}">
          <label for="ordered_quantity">Rendelt mennyiség</label>
          <input type="text" class="form-control" id="ordered_quantity" name="ordered_quantity" required placeholder="Rendelt mennyiség" value="{{ old('ordered_quantity') }}">
          @if($errors->has('ordered_quantity'))
              <span class="help-block">{{ $errors->first('ordered_quantity') }}</span>
          @endif
      </div>

        <button type="submit" class="btn btn-primary">
          Felvisz
        </button>
      </div>
    </form>
  </div>
</div>

@include ('layouts.errors')

@endsection