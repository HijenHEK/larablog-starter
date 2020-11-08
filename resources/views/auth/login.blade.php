@extends('layouts.app')
@section('content')


<div class="container centerized">

            <div class="card centerized">
                {{-- <div class="head">{{ __('Login') }}</div> --}}

                <div class="body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="group ">
                            <div class="row">

                                <label for="email"  class="label">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" placeholder="foulen@foulen.com" class="control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="group">
                            <div class="row">
                            <label for="password" class="label">{{ __('Password') }}</label>


                                <input id="password" type="password" placeholder="*******" class="control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="group ">
                            <div class="col-md-6 offset-md-4">
                                <div class="check">
                                    <input class="check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="group ">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
@endsection
