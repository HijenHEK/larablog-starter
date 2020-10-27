@extends('layouts')


@section('content')



    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h2>New post mood ?</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="new-post-us">
      <div class="container mt-5">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-new-post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item new-post-form">
                    <div class="sidebar-heading">
                      <h2>Create a post</h2>
                    </div>
                    <div class="content">
                      <form id="newPost" action="/posts"  method="POST">
                        @csrf
                        <div class="mt-5" >
                          <div class=" form-group col-md-6 col-sm-12">
                            <fieldset>

                            <input name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" type="text" id="title" value="{{old('title')}}" >
                            </fieldset>
                            <p class="text-danger">{{ $errors->first('title') }} </p>

                          </div>
                          <div class=" form-group col-md-6 col-sm-12">
                            <fieldset>
                              <textarea name="body" class="form-control {{ $errors->first('body') ? 'is-invalid' : '' }}" cols="40" rows="10" value="{{old('body')}}" type="text" id="body" placeholder="write whats on your mind"  >
                              </textarea>
                            </fieldset>
                            <p class="text-danger">{{ $errors->first('body') }} </p>

                          </div>
                          <div class=" form-group col-md-6 col-sm-12">
                            <fieldset>
                              <select name="tag[]"  data-live-search="true"
                              class="form-control selectpicker {{ $errors->first('tag') ? 'is-invalid' : '' }}" 
                              id="tags" multiple >
                                  @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">
                                      {{$tag->name}}
                                    </option>
                                  @endforeach

                              </select>
                            </fieldset>
                            <p class="text-danger">{{ $errors->first('tag') }} </p>

                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="btn btn-success">Post it !</button>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="btn btn-success">Post it !</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                {{-- <div class="col-lg-4">
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
                </div> --}}
              </div>
            </div>
          </div>
          
          {{-- <div class="col-lg-12">
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div> --}}
          
        </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>




@endsection