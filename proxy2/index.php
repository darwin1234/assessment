<?php require_once('template/header.php'); ?>
<!-- Search form -->

<div class="container">
	<div class="md-form mt-0">
	  <input class="form-control" type="text" id="keyword" placeholder="Search" aria-label="Search">
	  <input class="btn btn-primary pull-right" type="submit" id="search" value="Search">
	</div>

	<div id="products"></div>

</div>
<?php require_once('template/footer.php');?>