=== WP Accessible Twitter Feed ===
Contributors: rianrietveld
Tags: twitter, tweets, accessible, accessibility, WCAG, WCAG 2, a11y
Requires at least: 3.0
Tested up to: 4.6
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds an accessible Twitter feed widget, compliant with WCAG 2, requires PHP5.

== Description ==

A widget with an accessible Twitter feed. Validates for WCAG 2.0. This plugin requires PHP5.

== Installation ==

You can install WP Accessible Twitter Feed using the built in WordPress plugin installer by uploading the .zip file. If you download WP Accessible Twitter Feed manually, make sure it is uploaded to /wp-content/plugins/.

Activate the WP Accessible Twitter Feed in the "Plugins" admin panel using the "Activate" link. Setting are included in the widget.

The Twitter feed authorization can be set in the menu item Setting -> Twitter Feed Auth.

How to get the authorization Keys and Access Tokens:

* log in with your Twitter account data at https://dev.twitter.com/apps
* select "create a new application"
* fill out your name/description/website
* agree on the Rules Of The Road
* select Create your Twitter application
* select Create my access token
* copy/paste the Keys and Access Tokens in the WordPress menu item Settings -> Twitter Feed Auth

== Changelog ==


= 1.2 =

* Check for already existing classes of oAuth added by other plugins. If so, the oAuth of this plugin will not be loaded.
* Renamed class StormTwitter into WPaccStormTwitter to prevent name conflicts (thanks @markdeafmcguire for reporting)
* adjusted heading structure in the admin settings page

= 1.1 =

Removed [deprecated PHP style constructor](https://make.wordpress.org/core/2015/07/02/deprecating-php4-style-constructors-in-wordpress-4-3/)


= 1.0 =

* fixed bug Undefined index: twitter_duration
* fixed bug Undefined index: twitter_include_rts
* changed name plugin from WP Accessible into WP Accessible Twitter Feed


= 0.2 =

* added Twitter API 1.1 authentication, integrating oAuth Twitter Feed for Developers by Storm Consultancy (Liam Gladdy) and the OAuth lib. You can find that at http://oauth.net
* added time posted of the tweet
* minor bug fixes


= 0.1 =

* First release

The code is based on the old Genesis Widget by StudioPress and also uses Twitter Feed for Developers by Storm Consultancy (Liam Gladdy) and OAuth for the Twitter API 1.1 authorization.

Changes made to Genesis_Latest_Tweets_Widget:

* stand alone widget
* included function genesis_tweet_linkify, renamed it wp_accessible_tweet_linkify
* removed target is _blank for links, so they don't open in a new window
* removed title attribute in links (messes up screen reader output)
* removed links on hashtags to prevent a overload of links for a tweet
* removed inline style for font-size

