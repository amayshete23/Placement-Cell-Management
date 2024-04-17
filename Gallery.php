<!DOCTYPE html>
<html>
<title>BMCC Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Gallery.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="gallery-center">BMCC Gallery</h2>
&nbsp;<button type="button" style="height:40px;width:60px" class="btn btn-primary " onclick="history.back()"><b>Back</b></button>&nbsp;	

<div class="content display-container">
  <img class="mySlides" src="logo.jpeg" style="width:100%">
  <img class="mySlides" src="bmcc.jpeg" style="width:100%">
  <img class="mySlides" src="logo.jpeg" style="width:100%">
  <img class="mySlides" src="bmcc.jpeg" style="width:100%">

  <button class="button black display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="button black display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
