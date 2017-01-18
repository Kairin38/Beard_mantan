<?php
getHeader();
?>
<div class="container page-body chuyen-muc" id="chuyen muc">
<div class="row topic-row">
<?php   
	if (!empty($listNotices)){
	foreach($listNotices as $info)
	{
?>
			 <div class="col-sm-6">
				<a href="<?php echo getUrlNotice($info["Notice"]["id"], $info["Notice"]["slug"]); ?>"><img src="<?php echo $info["Notice"]["image"]; ?>" class="img-thumbnail"/></a>
				<a href="<?php echo getUrlNotice($info["Notice"]["id"]); ?>"><p class="topic-name"><?php echo $info["Notice"]["title"]; ?></p></a>
				<p class="topic-description"><?php echo $info["Notice"]["introductory"]; ?></p>
				<p class="topic-info">
                <span class="time"><?php echo date("d/m/Y",$info["Notice"]["time"]); ?>  </span>
                /
                <span class="author">By:<?php echo $info["Notice"]["author"]; ?></span>
				</p>
			</div>
<?php

		}
    }
?>
</div>
<!-- phân trang -->
   <?php
        if ($page > 2) {
            $startPage = $page - 2;
        } else {
            $startPage = 1;
        }
        if ($totalPage > $page + 2) {
            $endPage = $page + 2;
        } else {
            $endPage = $totalPage;
        }
    ?>
    </div>
    <div class="index-row row ">
       <?php echo $page; ?>/<?php echo $totalPage; ?>
         <a href="<?php echo $urlPage.$back; ?>" class="page-count active"><span>Back</span></a>
		
		<?php for ($i = $startPage; $i <= $endPage; $i++)
			{ ?>
                        <?php
                        if ($i == $page) {
                        ?>
						 <span class="page-count active"><?php echo $i;?></span>
                    <?php 
						}
			}
                    ?>
		
		<a href="<?php echo $urlPage.$next;  ?>" class="page-count"><span>Next</span></a>
    </div>
	<!-- end phân trang -->
</div>
<?php
getFooter();
?>