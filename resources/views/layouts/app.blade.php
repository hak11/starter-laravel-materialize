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
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    @include('layouts.partials.main-header')
    @include('layouts.partials.main-content-header')
</div>

    <div class="content-wrapper">

        <section class="content">
            @yield('main-content')
        </section>
    </div>

    @include('layouts.partials.main-footer')


@include('layouts.partials.scripts')
@stack('scriptsjs')
</body>
</html>
