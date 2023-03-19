<!DOCTYPE html>
<html lang="en">

@include('web.includes.header')

<body>

    @include('web.includes.navbar')

    @yield('slider')

    <!-- start sale -->
    <div class="sale">
        <div class="container">

            @yield('content')

            @include('web.includes.footer')
</body>

</html>
