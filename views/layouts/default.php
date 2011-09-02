<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title><?php echo $pageTitle ?></title>
<?php

if (isset($requiredCss)) {
  foreach ($requiredCss as $css => $use) {
    echo '<link rel="stylesheet" href="' . WWW_CSS_PATH . $css . '" type="text/css" media="all" charset="utf-8" />' . "\n";
  }
}

if (isset($requiredJs)) {
  foreach ($requiredJs as $js => $use) {
    echo '<script type="text/javascript" language="javascript" charset="utf-8" src="' . WWW_JS_PATH . $js . '"></script>' . "\n";
  }
}

?>
</head>
<body>
  <div class="topbar">
    <div class="fill">
      <div class="container">
        <h3><a href="/">Pantos World</a></h3>
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/user/signin">Signin</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="hero-unit">
     <h1>Welcome to Pantos world!</h1> 
    </div>
   <!-- Example row of columns -->
    <div>
      <div class="span6">
       <?php echo $layoutContent ?>
      </div>
    </div>

    <footer>
      <p>&copy; Company 2011</p>
    </footer>
  </div>

</body>
</html>
