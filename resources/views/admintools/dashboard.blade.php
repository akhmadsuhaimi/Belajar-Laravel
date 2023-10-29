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

  <title>Dashboard</title>
    
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
                        <h2>Surat Masuk</h2>
                      </div>
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Nik</th>
                              <th>No Hp</th>
                              <th>Jenis Pengajuan</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($surat as $item)
                                        <tr>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->nik}}</td>
                                            <td>{{$item->nohp}}</td>
                                            <td>{{$item->pengajuan->jenispengajuan}}</td>
                                            <td>{{$item->keterangan}}</td>                                          
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
