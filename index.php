<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--use to link bootstrap file-->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!--use to link bootstrap file-->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="mystyle.css" rel="stylesheet" type="text/css">

    
    
</head>
<body >
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary panel_margin">
                    <div class="panel-heading">
                        <h3>Login</h3>
                    </div>
                    <?php
                    if(@$_GET['Empty']==true){?>
                        <div class="message text-danger margin"><?php echo $_GET['Empty']; ?></div>
                        <?php  } ?>
                    <?php
                    if(@$_GET['Invalid']==true){?>
                        <div class="message text-danger margin"><?php echo $_GET['Invalid']; ?></div>
                        <?php  } ?>
                   
                    
                    <div class="panel-body">
                        <form method="POST" action="process.php">
                            <input type="text" placeholder="User Name" name="email" class="form-control ">
                            <input type="password" placeholder="Password" name="password" class="form-control margin">
                            <button class="margin btn btn-primary" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>