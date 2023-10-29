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

  <title>Data Jabatan</title>
    
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
                        <h2>Data Jabatan</h2>
                        <div class="dropdown">
                          <a href="{{ url('tambah-jabatan') }}"> Tambah
                          </a>
                        </div>
                      </div>
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                              <th>Jabatan</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($jabatan as $item)
                                        <tr>
                                            <td>{{$item->jabatan}}</td>
                                            <td>
                                                <a href="{{ url ('update-jabatan' .$item->id) }}" class="btn btn-warning btn-user btn-md">edit </a> |
                                                <a href="{{ url ('hapus-jabatan/'.$item->id) }}" class="btn btn-danger btn-user btn-md">hapus </a>
                                            </td>
                                        </tr>
                            @endforeach
                          </tbody>
                        </table>

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
