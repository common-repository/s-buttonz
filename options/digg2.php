<?php
// Retrieve General & Hide Settings
!is_array(get_option('SButtonZ_digg')) ? "" : extract(get_option('SButtonZ_digg'));
// Start Digg API Settings
if ($hide8 == 'show') {
    _e('<input type="hidden" target="SBZ-hide8" name="SBZ-hide8" class="SBZ-sh" value="show" />');
} else {
    _e('<input type="hidden" target="SBZ-hide8" name="SBZ-hide8" class="SBZ-sh" value="hide" />');
}
?>
  <div id="poststuff">
    <div class="postbox" id="SBZ8-1">
      <h3 class="hndle SBZ-h" target="SBZ-hide8"><span><?php _e('Digg API','SButtonZ'); ?></span></h3>
      <div class="inside" id="SBZ-hide8">
<table width="100%" class="SBZ-Pad">
<tr>
<th scope="row">
Change API Access Delay
</td><td colspan="2">
<input type="text" name="DGAPIdelay" size="10" maxlength="4" value="<?php if ($DGAPIdelay == "") {_e('300');} else {_e($DGAPIdelay);} ?>" />
<br /><span class="SBZ-Red">Please note: If you set the delay to a very small time frame, your API key may be banned by the Digg API.<br />
Default 300 seconds (5 Minutes)
</span>
</td></tr>
<tr>
<th scope="row">
API Key
</td><td colspan="2">
<input type="text" name="DGAPIkey" size="40" value="<?php if ($DGAPIkey == "") {_e(get_option('siteurl'));} else {_e($DGAPIkey);} ?>" />
<br /><span class="SBZ-Red">By default, your API key is set to your blog's URL. This does not need to be changed unless your API key gets banned for some reason. API keys must be an URL. </span>
</td></tr>
<tr>
<th scope="row">
Custom Skin Type <span class="SBZ-Red">(Beta)</span>
</td><td style="vertical-align:top;">
<select id="DGAPIskin" name="DGAPIskin">
	<option value="" <?php _e($DGAPIskin=="" ? "selected" : ""); ?>>Badge (Light)</option>
	<option value="bad-D" <?php _e($DGAPIskin=="bad-D" ? "selected" : ""); ?>>Badge (Dark)</option>
</select>
</td>
<td>
<img src="<?php _e(SButtonZ_Url()); ?>images/digg-examples2.png" width="198px" height="120px" />
</td></tr>
<tr>
<th scope="row">
Digg Threshold
</td><td colspan="2">
<input type="text" name="DGAPIthreshold" size="10" maxlength="7" value="<?php if ($DGAPIthreshold == "") {_e('0');} else {_e($DGAPIthreshold);} ?>" />
<br /><span class="SBZ-Red">This is the number of diggs a story must have before a Digg button is displayed. Default is 0.<br />
</span>
</td></tr>
<tr>
<td colspan="3">
<span class="SBZ-Red">API Notes:</span>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;* When using the API for the first time, you may notice a post displaying non API badges. S-ButtonZ will revert back to regular JS buttons if it discovers no data. This should only happen for the first story.<br />
&nbsp;&nbsp;&nbsp;&nbsp;* <span class="SBZ-Red">Beta Note:</span> The API feature is still in the beta testing phase. Please report any bugs you find <a href="http://feedback.rswr.net/pages/s_button_z" target="_blank">via our feedback forum</a>.<br />
&nbsp;&nbsp;&nbsp;&nbsp;* You may create your own custom digg badge from css and images. The files are located in the "SBZ-api" folder. Also make sure to name your css and images with the same names as the default; "badge.css", "badge-light.gif" etc. In a later release you will be able to name your own button templates.<br />
</td></tr>
</table>
      </div>
    </div>
  </div>
