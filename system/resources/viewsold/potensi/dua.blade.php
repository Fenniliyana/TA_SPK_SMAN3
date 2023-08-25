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
                        <li class="breadcrumb-item active" aria-current="page">Minnat</li>
                     </ol>
                  </nav>
               </div>
               
             
            </div>
<div class="card">
	<div class="card-body">
                    <div class="card-title">
                      <h5 class="mb-0">Isi Form Minat Berikut</h5>
                    </div>
                    <hr>
                    <form action="{{url('potensi/next1')}}" method="post">
                     @csrf
                     <input type="hidden" name="id_kriteria" value="2">
                    	@foreach($list_ekskul as $ekskul)
                     <div class="mb-3">
                           <label for="formFile" class="form-label">Apakah Anda Mempunyai <strong>{{$kriteria->kriteria_nama}}</strong> pada ekstrakulikuler <strong>{{$ekskul->nama}}</strong> ?</label>
                           @foreach($list_jawaban as $jawaban)
                           <div class="form-check">
                           <input class="form-check-input" type="radio" name="jawaban_{{$ekskul->id}}" id="flexRadioDefault1" value="{{$jawaban->id}},{{$jawaban->nilai_utility}}" required>
                           <label class="form-check-label" for="flexRadioDefault1">{{$jawaban->sub_kriteria}}</label>
                           </div>
                           @endforeach
                       
                     </div>
                    	
                    	@endforeach
                    
                    <hr>

                    <nav aria-label="...">
                      <ul class="pagination">
                       
                        <li class="page-item "><a class="page-link" href="javascript:;">1</a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:;">2 
                        	{{-- <span class="visually-hidden">(current)</span> --}}
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;">4</a>
                        </li>
                        <button>Next</button>
                      </ul>

                    </nav>
                    </form>
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