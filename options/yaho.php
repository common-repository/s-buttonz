<?php
// Retrieve Options
get_option('SButtonZ_yaho') == "" ? "" : extract(get_option('SButtonZ_yaho'));
// Start Yahoo Buzz Settings
if ($hide7 == 'show') {
    _e('<input type="hidden" target="SBZ-hide7" name="SBZ-hide7" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide7" name="SBZ-hide7" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox" id="SBZ7">
      <h3 class="hndle SBZ-h" target="SBZ-hide7"><span><?php _e('Yahoo Buzz Settings','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide7">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Hide Buttons On...
</td><td colspan="2">
<input type="checkbox" name="YAhome" <?php _e($YAhome=="on" ? "checked=on" : ""); ?> /> Home Page (Recommended to speed up your Home Page's load time.)<br />
<input type="checkbox" name="YApost" <?php _e($YApost=="on" ? "checked=on" : ""); ?> /> Posts<br />
<input type="checkbox" name="YApage" <?php _e($YApage=="on" ? "checked=on" : ""); ?> /> Pages<br />
<input type="checkbox" name="YAtag" <?php _e($YAtag=="on" ? "checked=on" : ""); ?> /> Tag Pages<br />
<input type="checkbox" name="YAarch" <?php _e($YAarch=="on" ? "checked=on" : ""); ?> /> Archives (This is all Category, Author and Date based pages)<br />
<input type="checkbox" name="YAsrch" <?php _e($YAsrch=="on" ? "checked=on" : ""); ?> /> Search Page Results<br />
<span class="SBZ-Red">Single Page or Post
<br />Note: Add the following html snippet to any page or post you would like to the hide the "Yahoo! Buzz" button on.
<br />&lt;!--buzzZ=none--&gt;
</span>
</td></tr>
<tr>
<th scope="row">
Button Position
</td><td colspan="2">
<select id="YAdisplay1" name="YAdisplay1">
	<option value="" <?php _e($YAdisplay1=="" ? "selected" : ""); ?>>Top Right</option>
	<option value="left" <?php _e($YAdisplay1=="left" ? "selected" : ""); ?>>Top Left</option>
	<option value="bottom" <?php _e($YAdisplay1=="bottom" ? "selected" : ""); ?>>Bottom</option>
</select>
</td></tr>
<tr>
<th scope="row">
Badge Type
</td><td style="vertical-align:top;">
<select id="YAbadge" name="YAbadge">
	<option value="square" <?php _e($YAbadge=="square" ? "selected" : ""); ?>>Square</option>
	<option value="text-votes" <?php _e($YAbadge=="text-votes" ? "selected" : ""); ?>>Text Votes</option>
	<option value="logo" <?php _e($YAbadge=="logo" ? "selected" : ""); ?>>Icon (Without Text)</option>
	<option value="text" <?php _e($YAbadge=="text" ? "selected" : ""); ?>>Icon (With Text Link)</option>
	<option value="small-votes" <?php _e($YAbadge=="small-votes" ? "selected" : ""); ?>>Small Votes</option>
	<option value="medium-votes" <?php _e($YAbadge=="medium-votes" ? "selected" : ""); ?>>Medium Votes</option>
	<option value="large-votes" <?php _e($YAbadge=="large-votes" ? "selected" : ""); ?>>Large Votes</option>
	<option value="small" <?php _e($YAbadge=="small" ? "selected" : ""); ?>>Small Button</option>
	<option value="medium" <?php _e($YAbadge=="medium" ? "selected" : ""); ?>>Medium Button</option>
	<option value="large" <?php _e($YAbadge=="large" ? "selected" : ""); ?>>Large Button</option>
</select>
</td>
<td>
<img src="<?php _e(SButtonZ_Url()); ?>images/buzz-examples.png" width="550px" height="300px" />
</td></tr>
<tr>
<th scope="row">
Summary
</td><td colspan="2">
<select id="YAbody" name="YAbody">
	<option value="" <?php _e($YAbody=="" ? "selected" : ""); ?>>Manual (Blank Summary)</option>
	<option value="150" <?php _e($YAbody=="150" ? "selected" : ""); ?>>150 Charachter Summary</option>
	<option value="250" <?php _e($YAbody=="250" ? "selected" : ""); ?>>250 Charachter Summary</option>
	<option value="350" <?php _e($YAbody=="350" ? "selected" : ""); ?>>350 Charachter Summary</option>
</select>
</td></tr>
<tr>
<th scope="row">
Media
</td><td colspan="2">
<select id="YAmedia" name="YAmedia">
	<option value="text" <?php _e($YAmedia=="text" ? "selected" : ""); ?>>News (Text)</option>
	<option value="video" <?php _e($YAmedia=="video" ? "selected" : ""); ?>>Video</option>
	<option value="image" <?php _e($YAmedia=="image" ? "selected" : ""); ?>>Image</option>
</select>
<br /><span class="SBZ-Red">The default type of media being submitted.</span>
<br />Note: If you need to use multiple types of media, add one of the following html snippets to your page or post.
<br /> &lt;!--SBZ=text--&gt;
<br /> &lt;!--SBZ=image--&gt;
<br /> &lt;!--SBZ=video--&gt;
</td></tr>
<tr>
<th scope="row">
Category
</td><td colspan="2">
<select id="YAtopic" name="YAtopic">
	<option value="" <?php _e($YAtopic=="" ? "selected" : ""); ?>>Blank</option>
	<option value="business" <?php _e($YAtopic=="business" ? "selected" : ""); ?>>Business</option>
	<option value="entertainment" <?php _e($YAtopic=="entertainment" ? "selected" : ""); ?>>Entertainment</option>
	<option value="health" <?php _e($YAtopic=="health" ? "selected" : ""); ?>>Health</option>
	<option value="images" <?php _e($YAtopic=="images" ? "selected" : ""); ?>>Images</option>
	<option value="lifestyle" <?php _e($YAtopic=="lifestyle" ? "selected" : ""); ?>>Lifestyle</option>
	<option value="politics" <?php _e($YAtopic=="politics" ? "selected" : ""); ?>>Politics</option>
	<option value="science" <?php _e($YAtopic=="science" ? "selected" : ""); ?>>Science</option>
	<option value="sports" <?php _e($YAtopic=="sports" ? "selected" : ""); ?>>Sports</option>
	<option value="travel" <?php _e($YAtopic=="travel" ? "selected" : ""); ?>>Travel</option>
	<option value="usnews" <?php _e($YAtopic=="usnews" ? "selected" : ""); ?>>US News</option>
	<option value="video" <?php _e($YAtopic=="video" ? "selected" : ""); ?>>Video</option>
	<option value="world-news" <?php _e($YAtopic=="world-news" ? "selected" : ""); ?>>World News</option>
</select>
<br /><span class="SBZ-Red">Leave this set to "Blank" if you want the poster to choose the category.</span>
</td></tr>
</table>
      </div>
    </div>
  </div>
