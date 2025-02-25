<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <style>
        body{
            background-color: #f3f6f4;
        }
        .container{
            display: flex;
            justify-content: center;
        }
        .loginpage{
            width: 500px;
            padding: 20px 20px 20px 20px;
            margin-top: 150px;
            border: solid 1px #bcbcbc;
            background-color: #b6d7a8;
            border-radius: 8px;
        }
        .loginpage h3{
            color: #5c8c47;       
        }
        .textCenter{
            text-align: center;
            font-size: 16px;
        }
        .textLabel{
            font-size: 16px;
            font-weight: 500;

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="loginpage">
            <div class="mb-4 textCenter">
                <label for="Login"><h3>Login</h3></label>
            </div>
            <?php if(session()->getFlashdata('msg') !== NULL) :?>
                <div class="alert alert-danger"><?php echo session()->getFlashdata('msg'); ?></div>
            <?php endif; ?>
            <form action="<?php base_url(); ?>login/auth" method="post">
                <div class="mb-3">
                    <label for=""><span class="textLabel">Username</span></label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-5">
                    <label for=""><span class="textLabel">Password</span></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="**********">
                </div>
                <div class="mb-3 textCenter">
                    <button type="submit" class="btn btn-success" style="width: 450px;">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>