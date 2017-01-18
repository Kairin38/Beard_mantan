<?php 
	getHeader(); 
	global $newNotice;
 ?>
<div class="container page-body">
    <div class="row page-title">
        <div class="col-sm-12">
            Beauty Blog
        </div>
    </div>
    <div>
        <div class="page-description">
            <i>Go ahead and stare at your beard in the mirror, you manly bastard. You've earned it</i>
        </div>
    </div>
    <div class="row topic-row">
		<?php    
			foreach($tmpVariable['newNotices'] as $info)
			{
		?>
			<div class="col-sm-4">
				<a href="<?php echo getUrlNotice($info["Notice"]["id"]); ?>"><img class="img-responsive" src="<?php echo $info["Notice"]["image"]; ?>"style=" width:300px; height:300px;"/></a>
				<!-- <p class="cate-name">BEARD N MUSTACHE</p> -->
				<a href="<?php echo getUrlNotice($info["Notice"]["id"]); ?>"><p class="topic-name"><?php echo $info["Notice"]["title"];  ?></p></a>
				<p class="topic-description"><?php echo $info["Notice"]["introductory"];  ?></p>
				<p class="topic-info">
					<span class="time"><?php echo date("d/m/Y",$info["Notice"]["time"]);  ?></span>
					/
					<span class="author"> <?php echo $info["Notice"]["author"];  ?></span>
				</p>
        </div>
		<?php	}
		
		?>
        
    </div>
</div>     
<?php getFooter();?>