<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Tambah Pegawai</title>
    
  <!-- theme meta -->
 @include('admintools.head')
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">


    
    <div id="toaster"></div>
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('admintools.sidebar')

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">               
                <!-- Table Product -->
                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2>Tambah Pegawai</h2>
                        <div class="dropdown">

                        </div>
                      </div>
                      <div class="card-body">
                        <form action="{{ url('simpan-pegawai') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <select type="text" name="jabatan_id" class="form-control" placeholder="Jabatan">
                                    <option value="" disabled selected>pilih Jabatan</option>
                                    @foreach($jab as $item)
                                    <option value= "{{$item->id }}">{{ $item->jabatan }} </option>    
                                    @endforeach                             
                                </select>
                            </div>
                            <div class="form-group">
                              <select type="text" name="agama" class="form-control" placeholder="agama">
                                <option value="" disabled selected>pilih Agama</option>
                                <option> Islam </option> 
                                <option> Kristen </option> 
                                <option> Protestan </option> 
                                <option> Hindu </option> 
                                <option> Budha </option>
                                <option> Konghucu </option>                                 
                            </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <button type="submit"  class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


        </div>
          
        </div>
        
          <!-- Footer -->
          @include('admintools.footer')

      </div>
    </div>




    
                    
                    

    @include('admintools.script')


  </body>
</html>
