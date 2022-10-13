<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description" />
    <meta content="Muajjam" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
      $basic=App\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
      $social=App\SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
      $contact=App\ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
      $data=App\Copyright::where('copy_status',1)->where('copy_id',1)->firstOrFail();
    @endphp
    <title>{{$basic->basic_title}} | {{$basic->basic_subtitle}}</title>
    <link rel="shortcut icon" href="{{asset('uploads/basic/'.$basic->basic_favicon)}}">
    <link href="{{asset('contents/website')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/fontawesome-5.15.3-all.min.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/contact-animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/contact-hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/cotact-select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/contact-util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/contact-main.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/materialize.css">
    <link href="{{asset('contents/website')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/responsive.css" rel="stylesheet">


    
    <script src="{{asset('contents/website')}}/js/jquery-3.6.0.min.js"></script>

  </head>
<body>

      <!-- registration Modal start -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content custom_modal_content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Recharge Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="card-body">
                         <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                              <div class="col-4">
                                <label>Phone</label>
                              </div>
                                <div class="col-8">
                                    <input id="phone" type="tel" class="form-control input-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="017********">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-4">
                                <label>Password</label>
                              </div>
                                <div class="col-8">
                                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group text-center m-t-40">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                        </div>
                      </div>
                      <div class="modal-footer login_modal_footer">
                        <p>Don't have any account?</p><a href="{{route('site_reg')}}">Create an account</a>
                        <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>         
                      </div>
                    </div>
                  </div>
                </div>
    <!-- registration Modal end -->
    
    <header class="menu_part">
      <div class="container">
          <div class="row" style="display: flex">
              <div class="col-6 col-sm-6">
                  @if(@Auth::check()) {{@Auth::user()->name}} @endif 
              </div>
              <div class="col-6 col-sm-6">
                  <p><strong> Questions?</strong> Call us : <a href="tel:01911781079" class="question"> 01911781079</a></p>
              </div>
               
          </div>
        <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <!-- logo -->
    <a class="navbar-brand" href="{{url('/')}}">
      <img height="10" width="30" src="{{asset('uploads/basic/'.$basic->basic_logo)}}" alt="logo" class="img-fluid logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Offers
          </a>
          <ul class="dropdown-menu drop_down_menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('site_data')}}">Data</a></li>
            <li><a class="dropdown-item" href="{{route('site_minute')}}">Minute</a></li>
            <li><a class="dropdown-item" href="{{route('site_combo')}}">Combo</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site_about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site_contact')}}">Contact</a>
        </li>
      </ul>
     <!--  <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Amount" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      @if(Auth::check())
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu_acc">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @if(@Auth::user()->photo!="")
             <img height="20" src="{{asset('uploads/users/'.@Auth::user()->photo)}}"/>
             @else
             <i class="far fa-user fa-lg"></i>
             @endif
              {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a title="up-coming" href="#" class="dropdown-item"><i class="far fa-user fa-lg"></i></i> <span>Edit Profile</span></a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fas fa-sign-out-alt"></i></i> <span>Logout</span></a></li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu_acc">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="far fa-user fa-lg"></i> My Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a></li>
            <li><a class="dropdown-item" href="{{route('site_reg')}}">Sign Up</a></li>
          </ul>
        </li>
      </ul>
      @endif
      
    </div>
  </div>
</nav>
</div>
</header>

@yield('content')

<footer class="footer_part">
  <div class="container">
    <div class="row">
      <!--<div class="col-md-4 col-sm-4">-->
      <!--  <div class="newsletter">-->
      <!--  <img src="{{asset('uploads/basic/'.$basic->basic_flogo)}}" class="img-fluid flogo" alt="footer_logo">-->
      <!--  <form action="" method="">-->
      <!--    <div class="input-group mb-3">-->
      <!--      <input type="text" class="form-control" placeholder="Join Our Newsletter" aria-label="Recipient's username" aria-describedby="button-addon2">-->
      <!--      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Email</button>-->
      <!--    </div>-->
      <!--  </form>-->
      <!--</div>-->
      <!--</div>-->
      <div class="col-md-4 col-sm-4">
        <ul class="useful_links">
          <li><h6>Useful Links</h6></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Tarm & Condition</a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4">
        <ul class="social_media">
          <li><h6>Social Media</h6></li>
          <li><a class="sm_1" href="{{$social->sm_facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a class="sm_2" href="{{$social->sm_twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="sm_3" href="{{$social->sm_linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="sm_4" href="{{$social->sm_youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright">{{$data->copy_title}} | <strong>Development by <a target="_blank" href="https://web.facebook.com/developer.imu/">Muajjam Hossain</a> </strong> </div>
</footer>
<!--== BOTTOM FLOAT ICON ==-->
    <section class="bottom_float_icon">
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                More </i>
            </a>
            <ul>
                <li><a href="{{url('/')}}" class="btn-floating red"><i class="fas fa-home"></i></a>
                </li>
                <li><a href="#" class="btn-floating yellow darken-1"><i class="fas fa-quote-left"></i></a>
                </li>
                <li><a href="#" class="btn-floating green"><i class="fas fa-clipboard-list"></i></a>
                </li>
                <li><a href="{{ route('logout') }}" class="btn-floating green" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </section>
    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60fd4044649e0a0a5ccdd783/1fbek64in';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
<!--End of Tawk.to Script-->



<script type="text/javascript">
    
        timer();

      function timer(){
       var currentTime = new Date()
      var hours = currentTime.getHours()
      var minutes = currentTime.getMinutes()
      var sec = currentTime.getSeconds()
      if (minutes < 10){
          minutes = "0" + minutes
      }
      if (sec < 10){
          sec = "0" + sec
      }
      var t_str = hours + ": " + minutes + ": " + sec + " ";
      if(hours > 11){
          t_str += "PM";
      } else {
         t_str += "AM";
      }
       document.getElementById('time_span').innerHTML = t_str;
       setTimeout(timer,1000);
      }
</script>


    <script src="{{asset('contents/website')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('contents/website')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('contents/website')}}/js/contact-select2.min.js"></script>
    <script src="{{asset('contents/website')}}/js/contact-tilt.jquery.min.js"></script>
    <script src="{{asset('contents/website')}}/js/contact-main.js"></script>
    <script src="{{asset('contents/website')}}/js/materialize.min.js"></script>
    <script src="{{asset('contents/website')}}/js/custom.js"></script>
  </body>
</html>
