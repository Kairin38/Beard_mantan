<?php 
//debug($urlPage );
getHeader(); ?>
<div class="container page-body chuyen-muc" id="chuyen muc">
    <div class="row page-title">
        <div class="col-sm-12">
            <?php echo $category["name"]; ?>
        </div>
    </div>
<!-- start 1 trang -->
<div class="row topic-row">
<div class="col-md-9">
  <br />  
	<?php
		if (isset($listNotices)) { // => !empty($listNotice)
		foreach ($listNotices as $info) {
		$urlNotice = getUrlNotice($info['Notice']['id'], $info['Notice']['slug']);
		$today = getdate($info['Notice']['time']);
	?>
			<div class="col-sm-6" style="text-align:center">

                            <a href="<?php echo $urlNotice; ?>">
							<img src="<?php echo $info["Notice"]["image"];  ?>" class="img-thumbnail"/>
                            <h5> <?php echo $info["Notice"]["title"]; ?> </h5>
						</a>
                            <em><p class="bv-date">
								<?php  echo date("d/m/Y",$info["Notice"]["time"]);  ?> |
								<?php echo $info["Notice"]["author"];?>
							</p> </em>
				</div>
            <?php }}?>
        </div>

<!-- bài mới cập nhật -->
<div class="col-md-3">
<ul class="list-unstyled n_boxlist n_hover">
<div class="row"> <h3 style="text-align:center">Bài mới cập nhật:</h3></div>
<hr /> 
                    <?php
                    global $modelNotice;
                    $listNewNotice = $modelNotice->getNewNotice(5);
                    if(!empty($listNewNotice)){
                        foreach($listNewNotice as $info){
                            $urlNotice = getUrlNotice($info['Notice']['id']);
                            $today = getdate($info['Notice']['time']);
                            ?>
                            <li class="l-new ">
                                <p class="text-new"><a href="">
								<img src="<?php echo $info["Notice"]["image"];  ?>" class="img-thumbnail"/> </p>
								<p style="text-align:center"><?php echo $info['Notice']['title']; ?></a></p>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
</div>
	</div>
<!-- end bài mới cập nhật -->

<!-- end 1 trang -->
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
<?php getFooter();?>