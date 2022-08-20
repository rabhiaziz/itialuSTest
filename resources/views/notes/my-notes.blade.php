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


        <!--form-- class="row g-3">

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

        </form-->

        <div class="table-responsive mt-5">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Note</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{$note->hashid}}</td>
                        <td>{{$note->note}}</td>
                        <td>@if($note->is_public)
                                <span class="badge rounded-pill bg-danger">public note</span>
                            @else
                                <span class="badge rounded-pill bg-danger">privet note</span>
                            @endif</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{route('show-note', $note->hashid)}}" role="button">Show &raquo;</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
