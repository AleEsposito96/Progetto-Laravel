@extends('layouts.app')

@section('content')

<h1 class="text-center">Admin All Table Auto</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($auto as $auto)
                            <tr>
                                <th scope="row">{{ $auto->id }}</th>
                                <td>{{ $auto->title }}</td>
                                <td>{{ $auto->price }}</td>
                                <td>{{ $auto->description }}</td>
                                <td><a class="btn btn-primary" href="{{ route('auto.create') }}">Create</a></td>
                                <td><a class="btn btn-info" href="{{ route('auto.show', $auto->id) }}">View</a></td>
                                <td><a class="btn btn-success" href="{{ route('auto.edit', $auto->id) }}">Edit</a></td>
                                <td>
                                    <form action=" {{ route('admin.auto.delete', $auto->id) }}" method="POST">
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