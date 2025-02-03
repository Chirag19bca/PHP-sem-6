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
		else
		{
			xmlhttp=new ActiveXobject('Microsoft.XMLHTTP');
		}
		var unm=document.getElementById('uname').value;
		var pass=document.getElementById('pass').value;
		
		xmlhttp.open('POST','01.php?uname='+unm+'&Password='+pass,true);
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("info").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.send();
	}
	</script>
</head>
<body>
    <form action="post" name="frm" id="frm" onsubmit="showdata();return false">
        <label for="n1">Uname: </label><input type="text" name="uname" id="uname"><br>
        <label for="n2">Password: </label><input type="Password" name="pass" id="pass"><br>
        <input type="submit" name="sumbit" value="submit">
        <input type="reset" name="reset" value="reset">
    </form>
	<h1><div id="info"></div></h1>
</body>
</html>