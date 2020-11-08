@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => 'CONTACT US' ,
'heading' => 'LET\'S STAY IN TOUCH'
])

<section class="contact-us">

                        <div class="contact-section">
                                <div class="head">
                                    <h2>Send us a message</h2>
                                </div>

                                <div class="content">


                                    {{-- testing notifications --}}
                                    {{-- <form id="contact" action="/notif" method="post">
                                                @csrf
                                                <div class="row">

                                                <div class="group">
                                                    <fieldset>
                                                    <button type="submit" class="btn btn-primary">Notification</button>

                                                    </fieldset>
                                                </div>
                                                </div>
                                            </form> --}}


                                    <form id="contact" action="/contact" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="group">

                                                    <input name="name" class="control" type="text" id="name" placeholder="Your name"
                                                        required="">
                                                    @error('name')
                                                    <p class="is-invalid">{{$message}}</p>
                                                    @enderror

                                            </div>
                                            <div class="group">

                                                    <input name="email" class="control" type="text" id="email" placeholder="Your email"
                                                        required="">

                                                @error('mail')
                                                <p class="is-invalid">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="group">

                                                <input name="subject" class="control subj" type="text" id="subject" placeholder="Subject">
                                                @error('subject')
                                                <p class="is-invalid">{{$message}}</p>
                                                @enderror

                                        </div>
                                        <div class="group">

                                                <textarea name="message"      rows="6" id="message"
                                                    placeholder="Your Message" required=""></textarea>
                                                @error('message')
                                                <p class="is-invalid">{{$message}}</p>
                                                @enderror

                                        </div>

                                        <div class="group">

                                                <button type="submit" id="form-submit" class="btn">Send
                                                    Message</button>

                                        </div>
                                        @if (session('message'))
                                        <div class="group">
                                            <p class="is-valid">
                                                {{session('message')}}
                                            </p>
                                        </div>
                                        @endif
                                </div>
                                </form>
                        </div>

                    <div class="info-sidebar">
                            <div class="head">
                                <h2>contact information</h2>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <span>PHONE NUMBER</span>

                                        <span>090-484-8080</span>
                                    </li>
                                    <li>
                                        <span>EMAIL ADDRESS</span>

                                        <span>info@company.com</span>
                                    </li>
                                    <li>
                                        <span>STREET ADDRESS</span>

                                        <span>123 Aenean id posuere dui
                                           , Praesent laoreet 10660</span>
                                    </li>
                                </ul>
                            </div>

                    </div>




</section>


@include('layouts.partials.footer')


@endsection
