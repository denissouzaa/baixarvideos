<?php
// YouTube Downloader PHP
// based on youtube-dl in Python http://rg3.github.com/youtube-dl/
// by Ricardo Garcia Gonzalez and others (details at url above)
//
// Takes a VideoID and outputs a list of formats in which the video can be
// downloaded

include_once('config.php');
ob_start();// if not, some servers will show this php warning: header is already set in line 46...



function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'); 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . '' . $units[$pow]; 
} 
function is_chrome(){
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
		if(!strstr($agent, 'Iron')) // but not Iron
			return true;
	}
	return false;	// if isn't chrome return false
}



if(isset($_REQUEST['videoid'])) {
	$my_id = $_REQUEST['videoid'];
	

$Ver1 = strpos($my_id, "watch?v=");
$Ver2 = strpos($my_id, ".be/");
$Ver3 = strpos($my_id, "/?#/");
	
if ($Ver1 == true){

$id = explode("watch?v=", $_REQUEST['videoid']);

$videoid = $id[1]; 

if(strlen($videoid)>11){
$url   = parse_url($videoid);
$videoid = NULL;
if( is_array($url) && count($url)>0 && isset($url['query']) && !empty($url['query']) ){
$parts = explode('&',$url['query']);
if( is_array($parts) && count($parts) > 0 ){
foreach( $parts as $p ){
$pattern = '/^v\=/';
if( preg_match($pattern, $p) ){
$videoid = preg_replace($pattern,'',$p);
break;
}}}
if( !$videoid ){
echo '<p>No video id passed in</p>';
exit;
}}else{
echo '<p>Invalid url</p>';
exit;
}}

}

if ($Ver2 == true){

$id = explode(".be/", $_REQUEST['videoid']);

$videoid = $id[1]; 

if(strlen($videoid)>11){
$url   = parse_url($videoid);
$videoid = NULL;
if( is_array($url) && count($url)>0 && isset($url['query']) && !empty($url['query']) ){
$parts = explode('&',$url['query']);
if( is_array($parts) && count($parts) > 0 ){
foreach( $parts as $p ){
$pattern = '/^v\=/';
if( preg_match($pattern, $p) ){
$videoid = preg_replace($pattern,'',$p);
break;
}}}
if( !$videoid ){
echo '<p>No video id passed in</p>';
exit;
}}else{
echo '<p>Invalid url</p>';
exit;
}}

}

if ($Ver3 == true){

$id = explode("watch?v=", $_REQUEST['videoid']);

$videoid = $id[1]; 

if(strlen($videoid)>11){
$url   = parse_url($videoid);
$videoid = NULL;
if( is_array($url) && count($url)>0 && isset($url['query']) && !empty($url['query']) ){
$parts = explode('&',$url['query']);
if( is_array($parts) && count($parts) > 0 ){
foreach( $parts as $p ){
$pattern = '/^v\=/';
if( preg_match($pattern, $p) ){
$videoid = preg_replace($pattern,'',$p);
break;
}}}
if( !$videoid ){
echo '<p>No video id passed in</p>';
exit;
}}else{
echo '<p>Invalid url</p>';
exit;
}}

}
	

} else {
	echo '<p>No video id passed in</p>';
	exit;
}




if(isset($_REQUEST['type'])) {
	$my_type =  $_REQUEST['type'];
} else {
	$my_type = 'redirect';
}

if ($my_type == 'Baixar') {
	
	
	
?>



<!DOCTYPE html>

<html>

<head>
<title>Baixar Vídeos - Baixe vídeos do YouTube Online</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="pt-br" />
<meta name="description" content="Baixar-Videos.com Ã© um serviÃ§o online que permite a vocÃª baixar videos do YouTube" />
<meta name="keywords" content="baixar videos sem programas, baixar vÃ­deos de graÃ§a, baixar vÃ­deos da internet, baixar vÃ­deos do youtube online, baixar vÃ­deos do youtube de graÃ§a, baixar videos, baixar youtube, youtube baixar, download videos" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/cosmo/bootstrap.min.css">

<style>



body {
	background-color:#e9eaed
	
}


	
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	
	
}

</style>


<meta charset="utf-8">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57858848-1', 'auto');
  ga('send', 'pageview');

</script>


</head>



<body>


 
<nav class="navbar navbar-default" >
  <div class="container">
      <ul class="nav navbar-nav navbar-right">
       
                <li><a href="#"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fbaixarvideos.online&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21&amp;appId=404408233029570" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></a></li>

      </ul>
  </div>
</nav>

<br>
<div class="container">

 <div class="col-md-4">
  <h2>baixar-<font color="#FF0000">videos</font>.com </h2> 
  
     <br>
    

  
 <form method="POST" id="download" action="getvideo.php" "">
