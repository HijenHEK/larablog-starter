@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => 'CONTACT US' ,
'heading' => 'LET\'S STAY IN TOUCH'
])

<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>Send us a message</h2>
                                </div>

                                <div class="content">


                                    {{-- testing notifications --}}
                                    {{-- <form id="contact" action="/notif" method="post">
                                                @csrf
                                                <div class="row">

                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                    <button type="submit" class="btn btn-primary">Notification</button>

                                                    </fieldset>
                                                </div>
                                                </div>
                                            </form> --}}


                                    <form id="contact" action="/contact" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="name" type="text" id="name" placeholder="Your name"
                                                        required="">
                                                    @error('name')
                                                    <p class="is-invalid">{{$message}}</p>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="text" id="email" placeholder="Your email"
                                                        required="">
                                                </fieldset>
                                                @error('mail')
                                                <p class="is-invalid">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="subject" type="text" id="subject" placeholder="Subject">
                                                @error('subject')
                                                <p class="is-invalid">{{$message}}</p>
                                                @enderror
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" id="message"
                                                    placeholder="Your Message" required=""></textarea>
                                                @error('message')
                                                <p class="is-invalid">{{$message}}</p>
                                                @enderror
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Send
                                                    Message</button>
                                            </fieldset>
                                        </div>
                                        @if (session('message'))
                                        <div class="col-lg-12">
                                            <p class="is-valid">
                                                {{session('message')}}
                                            </p>
                                        </div>
                                        @endif
                                </div>
                                </form>
                            </div>
                        </div>

                    <div class="col-lg-4">
                        <div class="sidebar-item contact-information">
                            <div class="sidebar-heading">
                                <h2>contact information</h2>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <h5>090-484-8080</h5>
                                        <span>PHONE NUMBER</span>
                                    </li>
                                    <li>
                                        <h5>info@company.com</h5>
                                        <span>EMAIL ADDRESS</span>
                                    </li>
                                    <li>
                                        <h5>123 Aenean id posuere dui,
                                            <br>Praesent laoreet 10660</h5>
                                        <span>STREET ADDRESS</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div id="map">
                <iframe
                    src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
    </div>
</section>


@include('layouts.partials.footer')


@endsection
