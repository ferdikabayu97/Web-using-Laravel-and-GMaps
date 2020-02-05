<!DOCTYPE html>
<html>
<head>
    <title>Registrasi - Rekusaha</title>
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
 
  
</nav>

<div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card mt-5">
                        <div class="card-body">
                      <div class="text-center">
												<img src="/images/text.png" height="50" class="d-inline-block align-top" alt="">
												<p class="text-secondary">Masukan kode verifikasi dari emailmu!</p>
												
 </div>
 <form action="/verifikasi/sending" method="post">
		{{ csrf_field() }}
        <div class="form-group">
			<input class="form-control" type="password" name="verify" placeholder="Kode verifikasi..." required="required"> <br/>
					</div>
        <div class="text-center">
		<input class="btn btn-primary" type="submit" value="kirim kode verifikasi">
        </div>

	    </form>
        </div>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>