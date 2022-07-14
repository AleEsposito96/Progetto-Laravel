@extends('adminlte::page')

@section('content')

<h1 class="text-center mt-2" style="font-weight: bold;">{{ $auto->title }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">

            <div class="container d-flex m-2 p-2" style="flex-direction:column;"> 
                <img class="img-fluid" src="/images/{{ $auto->picture }}" width="600px" alt="...">
                <div class="container m-2 p-2">
                  <h2 style="font-weight: bold">{{ $auto->title }}</h2>
                  <h3>Prezzo: €{{ $auto->price }}</h3>
                  <hr>
                  <h5>{{ $auto->description }}</h5>
                  <a href="{{ route('auto.index') }}" class="btn btn-success">Go Home</a>
                  <a href="{{ route('auto.edit', $auto->id) }}" class="btn btn-primary">Edit</a>
                </div>
              </div>

        </div>

        <div class="col-12 col-md-3">

          <h3>All Comments</h3>

          <div class="comments p-2 m-2" style="background-color: #00bc8c">
          <ul id="unordered">
       
       </ul>
            
          </div>
        
          
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

                  <button  id="addCommentBtn" class="btn btn-success"> <a style="color: white" href="#">comment</a></button>

            </form>
         
          </div>
        

        </div>

</div>
</div>


  
<script>
        var post= document.getElementById("addCommentBtn");
post.addEventListener("click", function(){
    var commentBoxValue= document.getElementById("comment").value;
    var ratingBoxValue= document.getElementById("rating").value;
    var li = document.createElement("li");
    var text = document.createTextNode("(" + ratingBoxValue + ")" + " " + commentBoxValue );
    li.appendChild(text);
    document.getElementById("unordered").appendChild(li);

});
    </script>




@endsection