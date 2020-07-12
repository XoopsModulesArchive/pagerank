<?php
require('../../mainfile.php');
require(XOOPS_ROOT_PATH.'/header.php');
if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php';
}else{
  include_once 'language/english/modinfo.php';
}

// Call function
include("include/google_pagerank.php");  

$google = new google_pagerank();

$url = isset( $_POST['url'] ) ? $_POST['url'] : '';
$url = $google->format_url( $url );


echo '<title>'._GP_PAGERANK_TITLE.'</title>'; 
echo '<h1><center>'._GP_PAGERANK_HEADER.'</center></h1>';
echo '<center><img src="images/frpr.png" width="215" height="142" alt="" /></center>'."\n";
echo "<br>\n";
echo '<table width="80%" cellpadding="10"border="0" bordercolor="#808080" bordercolorlight="#C0C0C0" bordercolordark="#000000"><tr><td><h7>'._GP_PAGERANK_WHATIS.'</h7></td></tr></table>';
echo '<center><h5>'._GP_PAGERANK_GUIDE.'</H5>';
echo '<form method="post">'."\n";
echo 'URL <input type="text" name="url" size="40" value="'.$url.'">'."\n";
echo '<input type="submit" name="submit" value='._GP_PAGERANK_SUBMIT.'>'."\n";
echo '</form>'."\n";

if ( isset( $_POST['submit'] ) ) {
	$pr = $google->get_page_rank( $url );

	if (( $pr >= 0 )&&( $pr <= 10 )) {
		echo '<h4>'._GP_PAGERANK_RESULTHEADER.'</h4>'."\n";
			echo ''._GP_PAGERANK_RESULT.'';
			echo "<br>\n";
			echo "<br>\n";
			echo '<table width="80%" cellpadding="10"border="0" bordercolor="#808080" bordercolorlight="#C0C0C0" bordercolordark="#000000"><tr><td><a href="'.$url.'" title="'.$pagerank.'">'.$html.'<div align="right"><img src="images/pr'.$pr.'.gif" border="0" alt="PageRank" ></a><br /></div></td><td><div align="center"><h5>'._GP_PAGERANK_VISIT.'</H5></div></td><td><div align="left">'._GP_PAGERANK_WEBSITESHOOT.'<br /><a href="'.$url.'" ><img src="http://thumbnailspro.com/thumb.php?url='.$url.'" border="0" alt="'._GP_PAGERANK_ALTSCSHOT.'"></a></div></td></tr></table>';
			
		
		
			echo "<br>\n";
				echo '<div align="justify">'._GP_PAGERANK_COPYCODE.'</div>';
		echo '<textarea name="textarea" style="font-size:12px;width:90%;height:80px;border:1px dotted #ccc; " onFocus="this.select()" wrap="VIRTUAL" value="text"><div align="center">'._GP_PAGERANK_THISSITEPR.'<img src="http://danordesign.com/modules/pagerank/images/pr'.$pr.'.gif" borber="0" alt="'._GP_PAGERANK_MYPAGERANK.'" ><br><a href="http://danordesign.com/" target="_blank"><small>Powered by Danordesign</small></a></div></textarea>';
 
		
	} else {
		echo '<h4 style="color:#ff0000;">'._GP_PAGERANK_FAIL.'</h4>'."\n";
		switch ( $pr ) 
		{
			case -1:
				echo ''._GP_PAGERANK_REASON1.'<br>';
				echo "<br>\n";
				echo ''._GP_PAGERANK_SOLUTION1.'<br>';
				break;

			case -2:
				echo ''._GP_PAGERANK_REASON2.'<br>';
				echo "<br>\n";
				echo ''._GP_PAGERANK_SOLUTION2.'<br>';
				break;

			case -3:
				echo ''._GP_PAGERANK_REASON3.'<br>';
				echo "<br>\n";
			echo ''._GP_PAGERANK_SOLUTION3.'<br>';
			echo "<br>\n";
				echo '<table width="80%" cellpadding="10"border="0" bordercolor="#808080" bordercolorlight="#C0C0C0" bordercolordark="#000000"><tr><td><a href="'.$url.'" title="'.$pagerank.'">'.$html.'<div align="right"><img src="images/pr0.gif" border="0" alt="PageRank" ></a><br /></div></td><td><div align="center"><h5>'._GP_PAGERANK_VISIT.'</H5></div></td><td><div align="left">'._GP_PAGERANK_WEBSITESHOOT.'<br /><a href="'.$url.'" ><img src="http://thumbnailspro.com/thumb.php?url='.$url.'" border="0" alt="'._GP_PAGERANK_ALTSCSHOT.'"></a></div></td></tr></table>';
				
				echo "<br>\n";
				break;
		}
	}
}
echo "<br>\n";
echo "<br>\n";
echo '<p><small>'._GP_PAGERANK_UPDATES.' <a href="http://danordesign.com" target="_blank">Danordesign.com</a>&nbsp;|&nbsp;'._GP_PAGERANK_SCSBY.'  <a href="http://thumbnailspro.com/" target="_blank">Thumbnailspro.com</a></small></p>'."\n";
echo "</center><br>\n";
echo "<br>\n";
echo '</body>'."\n";
echo '</html>'."\n";


require(XOOPS_ROOT_PATH.'/footer.php');
?>