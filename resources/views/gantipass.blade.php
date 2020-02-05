<!DOCTYPE html>
<html>
<head>
    <title>Lupa Password - Rekusaha</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
@include('sweet::alert')
<nav class="navbar navbar-expand-lg fixed-top navbar-light border-bottom border-dark" style="background-color: #ecf0f1;">
  <a class="navbar-brand" href="#">

	<img src="/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
	

    <img src="/images/text.png" height="30" class="d-inline-block align-top" alt="">
  </a>
  
  <ul class="navbar-nav mr-auto ">
 
 </ul>
    <span class="navbar-text ">
      <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ Session::get('nama')}}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item text-right" href="/logout">Logout</a>
          <a class="dropdown-item text-right" href="/rekomend">Rekomendasi</a>
        </div>
    </span>
</nav>

<div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card mt-5">
                        <div class="card-body">
                      <div class="text-center">
												<img src="/images/lock.png" width="180" height="180" class="d-inline-block align-top" alt="">
												<h5 class="mt-3">Ganti Password</h5>
												<p class="text-secondary">masukan password lama dan baru anda untuk mengganti password</p>
												
 </div>
 <form action="/gpass/confirm" method="post">
		{{ csrf_field() }}
        <div class="form-group">
			<input class="form-control" type="password" name="passlama" placeholder="Password lama ..." required="required"> <br/>
			<input class="form-control" type="password" name="passbaru" placeholder="Password baru anda..." required="required"> <br/>
			<input class="form-control" type="password" name="kpassbaru" placeholder="Konfirmasi Password baru anda..." required="required"> <br/>
		
		</div>
        <div class="text-center">
		<input class="btn btn-primary" type="submit" value="Pulihkan akun">
        </div>

	    </form>
        </div>
                    </div>
										<div class="card-body text-center">
											<a href="/" class="card-link">Kembali ke login</a>
										</div>
							  </div>
            </div>
        </div>
 
</body>
</html>