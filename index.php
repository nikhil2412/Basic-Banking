<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>
      

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>WELCOME TO</h3>
                  <h1>TSF-INTERN Bank</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/bank.jpg"  alt="Avatar" style="width: 200px;">
              </div>
            </div>
          
          <br>
          <br>
          <h3 class="action" ><span style="font-family: 'Roboto Slab', serif">CHOOSE AN ACTION</h3></span>
            <div class="column activity text-center">
                  
                  <div class="col-md act">
                   
                    <br>
                    <a href="transactionhistory.php"><button>Transfer History</button></a>
                  </div>

                  <div class="col-md act">
                   
                    <br>
                    <a href="transfermoney.php"><button>View Beneficiary</button></a>
                  </div>
                  
            </div>
            <br>
            <br>

      </div>
      <br>
      <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #F93154; text-align:center; color:white;">
                © 2021 Copyright - Made by <strong>NIKHIL I. LOHAR</strong> :
                <br>
                <a class="text-white" href="https://internship.thesparksfoundation.info/" target="_blank" style="color:white; text-decoration:underline; "> <strong>The Sparks Foundation </strong></a>
                    
            </div>
            <!-- Copyright -->
        </footer>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
</body>
</html>