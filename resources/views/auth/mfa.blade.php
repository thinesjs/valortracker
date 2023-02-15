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
</head>
<body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow-lg static-card">
              <div class="card-body">
                <div class="row justify-content-center mb-4">
                    <img src="images/logo.png" class="w-25">
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
                    <input type="hidden" name="mfa" value="true">
                    <input type="number" name="multifactorcode" id="" class="form-control my-4 py-2 rounded" placeholder="Riot 2FA" value="{{ old('multifactorcode') }}" required/>
                    <span class="text-rose-900">@error('multifactorcode'){{ $message }} @enderror</span>

                    <div class="text-center mt-3 d-grid">
                        <button id="submit-btn" class="btn btn-primary waves-effect waves-light shadow-sm rounded">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    @vite('resources/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
    @vite('resources/dist/js/custom.min.js')
    @vite('resources/dist/js/login.js')
    @vite('resources/dist/js/app.min.js')
    @vite('resources/dist/js/app.init.stylish.js')
    @vite('resources/dist/js/app-style-switcher.js')
  </body>
</html>

