@extends('adminlte::page')

@section('content')

<h1 class="text-center">Admin All Auto Comments</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Auto Id</th>
                        <th scope="col">Id</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $recensionis)
                            <tr>
                                <th scope="row">{{ $recensionis->auto_id }}</th>
                                <th>{{ $recensionis->id }}</th>
                                <td>{{ $recensionis->comment }}</td>
                                <td>{{ $recensionis->rating }}</td>
                                <td><a class="btn btn-primary" href=" {{ route('auto.show', $recensionis->auto_id) }}">Show Auto</a></td>
                                <td>
                                    <form action=" {{ route('admin.auto.comments.delete', $recensionis->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>


@endsection