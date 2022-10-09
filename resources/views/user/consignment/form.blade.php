<!DOCTYPE html>
<html lang="en">

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

<body style="margin-top:20px">

<h2>
Consignment Form
</h2>


  <section>
    <div class="container-fluid">


              <form role="form" method="post" action="{{action('User\ConsignmentController@save')}}" >
              {!! csrf_field() !!}
            

                <div class="row"
                style="margin-bottom:20px">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="company name" name="company"  required>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" placeholder="contact " name="contact" ,required>
                  </div>
                </div>

                <!--  -->

                <div class="row"
                style="margin-bottom:20px">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Address one" name="address_one"  required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Address two" name="address_two" ,required>
                  </div>
                </div>

              <!--  -->
              <div class="row"
                style="margin-bottom:20px">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="city name" name="city"  required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="country name" name="country" ,required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- <button type="button" class="btn btn-primary recli">Clear All</button> -->
                    <button type="submit" class="btn btn-primary resub">Submit</button>
                  </div>
                </div>
             

               



                
</body>

</html
