@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class=" mx-auto">  <img class="" alt=""  src="/images/tglobo.png" style="display:block; margin-left: auto; margin-right: auto; width:40%; margin-bottom: 20px; margin-top: 20px;" /></div>
  <div class=" mx-auto">  <img class="" alt=""  src="/images/cordoo.png" style="display:block; margin-left: auto; margin-right: auto; width:40%; margin-bottom: 50px; " /></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
@endsection
{{-- <div class="container-fluid  col-md-12 banner principallogin ">
  <div class="row col-md-12 banner ">

    <div class=" container col-md-4 fondoGris">

      <form role="form" action= "validar.php" method='post' >
        <div class="form-group">
          <label for="exampleInputEmail1">
            Direccion de Email
          </label>
          <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">

          <label for="exampleInputPassword1">
            Password
          </label>
          <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">
          Submit
        </button>
      </form>
    </div>

    <div class="container shadow p-3 mb-5 bg-white rouded col-md-4 ">
      <address>
        <img class="col-12 banner " alt="Bootstrap Image" src="img/logo1.jpg" />
        <br>
         <strong>Coordobeses, Inc.</strong><br /> Jose Baigorri 653.<br /> Cordoba, X5001AJM<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
    </div>
  </div>

</div> --}}
