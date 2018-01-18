
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clientric</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="css/my.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>                       
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWT5EeZcv27gpI4_lHoSu_3h8QYDxYixc
&callback=initMap">
    </script>
<script src="myscr.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" >
        	<img src="https://clientric.bg/academy/wp-content/uploads/2016/01/clientric-logo.png"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container main">

      <div class="row">

        <div class="col-lg-3">

          <h3 class="my-4">Make your reservation:</h3>
          <div class="list-group">
             Start Date:
<div class='input-group date' id='datetimepicker6'>
 
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
                 

              End Date:
  <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

  <label for="rooms">Choose a room:</label>
    <select name="room" id="room">
      <option>Single Room</option>
      <option>Double Room</option>
      <option>Apartment</option>
   
    </select>
    <input type="submit" value="A submit button" class=".btn-success">
          </div>
       <form action="https://www.w3schools.com/action_page.php" method="POST" id="form">
  First name:<br>
  <input type="text" name="firstname" id="first_name" >
  <br>
  Email:<br>
  <input type="text" name="email" >
   Phone:<br>
  <input type="text" name="phone" >
   Text:<br>
  <textarea rows="2" cols="25"></textarea>
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid"  src="http://waw.clientric.bg/api/files/project/a817/lists/l3962/46d7f10273672ac40438609d180357ef.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid"  src="http://waw.clientric.bg/api/files/project/a817/lists/l3962/6961d7e38f40a2def76b2b906b56bd62.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid"  src="http://waw.clientric.bg/api/files/project/a817/lists/l3962/b5f95286116e00ae81878adbfce2dc35.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid"  src="http://waw.clientric.bg/api/files/project/a817/lists/l3962/a840c27f12bc2126f3d2fd56f8fa7f94.jpg" alt="Fourth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="#carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://waw.clientric.bg/api/files/project/a817/lists/l3970/f379593b50b02093ede73d27b0949a53.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Single Room</a>
                  </h4>
                 
                  <p class="card-text"><strong>Description:</strong> The Single Room is perfect for a business trip. Guests staying in our Single Room will be
inspired by its simple, inspiring elegance and interior, while the spacious working desk accommodates
any preparatory work that needs to be taken care of. </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top " src="http://waw.clientric.bg/api/files/project/a817/lists/l3970/44ca7355d1b1c6fce44d80aa3f8dd1e2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">

                    <a href="#">Double Room
</a>
                  </h4>
                  <h5 ></h5>
                  <p class="card-text"><strong>Description:</strong> Calista Spa Hotel offers deluxe double rooms. Eight of them have terraces which give a
magnificent view of the local forest and provide opportunity for seclusion and calm contemplation of the
beautiful nature. All deluxe rooms are spacious and most finely furnished.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100 zoomIn">
                <a href="#"><img class="card-img-top" src="http://waw.clientric.bg/api/files/project/a817/lists/l3972/491f043a6b5d63755d0f69c3ffd54de3.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"> Apartment</a>
                  </h4>
                  <p class="card-text"><strong>Description:</strong> Cosy living area, with a splendid view of the Vitosha Mountain, or of Sofia Airport,
complimentary Wi-Fi and HSIA Connection, 2 LCD TVs, sofa bed with Daytona system, mini-bar, spacious
desk and ergonomic chair, and a large bathroom with shower  bath</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <hr>
      <!-- /.row -->
<div class="row">
    <div class="col-sm-4">
    
      <a class ="abv" href="#">Conference halls</a>
      <img  class="img-circle" src="http://waw.clientric.bg/api/files/project/a817/lists/l3977/419ba7664736a291f9ddd3d84bba1ee9.jpg" class="img-responsive" style="width:100%" alt="Image">
      <hr>
      <p>Please contact our event manager in order to help you plan the tiniest details and ensure that you enjoy
a seamless service and a hassle free experience.
</p>
    </div>
    <div class="col-sm-4"> 
      <a class ="abv" href="#">Spa Center</a>
      <img class="img-circle" src="http://waw.clientric.bg/api/files/project/a817/lists/l3977/a1f52bfcc8c13a0a8bc27edad2abb3c9.jpg" class="img-responsive" style="width:100%" alt="Image">
      <hr>
       <p>Massages and treatments – can enjoy a variety of massages and therapies for healing of the body (extra
charge).
</p>
    </div>
   <div class="col-sm-4"> 
       <a class ="abv" href="#">Playground</a>
      <img class="img-circle" src="http://waw.clientric.bg/api/files/project/a817/lists/l3977/c85c566a5e21c439300a283cb358f27a.jpg" class="img-responsive" style="width:100%" alt="Image">
      <hr>
      <p>Playground – for our youngest guests we have a children’s playground with various children’s games
(dominoes, monopolies, etc.);</p>
       
    </div>
    </div>
  </div>
</div><br>
<hr>
    </div>
    <!-- /.container -->
   <div id="map"></div>
    
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    
  </body>

</html>
