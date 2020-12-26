@extends('admin.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <style>
         body {
 
  
    cursor: url('https://image.ibb.co/nofzfk/cursor_smallest.png') 20 20, auto;
}
      </style>
        <style>
             @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
             
body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  padding: 50px;
  text-align: center;
}
.container{
  height: 250px;
  width: 250px;
  overflow: hidden;
  margin: 0 auto;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.3);
  background: linear-gradient(45deg, #7b00e0, #ae31d9);
}
.container:hover{
  height: 470px;
  width: 350px;
  border-radius: 5px;
  box-shadow: 0px 1px 35px 0px rgba(0,0,0,0.3);
}
.container .wrapper img{
  position: relative;
  z-index: 20;
  border-radius: 50%;
  display: block;
  height: 200px;
  width: 200px;
  border: 5px solid #fff;
  object-fit: cover;
  margin: 20px auto;
  transition: all 0.3s ease;
}
.container:hover .wrapper img.active{
  height: 470px;
  width: 350px;
  margin: 0px auto;
  border: none;
  border-radius: 5px;
}
.wrapper .title{
  color: #fff;
  font-size: 30px;
  font-weight: 500;
  padding: 10px;
  line-height: 25px;
}
.wrapper .place{
  color: #fff;
  font-size: 17px;
  line-height: 0px;
  margin: 10px 0;
}
.content{
  color: #fff;
  font-size: 17px;
  margin-top: 10px;
  padding: 1px 20px 10px 20px!important;
}
.content .buttons{
  display: flex;
}
.buttons .btn{
  height: 40px;
  width: 150px;
  margin: 0 5px;
}
.buttons .btn button{
  height: 100%;
  width: 100%;
  background: #fff;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 17px;
  font-weight: 500;
  border-radius: 5px;
  transition: all 0.3s;
}
.btn button:hover{
  transform: scale(0.95);
}
.container .icons{
  position: relative;
  margin-top: -435px;
  margin-left: 10px;
  list-style: none;
}
.container .icons.active{
  display: none;
}
.container .icons li{
  height: 40px;
  width: 40px;
  margin: 5px 0;
  opacity: 0;
  margin-left: -100px;
  transition: all 0.5s ease;
}
.container:hover .icons li{
  opacity: 1;
  margin-left: 7px;
}
.container:hover .icons li:nth-child(2){
  transition-delay: 0.2s;
}
.container:hover .icons li:nth-child(3){
  transition-delay: 0.4s;
}
.container .icons li a{
  color: #7b00e0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  background: #fff;
  display: block;
  line-height: 40px;
  transition: all 0.3s;
}
.container .icons li a:hover{
  transform: scale(0.9);
}

        </style>
        
        <script>
            $('document').ready(function(){
	$('input[type="text"], input[type="email"], textarea').focus(function(){
		var background = $(this).attr('id');
		$('#' + background + '-form').addClass('formgroup-active');
		$('#' + background + '-form').removeClass('formgroup-error');
	});
	$('input[type="text"], input[type="email"], textarea').blur(function(){
		var background = $(this).attr('id');
		$('#' + background + '-form').removeClass('formgroup-active');
	});

function errorfield(field){
	$(field).addClass('formgroup-error');
	console.log(field);	
}

$("#waterform").submit(function() {
	var stopsubmit = false;

if($('#name').val() == "") {
	errorfield('#name-form');
	stopsubmit=true;
}
if($('#email').val() == "") {
	errorfield('#email-form');
	stopsubmit=true;
}
  if(stopsubmit) return false;
});
		
});
        </script>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
	height: 100%;
	padding: 0;
	margin: 0;
	font-family: 'Sniglet', cursive;
}
h1{
	font-weight: normal;
	font-size: 4em;
	font-family: 'Raleway', sans-serif;
	margin: 0 auto;
	margin-top: 30px;
	width: 500px;
	color: #F90;
	text-align: center;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
	0% {margin-left: -235px}
	90% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
	0% {margin-left: -235px}
	70% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

.fish{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
	width: 235px;
	height: 104px;
	margin-left: -235px;
	position: absolute;	
	animation: myfirst 24s;
	-webkit-animation: myfirst 24s;
	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
	animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
}

#fish{
	top: 120px;
}

#fish2{
	top: 260px;
	animation-delay: 12s;
	-webkit-animation-delay: 12s;
}


header{
	height: 160px;
	background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
}

#form{
	height: 100%;	
	background-color: #98d4f3;
	overflow: hidden;
	position: relative;
	
}
form{
	margin: 0 auto;
	width: 500px;
	padding-top: 40px;
	color: white;
	position: relative;
	
	
}
label, input, textarea{
	display: block;	
}
input, textarea{
	width: 500px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 10px;
	font-family: 'Sniglet', cursive;
	font-size: 1em;
	color: #676767;
	transition: border 0.5s;
	-webkit-transition: border 0.5s;
	-moz-transition: border 0.5s;
	-o-transition: border 0.5s;
	border: solid 3px #98d4f3;	
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	
}
input:focus, textarea:focus{
	border: solid 3px #77bde0;	
}

