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

        <div class="col-md-3">

          <h3>All Comments</h3>

          <div class="comments p-2 m-2" style="background-color: rgb(232, 251, 246)">
            @foreach ($auto->comments as $comment)
            <h5>{{ $comment->comment }} ( {{ $comment->rating }} )</h5>
            <hr>
        @endforeach
          </div>

          
          <h3>Add a comment ...</h3>
          
          <div class="container mt-3 p-2">
              

              <form action="" method="POST">
                @csrf

                <input type="hidden" id="id" name="id" value="{{ $auto->id }}">

                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter Comment">
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" name="rating" id="rating" placeholder="Enter Rating">
                </div>

                  <button type="submit" id="addCommentBtn" class="btn btn-success">comment</button>

            </form>
          </div>
        

        </div>

</div>
</div>


<script>

  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
    }
  });


  // add comment function by id

  $('addCommentBtn').click(function(e) {
    // get data from form
    var comment = $('#comment').val();
    var rating = $('#rating').val();
    var id = $('#id').val();

    
    $.ajax({
      type:'POST',
      dataType: 'json',
      
      data: { comment:comment, rating:rating , _token: '{{csrf_token()}}'},
      url: '/auto/'+id,
    })
    success: function(data) {
      console.log('Data saved');
    },
    
    error: function(error) {
      console.log(error);
    }

  });
  
  
  
  </script>
  


@endsection
