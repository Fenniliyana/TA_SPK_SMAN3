@extends('template.base')
@section('content')

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

<div class="row">
   
<div class="col-12 col-lg-4"></div>
 <div class="col-12 col-lg-4">
                <div class="card border shadow-none bg-warning radius-10">
                          <div class="card-body">
                              <h5>Informasi Pendaftaran</h5>
                               <div class="d-flex align-items-center gap-3">
                                  <div class="fs-1">
                                    <i class="bi bi-person-square"></i>
                                  </div>
                                  <div class="">
                                    <p class="mb-0 fs-6"><strong>{{Auth::user()->Siswa->siswa_nama}}</strong> </p>
                                  </div>
                               </div>
                              <p>Terimakasih Sudah Mengisi Pertanyaan <br>
                                 Tunggu Peorses Penilaian Ekstrakulikuler <br>
                                 Untuk Informasi Lebih Lanjut <br>
                                 Hubungi : 0896******93
                              </p>
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