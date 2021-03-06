<?php include 'includes/header.php'; ?>

<div class="wrap">

    <?php include 'includes/navigation.php'; ?>
    <!-- END header -->

    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate">
                <?php
                if (isset($_GET['post'])) {
                    $p_id = $_GET['post'];

                    $query = "SELECT * FROM posts WHERE post_id = $p_id";
                    $result = mysqli_query($connection, $query);
                } else {
                    header("Location: index.php");
                }

                ?>
                <?php

                while ($row = mysqli_fetch_assoc($result)){

                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_category = $row['post_category'];
                $post_category_id = $row['post_category_id'];
                $post_content = $row['post_content'];
                $post_tags = explode(',', $row['post_tags']);
                $post_status = $row['post_status'];
                $post_image = $row['post_image'];
                $date = $row['post_date'];
                $post_views = $row['post_views'];
                $post_comment_count = $row['post_comment_count'];
                ?>
                <div class="col-md-12 col-lg-8 main-content">
                    <img src="admin/<?php echo $post_image; ?>" alt="Image" class="img-responsive mb-5" width="100%"
                         style="display: block;
                            margin-left: auto;
                            margin-right: auto
                         ">
                    <div class="post-meta">
                        <span class="author mr-2"><?php echo $post_author; ?> </span>&bullet;
                        <span class="mr-2"><?php echo $date; ?> </span> &bullet;
                        <span class="ml-2"><span
                                    class="fa fa-comments"></span> <?php echo $post_comment_count; ?></span>
                    </div>
                    <h1 class="mb-4"><?php echo $post_title; ?></h1>
                    <a class="category mb-5"
                       href="category.php?cat_id=<?php echo $post_category_id; ?>"><?php echo $post_category; ?></a>

                    <div class="post-content-body">
                        <p><?php echo $post_content; ?></p>
                    </div>
                    <div class="pt-5">
                        <p>???????????????: <a href="#"><?php echo $post_category; ?></a> Tags: <a
                                    href="#"><?php foreach ($post_tags as $tag) {
                                    echo "<a href=''class='btn btn-primary' style='margin:2px;'>#$tag</a>";
                                }
                                ?></a></p>
                    </div>
                    <?php }
                    ?>
                    <h3 class="mb-5">
                        <?php
                        (isset($_GET['post'])) ? $post_id = $_GET['post'] : $post_id = 0;
                        $query = mysqli_query($connection, "SELECT * FROM comments WHERE status='Approved' AND post_id=$post_id");
                        $num_comments = mysqli_num_rows($query);
                        echo $num_comments . " ????????????";
                        ?>
                    </h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard">

                            </div>
                            <div class="comment-body">
                                <?php
                                if (isset($_GET['post'])) {
                                    $id = $_GET['post'];
                                    $comment_obj->getApprovedComments($id);
                                }
                                ?>
                            </div>
                        </li>


                    </ul>

                    <!--Start Next and Pre side-->
                    <?php
                    if (isset($_GET['post'])) {
                        $p_id = $_GET['post'];

                        $query_next = "SELECT * FROM posts WHERE post_id = $p_id +1";
                        $query_pre = "SELECT * FROM posts WHERE post_id = $p_id -1";
                        $result_next = mysqli_query($connection, $query_next);
                        $result_pre = mysqli_query($connection, $query_pre);
                    }

                    ?>

                    <div class="col-md-12 row">

                        <?php

                        while ($row_pre = mysqli_fetch_assoc($result_pre)) {

                            $post_id_pre = $row_pre['post_id'];
                            $post_title_pre = $row_pre['post_title'];
                            $post_category_pre = $row_pre['post_category'];
                            $post_image_pre = $row_pre['post_image'];
                            $date_pre = $row_pre['post_date'];
                            ?>
                            <div class="col-md-6" style="margin-left: 0">
                                <a href="single.php?post=<?php echo $post_id_pre; ?>">
                                    <img src="admin/<?php echo $post_image_pre; ?>" alt="Image placeholder"
                                         style="display: block;
                                            margin: 0px auto 10px auto;
                                            width: 100px;">
                                    <div class="text" style="text-align: center">
                                        <h4><?php echo $post_title_pre; ?></h4>
                                        <div class="post-meta">
                                            <span class="mr-2"><?php echo $date_pre; ?> </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        ?>
                        <?php

                        while ($row_next = mysqli_fetch_assoc($result_next)) {
                            $post_id_next = $row_next['post_id'];
                            $post_title_next = $row_next['post_title'];
                            $post_category_next = $row_next['post_category'];
                            $post_image_next = $row_next['post_image'];
                            $date_next = $row_next['post_date'];

                            ?>
                            <div class="col-md-6">
                                <a href="single.php?post=<?php echo $post_id_next; ?>">
                                    <img src="admin/<?php echo $post_image_next; ?>" alt="Image placeholder"
                                         style="display: block;
                                            margin: 0px auto 10px auto;
                                            width: 100px;">
                                    <div class="text" style="text-align: center">
                                        <h4><?php echo $post_title_next; ?></h4>
                                        <div class="post-meta">
                                            <span class="mr-2"><?php echo $date_next; ?> </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <!-- End Next and Pre side-->


                    <!-- END comment-list -->
                    <?php
                    if (isset($_GET['post'])) {
                        $id = $_GET['post'];
                        if (isset($_POST['comment'])) {
                            $name = $_POST['name'];
                            $message = $_POST['message'];
                            $comment_obj->addComments($id, $name, $message);
                        }
                    }
                    ?>
                    <div class="comment-form-wrap pt-2">
                        <h3 class="mb-5" style="text-align: center">????????????</h3>
                        <form action="single.php?post=<?php echo $post_id; ?>" method="POST" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">?????? *</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="message">????????????</label>
                                <textarea name="message" id="message" cols="30" rows="5"
                                          class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="????????????" name="comment" class="btn btn-primary">
                            </div>

                        </form>

                    </div>
                    </div>
                <!-- END main-content -->

                <!--start side_bar-->

                <?php include "side_bar.php" ?>

                <!--end side_bar-->

            </div>
    </section>

</div>
</div>
<?php include 'includes/footer.php'; ?>


</div>


