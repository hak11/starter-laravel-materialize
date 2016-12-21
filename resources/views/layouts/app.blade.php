<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Starter Laravel Materialize">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>Starter Kit</title>
@include('layouts.partials.meta')
@include('layouts.partials.htmlheader')
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
    @include('layouts.partials.main-header')
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
            @yield('main-content')
        </div>
    </main>
    @include('layouts.partials.main-footer')

</div>
@include('layouts.partials.scripts')
</body>

</html>
