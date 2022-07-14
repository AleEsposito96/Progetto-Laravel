@extends('adminlte::page')

@section('content')


<h1 class="text-center" style="margin-top: 4px";><b>Admin All Table Auto<b></h1>
<br>

<div class="container">
    <div class="row">
        <td><a class="btn btn-primary m-3" href="{{ route('auto.create') }}">Create</a></td>
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="border-bottom: none;" scope="col">Id</th>
                        <th style="border-bottom: none;" scope="col">Title</th>
                        <th style="border-bottom: none;" scope="col">Model</th>
                        <th style="border-bottom: none;" scope="col">Price</th>
                        <th style="border-bottom: none;" scope="col">Description</th>
                        <th style="border-bottom: none;" class=" d-flex "scope="col" style="justify-content: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($auto as $auto)
                            <tr>
                                <th scope="row" style="vertical-align: middle">{{ $auto->id }}</th>
                                <td style="vertical-align: middle"><img src="/images/{{ $auto->picture }}" height="100px" alt="..."></td>
                                <td style="vertical-align: middle">{{ $auto->title }} </td>
                                <td style="vertical-align: middle">{{ $auto->price }}</td>
                                <td style="vertical-align: middle">{{ $auto->description }}</td>
                                <td style="vertical-align: middle"><a class="btn btn-info" href="{{ route('auto.show', $auto->id) }}">View</a></td>
                                <td style="vertical-align: middle"><a class="btn btn-success" href="{{ route('auto.edit', $auto->id) }}">Edit</a></td>
                                <td style="vertical-align: middle">
                                    <form action=" {{ route('admin.auto.delete', $auto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
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