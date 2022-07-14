@extends('adminlte::page')

@section('content')






<h1 class="text-center mb-3" style="font-size: 40px" ><b>ALL AUTO</h1>
<hr>
<br>


<div class="container">
    <div class="row" style="justify-content: center">
          @foreach ($auto as $annuncis)
            <div class="card p-0 col-12 col-sm-6 col-md-3" style="width: 18rem; border: white solid 1px;">
                <img src="/images/{{ $annuncis->picture }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold">{{ $annuncis->title }}</h5>
                  <br><br>
                  <h5 class="card-title" style="font-weight: bold">Price: €{{ $annuncis->price }}</h5>
                  <br><br>
                  <p class="card-text">{{ $annuncis->description}} </p>
                  <a href="{{ route('auto.show', $annuncis->id) }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
              @endforeach
    </div>
</div>

@endsection