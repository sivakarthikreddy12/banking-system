<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body style= "background: url(https://wallpaperset.com/w/full/6/a/e/180446.jpg); 
  height: 100%;
  background-position: center;
  background-repeat: repeat;
  background-size: auto;">
<?php
  include 'navbar.php';
  ?>
 <style>
     
     marquee{
      font-size: 30px;
      font-weight: 800;
      color: red;
      font-family: sans-serif;
      }

    div{
          text-align: center;
          margin-left: auto; 
          margin-right: auto;
       }
     p{
          font-size: 35px;
          text-align: center;
          margin-left: auto; 
          margin-right: auto;

        }
    
    h1{ 
        color: darkmagenta;
      }
    

    
 </style>  
    
    <div class="header">
    
	<h1>HOME</h1><br><br><br><br><br>
    </div>
        <div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: coral;">
             
              <a class="btn btn-default btn-lg" href="trans.php" role="button">DO TRANSACTION</a>
               
               <br>
         <img src="https://wallpaperset.com/w/full/9/f/9/495315.jpg"
         width=150>
     
                
                 
            </div>
            <div style="display: table-cell; background: grey;"> 
              
               <a class="btn btn-default btn-lg" href="details.php" role="button">VIEW HISTORY</a>
               <br>
                <img src="https://wallpaperset.com/w/full/8/c/c/495296.jpg"
         width=150>
                 
            </div>
        </div>
    </div>
    
    
    </body>
</html>