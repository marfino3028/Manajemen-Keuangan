<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}">
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:900i');
     .inner-cutout{
	padding: 40px 0;
	display: block;
	margin: 2%;
	padding-bottom: 40px;
	height: 300px;
	 background-size: 1000%;
	background-position:50% 50%;

}

a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:870px;
	position:relative;
	background:url(img/bg1.jpg) no-repeat center;
  background-size: 1000px 900px;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:30px 50px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
    margin-top:5px;
	padding-bottom:3px;

	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#f6d042;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#01a2b9;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.foot-lnk{
	text-align:center;
    color: #F7F7F7;
}
.knockout {

	vertical-align: middle;
	text-align: center;
	font-family: 'Pacifico', cursive;
	font-size:50pt;
	background: linear-gradient(110deg, #03586d 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, lightblue 34%, #f6d042 34%);
	background-size: 400%;
	 -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
.knockout{
		animation: Gradient 5s ease infinite;
		-webkit-animation: Gradient 15s ease infinite;
		-moz-animation: Gradient 5s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 30% 50%
	}
	50% {
		background-position: 25% 50%
	}
	100% {
		background-position: 30% 50%
	}

}

.mainin{
  position: fixed;
	width: 1500px;
	height: 1500px;
	margin-left: -2390px;
	margin-top: 100px;
}

    img.gbr{
        position: absolute;
width: 250px;
height: 250px;
left: 130px;
top: 10px;
    }
    
.ellipse1{
    position: fixed;
width: 550px;
height: 580px;
left: -275px;
top: -270px;
border-radius: 50%;
background: linear-gradient(180deg, #929AE8 22.92%, rgba(1, 162, 185, 0.31) 100%), #01A2B9;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
transform: matrix(-1, 0, 0, 1, 0, 0);
z-index: -2;
}
.ellipse2{
    position: fixed;
width: 241px;
height: 248px;
left: -105px;
top: 758px;
border-radius: 50%;
background: linear-gradient(180deg, #929AE8 22.92%, rgba(1, 162, 185, 0.31) 100%), #01A2B9;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
transform: matrix(1, 0, 0, -1, 0, 0);
}
a{
    text-decoration: none;
}

@media screen and (max-width:680px){
    a.beranda{

    position: fixed;
width: 90px;
height: 28px;
left: 1090px;
top: 38px;
font-family: Roboto;
font-style: normal;
font-weight:bold;
font-size: 24px;
line-height: 28px;
color: #F7F7F7;
text-decoration : none;
}
a.pemasukan{
    position: fixed;
width: 90px;
height: 28px;
left: 1230px;
top: 38px;

font-family: Roboto;
font-style: normal;
font-weight: 900;
font-size: 24px;
line-height: 28px;
text-decoration : none;
color: #FFFFFF;
}
a.pengeluaran{
    position: fixed;
width: 90px;
height: 28px;
left: 1750px;
top: 38px;
text-decoration : none;
font-family: Roboto;
font-style: normal;
font-weight: 900;
font-size: 24px;
line-height: 28px;

color: #FFFFFF;

}
}

/* text */

/* button */



.wrapper1 {
 position: absolute;
left: 370px;
top: 590px;
  display: flex;
  justify-content: center;
}

.cta {
    display: flex;
    padding: 10px 45px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 40px;
    color: white;
    background: #3b5c80;
    transition: 1s;
    box-shadow: 6px 6px 0 #01a2b9;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none;
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC638;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  span {
    transform: skewX(15deg)
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }

/**************SVG****************/

path.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #FBC638;
    }
    100% {
        fill: white;
    }
}
.position {
  margin-left: 1670px;
margin-top: -48px;
}


#personal {
  color:white;
  text-decoration:none;
  position:absolute;
  bottom:15px;
  right:2%;
}

.spot {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.svg-wrapper {
  margin-top: 0;
  position: relative;
  width: 150px;
  /*make sure to use same height/width as in the html*/
  height: 40px;
  display: inline-block;
  border-radius: 3px;
  margin-left: 5px;
  margin-right: 5px
}


#shape {
  stroke-width: 3px;
  fill: transparent;
  stroke: #009FFD;
  stroke-dasharray: 85 400;
  stroke-dashoffset: -220;
  transition: 1s all ease;
}
/*
    Pushing the text up into the SVG. Without this the
    text would be below the div's.
*/

#text {
  margin-top: -35px;
  text-align: center;
  font-family: Roboto;
font-style: normal;
font-weight: 900;
font-size: 24px;
}

#text a {
  color: white;
  text-decoration: none;
  font-weight: 900;
  font-size: 1em;
}

