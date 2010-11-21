<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php require_once("views/head/headmeta.php"); ?>
</head>
<body class="yui-skin-sam">
  <!-- Application Layout -->
  <div id="wrapper">
	  <div id="hd">
      <?php require_once("views/header.php"); ?>
	  </div> <!-- end of hd -->
	
		<div id="banner">
		  <?php require_once("views/banners/thank_you_banner.php");?>
		</div>
    <div id="main_content">
			<?php require_once("views/content/thank_you_content.php"); ?>
    </div> <!-- end of main_content -->

    <div id="ft" class="grid_12 alpha omega">
      <?php require_once("views/footer.php"); ?>

    </div> <!-- end of ft -->


    <div class="clear"></div>


	</div> <!-- end of wrapper -->
	<?php require_once("views/javascripts.php"); ?>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      banner.setupPagingLinks();
      banner.initBanners();
    });
  </script>
</body>
</html>