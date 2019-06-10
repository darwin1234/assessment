<?php require_once('template/header.php'); ?>

<div class="container">
		<div style="width:100%; height:40px;"></div>
	
		 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Product</button>
			<!-- INSERT RECORDS MODAL -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Add Product</h4>
					</div>
					<div class="modal-body">
					
						<form id="addProduct" method="POST" action="">
							<div class="form-group">
								<label class="control-label" for="name-input-field" >Product Name </label>
								<input class="form-control" required="" type="text" id="productname" name="productname">
							</div>
							<div class="form-group">
								<label class="control-label" for="name-input-field" >Product Type</label>
								<input class="form-control" required="" type="text" id="productCat" name="productCat">
							</div>
							<div class="form-group">
								<label class="control-label" for="name-input-field" >Description</label>
								<textarea  class="form-control" name="Description" id="Description"></textarea>
							</div>			
							<button  class="btn btn-primary pull-right" type="submit" name="submit">Add Product</button>
						</form>
					</div>
					<div class="modal-footer" style="clear:both;">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				  
				</div>
			</div>
			<!---- UPDATE RECORD MODAL ---->
			
			
			
		 <h2>Product lists</h2>
		 <div id="products">

		</div>
	
</div>

<?php require_once('template/footer.php');?>