<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{url('public')}}/kemenkeu.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{url('public')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet" />
  <link href="{{url('public')}}/assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="{{url('public')}}/assets/css/pace.min.css" rel="stylesheet" />

  <title>SIMPAN</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                  <img src="{{url('public')}}/assets/images/error/login-img.jpg" class="img-fluid" alt="" width=90%>
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Selamat Datang Admin SPK Ekstrakulikuler SMA 3</h5>
                    <form class="form-body" method="post" action="{{url('proses')}}"> 
                      @csrf
                      <div class="d-grid">
                        
                      </div>
                      <div class="login-separater text-center mb-4">
                       
                      </div>
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Username</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="text" name="username" class="form-control radius-30 ps-5"  placeholder="username" required >
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
                            </div>
                          </div>
                         
                          
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                            </div>
                          </div>
                         
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/js/pace.min.js"></script>


</body>

</html>