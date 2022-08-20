@section('css')
    <style>
        body {
            min-height: 75rem;
        }
    </style>
@endsection
<nav class="navbar navbar-expand-md navbar-light bg-info mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ItialuS test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('my-notes')}}">My Notes</a>
                </li>
            </ul>
            <form class="d-flex" action="{{route('sign-out')}}" method="get">
                @csrf
                <button class="btn btn-outline-primary" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
