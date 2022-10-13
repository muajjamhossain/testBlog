<!DOCTYPE html>
<html lang="en">
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

    <link rel="shortcut icon" href="{{asset('uploads/basic/'.$basic->basic_favicon)}}">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/plugin/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/plugin/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/plugin/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/plugin/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/style.css">
    <title>{{$basic->basic_title}} | {{$basic->basic_subtitle}}</title>

    <script src="{{asset('contents/website')}}/js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- header part -->
    <header class="header-area">
        <div class="top-header-area">
            <div class="container">
                <!-- top header -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-header">
                            <div class="content">
                                <p> <span class="question">Questions?</span>  <span>call us:</span>  <a href="tel:{{$contact->cont_phone1}}" title="{{$contact->cont_phone1}}"> {{$contact->cont_phone1}}</a> </p>
                            </div>
                            <div class="content dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i>{{@Auth::check()?@Auth::user()->name:'my account'}}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                                    @if(@Auth::check())
                                    <li><a href="{{ route('logout') }}" class="btn-floating green" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                                    @else
                                    <li><a class="dropdown-item" href="{{route('site_login') }}">login</a></li>
                                    <li><a class="dropdown-item" href="{{route('site_reg')}}">sign up</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="{{url('/')}}">
       <img src="{{asset('uploads/basic/'.$basic->basic_logo)}}" alt="logo" class="navbar-brand" style="width: 120px; height: 50px;"> 
           </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar_icon"><i class="fas fa-bars"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Offer
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('site_data')}}">data</a></li>
                      <li><a class="dropdown-item" href="{{route('site_minute')}}">Minutepack</a></li>
                      <li><a class="dropdown-item" href="{{route('site_combo')}}">combopack</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('site_about')}}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('site_contact')}}">contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-danger" href="{{route('site_contact')}}">Join Seller</a>
                  </li>
                </ul>
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                  <button class="form-button" type="submit"><i class="fas fa-search"></i></button>
                  <audio id="audio" src="{{asset('music.mp3')}}" autoplay></audio>
                </form>
              </div>
            </div>
        </nav>
        <!-- common div -->
        <div class="clearfix"></div>
    </header>

        @yield('content')

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-social">
                        <a href="{{$social->sm_facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$social->sm_youtube}}"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="{{$social->sm_linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$social->sm_twitter}}"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a href="mailto:{{$contact->cont_email1}}">{{$contact->cont_email1}}</a></li>
                            <li><a href="tel:{{$contact->cont_phone1}}">{{$contact->cont_phone1}}</a></li>
                            <li><span>For any query: mm enterprise</span></li>
                        </ul>
                        <address>
                            {{$contact->cont_add1}}
                        </address>
                    </div>
                    <div class="footer-link">
                        <a href="#">
                            <img src="{{asset('contents/website')}}/assets/img/link/google.png" alt="playstore">
                        </a>
                        <a href="#">
                            <img src="{{asset('contents/website')}}/assets/img/link/apple.png" alt="applestore">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copywrite">
            <p>Copyright &copy; 2021 Ekload | Designed by Saiful, Rana | <strong>Development by <a target="_blank" href="https://web.facebook.com/developer.imu/">Muajjam Hossain</a> </strong> </p>
        </div>
        <!-- common div -->
        <div class="clearfix"></div>
    </footer>

    <div class="small_larg_button">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <div class="button">
                        <a href="#" title="Login Account" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-power-off"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ route('logout') }}" class="btn-floating green" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> <span></span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="{{route('site_reg')}}" title="Create Acount"><i class="fas fa-user"></i></a>
                    </div>
                    <div class="copywrite">
                        <p>Copyright &copy; {{$data->copy_title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sript area -->
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
    
     <script>
		function playButton(){
			document.getElementById('audio');
		}
		playButton();
	</script>


    <script src="{{asset('contents/website')}}/assets/js/jquery.min.js"></script>
    <!-- popper js -->
    <script src="{{asset('contents/website')}}/assets/js/proper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{asset('contents/website')}}/assets/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="{{asset('contents/website')}}/assets/js/owl.carousel.min.js"></script>
    <!-- isotop -->
    <script src="{{asset('contents/website')}}/assets/js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="{{asset('contents/website')}}/assets/js/magnific.min.js"></script>
    <!-- main js -->
    <script src="{{asset('contents/website')}}/assets/js/main.js"></script>
</body>
</html>

