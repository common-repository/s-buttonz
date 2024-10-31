<?php
/*
Plugin Name: S-ButtonZ
Plugin URI: http://blog.rswr.net/2009/02/14/social-media-wordpress-plugin/
Description: Displays social media buttons/badges of your choice for each post/page. Full <a href="options-general.php?page=S-ButtonZ.php">admin options</a> available.
Version: 1.1.5
Author: Ryan Christenson (The RSWR Network)
Author URI: http://www.rswr.net/
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$SBZ_path = trailingslashit(dirname(__FILE__));

if (!class_exists("SButtonZ")) {
	class SButtonZ {
		var $adminOptionsName = "SButtonZ_Admin_Options";
		function SButtonZ() { //constructor
		}

		//Print out the admin page
		function printAdminPage() {
			if (isset($_POST['update_SButtonZSettings'])) {
				// Save General Settings
				$SBZgen = array('prom' => $_POST['prom'], 'digg' => $_POST['digg'], 'dzon' => $_POST['dzon'], 'face' => $_POST['face'],'redd' => $_POST['redd'], 'yaho' => $_POST['yaho']);
  				update_option('SButtonZ_gen', $SBZgen);
				
				// Save Hide Options
  				$SBZhide = array('hide1' => $_POST['SBZ-hide1'], 'hide2' => $_POST['SBZ-hide2'], 'hide3' => $_POST['SBZ-hide3'], 'hide4' => $_POST['SBZ-hide4'], 'hide5' => $_POST['SBZ-hide5'], 'hide6' => $_POST['SBZ-hide6'], 'hide7' => $_POST['SBZ-hide7'], 'hide8' => $_POST['SBZ-hide8'], 'hide9' => $_POST['SBZ-hide9']);
  				update_option('SButtonZ_hide', $SBZhide);
  				
  				// Save Digg Settings
  				$SBZgen = array('DGhome' => $_POST['DGhome'], 'DGpost' => $_POST['DGpost'], 'DGpage' => $_POST['DGpage'], 'DGtag' => $_POST['DGtag'], 'DGarch' => $_POST['DGarch'], 'DGsrch' => $_POST['DGsrch'], 'DGbg' => $_POST['DGbg'], 'DGdisplay1' => $_POST['DGdisplay1'], 'DGskin' => $_POST['DGskin'], 'DGwin' => $_POST['DGwin'], 'DGbody' => $_POST['DGbody'], 'DGmedia' => $_POST['DGmedia'], 'DGtopic' => $_POST['DGtopic'], 'DGAPIact' => $_POST['DGAPIact'], 'DGAPIdelay' => $_POST['DGAPIdelay'], 'DGAPIkey' => $_POST['DGAPIkey'], 'DGAPIskin' => $_POST['DGAPIskin'], 'DGAPIthreshold' => $_POST['DGAPIthreshold']);
  				update_option('SButtonZ_digg', $SBZgen);
  				
  				// Save dZone Settings
  				$SBZdzon = array('DZhome' => $_POST['DZhome'], 'DZpost' => $_POST['DZpost'], 'DZpage' => $_POST['DZpage'], 'DZtag' => $_POST['DZtag'], 'DZarch' => $_POST['DZarch'], 'DZsrch' => $_POST['DZsrch'], 'DZdisplay1' => $_POST['DZdisplay1'], 'DZstyle' => $_POST['DZstyle'], 'DZbody' => $_POST['DZbody']);
  				update_option('SButtonZ_dzon', $SBZdzon);
  				
  				// Save Facebook Settings
  				$SBZface = array('FBhome' => $_POST['FBhome'], 'FBpost' => $_POST['FBpost'], 'FBpage' => $_POST['FBpage'], 'FBtag' => $_POST['FBtag'], 'FBarch' => $_POST['FBarch'], 'FBsrch' => $_POST['FBsrch'], 'FBdisplay1' => $_POST['FBdisplay1'], 'FBskin' => $_POST['FBskin']);
  				update_option('SButtonZ_face', $SBZface);
				
				// Save reddit Settings
				$SBZredd = array('RDhome' => $_POST['RDhome'], 'RDpost' => $_POST['RDpost'], 'RDpage' => $_POST['RDpage'], 'RDtag' => $_POST['RDtag'], 'RDarch' => $_POST['RDarch'], 'RDsrch' => $_POST['RDsrch'], 'RDdisplay1' => $_POST['RDdisplay1'], 'RDstyle' => $_POST['RDstyle']);
  				update_option('SButtonZ_redd', $SBZredd);
  				
  				// Save Yahoo Buzz Settings
  				$SBZyaho = array('YAhome' => $_POST['YAhome'], 'YApost' => $_POST['YApost'], 'YApage' => $_POST['YApage'], 'YAtag' => $_POST['YAtag'], 'YAarch' => $_POST['YAarch'], 'YAsrch' => $_POST['YAsrch'], 'YAdisplay1' => $_POST['YAdisplay1'], 'YAbadge' => $_POST['YAbadge'], 'YAbody' => $_POST['YAbody'], 'YAmedia' => $_POST['YAmedia'], 'YAtopic' => $_POST['YAtopic']);
  				update_option('SButtonZ_yaho', $SBZyaho);

?>
<div class="updated"><p><span class="SBZ-Bold"><?php _e("S-ButtonZ Options Updated!", "SButtonZ");?></span></p></div>
<?php
			}
?>
<div class="wrap">
<h2><?php _e('S-ButtonZ - 1.1.5','SButtonZ'); ?></h2>
<style type="text/css">
<!--
.SBZ-Pad td{padding:10px;text-align:left;font-weight:700;}
.SBZ-Pad th{text-align:left;vertical-align:top;font-weight:700;}
.SBZ-Bold{font-weight:700;}
.SBZ-Red{color:red;font-weight:700;}
.SBZ-New{background:pink;border:1px solid #000;font-size:1.2em;font-weight:700;padding:2px;}
-->
</style>
<form class="form-table" method="post" action="<?php _e($_SERVER["REQUEST_URI"]); ?>">
<?php
$SBZ_path = trailingslashit(dirname(__FILE__));
// General Options
if(file_exists($SBZ_path.'options/a-gen.php')) require_once($SBZ_path.'options/a-gen.php');
// Digg Options
if(file_exists($SBZ_path.'options/digg.php')) require_once($SBZ_path.'options/digg.php');
// Digg API Settings (If Enabled)
if(file_exists($SBZ_path.'options/digg2.php')) require_once($SBZ_path.'options/digg2.php');
// dZone Options
if(file_exists($SBZ_path.'options/dzon.php')) require_once ($SBZ_path.'options/dzon.php');
// Facebook Options
if(file_exists($SBZ_path.'options/face.php')) require_once ($SBZ_path.'options/face.php');
// reddit Options
if(file_exists($SBZ_path.'options/redd.php')) require_once ($SBZ_path.'options/redd.php');
// Yahoo Buzz Options
if(file_exists($SBZ_path.'options/yaho.php')) require_once ($SBZ_path.'options/yaho.php');
// Other Options
if(file_exists($SBZ_path.'options/z-gen.php')) require_once($SBZ_path.'options/z-gen.php');
?>
	<input type="submit" name="update_SButtonZSettings" value="<?php _e('Update Settings', 'SButtonZ') ?>" class="button-primary action" /><br /><br />
</form>
</div>
<?php
		}
	}
}

########################
#                      #
#   Summary Truncate   #
#                      #
########################
if (!function_exists("SButtonZ_trunc")) {
	function SButtonZ_trunc($trunc, $tnum) {
		if (strlen($trunc) > 0 && strlen($trunc) > $tnum) {
			$k = 0;
			while ($k >= 0 && $k < strlen($trunc)) {
				$i = strpos($trunc, " ", $k);
				$j = strpos($trunc, chr(10), $k);
				if ($i === FALSE && $j === FALSE) {
					return $trunc;
				} else {
					if ($i > 0 && $j > 0) {
						if ($i < $j) {
							$k = $i;
						} else {
							$k = $j;
						}
					} elseif ($i > 0) {
						$k = $i;
					} elseif ($j > 0) {
						$k = $j;
					}

					if ($k >= $tnum) {
						return substr($trunc, 0, $k) . "...";
					} else {
						$k++;
					}
				}
			}
		} else {
			return $trunc;
		}
	}
}
########################
#                      #
#   Manual Shortcode   #
#                      #
########################
    // [SButtonZ button="digg"] use digg, dzon, face ,redd, buzz, Shortcode for Manual positioning
    if (!function_exists("SButtonZ_short")) {
	function SButtonZ_short($atts, $content = null) {
	    extract(shortcode_atts(array('button' => 'none'), $atts));
	    
	    if ($button == "digg") return SButtonZ_digg_Add($content);
	    elseif ($button == "dzon") return SButtonZ_dzon_Add($content);
	    elseif ($button == "face") return SButtonZ_face_Add($content);
	    elseif ($button == "redd") return SButtonZ_redd_Add($content);
	    elseif ($button == "yaho") return SButtonZ_yaho_Add($content);
	}
    }

########################
#                      #
#    Digg Functions    #
#                      #
########################
    // Create Digg Button (NON API)
    if (!function_exists("SButtonZ_digg_nonAPI")) {
	function SButtonZ_digg_nonAPI($content) {
	    // Retrieve Options
	    get_option('SButtonZ_digg') == "" ? "" : extract(get_option('SButtonZ_digg'));

		// Display Top Right
		if ($DGdisplay1 == "") {
		    $SBZ_ShowButton .= '<div style="float: right; width: 42px; padding-right: 10px; margin: 0 0 0 10px;">';
		}

		// Display Top Left or Bottom
		if ($DGdisplay1 == "left" || $DGdisplay1 == "bottom") {
		    if ($DGskin == "") {
			$SBZ_ShowButton .= '<div style="float: left; width: 42px; padding-right: 10px; margin: 0 10px 0 0;">';
		    } elseif ($DGskin == "compact") {
			$SBZ_ShowButton .= '<div style="float: left; width: 42px; padding-right: 45px; margin: 0 45px 0 0;">';
		    } elseif ($DGskin == "icon") {
			$SBZ_ShowButton .= '<div style="float: left; width: 16px; padding-right: 10px; margin: 0 10px 0 0;">';
		    }
		}
		
		// Body Text Preg Replace Values
		$DGold = array('/\n/', '/\r/', '/\\[[^\\]]*\\]/');
		$DGnew = array('', '', '');
		if ($DGbody != "") $DGbody = SButtonZ_trunc(strip_tags(preg_replace($DGold, $DGnew, $content)),$DGbody);
		
		// Media
		if (strpos($content, "SBZ=video")) $DGmedia = "video";
		elseif (strpos($content, "SBZ=image")) $DGmedia = "image";
		elseif (strpos($content, "SBZ=news")) $DGmedia = "news";
		
$SBZ_ShowButton .= '
		<script type="text/javascript">
		<!--
		digg_url = "'.get_permalink().'";
		digg_bgcolor = "'.$DGbg.'";
		digg_skin = "'.$DGskin.'";
		digg_window = "'.$DGwin.'";
		digg_title = "'.the_title("", "", false).'";
		digg_media = "'.$DGmedia.'";
		digg_topic = "'.$DGtopic.'";
		digg_bodytext = "'.$DGbody.'";
		//-->
		</script>
		<script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>';
$SBZ_ShowButton .= '</div>';
return $SBZ_ShowButton;
	}
    }
    
    // Create Digg Button (API)
    if (!function_exists("SButtonZ_digg_API")) {
	function SButtonZ_digg_API($content) {
	    // Retrieve Options
	    get_option('SButtonZ_digg') == "" ? "" : extract(get_option('SButtonZ_digg'));

	    // Load Button Choice
	    global $SBZ_path;
	    if(file_exists($SBZ_path.'options/digg-api.php')) require_once($SBZ_path.'options/digg-api.php');
	    if($SBZ_revert == 'REVERT') return 'REVERT';
		
	    // Threshold Check
	    if ($DGAPIthreshold == '') $DGAPIthreshold = 0;
	    if ($SBZ_Diggs >= $DGAPIthreshold) {
		// Show Button If Digg # is Greater Than Threshold 
		return $SBZ_ShowButton;
	    }
	}
    }

    // Add Digg Button
    if (!function_exists("SButtonZ_digg_Add")) {
	function SButtonZ_digg_Add($content) {
	    // Check for Manual button
	    if (strpos($content, '[SButtonZ button="digg"]')) return $content;
	    
	    // Retrieve Options
	    get_option('SButtonZ_digg') == "" ? "" : extract(get_option('SButtonZ_digg'));

	    // Check Filters
	    if(is_home() && $DGhome == "on") return $content;
	    if(is_single() && $DGpost == "on") return $content;
	    if(is_page() && $DGpage == "on") return $content;
	    if(is_tag() && $DGtag == "on") return $content;
	    if(is_archive() && $DGarch == "on") return $content;
	    if(is_search() && $DGsrch == "on") return $content;
	    if (strpos($content, "diggZ=none") == TRUE) return $content;
	    
	    // API Button
	    if ($DGAPIact == "yes") {
		$but = SButtonZ_digg_API($content);
		// Non API Fallback
		if ($but == 'REVERT') {
		    $but = SButtonZ_digg_nonAPI($content);
	        }
	    }
	    
	    // Non API Button
	    if ($DGAPIact != "yes") {
		    $but = SButtonZ_digg_nonAPI($content);
	    }
	    
	    // Check Positioning
	    if($DGdisplay1 == "bottom") {
		$content = $content.$but;
	    } else {
	    	$content = $but.$content;
	    }
	    return $content;
	}
    }

// Add CSS Based on Chosen API Button
if (!function_exists("SButtonZ_digg_AddCSS")) {
    function SButtonZ_digg_AddCSS(){
	_e('<!--S-ButtonZ CSS-->'."\n");
	if ($DGAPIskin == '' || $DGAPIskin == 'bad-D') {
	    _e('<link type="text/css" rel="stylesheet" href="'.get_option('siteurl').'/wp-content/plugins/s-buttonz/digg-api/badge.css" />'."\n");
	}
	_e('<!--S-ButtonZ CSS-->'."\n");
    }
}

########################
#                      #
#   dZone Functions    #
#                      #
########################
    // Create dZone Button
    if (!function_exists("SButtonZ_dzon_Create")) {
	function SButtonZ_dzon_Create($content ) {
	    // Retrieve Options
	    get_option('SButtonZ_dzon') == "" ? "" : extract(get_option('SButtonZ_dzon'));
	// Display Top Right
	if ($DZdisplay1 == "") {
	    if ($DZstyle == "") {
		$DZ_ShowButton .= '<div style="float: right; width: 42px; padding-right: 10px; margin: 0 0 0 10px;">';
	    } elseif ($DZstyle == "2") {
		$DZ_ShowButton .= '<div style="float: right; width: 42px; padding-right: 115px; margin: 0 0 0 10px;">';
	    }
	}

	// Display Top Left or Bottom
	if ($DZdisplay1 == "left" || $DZdisplay1 == "bottom") {
	    if ($DZstyle == "") {
		$DZ_ShowButton .= '<div style="float: left; width: 42px; padding-right: 10px; margin: 0 10px 0 0;">';
	    } elseif ($DZstyle == "2") {
		$DZ_ShowButton .= '<div style="float: left; width: 42px; padding-right: 115px; margin: 0 10px 0 0;">';
	    }
	}
	
	// Body Text Preg Replace Values
	$DZold = array('/\n/', '/\r/', '/\\[[^\\]]*\\]/');
	$DZnew = array('', '', '');
	if ($DZbody != "") $DZbody = SButtonZ_trunc(strip_tags(preg_replace($DZold, $DZnew, $content)),$DZbody);
	
	// Style
	if ($DZstyle == '') $DZstyle = '1';
	
$DZ_ShowButton .= '
		<script type="text/javascript">
		<!--
		var dzone_url = "'.get_permalink().'";
		var dzone_title = "'.the_title("", "", false).'";
		var dzone_style = "'.$DZstyle.'";
		var dzone_blurb = "'.$DZbody.'";
		//-->
		</script>
		<script language="javascript" src="http://widgets.dzone.com/widgets/zoneit.js"></script>';
$DZ_ShowButton .= '</div>';
return $DZ_ShowButton;
	}
    }

    // Add dZone Button
    if (!function_exists("SButtonZ_dzon_Add")) {
	function SButtonZ_dzon_Add($content) {
	    // Check for Manual button
	    if (strpos($content, '[SButtonZ button="dzon"]')) return $content;
	    
	    // Retrieve Options
	    get_option('SButtonZ_dzon') == "" ? "" : extract(get_option('SButtonZ_dzon'));
	    
	    // Check Filters
	    if(is_home() && $DZhome == "on") return $content;
	    if(is_single() && $DZpost == "on") return $content;
	    if(is_page() && $DZpage == "on") return $content;
	    if(is_tag() && $DZtag == "on") return $content;
	    if(is_archive() && $DZarch == "on") return $content;
	    if(is_search() && $DZsrch == "on") return $content;
	    if (strpos($content, "dzoneZ=none") == TRUE) return $content;
	    
	    // Create Button
	    $but = SButtonZ_dzon_Create($content);
	    
	     // Check Positioning
	    if($DZdisplay1 == "bottom") {
		$content = $content.$but;
	    } else {
	    	$content = $but.$content;
	    }
	    return $content;
	}
    }

########################
#                      #
#  Facebook Functions  #
#                      #
########################
    // Create Facebook Button
    if (!function_exists("SButtonZ_face_Create")) {
	function SButtonZ_face_Create($content ) {
	    // Retrieve Options
	    get_option('SButtonZ_face') == "" ? "" : extract(get_option('SButtonZ_face'));
	// Display Top Right
	if($FBdisplay1 == "") {
	    if ($FBskin == "") {
		$FB_ShowButton .= '<div style="float: right; width: 70px; margin: 0 0 0 10px;">';
	    } elseif ($FBskin == "icon") {
		$FB_ShowButton .= '<div style="float: right; width: 20px; margin: 0 0 0 10px;">';
	    } elseif ($FBskin == "iconT") {
		$FB_ShowButton .= '<div style="float: right; width: 160px; margin: 0 0 0 10px;">';
	    } elseif ($FBskin == "link") {
		$FB_ShowButton .= '<div style="float: right; width: 135px; margin: 0 0 0 10px;">';
	    }
	}

	// Display Top Left or Bottom
	if ($FBdisplay1 == "left" || $FBdisplay1 == "bottom") {
	    if ($FBskin == "") {
		$FB_ShowButton .= '<div style="float: left; width: 70px; margin: 0 10px 0 0;">';
	    } elseif ($FBskin == "icon") {
		$FB_ShowButton .= '<div style="float: left; width: 20px; margin: 0 10px 0 0;">';
	    } elseif ($FBskin == "iconT") {
		$FB_ShowButton .= '<div style="float: left; width: 160px; margin: 0 10px 0 0;">';
	    } elseif ($FBskin == "link") {
		$FB_ShowButton .= '<div style="float: left; width: 135px; margin: 0 10px 0 0;">';
	    }
	}

// FB Main Script
$FB_ShowButton .= '
<script type="text/javascript">
function fbs_click() {
u=location.href;
t=document.title;
window.open("http://www.facebook.com/sharer.php?u="+encodeURIComponent(u)+"&t="+encodeURIComponent(t),"sharer","toolbar=0,status=0,width=626,height=436");
return false;
}
</script>';
// FB Share Button
if ($FBskin == "") {
	$FB_ShowButton .= '
<style type="text/css">
html .fb_share_button {display: -moz-inline-block; display:inline-block; padding:1px 20px 0 5px; height:15px; border:1px solid #d8dfea; background:url(http://b.static.ak.fbcdn.net/images/share/facebook_share_icon.gif?8:26981) no-repeat top right;}
html .fb_share_button:hover {color:#fff; border-color:#295582; background:#3b5998 url(http://b.static.ak.fbcdn.net/images/share/facebook_share_icon.gif?8:26981) no-repeat top right; text-decoration:none;}
</style>
<a href="http://www.facebook.com/share.php?u='.get_permalink().'" class="fb_share_button" onclick="return fbs_click()" target="_blank" style="text-decoration:none;">Share</a>';
}
// FB Icon
elseif ($FBskin == "icon") {
	$FB_ShowButton .= '
	<a href="http://www.facebook.com/share.php?u='.get_permalink().'" onclick="return fbs_click()" target="_blank">
	<img src="http://b.static.ak.fbcdn.net/images/share/facebook_share_icon.gif?8:26981" alt="FaceBook Share" /></a>';
}
// FB Icon with Link
elseif ($FBskin == "iconT") {
	$FB_ShowButton .= '
	<style type="text/css">
	html .fb_share_link { padding:2px 0 0 20px; height:16px; background:url(http://b.static.ak.fbcdn.net/images/share/facebook_share_icon.gif?8:26981) no-repeat top left; }
	</style>
	<a href="http://www.facebook.com/share.php?u='.get_permalink().'" onclick="return fbs_click()" target="_blank" class="fb_share_link">Share on Facebook</a>';
}
// FB Link
elseif ($FBskin == "link") {
	$FB_ShowButton .= '<a href="http://www.facebook.com/share.php?u='.get_permalink().'" onclick="return fbs_click()" target="_blank">Share on Facebook</a>';
}
$FB_ShowButton .= '</div>';
return $FB_ShowButton;
	}
    }

    // Add Facebook Button
    if (!function_exists("SButtonZ_face_Add")) {
	function SButtonZ_face_Add($content) {
	    // Check for Manual button
	    if (strpos($content, '[SButtonZ button="face"]')) return $content;
	    
	    // Retrieve Options
	    get_option('SButtonZ_face') == "" ? "" : extract(get_option('SButtonZ_face'));
	    
	    // Check Filters
	    if(is_home() && $FBhome == "on") return $content;
	    if(is_single() && $FBpost == "on") return $content;
	    if(is_page() && $FBpage == "on") return $content;
	    if(is_tag() && $FBtag == "on") return $content;
	    if(is_archive() && $FBarch == "on") return $content;
	    if(is_search() && $FBsrch == "on") return $content;
	    if (strpos($content, "faceZ=none") == TRUE) return $content;
	    
	    // Create Button
	    $but = SButtonZ_face_Create($content);
	    
	     // Check Positioning
	    if($FBdisplay1 == "bottom") {
		$content = $content.$but;
	    } else {
	    	$content = $but.$content;
	    }
	    return $content;
	}
    }

########################
#                      #
#   reddit Functions   #
#                      #
########################
    // Create reddit Button
    if (!function_exists("SButtonZ_redd_Create")) {
	function SButtonZ_redd_Create($content ) {
	    // Retrieve Options
	    get_option('SButtonZ_redd') == "" ? "" : extract(get_option('SButtonZ_redd'));
	// Display Top Right
	if($RDdisplay1 == "") {
	    if ($RDstyle == "") {
		$RD_ShowButton .= '<div style="float: right; width: 42px; padding-right: 90px; margin: 0 0 0 10px;">';
	    } elseif ($RDstyle == "2") {
		$RD_ShowButton .= '<div style="float: right; width: 42px; padding-right: 10px; margin: 0 0 0 10px;">';
	    } elseif ($RDstyle == "3") {
		$RD_ShowButton .= '<div style="float: right; width: 42px; padding-right: 30px; margin: 0 0 0 10px;">';
	    }
	}

	// Display Top Left or Bottom
	if ($RDdisplay1 == "left" || $RDdisplay1 == "bottom") {
	    if ($RDstyle == "") {
		$RD_ShowButton .= '<div style="float: left; width: 42px; padding-right: 90px; margin: 0 10px 0 0;">';
	    } elseif ($RDstyle == "2") {
		$RD_ShowButton .= '<div style="float: left; width: 42px; padding-right: 10px; margin: 0 10px 0 0;">';
	    } elseif ($RDstyle == "3") {
		$RD_ShowButton .= '<div style="float: left; width: 42px; padding-right: 30px; margin: 0 10px 0 0;">';
	    }
	}
	
	// Style
	if ($RDstyle == '') $RDstyle = '1';
    
$RD_ShowButton .= '
		<script type="text/javascript">
		<!--
		reddit_url = "'.get_permalink().'";
		reddit_title = "'.the_title("", "", false).'";
		//-->
		</script>
		<script type="text/javascript" src="http://www.reddit.com/button.js?t='.$RDstyle.'"></script>';
$RD_ShowButton .= '</div>';
return $RD_ShowButton;
	}
    }

    // Add reddit Button
    if (!function_exists("SButtonZ_redd_Add")) {
	function SButtonZ_redd_Add($content) {
	    // Check for Manual button
	    if (strpos($content, '[SButtonZ button="redd"]')) return $content;
	    
	    // Retrieve Options
	    get_option('SButtonZ_redd') == "" ? "" : extract(get_option('SButtonZ_redd'));
	    
	    // Check Filters
	    if(is_home() && $RDhome == "on") return $content;
	    if(is_single() && $RDpost == "on") return $content;
	    if(is_page() && $RDpage == "on") return $content;
	    if(is_tag() && $RDtag == "on") return $content;
	    if(is_archive() && $RDarch == "on") return $content;
	    if(is_search() && $RDsrch == "on") return $content;
	    if (strpos($content, "reddZ=none") == TRUE) return $content;
	    
	    // Create Button
	    $but = SButtonZ_redd_Create($content);
	    
	     // Check Positioning
	    if($RDdisplay1 == "bottom") {
		$content = $content.$but;
	    } else {
	    	$content = $but.$content;
	    }
	    return $content;
	}
    }

########################
#                      #
# Yahoo Buzz Functions #
#                      #
########################
    // Create Yahoo Buzz Button
    if (!function_exists("SButtonZ_yaho_Create")) {
	function SButtonZ_yaho_Create($content ) {
	    // Retrieve Options
	    get_option('SButtonZ_yaho') == "" ? "" : extract(get_option('SButtonZ_yaho'));
	// Display Top Right
	if ($YAdisplay1 == "") {
	    if ($YAbadge == "text-votes") {
		$YA_ShowButton .= '<div style="float: right; width: 80px; padding-right: 10px; margin: 0 0 10px 10px;">';
	    } elseif ($YAbadge == "logo") {
		$YA_ShowButton .= '<div style="float: right; width: 20px; padding-right: 10px; margin: 0 0 10px 10px;">';
	    } elseif ($YAbadge == "text") {
		$YA_ShowButton .= '<div style="float: right; width: 78px; padding-right: 10px; margin: 0 0 10px 10px;">';
	    } elseif ($YAbadge == "small-votes" || $YAbadge == "medium-votes" || $YAbadge == "large-votes") {
		$YA_ShowButton .= '<div style="float: right; width: 170px; padding-right: 10px; margin: 0 0 0 10px;">';
	    } elseif ($YAbadge == "small" || $YAbadge == "medium" || $YAbadge == "large") {
		$YA_ShowButton .= '<div style="float: right; width: 110px; padding-right: 10px; margin: 0 0 0 10px;">';
	    } else {
		$YA_ShowButton .= '<div style="float: right; width: 50px; padding-right: 10px; margin: 0 0 0 10px;">';
	    }
	}

	// Display Top Left or Bottom
	if ($YAdisplay1 == "left" || $YAdisplay1 == "bottom") {
	    if ($YAbadge == "text-votes") {
		$YA_ShowButton .= '<div style="float: left; width: 80px; padding-right: 10px; margin: 0 10px 10px 0;">';
	    } elseif ($YAbadge == "logo") {
		$YA_ShowButton .= '<div style="float: left; width: 20px; padding-right: 10px; margin: 0 10px 10px 0;">';
	    } elseif ($YAbadge == "text") {
		$YA_ShowButton .= '<div style="float: left; width: 78px; padding-right: 10px; margin: 0 10px 10px 0;">';
	    } elseif ($YAbadge == "small-votes" || $YAbadge == "medium-votes" || $YAbadge == "large-votes") {
		$YA_ShowButton .= '<div style="float: left; width: 170px; padding-right: 10px; margin: 0 10px 0 0;">';
	    } elseif ($YAbadge == "small" || $YAbadge == "medium" || $YAbadge == "large") {
		$YA_ShowButton .= '<div style="float: left; width: 110px; padding-right: 10px; margin: 0 10px 0 0;">';
	    } else {
		$YA_ShowButton .= '<div style="float: left; width: 50px; padding-right: 10px; margin: 0 10px 0 0;">';
	    }
	}
	
	// Body Text Preg Replace Values
	$YAold = array('/\n/', '/\r/', '/\\[[^\\]]*\\]/');
	$YAnew = array('', '', '');
	if($YAbody != "") $YAbody = SButtonZ_trunc(strip_tags(preg_replace($YAold, $YAnew, $content)),$YAbody);
	
	// Media Type
	if (strpos($content, "SBZ=video")) $YAmedia = "video";
	elseif (strpos($content, "SBZ=image")) $YAmedia = "image";
	elseif (strpos($content, "SBZ=news")) $YAmedia = "text";
	
$YA_ShowButton .= '
		<script type="text/javascript">
		<!--
		yahooBuzzArticleHeadline = "'.the_title("", "", false).'";
		yahooBuzzArticleCategory = "'.$YAtopic.'";
		yahooBuzzArticleType = "'.$YAmedia.'";
		yahooBuzzArticleId = "'.get_permalink().'";
		yahooBuzzArticleSummary = "'.$YAbody.'";
		//-->
		</script>
		<script type="text/javascript" src="http://d.yimg.com/ds/badge2.js" badgetype="'.$YAbadge.'"> </script>';
$YA_ShowButton .= '</div>';
return $YA_ShowButton;
	}
    }

    // Add Yahoo Buzz Button
    if (!function_exists("SButtonZ_yaho_Add")) {
	function SButtonZ_yaho_Add($content) {
	    // Check for Manual button
	    if (strpos($content, '[SButtonZ button="yaho"]')) return $content;
	    
	    // Retrieve Options
	    get_option('SButtonZ_yaho') == "" ? "" : extract(get_option('SButtonZ_yaho'));
	    
	    // Check Filters
	    if(is_home() && $YAhome == "on") return $content;
	    if(is_single() && $YApost == "on") return $content;
	    if(is_page() && $YApage == "on") return $content;
	    if(is_tag() && $YAtag == "on") return $content;
	    if(is_archive() && $YAarch == "on") return $content;
	    if(is_search() && $YAsrch == "on") return $content;
	    if (strpos($content, "buzzZ=none") == TRUE) return $content;
	    
	    // Create Button
	    $but = SButtonZ_yaho_Create($content);
	    
	     // Check Positioning
	    if($YAdisplay1 == "bottom") {
		$content = $content.$but;
	    } else {
	    	$content = $but.$content;
	    }
	    return $content;
	}
    }

########################
#                      #
#   Other Functions    #
#                      #
########################

// Clear Div
if (!function_exists("SButtonZ_Clear")) {
    function SButtonZ_Clear($content) {
	$content .= '<div style="clear:both;">&nbsp;</div>';
	return $content;
    }
}

// Promote Text
if (!function_exists("SButtonZ_Promote")) {
    function SButtonZ_Promote($content) {
	if(is_page() || is_single()) {
	    $content .= "<p>Social Media buttons brought to you by <a href='http://blog.rswr.net/2009/02/14/social-media-wordpress-plugin/'>S-ButtonZ (WordPress Plugin)</a></p>";
	}
	return $content;
    }
}

// Get Plugin URL
if (!function_exists("SButtonZ_Url")) {
	function SButtonZ_Url() {
		$path = dirname(__FILE__);
		$path = str_replace("\\","/",$path);
		$path = trailingslashit(get_bloginfo('wpurl')) . trailingslashit(substr($path,strpos($path,"wp-content/")));
		return $path;
	}
}

// Start Tag
if (!function_exists("SButtonZ_Start")) {
    function SButtonZ_Start($content) {
	$content = '<!--S-ButtonZ 1.1.5 Start-->'.$content;
	return $content;
    }
}

// End Tag
if (!function_exists("SButtonZ_End")) {
    function SButtonZ_End($content) {
	$content = '<!--S-ButtonZ 1.1.5 End-->'.$content;
	return $content;
    }
}

//Initialize the admin panel
if (!function_exists("SButtonZ_ap")) {
	function SButtonZ_ap() {
		global $SButtonZ_init;
		wp_enqueue_script('SBZ-main','/wp-content/plugins/s-buttonz/js/SBZ-main.js', array('jquery'), '1.0');
		if (!isset($SButtonZ_init)) {
			return;
		}
		if (function_exists('add_options_page')) {
			add_options_page('S-ButtonZ', 'S-ButtonZ', 9, basename(__FILE__), array(&$SButtonZ_init, 'printAdminPage'));
		}
	}
}

// Initialize Class
if (class_exists("SButtonZ")) {
	$SButtonZ_init = new SButtonZ();
}

//Actions and Filters
if (isset($SButtonZ_init)) {
	//Get Settings
	get_option('SButtonZ_gen') == "" ? "" : extract(get_option('SButtonZ_gen'));
	get_option('SButtonZ_digg') == "" ? "" : extract(get_option('SButtonZ_digg'));
	
	//Actions
	add_action('s-buttonz/S-ButtonZ.php', array(&$SButtonZ_init, 'init'));
	add_action('admin_menu', 'SButtonZ_ap');
	if ($DGAPIact == "yes") add_action('wp_head', 'SButtonZ_digg_AddCSS');

	//Filters
	add_filter('the_content', 'SButtonZ_End');
	if ($digg == "on") add_filter('the_content', 'SButtonZ_digg_Add');
	if ($dzon == "on") add_filter('the_content', 'SButtonZ_dzon_Add');
	if ($face == "on") add_filter('the_content', 'SButtonZ_face_Add');
	if ($redd == "on") add_filter('the_content', 'SButtonZ_redd_Add');
	if ($yaho == "on") add_filter('the_content', 'SButtonZ_yaho_Add');
	add_filter('the_content', 'SButtonZ_Clear');
	if ($prom == "on") add_filter('the_content', 'SButtonZ_Promote');
	add_filter('the_content', 'SButtonZ_Start');
	
	// Add Shortcode
	add_shortcode('SButtonZ', 'SButtonZ_short');
}
?>
