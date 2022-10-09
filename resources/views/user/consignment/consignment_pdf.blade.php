<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
h2.consignment {
    float: right;
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
<td> 

  
  </td>

 </tr>
 @endforeach




  
</table>

</body>
</html>

