<!doctype html>
<html lang="en">
@include('inc.head')
<body>
<div class="container">


    <header>
        @include('inc.main')
    </header>

    <main role="main">
        @yield('content')
    </main>

    @include('inc.jsfooter')
    <footer>
        @include('inc.footer')

    </footer>
</div>
</body>
</html>
