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
                        <li class="breadcrumb-item active" aria-current="page">Ekstrakurikuler</li>
                     </ol>
                  </nav>
               </div>
               
               <div class="ms-auto">
                  <div class="btn-group">
                     <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal"><i class="fadeIn animated bx bx-list-plus"></i>Tambah Kriteria</button>
                    
                  </div>
               </div>
            </div>
<div class="card">
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>NO</th>
                  <th>KRITERIA</th>
                  <th>BOBOT</th>
                  <th>BOBOT TERNORMALISASI</th>
                  <th>AKSI</th>
               </tr>
            </thead>
            <tbody>
              @foreach($list_kriteria as $key=>$kriteria)
              <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$kriteria->kriteria_nama}}</td>
                 <td>{{$kriteria->kriteria_bobot}}</td>
                 <td>{{$kriteria->normalisasi}}</td>
                 <td><div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill" data-bs-toggle="modal" data-bs-target="#edit{{$kriteria->id}}"></i></a>
                              {{-- <a href='{{url("rule/kriteria/hapus/$kriteria->id")}}' class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" onclick="return confirm('Apakah Anda Yakin Menghapus?')"><i class="bi bi-trash-fill"></i></a> --}}
                     <a class="btn btn-outline-primary" href='{{url("rule/kriteria/utility/$kriteria->id")}}'> Utility</a>
                     </div>
                  </td>
              </tr>
                  <div class="modal fade" id="edit{{$kriteria->id}}" tabindex="-1" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form class="row g-3" action='{{url("rule/kriteria/edit/$kriteria->id")}}' method="post">
                                 @csrf
                                    <div class="col-12">
                                      <label class="form-label">Nama Kriteria</label>
                                      <input type="text" name="kriteria" class="form-control" value="{{$kriteria->kriteria_nama}}">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Bobot</label>
                                      <input type="text" name="bobot" class="form-control" value="{{$kriteria->kriteria_bobot}}">
                                    </div>
                                    
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                                  </form>
                           </div>
                        </div>
                     </div>
                  </div>

              @endforeach
            </tbody>
           
         </table>
      </div>
   </div>
</div>
@endsection

<div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Tambah Kriteria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form class="row g-3" action="{{url('rule/kriteria/add')}}" method="post">
               @csrf
                  <div class="col-12">
                    <label class="form-label">Nama Kriteria</label>
                    <input type="text" name="kriteria" class="form-control" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Bobot Kriteria</label>
                    <input type="number" name="bobot" class="form-control" required>
                  
                  </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
         </div>
      </div>
   </div>
</div>
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