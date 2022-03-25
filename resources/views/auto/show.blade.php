@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">{{ $auto->title }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-9" style="display:flex">

            <div class="container m-2 p-2">
                <img src="/images/{{ $auto->picture }}" height="450px" alt="...">
                <div class="container m-2 p-2">
                  <h2>{{ $auto->title }}</h2>
                  <h3>Prezzo: €{{ $auto->price }}</h3>
                  <hr>
                  <p>{{ $auto->description }}</p>
                  <a href="{{ route('auto.index') }}" class="btn btn-success">Go Home</a>
                  <a href="{{ route('auto.edit', $auto->id) }}" class="btn btn-primary">Edit</a>
                </div>
              </div>

        </div>

</div>
</div>
@endsection
