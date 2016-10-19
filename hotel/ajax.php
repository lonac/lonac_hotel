<HTML>
<HEAD>
<TITLE>Demo: Retrieving text from a PHP script</TITLE>
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
</HEAD>
<BODY>
<H1>Demo: Retrieving text from a PHP script</H1>
<FORM>
<INPUT type = "button" value = "Get Text"
onclick = "getText('GetText.php', 'DivTarget')">
</FORM>
<DIV id="DivTarget"> </DIV>
</BODY>
</HTML>