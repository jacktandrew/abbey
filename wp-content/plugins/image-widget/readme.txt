=== Image Widget ===
Contributors: moderntribe, peterchester, mattwiebe, Produced by Modern Tribe, Inc.
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4BSPTNFFY6AL6
Tags: widget, image, ad, banner, simple, upload, sidebar, admin, thickbox, resize
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 3.2.11

== Description ==

Simple image widget that uses native Wordpress upload thickbox to add image widgets to your site.

* MU Compatible
* Handles image resizing and alignment
* Link the image
* Title and Description
* Very versatile.  All fields are optional.
* Upload, link to external image, or select an image from your media collection using the built in thickbox browser.
* Language Support for German, Portuguese, Swedish and French (feel free to contribute other languages)
* Supports override of template so that you can override the template for your theme!
* Supports HTTPS

This plugin is actively supported and we will do our best to help you. In return we simply as 3 things:

1. Help Out. If you see a question on the forum you can help with or have a great idea and want to code it up and submit a patch, that would be just plain awesome and we will shower your with praise. Might even be a good way to get to know us and lead to some paid work if you freelance.  Also, we are happy to post translations if you provide them.
1. Donate - if this is generating enough revenue to support our time it makes all the difference in the world
https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4BSPTNFFY6AL6

== Installation ==

= Install =

1. Unzip the `image-widget.zip` file. 
1. Upload the the `image-widget` folder (not just the files in it!) to your `wp-contents/plugins` folder. If you're using FTP, use 'binary' mode.

= Activate =

1. In your WordPress administration, go to the Plugins page
1. Activate the Image Widget plugin and a subpage for the plugin will appear
   in your Manage menu.
1. Go to the Appearance > Widget page and place the widget in your sidebar in the Design

If you find any bugs or have any ideas, please mail us.

Please visit the forum for questions or comments: http://wordpress.org/tags/image-widget/

= Requirements =

* PHP 5.1 or above
* WordPress 3.0 or above

== Documentation ==

The built in template can be overridden by files within your template.

= Default vs. Custom Templates =

The Image Widget comes with a default template for the widget output. If you would like to alter the widget display code, create a new folder called "image-widget" in your template directory and copy over the "views/widget.php" file.

Edit the new file to your hearts content. Please do not edit the one in the plugin folder as that will cause conflicts when you update the plugin to the latest release.

New in 3.2: You may now also use the "sp_template_image-widget_widget" filter to override the default template behavior for .php template files. Eg: if you wanted widget.php to reside in a folder called my-custom-templates/ and wanted it to be called my-custom-name.php:

`add_filter('sp_template_image-widget_widget', 'my_template_filter');
function my_template_filter($template) {
	return get_template_directory() . '/my-custom-templates/my-custom-name.php';
}`

== Changelog ==

= 3.2.11 =

* Yet another minor JS fix to hopefully address issues of lightbox not working

= 3.2.10 =

* Fix JS typo.

= 3.2.9 =

* Minor JS fix to hopefully address issues of lightbox not working
* Use new the new [jQuery.fn.on](http://api.jquery.com/on/) method for forward compatibility.

= 3.2.8 =

* Minor bugfix courtesy of Takayuki Miyauchi (@miya0001)
* Polish translation courtesy of Łukasz Kliś

= 3.2.7 =

* Update javascript to work with the new version of WordPress (thanks Matt Wiebe!!! @mattwiebe)
* Added Japanese translation courtesy of Takayuki Miyauchi (@miya0001)

= 3.2.6 =

* Add HTTPS support courtesy of David Paul Ellenwood (DPE@SGS)

= 3.2.5 =

* Added Swedish translation courtesy of Tomas Lindhoff (@Tomas)

= 3.2.4 =

* Added javascript conflict prevention code thanks to @rcain.

= 3.2.3 =

* Added French translation courtesy of Dominique Corbex (@Domcox)

= 3.2.2 =

* Added Portuguese translation courtesy of Gustavo Machado

= 3.2.1 = 

* Fix image widget public declaration bug.

= 3.2 =

* Abstract views for widget output and widget admin.  
* Support theme override of the widget output!  Now you can layout the widget however you'd like.
* Added filter to override template call.

= 3.1.6 =

* Fixed Wordpress 3.0 bugs. (Thanks @kenvunz)

= 3.1.5 =

Fixed PHP 5 bug.  Removed 'public' declaration. http://wordpress.org/support/topic/362167  Thanks @mpwalsh8, @jleuze, @PoLaR5, @NancyA and @phoney36

= 3.1.4 =

* Added support for ALT tags.  If no alt tag is entered the title is used.

= 3.1.3 =

* Added German language support (Thank you Rüdiger Weiß!!!)

= 3.1.2 =

* Fix bug: XHTML Compliance (thanks HGU for offering a patch and thanks @webmasterlistingarts for filing the bug)
* Replaced `<p>` with `<div>` in description to also improve XHTML compliance.

= 3.1.1 =

* Fix bug: php4 reported error: PHP Parse error:  syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION or T_FUNCTION or T_VAR or '}' (thanks @natashaelaine and @massimopaolini)

= 3.0.10 =

* Fix bug: improve tab filters.

= 3.0.9 =

* Fix bug: update tabs filter to not kill tabs if upload window is for non widget uses.

= 3.0.8 =

* Remove the "From URL" tab since it isn't supported.
* Replace "Insert into Post" with "Insert into Widget" in thickbox.

= 3.0.7 =

* Fix Dean's Fcuk editor conflict. (Thanks for the report Laurie @L_T_G)
* Fix IE8 bug (Remove extra comma from line 66 of js - thanks for the report @reface)
* Update functions and enqueued scripts to only trigger on widget page.

= 3.0.6 =

* Fix crash on insert into post.

= 3.0.5 =

Thank you @smurkas, @squigie and @laurie!!!  Special thanks to Cameron Clark from http://prolifique.com a.k.a @capnhairdo for contributing invaluable javascript debugging skills and throwing together some great code.

* PHP4 compatibility
* Tighter integration with the thickbok uploader attributes including caption, description, alignment, and link
* Tighter image resize preview
* Add Image link becomes "Change Image" once image has been added

= 3.0.4 =

* Minor description changes

= 3.0.3 =

* Fixed the broken "Add Image" link (THANK YOU @SMURKAS!!!)

= 3.0.2 =

* Added PHPDoc comments
* Temporarily fixed install bug where no image is saved if resize is not working. (thank you Paul Kaiser from Champaign, Il for your helpful QA support)

= 3.0.1 =

* Added 'sp_image_widget' domain for language support.

= 3.0 =

* Completely remodeled the plugin to use the native wordpress uploader and be compatible with Wordpress 2.8 plugin architecture.
* Removed externalized widget admin.

= 2.2.2 =

* Update <li> to be $before_widget and $after_widget (Thanks again to Lois Turley)

= 2.2.1 =

* Update `<div>` to be `<li>` (Thanks to Lois Turley)

= 2.2 =

* Fixed missing DIV close tag (Thank you Jesper Goos)
* Updated all short tags to proper php tags (Thank you Jonathan Volks from Mannix Marketing)

= 2.1 =

* Link Target

= 2.0 =

* Multi widget support
* WP 2.7.1 Compatibility
* Class encapsulation

== Screenshots ==

1. Image Widget admin screen.
1. Thickbox uploader for the Image Widget
1. Image Widget on the front of a plain Wordpress install.

== Frequently Asked Questions ==

= Where do I go to file a bug or ask a question? =

Please visit the forum for questions or comments: http://wordpress.org/tags/image-widget/