.svg-wrapper:hover #shape {
  stroke-dasharray: 50 0;
  stroke-width: 3px;
  stroke-dashoffset: 0;
  stroke: #06D6A0;
}

</style>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
Keuangan Ponpes Turzina - Login
  </title>
  <!-- Favicon -->
  <link href="{{asset('img/favicon.png')}}" rel="icon" type="image/png">
<!-- Fonts -->
  <!-- Icons -->
  <link href="{{asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
</head>
<div class="ellipse1"></div>
    <div class="ellipse2"></div>
<body class="bg-default" background="{{asset('img/bg.png')}}">
  <div class="main-content">
  
      
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-12">
        <a class="navbar-brand">
          <img src="{{asset('img/icon.png')}}" class="gbr" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="{{asset('img/icon.png')}}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ url('https://ybmpln.org/')}}">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ url('pemasukan-pdf') }}">
                <i class="fa fa-dolly-flatbed"></i>
                <span class="nav-link-inner--text">Pemasukan</span>
              </a>
            </li>
   
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ url('pengeluaran-pdf') }}">
                <i class="fas fa-receipt"></i>
                <span class="nav-link-inner--text">Pengeluaran</span>
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-link-icon" data-toggle="modal" data-target="#modalku" href="">
                  <i class="ni ni-key-25"></i>
                  <span class="nav-link-inner--text">Login</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
            <div class="position">
            <div class="mainin">
                <div class = "inner-cutout">
                    <h1 class="knockout">Pendataan Keuangan <br> &nbsp;&nbsp;&nbsp;&nbsp;    Pesantren Tursina</h1>
                </div>
            </div>   
     
    </div>
    <!-- Page content -->
    <div class="container">
        <div class="wrapper1">
        <button type="button" class="cta" data-toggle="modal" data-target="#modalku">
           <span>Login</span>
           <span>
              <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#01a2b9"></path>
                </g>
              </svg>
            </span>
          </button>
          </div>

    <!-- The Modal -->

 <div class="modal fade" id="modalku">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Ini adalah Bagian Header Modal -->

        <!-- Ini adalah Bagian Body Modal -->
        <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
        <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

        <div class="login-form">

			<div class="sign-in-htm">

                <div class="group">
                    <label for="name" class="label">{{ __('Name') }}</label>
                    <input id="name" type="name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

				<div class="group">
                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

				<div class="group">
					<label for="password" class="label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>



                <div class="group">
                    {!! NoCaptcha::renderJs('recaptchaCallback') !!}
                    {!! NoCaptcha::display(['data-theme' => 'dark']) !!}

                    <span class="help-block">
                  <font color="white">  <strong><br>{{ $errors->first('g-recaptcha-response') }}</strong></font>
                    </span>
                </div>



				<div class="group">
                <button type="submit" class="button">
                   {{ __('Login') }}
                </button>
            </div>
<br>
<div class="foot-lnk"><label for="tab-1"><a href="{{ route('password.request') }}">Forgot Password ??</a></div>


            </div>

        </form>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
			<div class="sign-up-htm">



				<div class="group">
					<label for="name" class="label">{{ __('Name') }}</label>
					<input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="group">
                <label for="pass" class="label">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
            </div>

				<div class="group">
					<label for="pass" class="label">{{ __('Password') }}</label>
                    <input id="pass" type="password" class="input  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-type="password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>

				<div class="group">
					<label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
					<input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
				</div>

                <div class="group">
					<label for="jabatan" class="label">{{ __('Jabatan') }}</label>
					<input id="jabatan" type="text" class="input" name="jabatan" required autocomplete="jabatan">
                </div>

                <div class="group">
					<label class="label">Foto</label>
					<input value="{{  old('foto') }}" name="foto" type="file"
                                class="form-control-file @error('foto') is-invalid @enderror">

                                @error('foto')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                </div>

                <div class="group">
                    {!! NoCaptcha::renderJs('recaptchaCallback') !!}
                    {!! NoCaptcha::display(['data-theme' => 'dark']) !!}

                    <span class="help-block">
                  <font color="white">  <strong><br>{{ $errors->first('g-recaptcha-response') }}</strong></font>
                    </span>
                </div>

				<div class="group">
					<input type="submit" class="button" value="Sign Up">
        </div>

        <div class="foot-lnk">
        <label for="tab-1">Already Member?</a>

        </div>
    </div>
</div>
</div>
</div>
</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  <!--   Core   -->
  <script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="{{asset('js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="{{asset('https://cdn.trackjs.com/agent/v3/latest/t.js')}}"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script>
  @if (count($errors) > 0)
    <script>
        $( document ).ready(function() {
            $('#modalku').modal('show');
        });
    </script>
@endif
  </script>
