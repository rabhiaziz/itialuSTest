@extends('layout.master')

@section('css')
    <link href="{{asset('/style/sign-in.css')}}" rel="stylesheet">

@endsection


@section('content')
    <main class="form-signin text-center">
        <form action="{{route('signIn')}}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <a href="{{route('register')}}">Register</a>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        </form>
    </main>
@endsection
