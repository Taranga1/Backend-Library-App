@extends('admin.app')

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
        <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Dashed border */
hr.dashed {
  border-top: 3px dashed #bbb;
}

/* Dotted border */
hr.dotted {
  border-top: 3px dotted #bbb;
}

/* Solid border */
hr.solid {
  border-top: 3px solid #bbb;
}

/* Rounded border */
hr.rounded {
  border-top: 8px solid #bbb;
  border-radius: 5px;
}
</style>
    </style>
    <style>
        body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content:center;
    align-items: center;
    min-height: 100vh;
    background: #e9e9e9;
    font-family: sans-serif;
  }
  .box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }
  .card{
    position: relative;
    width: 300px;
    height: 350px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
   } 
    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Layered Card Hover</title>
</head>
<body>
    

    <hr class="rounded">
    <h3> &nbsp; &nbsp; &nbsp; &nbsp; People Who Borrowed Book <br> <br> &nbsp; &nbsp; &nbsp; &nbsp; ( Not Returned)</h3><br><br>
  <div class="box">
      <div class="card">
        <div class="imgBx">
            <img src="https://imgk.timesnownews.com/70538313_2554690134584639_6992410995096350428_n_1576135139__rend_1_1.jpg?tr=w-600" alt="images">
        </div>
        <div class="details">
            <h2>Taranga Baral<br><span>Satau Ranga Ka Indreni</span></h2>
        </div>
      </div>
    
       <div class="card">
         <div class="imgBx">
            <img src="https://www.bridgestorecovery.com/wp-content/uploads/2017/10/Understanding-BPD-Emotional-Manipulation-Techniques-and-How-Treatment-Can-Help-1280x720.jpg" alt="images">
         </div>
         <div class="details">
            <h2>Sajal Shrestha<br><span>Guiseness Book Of World Record</span></h2>
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
            <img src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2019/11/virat-kohli-1574240907.jpg" alt="images">
         </div>
         <div class="details">
            <h2>Akhil Prajapati<br><span>Mahabharat</span></h2>
          </div>
       </div>
 
  </div><br><br><br>




  <div class="box">
    <div class="card">
      <div class="imgBx">
          <img src="https://cdn.now.howstuffworks.com/media-content/0b7f4e9b-f59c-4024-9f06-b3dc12850ab7-1920-1080.jpg" alt="images">
      </div>
      <div class="details">
          <h2>Samir Khadka<br><span>How To Impress Friends And Influence Others</span></h2>
      </div>
    </div>
  
     <div class="card">
       <div class="imgBx">
          <img src="https://www.westernunion.com/content/dam/wu/jm/responsive/send-money-in-person-from-jamaica-resp.png" alt="images">
       </div>
       <div class="details">
          <h2>Mamita Basnet<br><span>Lets Be The Honest Man Ever In The Earth</span></h2>
        </div>
     </div>

     <div class="card">
       <div class="imgBx">
          <img src="https://miro.medium.com/focal/1200/1200/48/51/1*k-B13-IWqjtFx09A9LKTkg.jpeg" alt="images">
       </div>
       <div class="details">
          <h2>Bipin Basnet<br><span>Bhagwat Gita</span></h2>
        </div>
     </div>

</div><br><br><br>







<div class="box">
    <div class="card">
      <div class="imgBx">
          <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-2.jpg" alt="images">
      </div>
      <div class="details">
          <h2>Bikalpa Bhattarai<br><span>Science and Technology</span></h2>
      </div>
    </div>
  
     <div class="card">
       <div class="imgBx">
          <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/266/266749/aging-man.jpg?w=1155&h=1537" alt="images">
       </div>
       <div class="details">
          <h2>Parbat Dhakal<br><span>Sophia The Robot</span></h2>
        </div>
     </div>

     <div class="card">
       <div class="imgBx">
          <img src="https://www.yourtango.com/sites/default/files/image_blog/types-guys-who-stay-single-men.jpg" alt="images">
       </div>
       <div class="details">
          <h2>Hamrit Hajal<br><span>Netwon Biography</span></h2>
        </div>
     </div>

</div><br><br>
<hr class="rounded"><br>

<h3> &nbsp; &nbsp; &nbsp; &nbsp; People Who Returned Book </h3><br><br>
  <div class="box">
      <div class="card">
        <div class="imgBx">
            <img src="https://2w6kxc22rrr9mabqt1mglgait6-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/man-shrug-beard-1024x580.jpg" alt="images">
        </div>
        <div class="details">
            <h2>✔️Taranga Baral<br><span>Satau Ranga Ka Indreni</span></h2>
        </div>
      </div>
    
       <div class="card">
         <div class="imgBx">
            <img src="https://ath2.unileverservices.com/wp-content/uploads/sites/8/2018/01/Hairstyles-for-men-pompadour.jpg" alt="images">
            
         </div>
         <div class="details">
             
            <h2>✔️Sajal Shrestha<br><span>Guiseness Book Of World Record</span></h2>
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
            <img src="https://images.everydayhealth.com/images/mens-health/6-skincare-tips-men-should-always-follow-peter-kraus-00-722x406.jpg" alt="images">
         </div>
         <div class="details">
            <h2>✔️Akhil Prajapati<br><span>Mahabharat</span></h2>
          </div>
       </div>
 
  </div><br><br><br>


  <hr class="rounded">



 
  
  
            
          </form>
        </div>
      </div>
    </div>
  
  
  
  
    
  </div>
  
</body>
</html>

@endsection