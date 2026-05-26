<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'header.php';
?>
<div class = 'about'>
<h1>О нас: </h1>
<h3>Мы научим Вас управлять любым видом речного транспорта,</h3>
<h3> начиная с Катеров заканчивая Баржами</h3>

</div>
<div class="slideshow-container">
  
    <div class="mySlides fade">
        <img src="images\img1.jpg" style="width:100%">
        <div class="text">Катер "Мия"</div>
    </div>
    <div class="mySlides fade">
        <img src="images\img2.jpg" style="width:100%">
        <div class="text">Яхта "Ракета"</div>
    </div>
    <div class="mySlides fade">
        <img src="images\img3.jpg" style="width:100%">
        <div class="text">Баржа "Метеор"</div>
    </div>
    <div class="mySlides fade">
        <img src="images\img4.jpg" style="width:100%">
        <div class="text">Наша пристань</div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
</div>
<div class="dot-container">
    <span class="dot active" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    <span class="dot" onclick="currentSlide(4)"></span>
</div>
<script src='script/script.js'></script>
<?php include 'footer.php'; ?>