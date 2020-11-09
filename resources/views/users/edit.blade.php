@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => '' ,
'heading' => 'Edit Profile ?'
])




<div class="main">
    <section class="edit-user">

        {{-- <div class="head">
            <h2>Create a post</h2>
        </div> --}}
        <div class="content">
            <form id="newPost" action="/posts" method="POST">
                @method('PUT')
                @csrf
                <div class=" group">

                        <input name="name" class="control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                            type="text" id="name" value="{{old('name')}}">
                    <p class="is-invalid">{{ $errors->first('name') }} </p>

                </div>
                <div class=" group">
                        <input type="mail" name="email" class="control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                            cols="40" rows="10" value="{{old('email')}}" type="text" id="email"
                            placeholder="write whats on your mind">

                    <p class="is-invalid">{{ $errors->first('email') }} </p>
                </div>
                <div class=" group">


                        @foreach ($roles as $role)
                            <input
                            class="control {{ $errors->first('role') ? 'is-invalid' : '' }}"
                            type="radio" id="{{$role->name}}" name="{{$role->name}}" value="{{$role->id}}">
                            <label for="{{$role->name}}"> {{$role->name}} </label>
                        @endforeach

                    <p class="is-invalid">{{ $errors->first('tag') }} </p>

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

                        <button type="submit" id="submit" class="btn">Update info!</button>

                </div>
            </form>
        </div>

    </section>

</div>


@include('layouts.partials.footer')



@endsection
