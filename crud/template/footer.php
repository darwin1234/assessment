<script type="text/javascript">
	var result, HTML = "";
	var productname;
	var productCat;
	var Description;
	
	var crud = {
		
		load: function(p,ID){
			
			//alert(ID);
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) {
				 
					 if(p == 1){
						HTML ="";
						result = this.responseText;
						result = JSON.parse(result);
						HTML += "<table class='table'>";
						HTML +=	"<thead>";
						HTML +=	 " <tr>";
						HTML +=		"<th>Product Name</th>";
						HTML +=		"<th>Product Type</th>";
						HTML +=		"<th>Description</th>";
						HTML +=		"<th>Event</th>";
						HTML +=  "</tr>";
						HTML +=	"</thead>";
						HTML +=	"<tbody>";
						
						for(var i=0; i < result.length; i++){
							
						HTML += "<tr>";
						HTML += "	<td>"+ result[i].productname+"</td>";
						HTML += "	<td>"+result[i].productCat+"</td>";
						HTML += "	<td>"+result[i].Description+"</td>";
						HTML += "	<td><a href='javascript:void(0)' data-toggle='modal' data-target='#myModalUpdate__"+result[i].ID+"'>Edit</a> | <a href='javascript:void(0)' onclick='crud.__delete("+result[i].ID+");'>Delete</a></td>";
						HTML += "  </tr>";
							

						<!-----UPDATE MODAL--->
						HTML +=  "<div class='modal fade' id='myModalUpdate__"+result[i].ID+"' role='dialog'><div class='modal-dialog'><div class='modal-content'>";
						HTML +=  "	<div class='modal-header'><button type='button' class='close' data-dismiss='modal'>&times;</button>";
						HTML +=  "		<h4 class='modal-title'>Update Product</h4>";
						HTML +=  "	</div>";
						HTML +=  "<div class='modal-body'>";	
						HTML +=  "<form id='addProduct' method='POST' action=''>";
						HTML +=  " <div class='form-group'>";
						HTML +=  " <label class='control-label' for='name-input-field'>Product Name </label>";
						HTML +=  " 	<input class='form-control' required='' type='text' id='productname__"+result[i].ID+"' name='productname' value='"+result[i].productname+"'>";
						HTML +=  " </div>";
						HTML +=  "<div class='form-group'>";
						HTML +=  "	<label class='control-label' for='name-input-field'>Product Type</label>";
						HTML +=  "<input class='form-control' required='' type='text' id='productCat__"+result[i].ID+"' name='productCat' value='"+result[i].productCat+"'>";
						HTML +=  "</div>";
						HTML +=  "<div class='form-group'>";
						HTML +=  "<label class='control-label' for='name-input-field' >Description</label>";
						HTML +=  " <textarea  class='form-control' name='Description' id='Description__"+result[i].ID+"'>"+ result[i].Description + "</textarea>";
						HTML +=  "</div>";			
						HTML +=  "<button  class='btn btn-primary pull-right' type='submit' name='submit' onclick='crud.__update("+result[i].ID+")'>Update Product</button>";
						HTML +=  "</form>";
						HTML +=  "		</div>";
						HTML +=  "		<div class='modal-footer' style='clear:both;'>";
						HTML +=  "		  <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
						HTML +=  "		</div>";
						HTML +=  "	  </div>";	  
						HTML +=  "	</div>";
						HTML +=  "</div>";
						
							
					   }
					    HTML += "</tbody>";
						HTML += "</table>";
					   
					   document.getElementById("products").innerHTML= HTML;
					}
					
					if(p == 2){
						 result = this.responseText;
						 console.log(result);
						
					}
					if(p ==3){
						console.log("Deleted");
					}
					
					if(p == 4){
						 result = this.responseText;
						 console.log(result);
						
					}
				
				}else{
					
					console.log("Cant Connect to the server!");
					
				}
				
				
				
			};
			if(p == 1){
				xhttp.open("POST", "<?php echo $baseurl;?>/lists.php", true);
				xhttp.send();
			}
			if(p == 2){
				
				productname = document.getElementById("productname").value;
				productCat = document.getElementById("productCat").value;
				Description =  document.getElementById("Description").value;
				
				xhttp.open("POST", "<?php echo $baseurl;?>/addProduct.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send("productname=" + productname + "&productCat=" + productCat +"&Description="+Description);
				crud.load(1,null);
			}
			
		
			if(p ==3){
				xhttp.open("POST", "<?php echo $baseurl;?>/deleteproduct.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send("ID=" + ID);
				crud.load(1,null);
			}
			
			
			
			
			
		},
		
		__insert: function(){
			var addProduct = document.getElementById("addProduct");
			 addProduct.addEventListener("submit", function(e){
			
				crud.load(2,null);
				e.preventDefault();
				
			});
			
		},
		__delete: function(ID){
			crud.load(3,ID);
		},
		__update: function(ID){
			productname = document.getElementById("productname__"+ ID).value;
			productCat  = document.getElementById("productCat__"+ ID).value;
			Description =  document.getElementById("Description__" + ID).value;
			xhttp.open("POST", "<?php echo $baseurl;?>/updateproduct.php", true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send("ID=" + ID + "&productname=" + productname + "&productCat=" + productCat +"&Description="+Description);
			crud.load(4,ID);
		
		}
		
	}
	
	crud.load(1,null);
	crud.__insert();
	

	
	
</script>
</body>
</html>

