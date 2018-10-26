# RGDeuce WordPress Skeleton 2.0

This is the repo for RGDeuce Skeleton. The base theme for RGDeuce Group Wordpress sites.

## Creating the Repo
 Clone this repo:

    git clone git@github.com:rayhova/Starter-Template.git

## Theme  Installation
If you are going to rename your theme, NOW is the time to do say. Rename the understrap folder. And change the 'Theme Name, Theme URI, description, Author & Author URI ' in style.css

Go into your WP admin backend 
1. Go to "Appearance -> Themes"
2. Activate the UnderStrap (Or newly named) Theme


## Installing Node Modules

The last command line step is to install the node modules for the project. Navigate into the the `understrap(or newly named)` directory located in `wp-content`. 

run `npm install`

This will install all your node modules.


 Then run:
 `gulp copy-assets`

 ## Editing Styles

 To work and compile your Sass and JS files on the fly start:

- `$ gulp watch`

located in THEME_NAME>src>js there is a file 'custom-javascript.js'. Gulp watch will compile that file when changes are made. Custom Javascript should go there