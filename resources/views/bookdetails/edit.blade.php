@extends('admin.app')

@section('content')
  


<!DOCTYPE html>
<html lang="en">
<head>
    
  <style>
    /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */

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
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 1vh;
  padding: 40px;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
}
.container{
  max-width: 800px;
  background: #fff;
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.container .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container form{
  padding: 30px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data{
  width: 100%;
  height: 45px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 100px;
}











.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.textarea label{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner{
  left: 0;
}
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 10px 0 0 0;
  }
  .container form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 35px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
}

  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hi There</title>
</head>
<body>
 

  <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Contact us Form | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    
    <div class="container">
      <img src="https://lh3.googleusercontent.com/kuFRbaNybNfzcd8AF_fomzjrd7z92dhsUz_PN_GfKlMbwLFxEjrHBYR_M1rmREPskOQ0yh1kYSRfEVeDgVEVvQyN7RDMFd9gIOd26DfrqW2uDVz78IhfdfzzYy-Eku-9cSpA4r7x8_GGoTZ3-IofHq0f-EOletvidNv-6nZomGxJO6w4Qzb_m1PP-Hv3HJlPIh5cw05UPttCBNu-UzYxfkCE8dLsKD7xfjbjEL9blSPStYLoNqMf4RlFZ8MEhrI3n24LNtLlwyjhbtC8xuLx6SH8wJYxn74buM_MNSnkMysufBzdC0dVZKL7XadwSMzQW51azIylnomTlUBb8eLmjGJN52muIZB8AKw5IeZdRaDM8jtw2ASiLnH8qUrs2p5Kf5_aJMh9iwQfYOw8rOYZdhPBq-YS3mVbO_U_3GMd8KWe3gfoPz-a6vW4IH570cMyYlUSidcnabFAs_xsUroIgV6ieQ_fN5gF5HScz4dbgXbPAkJNYfoSYjcapI-FOm6yS8gyyjX4EmGYqmnzZjffmV1jrf1BVz7zHETOqgIk7dYFCBNeRzHQ5XMY1MuRhyb0E4F0LCtgf-NSNQ2S9w931lviFOTK7GPA1OKX7ERfKUH_Nk_EsCQiT9_ot3snZShFJK6fOfnMjeFL6RqD7Xfynyvchc1rbnw2ATReUtqR8LrN4DKUq6L9PjwY1niL7g=w1920-h480-no?authuser=0" height="110" width="102%" alt="" align="center">
      
























    


      
      <div class="text">
  Edit Book Details</div>





<form action="/books/{{ $books->id }}" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          @csrf
          @method("put")
          <div class="input-data">
            <input type="text" required name="name" id="name" value="{{ $books->name }}">
            <div class="underline">
          </div>
<label for="name">Name Of Book</label>
          </div>

    




         
<div class="input-data">
            <input type="text" required  name="author" id="author" value="{{ $books->author }}">
            <div class="underline">
</div>
<label for="author">Author</label>
          </div>
</div>
<div class="form-row">
  <div class="input-data">
    <input type="text" required name="edition" id="edition" value="{{ $books->edition }}">
    <div class="underline">
</div>
<label for="edition">Edition</label>
  </div>




 






<div class="input-data">
            <input type="text" required name="publication" id="publication" value="{{ $books->publication }}">
            <div class="underline">
</div>


<label for="publication">Publication</label>
          </div>
</div>





<div class="form-row">
  <div class="input-data">
    <input type="text" required name="cost" id="cost" value="{{ $books->cost }}">
    <div class="underline">
</div>
<label for="cost">Cost</label>
  </div>







  <div class="input-data">
    <input type="text" required name="page" id="page" value="{{ $books->page }}">
    <div class="underline">
</div>



<label for="page">Page Number</label>
  </div>
</div>



















<div class="form-row">
  <div class="input-data">
    <input type="text" required name="code" id="code" value="{{ $books->code }}">
    <div class="underline">
</div>



<label for="code">Book Code</label>
  </div>

          



 
  
  

  <div class="input-data">
    <input type="text" required name="quantity" id="quantity" value="{{ $books->quantity }}">
    <div class="underline">
</div>



<label for="quantity">Quantity</label>
  </div>





</div>






<div class="form-row">
  <div class="input-data">
    <input type="text" required name="catagory" id="catagory" value="{{ $books->catagory }}">
    <div class="underline">
</div>



<label for="catagory">Catagory</label>
  </div>

          





  
  








</div>


&nbsp;
<input type="file" name="image" accept="image/*" required id="image">


<div class="form-row">
  <div class="input-data textarea">
<!-- Due to more textarea tag I got an error.. SO I changed the name of texarea tag into changeit. Replace the changeit text/tag to textarea-->
    <changeit rows="8" cols="80" required></changeit> 
    <br />
<div class="underline">
</div>

<div class="form-row submit-btn">
<div class="input-data">
<div class="inner"></div>
<input type="submit" value="submit">
</div>
</div>
</form>
</div>












  </body>
</html>

</body>
</html>

@endsection