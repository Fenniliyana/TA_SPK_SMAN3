<nav class="navbar navbar-expand gap-3 ">
   <div class="mobile-toggle-icon fs-3">
      <i class="bi bi-list"></i>
   </div>
  

   <div class="top-navbar-right ms-auto">
      <ul class="navbar-nav align-items-center">
         <li class="nav-item search-toggle-icon">
            <a class="nav-link" href="#">
               <div class="">
                  <i class="bi bi-search"></i>
               </div>
            </a>
         </li>
         {{-- <button class="btn btn-outline-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal">Tambah Laporan</button> --}}
        
         <li class="nav-item dropdown dropdown-user-setting">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
               <div class="user-setting d-flex align-items-center">
                  <img src="{{url('public')}}/logosma3.png" class="user-img" alt="">
               </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
               <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="{{url('public')}}/logosma3.png" alt="" class="rounded-circle" width="54" height="54">
                        <div class="ms-3">
                           <h6 class="mb-0 dropdown-user-name">{{Auth::user()->nama}}</h6>
                           <small class="mb-0 dropdown-user-designation text-secondary">{{Auth::user()->jabatan}}</small>
                        </div>
                     </div>
                  </a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li>
                  <a class="dropdown-item" href="{{url('logout')}}">
                     <div class="d-flex align-items-center">
                        <div class=""><i class="bi bi-lock-fill"></i></div>
                        <div class="ms-3"><span>Logout</span></div>
                     </div>
                  </a>
               </li>
            </ul>
         </li>
      </ul>
   </div>
</nav>
<div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form class="row g-3" action="{{url('laporan/create')}}" method="post">
               @csrf
                  <div class="col-12">
                    <label class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Data Dukung</label>
                    <input type="text" name="data_dukung" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Tanggal Akhir</label>
                    <input type="date" name="tgl_akhir" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Tanggal Disusun</label>
                    <input type="date" name="tgl_disusun" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">PIC</label>
                    <input type="text" name="pic" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Jenis Laporan</label>
                    <select name="jenis_laporan" class="form-control" id="">
                        <option value="">--Pilih--</option>
                       <option value="1">Bulanan</option>
                       <option value="2">Triwulan</option>
                       <option value="3">Semester</option>
                       <option value="4">Tahunan</option>
                    </select>
                  
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