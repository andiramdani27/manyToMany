@extends ('layouts.master')




@section ('form')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Customer felvitele</h1>

    <form class="card" action="/customers" method="post">
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="customer_id">Customer azonosítója</label>
          <input type="text" class="form-control" name="customer_id" placeholder="Vásárló">
        </div>

        <div class="form-group">
          <label for="first_name">Keresztnév</label>
          <input type="text" class="form-control" name="first_name" placeholder="Keresztnév">
        </div>

        <div class="form-group">
          <label for="last_name">Családnév</label>
          <input type="text" class="form-control" name="last_name" placeholder="Családnév">
        </div>
        <div class="form-group">
          <label for="city ">Lakóhely</label>
          <input type="text" class="form-control" name="city" placeholder="Lakóhely">
        </div>
        <div class="form-group">
          <label for="zip">Irányítószám</label>
          <input type="text" class="form-control" name="zip" placeholder="Irányítószám">
        </div>
        <div class="form-group">
          <label for="street_name">Utcanév</label>
          <input type="text" class="form-control" name="street_name" placeholder="utcanév">
        </div>
        <div class="form-group">
          <label for="street_number">Házszám</label>
          <input type="text" class="form-control" name="street_number" placeholder="Házszám">
        </div>
        
        
        
        
        
        
        <button type="submit" class="btn btn-primary">
          Felvisz
        </button>
      </div>
    </form>
  </div>
</div>
@endsection