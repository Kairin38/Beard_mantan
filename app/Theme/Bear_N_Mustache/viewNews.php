<?php 
//debug($infoNotice);
getHeader(); ?>
<div class="container page-body">
    <div class="container" id="bai-viet-body">
        <div class="row">
            <div class="col-sm-8" id="bv-left">
                <div class="bv-top">
                    <p class="bv-title"><?php echo $infoNotice['Notice']['title']; ?></p>
                    <p class="bv-info"><i><?php echo date("d/m/Y",$infoNotice['Notice']['time']); ?></i></p>
                </div>
                <div class="bv-main">
                    <div bv-open>
                        <p class="bv-min-text">
							<em><?php echo $infoNotice['Notice']['introductory']; ?></em>
                        </p>
						<p class="bv-img"><img src="<?php echo $infoNotice['Notice']['image']; ?>" class="img-thumbnail"/></p>
                    </div>

                    <div class="bv-min">
                        <?php echo $infoNotice['Notice']['content']; ?>                        
                    </div>
					<div style="text-align: right ">
						<em><?php echo $infoNotice['Notice']['author']; ?></em>
					</div>
                </div>
            </div>
            <div class="col-sm-4" id="bv-right">
				<!-- bai tuong tu -->

<?php
                    if(isset($otherNotices) && count($otherNotices)>1){

                    ?>
                    <div class="col-sm-12">
                        <h3>Có thể bạn quan tâm:</h3>
                    </div>
                    <?php

                        foreach($otherNotices as $key=>$notice)
                        {
                            if(($key>=0 && $key<5) && ($infoNotice['Notice']['id']!=$notice['Notice']['id'])){
                     ?>
                    <div class="row">
                        <a href="<?php echo getUrlNotice($notice['Notice']['id'])?>">
							<img class="img-thumbnail"  src="<?php echo $notice['Notice']['image'];?>" alt="<?php echo $notice['Notice']['title']; ?>"/>
						</a>
                        <div class="r_news_name" style="text-align:center">
                            <a href="<?php echo getUrlNotice($notice['Notice']['id'])?>"><?php echo $notice['Notice']['title'];?></a>
                        </div>
                    </div>
                    <?php }
                        }
                    }
                    ?>
					<!-- end bai tuong tu -->
                </ul>
            </div>
        </div>
        <div class="row bv-bot-row">
            <div class="col-sm-8">
                <div class="tags">
				<!-- cắt phần để tag ghép để tìm kiếm sử dụng getUrlNoticeSearch-->
                    Tags:
					<!-- cắt từ khóa-->
					<?php
							$pieces=explode(',',$infoNotice["Notice"]["key"]);
							foreach($pieces as $item)
							{
					?>
							 <a href="<?php echo  getUrlNoticeSearch($item); ?>"><span><?php echo $item;   ?></span></a>
							<?php }?>
				</div>
                <ul class="list-unstyled list-inline connect-list">
                    <li class="fb" id="fb"><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                    <li class="twitter" id="twitter"><a href="https://twitter.com/BeardenMustache"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                    <li class="pinterest" id="pinterest"><a href="https://www.pinterest.com/beardnmustache/"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</a></li>
                    <li class="google" id="google"><a href="https://plus.google.com/u/0/108945203184223930013"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>                                                            
                </ul>
                <div class="bv-bot"><img class="img-thumbnail" src="<?php echo $urlThemeActive;?>images/bv_bot.png"/></div>
                <div class="fb-comments" data-href="http://localhost/Bear_N_Mustache/bai_viet.php" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
    </div>
</div>
<?php getFooter(); ?>
