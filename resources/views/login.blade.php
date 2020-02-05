<!DOCTYPE html>
<html>
<head>
    <title>Masuk - Rekusaha</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
@include('sweet::alert')


<div class="container ">

  <div class="row">
<div class="d-none d-lg-block">
  <div class="col">

<div class="mt-5">
<br/>
<br/>

<img src="/images/sample.png" width="400" height="600" class="d-inline-block align-top" alt="">
</div>
</div>
</div>
<div class="col">
<div class="text-center">

<img src="/images/logobig.png" width="150" height="150" class="d-inline-block align-top" alt="">

<h3 class="mt-5 text-info">Aplikasi untuk merekomendasikan usaha berdasarkan lokasimu</h3>
</div>
<div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-body">
<div class="text-center">
 <h3>Masuk</h3>
</div>
 
 <form action="/login" method="post">
		{{ csrf_field() }}
        
        <div class="form-group">
			Username <br/> <input class="form-control {{Request::cookie('username') === null ? (Request::cookie('username') === old('id') ? (old('id') == null ? '' : 'is-invalid') : (old('id') == null ? '' : 'is-invalid')) : 'is-valid'}}" type="text" name="id" value="{{(old('id') == null ? Request::cookie('username') : old('id'))}}" required="required"> <br/>
		</div>
        <div class="form-group">
        	Password <br/><input class="form-control {{Request::cookie('password') === null ? (Request::cookie('password') === old('pass') ? (old('pass') == null ? '' : 'is-invalid') : (old('pass') == null ? '' : 'is-invalid')) : 'is-valid'}}" type="password" value="{{(old('pass') == null ? Request::cookie('password') : old('pass'))}}" name="pass" required="required"> 
            <div class="form-check text-right mr-3 mt-3">
            <a class="text-primary" href="/lupapass">Lupa Password?</a>

  </div>
        </div>
        
        <div class="text-center">
        
		<input class="btn btn-primary" type="submit" value="Masuk">
        </div>

	    </form>
</div>

</div>
<div class="text-center mt-3">
Belum Daftar? <a class="text-primary" href="/registrasi">Buat Akun</a>



    </div>
<div class="text-center mt-3">

<!--<a class="text-primary" href="https://docs.google.com/uc?export=download&id=1WNqWRdzxuON0Ue5QThQ-mcbQScSd42ZL"><img src="/images/downloadimg.png" width="150" height="50" class="d-inline-block align-top" alt=""></a>-->

<a class="text-primary" href="https://play.google.com/store/apps/details?id=web.id.namawebanda.skripsi"><img src="/images/playbutton.png" width="150" height="50" class="d-inline-block align-top" alt=""></a>
</div>

    </div>
                    </div>
                </div>
            </div>
        </div>
 
</body>
</html>