
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ramania.desa.id</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<body>
  @include('tools.head')
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="content">
        <div class="column2">
            <h2>{{ $single->judul }}</h2>           
            <img class="imgl" src="{{ $single->gambar }}" alt="" height="150" width="250" />
            <label for="label">Tanggal Terbit : {{ date('d/m/Y', strtotime($single->tgl)) }}</label> <br>
            <p>{{ $single->isi }}</p>
          </div>


        {{-- <tbody>
            <label for="label">Tanggal Terbit : {{ date('d/m/Y', strtotime($single->tgl)) }}</label> <br>
            <h1>{{ $single->judul }}</h1>
            <p>{{ $single->isi }}</p>
        </tbody> --}}
      
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Berita Terkini</h2>
        <ul>
          <li><a href="#">Pencuri Sawit Tewas Ditembak Polisi di Way Kanan, Massa Bakar Kantor PT AKG</a></li>
            <ul>
              <li><a href="#">Misteri Kematian Pencuri di Sumsel Tewas Penuh Luka Usai Ditangkap</a></li>
              <li><a href="#">Curi Sawit, Seorang Warga di Way Kanan Lampung Tewas Ditembak Polisi</a></li>
            </ul>
          </li>
          <li><a href="#">Mahasiswa UI Tewas Tertabrak Pensiunan Polisi Jadi Tersangka, Ini Kata Mahfud</a>
            <ul>
              <li><a href="#">Polda Metro Bentuk Tim Pencari Fakta Terkait Kecelakaan Maut Mahasiswa UI</a></li>
              <li><a href="#">Mahasiswa UI Tewas tapi Tersangka, Legislator PD: Tak Adil dan Tak Wajar</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title"><img src="../images/demo/60x60.gif" alt="" />Pencuri Sawit Tewas Ditembak Polisi di Way Kanan, Massa Bakar Kantor PT AKG</h2>
        <p>Seorang pria bernama Ansori tewas ditembak polisi karena diduga mencuri sawit PT AKG di Kecamatan Bahuga, Way Kanan, Lampung. Warga yang tak terima kemudian menyerang kantor PT AKG dan mencari oknum polisi itu.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div id="featured">
        <ul>
          <li>
            <h2>Mahasiswa UI Tewas Tertabrak Pensiunan Polisi Jadi Tersangka, Ini Kata Mahfud</h2>
            <p>Anggota Komisi III DPR Fraksi Demokrat, Didik Mukrianto, juga menyoroti Polda Metro Jaya yang menetapkan mahasiswa Universitas Indonesia (UI), M Hasya Attalah Syaputra (18), sebagai tersangka kasus kecelakaan yang menewaskan dirinya. Didik menekankan keputusan itu tidak adil dan tidak wajar.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
@include('tools.footer')

@include('tools.script')
</body>
</html>