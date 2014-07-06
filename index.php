<html>
<meta charset="UTF-8">
<script src= "js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.css"></link>
<script src = "js/bootstrap.js" ></script>
<title>Balasankar C</title>
<style>
#permalink_section
{
	white-space: pre-wrap; /* css-3 */    
	white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
	white-space: -pre-wrap; /* Opera 4-6 */    
	white-space: -o-pre-wrap; /* Opera 7 */    
	word-wrap: break-word; /* Internet Explorer 5.5+ */
}
@font-face
{
	font-family:Ambrosio;
src:url(ambrosio.ttf);
}
@font-face
{
	font-family:Rachana;
src:url(rachana.ttf);
}
</style>
<body>
<div style="float:left;width:45%">
<img alt="Balu" src="cartoon.jpg" width="55%" />
<p style="margin-left:2%;width:50%;float:left;font-size:large" id="permalink_section">
<strong>Recent Technical Posts</strong><br />
<?
$json = file_get_contents("http://balasankarc.in/tech/api/get_recent_posts/?count=3");
$array = json_decode($json,TRUE);
$i=0;
while($i<3)
{
	$url = $array["posts"][$i]["url"];
	$title = $array["posts"][$i]["title"];
	echo "<a href='" . $url . "'>" . $title . "</a><br />";
	$i = $i+1;
} 
?>
</p>
<p style="margin-left:2%;width=50%;float:left;font-size:large" id="permalink_section">
<strong>Recent Literary Posts</strong><br />
<?
$json = file_get_contents("http://balasankarc.in/literature/api/get_recent_posts/?count=3");
$array = json_decode($json,TRUE);
$i=0;
while($i<3)
{
	$url = $array["posts"][$i]["url"];
	$title = $array["posts"][$i]["title"];
	echo "<a href='" . $url . "'>" . $title . "</a><br />";
	$i = $i+1;
} 
?>
</p>

</div>
<div style="float:left;width:50%;margin-right:5%;margin-top:5%;font-size:40px" >
<font face="Ambrosio" ><big><big>Balasankar C</big></big></font><br />
<p style="text-align:justify"><span style="color:#ff0000">Freedom </span>is never easily won, but once established, <span style="color:red">freedom </span>lasts, spreads and chokes out tyranny." <br />- Trent Lott</p>
<br />
<a href="tech" class="btn btn-primary btn-lg col-md-2" style="padding-left:0;padding-right:0" data-toggle="tooltip" data-placement="top" title="Posts related to Computers and Technology"><font face="Rachana">Technocrazian</font></a>
<div class="col-md-1"></div>
<a href="literature" class="btn btn-danger btn-lg col-md-2" style="padding-left:0;padding-right:0" data-toggle="tooltip" data-placement="top" title="Literary Works"> ശങ്കരാഭരണം </a>
<div class="col-md-1"></div>
<a href="gift" class="btn btn-success btn-lg col-md-2" style="padding-left:0;padding-right:0" data-toggle="tooltip" data-placement="top" title="If you plan to give me gifts, first check this list">Gift List</a>
<div class="col-md-1"></div>
<a href="literature" class="btn btn-warning btn-lg col-md-2" style="padding-left:0;padding-right:0" data-toggle="tooltip" data-placement="top" title="Modes to contact me">Contact Me</a>
</div>
<br /><br />
<div style="bottom:1%;position:absolute;">
<!-- Start of StatCounter Code for Default Guide -->
<script>
$(document).ready(function(){ $("[data-toggle=\"tooltip\"]").tooltip(); });
</script>
</body>
</html>
