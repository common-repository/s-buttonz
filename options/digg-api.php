<?php
// Start Digg API
// Story Class
class DiggAPIStory {
	function sayLink() {
		return $this->link;
	}
	function sayDiggs() {
		return $this->diggs;
	}
	function sayID() {
		return $this->id;
	}
	function sayHREF() {
		return $this->href;
	}
}
// Stories Class
class DiggAPIStories {
	function getLink() {
		foreach ($this->stories as $story) {
			return $story->sayLink();
		}
	}
	function getDiggs() {
		foreach ($this->stories as $story) {
			return $story->sayDiggs();
		}
	}
	function getID() {
		foreach ($this->stories as $story) {
			return $story->sayID();
		}
	}
	function getHREF() {
		foreach ($this->stories as $story) {
			return $story->sayHREF();
		}
	}
}

// Get Current Timestamp
$CTime = time();

// Setup API Variables
ini_set('user_agent', 'S-ButtonZ/1.1.5');
$SBZ_link = get_permalink();

// 5 Min Time Calculations
$STime = get_option('SButtonZ_digg_time1');
$SDiff = $CTime - $STime;

// If Delay has Passed or this is first time using script... Check Story!
if ($DGAPIdelay == '') $DGAPIdelay = '300';
if ($SDiff >= $DGAPIdelay || $STime == '') {
    // Update Timer with Current Timestamp
    update_option('SButtonZ_digg_time1', $CTime);
    
    // Get Story
    $uri = 'http://services.digg.com/stories?link='.urlencode($SBZ_link).'&appkey='.urlencode($DGAPIkey).'&type=php';
    $response = file_get_contents($uri);
    $stories = unserialize($response);
    
    // Check Total # of Stories
    if ($stories->total > 0) {
	// Set Up Keys
	$s1 = $stories->getID().'-L';
	$s2 = $stories->getID().'-D';
	$s3 = $stories->getID().'-H';
    
	// Retreive Saved Posts
	get_option('SButtonZ_digg_stories') == "" ? "" : $saveStory = unserialize(get_option('SButtonZ_digg_stories'));
    
	// Update Story
	$saveStory[$s1] = $stories->getLink();
	$saveStory[$s2] = $stories->getDiggs();
	$saveStory[$s3] = $stories->getHREF();
	update_option('SButtonZ_digg_stories', serialize($saveStory));
	
	// Update Button
	$SBZ_Diggs = $stories->getDiggs();
	$SBZ_HREF = $stories->getHREF();
    } else {
	$SBZ_Diggs = 0;
    }

// If 5 Minutes Have NOT Passed
} else {
    // Retreive Saved Posts
    get_option('SButtonZ_digg_stories') == "" ? "" : $storedStory = unserialize(get_option('SButtonZ_digg_stories'));
    
    //Do we have an Array?
    if (is_array($storedStory)) {
	// Search For Link
	if (!is_null(array_search($SBZ_link, $storedStory))) {
	    $found = array_search($SBZ_link, $storedStory);
	    $SBZ_Diggs = $storedStory[str_replace('-L','-D',$found)];
	    $SBZ_HREF = $storedStory[str_replace('-L','-H',$found)];
	} else {
	    $SBZ_Diggs = 0;
	}
    } else {
        $SBZ_revert = 'REVERT';
    }
}
// To Test
//$SBZ_revert = 'REVERT';
###########################
#                         #
#  Lets Build The Button  #
#                         #
###########################
if ($SBZ_revert != 'REVERT') {

    // Setup Body Text
    $DGold = array('/\n/', '/\r/', '/\\[[^\\]]*\\]/');
    $DGnew = array('', '', '');
    if($DGbody != "") $DGbody = '&bodytext='.urlencode(SButtonZ_trunc(strip_tags(preg_replace($DGold, $DGnew, $content)),$DGbody));
    else $DGbody = '';

    // Setup Media
    if (strpos($content, "SBZ=video")) $DGmedia = "&media=video";
    elseif (strpos($content, "SBZ=image")) $DGmedia = "&media=image";
    elseif (strpos($content, "SBZ=news")) $DGmedia = "&media=news";
    else $DGmedia = "&media=$DGmedia";

    // Window Setting
    if ($DGwin == 'new') $DGwin = 'target="_blank "';
    else $DGwin = '';

    // Setup Title
    $DGtitle = '&title='.urlencode(the_title('', '', false));

    // If hasn't been dugg link as so
    if ($SBZ_Diggs == '') $SBZ_Diggs = 0;
    if ($SBZ_Diggs == 0) {
	$diggLink = 'http://digg.com/submit?url='.urlencode($SBZ_link).$DGtitle.$DGbody.'&topic='.$DGtopic.$DGmedia;
    } else {
	// It has been dugg, so lets link it to the story
	$diggLink = $SBZ_HREF;
    }

    // Setup Button Graphic Link
    $SBZ_GLink = get_option('siteurl').'/wp-content/plugins/s-buttonz/digg-api/';

    // Setup Button Position
    if ($DGdisplay1 == '') {
	$SBZ_pos = 'right';
    } else if ($DGdisplay1 == 'left') {
	$SBZ_pos = 'left';
    } else if ($DGdisplay1 == 'bottom') {
	$SBZ_pos = 'bottom';
    }

    // Setup Skin
    if ($DGAPIskin == '') {
	$SBZ_ShowButton = '<div class="SBZ_con_badge SBZ_con_'.$SBZ_pos.'" style="background-image:url('.$SBZ_GLink.'badge-light.gif)"><a href="'.$diggLink.'" '.$DGwin.' style="text-decoration:none;" class="SBZ_link_badge">';
    } else if ($DGAPIskin == 'bad-D') {
	$SBZ_ShowButton = '<div class="SBZ_con_badge SBZ_con_'.$SBZ_pos.'" style="background-image:url('.$SBZ_GLink.'badge-dark.gif)"><a href="'.$diggLink.'" '.$DGwin.' style="text-decoration:none;" class="SBZ_link_badge">';
    }

    // Check Digg Count
    if ($SBZ_Diggs == 0) {
	$SBZ_ShowButton .= 'Digg<span class="SBZ_submit_badge">Submit</span></a></div>';
    } else if ($SBZ_Diggs == 1) {
	$SBZ_ShowButton .= '<span class="SBZ_num_badge">'.$SBZ_Diggs.'</span><span class="SBZ_diggs_badge">digg</span></a></div>';
    } else {
	$SBZ_ShowButton .= '<span class="SBZ_num_badge">'.$SBZ_Diggs.'</span><span class="SBZ_diggs_badge">diggs</span></a></div>';
    }
}
?>
