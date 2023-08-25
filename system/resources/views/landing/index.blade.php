<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Ektrakurikuler</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{url('public/assets2')}}/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="{{url('public/assets2')}}/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{url('public/assets2')}}/css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="{{url('public/assets2')}}/logo.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{url('public/assets2')}}/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{url('public/assets2')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{url('public/assets2')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
    <link rel="stylesheet" href="{{url('public')}}/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="logo"><a href="#"><img src="{{url('public/assets2')}}/logo.png" style="height:110px"></a></div>
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <div class="togle_3">
                <div class="menu_main">
                  <div class="padding_left0"><a href="{{url('register')}}">Registrasi</a>
                    <span class="padding_left0"><a href="{{url('login')}}">Login</a></span>
                  </div>
                </div>
                <div class="shoping_bag"><img src="{{url('public/assets2')}}/images/search-icon.png"></div>
              </div>
             {{--  <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="services.html">Services</a>
                  <a href="about.html">About</a>
                  <a href="choose.html">Choose</a>
                  <a href="team.html">Team</a>
                  <a href="contact.html">Contact Us</a>
                </div>
              </div> --}}
              {{-- <span class="navbar-toggler-icon"></span>
              <span onclick="openNav()"><img src="{{url('public/assets2')}}/images/toggle-icon.png" class="toggle_menu"></span> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h1 class="banner_taital">ekstrakurikuler</h1>
            <h1 class="banner_taital_1">SMAN 3 KETAPANG</h1>
            <p class="banner_text">Yuk Bergabung Untuk Berpatisipasi bersama ekstrakurikuler SMAN 3 Ketapang</p>
            
          </div>
         
          <div class="col-sm-5">
            <div><img src="{{url('public/assets2')}}/ekskul.png" style="height:350px"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </div>
  <!-- header section end -->
  <!-- services section start -->
 {{--  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Our</span> <img src="{{url('public/assets2')}}/images/icon-1.png"> <span
          style="color: #1f1f1f">Services</span></h1>
      <p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                      aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                      aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                      aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div> --}}
  <!-- services section start -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img src="{{url('public')}}/Ekstrakurikuler.jpg" class="image_2"></div>
        </div>
        <div class="col-md-6">
          <h1 class="services_taital"><span>Tentang </span>  <span
              style="color: #1f1f1f">Ekstrakurikuler</span></h1>
          <p class="ipsum_text"><b>Apa itu Ekstrakurikuler? <br> Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan yang dilakukan di luar jam pelajaran yang dilakukan baik di sekolah atau di luar sekolah dengan tujuan untuk mendapatkan tambahan pengetahuan, keterampilan dan wawasan serta membantu membentuk karakter peserta didik sesuai dengan minat dan bakat masing-masing.</b>
          </p>
          {{-- <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img
                  src="{{url('public/assets2')}}/images/contact-icon1.png"></span></a></div> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- choose section start -->
  {{-- <div class="choose_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Why </span> <img src="{{url('public/assets2')}}/images/icon-1.png"> <span style="color: #1f1f1f">Choose
          Us</span></h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div class="choose_section_2 layout_padding">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">12004+</h1>
              <h4 class="client_text">Our clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">10004+</h1>
              <h4 class="client_text">Happy clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">804+</h1>
              <h4 class="client_text">Supports</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">905+</h1>
              <h4 class="client_text">Awards</h4>
            </div>
          </div>
        </div>
        <div class="image_3"><img src="{{url('public/assets2')}}/images/img-3.png"></div>
        <div class="get_bt"><a href="#">Get A quote</a></div>
      </div>
    </div>
  </div> --}}
  <!-- choose section end -->
  <!-- team section start -->
  <div class="team_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Ekstrakurikuler </span> <span style="color: #1f1f1f">SMAN 3 Ketapang</span>
      </h1>
      <p class="choose_text">Yuk Cari Tahu Lebih Lanjut Tentang Ekstrakurikuler di SMAN 3 Ketapang</p>
      <div class="team_section_2 layout_padding">
        <div class="container">

          @foreach($list_extra as $extra)

            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="{{url('imageEkskul')}}/{{$extra->foto}}" style="height: 100;"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="{{url('public/assets2')}}/images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="{{url('public/assets2')}}/images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="{{url('public/assets2')}}/images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="{{url('public/assets2')}}/images/instagram-icon.png"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-7">
                  <h2 class="consectetur_text">{{$extra->nama}}</h2>
                  <p class="dummy_text">{{$extra->deskripsi}}</p>
                    <div class="row">   
                      <div class="col-md-4 ">
                        <div class="choose_box">
                          <h1 class="client_taital">{{$extra->kuota}}</h1>
                          <h4 class="client_text">Kuota</h4>
                        </div>
                      </div>

                       <div class="col-md-4 ">
                        <div class="choose_box">
                          <h1 class="client_taital">{{$extra->juara}}</h1>
                          <h4 class="client_text">Sisa Kuota</h4>
                        </div>
                      </div>

                    </div>

                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
  <!-- team section start -->
  <!-- newsletter section start -->

  <!-- newsletter section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="footer_main">
        <div class="footer_left">
          <h1 class="contact_taital"><span>Kontak</span></h1>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{url('public/assets2')}}/images/map-icon.png"><span
                class="padding_left_15">Lokasi</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{url('public/assets2')}}/images/call-icon.png"><span class="padding_left_15">008899</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{url('public/assets2')}}/images/map-icon.png"><span
                class="padding_left_15">sma3ketapang@gmail.com</span></a></div>
        </div>
      </div>
      <div class="contact_section">
        <div class="row">

          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10343.037314583342!2d109.96566312179206!3d-1.8287525034390109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05181467577d0d%3A0xe5acfac44cc8415b!2sSMA%20Negeri%203%20Ketapang!5e0!3m2!1sid!2sid!4v1689612839546!5m2!1sid!2sid"
                  width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="{{url('public/assets2')}}/images/fb-icon1.png"></a></li>
                <li><a href="#"><img src="{{url('public/assets2')}}/images/twitter-icon1.png"></a></li>
                <li><a href="#"><img src="{{url('public/assets2')}}/images/linkden-icon1.png"></a></li>
                <li><a href="#"><img src="{{url('public/assets2')}}/images/instagram-icon1.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Developer 2023 By Fenniliyana </p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="{{url('public/assets2')}}/js/jquery.min.js"></script>
  <script src="{{url('public/assets2')}}/js/popper.min.js"></script>
  <script src="{{url('public/assets2')}}/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/assets2')}}/js/jquery-3.0.0.min.js"></script>
  <script src="{{url('public/assets2')}}/js/plugin.js"></script>
  <!-- sidebar -->
  <script src="{{url('public/assets2')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{url('public/assets2')}}/js/custom.js"></script>
  <!-- javascript -->
  <script src="{{url('public/assets2')}}/js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="{{url('public')}}/sweetalert2/dist/sweetalert2.min.js"> </script>
  <script>
    $(document).ready(function () {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function () {

        $(this).addClass('transition');
      }, function () {

        $(this).removeClass('transition');
      });
    });
  </script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
    @if(session()->has('regis'))
      Swal.fire({
        icon: 'success',
        title: 'Berhasi Registrasi Sialhkan Login',
        showConfirmButton: false,
        timer: 1500
      });
    @endif
  </script>
</body>

</html>   