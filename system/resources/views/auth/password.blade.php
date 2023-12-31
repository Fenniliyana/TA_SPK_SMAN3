<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('public') }}/kemenkeu.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets/css/style.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ url('public') }}/assets/css/pace.min.css" rel="stylesheet" />

    <title>SPK SMA 3 KETAPANG</title>
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
                  <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                    <img src="{{url('public')}}/assets/images/error/forgot-password-frent-img.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6">
                    <div class="card-body p-4 p-sm-5">
                      <h5 class="card-title">Buat Password Baru Kamu</h5>
                      <p class="card-text mb-5">Buatlah Password yang mudah buat kamu ingat</p>
                      <form class="form-body" method="POST" action="{{url('forgot/newpassword')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                          <div class="row g-3">
                            <div class="col-12">
                              <label for="inputEmailid" class="form-label">Password baru</label>
                              <input type="password" name="password" class="form-control form-control-lg radius-30" id="inputEmailid" placeholder="Password baru">
                            </div>
                            <div class="col-12">
                              <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-lg btn-primary radius-30">Buat Password</button>
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
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/pace.min.js"></script>


</body>

</html>
