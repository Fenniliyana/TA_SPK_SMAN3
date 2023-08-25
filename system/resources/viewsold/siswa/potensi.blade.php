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
                        <li class="breadcrumb-item active" aria-current="page">Potensi {{$siswa->siswa_nama}}</li>
                     </ol>
                  </nav>
               </div>
               
               
            </div>
<div class="card">
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Ekskul</th>
                  <th>Minat</th>
                  <th>Bakat</th>
                  <th>jadwal</th>
                  <th>Tujuan</th>
                  <th>Total</th>
                  <th>Keterangan</th>
               </tr>
            </thead>
            <tbody>
              @foreach($list_ekskul as $key=>$ekskul)
              <tr>
              	<td>{{$key+1}}</td>
              	<td>{{$ekskul->nama}}</td>
              	<td>@if($ekskul->minat == null)
                     0
                  @else
                     {{$ekskul->minat->nilai}}
                  @endif
               </td>
              	<td>
                  @if($ekskul->bakat == null)
                     0
                  @else
                     {{$ekskul->bakat->nilai}}
                  @endif
               </td>
              	<td>
                  @if($ekskul->waktu == null)
                     0
                  @else
                     {{$ekskul->waktu->nilai}}
                  @endif
               </td>
              	<td>
                  @if($ekskul->tujuan == null)
                     0
                  @else
                     {{$ekskul->tujuan->nilai}}
                  @endif
               </td>
              	<td>
                  {{$ekskul->total}}
               </td>
              	<td>@if($ekskul->total >= 350 and $ekskul->total <= 400)
              		Minat
 					@elseif($ekskul->total == 0)
 					Belum Memiliki Potensi
               @else
               Tidak Berminat
 					@endif
              	</td>
              </tr>

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