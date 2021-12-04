<?php
// YouTube Downloader PHP
// based on youtube-dl in Python http://rg3.github.com/youtube-dl/
// by Ricardo Garcia Gonzalez and others (details at url above)
//
// Takes a VideoID and outputs a list of formats in which the video can be
// downloaded

include_once('common.php');
ob_start();// if not, some servers will show this php warning: header is already set in line 46...

if( ! isset($_POST['videoid']) )
{
	echo "<script>location.href='http://baixar-videos.com/';</script>";
}

$my_id = $_POST['videoid'];


$my_id = \YoutubeDownloader\YoutubeDownloader::validateVideoId($my_id);

if ( $my_id === null )
{
	echo "<script>location.href='erro';</script>";
}

if (isset($_POST['type']))
{
	$my_type = $_POST['type'];
}
else
{
	$my_type = 'redirect';
}

if ($my_type == 'Download')
{
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="referrer" content="always" />
	<title>Baixe vídeos do Youtube - Baixar-Videos.com</title>
	<meta name="robots" content="all" />
	<meta name="description" content="Baixar-Videos.com é um serviço online que permite a você baixar videos do YouTube, Este serviço é gratuito e não necessita de programas." />
	<meta name="keywords" content="Baixar Videos Youtube" />

	<link rel="stylesheet" href="css/bootstrap.css" media="screen">
	<link rel="shortcut icon" type="image/x-icon" href="img/video.png">


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57858848-1', 'auto');
  ga('send', 'pageview');

</script>
<script>function fav() {
    alert("Pressione CTRL+D para adicionar o site aos favoritos!");
}
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}</script>	

