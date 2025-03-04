<script>
    function arise() 
    { 
        var str = document.getElementById("s").value; 
        var h = new XMLHttpRequest(); 
		h.open("GET","07.php?str="+str,true); 
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
Email: <input type="text" id="s" onKeyUp="arise()">
<div id="d1"></div>
</form>

