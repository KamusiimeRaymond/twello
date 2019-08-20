<!doctype html>  
<html>  
<head>  
    <title>Login</title>  
    <link rel="stylesheet" type="text/css" href="login.css"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head> 

<body>  
    <!--Login form-->
    <div class="container">
        <form action="process.php" method="POST">
            <div>
                <div class="logo">
                    <img src="images/dabarlogo.png">
                </div>
                <div class="form-group">
                    <label class="control-label" for="username">Username:</label>
                    <input type="text" class="form-control" id="user" name="username">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pass" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-default" id="btn" value="Login">Log In</button>
        </form>
    </div>
</body>  
</html>   
