@extends('admin.app')

@section('content')
{{-- 
<div class="col-md-7">
    <div class="card shadow">
      <div class="card-header"><b>Customer Table</b> </div>
      <div class="card-body">
        <table class="table table-bordered table-sm">
          <tr>
            <td><b>#</b></td>
            <td><b>Location</b></td>
           
            
          </tr>
          @foreach ($customers as $key=> $customer)
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $customer->name }}</td>
               
              </tr>
          @endforeach
        </table>

        {{ $customers->links("pagination::bootstrap-4") }}
      </div>
    </div>
  </div>

 --}}




 <!DOCTYPE html>
 <html lang="en">
 <head>
   
  <style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 100%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}


.styled-table th,
.styled-table td {
    padding: 12px 15px;
}


.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}



.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
  </style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Issue</title>
 </head>
 <body>
   
  <table class="styled-table">
    <thead>
        <tr class="active-row">
          <th>S.N</th><th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>E-Mail</th>
            <th>Book</th>
            <th>Status</th>
            <th>Approve</th>
            <th>Dis-Approve</th>
        </tr>
    </thead>
    <tbody>
        

        @foreach ($customers as $key=> $customer)
              <tr class="active-row">
                <td>{{ ++$key }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->mobile }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->book }}</td>
                <td>
                  



                  
            </td>
                <td>
                  <div class="row">
                    <div class="col"><a class="btn btn-success btn-sm" href="/customers/{{ $customer->id }}/edit">Approve</a></div>
                    <div class="col">
                    </td>
                    <td>
                      <form action="/customers/{{ $customer->id }}" method="POST">
                      @csrf
                      @method("delete")
                      <button type="submit" class="btn btn-danger btn-sm" >Dis-Approve</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
          @endforeach
          
        
        <!-- and so on... -->
    </tbody>
    
</table>
{{ $customers->links("pagination::bootstrap-4") }}
 </body>
 </html>


  

@endsection