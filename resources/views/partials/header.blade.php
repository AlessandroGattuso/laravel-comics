<header>
  <div class="container flex flex-between flex-align-center h-100">
    <div>
      <img class="logo" src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo not found">
    </div>
    <div class="menu flex h-100 w-100">
      <ul class="h-100">
        @foreach($menu as $menuItem)
          <li class="h-100 flex flex-center cursor-pointer" class="{{(Route::currentRouteName() == 'home') ? 'active' : ''}}">
              {{ $menuItem }}
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</header>
