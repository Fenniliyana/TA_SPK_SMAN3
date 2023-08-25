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
                        <li class="breadcrumb-item active" aria-current="page">Ekstrakulikuler</li>
                     </ol>
                  </nav>
               </div>
               
               <div class="ms-auto">
                  <div class="btn-group">
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal">Tambah Ekskul</button>
                    
                  </div>
               </div>
            </div>
<div class="card">
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
              @foreach($list_ekskul as $key=>$ekskul)
              <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$ekskul->nama}}</td>
                 <td>{{$ekskul->deskripsi}}</td>
                 <td><div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill" data-bs-toggle="modal" data-bs-target="#edit{{$ekskul->id}}"></i></a>
                              <a href='{{url("jenis/hapus/$ekskul->id")}}' class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" onclick="return confirm('Apakah Anda Yakin Menghapus?')"><i class="bi bi-trash-fill"></i></a>
                     </div>
                  </td>
              </tr>
               {{--    <div class="modal fade" id="edit{{$jenis->id}}" tabindex="-1" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form class="row g-3" action='{{url("jenis/edit/$jenis->id")}}' method="post">
                                 @csrf
                                    <div class="col-12">
                                      <label class="form-label">Deskripsi</label>
                                      <input type="text" name="deskripsi" class="form-control" value="{{$jenis->deskripsi}}">
                                    </div>
                                    
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                                  </form>
                           </div>
                        </div>
                     </div>
                  </div> --}}

              @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
@endsection

<div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Tambah Ekstrakulikuler</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form class="row g-3" action="{{url('ekstrakulikuler/add')}}" method="post">
               @csrf
                  <div class="col-12">
                    <label class="form-label">Ektrakulikuler</label>
                    <input type="text" name="nama" class="form-control" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Tentang Eksstrakulikuler</label>
                    <textarea type="text" name="deskripsi" class="form-control" required></textarea>
                  
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