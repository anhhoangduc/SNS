
<?php include 'includes/header.php'; ?>


<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/navigation.php'; ?>
    <?php
    $username = $_SESSION['username'];
    $query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $role = $data['role'];
        $email = $data['email'];
    } else {
        die("No such record in database");
    }
    ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <h3>プロフィール</h3>
                <br>
                <div class="col-md-12">
                    <img src="users/profile_pics/defaults/head_1.png" alt="" style="width: 150px; height: 150px; border-radius: 100%;">
                    <form action="" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">ユーザー名</label>
                                <input type="text" value="<?php echo $_SESSION['username']; ?>"name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">メイル</label>
                                <input type="email" name="email" value="<?php echo $email; ?>"class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="role">ロール</label>
                                <input value="<?php echo $role; ?>" type="text" name="role" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" class="btn btn-success" value="編集">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- our ajax call  -->
<script>
    $(document).ready(function() {
        $("#form").submit(function(e) {
            let name = document.querySelector("#username").value,
                email = document.querySelector("#email").value,
                pwd = document.querySelector("#password").value,
                role = document.querySelector("#role").value,
                submit = document.querySelector("#submit").value;
            $("#msg").load('validator/validate.php', {
                username: name,
                email: email,
                password: pwd,
                role: role,
                submit: submit
            });
            e.preventDefault();
        });
    });
</script>

</body>

</html>
