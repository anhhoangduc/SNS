

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                  <li><a href="../index.php">ホームページ</a></li>

                <li>
                    <a href="../logout.php" >ログアウト</a>
                </li>
            </ul>
             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> ダッシュボード</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-send"></i> 記事  <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="posts.php?source=">記事を見る</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_new">記事を追加</a>
                            </li>

                        </ul>
                    </li>
                       <li>
                        <a href="categories.php"><i class="fa fa-fw fa-suitcase"></i> カテゴリー</a>
                    </li>
                    <li>
                        <a href="comment.php"><i class="fa fa-fw fa-comment"></i> コメント</a>
                    </li>
                       <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-users"></i> ユーザー <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>

                                <a href="view_users.php">全部のユーザー</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">ユーザーを追加</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> プロフィール</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
       <script src="bootstrap/js/jquery.js"></script>
