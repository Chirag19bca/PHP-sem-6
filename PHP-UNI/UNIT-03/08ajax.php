<script type="text/javascript">
    function call()
	{ 
        var id = document.getElementById("sid").value; 
        var name = document.getElementById("sname").value; 
        var mob = document.getElementById("mob").value; 
        var c = document.getElementById("c").value; 
        var h = new XMLHttpRequest(); 
		
		h.onreadystatechange =  function()
		{      
			if(this.status == 200 &&this.readyState == 4) 
			{ 
	document.getElementById("d1").innerHTML = this.responseText; 
			} 
		}
h.open("GET","08.php?sid="+id+"&sname="+name+"&mob="+mob+"&c="+c,true); 
h.send(); 
    } 
</script>
id :<input type="text"  id = "sid" onKeyUp="call()"><br/>
name :<input type="text" id ="sname"><br/>
mob :<input type="text" id ="mob"><br/>
county :<input type="text" id ="c"><br/>
<input type="submit" onClick="call()">
<div id="d1"></div>
