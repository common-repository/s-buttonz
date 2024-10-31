=== S-ButtonZ ===
Contributors: Gorkfu 
Donate link: http://www.rswr.net/send-rswr-donation/
Tags: digg, digg it, dzone, facebook, facebook share, reddit, buzz, yahoo buzz, social bookmark, social bookmarking, social media
Requires at least: 2.7
Tested up to: 2.8.4
Stable tag: 1.1.5

Displays social media buttons of your choice for each post/page. Full admin options available.

== Description ==

= What This Plugin Does: =

Displays social media buttons of your choice for each post/page.

You can currently select from any of the following buttons/badges:

digg, dZone, Facebook, reddit and Yahoo Buzz.

= Features: =

* Separate admin options for each social media button. 

* Fixed display options: top left, top right or bottom.

* Manual button placement with shortcode [See Faq](http://wordpress.org/extend/plugins/s-buttonz/faq/).

* Can hide buttons on home page, pages, posts, tag pages, archives and the search results page.

* Hide buttons on a single page or post [See Faq](http://wordpress.org/extend/plugins/s-buttonz/faq/).

= Digg/Yahoo Buzz Only Features: =

* Media Scan Feature - Use multiple types of media [See Faq](http://wordpress.org/extend/plugins/s-buttonz/faq/).

= Digg Only Features: =

* Choose between auto created JavaScript buttons or custom CSS buttons (API mode)

* digg threshold option with API mode

= Features Planned or in Development: =

* API generated topic list (Digg Only)

* Other Social Media Buttons

== Installation ==

1. Upload the "S-ButtonZ" folder to the "/wp-content/plugins/" directory
2. Activate the plugin through the "Plugins" menu in WordPress
3. Click "Setting" tab and find a link to "S-ButtonZ" options
4. Fill out the options

== Frequently Asked Questions ==

= Which version of WordPress is supported? =

WordPress 2.7.x to 2.8.x is currently supported.

This plugin has not been tested on any versions before 2.7.

= How do I hide a button on a single post or page? =

Include the following code in your post or page:

For Digg buttons:
&lt;!--diggZ=none--&gt;

For dZone buttons:
&lt;!--dzoneZ=none--&gt;

For Facebook buttons:
&lt;!--faceZ=none--&gt; 

For reddit buttons:
&lt;!--reddZ=none--&gt;

For Yahoo Buzz! buttons:
&lt;!--buzzZ=none--&gt;

= What is the Media Scan Feature Used For? (Digg/Yahoo Buzz Only) =

Digg and Yahoo Buzz submissions are either submitted as news, images or videos. In the admin settings you may only choose one default media value for each button type (IE. Digg, Buzz). If you have a page or post that needs to use a different type of media other than the chosen default then you will need to utilize the media scan feature. All you will need to do is include one of the following html comments in your post or page.

&lt;!--SBZ=news--&gt; OR &lt;!--SBZ=image--&gt; OR &lt;!--SBZ=video--&gt;

Note: If you used the old digg/yahoo buzz scan feature your pages will need to be updated to the new html comments above in order to work correctly.

= Can I manually place my buttons? =

Yes, use the following shortcode in your post where you would like your button to appear.

[SButtonZ button="BUTTON"]

Replace BUTTON with one of the following, digg, dzon, face, redd, yaho

= Where Can I Submit Feature Requests and Bug Reports? =

You may submit feedback and bug reports via our [feedback forum](http://feedback.rswr.net/pages/s_button_z)

== Screenshots ==

None for now

== ChangeLog ==

= 1.1.5 - 9/17/09 =

* Fixed a bug causing Digg API buttons to sometimes display an inaccurate amount of diggs or none at all. 
* Fixed the incorrect submission link bug for Digg API Buttons.

= 1.1.4 - 6/13/09 =

* Added manual button placement with new shortcode [See Faq](http://wordpress.org/extend/plugins/s-buttonz/faq/).
* Updated the CSS for boxes to fix visual glitch

= 1.1.3 - 5/16/09 =

* Fixed an issue where certain text in a summary would break other button settings
* Fixed the blank topic issue for digg API buttons

= 1.1.2 - 5/05/09 =

* Fixed PHP4 compatibility issue - digg API should now work with PHP4.4+

= 1.1.1 - 5/03/09 =

* Added New Social Media Buttons: Facebook Share Buttons
* Fixed media format bug
* Fixed API graphic link for custom digg buttons
* Digg API box will now disappear if digg is unselected with digg API left on

= 1.1.0 - 5/02/09 =

* Added Digg API (Beta)
* Added custom digg CSS buttons (Digg API)
* Added digg threshold option (Digg API)
* Changed bottom positioning to stack side by side

= 1.0.6 - 3/21/09 =

* Minor code clean up fix

= 1.0.5 - 3/19/09 =

* Emergency Bug Fix: Fixed an issue that called an option before it even existed.

= 1.0.4 - 3/19/09 =

* Major code cleanup, code was cleaned up to speed up admin backend and button loading. (Anyone upgrading will need to reset their settings, due to the code changes, my apologies.)

= 1.0.3 - 3/18/09 =

* Media scan updated to work properly for both digg/yahoo buzz buttons. Now only uses one html comment for both.
* Minor code clean up.

= 1.0.2 - 2/24/09 =

* Minor JS Adjustments
* Minor CSS Adjustments
* Added ChangeLog Information to Admin

= 1.0.1 - 2/22/09 =

* Path fix for JavaScript File

= 1.0.0 - 2/21/09 =

* Initial Release
