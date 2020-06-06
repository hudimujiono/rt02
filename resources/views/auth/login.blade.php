<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>QUALITY RIVERSIDE</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    <!-- HEADER IMAGE -->
    <header id="main-slide">
      <div id="mySlide" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mySlide" data-slide-to="0" class="active"></li>
          <li data-target="#mySlide" data-slide-to="1"></li>
          <li data-target="#mySlide" data-slide-to="2"></li>
          <li data-target="#mySlide" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner text-white">

          <div class="carousel-item active" id="slide1">
            <div class="container">
              <div class="d-none d-md-block">
                <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">
                  Get<strong> Inspired</strong>
                </h1>
                  <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block">Mengetahui Jalan Yang Benar
                      Akan Membuat Hidupmu Menjadi Sangat Indah.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" id="slide2">
            <div class="container">
              <div class="d-none d-md-block text-right">
                <h1 class="display-1 bg-dark px-4 pb-2 d-inline-block">
                  Take<strong> Action</strong>
                </h1>
                  <br>
                    <p class="bg-info px-2 pb-1 d-inline-block">Sukses Dalam Imitasi
                      Sungguh Lebih Buruk Dibandingkan Gagal Dalam Sebuah Orisinialis.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" id="slide3">
            <div class="container">
              <div class="d-none d-md-block">
                <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">
                  Be<strong> Social</strong>
                </h1>
                  <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block">Berhasil Maupun Gagal Dalam
                      Sebuah Usaha Yang Telah Dilakukan Dengan Baik Bukanlah Sesuatu Yang Penting
                      Karena Kesuksesan Itu Terlihat Dari Semangat.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" id="slide4">
            <div class="container">
              <div class="d-none d-md-block text-right">
                <h1 class="display-1 bg-dark px-4 pb-2 d-inline-block">
                  Find<strong> Stories</strong>
                </h1>
                  <br>
                    <p class="bg-info px-2 pb-1 d-inline-block">Rumah Merupakan Suatu Dimana
                      Kamu Akan Merasa Damai Dan Tenang Di Dalamnya.</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#mySlide" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#mySlide" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">

            <div class="card-header">{{ __('Login') }}</div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                  @csrf

                    <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">
                        {{ __('E-Mail Address') }}
                      </label>
                        <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">
                        {{ __('Password') }}
                      </label>
                        <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                              </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                        </button>

                          @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                          @endif
                      </div>
                    </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <footer id="main-footer" class="text-white bg-dark py-4">
    <div class="container">

      <div class="row">
        <div class="col-md-3 text-center text-md-left">
          <a href="index.html">
           <img src="{{ asset('img/ilkoom_logo.png') }}" style="height: 60px;">
          </a>
            <p>Bergabunglah Dengan Salah Satu Blog Komunitas Terbaik
              Di Indonesia
            </p>
        </div>

        <div class="col-md-3 text-center text-md-left">
          <h5>Community</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Activity</a></li>
              <li><a href="#" class="text-white">Members</a></li>
              <li><a href="#" class="text-white">Groups</a></li>
              <li><a href="#" class="text-white">Forums</a></li>
            </ul>
        </div>

        <div class="col-md-3 text-center text-md-left">
          <h5>Our Services</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Our mission</a></li>
              <li><a href="#" class="text-white">Help/Contact Us</a></li>
              <li><a href="#" class="text-white">Privacy Policy</a></li>
              <li><a href="#" class="text-white">Cookie Policy</a></li>
              <li><a href="#" class="text-white">Terms & Conditions</a></li>
            </ul>
        </div>

        <div class="col-md-3 text-center text-md-left">
          <h5>Contact</h5>
            <div class="text-nowrap">
              <i class="fas fa-envelope fa-fw mr-3"></i>
                hudimujiono@yahoo.co.id
            </div>

            <div class="text-nowrap"><i class="fas fa-phone fa-fw mr-3"></i>
              081230838354
            </div>

            <div class="text-nowrap"><i class="fas fa-globe fa-fw mr-3"></i>
              www.ilkoom.com
            </div>
        </div>

      </div>

      <div class="row mt-3 mt-md-0">
        <div class="col-md-3 mr-md-auto text-center text-md-left">
          <small>&copy; ILKOOM 2018</small>
        </div>

        <div class="col-md-3 text-center text-md-left">
          <div>
            <a href="#" class="text-white mr-2">
              <i class="fab fa-facebook fa-lg"></i>
            </a>
            <a href="#" class="text-white mr-2">
              <i class="fab fa-twitter fa-lg"></i>
            </a>
            <a href="#" class="text-white mr-2">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="#" class="text-white mr-2">
              <i class="fab fa-google-plus fa-lg"></i>
            </a>
            <a href="#" class="text-white mr-2">
              <i class="fab fa-github fa-lg"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </footer>

</html>
