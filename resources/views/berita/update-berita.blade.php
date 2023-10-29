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

  <title>Update Berita</title>
    
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
                        <h2>Update Berita</h2>
                        <div class="dropdown">
                        </div>
                      </div>
                      <div class="card-body">
                        <form action="{{ url('perubahan-berita/' .$berita->id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="date" name="tgl" class="form-control" placeholder="Tanggal"  value="{{$berita->tgl}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{$berita->judul}}">
                            </div>
                            <div class="form-group">
                                <textarea  name="isi" class="form-control form-control-user " 
                                    placeholder="Isi Berita" ></textarea>
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
