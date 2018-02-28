@include ('layouts.head')
<body>
        <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('customers') }}">Összes Vásárló</a></li>
                        <li><a href="{{ URL::to('customers/create') }}">Vásárló felvitele</a>
                                <li>
                                        <a href="{{ URL::to('products') }}">Összes Termék</a>
                                </li>
                                <li>
                                        <a href="{{ URL::to('products/create') }}">Termék felvitele</a>
                                </li>
                                <li>
                                        <a href="{{ URL::to('orders/create') }}">Rendelés létrehozása</a>
                                </li>
                                <li>
                                        <a href="{{ URL::to('orders/index') }}">Rendelések </a>
                                </li>
                              
                </ul>
        </nav>
        <main class="container pt-4">
                @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status') }}
                </div>
                @endif @yield('main')
        </main>
        <div class="container">
                @yield ('form') @yield ('index') @yield ('show') @yield ('edit') @yield ('modal')
        </div>
        <footer>
                Tanulás és szórakozás céljából létrehozta : Bazs
        </footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
</body>
</html>