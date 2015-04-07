<!-- by nadim -->
<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str)
{
if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
	//var hidden = document.getElementById("tx1").value;
    return;
} else {
	var hidden = document.getElementById("tx1").value;
	var hidden1 = document.getElementById("tx2").value;
	var hidden2 = document.getElementById("tx3").value;
    var xmlhttp=new XMLHttpRequest();
	var xmlhttp1=new XMLHttpRequest();
	var xmlhttp2=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			document.getElementById("txt2").value=xmlhttp.responseText;
			//document.getElementById("txt3").value=xmlhttp.responseText;
			//document.getElementById("txt4").value=xmlhttp.responseText;

        }
    }
	xmlhttp1.onreadystatechange=function() {
        if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
            //document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			//document.getElementById("txt2").value=xmlhttp.responseText;
			document.getElementById("txt3").value=xmlhttp1.responseText;
			//document.getElementById("txt4").value=xmlhttp.responseText;

        }
    }
	xmlhttp2.onreadystatechange=function() {
        if (xmlhttp2.readyState==4 && xmlhttp2.status==200) {
            //document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			//document.getElementById("txt2").value=xmlhttp.responseText;
			document.getElementById("txt4").value=xmlhttp2.responseText;
			//document.getElementById("txt4").value=xmlhttp.responseText;

        }
    }
    xmlhttp.open("POST","tt.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("q="+str);
	xmlhttp1.open("POST","tt.php",true);
	xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp1.send("q="+hidden1);
	xmlhttp2.open("POST","tt.php",true);
	xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp2.send("q="+hidden2);
}    
}
</script>
</head>
<body>

<p><b>Testing ajax form load:</b></p>
<form action=""> 
First name: <input type="text" id="txt1" onblur="showHint(this.value)">
<input type="text" id="txt2">
<input type="text" id="txt3">
<input type="text" id="txt4">
<input type="hidden" id="tx1" value="2">
<input type="hidden" id="tx2" value="3">
<input type="hidden" id="tx3" value="4">

</form>
<p>Suggestions: <span id="txtHint"></span></p> 

</body>
</html>
