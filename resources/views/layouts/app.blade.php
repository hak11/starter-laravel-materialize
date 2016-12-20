<!DOCTYPE html>
<html lang="en">
<title>Starter Kit</title>
@include('layouts.partials.meta')
@include('layouts.partials.htmlheader')

<body class="skin-green sidebar-mini sidebar-collapse">
<div class="wrapper">

    @include('layouts.partials.main-header')

    @include('layouts.partials.main-menu')

    <div class="content-wrapper">

        @include('layouts.partials.main-content-header')

        <section class="content">
            @yield('main-content')
        </section>
    </div>

    @include('layouts.partials.main-footer')

</div>

@include('layouts.partials.scripts')
@stack('scriptsjs')
</body>
</html>
