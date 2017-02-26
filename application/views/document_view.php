
<html>
<head>
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // To conform clear all data in cart.
        function clear_cart() {
            var result = confirm('Are you sure want to clear all bookings?');

            if (result) {
                window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
            } else {
                return false; // cancel button
            }
        }
    </script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php
            // this will show you thank you message.

            echo "<a class='navbar-brand' href=" . base_url() . "index.php/shopping>Go back</a>";
            ?>
        </div>

    </div>
</nav>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3>Heading</h3></div>
        <div class="panel-body">Panel Content</div>
    </div>
</div>
</body>
</html>
