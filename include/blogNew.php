<div class="cate list2">
    <h4>최신 글</h4>
    <ul>
        <?php
            $blogNew = "SELECT * FROM blog WHERE blogDelete = 0 ORDER by blogID DESC LIMIT 4";
            $blogNewResult = $connect -> query($blogNew);

            // echo "<pre>";
            // var_dump($blogNewResult);
            // echo "</pre>";

            foreach($blogNewResult as $blog){ ?>
                <li>
                    <a href="blogView.php?blogId=<?=$blog['blogID']?>">
                        <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                        <span><?=$blog['blogTitle']?></span>
                    </a>
                </li>
           <?php }
        ?>
    </ul>
</div>