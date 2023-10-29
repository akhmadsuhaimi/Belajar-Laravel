<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="dashboard">
          <img src="admin/images/logo.png" alt="Mono">
          <span class="brand-name">Admin</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-left" data-simplebar style="height: 100%;">
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="section-title">
              Apps
            </li>
          
            <li  class="has-sub" >
              <a class="sidenav-item-link"  href="{{ url('dashboard') }}">
                <i class="mdi mdi-email"></i>
                <span class="nav-text">Surat Masuk</span>
              </a>
            </li>
          

          
          

          
            <li class="section-title">
              Pages
            </li>
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                aria-expanded="false" aria-controls="Master Data">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Master Data</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="users"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  <li >
                    <a class="sidenav-item-link" href="{{ url('data-berita') }}">
                      <span class="nav-text">Data Berita</span>
                    </a>
                  </li>
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="{{ url('pegawai-admin') }}">
                          <span class="nav-text">Data Pegawai</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="{{ url('jabatan') }}">
                          <span class="nav-text">Data Jabatan</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="{{ url('pengajuan') }}">
                          <span class="nav-text">Data Pengajuan</span>
                          
                        </a>
                      </li>
                    
                  

                  
            
                    
                  

                  
                </div>
              </ul>
            </li>
          

          

          

          

          

          
        </ul>

      </div>
    </div>
  </aside>