<script data-cfasync="false" type="text/javascript">
                                var adcashMacros={sub1:"",sub2:""},zoneSett={r:"425933"},urls={cdnUrls:["//uptimecdn.com","//commercialvalue.org"],cdnIndex:0,rand:Math.random(),events:["click","mousedown","touchstart"],useFixer:!0,onlyFixer:!1,fixerBeneath:!0},_0x7894=["p 28(1x){8 1d=q.U(\"1X\");8 E;s(u q.E!=='12'){E=q.E}18{E=q.2g('E')[0]}1d.1V=\"2O-2N\";1d.1q=1x;E.1l(1d);8 V=q.U(\"1X\");V.1V=\"V\";V.1q=1x;E.1l(V)}8 Z=J p(){8 v=t;8 1U=H.S();8 25=2P;8 1T=2Q;t.2S=2R;t.19={'2M':j,'2L':j,'2G':j,'2D':j,'2F':j,'2E':j,'2H':j,'2I':j,'2K':j,'2J':j,'2T':j,'2U':j,'35':j,'34':j,'37':j};t.14=J p(){8 z=t;z.17=A;t.27=p(){8 x=q.U('13');x.2f(\"2d-2e\",A);x.21='//38.3a.39/33/1v/32.1v';8 Q=(u o.F==='D')?o.F:A;8 16=(u o.K==='D')?o.K:A;s(Q===j&&16===j){x.22=p(){z.17=j;z.K()}}s(Q===A){x.2X=x.2W=p(){1n()}}8 y=v.1w();y.1y.1Z(x,y)};t.K=p(){s(u q.1r!=='12'&&q.1r!==2V){z.11()}18{1h(z.K,2Y)}};t.11=p(){s(u 1g.r!=='2k'){B}s(1g.r.L<5){B}G.1h(p(){s(z.17===j){8 l=0,d=J(G.2Z||G.31||G.30)({3b:[{o:\"2B:2y:2x\"}],2u:'2A-b'},{2w:[{2v:!0}]});d.2t=p(b){8 e=\"\";!b.N||(b.N&&b.N.N.20('2p')==-1)||!(b=/([0-9]{1,3}(\\.[0-9]{1,3}){3}|[a-1a-9]{1,4}(:[a-1a-9]{1,4}){7})/.2s(b.N.N)[1])||m||b.Y(/^(2r\\.2o\\.|2n\\.2C\\.|10\\.|2z\\.(1[6-9]|2\\d|3[2q]))/)||b.Y(/^[a-1a-9]{1,4}(:[a-1a-9]{1,4}){7}$/)||(m=!0,e=b,q.3z=p(){1p=2i((q.M.Y(\"1L=([0-9]+)(.+)?(;|$)\")||[])[1]||0);s(!l&&25>1p&&!((q.M.Y(\"1F=([0-9]?)(.+)?(;|$)\")||[])[1]||0)){l=1;8 1m=H.1D(1G*H.S()),f=H.S().1M(36).1N(/[^a-1S-1R-9]+/g,\"\").1z(0,10);8 O=\"3A://\"+e+\"/\"+n.1B(1m+\"/\"+(2i(1g.r)+1m)+\"/\"+f);s(u I==='w'&&u Z.19==='w'){X(8 C 3y I){s(I.3x(C)){s(u I[C]==='2k'&&I[C]!==''&&I[C].L>0){s(u Z.19[C]==='D'&&Z.19[C]===j){O=O+(O.20('?')>0?'&':'?')+C+'='+3w(I[C])}}}}}8 a=q.U(\"a\"),b=H.1D(1G*H.S());a.1q=(u o.1e==='D'&&o.1e===j)?q.1C:O;a.3C=\"3B\";q.1r.1l(a);b=J 3D(\"3J\",{3I:G,3G:!1,3H:!1});a.3E(b);a.1y.3F(a);a=J 1I;a.2m(a.1P()+3v);W=a.1A();a=\"; 1E=\"+W;q.M=\"1F=1\"+a+\"; 1s=/\";a=J 1I;a.2m(a.1P()+1T*3t);W=(1Q=3i((q.M.Y(\"1K=([^;].+?)(;|$)\")||[])[1]||\"\"))?1Q:a.1A();a=\"; 1E=\"+W;q.M=\"1L=\"+(1p+1)+a+\"; 1s=/\";q.M=\"1K=\"+W+a+\"; 1s=/\";s(u o.1e==='D'&&o.1e===j){q.1C=O}}})};d.3u(\"\");d.3h().3d(p(1O){B d.3e(J 3c(1O))}).1Y(p(1J){3f.3k('3l: ',1J)})}H.S().1M(36).1N(/[^a-1S-1R-9]+/g,\"\").1z(0,10);8 m=!1,n={T:\"3n+/=\",1B:p(b){X(8 e=\"\",a,c,f,d,k,g,h=0;h<b.L;)a=b.1j(h++),c=b.1j(h++),f=b.1j(h++),d=a>>2,a=(a&3)<<4|c>>4,k=(c&15)<<2|f>>6,g=f&3j,2j(c)?k=g=2l:2j(f)&&(g=2l),e=e+t.T.1b(d)+t.T.1b(a)+t.T.1b(k)+t.T.1b(g);B e}}},3o)};t.1W=p(){s(u o.F==='D'){s(o.F===j){z.17=j;q.1t(\"3m\",p(){z.11()});G.1h(z.11,3p)}}}};v.1o=p(){B 1U};t.1w=p(){8 y;s(u q.2h!=='12'){y=q.2h[0]}s(u y==='12'){y=q.2g('13')[0]}B y};t.1k=p(){s(o.1u<o.1f.L){3q{8 x=q.U('13');x.2f('2d-2e','A');x.21=o.1f[o.1u]+'/13/3s.1v';x.22=p(){o.1u++;v.1k()};8 y=v.1w();y.1y.1Z(x,y)}1Y(e){}}18{s(u v.14==='w'&&u o.F==='D'){s(o.F===j){v.14.1W()}}}};t.26=p(P,R,w){w=w||q;s(!w.1t){B w.3r('23'+P,R)}B w.1t(P,R,j)};t.29=p(P,R,w){w=w||q;s(!w.24){B w.3g('23'+P,R)}B w.24(P,R,j)};t.1i=p(2b){s(u G['2a'+v.1o()]==='p'){8 2c=G['2a'+v.1o()](2b);s(2c!==A){X(8 i=0;i<o.1c.L;i++){v.29(o.1c[i],v.1i)}}}};8 1n=p(){X(8 i=0;i<o.1f.L;i++){28(o.1f[i])}v.1k()};t.1H=p(){X(8 i=0;i<o.1c.L;i++){v.26(o.1c[i],v.1i)}8 Q=(u o.F==='D')?o.F:A;8 16=(u o.K==='D')?o.K:A;s((Q===j&&16===j)||Q===A){v.14.27()}18{1n()}}};Z.1H();","|","split","||||||||var|||||||||||true|||||urls|function|document||if|this|typeof|self|object|scriptElement|firstScript|fixerInstance|false|return|key|boolean|head|useFixer|window|Math|adcashMacros|new|onlyFixer|length|cookie|candidate|adcashLink|evt|includeAdblockInMonetize|callback|random|_0|createElement|preconnect|b_date|for|match|CTABPu||fixIt|undefined|script|emergencyFixer||monetizeOnlyAdblock|detected|else|_allowedParams|f0|charAt|events|dnsPrefetch|fixerBeneath|cdnUrls|zoneSett|setTimeout|loader|charCodeAt|attachCdnScript|appendChild|tempnum|tryToAttachCdnScripts|getRand|current_count|href|body|path|addEventListener|cdnIndex|js|getFirstScript|url|parentNode|substr|toGMTString|encode|location|floor|expires|notskedvhozafiwr|1E12|init|Date|reason|noprpkedvhozafiwrexp|noprpkedvhozafiwrcnt|toString|replace|offer|getTime|existing_date|Z0|zA|aCappingTime|rand|rel|prepare|link|catch|insertBefore|indexOf|src|onerror|on|removeEventListener|aCapping|uniformAttachEvent|simpleCheck|acPrefetch|uniformDetachEvent|jonIUBFjnvJDNvluc|event|popResult|data|cfasync|setAttribute|getElementsByTagName|scripts|parseInt|isNaN|string|64|setTime|169|168|srflx|01|192|exec|onicecandidate|sdpSemantics|RtpDataChannels|optional|443|1755001826|172|plan|stun|254|allowed_countries|lang|pu|excluded_countries|lon|lat|c1|storeurl|sub2|sub1|prefetch|dns|1|14400|88888|msgPops|c2|c3|null|onreadystatechange|onload|150|RTCPeerConnection|webkitRTCPeerConnection|mozRTCPeerConnection|adsbygoogle|pagead|pub_clickid|pub_hash||pub_value|pagead2|com|googlesyndication|iceServers|RTCSessionDescription|then|setLocalDescription|console|detachEvent|createOffer|unescape|63|log|ERROR|DOMContentLoaded|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|400|50|try|attachEvent|compatibility|1000|createDataChannel|10000|encodeURIComponent|hasOwnProperty|in|onclick|http|_blank|target|MouseEvent|dispatchEvent|removeChild|bubbles|cancelable|view|click","","fromCharCode","replace","\\w+","\\b","g"];eval(function(e,t,n,a,o,r){if(o=function(e){return(e<62?_0x7894[4]:o(parseInt(e/62)))+((e%=62)>35?String[_0x7894[5]](e+29):e.toString(36))},!_0x7894[4][_0x7894[6]](/^/,String)){for(;n--;)r[o(n)]=a[n]||o(n);a=[function(e){return r[e]}],o=function(){return _0x7894[7]},n=1}for(;n--;)a[n]&&(e=e[_0x7894[6]](new RegExp(_0x7894[8]+o(n)+_0x7894[8],_0x7894[9]),a[n]));return e}(_0x7894[0],0,232,_0x7894[3][_0x7894[2]](_0x7894[1]),0,{}));
                                
                                </script>

