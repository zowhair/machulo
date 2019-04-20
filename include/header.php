
<!-- 
			<header class="default-header " id="navbar-fixed-top" >
				
			</header> -->

<nav class="navbar  navbar-expand-lg sticky-top navbar-light" >
	  <div class="logo ml-auto">
		<a href="index.php"><img style="margin-left: -15%" src="images/new_logo2.png"  alt=""><span style="color:black;font-weight: bold;">Machulo Treks & Tours</span></a>
		</div>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

  <div class="collapse  navbar-collapse " id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packages/trek/trekking.php">Treking</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="packages/climb/climbing.php">Climbing</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="packages/gallery.php">Gallery</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tours</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="packages/tours/autumgb.php">Autum Gilgit-Baltistan</a>
    <a class="dropdown-item" href="packages/tours/skardu.php">Skardu</a>
    <a class="dropdown-item" href="packages/tours/blossomtour.php">Blossom Tour</a>
    <a class="dropdown-item" href="packages/tours/Deosai.php">Deosai Plain</a>
    <a class="dropdown-item" href="packages/tours/silkroute.php">Silk route</a>
    <a class="dropdown-item" href="packages/tours/fairymeadow.php">Fairy Meadows</a>
    <a class="dropdown-item" href="packages/tours/hunza.php">Hunza</a>
    <a class="dropdown-item" href="packages/tours/hushe.php">Hushe Valley</a>
    <a class="dropdown-item" href="packages/tours/naranka.php">Naran Kaghan</a>
    <a class="dropdown-item" href="packages/tours/shimshal.php">Shimshal Valley</a>
		<a class="dropdown-item" href="packages/adventure/safari15d.php">Mountain Safari 15 Days</a>
		<a class="dropdown-item" href="packages/adventure/safari21d.php">Mountain Safari 21 Days</a>
     </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">ABOUT US</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  
  </div>
</nav>

<script type="text/javascript">
	$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>
