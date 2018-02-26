@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a student</h1>
            <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name">Családnév</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="Családnév" value="{{ old('first_name') }}">
                    @if($errors->has('first_name'))
                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="last_name">Keresztnév</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Keresztnév" value="{{ old('last_name') }}">
                    @if($errors->has('last_name'))
                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('sign') ? ' has-error' : '' }}">
                    <label for="sign">Jel</label>
                    <input type="text" class="form-control" id="sign" name="sign" required placeholder="Jel" value="{{ old('sign') }}"> 
                    @if($errors->has('sign'))
                        <span class="help-block">{{ $errors->first('sign') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                    <label for="age">Életkor</label>
                    <input type="text" class="form-control" id="age" name="age" required placeholder="Életkor" value="{{ old('age') }}">
                    @if($errors->has('age'))
                        <span class="help-block">{{ $errors->first('age') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    <label for="city">Lakóhely</label>
                    <input type="text" class="form-control" id="city" name="city" required placeholder="Lakóhely" value="{{ old('city') }}">
                    @if($errors->has('city'))
                        <span class="help-block">{{ $errors->first('city') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                    <label for="zip">Irányítószám</label>
                    <input type="text" class="form-control" id="zip" name="zip" required placeholder="Irányítószám" value="{{ old('zip') }}">
                    @if($errors->has('zip'))
                        <span class="help-block">{{ $errors->first('zip') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('street_name') ? ' has-error' : '' }}">
                    <label for="street_name">Életkor</label>
                    <input type="text" class="form-control" id="street_name" name="street_name" required placeholder="Utcanév" value="{{ old('street_name') }}">
                    @if($errors->has('street_name'))
                        <span class="help-block">{{ $errors->first('street_name') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('street_number') ? ' has-error' : '' }}">
                    <label for="street_number">Életkor</label>
                    <input type="text" class="form-control" id="street_number" name="street_number" required placeholder="Házszám" value="{{ old('street_number') }}">
                    @if($errors->has('street_number'))
                        <span class="help-block">{{ $errors->first('street_number') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('siblings_num') ? ' has-error' : '' }}">
                    <label for="siblings_num">Testvérek száma</label>
                    <input type="text" class="form-control" id="siblings_num" name="city" required placeholder="Lakóhely" value="{{ old('siblings_num') }}">
                    @if($errors->has('siblings_num'))
                        <span class="help-block">{{ $errors->first('siblings_num') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
