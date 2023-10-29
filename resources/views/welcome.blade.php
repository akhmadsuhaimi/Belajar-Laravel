
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

<!-- End Homepage Only Scripts -->
</head>
<body>
@include('tools.head')
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide" >
    @foreach ($berita ->slice(0, 3) as $item)
    <div class="featured_box"><img src="{{ $item->gambar }}">
      <div class="floater">
        <h2 value= "{{$item->id }}">{{ $item->judul }}</h2>
        <p> {{ Str::limit($item->isi , 300) }}</p>
        <p class="readmore"><a href="{{ url('Single-Berita-' .$item->url) }}">Continue Reading &raquo;</a></p>
      </div>
    </div>   
    @endforeach     
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <ul>
          <li>
            <h2>Lipsum</h2>
            <div class="imgholder"><img src="images/240x130.gif" alt="" /></div>
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last">
            <h2>Lipsum</h2>
            <div class="imgholder"><img src="images/240x130.gif" alt="" /></div>
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div class="column2">
        <h2>About This Free CSS Template !</h2>
        <img class="imgl" src="images/imgl.gif" alt="" />
        <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
        <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
        <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
        <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
      </div>
    </div>
    <div class="fl_right">
      <h2>Latest From The News Blog</h2>
      <ul>
        @foreach ($berita ->slice(3) as $item)
        <li>
          <div class="imgholder"><a href="#"><img src="{{ $item->gambar }}" alt="" /></a></div>
          <h2 value= "{{$item->id}}">{{ $item->judul }}</h2>
          <p> {{ Str::limit($item->isi , 300) }}</p>
          <p class="readmore"><a href="{{ url('Single-Berita-' .$item->url) }}">Continue Reading &raquo;</a></p>
        </li>
        @endforeach 
      </ul>
      {{ $berita->links() }}
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
@include('tools.footer')

@include('tools.script')
</body>
</html>