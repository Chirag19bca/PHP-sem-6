<script>
    function gender() 
    { 
        var radio = document.getElementsByName("r"); 
		var a="";
		for(var i=0;i<radio.length;i++)
		{
			if(radio[i].checked)
			{
				a+=radio[i].value;
			}
		}
        var h = new XMLHttpRequest(); 
		h.onreadystatechange = function()
		{ 
			if( this.readyState == 4 &&this.status == 200)   
			{ 
				document.getElementById("d1").innerHTML  = this.responseText; 
			} 
		} 
		h.open("GET","05.php?gen="+a,true); 
		h.send(); 
    } 
	function hobby() 
    { 
        var checkbox = document.getElementsByName("h"); 
		var b="";
		for(var i=0;i<checkbox.length;i++)
		{
			if(checkbox[i].checked)
			{
				b+=checkbox[i].value+" ,";
			}
		}
        var h = new XMLHttpRequest(); 
		h.open("GET","05.php?hob="+b,true); 
		h.onreadystatechange = function()
		{ 
			if( this.readyState == 4 &&this.status == 200)   
			{ 
				document.getElementById("d2").innerHTML  = this.responseText; 
			} 
		} 
		h.send(); 
    } 
</script>
<form action="" method="post">
<input type="radio" name="r" value="Male" onChange="gender()">MALE 
<input type="radio" name="r" value="Female" onChange="gender()">FEMALE 
<div id ="d1"></div>
<input type= "checkbox" name="h" value="cricket" onClick="hobby()">Cricket 
<input type= "checkbox" name="h" value="football" onClick="hobby()">Football 
<input type= "checkbox" name="h" value="hockey" onClick="hobby()">Hockey 
<input type= "checkbox" name="h" value="badminton" onClick="hobby()">badminton 
<div id ="d2"></div>

</form>