textarea{
	height: 100px;	
	resize: none; 
	overflow: auto;
}
input[type="submit"]{
	background-color: #F90;
	color: white;
	height: 50px;
	cursor: pointer;
	margin-top: 30px;
	font-size: 1.29em;
	font-family: 'Sniglet', cursive;
	-webkit-transition: background-color 0.5s;
	-moz-transition: background-color 0.5s;
	-o-transition: background-color 0.5s;
	transition: background-color 0.5s;
}
input[type="submit"]:hover{
	background-color: #e58f0e;
	
}
label{
	font-size: 1.5em;
	margin-top: 20px;
	padding-left: 20px;
}
.formgroup, .formgroup-active, .formgroup-error{
	background-repeat: no-repeat;
	background-position: right bottom;
	background-size: 10.5%;
	transition: background-image 0.7s;
	-webkit-transition: background-image 0.7s;
	-moz-transition: background-image 0.7s;
	-o-transition: background-image 0.7s;
	width: 566px;
	padding-top: 2px;
}

.formgroup{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');	
}
.formgroup-active{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}
.formgroup-error{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
	color: red;
}
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contect Us</title>
    </head>
    <body>
        <header>
            <h1>Contact us</h1>
        </header>
        
        <div id="form">
        
        <div class="fish" id="fish"></div>
        <div class="fish" id="fish2"></div>
        
        <form id="waterform" method="post">
        @csrf
        <div class="formgroup" id="name-form">
            <label for="name">Your name*</label>
            <input type="text" id="name" name="name" />
        </div>
        
        <div class="formgroup" id="email-form">
            <label for="email">Your e-mail*</label>
            <input type="email" id="email" name="email" />
        </div>
        
        <div class="formgroup" id="message-form">
            <label for="message">Your message</label>
            <textarea id="message" name="message"></textarea>
        </div>
        
            <input type="submit" value="Send your message!" />
        </form>
        </div>


        <br><br>








       


        <!DOCTYPE html>
        <!-- Created By CodingNepal -->
        <html lang="en" dir="ltr">
          <head>
            <meta charset="utf-8">
            <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
            <!-- <title>Profile Card Hover Animation | CodingNepal</title> -->
            <link rel="stylesheet" href="style.css">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          </head>
          <body>
            <div class="container">
              <div class="wrapper">
                <a href="#">
                  <img src="https://lh3.googleusercontent.com/sCnb3k8dFUjDejqCG7mI45q-mJPyrz38i5GHrueTtc51hhdft2Q90LX0znzbi5EWtOa2_0zhshtUI7m__HnFLHQ58Y-hzACVdMWnPHG7KzE3iG1H4CweJ5rrv95AU620yM_Jx1mEzH6CuRG5hyG7b3rIsUD1jE4WdVtAQjNYx9lkeVktS3g0BpYQsQ7NFtigIvfJPnyXvLHoXkjiXH-L2tUlZ2GYbNqD16tCWycYYSNFWIE9LRySj8xEpll9AIU9laUUW2jZ5MSqz19UobDN7CisDkRJEMVAgYl_C2ICB0FcaB8asFXyBSR0q1PbiSqHU1Ik9Ux-YZQbuBqGrDHT0etJA61dHwmawegLfnm4hrsZqYi5VhkwFkQ6W_3uCyLh0-iZppUFqqMeA9GJ_KhVavrGVQthw5xC8K9o2q2D_R5qpblMS1HOOEVYG-mwUs1szXtTKWS5QGuX8f4d4goRWxYRLlrSIV3KW9tmwI77HoE_2AivB0Ca-tFxgDzPRLxAoTZHnCKFbqCVceRYoJ4UPoCBumqjLvw0G_fEcQnOTAcYX-asytIxcUEgkPzEkupB4-InB9K-eV-JGxeEs69IH7i0TElGG-EhqUKz9SNri3m_cYXMWMxX4ixVIE32CwPhmb3ycJKjY3u4QXhLnU6H97sa-PzCWA-s6R3OWRM93WlZs3EPRkFGlC-0L9xvM8o=w510-h903-no?authuser=2" alt="">
                </a>
                <div class="title">
       Taranga Baral</div>
        <div class="place">
        Chitwan, Nepal</div>
        </div>
        <div class="content">
                <p>
        Made By Taranga Baral (Software Developer)</p>
        <div class="buttons">
            
                  <div class="btn">
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmlkCnqCfSsfjkGfLkbvGDPmnQtPTRZsbkpBcfZNkxVmLpspcsqWsjlkrBNSrwPRBVRchV" target="_blank">
                    <button>Message</button>
                    </a>
                  </div>

                  <div class="btn">
                    <a href="tel:9855062372">
                    <button>Call Me</button>
                </a>
                  </div>
            
        
        </div>
        </div><br>
        <div class="icons">
        <li><a href="https://www.facebook.com/tara.baral" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
        <li><a href="https://www.dailymotion.com/dm_72ed6509c9b4f7073cac1548a6f14021" target="_blank"><span class="fab fa-dailymotion"></span></a></li>
        <li><a href="https://www.youtube.com/channel/UCBjc3VKDZE1dpth5pYS87-Q?view_as=subscriber" target="_blank"><span class="fab fa-youtube"></span></a></li>
        </div>
        </div>
        <script>
              const img = document.querySelector("img");
              const icons = document.querySelector(".icons");
              img.onclick = function(){
                this.classList.toggle("active");
                icons.classList.toggle("active");
              }
            </script>
        
          </body>
        </html>
        







    </body>
    </html>
@endsection