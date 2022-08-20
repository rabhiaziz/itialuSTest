@extends('layout.master')

@section('css')
@endsection

@section('content')
    @include('layout/navbar')
<main class="container">
    <form class="row g-3" action="{{route('store-note')}}" method="post">
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
            <label for="exampleFormControlTextarea1" class="form-label">New note</label>
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12 text-end">
            <label>
                <input type="checkbox" name="is_public"> Is public
            </label>
            <button type="submit" class="btn btn-primary">save</button>
        </div>

    </form>

    @if($notes)
        @foreach($notes as $note)
            @if($note->is_public)
            <div class=" p-3 mt-1 rounded @if($note->user_id === Auth::user()->id) bg-info @else bg-light @endif">
                <h3>{{$note->user->name}}</h3>
                <span>created at: {{$note->created_at}}</span>
                @if($note->is_public)
                    <span class="badge rounded-pill bg-danger">public note</span>
                @else
                    <span class="badge rounded-pill bg-danger">privet note</span>
                @endif
                <p class="lead">{{$note->note}}</p>
                <a class="btn btn-sm btn-primary" href="{{route('show-note', $note->hashid)}}" role="button">Show &raquo;</a>
            </div>
            @elseif(!$note->is_public && $note->user_id === Auth::user()->id)
                <div class=" p-3 mt-1 rounded @if($note->user_id === Auth::user()->id) bg-info @else bg-light @endif">
                    <h3>{{$note->user->name}}</h3>
                    <span>created at: {{$note->created_at}}</span>
                    @if($note->is_public)
                        <span class="badge rounded-pill bg-danger">public note</span>
                    @else
                        <span class="badge rounded-pill bg-danger">privet note</span>
                    @endif
                    <p class="lead">{{$note->note}}</p>
                    <a class="btn btn-sm btn-primary" href="{{route('show-note', $note->hashid)}}" role="button">Show &raquo;</a>
                </div>
            @endif
        @endforeach
    @endif


</main>
@endsection
