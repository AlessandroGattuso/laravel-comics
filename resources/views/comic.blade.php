@extends('layouts.app')
@section('product')
<main>
  <div class="comic-card-container">
    <div class="flex row">
        <div class="col thumb">
          <img src="{{$comic['thumb']}}" alt="Image not found">
        </div>
        <div class="col description">
          <h2>{{$comic['title']}}</h2>
          <p>{{$comic['description']}}</p>
          <div>
            <span>Series: </span><span class="series">{{$comic['series']}}</span>
          </div>
          <span class="price">{{$comic['price']}}</span>
          <p></p>
          <div>
            <button>Purchase</button>
          </div>
        </div>
    </div>
  </div>
</main>
@endsection