All the things inside wp-content > themes > lapizzeria are created by own code, check that out to know about wordpress

Readme
======
1. Change wp_debug in wp-config.php into true for development
2. To add theme, create new folder in /wp-content/themes
Create style.css and index.php inside the theme folder
3. Add some comment into style.css
/*
    Theme Name: La Pizzeria
    Theme URI:
    Author: Wong
    Author URI:
    Description: Theme for Restaurant
    Version: 1.0
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/glp-2.0.html
    Tags: restaurant, mobile first, responsive, pizza
    Text Domain: lapi
*/
4. Echo something in the index.php
5. Activate the theme in admin dashboard and you will see the page
6. Search for wordpress hierarchy for the structure
7. Create functions.php, call wp_head() in header.php, wp_footer() in footer.php for script

To add style for custom page
============================
1. admin dashboard > the things > screen options > tick slug
2. create a page page-$slug.php for that e.g. page-about-us.php

The other way
1. create new php, name it whatever you want
2. Comment this in the php file
/*
    Template Name: [name you want]
*/
3. Go to admin dasboard > page > custom templates > select it

Different class for different page
==================================
1. In the body tag add <?php body_class() ?>
2. It will generate class accordingly for each page

To user alternative header 
==========================
1. Create a filename header-[customName]
2. use <?php get_header('customName'); ?>

Easily custom class name for different page
===========================================
1. class="<?php the_ID(); ?>"

Set custom front page and blog page
===================================
1. Create pages
2. Go to Settings > Reading > tick "A static page" and select the page you want accordingly

To generate thumbnail based on fixed size
=========================================
1. Go to functions.php, add this line of code
add_image_size('featured', 1100, 418, true);
Can use it like the_post_thumbnail('featured');

2. Search for wordpress plugin, regeneral thumnails
3. Install and active
4. Go to Tools > Regenerate Thumbnails > Click the regenerate button

Customize read more lines
=========================
1. Go to the post, edit and insert read more from the menu
2. use the_content(); instead of the_excerpt();

Wordpress Installation Guide
============================
1. Download wordpress in wordpress.org
2. Move it into localhost htdocs
3. Create your own database
4. Go to the wordpress localhost and run the Installation
Default credentials for xampp database:
username = root
password =
host name = localhost
5. Notice inside the database, there will be new tables added
6. Success

Plugin for VSCode
=================
1. Wordpress Snippet

PHP
========
1. count($array)
2. strlen($string)
3. str_replace($textToReplaced, $newText, $string)
4. strtoupper($string)
5. password
6. array_push($arrayVariable, $data); <<< push into array
7. unset($arrayVariable[0]); <<< remove from array with index
8. var_dump($array) and print_r($array) <<< to format url in displaying
echo "<pre>";
print_r($array);
echo "</pre>";

CSS
===
1. vertical-align: middle works with display: table-cell
2. Menu bar alignment also can be done by table-cell display, check in the style.css