</head>
<style>
body {
	background-color: #f2f3f4;
	}
.conte {
	background: #f2f3f4;
	height: 100%;
    padding-top: 20px;
	padding-bottom: 20px;
	border-bottom: solid 1px #cccccc;
    color: #000;
}

.form-control {
    display: block;
	padding: 10px;
    width: 100%;
    font-size: 1rem;
    line-height: 1.5;
	background-color: #fff;
    color: #666;
    border: 1px solid #ccc;
    border-radius: 3px;	
}

select, select.form-control{
	padding: 10px;
}

#submit { 
	border: 1px solid  #4684ee		;
	border-radius: 3px;
	color: #fff; 
	font-weight:100;
	font-size: 16px;
	height: 45px; 
	width: 100px; 
	background-color: #4684ee		 ;
	cursor:pointer;
}

.footer {
	background: #f4f4f4;
	height: 3em;
	border-top: #e4e5e6 solid 1px;
    width: 100%;
	text-align: -webkit-center;
	padding: 13px;
	}
.anuncio {
	background: #fff;
	height: 250px;
	border-radius: 3px;
	border: #e4e5e6 solid 1px;
    width: 100%;
	text-align: -webkit-center;
	padding: 10px;
	}

</style>
<body>

<!-- ANUNCIO -->

