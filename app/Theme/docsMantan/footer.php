	</div>
    <!-- /#wrapper -->
	<?php
		global $metaTitleMantan;
		global $metaKeywordsMantan;
		global $metaDescriptionMantan;
		
		echo '<title>'.$metaTitleMantan.'</title>
			  <meta name="description" content="'.$metaDescriptionMantan.'">
			  <meta name="keywords" content="'.$metaKeywordsMantan.'">';
	?>
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo $urlThemeActive;?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo $urlThemeActive;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $urlThemeActive;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo $urlThemeActive;?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo $urlThemeActive;?>js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo $urlThemeActive;?>js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?php echo $urlThemeActive;?>js/demo/dashboard-demo.js"></script>

</body>

</html>
