<?php
    header("Content-type: text/css; charset: UTF-8");
    $rgbColor = array();

    //Create a loop.
    foreach(array('r', 'g', 'b') as $color){
       //Generate a random number between 1000 and 255.
        $rgbColor[$color] = mt_rand(100, 255);
    }
    var_dump($rgbColor);
?>
/*! HTML5 Boilerplate v7.1.0 | MIT License | https://html5boilerplate.com/ */

/* main.css 1.0.0 | MIT License | https://github.com/h5bp/main.css#readme */
/*
 * What follows is the result of much research on cross-browser styling.
 * Credit left inline and big thanks to Nicolas Gallagher, Jonathan Neal,
 * Kroc Camen, and the H5BP dev community and team.
 */

 
/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */

   html {
    color: #222;
    font-size: 1em;
    line-height: 1.4;
}

/*
 * Remove text-shadow in selection highlight:
 * https://twitter.com/miketaylr/status/12228805301
 *
 * Vendor-prefixed and regular ::selection selectors cannot be combined:
 * https://stackoverflow.com/a/16982510/7133471
 *
 * Customize the background color to match your design.
 */

::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
}

::selection {
    background: #b3d4fc;
    text-shadow: none;
}

/*
 * A better looking default horizontal rule
 */

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

/*
 * Remove the gap between audio, canvas, iframes,
 * images, videos and the bottom of their containers:
 * https://github.com/h5bp/html5-boilerplate/issues/440
 */

audio,
canvas,
iframe,
img,
svg,
video {
    vertical-align: middle;
}

/*
 * Remove default fieldset styles.
 */

fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

/*
 * Allow only vertical resizing of textareas.
 */

textarea {
    resize: vertical;
}

/* ==========================================================================
   Browser Upgrade Prompt
   ========================================================================== */

.browserupgrade {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}




 /* ==========================================================================
   Author's custom styles
   ========================================================================== */

header, .header, footer, .footer {
    background: rgba(0, 255, 255, 0.9);
    padding: 5px 0 0 5px;
    width: 100%;
}

header *, .header *, footer *, .footer * {
    align-self: center;
    text-align: center;
    font-weight: bold;
    font-style: italic;
    opacity: 75%;
}

div.dpart {
    padding: 5px 0 0 10px;
    margin-top: 5px;
    width: 100%;
    opacity: 50%;
}

div.dpart p {
    color: #000000;
}
div.dpart.first {
    background: rgba(<?= implode(",", $rgbColor); ?>, 0.75);
}
<?php
    //Create a loop.
    foreach(array('r', 'g', 'b') as $color){
       //Generate a random number between 0 and 255.
        $rgbColor[$color] = mt_rand(100, 255);
    }
    var_dump($rgbColor);
?>
div.dpart.second {
    background: rgba(<?= implode(",", $rgbColor); ?>, 0.75);
}
<?php
    //Create a loop.
    foreach(array('r', 'g', 'b') as $color){
       //Generate a random number between 0 and 255.
        $rgbColor[$color] = mt_rand(100, 255);
    }
    var_dump($rgbColor);
?>
div.dpart.third {
    background: rgba(<?= implode(",", $rgbColor); ?>, 0.75);
}
<?php
    //Create a loop.
    foreach(array('r', 'g', 'b') as $color){
       //Generate a random number between 0 and 255.
        $rgbColor[$color] = mt_rand(100, 255);
    }
    var_dump($rgbColor);
?>
body {
    background: rgb(255, 200, 200) url("/img/javaBG.jpg");
}
 /* ==========================================================================
   Helper classes
   ========================================================================== */

/*
 * Hide visually and from screen readers
 */

 .hidden {
  display: none !important;
}

/*
* Hide only visually, but have it available for screen readers:
* https://snook.ca/archives/html_and_css/hiding-content-for-accessibility
*
* 1. For long content, line feeds are not interpreted as spaces and small width
*    causes content to wrap 1 word per line:
*    https://medium.com/@jessebeach/beware-smushed-off-screen-accessible-text-5952a4c2cbfe
*/

.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
  white-space: nowrap; /* 1 */
}

/*
* Extends the .visuallyhidden class to allow the element
* to be focusable when navigated to via the keyboard:
* https://www.drupal.org/node/897638
*/

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
  white-space: inherit;
}

/*
* Hide visually and from screen readers, but maintain layout
*/

.invisible {
  visibility: hidden;
}

/*
* Clearfix: contain floats
*
* For modern browsers
* 1. The space content is one way to avoid an Opera bug when the
*    `contenteditable` attribute is included anywhere else in the document.
*    Otherwise it causes space to appear at the top and bottom of elements
*    that receive the `clearfix` class.
* 2. The use of `table` rather than `block` is only necessary if using
*    `:before` to contain the top-margins of child elements.
*/

.clearfix:before,
.clearfix:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}

.clearfix:after {
  clear: both;
}

 
/* ==========================================================================
   EXAMPLE Media Queries for Responsive Design.
   These examples override the primary ('mobile first') styles.
   Modify as content requires.
   ========================================================================== */

   @media only screen and (min-width: 35em) {
    /* Style adjustments for viewports that meet the condition */
}

@media print,
       (-webkit-min-device-pixel-ratio: 1.25),
       (min-resolution: 1.25dppx),
       (min-resolution: 120dpi) {
    /* Style adjustments for high resolution devices */
}

 
/* ==========================================================================
   Print styles.
   Inlined to avoid the additional HTTP request:
   https://www.phpied.com/delay-loading-your-print-css/
   ========================================================================== */

   @media print {
    *,
    *:before,
    *:after {
        background: transparent !important;
        color: #000 !important; /* Black prints faster */
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " (" attr(href) ")";
    }

    abbr[title]:after {
        content: " (" attr(title) ")";
    }

    /*
     * Don't show links that are fragment identifiers,
     * or use the `javascript:` pseudo protocol
     */

    a[href^="#"]:after,
    a[href^="javascript:"]:after {
        content: "";
    }

    pre {
        white-space: pre-wrap !important;
    }
    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    /*
     * Printing Tables:
     * http://css-discuss.incutio.com/wiki/Printing_Tables
     */

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}


