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
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
               <div class="ps-3">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Potensi Saya</li>
                     </ol>
                  </nav>
               </div>
               
               
            </div>
<div class="card">
   <div class="card-header py-4 d-flex flex-column align-items-center justify-content-center">
     <i class="lni lni-slack logo-icon"></i>
     <h5 class="mb-0 text-uppercase mt-2 mb-2">Ekstrakurikuler Siswa</h5>
     <h6 class="badge rounded-pill alert-success text-capitalize">Direkomendasikan</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Ekstrakurikuler</th>
                  <th>Capaian Nilai</th>
                  <th>Keterangan</th>
               </tr>
            </thead>
            <tbody>
            @foreach($list_rating as $one=>$ratingTertinggi)
              <tr>
                <td>{{$one+1}}</td>
                <td>{{$ratingTertinggi->Ekskul->nama}}</td>
                <td>{{$ratingTertinggi->peroleh_nilai}}</td>
               <td><h6 class="badge rounded-pill alert-success text-capitalize">Direkomendasikan</h6></td>
              </tr>
            @endforeach
              @foreach($list_terpenuhi as $terpenuhi)
              @php
                  $key = 1
              @endphp
              <td>{{$key+1}}</td>
               <td>{{$terpenuhi->Ekskul->nama}}</td>
               <td>{{$terpenuhi->nilai}}</td>
               <td><h6 class="badge rounded-pill alert-danger text-capitalize">Sudah memenuhi Kuota</h6></td>
              @endforeach
            </tbody>
            
         </table>
      </div>
   </div>
</div>
@endsection

@section('script')
@if(session()->has('edit'))
   <script>
      alert('berhasil di edit');
   </script>
@endif

@if(session()->has('berhasil'))
   <script>
      alert('berhasil di tambah');
   </script>
@endif

@if(session()->has('hapus'))
   <script>
      alert('berhasil di hapus');
   </script>
@endif
@endsection