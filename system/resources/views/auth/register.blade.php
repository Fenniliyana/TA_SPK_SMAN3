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
    <link rel="stylesheet" href="{{url('public')}}/sweetalert2/dist/sweetalert2.min.css">
    <!-- loader-->
    <link href="{{ url('public') }}/assets/css/pace.min.css" rel="stylesheet" />

    <title>SIMPAN</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper" style="margin-top: 250px;">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                                <img src="{{ url('public') }}/assets/images/error/login-img.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Registrasi</h5>

                                    <form class="form-body" action="{{ url('daftar') }}" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Nama Lengkap</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i></div>
                                                    <input type="text" name="nama"
                                                        class="form-control radius-30 ps-5" id="inputName"
                                                        placeholder="Masukkan Nama Lengkap" required>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">email</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i></div>
                                                    <input type="email" name="email"
                                                        class="form-control radius-30 ps-5" id="inputName"
                                                        placeholder="Masukkan email anda" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">NIS</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fadeIn animated bx bx-link-alt"></i></div>
                                                    <input type="text" name="nis"
                                                        class="form-control radius-30 ps-5" placeholder="Masukkan Nis"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Kelas</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fadeIn animated bx bx-sitemap"></i></div>
                                                    <input type="text" name="kelas"
                                                        class="form-control radius-30 ps-5" placeholder="masukkan kelas"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Alamat</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fadeIn animated bx bx-sitemap"></i></div>
                                                    <input type="text" name="alamat"
                                                        class="form-control radius-30 ps-5"
                                                        placeholder="masukkan alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Jenis Kelamin</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text"
                                                        for="inputGroupSelect01">Pilihan</label>
                                                    <select name="jk" class="form-select" id="inputGroupSelect01"
                                                        required>
                                                        <option value="Laki - Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Tempat Lahir</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fadeIn animated bx bx-sitemap"></i></div>
                                                    <input type="text" name="tmp_lahir"
                                                        class="form-control radius-30 ps-5"
                                                        placeholder="masukkan Jabatan" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Tanggal
                                                    Lahir</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fadeIn animated bx bx-sitemap"></i></div>
                                                    <input type="date" name="tgl_lahir"
                                                        class="form-control radius-30 ps-5"
                                                        placeholder="masukkan Jabatan" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Username</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fadeIn animated bx bx-user-check"></i></div>
                                                    <input type="text" name="username"
                                                        class="form-control radius-30 ps-5"
                                                        placeholder="masukkan Username" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i></div>
                                                    <input type="password" name="password"
                                                        class="form-control radius-30 ps-5" id="inputChoosePassword"
                                                        placeholder="Masukkan Password" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">Sign
                                                        in</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{-- <p class="mb-0">Already have an account? <a href="authentication-signin.html">Sign up here</a></p> --}}
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
    <script src="{{url('public')}}/sweetalert2/dist/sweetalert2.min.js"> </script>
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/pace.min.js"></script>
    <!--plugins-->
    @if (session()->has('ada'))
        <script>
           Swal.fire({
              title: 'MOHON MAAF',
              text: 'Email Yang Anda Masukkan Sudah Terdaftar',
              icon: 'error',
              confirmButtonText: 'Ok'
            });
        </script>
    @endif
  
    
  


</body>

</html>
