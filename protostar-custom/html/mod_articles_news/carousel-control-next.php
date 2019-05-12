<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
if(!empty($classOverride)) $controlClass = $classOverride;
else $controlClass  = "carousel-control-next";
?>
<a 
    class="<?php echo $controlClass; ?>" 
    href="#<?php echo $id; ?>" 
    role="button" 
    data-slide="next"
    style="z-index:1020;"
    >
        <span class="carousel-control-next-icon bg-danger jumbotron" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
</a>