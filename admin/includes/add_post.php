<?php
 $sql = "SELECT * FROM categories";
 $res = mysqli_query($connection, $sql);

 ?>

<div class="container">
<div class="row">
  <h2>記事を追加</h2>
  <div class="col-sm-12 col-lg-7">
    <form action="posts.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">記事 タイトル</label>
        <input type="text" name="title" placeholder="Post Title" class="form-control">
      </div>
      <div class="form-group">
        <label for="">記事 著者</label>
        <input type="text" value="<?php echo $_SESSION['username'];?>" name="author" placeholder="Post Author" class="form-control">
      </div>
      <div class="form-group">
        <label for="">記事 カテゴリー</label>
      <select class="form-control" name="category">
        <?php
          while ($row = mysqli_fetch_array($res)) {
            $cat_title = $row['cat_title'];
            echo "<option value='$cat_title'>$cat_title</option>";
          }
         ?>

      </select>
      </div>
      
      <div class="form-group">
        <label for="">記事 内容</label>
        <textarea name="content" rows="8" cols="80" class="form-control" id="editor"></textarea>
      </div>
      <div class="form-group">
        <label for="">記事 の鬼ごっこ</label>
        <input type="text" name="tags" placeholder="Seperate tags with a comma (,)" class="form-control">
      </div>
      <div class="form-group">
        <label for="">記事 状態</label>
      <select class="form-control" name="status">
        <option value="draft">Draft</option>
        <option value="published">Published</option>
      </select>
      </div>
      <div class="form-group">
        <label for="">記事 写真</label>
        <input type="file" name="post_image"  class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" name="publish" value="追加"  class="btn btn-primary">
      </div>
    </form>
  </div>
</div>

</div>





<!--<script>-->
<!--    ClassicEditor-->
<!--        .create( document.querySelector( '#editor' ) )-->
<!--        .then( editor => {-->
<!--            console.log( editor );-->
<!--        } )-->
<!--        .catch( error => {-->
<!--            console.error( error );-->
<!--        } );-->
<!--</script>-->
<script>
    CKEDITOR.replace( 'editor' );
</script>
