<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ValorTracker - Login') }}</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link
        rel="icon"
        sizes="16x16"
        href="images/favicon.ico"
    />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="position-absolute top-0 end-0 p-3"><input
            type="checkbox"
            name="theme-view"
            class="form-check-input darkCheck"
            id="theme-view"
        />
        <label class="form-check-label" for="theme-view">
            <span><h2 class="ri-contrast-2-line"></h2></span>
        </label></div>
    <div id="main-wrapper">
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border shadow-sm static-card">
              <div class="card-body">
                <div class="row justify-content-center mb-4">
                    <img src="images/logo.png" class="w-25" href="{{ route('about') }}">
                </div>
                @if (session('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="ri-alert-fill me-2" aria-hidden="true"></i>
                        <div>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
                <form action="{{ route ('auth') }}" method="post" id="login-form">
                    @csrf
                    <input type="text" name="username" id="" class="form-control my-4 py-2 rounded" placeholder="Riot Username" value="{{ old('username') }}" />
                    <span class="text-rose-900">@error('username'){{ $message }} @enderror</span>
                    <input type="password" name="password" id="" class="form-control my-4 py-2 rounded" placeholder="Riot Password" />
                    <span class="text-rose-900">@error('password'){{ $message }} @enderror</span>
                    <div class="text-center mt-3 d-grid">
                        <button id="submit-btn" class="btn btn-primary waves-effect waves-light shadow-sm rounded">Login</button>
                    </div>
                </form>
                <div class="alert alert-gradient alert-dark w-full mt-3">
                  Important: Rito have started to change the method of authenticating to their servers. If you see 500 error, that's rito making their moves.
                </div>
              </div>
            </div>
            <div class="text-center">
              <a href="{{ route('about') }}">About ValorTracker</a>
              <p class="text-muted text-center">ValorTracker was created under Riot Games' "Legal Jibber Jabber" policy using assets owned by Riot Games. Riot Games does not endorse or sponsor this project.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    @vite('resources/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
    @vite('resources/dist/js/custom.min.js')
    @vite('resources/dist/js/login.js')
    @vite('resources/dist/js/app.min.js')
    @vite('resources/dist/js/app.init.stylish.js')
    @vite('resources/dist/js/app-style-switcher.js')
  </body>
</html>
