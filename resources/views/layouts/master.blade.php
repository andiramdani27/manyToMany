
@include ('layouts.head')


<body>
        
        <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                        
                </div>
                <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('students') }}">Összes óvodás</a></li>
                        <li><a href="{{ URL::to('students/create') }}">Óvodás felvitele</a>
                </ul>
        </nav>
        
    <main class="container pt-4">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                 @endif
                @yield('main')
    </main>


   <div class="container">
    

   
    @yield ('form')
    @yield ('index')
    @yield ('show')
    @yield ('edit')
    @yield ('modal')


    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>