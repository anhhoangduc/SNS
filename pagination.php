<ul class="pagination" style="margin: 0 auto 0 auto; ">
    <li ><a href="?pageno=1">最初</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">以前</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">次</a>
    </li>
    <li><a href="?pageno=<?php echo $total_pages; ?>">最後</a></li>
</ul>
