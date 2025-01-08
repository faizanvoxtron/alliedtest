<?php

function meta($pageTitle,$pageKeywords,$pageDescription,$pageCanonical)
{?>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
     <title><?php echo $pageTitle ?></title>
     <meta name="keywords" content="<?php echo $pageKeywords ?>">
     <meta name="description" content="<?php echo $pageDescription ?>">
    <link rel="canonical" href="<?php echo $pageCanonical ?>" />
    <meta name="robots" content="index, follow">
<?php
 }
 ?>
 