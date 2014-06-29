<html>
<meta charset="UTF-8">
<script src= "../js/jquery.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css"></link>
<script src = "../js/bootstrap.js" ></script>
<title>Balasankar C</title>
<body>
<h1 style="text-align:center">My Wishlist</h1>
<div style="margin-left:10%;margin-right:10%">
<h3 style="text-align:center">Heya, If you ever wish to gift me something, just take a look at the following and choose one. :) </h3>
<div class="row">
<?
$xml=simplexml_load_file("https://www.goodreads.com/review/list/14094540.xml?key=yzs9uBOcHNa0ybIdxzHmfw&shelf=to-read&per_page=200&page=1-100&order=d");

$json = json_encode($xml);
#echo $json;
$array = json_decode($json,TRUE);
$some = $array["books"]["book"];
#echo $some;
$count=0;
foreach($some as $param)
{
    $count = $count + 1;
    echo '<div class=" col-md-3">
    <div class="thumbnail">';
    $source_str=$param["title"];
    $arr = explode('|',$source_str);
    $arraysize = count($arr);
    if ($arraysize==1)
    {
	$filename=trim($arr[0]). ".jpg";
    }
    else
    {
	$filename=trim($arr[1]). ".jpg";
    }
    if (strpos($filename,"'") !== false)
    {
	$filearr = explode("'",$filename);
	$filename = $filearr[0] . ".jpg";
    }
    if (strpos($filename,"#") !== false)
    {
	$filearr = explode("#",$filename);
	$filename = trim($filearr[0]) . ".jpg";
    }

    $filepath="cover/" . $filename;
    echo "<img src='" . $filepath;
    echo "' width = '100%'>";
  #  if (file_exists($filepath))
  #  {
  #      echo "<img src='" . $filepath;
#	echo "' width='100%'>";
#    }
#    else
#    {
#	echo "<img src='cover/A Byte of Vim.jpg' width='100%'>";
#    }
    echo '<div class="caption" style="text-align:center">';
    echo '<h3>' . $arr[0];
    echo '</h3>';
    $autharr = $param["authors"];
    foreach($autharr as $author)
    {
      echo '<p>';
      echo $author["name"];
      echo '</p>';
    }
    echo '</div>
    </div>
  </div>';
    if ($count%4==0)
    {
	echo '</div><div class="row">';
    }	
	


}
?>
</div>
</div>
</body>
</html>
