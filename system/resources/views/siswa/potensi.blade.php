@extends('template.base')
@section('content')
@php
function tgl_indo($tanggal)
{
$bulan = [
1 => 'Januari',
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
'Desember',
];
$pecahkan = explode('-', $tanggal);
return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}
@endphp
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
   <div class="ps-3">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Potensi {{ $siswa->siswa_nama }}</li>
         </ol>
      </nav>
   </div>
</div>
<div class="card">
   <div class="card-header py-4 d-flex flex-column align-items-center justify-content-center">
      <i class="lni lni-slack logo-icon"></i>
      <h5 class="mb-0 text-uppercase mt-2 mb-2">{{$ratingTertinggi->Ekskul->nama}}</h5>
      <h6 class="badge rounded-pill alert-success text-capitalize">Direkomendasikan</h6>
      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#rangking" >Perangkingan</button>
   </div>
   <a href="javascript:;" class="text-info" >Rangking</a>
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Ekstrakurikuler</th>
                  <th>Minat</th>
                  <th>Bakat</th>
                  <th>Pengalaman</th>
                  <th>Prestasi</th>
                  <th>Total</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($list_ekskul as $key => $ekskul)
               <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $ekskul->nama }}</td>
                  <td>
                     @if ($ekskul->minat == null)
                     0
                     @else
                     {{ $ekskul->minat->nilai_normalisasi }}
                     @endif
                  </td>
                  <td>
                     @if ($ekskul->bakat == null)
                     0
                     @else
                     {{ $ekskul->bakat->nilai_normalisasi }}
                     @endif
                  </td>
                  <td>
                     @if ($ekskul->waktu == null)
                     0
                     @else
                     {{ $ekskul->waktu->nilai_normalisasi }}
                     @endif
                  </td>
                  <td>
                     @if ($ekskul->tujuan == null)
                     0
                     @else
                     {{ $ekskul->tujuan->nilai_normalisasi }}
                     @endif
                  </td>
                  <td>
                     {{ $ekskul->total }}
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="modal fade" id="rangking" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Rangking</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
               aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Rangking</th>
                     <th>Nama Ekstrakurikuler</th>
                     <th>Nilai</th>
                     <th>Keterangan</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($list_ranking as $key=>$rangking)
                  <tr>
                     <td>{{$key+1}}</td>
                     <td>{{$rangking->Ekskul->nama}}</td>
                     <td>{{$rangking->nilai}}</td>
                     <td>
                        @if($rangking->status_kuota == 1)
                        <h6 class="badge rounded-pill alert-danger text-capitalize">Sudah Memenuhi Kuota</h6>
                        @else
                        @if($rangking->id_ekskul == $ratingTertinggi->id_ekskul)
                        <h5 class="badge rounded-pill alert-success text-capitalize">Direkomendasikan</h5>
                        @else
                        <h5 class="badge rounded-pill alert-warning text-capitalize">Tidak Mendominasi</h5>
                        @endif
                        @endif
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
               data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')
@if (session()->has('edit'))
<script>
   alert('berhasil di edit');
</script>
@endif
@if (session()->has('berhasil'))
<script>
   alert('berhasil di tambah');
</script>
@endif
@if (session()->has('hapus'))
<script>
   alert('berhasil di hapus');
</script>
@endif
@endsection