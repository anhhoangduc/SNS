<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
<h3 class="text-center text-white pt-5">Login form</h3>
<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                <form action="includes/form_handler/login.php" method="post" role="form" class="form">
                    <h3 class="text-center text-info">ログイン</h3>
                    <div class="form-group">
                        <label for="email" class="text-info">ユーザー名:</label><br>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">パスワード:</label><br>
                        <input type="password" name="pwd" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login_submit" class="btn btn-info btn-md" value="ログイン">
                        <br>
                        <p><a href="./create_admin.php">新しアカウントを追加</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
