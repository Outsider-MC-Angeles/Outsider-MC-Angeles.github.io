<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OMC</title>
<meta name="generator" content="WYSIWYG Web Builder 19 - https://www.wysiwygwebbuilder.com">
<link href="240228_OMC.css" rel="stylesheet">
<link href="testtest.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
</head>
<body data-bs-spy="scroll">
<div id="container">

<div id="wb_CssMenu1" style="position:absolute;left:127px;top:13px;width:671px;height:40px;z-index:1;">
<ul id="CssMenu1" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="./index.html" target="_self">Home</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./history.html" target="_self">History</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./events.html" target="_self">Events</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./BGBNF.html" target="_self">BGBNF</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./111-shop.html" target="_self">111-Shop</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./gallery.html" target="_self">Gallery</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./links.html" target="_self">Links</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./contact.html" target="_self">Contact</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="./disclaimer.html" target="_self">Disclaimer</a>
</li>
</ul>
</div>
<div id="wb_Image1" style="position:absolute;left:69px;top:98px;width:144px;height:171px;z-index:2;">
<img src="images/OMC_patch_001.png" id="Image1" alt="" width="144" height="172"></div>
<div id="wb_Text1" style="position:absolute;left:255px;top:93px;width:521px;height:12px;z-index:3;">
<p style="font-size:11px;line-height:12px;">Double click to edit</p></div>
<div id="wb_Extension1" style="position:absolute;left:255px;top:138px;width:263px;height:16px;z-index:4;">
<span style="background-color:#808080;color:#FFFFFF;font-family:Verdana;font-size:11px;">
<?php
   $file = fopen('counter.txt', 'r');
   $data = fread($file, filesize('counter.txt'));
   fclose($file);
   if ($data !== false)
   {
      $hits = intval($data);
      $hits++;
      $file = fopen('counter.txt', 'w');
      flock($file, LOCK_EX);
      fwrite($file, $hits);
      flock($file, LOCK_UN);
      fclose($file);
   }
   echo "This page has been visited $hits times!";
?>
</span>
</div>
</div>
</body>
</html>