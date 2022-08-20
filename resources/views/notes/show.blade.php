@extends('layout.master')

@section('css')
@endsection

@section('content')
    @include('layout/navbar')
    <main class="container">

        <div class="bg-light p-3 mt-1 rounded">
            <h3>user 0</h3>
            <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
        </div>

        <form class="row g-3">

            <div class="col-12">
                <label for="exampleFormControlTextarea1" class="form-label">New comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">post</button>
            </div>

        </form>

        <div class="col-md-12 mt-3">
            <div class="h-100 p-2 bg-light border rounded-3">
                <h3>user 1</h3>
                <p>Or, keep it light and as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            </div>

            <div class="h-100 p-2 mt-2 bg-light border rounded-3">
                <h3>user 2</h3>
                <p>Or, keep it light ML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            </div>

            <div class="h-100 p-2 mt-2 bg-light border rounded-3">
                <h3>user 3</h3>
                <p>Or, keep it light and as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            </div>

            <div class="h-100 p-2 mt-2 bg-light border rounded-3">
                <h3>user 4</h3>
                <p>Or, keep it light and as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            </div>
        </div>


    </main>
@endsection
