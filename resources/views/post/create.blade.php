@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => '' ,
'heading' => 'New Post ?'
])
<div class="new-post-main">
    <section class="new-post">

        {{-- <div class="head">
            <h2>Create a post</h2>
        </div> --}}
        <div class="content">
            <form id="newPost" action="/posts" method="POST">
                @csrf
                <div class=" group">

                        <input name="title" class="control {{ $errors->first('title') ? 'is-invalid' : '' }}"
                            type="text" id="title" value="{{old('title')}}">
                    <p class="is-invalid">{{ $errors->first('title') }} </p>

                </div>
                <div class=" group">
                        <textarea name="body" class="control {{ $errors->first('body') ? 'is-invalid' : '' }}"
                            cols="40" rows="10" value="{{old('body')}}" type="text" id="body"
                            placeholder="write whats on your mind">
                                  </textarea>

                    <p class="is-invalid">{{ $errors->first('body') }} </p>

                </div>
                <div class=" group">

                        <select name="tag[]" data-live-search="true"
                            class="control selectpicker {{ $errors->first('tag') ? 'is-invalid' : '' }}" id="tags"
                            multiple>
                            @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">
                                {{$tag->name}}
                            </option>
                            @endforeach

                        </select>

                    <p class="is-invalid">{{ $errors->first('tag') }} </p>

                </div>
                <div class="group">

                        <button type="submit" id="submit" class="btn">Post it !</button>

                </div>
            </form>
        </div>

    </section>

</div>


@include('layouts.partials.footer')



@endsection
