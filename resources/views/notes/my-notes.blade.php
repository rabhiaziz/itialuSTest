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

        <div class="table-responsive mt-5">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Note</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1,001</td>
                    <td>random</td>
                    <td>data</td>
                    <td>show</td>
                </tr>

                </tbody>
            </table>
        </div>
    </main>
@endsection
