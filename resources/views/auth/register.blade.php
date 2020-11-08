@extends('layouts.app')

@section('content')
<div class="container centerized">

    <div class="card centerized">

                <div class="body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="group">
                            <div class="row">

                            <label for="name" class="label">{{ __('Name') }}</label>

                                <input id="name" type="text" class="control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            </div>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="group">
                            <div class="row">

                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


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

                                <input id="password" type="password" class="control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">


                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="group">
                            <div class="row">

                            <label for="password-confirm" class="label" >{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="group">
                            <div class="col ">
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
