@extends('admin.app')

@section('content')
<!DOCTYPE html>
<!-- Created By Taranga Baral -->
<html lang="en">
<head>
 <style>
   img {
  border-radius: 120%;
}
 </style>
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: lighten(#ff0000, 30%);
    cursor: url('https://image.ibb.co/nofzfk/cursor_smallest.png') 20 20, auto;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #ecf0f3;
}
.wrapper,
.wrapper .img-area,
.social-icons a,
.buttons button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
.wrapper{
  position: relative;
  width: 350px;
  padding: 30px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.wrapper .icon{
  font-size: 17px;
  color: #31344b;
  position: absolute;
  cursor: pointer;
  opacity: 0.7;
  top: 15px;
  height: 35px;
  width: 35px;
  text-align: center;
  line-height: 35px;
  border-radius: 50%;
  font-size: 16px;
}
.wrapper .icon i{
  position: relative;
  z-index: 9;
}
.wrapper .icon.arrow{
  left: 15px;
}
.wrapper .icon.dots{
  right: 15px;
}
.wrapper .img-area{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.img-area .inner-area{
  height: calc(100% - 25px);
  width: calc(100% - 25px);
  border-radius: 50%;
}
.inner-area img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.wrapper .name{
  font-size: 23px;
  font-weight: 500;
  color: #31344b;
  margin: 10px 0 5px 0;
}
.wrapper .about{
  color: #44476a;
  font-weight: 400;
  font-size: 16px;
}
.wrapper .social-icons{
  margin: 15px 0 25px 0;
}
.social-icons a{
  position: relative;
  height: 40px;
  width: 40px;
  margin: 0 5px;
  display: inline-flex;
  text-decoration: none;
  border-radius: 50%;
}
.social-icons a:hover::before,
.wrapper .icon:hover::before,
.buttons button:hover:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.buttons button:hover:before{
  z-index: -1;
  border-radius: 5px;
}
.social-icons a i{
  position: relative;
  z-index: 3;
  text-align: center;
  width: 100%;
  height: 100%;
  line-height: 40px;
}
.social-icons a.fb i{
  color: #4267B2;
}
.social-icons a.twitter i{
  color: #1DA1F2;
}
.social-icons a.insta i{
  color: #E1306C;
}
.social-icons a.yt i{
  color: #ff0000;
}
.wrapper .buttons{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttons button{
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 12px 0;
  color: #31344b;
  font-size: 17px;
  font-weight: 400;
  border-radius: 5px;
  cursor: pointer;
  z-index: 4;
}
.buttons button:first-child{
  margin-right: 10px;
}
.buttons button:last-child{
  margin-left: 10px;
}
.wrapper .social-share{
  display: flex;
  width: 100%;
  margin-top: 30px;
  padding: 0 5px;
  justify-content: space-between;
}
.social-share .row{
  color: #31344b;
  font-size: 17px;
  cursor: pointer;
  position: relative;
}
.social-share .row::before{
  position: absolute;
  content: "";
  height: 100%;
  width: 2px;
  background: #e0e6eb;
  margin-left: -25px;
}
.row:first-child::before{
  background: none;
}
.social-share .row i.icon-2{
  position: absolute;
  left: 0;
  top: 50%;
  color: #31344b;
  transform: translateY(-50%);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.row:nth-child(1):hover i.fa-heart,
.row:nth-child(2):hover i.fa-comment{
  opacity: 1;
  pointer-events: auto;
}

  </style>
    <meta charset="UTF-8">
    <!-- <title>Neumorphism Profile Card | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  

  <nav class="navbar navbar-dark bg-dark">
    <!-- Navbar content -->
  </nav>
  
  <nav class="navbar navbar-dark bg-primary">
    <!-- Navbar content -->
  </nav>
  
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
  </nav>


  <div class="wrapper">
    <div class="img-area">
      <div class="inner-area">
        <img src="https://lh3.googleusercontent.com/18_erbK-8uciPdi96k2kVueKCq5I8N4Qhct3wiQ5pGdEK98VpQoe3BwBnCmjaHKY0igiVzaxZj-HLn2swIwnJ-tzHsvzeJ4FO5Z5pyvRNxWyT1k1iuoldDSv2myPVsj0SWnMa7CGQ1OO04AEuDo6hktkPSih0YVtGB12nHUxKqv5QzQT61roln5vQehzKd163Q5ehUp98Lr3ScScAJGZyh27aWFLBCbRzoDu6zGd4g1PEFhhuyKyEPleR78SoTE0SrxodvwVlmLpjcBp4MznHlaZu9vzWfoKiVmpZF7yGCv3nXCo4yrgEzkgsAFAbJTDpoI0ne8D_PDLTh2OtJOze0uY0y3VcMtq-JPGn40QHe4-3QkAuqw3Plo___L_5fUY_X27puA51_ZKFeqdiWE-ooXahQRaiiRmTQFyvDgio1cvCVLlNbrZBs-b7k9YAE7uuO-vR27fEFQFbgbfBl8c2K_p2EvEDJ_qfvCV0biEpL61iPfatirdmd-thY41kqKnM-af7Q7zoIH-WAG-3byJBCg78gMOMjSgJYTY2jKwLDCqn2oTmIoDz_6fyeZCa5nbxgqW4Vl1OvvCwYiv8pdR1AAzZwAq-OULGbNH7vO7z8R3nO04cNoU2BIzuAEy0-nGG_36t-E6MsNA_N5E7pPVYDRK01FU83Gp_WefOvf4mg_2qJvzjaRp85Ta6wlA6pI=w510-h903-no?authuser=2" alt="">
      </div>
    </div>
    <div class="icon arrow"><i class="fas fa-arrow-left"></i></div>
    <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>
    <div class="name">Taranga Baral</div>
    <div class="about">Software Designer and Developer</div>
    <div class="social-icons">
      <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
      <a href="#" class="yt"><i class="fab fa-youtube"></i></a>
    </div>
    <div class="buttons">
      <button>Message</button>
      <button>Subscribe</button>
    </div>
    <div class="social-share">
      <div class="row">
        <i class="far fa-heart"></i>
        <i class="icon-2 fas fa-heart"></i>
        <span>20.4k</span>
      </div>
      <div class="row">
        <i class="far fa-comment"></i>
        <i class="icon-2 fas fa-comment"></i>
        <span>14.3k</span>
      </div>
      <div class="row">
        <i class="fas fa-share"></i>
        <span>12.8k</span>
      </div>
    </div>
  </div>


  <div class="wrapper"><h1>Read More</h1></div>






  
 

  
  
</body>
</html>

@endsection