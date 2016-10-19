 <html>
 <head>
			<SCRIPT language = "javascript" type = "text/javascript">
			var Request = false;
			if (window.XMLHttpRequest) {
			Request = new XMLHttpRequest();
			} else if (window.ActiveXObject) {
			Request = new ActiveXObject("Microsoft.XMLHTTP");
			}
			function getText(url, elementID) {
			if(Request) {
			var RequestObj = document.getElementById(elementID);
			Request.open("GET", url);
			Request.onreadystatechange = function()
			{
			if (Request.readyState == 4 && Request.status == 200) {
			RequestObj.innerHTML = Request.responseText;
			}
			}
			Request.send(null);
			}
			}
			</SCRIPT>
 </head>
	<body>
		<form role="form" action="lognav.php" method="POST">
		<div class="form-group">
			<div class="col-md-12">
			<p>
				<button type="submit" class="btn btn-primary btn-md btn-block" name="login" onclick="getText('gettext.php','errorpos')">Login </button>
			</p>
			</div>
		</div>
		</form>
			<div id="errorpos"></div>
		
	</body>
 </html>