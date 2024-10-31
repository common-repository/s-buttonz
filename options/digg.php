<?php
// Retrieve Options
get_option('SButtonZ_digg') == "" ? "" : extract(get_option('SButtonZ_digg'));
// Start Digg Settings
if ($hide4 == 'show') {
    _e('<input type="hidden" target="SBZ-hide4" name="SBZ-hide4" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide4" name="SBZ-hide4" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox" id="SBZ4">
      <h3 class="hndle SBZ-h" target="SBZ-hide4"><span><?php _e('Digg Settings','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide4">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Hide Buttons On...
</td><td colspan="2">
<input type="checkbox" name="DGhome" <?php _e($DGhome=="on" ? "checked=on" : ""); ?> /> Home Page (Recommended to speed up your Home Page's load time.)<br />
<input type="checkbox" name="DGpost" <?php _e($DGpost=="on" ? "checked=on" : ""); ?> /> Posts<br />
<input type="checkbox" name="DGpage" <?php _e($DGpage=="on" ? "checked=on" : ""); ?> /> Pages<br />
<input type="checkbox" name="DGtag" <?php _e($DGtag=="on" ? "checked=on" : ""); ?> /> Tag Pages<br />
<input type="checkbox" name="DGarch" <?php _e($DGarch=="on" ? "checked=on" : ""); ?> /> Archives (This is all Category, Author and Date based pages)<br />
<input type="checkbox" name="DGsrch" <?php _e($DGsrch=="on" ? "checked=on" : ""); ?> /> Search Page Results<br />
<span class="SBZ-Red">Single Page or Post
<br />Note: Add the following html snippet to any page or post you would like to the hide the digg button on.
<br />&lt;!--diggZ=none--&gt;
</span>
</td></tr>
<tr>
<th scope="row">
Use Digg API? <span class="SBZ-Red">(Beta)</span>
</td><td colspan="2">
<select id="DGAPIact" name="DGAPIact">
	<option value="" <?php _e($DGAPIact=="" ? "selected" : ""); ?>>No</option>
	<option value="yes" <?php _e($DGAPIact=="yes" ? "selected" : ""); ?> class="api">Yes</option>
</select>
<br /><span class="SBZ-Red">The "Digg API" box will appear below the "Digg Settings" box, when this is set to "yes" and settings have been updated.</span>
</td></tr>
<tr>
<th scope="row">
Button Position
</td><td colspan="2">
<select id="DGdisplay1" name="DGdisplay1">	
	<option value="" <?php _e($DGdisplay1=="" ? "selected" : ""); ?>>Top Right</option>
	<option value="left" <?php _e($DGdisplay1=="left" ? "selected" : ""); ?>>Top Left</option>
	<option value="bottom" <?php _e($DGdisplay1=="bottom" ? "selected" : ""); ?>>Bottom</option>
</select>
</td></tr>
<tr>
<th scope="row">
Background Color
</td><td colspan="2">
<input type="text" name="DGbg" size="10" maxlength="7" value="<?php if ($DGbg == "") {_e("#FFFFFF");} else {_e($DGbg);} ?>" />
<br /><span class="SBZ-Red">Use Hex Format Only (EG. #FFFFFF)</span>
</td></tr>
<tr>
<th scope="row">
Skin Type
</td><td style="vertical-align:top;">
<select id="DGskin" name="DGskin">
	<option value="" <?php _e($DGskin=="" ? "selected" : ""); ?>>Default</option>
	<option value="compact" <?php _e($DGskin=="compact" ? "selected" : ""); ?>>Compact</option>
	<option value="icon" <?php _e($DGskin=="icon" ? "selected" : ""); ?>>Icon</option>
</select>
</td>
<td>
<img src="<?php _e(SButtonZ_Url()); ?>images/digg-examples.png" width="320px" height="120px" />
</td></tr>
<tr>
<th scope="row">
Browser Window
</td><td colspan="2">
<select id="DGwin" name="DGwin">
	<option value="" <?php _e($DGwin=="" ? "selected" : ""); ?>>Default Window</option>
	<option value="new" <?php _e($DGwin=="new" ? "selected" : ""); ?>>New Window</option>
</select>
</td></tr>
<tr>
<th scope="row">
Summary
</td><td colspan="2">
<select id="DGbody" name="DGbody">
	<option value="" <?php _e($DGbody=="" ? "selected" : ""); ?>>Manual (Blank Summary)</option>
	<option value="150" <?php _e($DGbody=="150" ? "selected" : ""); ?>>150 Charachter Summary</option>
	<option value="250" <?php _e($DGbody=="250" ? "selected" : ""); ?>>250 Charachter Summary</option>
	<option value="350" <?php _e($DGbody=="350" ? "selected" : ""); ?>>350 Charachter Summary</option>
</select>
</td></tr>
<tr>
<th scope="row">
Media
</td><td colspan="2">
<select id="DGmedia" name="DGmedia">
	<option value="news" <?php _e($DGmedia=="news" ? "selected" : ""); ?>>News (Text)</option>
	<option value="video" <?php _e($DGmedia=="video" ? "selected" : ""); ?>>Video</option>
	<option value="image" <?php _e($DGmedia=="image" ? "selected" : ""); ?>>Image</option>
</select>
<br /><span class="SBZ-Red">The default type of media being submitted.</span>
<br />Note: If you need to use multiple types of media, add one of the following html snippets to your page or post.
<br /> &lt;!--SBZ=news--&gt;
<br /> &lt;!--SBZ=image--&gt;
<br /> &lt;!--SBZ=video--&gt;
</td></tr>
<tr>
<th scope="row">
Topic
</td><td colspan="2">
<select id="DGtopic" name="DGtopic">
	<option value="" <?php _e($DGtopic=="" ? "selected" : ""); ?>>Blank</option>
	<option value="apple" <?php _e($DGtopic=="apple" ? "selected" : ""); ?>>Apple</option>
	<option value="arts_culture" <?php _e($DGtopic=="arts_culture" ? "selected" : ""); ?>>Arts Culture</option>
	<option value="autos" <?php _e($DGtopic=="autos" ? "selected" : ""); ?>>Autos</option>
	<option value="baseball" <?php _e($DGtopic=="baseball" ? "selected" : ""); ?>>Baseball</option>
	<option value="basketball" <?php _e($DGtopic=="basketball" ? "selected" : ""); ?>>Basketball</option>
	<option value="business_finance" <?php _e($DGtopic=="business_finance" ? "selected" : ""); ?>>Business Finance</option>
	<option value="celebrity" <?php _e($DGtopic=="celebrity" ? "selected" : ""); ?>>Celebrity</option>
	<option value="comedy" <?php _e($DGtopic=="comedy" ? "selected" : ""); ?>>Comedy</option>
	<option value="comics_animation" <?php _e($DGtopic=="comics_animation" ? "selected" : ""); ?>>Comics Animation</option>
	<option value="design" <?php _e($DGtopic=="design" ? "selected" : ""); ?>>Design</option>
	<option value="educational" <?php _e($DGtopic=="educational" ? "selected" : ""); ?>>Educational</option>
	<option value="environment" <?php _e($DGtopic=="environment" ? "selected" : ""); ?>>Environment</option>
	<option value="extreme_sports" <?php _e($DGtopic=="extreme_sports" ? "selected" : ""); ?>>Extreme Sports</option>
	<option value="food_drink" <?php _e($DGtopic=="food_drink" ? "selected" : ""); ?>>Food Drink</option>
	<option value="football" <?php _e($DGtopic=="football" ? "selected" : ""); ?>>Football</option>
	<option value="gadgets" <?php _e($DGtopic=="gadgets" ? "selected" : ""); ?>>Gadgets</option>
	<option value="gaming_news" <?php _e($DGtopic=="gaming_news" ? "selected" : ""); ?>>Gaming News</option>
	<option value="general_sciences" <?php _e($DGtopic=="general_sciences" ? "selected" : ""); ?>>General Sciences</option>
	<option value="golf" <?php _e($DGtopic=="golf" ? "selected" : ""); ?>>Golf</option>
	<option value="hardware" <?php _e($DGtopic=="hardware" ? "selected" : ""); ?>>Hardware</option>
	<option value="health" <?php _e($DGtopic=="health" ? "selected" : ""); ?>>Health</option>
	<option value="hockey" <?php _e($DGtopic=="hockey" ? "selected" : ""); ?>>Hockey</option>
	<option value="linux_unix" <?php _e($DGtopic=="linux_unix" ? "selected" : ""); ?>>Linux Unix</option>
	<option value="microsoft" <?php _e($DGtopic=="microsoft" ? "selected" : ""); ?>>Microsoft</option>
	<option value="mods" <?php _e($DGtopic=="mods" ? "selected" : ""); ?>>Mods</option>
	<option value="motorsport" <?php _e($DGtopic=="motorsport" ? "selected" : ""); ?>>Motorsport</option>
	<option value="movies" <?php _e($DGtopic=="movies" ? "selected" : ""); ?>>Movies</option>
	<option value="music" <?php _e($DGtopic=="music" ? "selected" : ""); ?>>Music</option>
	<option value="nintendo" <?php _e($DGtopic=="nintendo" ? "selected" : ""); ?>>Nintendo</option>
	<option value="odd_stuff" <?php _e($DGtopic=="odd_stuff" ? "selected" : ""); ?>>Odd Stuff</option>
	<option value="olympics" <?php _e($DGtopic=="olympics" ? "selected" : ""); ?>>Olympics</option>
	<option value="other_sports" <?php _e($DGtopic=="other_sports" ? "selected" : ""); ?>>Other Sports</option>
	<option value="pc_games" <?php _e($DGtopic=="pc_games" ? "selected" : ""); ?>>PC Games</option>
	<option value="people" <?php _e($DGtopic=="people" ? "selected" : ""); ?>>People</option>
	<option value="pets_animals" <?php _e($DGtopic=="pets_animals" ? "selected" : ""); ?>>Pets Animals</option>
	<option value="playable_web_games" <?php _e($DGtopic=="playable_web_games" ? "selected" : ""); ?>>Playable Web Games</option>
	<option value="playstation" <?php _e($DGtopic=="playstation" ? "selected" : ""); ?>>Playstation</option>
	<option value="political_opinion" <?php _e($DGtopic=="political_opinion" ? "selected" : ""); ?>>Political Opinion</option>
	<option value="politics" <?php _e($DGtopic=="politics" ? "selected" : ""); ?>>Politics</option>
	<option value="programming" <?php _e($DGtopic=="programming" ? "selected" : ""); ?>>Programming</option>
	<option value="security" <?php _e($DGtopic=="security" ? "selected" : ""); ?>>Security</option>
	<option value="soccer" <?php _e($DGtopic=="soccer" ? "selected" : ""); ?>>Soccer</option>
	<option value="software" <?php _e($DGtopic=="software" ? "selected" : ""); ?>>Software</option>
	<option value="space" <?php _e($DGtopic=="space" ? "selected" : ""); ?>>Space</option>
	<option value="tech_news" <?php _e($DGtopic=="tech_news" ? "selected" : ""); ?>>Tech News</option>
	<option value="television" <?php _e($DGtopic=="television" ? "selected" : ""); ?>>Television</option>
	<option value="tennis" <?php _e($DGtopic=="tennis" ? "selected" : ""); ?>>Tennis</option>
	<option value="travel_places" <?php _e($DGtopic=="travel_places" ? "selected" : ""); ?>>Travel Places</option>
	<option value="world_news" <?php _e($DGtopic=="world_news" ? "selected" : ""); ?>>World News</option>
	<option value="xbox" <?php _e($DGtopic=="xbox" ? "selected" : ""); ?>>Xbox</option>
</select>
<br /><span class="SBZ-Red">Leave this set to "Blank" if you want the poster to choose the topic.</span>
</td></tr>
</table>
      </div>
    </div>
  </div>
