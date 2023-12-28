@extends('home')
@Section('content')

<div class="container mt-3">
<div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-7">
        <img src="/products/{{$product->image}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-5">
        <div class="card-body">
          <h5 class="card-title">Title: <b>{{$product->name}}</b></h5>
          <p class="card-text"><b>Description: </b>{{$product->description}}</p>
         
        </div>
      </div>
    </div>
  </div>
</div>


@endsection