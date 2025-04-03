<script>
    function myname() 
    { 
        var name = document.getElementById("name").value; 
        var h = new XMLHttpRequest(); 
		h.open("GET","03.php?name="+name,true); 
		h.onreadystatechange = function()
		{ 
			if( this.readyState == 4 &&this.status == 200)   
			{ 
				document.getElementById("d1").innerHTML  = this.responseText; 
			} 
		} 
		h.send(); 
    } 
</script>
<form action="" method="post">
Name: <input type="text" id="name" onKeyUp="myname()">
<div id="d1"></div>
</form>
