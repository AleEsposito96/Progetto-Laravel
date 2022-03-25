@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Auto</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
          @foreach ($auto as $annuncis)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="/images/{{ $annuncis->picture }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $annuncis->title }}</h5>
                  <h5 class="card-title">Price: €{{ $annuncis->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $annuncis->description}} </p>
                  <a href="{{ route('auto.show', $annuncis->id) }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
              @endforeach
        </div>
    </div>
</div>

@endsection