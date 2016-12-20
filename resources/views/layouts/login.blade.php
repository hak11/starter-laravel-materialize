<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Starter Laravel Materialize">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>Starter Kit</title>
@include('layouts.partials.meta')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link rel="stylesheet" href="{{ asset('/materialize/css/material.min.css') }}">
<link rel="stylesheet" href="{{ asset('/materialize/css/styles.css') }}">

<body>
<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            @yield('main-content')
        </div>
@include('layouts.partials.scripts')
</body>
</html>
