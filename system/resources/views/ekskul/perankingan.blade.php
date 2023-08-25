@extends('template.base')
@section('content')
<div class="card">
    <div class="card-body">
         <h5 class="card-title mb-0">Data Rangking Siswa Sesuai Ekstrakurikuler</h5>
                   <div class="my-3 border-top"></div>
        <table  id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ekstrakurikuler</th>
                    <th>Kuota</th>
                    <th>Peringkat Siswa</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($list_ekskul as $key=>$ekskul)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$ekskul->nama}}</td>
                    <td>{{$ekskul->kuota}} Peserta</td>
                    <td><button data-bs-toggle="modal" data-bs-target="#rangking_{{$ekskul->id}}" href="" class="btn btn-outline-primary"><i class="bi bi-eye"></i> Lihat</button></td>
{{-- modal  --}}
<div class="modal fade" id="rangking_{{$ekskul->id}}" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Rangking {{$ekskul->nama}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
               aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <ul class="list-group">
                @foreach($ekskul->ranking as $key=>$ranking)
                <li class="list-group-item d-flex justify-content-between align-items-center"><span class="badge bg-primary rounded-pill">{{$key+1}}</span> @if($ranking->Siswa == null)  @else {{$ranking->Siswa->siswa_nama}}  ( {{$ranking->nilai}} )@endif  
                                    </li>

                @endforeach
            </ul>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
               data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
                    
                </tr>   
                @endforeach
            </tbody>

        </table>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <h5 class="card-title mb-0">Data Tertinggi Siswa</h5> 
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 text-justify">
                @if($jumlah_rating == null)
                    <a href="{{url('rule/perangkingan/siswa')}}" class="btn btn-outline-primary"><i class="bi bi-eye"></i> Ranking</a>
                @else
                    <a href="{{url('rule/perangkingan/siswa/maxakhir')}}" class="btn btn-outline-primary"><i class="bi bi-eye"></i> Data Setelah Di Rangking</a>
                @endif
            </div>
        </div>
        
                   <div class="my-3 border-top"></div>
        <table  id="baru" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Ekstrakurikuler</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_siswa as $key=>$siswa)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$siswa->siswa_nama}}</td>
                    <td>
                        @if($siswa->nilaiTinggi == null)
                        Belum Mengisi Pertanyaan
                        @else
                        {{$siswa->nilaiTinggi->Ekskul->nama}}
                        @endif
                    </td>
                    <td>@if($siswa->nilaiTinggi == null)
                        Belum Mengisi Pertanyaan
                        @else
                        {{$siswa->nilaiTinggi->nilai}}
                        @endif</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div> 
@endsection
@section('script')
<script>
    $(function() {
    "use strict";

    $(document).ready(function() {
        $('#baru').DataTable();
      } );

});
</script>
@if(session()->has('berhasil'))
<script>
    Swal.fire({
     title: 'Berhasil Ranking Siswa',
     text: 'Cek data setelah Di ranking',
     icon: 'success',
     confirmButtonText: 'Ok'
   });
</script>
@endif
@endsection
