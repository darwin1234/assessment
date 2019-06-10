<script type="text/javascript">
	var result, HTML = "";
	var productname;
	var keyword;
	var Pl;
	var ImagePath;
	var Oprice;
	var Sp;

	
	var crud = {
		
		load: function(p,ID){
			
			xhttp.onreadystatechange = function() 
			{
				
				if (this.readyState == 4 && this.status == 200) 
				{
					HTML ="";
					result = this.responseText;
					result = JSON.parse(result);
					if( result.searchReport !=="undefined"){
					HTML += "<h2>Total Products:" + result.searchReport['totalProducts'] + "</h2><hr/>";
					HTML += "<h4>keyword:" + result.searchReport['keyword'] + "</h4><hr/>";
					}
					
					for(var i=0; i < result.skus.length; i++){
						
						var str = result.skus[i].info['imageUrl']; 
						var ImageURL = str.replace("<SIZE>", "400");
						HTML += "<div>";
						HTML += "	<h2>"+result.skus[i].info['productLabel']+"</h2>";
						HTML += "	<p><img src='"+ImageURL+"'></p>";
						HTML += "	<p><strong> Original price: </strong>"+result.skus[i].storeSku['pricing']['originalPrice']+"</p>";
						HTML += "	<p><strong> Special price: </strong>" +result.skus[i].storeSku['pricing']['specialPrice']+"</p>";
						var data =  '"' + result.skus[i].info['productLabel'] +'"'+','+ '"' + ImageURL + '"' + ','+'"' + result.skus[i].storeSku['pricing']['originalPrice'] +'"' + ',' + '"' + result.skus[i].storeSku['pricing']['specialPrice'] + '"' ;
						HTML += "	<button class='btn btn-primary' onclick='crud.__insert("+data+")'>Save to database</button>";
						HTML += "</div>";
					
					}
					
				
				}
				
				document.getElementById("products").innerHTML= HTML;
				
			};
			
			if(p == 1){
				xhttp.open("POST", "<?php echo $baseurl;?>/lists.php", true);
				xhttp.send();
			}
			if(p == 2){
				alert(keyword);
				xhttp.open("POST", "<?php echo $baseurl;?>/lists.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send("keyword=" + keyword);
			}
			if(p == 3){
				xhttp.open("POST", "<?php echo $baseurl;?>/addproduct.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send("Pl=" + Pl  +"&ImagePath="+ImagePath+"&Oprice="+Oprice+"&Sp="+Sp);
				
			}
			
			
			
		},
		search: function(){
			var search = document.getElementById("search");
			search.addEventListener("click", function(e){
				keyword = document.getElementById("keyword").value;
				crud.load(2,null);
				e.preventDefault();
			});
			
		},
		__insert: function(x,y,z,l){
			
			Pl = x;
			ImagePath = y;
			Oprice = z;
			Sp = l;
			crud.load(3,null);
	
		
		}
		
		
		
	}
	
	crud.load(1,null);
	crud.search();
	
	

	
	
</script>
</body>
</html>

