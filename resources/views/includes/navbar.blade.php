  <!-- navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a href="#" class="navbar-brand">
        <img src="{{ url('front-end/images/logo/logo_nomads.png')}}" />
      </a>
      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Package Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              id="navbardrop"
              data-toggle="dropdown"
              >Service
            </a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Link 1</a>
              <a href="#" class="dropdown-item">Link 2</a>
              <a href="#" class="dropdown-item">Link 3</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Testimonials</a>
          </li>
        </ul>

        @guest
              <!-- Mobile button -->
              <form action="" class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}'; ">
                  Masuk
                </button>
              </form>

              <!-- Dekstop button -->
              <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}'; ">
                  Masuk
                </button>
              </form>

        @endguest

        @auth
          <!-- Mobile button -->
          <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
              Keluar
            </button>
          </form>

          <!-- Dekstop button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
              Keluar
            </button>
          </form>

        @endauth

      </div>
    </nav>
  </div>
  <!-- end navbar -->