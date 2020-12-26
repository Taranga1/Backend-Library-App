{{-- @extends('admin.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <style>
        body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: lighten(#ff0000, 30%);
    cursor: url('https://image.ibb.co/nofzfk/cursor_smallest.png') 20 20, auto;
}
        .cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


/*
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}
*/
      </style>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home Page</title>
    </head>
    <body>
      <div class="cards-list">
  
        <div class="card 1">
          <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
          <div class="card_title title-white">
            <p>Card Title</p>
          </div>
        </div>
        
          <div class="card 2">
          <div class="card_image">
            <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
            </div>
          <div class="card_title title-white">
            <p>Card Title</p>
          </div>
        </div>
        
        <div class="card 3">
          <div class="card_image">
            <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
          </div>
          <div class="card_title">
            <p>Card Title</p>
          </div>
        </div>
          
        <div class="card 4">
          <div class="card_image">
            <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
            </div>
          <div class="card_title title-black">
            <p>Card Title</p>
          </div>
          </div><div class="card 4">
            <div class="card_image">
              <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
              </div>
            <div class="card_title title-black">
              <p>Card Title</p>
            </div>
            </div><div class="card 4">
              <div class="card_image">
                <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
                </div>
              <div class="card_title title-black">
                <p>Card Title</p>
              </div>
              </div>
        
        </div>
    </body>
    </html>
@endsection --}}




@extends('admin.app')


@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <style>
        * {
    margin: 0;
    padding: 0;
}
html {
    background-color: #eefbf8;
    background-image: radial-gradient(circle, hsla(0,0%,100%,.1), hsla(0,0%,0%,.75)),
                      linear-gradient(left, transparent 50%, hsla(0,0%,0%,.01) 50%);
    background-position: 50% 75%, 50% 50%;
    background-repeat: no-repeat, repeat;
    background-size: 150% 150%, 3em 3em;
    font-size: 100%;
    min-height: 10%;
}
  /**********/
 /* Slider */
/**********/

.slider {
    background-color: #fff;
    box-shadow: inset 0 0 2px hsla(0,0%,0%,.2),
                0 3px 1px hsla(0,0%,100%,.75),
                0 -1px 1px 2px hsla(0,0%,0%,.1);
    height: 22em;
    left: 50%;
    margin: -9.875em -13em;
    padding: .5em;
    position: absolute;
    top: 50%;
    width: 25em;
}

/* Frame */

.slider:before {
    background-color: #22130c;
    bottom: -2.5em;
    box-shadow: inset 0 1px 1px 1px hsla(0,0%,100%,.2),
                inset 0 -2px 1px hsla(0,0%,0%,.4),
                0 5px 50px hsla(0,0%,0%,.25),
                0 20px 20px -15px hsla(0,0%,0%,.2),
                0 30px 20px -15px hsla(0,0%,0%,.15),
                0 40px 20px -15px hsla(0,0%,0%,.1);
    content: '';
    left: -2.5em;
    position: absolute;
    right: -2.5em;
    top: -2.5em;
    z-index: -1;
}

/* Mat */

.slider:after {
    background-color: #fff5e5;
    bottom: -1.5em;
    box-shadow: 0 2px 1px hsla(0,0%,100%,.2),
                0 -1px 1px 1px hsla(0,0%,0%,.4),
                inset 0 2px 3px 1px hsla(0,0%,0%,.2),
                inset 0 4px 3px 1px hsla(0,0%,0%,.2),
                inset 0 6px 3px 1px hsla(0,0%,0%,.1);
    content: '';
    left: -1.5em;
    position: absolute;
    right: -1.5em;
    top: -1.5em;
    z-index: -1;
}

/* Slides */

.slider li {
    box-shadow: 0 -1px 0 2px hsla(0,0%,0%,.03);
    list-style:none;
    position: absolute;
}
.slider input {
    display: none;
}

/* Navigation */

.slider label {
    background-color: #111;
    background-image: linear-gradient(transparent, hsla(0,0%,0%,.25));
    border: .2em solid transparent;
    bottom: .5em;
    border-radius: 100%;
    cursor: pointer;
    display: block;
    height: .10em;
    left: 24em;
    opacity: 0;
    position: absolute;
    transition: .25s;
    width: .5em;
    visibility: hidden;
    z-index: 10;
}
.slider label:after {
    border-radius: 100%;
    bottom: -.2em;
    box-shadow: inset 0 0 0 .2em #111,
                inset 0 2px 2px #000,
                0 1px 1px hsla(0,0%,100%,.25);
    content: '';
    left: -.2em;
    position: absolute;
    right: -.2em;
    top: -.2em;
}
.slider:hover label {
    opacity: 1;
    visibility: visible;
}
.slider input:checked + label {
    background-color: #fff;
}
.slider:hover li:nth-child(1) label {
    left: .5em;
}
.slider:hover li:nth-child(2) label {
    left: 2em;
}
.slider:hover li:nth-child(3) label {
    left: 3.5em;
}
.slider:hover li:nth-child(4) label {
    left: 5em;
}

/* Images */

.slider img {
    height: 18em;
    opacity: 0;
    transition: .25s;
    width: 24.2em;
    vertical-align: top;
    visibility: hidden;
}
.slider li input:checked ~ img {
    opacity: 1;
    visibility: visible;
    z-index: 10;
}
​
</style>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home Page</title>
    </head>
    
    <body>
      <ul class="slider">
        <li>
            <input type="radio" id="slide1" name="slide" checked>
            <label for="slide1"></label>
            <img src="https://media.timeout.com/images/105628370/image.jpg" alt="Panel 1">
        </li>
        <li>
            <input type="radio" id="slide2" name="slide">
            <label for="slide2"></label>
           <img src="https://miro.medium.com/max/11914/0*6Th4syvZgyIhhACo" alt="Panel 2">
        </li>
        <li>
            <input type="radio" id="slide3" name="slide">
            <label for="slide3"></label>
            <img src="https://www.magd.cam.ac.uk/sites/default/files/styles/1302x600/public/2017-09/magdalene_college_library.jpg?itok=1v6BgUME" alt="Panel 3">
        </li>
        <li><a href="http://cssslider.com/">
            <input type="radio" id="slide4" name="slide">
            <label for="slide4"></label>
            <img src="https://i0.wp.com/kaha6.com/wp-content/uploads/Skyrider-Secondary-School.-Chitwan.jpg?fit=407%2C326&ssl=1" alt="Panel 4"></a>
        </li>
    </ul>
    
    <!-- Images from Craig Henry's Dribbble profile: http://dribbble.com/craighenry -->
    </body>
    </html>
@endsection