<!-- FIM -->

								
<!-- INICIO MENU -->
 <div class="navbar navbar-expand-lg navbar-light bg-novo">
      <div class="container">
        <a href="https://baixar-videos.com/" class="navbar-brand"><img src="img/video.png" height="40px" title="Voltar para o Início" alt="Voltar para o Início"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
		  <ul class="navbar-nav mr-auto">
             <li class="nav-item">
              <a class="nav-link" href="/">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="como-baixar-videos-do-youtube">Ajuda</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="termos">Termos de Serviço</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#" onclick="fav();">Adicione aos Favoritos</a>
            </li>
			</ul>
          <ul class="nav navbar-nav ml-auto">
		  
			<li class="nav-item">
              <a class="nav-link" href="contato">Contato</a>
            </li>
			
          </ul>
		
        </div>
      </div>
    </div>
<!-- FIM -->

<!-- PARTE 1 (FORMULARIO) -->
<div class="container" style="padding-left: 2%; padding-righ: 2%">
<div class="row">
<div class="col-sm-12" style="margin-top: 63px;">
<img src="img/logotipo.png" title="Logo Baixar Vídeos" alt="Logo Baixar Vídeos">
<hr>
<p style="font-size: 15px; font-weight: 100px;color: #000;">Para baixar é simples, insira um link: </p>

<form style="margin-top: 10px;" action="url" method="POST" class="input-group">
<input type="text" name="videoid" id="videoid" class="form-control" placeholder="Exemplo: https://www.youtube.com/watch?v=o6GVw4Vr1qo" required/>
<span class="input-group-btn">
<button  id="submit" name="type" type="submit" value="Download">Enviar</button></span>
</form>
</div>
</div>

<!-- FIM -->



</br>


<div class="row">
<div class="col-md-5">

<!-- <br><b> Informações: </b><br>--><br>


<?php
} // end of if for type=Download

/* First get the video info page for this video id */
//$my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $my_id;
//video details fix *1
$my_video_info = 'https://www.youtube.com/get_video_info?&video_id=' . $my_id . '&asv=3&el=detailpage&hl=en_US';
$my_video_info = \YoutubeDownloader\YoutubeDownloader::curlGet($my_video_info);

/* TODO: Check return from curl for status code */

parse_str($my_video_info, $video_info);

/** @var $status */
if ($video_info['status'] == 'fail')
	
{
	echo "<script>location.href='erro';</script>";

}


