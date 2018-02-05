@include('parts/header')

    <div class="content">
        <div class="title m-b-md">
            @yield('titre')
        </div>
        @include('nav')

        @yield('content')

            </div>
        </div>
    </body>
</html>
