Initializr theme for Wolf CMS
========================

About
=====
Initializr is Wolf CMS theme based on the Initializr HTML 5 template. It includes:
HTML5 Boilerplate, Bootstrap, Modernizr, jQuery

Installation
============
This assumes you have installed Wolf CMS.

1. Download Initializr template form http://www.initializr.com/. Choose there Bootstrap and:
   1.1 Responsive Bootstrap,
   1.2 Modernizr,
   1.3 IE Classes,
   1.4 Chrome Frame,
   1.5 Favicon,
   1.6 plugins.js,
   1.7 Google Analytics - if you need it.

3. Unzipp Initializr archive into your new <your-site>/public/themes directory.

4. Override main.css file in <your-site>/public/themes/initializr with the file css/main.css provided with this repository.

5. Navigate to the Layouts tab of the Wolf admin.
   5.1 Click on "New Layout" (right side of the screen).
   5.2 Fill in the boxes: "Name" = initializr | "Content-type" = text/html
   5.3 Return to the repository; open the file layouts/layout.php in a text editor; select ALL the contents, COPY to your clipboard.
   5.4 Go back to the new initializr layout in your Wolf admin; PASTE the contents of the layout file into "Body".
   5.5 Click the "Save" button at the bottom of the page.

6. For proper display of this theme, you will need to edit, create some snippets, use the code supplied for your Homepage and add some helpers.
   6.1 Navigate to the Snippets tab of the Wolf admin.
   6.2 Open header snippet, delete its contents and paste there the contntes of the file snippets/header.php. Do the same for footer snippet.
   6.3 Click on "New snippet" (right side of the screen).
   6.4 Fill in the boxes: "Name" = "menu" | "Body" = contents of the file snippets/menu.php.
   6.5 Repeat previous two steps (6.3-6.4) for "Name" = "hero" | "Body" = contents of the file snippets/hero.php.
   6.6 Open the Homepage for editing. Create a new "tab" (page-part) called "default code" and cut/paste the current "body" tab into it.
   6.7 With the "body" tab now empty, copy the contents of the pages/home.php file into it. Save and Close.
   6.8 Copy the file helpers/CreateUrl.php to <your-site>/wolf/helpers directory.

7. To use this template with your Wolf site:
   7.1 Go to the Homepage and open it for editing. Go to the settings tab of the page and find the "Layout" drop-down selector.
   7.2 Click on the "v" arrow to open the drop-down list, click on "initializr".
   7.3 Click on the "Save and Close" button below it.

Read more
============

1. Wolf CMS main page - http://www.wolfcms.org/
2. Wolf CMS github repository - https://github.com/wolfcms/wolfcms
3. Initializr HTML5 templates generator - http://www.initializr.com/
4. Bootstrap framework - http://twitter.github.io/bootstrap/index.html
5. HTML5 Boilerplate - http://html5boilerplate.com/ and https://github.com/h5bp/html5-boilerplate
6. Modernizr a JavaScript library that detects HTML5 and CSS3 features - http://modernizr.com/
