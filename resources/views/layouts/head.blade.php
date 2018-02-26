<!DOCTYPE html>
<html lang="en">
{{--  <html lang="{{ app()->getLocale() }}">  --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    {{--  Laraveles:  --}}
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}">  --}}

    {{--  Token ajaxos:  --}}
    <meta name="_token" content="{{ csrf_token() }}" />

    {{--  Title  --}}
    {{--  <title>{{ config('app.name', 'Laravel') }}</title>  --}}
    <title>@yield ('title')</title>
    
    <!-- Load Font-awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Load Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{--  <link rel="stylesheet" href="/public/css/main.css"  type="text/css">  --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- ajax betöltése -->
    <!-- ide mehet ami nem kell                                                    -->
    <script src="{{asset('js/ajax.js')}}"></script> 
    
</head>