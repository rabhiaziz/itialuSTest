@extends('layout.master')

@section('css')
@endsection

@section('content')
    @include('layout/navbar')
<main class="container">
    <form class="row g-3">

        <div class="col-12">
            <label for="exampleFormControlTextarea1" class="form-label">New note</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12 text-end">
            <label>
                <input type="checkbox" value="public"> Is public
            </label>
            <button type="submit" class="btn btn-primary">save</button>
        </div>

    </form>
    <div class="bg-light p-3 mt-1 rounded">
        <h3>Navbar example</h3>
        <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
        <a class="btn btn-sm btn-primary" href="{{route('show-note', 1)}}" role="button">Show &raquo;</a>
    </div>

    <div class="bg-light p-3 mt-1 rounded">
        <h3>Navbar example</h3>
        <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
        <a class="btn btn-sm btn-primary" href="{{route('show-note', 2)}}" role="button">Show &raquo;</a>
    </div>

</main>
@endsection
