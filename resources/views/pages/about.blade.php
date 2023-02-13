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
                        <img src="images/logo.png" class="w-25">
                    </div>
                    <div class="error-body text-center">
                        <h1 class="fw-bold">ValorTracker</h1>
                        <h3 class="card-title mt-3">About</h3>
                        <h6 class="fw-normal text-muted mb-0">ValorTracker is a non-official feature packed helper application to check your stats, daily store and more!</h6>
                        <h3 class="card-title mt-3">Credits</h3>
                        <div class=""><a href="https://valorant-api.com/" class="fw-normal text-muted mb-0">Valorant-API</a></div>
                        <div class=""><a href="https://docs.henrikdev.xyz/valorant.html" class="fw-normal text-muted mb-0">Henriks-API</a></div>
                        <div class=""><a href="https://github.com/techchrism/valorant-api-docs" class="fw-normal text-muted mb-0">techchrism's Valorant API Docs</a></div>
                      @if(url()->previous() != url()->current())
                          <a href="{{ URL::previous() }}" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40 text-white shadow mt-3"><i class="ri-arrow-left-s-line"></i> Back</a>
                      @endif
                        <h6 class="fw-normal text-muted mb-0 mt-3">{{ config('app.name', 'ValorTracker - Login') }} was created under Riot Games' "Legal Jibber Jabber" policy using assets owned by Riot Games.  Riot Games does not endorse or sponsor this project.</h6>
                    </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    @vite('resources/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
    @vite('resources/dist/js/custom.min.js')
    @vite('resources/dist/js/app.min.js')
    @vite('resources/dist/js/app.init.stylish.js')
    @vite('resources/dist/js/app-style-switcher.js')
  </body>
</html>
