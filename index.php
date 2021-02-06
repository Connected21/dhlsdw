<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<title>Dark</title>
</head>
<style type="text/css">
    
    body{
    	background-color: black;
    	font-style: garamond;
    }

	table {
		margin-top: 150px;
		border: 1px solid;
		background-color: #eff;
	}

	td {
		border: 0px;
		padding: 10px;

	}

	th {
		border-bottom: 1px solid;
		background-color: #ddd;
	}

	h1{
		color: white;
		text-align: center;
		margin-top: 20px;
	}

</style>
<body>
<form action="menu.php" method="post">
<h1>доступ здесь - ваш выбор.</h1>
<span id="hello"></span>
	<table align="center">
		<tr>
			<th colspan="2"><h2 align="center">Enter Access</h2></th>
		</tr>
		<tr>
			<td>Pin access: </td>
			<td><input type="text" name="uname" required=""></td>
		</tr>
		<tr>
			<td>Serial key access: </td>
			<td><input type="text" name="pwd" required=""></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="Enter"></td>
		</tr>
	</table>
</form>

</body>
    <script type="text/javascript">
        window.onload = function () {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.ipify.org?format=jsonp&callback=DisplayIP";
            document.getElementsByTagName("head")[0].appendChild(script);
        };
        function DisplayIP(response) {
            document.getElementById("hello").innerHTML = "Your IP Address is " + response.ip;
        }
    </script>
</html>