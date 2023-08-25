@extends('template.base')
@section('content')
@php
 function tgl_indo($tanggal){
      $bulan = array (
         1 =>   'Januari',
         'Pebruari',
         'Maret',
         'April',
         'Mei',
         'Juni',
         'Juli',
         'Agustus',
         'September',
         'Oktober',
         'Nopember',
         'Desember'
      );
      $pecahkan = explode('-', $tanggal);
    
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
   }

@endphp
<div class="row"> 
@if(Auth::user()->level == 2)

<h1 class="mb-0 text-uppercase">Welcome Home</h2>
<h2 class="mb-0 text-uppercase">{{Auth::user()->nama}}</h2>

@endif
@if(Auth::user()->level == 1)

            <h6 class="mb-0 text-uppercase">Selamat Datang</h6>
            <h6 class="mb-0 text-uppercase">Admin</h6>
            <hr>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
              <div class="col">
                <div class="card radius-10 border-0 border-start border-tiffany border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Direkomendasikan</p>
                        <h4 class="mb-0 text-tiffany">{{$minat}}</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-tiffany text-white">
                        <i class="bi bi-bag-check-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 border-0 border-start border-success border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Siswa mengikuti</p>
                        <h4 class="mb-0 text-success">{{$minat}}</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-success text-white">
                        <i class="bi bi-wallet"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 border-0 border-start border-pink border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Ekstrakurikuler</p>
                        <h4 class="mb-0 text-pink">{{$ekskul}}</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-pink text-white">
                        <i class="bi bi-bar-chart-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 border-0 border-start border-orange border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Siswa Terdaftar</p>
                        <h4 class="mb-0 text-orange">{{$siswa}}</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-orange text-white">
                        <i class="bi bi-person-plus-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>

              </div><!--end row-->
               
@endif
</div>
{{-- <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4"> --}}
  {{--  <div class="col">
      <div class="card radius-10">
         <div class="card-body">
            <div class="d-flex align-items-center">
               <div class="">
                  <p class="mb-1">Ekstrakul karate</p>
                  <h4 class="mb-0 text-primary">{{$bulan}}</h4>
                  
               </div>
               <div class="ms-auto">
                  <div class="w_chart" id="bulanan" data-percent="{{$bulananSelesai*100}}">
                     <span class="w_percent"></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> --}}
  
{{-- </div> --}}
<!--end row-->
@endsection
@section('script')
<script>
@if(session()->has('welcome'))
   Swal.fire({
     title: 'SPK SMAN 3 Ketapang',
     text: 'Selamat Datang {{Auth::user()->nama}}',
     icon: 'success',
     confirmButtonText: 'Ok'
   });
@endif


</script>
@endsection