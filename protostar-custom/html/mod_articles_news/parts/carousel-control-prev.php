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
else $controlClass  = "carousel-control-prev";
?>
<a 
    class="<?php echo $controlClass; ?>" 
    href="#<?php echo $id; ?>" 
    role="button" 
    data-slide="prev"
    style="z-index:1020;"
    >
        <span class="carousel-control-prev-icon bg-danger jumbotron" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
</a>