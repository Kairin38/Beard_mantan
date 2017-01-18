<div class="page-bottom">
    <div class="container">
        <div class="row">
<!-- danh mục -->
               <div class="col-sm-3">
                <div class="bot-min-name">Danh mục</div>
                <div class="bot-min-content">
				<?php
					$listLink = getListLinkWeb(1);
					foreach($listLink as $element)
					{
						echo '<div class="divide"><a href="'.$element["link"].'">'.$element["name"].'</a></div>';
					}
				?>
                </div>
            </div>
<!-- end danh mục -->
<!-- subscribe -->
            <div class="col-sm-3 hidden-xs">
                <div class="bot-min-name">FOLLOW US</div>
                <div class="bot-min-content">Nhận thông báo qua email!</div>
                <form method="post"  target="_blank" action="add-subscribe"id="email-form">
                    <input type="email" placeholder="Your email" name="email" />
                    <button type="submit" >Follow Us</button>
					
                </form>
            </div>
<!-- end subscribe -->
<!-- facebook -->
            <div class="col-sm-3 hidden-xs">
                <div class="bot-min-name">Facebook Page</div>
                <?php
					echo showLikeFanpage();
				?>
            </div>
<!-- end facebook-->
<!-- thông tin liên hệ -->
            <div class="col-sm-3">
                <div class="bot-min-name">CONTACT US</div>
                <div class="bot-min-content">
                    Beauty Blog
                    <br>W: bear.loc
                    <br>A: <?php echo $contactSite['Option']['value']['address']; ?>
					<br>P:<?php echo $contactSite['Option']['value']['fone'];  ?>
                    <br>E: <?php echo  $contactSite['Option']['value']['email'];  ?>
                    <br>
				</div>
			</div>
<!-- end thông tin liên hệ -->
        </div>
        <p class="bq-line">
            © 2016 Beauty Blog. All rights reserved.
        </p>
    </div>
</div>
</body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</html>