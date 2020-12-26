@extends('admin.app')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </style>
    <style>
        
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 16px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 14px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Details</title>
</head>
<body>
    <section>
        <!--for demo wrap-->
        <h1>Book Details</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Publ.</th>
                <th>Cost</th>
                
                <th>Book-Code</th>
                <th>Quantity</th>
                <th>Catagory</th>
                <th>Action</th>

              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                @foreach ($books as $key=> $book)
                <td>{{ ++$key }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->edition }}</td>
                <td>{{ $book->publication }}</td>
                
                <td>{{ $book->cost }}</td>
                
                <td>{{ $book->code }}</td>
                <td>{{ $book->quantity }}</td>
                <td>{{ $book->catagory }}</td>
                <td>
                    <div class="row">
                      <div class="col"><a class="btn btn-success btn-sm" href="/books/{{ $book->id }}/edit">Change</a></div>
                      <div class="col">
                      &nbsp;
                        <form action="/books/{{ $book->id }}" method="POST">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                        </form>
                      </div>
                    </div>
                  </td>
                
              </tr>
              @endforeach
              {{ $books->links("pagination::bootstrap-4") }}
            </tbody>
          </table>
          
        </div>
      </section>
      
      
      <!-- follow me template -->
      
      
</body>
</html>
    
@endsection