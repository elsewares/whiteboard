# Whiteboard Framework 3.0.2

## Overview

This is my git repo of the Whiteboard Framework (v.3.0.2) for Wordpress >3.0.2.  The contents of the readme.rtf are pasted below for clarity.

Whiteboard
Version 3.0.2

Description
  The Whiteboard Famework for Wordpress is built to speed up the process of developing a Wordpress theme. Whiteboard does so by eliminating the time spent on Wordpress' backend PHP that is common to all Wordpress powered Web site.

Copyright
  The Whiteboard Framework is licensed under the GPL license. Feel free to use the Whiteboard Framework for commercial and non-commercial ventures. We only require a link in the CSS and greatly appreciate a link somewhere on the Web site.

Compatibility
  Current known compatibility is with Wordpress 3.0 to Wordpress 3.0.1
  Compatibility with earlier versions or Wordpress is currently unknown.


Files Included:
  404.php, archives.php, author.php, category.php, comments.php, footer.php, functions.php, header.php, index.php, page.php, search.php, sidebar.php, single.php, style.css, tag.php


Planned Updates:
  attachment.php
  Additional documentation
  Built in drop down menus
  Possible additional sticky support
  Implement a Loop file
  Gallery content type and page

Bugs
  Possible Minor bug: trackbacks not outputting correctly or at all. need verification.



Update Log:

version 3.0.2
  Added HTML5 Tags: <header>, <footer>, <nav>, <article>
    Includes the Google HTML5 Shim to ensure Cross Browser Compatibility - http://code.google.com/html5shim/
    HTML5 helps improve SEO, if not today, then in the future
  Fixed some minor indentation issues
  Updated the list of styles in style.css

version 3.0.1
  Additional documentation within the code
  Stronger SEO

version 3.0
  Almost complete re-development
    Re-built the loop
    Added dynamic classes to the header
  Rebuilt the div structure
    Added additional dynamic div classes and ids
    Added divs for stronger structure
  Adjusted the CSS IDs and Classes for greater consistency
  Wigitized the footer, header, beginning of the home page
  Added notes throughout
  Featured Image Support (requires WP 2.9 or greater)
  Supports Custom Menus
    Currently has three menu locations, the header, sidebar, and footer
  Supports Custom Backgrounds, requires WP 3.0 or greater
  Custom "Read More" text for post excerpts
  Added support for the virtually never pagination
  Completely reworked comments.php
    Cleaner structure
    Isolates Trackbacks
    Advanced Author Comment Styling
  Increased SEO Friendliness
    Improved Dynamic Title
    Dynamic meta tags: keywords & description
    Added <link rel="index">
    Dynamic title="" tags
    Added link:
      canonical - to help prevent duplicate content issues
      rss - to help alert google and increase subscriptions
      atom-rss - to provide rss options
    Added dynamic text throughout the site for additional SEO value
    Only the home page and post page contains the entire post, to reduce the chance of duplicate content problems
    And More
  Automatic Short URL from TinyURL
  Additional post and page meta info
  Minor bug fixes
  Improved search results page
  More intelligent Tags and Categories page
  Added space to the code
  Verbiage Improvements
  Child theme included with dummy-proofing
  Conforms to Wordpress' CSS Standards - http://codex.wordpress.org/CSS_Coding_Standards
  Converted classes and IDs from camelCase to hyphenated
  Added a mini admin navigation if logged in
  Uses the post_password_required function instead of the depreciated cookie check on comments.php
  Added category descriptions to the category pages
  Added tag descriptions to the tag pages
  Code optimized for speed
  Comforms to Wordpress' PHP Standards

version 2.1
  Minor structure adjustments
    <div>s added
    classes added
  Minor bug fix

version 2.0
  Overall re-working
  Comment page re-worked and bugs fixed
    Admin comments now better declared
    Separation of comments and trackbacks added
  New socialization links, others optional
  Categories.php and archives.php removed, there was no need for them
  Many minor bug/styling issues resolved
  <div> list updated in the CSS file
  Compatible with Wordpress 2.8

version 1.5
   Updated the <title>

version 1.4
   Added a missing <div> tag to single.php
   Added a list of the included divs

versions 1.3 and earlier are not listed in the Update Log