<div class="input-group" >
<input type="text" name="videoid" id="videoid" class="form-control" placeholder=""/>
<span class="input-group-btn">
<button type="submit" name="type" id="type"  class="btn btn-primary" value="Baixar">Baixar</button></span>



</div>
<br>

<?php
  
  $my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $videoid.'&asv=3&el=detailpage&hl=en_US'; //video details fix *1
$my_video_info = curlGet($my_video_info);

/* TODO: Check return from curl for status code */

$thumbnail_url = $title = $url_encoded_fmt_stream_map = $type = $url = '';

parse_str($my_video_info);




  


$my_title = $title;
$cleanedtitle = clean($title);
  
    echo '<p>Titulo: <font color="#3366FF">'.$title.'</font></p>';

  
  switch($config['ThumbnailImageMode'])
{
  case 2: echo '<img src="https://i.ytimg.com/vi/'. $videoid .'/hqdefault.jpg" width="175" height="119" border="0">'; break;
  
  case 0:  default:  // nothin
  
  
}
?>

<br><br>

<?php

} // end of if for type=Download

/* First get the video info page for this video id */
//$my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $my_id;
$my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $videoid.'&asv=3&el=detailpage&hl=en_US'; //video details fix *1
$my_video_info = curlGet($my_video_info);

/* TODO: Check return from curl for status code */

$thumbnail_url = $title = $url_encoded_fmt_stream_map = $type = $url = '';

parse_str($my_video_info);




  


$my_title = $title;
$cleanedtitle = clean($title);

if(isset($url_encoded_fmt_stream_map)) {
	/* Now get the url_encoded_fmt_stream_map, and explode on comma */
	$my_formats_array = explode(',',$url_encoded_fmt_stream_map);
	if($debug) {
		echo '<pre>';
		print_r($my_formats_array);
		echo '</pre>';
	}
} else {
	echo '<p>URL errada.</p>';
	echo $my_video_info;
}
if (count($my_formats_array) == 0) {
	echo '<p>No format stream map found - was the video id correct?</p>';
	exit;
}
echo '<b>Escolha um formato e clique para baixar:</b><br> <br>';

 


/* create an array of available download formats */
$avail_formats[] = '';
$i = 0;
$ipbits = $ip = $itag = $sig = $quality = '';
$expire = time(); 

foreach($my_formats_array as $format) {
	parse_str($format);
	$avail_formats[$i]['itag'] = $itag;
	$avail_formats[$i]['quality'] = $quality;
	$type = explode(';',$type);
	$avail_formats[$i]['type'] = $type[0];
	$avail_formats[$i]['url'] = urldecode($url) . '&signature=' . $sig;
	parse_str(urldecode($url));
	$avail_formats[$i]['expires'] = date("G:i:s T", $expire);
	$avail_formats[$i]['ipbits'] = $ipbits;
	$avail_formats[$i]['ip'] = $ip;
	$i++;
}

if ($debug) {
	echo '<p>These links will expire at '. $avail_formats[0]['expires'] .'</p>';
	echo '<p>The server was at IP address '. $avail_formats[0]['ip'] .' which is an '. $avail_formats[0]['ipbits'] .' bit IP address. ';
	echo 'Note that when 8 bit IP addresses are used, the download links may fail.</p>';
}



if ($my_type == 'Baixar') {
	


	/* now that we have the array, print the options */
	for ($i = 0; $i < count($avail_formats); $i++) {
		
		if($config['VideoLinkMode']=='direct'||$config['VideoLinkMode']=='both')
		  echo '<style="color:#FFFFFF" a href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.' ">' . $avail_formats[$i]['type'] . '</a> ';
		else
		  echo '<span class="mime">' . $avail_formats[$i]['type'] . '</span> ';
		echo '- Qualidade: <font color="#FF0000">' .  $avail_formats[$i]['quality'];
		if($config['VideoLinkMode']=='proxy'||$config['VideoLinkMode']=='both')
			 echo '</font> ';
			 echo '<a target="_blank" href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.'" style="color:#3CB371" class="mime">- Baixar</a> ';
				
			echo '<br>';

	
	}
	
}
	
?>
<br>


 
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- penha garden -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:250px"
     data-ad-client="ca-pub-7169391558658534"
     data-ad-slot="8184862823"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br><br>

<font color="#FF0004"> NÃ£o funcionou? Verifique se a url do video estÃ¡ no formato: <br>"http://youtu.be/lvWGjwWFvIQ".</font>

<br>
<br>

Â© 2015 | Esse site nÃ£o pertence ao youtube, Ã© um site independente com o intuito de ajudar os usuÃ¡rios. </div></div>
<br>
</body>
</html>