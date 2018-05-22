<!DOCTYPE html>
<html lang="">
<head>
<title>Nalpure</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url(); ?>assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 

    <ul class="nospace">
      <li> ResepKita.com</li>
      <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
    </ul>

  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <section> 
      <div>
        <h1 id="logo"><a href="index.html">Resep Kita</a></h1>
      </div>
      <div>
        <form class="clear" method="post" action="#">
          <fieldset>
            <legend>Search:</legend>
            <input type="search" value="" placeholder="Search Here&hellip;">
            <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </section>
    <nav id="mainav"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="<?php echo base_url().'index.php/Home'; ?>">Home</a></li>
        <li><a class="drop" href="#">Resep Makananan</a>
          <ul>
            <li><a href="<?php echo base_url().'index.php/Daging'; ?>">Daging</a></li>
            <li><a href="<?php echo base_url().'index.php/kripik'; ?>">Kripik</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url().'index.php/Cake'; ?>">Cake Resep</a></li>
        <li><a href="<?php echo base_url().'index.php/Ringan'; ?>">Makanan Ringan</a></li>
        <li><a href="<?php echo base_url().'index.php/Makanan_daerah'; ?>">Makanan Daerah</a></li>
        <li><a href="<?php echo base_url().'index.php/Makanan_hot'; ?>">Makanan Hot</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>


<div class="wrapper row2">
  <section class="hoc container clear"> 
    <?php 
      $data['data'] = isset($data) ? $data : []; 
      $this->load->view($content, $data); 
    ?>
  </section>
</div>



<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">Nulla tincidunt eget</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Elit eros imperdiet</h6>
      <ul class="nospace linklist">
        <li><a href="#">Aenean venenatis leo</a></li>
        <li><a href="#">In nunc elementum sed</a></li>
        <li><a href="#">Commodo nibh congue</a></li>
        <li><a href="#">Donec porttitor nec</a></li>
        <li><a href="#">Ex id egestas in feugiat</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Placerat enim nulla</h6>
      <article class="btmspace-30">
        <h6 class="nospace font-x1"><a href="#">Mollis sed dui tempus</a></h6>
        <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Fusce sodales hendrerit neque dictum porttitor curabitur&hellip;</p>
      </article>
      <article>
        <h6 class="nospace font-x1"><a href="#">Ultrices posuere justo</a></h6>
        <time class="smallfont" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
        <p>Id tincidunt tellus consequat volutpat ut finibus libero&hellip;</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Consectetur orci cras</h6>
      <p class="nospace btmspace-15">Congue eget dolor ac tristique non sapien vulputate ornare enim eu egestas ipsum.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018</p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Sinta Deliani</a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url(); ?>assets/layout/scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>