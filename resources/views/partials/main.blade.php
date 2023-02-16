<main>
  <div class="container-fluid jumbotron"></div>
  <div class="container-fluid comic-container">
    <div class="container flex flex-align-center text-white h-100">
      <div class="label">
        CURRENT SERIES
      </div>
      <div class="grid-card">
        @foreach($data['comics'] as $comic)
          <div class="card">
            <img src="{{$comic['thumb']}}" alt="Image not found">
            <p class="title">{{ $comic['series'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
    <div class="container flex flex-jc-center">
        <button>LOAD MORE</button>
    </div>
  </div>
  <div class="container-fluid shop-container">
    <div class="container flex flex-align-center text-white h-100">
      <div class="flex flex-align-center cursor-pointer shop-item">
        @foreach($data['images'] as $image)
          <img src="{{Vite::asset('resources/images/'.$image['file'])}}" alt="Image not found">
          <span>{{ $image['label'] }}</span>
        @endforeach
      </div>
    </div>
  </div>
</main>