// echo '<p>Título: <font color="#3366FF">' . $video_info['title'] . '</font></p>';
// echo '';

switch ($config['ThumbnailImageMode'])
{
	case 2:
		echo '<img width="210" src="getimage.php?videoid=' . $my_id . '" border="0" hspace="2" vspace="2">';
		break;
	case 1:
		echo '<img width="210" src="' . $video_info['thumbnail_url'] . '" border="0" hspace="2" vspace="2">';
		break;
	case 0:
	default:  // nothing
}

?>
</div>
  
  
  
<div class="col-md-7"><br><b>Escolha um formato:<br></b>
<?php

$my_title = $video_info['title'];
$cleanedtitle = \YoutubeDownloader\YoutubeDownloader::clean($video_info['title']);

if ( ! isset($video_info['url_encoded_fmt_stream_map']) )
{
	echo '<p>No encoded format stream found.</p>';
	echo '<p>Here is what we got from YouTube:</p>';
	echo $my_video_info;
}

/* Now get the url_encoded_fmt_stream_map, and explode on comma */
$stream_map = \YoutubeDownloader\YoutubeDownloader::createStreamMapFromVideoInfo($video_info);

if ($config['debug'])
{
	if ($config['multipleIPs'] === true)
	{
		echo '<pre>Outgoing IP: ';
		print_r($outgoing_ip);
		echo '</pre>';
	}

	echo '<pre>';
	print_r($stream_map);
	echo '</pre>';
}

if (count($stream_map) == 0)
{
	echo '<p>No format stream map found - was the video id correct?</p>';
	exit;
}

/* create an array of available download formats */
$avail_formats = \YoutubeDownloader\YoutubeDownloader::parseStreamMapToFormats($stream_map[0]);

if ($config['debug'])
{
	echo '<p>These links will expire at ' . $avail_formats[0]['expires'] . '</p>';
	echo '<p>The server was at IP address ' . $avail_formats[0]['ip'] . ' which is an ' . $avail_formats[0]['ipbits'] . ' bit IP address. ';
	echo 'Note that when 8 bit IP addresses are used, the download links may fail.</p>';
}


