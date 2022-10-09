<html>
<head>
<head>
  <title>Test </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{!!asset('theme/user_theme/css/medical2.css')!!}" rel="stylesheet">
  <link href="{!!asset('theme/user_theme/css/registrationform.css')!!}" rel="stylesheet">

</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
h2.consignment {
    float: right;
}
h2.logout {
  float: right;
    margin-top: -39px;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 style="text-align:center;font-size:30px">
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

 <div class="btn btn-info btn-rounded margin-top" >Consignment Table
</div>
</h2>
<h2 class="consignment">
<a href="{{asset('user/consignment/create')}}" type="button"
class="btn btn-info btn-rounded margin-top">	
		Add Consignment</a>
	</h2>
  <h2 class="logout">
  <form action="{{asset('user/logout')}}">
     <input type="submit" class="btn btn-danger btn-rounded margin-top" value="LogOut">
    </form>
	</h2>
 

  <h2 class="TT">
    <a href="{{asset('user/consignment/?download=')}}" type="button"
    class="btn btn-success btn-rounded margin-top">	
  DOWNLOAD  Consignment</a>
  </h2>
 <div class="container">

<table>

  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Address</th>
    
  </tr>


@foreach($consignment as $c)

  <tr>
<td>   {!!$c->company!!}   </td>
<td>  {!!$c->contact!!}  </td>
<td>  {!!$c->country !!}  </td>
<td>  {!!$c->addressline1!!}  </td>


  
  </td>

 </tr>
 @endforeach




  
</table>
</div>

</body>
</html>

