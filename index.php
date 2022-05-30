<!DOCTYPE html>
<html>
<head>
	<title>Search Users</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<h1>Search Users</h1>
		<form>
			Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
		</form>
		<p>Suggestions: <span id="output" style="font-weight: bold;"></span> </p>
	</div>

	<script>
		function showSuggestion(str) {
			//console.log(str);
			if (str.length==0) {
				document.getElementById('output').innerHTML='';
			}else{
				//AJAX REQUEST
				var xmlhttp= new XMLHttpRequest();
				xmlhttp.onreadystatechange=function(){
					if(this.readystate==4 && this.status==200){
						document.getElementById('output').innerHTML=this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</body>
</html>