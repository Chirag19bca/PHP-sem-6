<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u2p1</title>
	<script type="text/javascript" lang="javascript">
	function showdata()
	{
		var xmlhttp;
		if(window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
			
		}
		
		var unm=document.getElementById('uname').value;
		
		xmlhttp.open('POST','02.php?uname='+unm,true);
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("info").innerHTML=xmlhttp.responseText;
			}
			else
			{
				document.getElementById("info").innerHTML='Respone not Set Something gone wrong..!';

			}
		}
		xmlhttp.send();
	}
	</script>
</head>
<body>
    <form action="post" name="frm" id="frm">
        <label for="n1">Uname: </label><input type="text" name="uname" id="uname" onkeyup="showdata(); return false" ><br>
    </form>
	<h1><div id="info"></div></h1>
</body>
</html>