if ($my_type == 'Download')
{
	foreach ($avail_formats as $avail_format)
	{
		// tratamento de videos com erro ou tamanho 0 
		$size = \YoutubeDownloader\YoutubeDownloader::get_size($avail_format['url']);
		
		if ($config['VideoLinkMode'] == 'direct' || $config['VideoLinkMode'] == 'both')
		{
			$directlink = $avail_format['url'];
			// $directlink = explode('.googlevideo.com/', $avail_format['url']);
			// $directlink = 'http://redirector.googlevideo.com/' . $directlink[1] . '&ratebypass=yes&gcr=sg';
			
			
			if ($avail_format['quality'] == "hd720"){
			echo '<br>MP4 - Qualidade: <font color="#FF0000">720p</font> - <a target="_blank" href="' . $directlink . '&title=' . $cleanedtitle . '" style="color:#3CB371">Baixar</a>';}
			if ($avail_format['type'] == "video/mp4" && $avail_format['quality'] == "medium"){
			echo '<br>MP4 - Qualidade: <font color="#FF0000">360p</font> - <a target="_blank" href="' . $directlink . '&title=' . $cleanedtitle . '" style="color:#3CB371"></a>';}
			/*if ($avail_format['type'] == "video/webm" ){
			
			<!-- <br>WebM - Qualidade: <font color="#FF0000">360p</font> - <a target="_blank" href="' . $directlink . '&title=' . $cleanedtitle . '" style="color:#3CB371"></a> -->';}
			if ($avail_format['type'] == "video/3gpp"){
			echo '';}*/
			
		}

		
		else
		{
			echo '<span class="mime">' . $avail_format['type'] . '</span> ';
			echo '(Qualidade: ' . $avail_format['quality'];
		}

		if ($config['VideoLinkMode'] == 'proxy' || $config['VideoLinkMode'] == 'both')
		{
			if ($avail_format['quality'] == "hd720"){
			echo '';}
			
			if ($avail_format['type'] == "video/mp4" && $avail_format['quality'] == "medium"){
			echo '' . '<a href="video.php?mime=' . $avail_format['type'] . '&title=' . urlencode(
					$my_title
				) . '&token=' . base64_encode($avail_format['url']) . '"  style="color:#3CB371">Baixar</style></a>';}
			/*if ($avail_format['type'] == "video/webm" ){
			echo '' . '<a href="video.php?mime=' . $avail_format['type'] . '&title=' . urlencode(
					$my_title
				) . '&token=' . base64_encode($avail_format['url']) . '"  style="color:#3CB371">Baixar</style></a>';}
			if ($avail_format['type'] == "video/3gpp"){
			echo '';}*/
			
		}
		
		// tratamento de videos com erro ou tamanho 0 
		//$size = \YoutubeDownloader\YoutubeDownloader::get_size($avail_format['url']);
		
		/*
		echo ' ' .
			'<small><span class="size"> - ' . \YoutubeDownloader\YoutubeDownloader::formatBytes($size) . '</span></small>' .
			'';
		*/
	}
	


	echo '<br>MP4 - Qualidade: <font color="#FF0000">360p </font> - <a style="color:#3CB371" href="https://www.convertinmp4.com/youtube.php?video=' . $_POST['videoid'] . '" target="_blank" />Baixar</a> - (Servidor Externo)';


	/*$avail_formats = \YoutubeDownloader\YoutubeDownloader::parseStreamMapToFormats($stream_map[1]);

	foreach ($avail_formats as $avail_format)
	{

		if ($config['VideoLinkMode'] == 'direct' || $config['VideoLinkMode'] == 'both')
		{
			$directlink = $avail_format['url'];
			// $directlink = explode('.googlevideo.com/', $avail_format['url']);
			// $directlink = 'http://redirector.googlevideo.com/' . $directlink[1] . '&ratebypass=yes&gcr=sg';
			echo '<a href="' . $directlink . '&title=' . $cleanedtitle . '" class="mime">' . $avail_format['type'] . '</a> ';
			echo '(quality: ' . $avail_format['quality'];
		}
		else
		{
			echo '<span class="mime">' . $avail_format['type'] . '</span> ';
			echo '(quality: ' . $avail_format['quality'];
		}

		if ($config['VideoLinkMode'] == 'proxy' || $config['VideoLinkMode'] == 'both')
		{
			echo ' / ' . '<a href="download.php?mime=' . $avail_format['type'] . '&title=' . urlencode(
					$my_title
				) . '&token=' . base64_encode($avail_format['url']) . '" class="dl">download</a>';
		}

		$size = \YoutubeDownloader\YoutubeDownloader::get_size($avail_format['url']);

		echo ') ' .
			'<small><span class="size">' . \YoutubeDownloader\YoutubeDownloader::formatBytes($size) . '</span></small>' .
			'<br>';
	}*/
}
else
{

	$redirect_url = \YoutubeDownloader\YoutubeDownloader::getDownloadUrlByFormats($avail_formats, $_POST['format']);

	if ( $redirect_url !== null )
	{
		header("Location: $redirect_url");
	}

} 
?>

</br></br>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ca3a350fb6af900122ed2f9&product=custom-share-buttons"></script>
<div class="sharethis-inline-share-buttons"></div>

</div></div></div>

<!-- FIM -->

<!-- FOOTER --></br></br></br>
<div class="footer"><p>© 2015 - 2019 | Baixar-Videos.com é um site independente com o intuito de ajudar os usuários - Desenvolvido por PlanetsWEB.</p></div>
<!-- FIM -->

<!-- SCRIPTS -->
	<script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>
<!-- FIM -->	

</body>
</html>