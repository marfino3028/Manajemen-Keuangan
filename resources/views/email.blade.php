<style>
@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: #565c89;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: #bbb5af;
}

input::placeholder, textarea::placeholder {
  color: #565c89;
  font-size: 0.875em;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: #565c89;
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: #565c89;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #cbc6c1;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}

body {
  font-family: 'Lato', sans-serif;
position: absolute;
width: 776px;
height: 536px;
left: -20px;
top: 0px;
background-size: 1980px 980px;
color: #565c89;
}

header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
  position: relative;
  left: 1000px;
  top: -60px;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}

input {
  font-family: 'Lato', sans-serif;
  font-size: 2em;
  width: 950px;
  height: 75px;
  position: relative;
  left: 790px;
top: -60px;
  padding: 2px 15px 1px 15px;
  background: transparent;
  outline: none;
  color: #565c89;
  
  border: solid 1px #565c89;
  border-bottom: none;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background: #b3aca7;
  color: #e2dedb;
}

#submit {
  width: 802px;
  
  padding: 3 2px 3px; 
  margin: -5px 1px 2px 3px;
  
  font-family: 'Lato', sans-serif;
  font-size: 2em;
  color: #565c89;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #565c89;
  border-top: none;
}

#submit:hover {
  color: #e2dedb;
}
</style>
<body background="{{ asset('img/bg2.png')}}">
    @csrf
<header>
    Lupa Password ??
<br><br>
    Masukkan Email Antum <br>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
        @endif
</header>
        


<form id="form" method="POST" action="{{ route('password.email') }}" class="topBefore">
    @csrf
		  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email yang Telah Terdaftar">
          <br>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  <input id="name" type="submit" value="{{ __('Kirim Password Reset Link') }}">
  
</form>
</body>