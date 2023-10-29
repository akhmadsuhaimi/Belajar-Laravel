
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
      <h1>Profil Desa</h1>
      <img class="imgr" src="/images/batola.png" alt="" width="125" height="125" />
      <p>Kelurahan dan Desa  merupakan salah satu unsur kewilayahan terkecil di dalam Negara Kesatuan Republik Indonesia. Walaupun demikian, Desa/Kelurahan mempunyai peran strategis dalam pencapaian sasaran pembangunan.</p>
      <p>Hal ini dikarenakan pada tingkat Desa/Kelurahan-lah secara faktual aktifitas Pemerintahan berjalan dan sebagian besar penduduk Indonesia masih terkonsentrasi saat ini.</p>
      <p>Sudah selayaknya di tingkat Desa/Kelurahan-lah menjadi pusat aktifitas Pemerintahan, Pembangunan dan Pemberdayaan Masyarakat, termasuk juga penyusunan data dasar dalam mendukung berbagai aktifitas tersebut.</p>
      <p>Data yang valid dan akuntabel merupakan salah satu elemen penting dalam perencanaan pembangunan baik di tingkat pusat maupun pada tingkat daerah. Namun fenomena selama ini, perhatian terhadap penyusunan data yang akurat tersebut,</p>
      <p>khususnya data base pada tingkat Desa/Kelurahan, masih belum optimal. Sebagai contoh dapat dilihat dari perbedaan data jumlah penduduk, jumlah penduduk miskin, anak putus sekolah maupun jumlah pemilih.</p>
      <P>Profil Desa merupakan gambaran menyeluruh tentang karakter desa yang meliputi Data Dasar Keluarga, Potensi SDA, SDM, Kelembagaan, Prasarana dan Sarana, serta Perkembangan Kemajuan & Permasalahan yang dihadapi.</p> 
      <p>Secara khusus Penginputan, Penyusunan Profil Desa dan Monografi Desa  sebagai alat pendataan Desa merupakan kumpulan data komprehensif (multi sektoral), yang diharapkan dapat mengakomodasikan kebutuhan data bagi pemanfaat data.</p> 
      <p>Data atau informasi Profil Desa akan membantu Dinas/Sektor/Instansi dan masyarakat dalam melaksanakan program-program pembangunan secara cepat dan sesuai dengan kebutuhan Desa masing-masing.</p>
      <h2>Perangkat Desa Ramania</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        @foreach($pegawai as $item)
        <tbody>
          <tr class="dark">
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jabatan->jabatan }}</td>
            <td>
              <a href="{{ url ('Single-Pegawai-' .$item->id) }}">Lihat </a> 
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div id="comments">
        <h2>VISI Dan MISI</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author">
              <span>VISI :</a></span></div>
            <p>MELAYANI MASYARAKAT DESA SECARA MENYELURUH DEMI TERWUJUDNYA DESA YANG MAJU, MANDIRI, SEHAT DAN SEJAHTERA..</p>
          </li>
          <li class="comment_odd">
            <div class="author">
              <span>MISI :</a></span></div>
            <p>1. Mengoptimalkan kinerja aparatur desa secara maksimal sesuai tugas pokok dan fungsinya 
                  masing-masing demi tercapainya pelayanan yang baik bagi masyarakat.</p>
            <p>2. Melaksanakan koordinasi antar mitra kerja pemerintah desa.</p>
            <p>3. Meningkatkan kualitas sumber daya manusia dan memanfaatkan 
                  sumber daya alam untuk mencapai kesejahteraan masyarakat.</p>
            <p>4. Meningkatkan kapasitas kelembagaan yang ada di Desa Karangdukuh.</p>
            <p>5. Meningkatkan kualitas kesehatan masyarakat..</p>
          </li>
        </ul>
      </div>
      
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
                </ul>
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
@include('tools.footer')

@include('tools.script')
</body>
</html>