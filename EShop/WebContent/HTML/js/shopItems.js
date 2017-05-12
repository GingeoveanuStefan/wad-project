var xmlDoc=null;
if (window.ActiveXObject){
	xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
}
else if (document.implementation.createDocument){
	xmlDoc=document.implementation.createDocument("","",null);
}
else{
	alert('Browser cannot handle this script');
}
if (xmlDoc!=null){
	xmlDoc.async=false;
	xmlDoc.load("data/data.xml");

	var x=xmlDoc.getElementsByTagName("item");
	
	document.write("<div class=\"col-md-9\">");
	document.write("<div class=\"row\">");
	
	for (i=0;i<x.length;i++)
	{ 
		if(x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue == category ) {
			document.write("<div class=\"col-sm-4 col-lg-4 col-md-4\">");
			document.write("<div class=\"thumbnail\">");
			document.write("<img src=\"" + x[i].getElementsByTagName("image")[0].childNodes[0].nodeValue + "\" alt=\"\">");
			document.write("<div class=\"caption\">");
			document.write("<h4 class=\"pull-right\">" + x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue + "</h4>");
			document.write("<h4><a href=\"#\">" + x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</a></h4>");
			document.write("<p>" + x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue + "</p>");
			document.write("</div>");
			document.write("<center><button type=\"button\" class=\"btn btn-success\">Add to cart</button></center><br/>");
			document.write("</div>");
			document.write("</div>"); 
		}
	}
}