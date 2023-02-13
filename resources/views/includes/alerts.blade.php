@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-gradient alert-dark w-full">
        {{ session('error') }}
    </div>
@endif

