
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row align-items-center">
         
            <h1>Dashboard</h1>
          
        </div>
        </div>
        <div class="container">
                    <form class="row pt-5 g-5" method="POST" action="">
            <div class="col-auto">
              <label for="temp">Temprature</label>
              <input type="date" class="form-control" name="temp" id="temp" placeholder="Temprature">
            </div>
            <div class="col-auto">
              <label for="humid" >Humidity</label>

              <input type="date" class="form-control" id="humid" name="humid" placeholder="Humidity">
            </div>
            <div class="col-auto">
            <br>
             <input type="submit" name="submit" class="btn btn-primary" value="Confirm">
            </div>
          </form>
          <?php 
  if(isset($_POST['submit']))
  {
    $temp = $_POST['temp'];
    $humid = $_POST['humid'];
   echo $temp;
   $date = strtotime($temp);
   $date = date('M d,Y',$date);
   echo $date;
?>
          </div>
     <div class="container">
<div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Temp</th>
                                                <th>Humid</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'config.php';
                                            $dis = $table->find([]);
                                            foreach ($dis as $doc)
                                             {
                                             ?>
                                            <tr>
                                                <td><?php echo  $doc->Temperature; ?></td>
                                                <td><?php echo  $doc->Humidity; ?></td>
                                                <td><?php echo  $doc->Day; ?></td>
                                                <td><?php echo  $doc->Time; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>



     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 
  </body>
</html>
<?php
 }
   ?>