@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')


<section class="blog-posts grid-system mt-10">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

    <ul>

        @forelse ($unreadNotifs as $notif)
            <li class="notif">
                {{$notif->type}}

            </li>
        @empty
            <li>you have no unread notifications at all !</li>
        @endforelse
        <hr>
        @forelse ($readNotifs as $notif)
        <li class="notif read" >
                {{$notif->type}}

            </li>
        @empty
            <li>you have no notifications at all !</li>
        @endforelse
    </ul>
        </div>
      </div>
    </div>
</section>

@include('layouts.partials.footer')
@endsection
