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
                  @if(Auth::user()->level == 1)
                      <span class="badge bg-dark ">Admin</span>
                    @else
                      <span class="badge bg-dark ">Siswa</span>
                    @endif
        
         <li class="nav-item dropdown dropdown-user-setting">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
               <div class="user-setting d-flex align-items-center">
                  <img src="{{url('public')}}/logo.png" class="user-img" alt="" height="300">
               </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
               <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="{{url('public')}}/logo.png" alt="" class="rounded-circle" height="80">
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