<?php

$youtubeurl = $_GET['url'];

if ($youtubeurl == null){$my_id = $_REQUEST['videoid'];}else{$my_id = $youtubeurl;}

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



if(isset($my_id)) {
	
	

$Ver1 = strpos($my_id, "watch?v=");
$Ver2 = strpos($my_id, ".be/");
$Ver3 = strpos($my_id, "/?#/");
$VerApp = strpos($my_id, "shared?ci=");
	
if ($Ver1 == true){
	
$Ver4 = explode("&", $my_id);

$id = explode("watch?v=", $Ver4[0]);

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

$Ver4 = explode("&", $my_id);

$id = explode(".be/", $Ver4[0]);

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

$Ver4 = explode("&", $my_id);

$id = explode("watch?v=", $Ver4[0]);

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

if ($VerApp == true){
	
$tags = get_meta_tags($my_id);
$codigo = $tags['twitter:image'];

$Ver4 = explode("/maxresdefault", $codigo);

$id = explode(".com/vi/", $Ver4[0]);

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



if ($youtubeurl == null){$my_type = $_REQUEST['type'];}else{$my_type = 'Baixar';}
if(isset($_REQUEST['type'])) {
if ($youtubeurl == null){$my_type = $_REQUEST['type'];}else{$my_type = 'Baixar';}
} else {
if ($youtubeurl == null){$my_type = 'redirect';}else{$my_type = 'Baixar';}
}

if ($my_type == 'Baixar') {
	
	
	
?>



<!DOCTYPE html>

<html>

<head>
<title>Baixar Vídeos - Baixe vídeos do YouTube Online</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="pt-br" />
<meta name="description" content="Baixar-Videos.com é um serviço online que permite a você baixar videos do YouTube" />
<meta name="keywords" content="baixar videos sem programas, baixar vídeos de graça, baixar vídeos da internet, baixar vídeos do youtube online, baixar vídeos do youtube de graça, baixar videos, baixar youtube, youtube baixar, download videos" />
<link href="../images/icon.png" rel="shortcut icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content=0;url="http://www.baixar-videos.com">


<link rel="stylesheet" href="../css/bootstrapcompact.css">

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
  <h2>baixar-<font color="#0066ad">videos</font>.com </h2> 
  
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
	
echo 'MP4 - Qualidade: <font color="#FF0000">360p </font> - <a style="color:#3CB371" href="http://www.youtubeinmp4.com/redirect.php?video=' . $videoid . '& " target="_blank" />Baixar</a><br>';


	/* now that we have the array, print the options */
	for ($i = 0; $i < count($avail_formats); $i++) {
		
		if ($avail_formats[$i]['quality'] == "hd720"){
echo 'MP4 - Qualidade: <font color="#FF0000">720p</font> - <a target="_blank" href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.'" style="color:#3CB371" />Baixar</style></a></br>';


}
	
	
   if ($avail_formats[$i]['type'] == "video/webm"){
echo 'WebM - Qualidade: <font color="#FF0000">360p</font> - <a target="_blank" href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.'" style="color:#3CB371" />Baixar</style></a></br>';

		}
		
    if ($avail_formats[$i]['type'] == "video/x-flv"){
echo 'FLV - Qualidade: <font color="#FF0000">240p</font> - <a target="_blank" href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.'" style="color:#3CB371" />Baixar</style></a></br>';

		}

    if ($avail_formats[$i]['type'] == "video/3gpp"){
echo '3GP - Qualidade: <font color="#FF0000">Baixa</font> - <a target="_blank" href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.'" style="color:#3CB371" />Baixar</style></a></br>';

	
	}
	
}}
	
?>
<br>

<script data-cfasync="false" type="text/javascript" src="http://www.tradeadexchange.com/a/display.php?r=1561945"></script>

<br><br>	

<font color="#FF0000">Não está conseguindo baixar? Videos que contenham conteudo protegido por lei não estão disponiveis para serem baixados. </font>
    
<br><br>

© 2015 - <?php echo date('Y'); ?> | Esse site não pertence ao youtube, é um site independente com o intuito de ajudar os usuários.
 </div></div>
<br>
</body>
</html>