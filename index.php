<<?php
  require "config/config.php";
  require "modules/giphy_api.php";

  $app = new ClassGpiphy(GP_API_KEY, GP_END_POIT);
  $data_api =$app->request('happy','25','0');

 ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read One Record</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

     <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>Read Product</h1>
        </div>

      	<table class='table table-hover table-responsive table-bordered'>
    		    <tr>
    		        <td>GIPHY</td>
    		        <td>teste1
                <?php// echo htmlspecialchars($data_api->url, ENT_QUOTES);  ?>
                </td>
    		    </tr>
    		    <tr>
    		        <td>Description</td>
    		        <td>

                  <?php //echo htmlspecialchars($description, ENT_QUOTES);  ?>

                </td>
    		    </tr>
    		    <tr>
    		        <td>Price</td>
    		        <td><?php //echo htmlspecialchars($price, ENT_QUOTES);  ?></td>
    		    </tr>

    		</table>

      </div> <!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>

 ?>
