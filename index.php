<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome back!</h3>
                                <form id="loginform" class="form-horizontal" action="login.php" method="POST" role="form">
                                    <div class="row px-3"> <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Username</h6>
                                        </label> <input class="mb-4" type="text" name="username" placeholder="Enter username"> 
                                    </div>
                                    <div class="row px-3"> <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Password</h6>
                                        </label> <input type="password" name="password" placeholder="Enter password"> 
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="login-remember" type="checkbox" name="rememberMe" value="1" <?php if($rememberMe == '1') echo "checked"?>>
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" value="Log In" name="submit">


                                    <?php 
                                    if(isset($_REQUEST["err"]))
                                        $msg="Invalid username or Password";
                                    ?>
                                    <p style="color:red;">
                                    <?php if(isset($msg))
                                    {
                                        
                                    echo $msg;
                                    }
                                    ?>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>