
          <div class="sidebar-header">
            
            <div>
              <h4 class="logo-text">SPK SMAN 3</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->]

          <ul class="metismenu" id="menu">
           
            <li>
              <a href="{{url('dashboard')}}" >
                 <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
        
            @if(Auth::user()->level == 1)
            <li>
              <a href="{{url('ekstrakulikuler')}}">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
               
              <div class="menu-title">Ekstrakurikuler</div>
              </a>
                
            </li>
             <li>
              <a href="{{url('rule/siswa')}}">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Daftar Siswa</div>
              </a>
            </li>
             <li>
              <a href="{{url('rule/kriteria')}}">
                 <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                </div>
                <div class="menu-title">Kriteria</div>
              </a>
            </li>
              
              
              
            </li>

            @endif
            @if(Auth::user()->level == 2)
            
            <li>
              <a href="{{url('profil')}}" >
                 <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
               
                <div class="menu-title">Profil</div>
              </a>
            </li>

             <li>
              <a href="{{url('potensi')}}" >
                 <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Lihat Potensimu</div>
              </a>
            </li>  
            @endif
          
           
          </ul>
       {{--    <div class="sidebar-footer" style="
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    text-align: center;
    color: #fff;
    position: absolute;
    bottom: 0px;
    z-index: -999;
   

          ">
            
            <img src="{{url('public')}}/intress.png" alt="">
          </div> --}}
          <!--end navigation-->