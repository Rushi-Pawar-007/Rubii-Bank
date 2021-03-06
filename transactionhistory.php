<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction History</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/table.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
    </head>
    <body>
        
      <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-flude"><!--
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets\img\PicsArt_12-25-03.57." height="130" width="170" alt="" /></a> -->
    <button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu
    <i class="fas fa-bars ml-1"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase text-info ml-auto">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="view.php">View Customers</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="transfermoney.php">Transfer Money</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="profile.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
        <br><br><br><br>
        <div class="container">
            <h2 class="text-center pt-4">Transaction History</h2>
            
            <br>
            <div class="table-responsive-sm">
                <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">S.No.</th>
                            <th class="text-center">Sender</th>
                            <th class="text-center">Receiver</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $sql ="select * from transaction";
                        $query =mysqli_query($conn, $sql);
                        while($rows = mysqli_fetch_assoc($query))
                        {
                        ?>
                        <tr>
                            <td class="py-2 text-center"><?php echo $rows['sno']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['sender']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['balance']; ?> </td>
                            <td class="py-2 text-center"><?php echo $rows['datetime']; ?> </td>
                            
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        </body>
    </html>