@extends('layout.master')

@section('css')
    <link href="{{asset('/style/sign-in.css')}}" rel="stylesheet">

@endsection

@section('content')
    <main class="form-signin text-center">
        <form>

            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Exm:aziz">
                <label for="floatingInput">Exm:aziz</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingCPassword" placeholder="Confirm password">
                <label for="floatingCPassword">Confirm password</label>
            </div>

            <div class="checkbox mb-3">
                <a href="{{route('sign-in')}}">Sign in</a>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>

        </form>
    </main>
@endsection
