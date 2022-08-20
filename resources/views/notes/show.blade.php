@extends('layout.master')

@section('css')
@endsection

@section('content')
    @include('layout/navbar')
    <main class="container">

        <div class="bg-light p-3 mt-1 rounded">
            <h3>{{$note->user->name}}</h3>
            <p class="lead">{{$note->note}}</p>
        </div>

        <form class="row g-3" action="{{route('store-comment', $note->hashid)}}" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <label for="exampleFormControlTextarea1" class="form-label">New comment</label>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </form>

        <div class="col-md-12 mt-3">
            @foreach($note->comments as $comment)
            <div class="h-100 p-2 mt-2 bg-light border rounded-3">
                <h3>{{$comment->user->name}}</h3>
                <h5>Created at {{$comment->created_at}}</h5>
                <p>{{$comment->comment}}</p>
            </div>
            @endforeach
        </div>
    </main>
@endsection
