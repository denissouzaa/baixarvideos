<?PHP
include_once('config.php');

if(isset($_REQUEST['videoid'])) {
		$my_id = $_REQUEST['videoid'];
	    $id = explode("?v=", $id);
        if(strlen($id)>11){
                $url = parse_url($id);
                $id = NULL;
                if( is_array($url) && count($url)>0 && isset($url['query']) && !empty($url['query']) ){
                        $parts = explode('&',$url['query']);
                        if( is_array($parts) && count($parts) > 0 ){
                                foreach( $parts as $p ){
                                        $pattern = '/^v\=/';
                                        if( preg_match($pattern, $p) ){
                                                $id = preg_replace($pattern,'',$p);
                                                break;
                                        }
                                }
                        }
                        if( !$id ){
                                echo '<p>No video id passed in</p>';
                                exit;
                        }
                }else{
                        echo '<p>Invalid url</p>';
                        exit;
                }
        }
} else {
        echo '<p>No video id passed in</p>';
        exit;
}

$thumbnail_url="http://i1.ytimg.com/vi_webp/".$id[1]."/mqdefault.webp"; // make image link
header("Content-Type: image/jpg"); // set headers
readfile($thumbnail_url); // show image

?>
