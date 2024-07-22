<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider</title>
  <style>
    /* Slider container */
    .slider {
      position: relative;
      width: 100%;
      background: #03224233;
    }

    .myslide {
      height: 655px;
      display: none;
      overflow: hidden;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translate(0, -50%);
      font-size: 50px;
      padding: 15px;
      cursor: pointer;
      color: #fff;
      transition: 0.1s;
      user-select: none;
    }

    .prev:hover, .next:hover {
      color: #3498db;
    }

    .next {
      right: 0;
    }

    .dotbox {
      position: absolute;
      left: 50%;
      transform: translate(-50%);
      bottom: 20px;
      cursor: pointer;
    }

    .dot {
      display: inline-block;
      width: 15px;
      height: 15px;
      border: 3px solid #fff;
      border-radius: 50%;
      margin: 0 10px;
      cursor: pointer;
    }

    .active, .dot:hover {
      border-color: #3498db;
    }

    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: 0.8}
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: 0.8}
      to {opacity: 1}
    }

    .txt {
      position: absolute;
      color: #fff;
      letter-spacing: 2px;
      line-height: 35px;
      top: 75%;
      left: 10%;
      -webkit-animation-name: posi;
      -webkit-animation-duration: 2s;
      animation-name: posi;
      animation-duration: 2s;
      z-index: 1;
    }

    @-webkit-keyframes posi {
      from {left: 25%;}
      to {left: 15%;}
    }

    @keyframes posi {
      from {left: 25%;}
      to {left: 15%;}
    }

    .txt h1 {
      color: #3498DB;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .txt p {
      font-weight: bold;
      font-size: 20px;
    }

    .img1, .img2, .img3, .img4, .img5, .img6, .img7, .img8 {
      transform: scale(1.5, 1.5);
      -webkit-animation-name: zoomin;
      -webkit-animation-duration: 40s;
      animation-name: zoomin;
      animation-duration: 40s;
    }

    @-webkit-keyframes zoomin {
      from {transform: scale(1, 1);}
      to {transform: scale(1.5, 1.5);}
    }

    @keyframes zoomin {
      from {transform: scale(1, 1);}
      to {transform: scale(1.5, 1.5);}
    }
  </style>
</head>
<body>
  <!--Untuk Slider Mulai-->
  <div class="slider" id="Beranda">
    <div class="myslide fade" style="display: block;">
      <div class="txt">
        <h1>Turkey</h1>
        <p>Knowledge Knows No Limit</p>
      </div>
      <img src="{{ asset('gambar') }}/TURKI.jpg" alt="" class="img2" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Hogwarts</h1>
        <p>Magically Amusing</p>
      </div>
      <img src="{{ asset('gambar') }}/aaaperpus.jpg" alt="" class="img2" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Bandung</h1>
        <p>Cozy dan Bikin Betah</p>
      </div>
      <img src="{{ asset('gambar') }}/bandung.jpeg" alt="" class="img3" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Jakarta</h1>
        <p>Langkah pasti untuk menjadi lebih baik</p>
      </div>
      <img src="{{ asset('gambar') }}/Jakarta.jpg" alt="" class="img4" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Singapore</h1>
        <p>Knowledge Knows no Bound</p>
      </div>
      <img src="{{ asset('gambar') }}/singapur.jpg" alt="" class="img5" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Korea</h1>
        <p>Books are the Easiest Way to know One's Story</p>
      </div>
      <img src="{{ asset('gambar') }}/kore.jpg" alt="" class="img6" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Jogja</h1>
        <p>Kota yang Istimewa untuk Pelajar</p>
      </div>
      <img src="{{ asset('gambar') }}/jogja.jpg" alt="" class="img7" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Universitas Indonesia</h1>
        <p>The Crystal of Knowledge</p>
      </div>
      <img src="{{ asset('gambar') }}/uii.jpg" alt="" class="img8" style="width: 100%; height: 100%;">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="dotbox" style="text-align: center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
    </div>
  </div>
  <!--Slider End-->
  <script>
    const myslide = document.querySelectorAll('.myslide'),
          dot = document.querySelectorAll('.dot');

    let counter = 1;
    slidefun(counter);

    let timer = setInterval(autoslide, 1500);
    function autoslide() {
      counter += 1;
      slidefun(counter); 
    }
    function plusSlides(n) {
      counter += n;
      slidefun(counter);
      resetTimer();
    }
    function currentSlide(n) {
      counter = n;
      slidefun(counter);
      resetTimer();
    }
    function resetTimer() {
      clearInterval(timer);
      timer = setInterval(autoslide, 8000);
    }

    function slidefun(n){
      let i;
      for(i = 0;i<myslide.length;i++){
        myslide[i].style.display = "none";
      }
      for(i = 0;i<dot.length;i++){
        dot[i].classList.remove('active');
      }
      if(n > myslide.length){
        counter = 1;
      }
      if(n < 1){
        counter = myslide.length;
      }
      myslide[counter - 1].style.display = "block";
      dot[counter - 1].classList.add('active');
    }
  </script>
</body>
</html>
