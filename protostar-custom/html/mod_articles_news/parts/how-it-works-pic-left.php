<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
foreach($item->jcfields as $jcfield) {
    $item->jcFields[$jcfield->name] = $jcfield;
}

?>
<div class="row no-gutters-sm ">
<div class="col-3 col-md-5 text-right align-self-center">
        <img 
            src="<?php echo $item->jcFields['article-main-image']->rawvalue; ?>" 
            class="pr-1 img-fluid w-50  w3-hover-sepia rounded-circle" 
        />
    </div>
    <div class="col-9 col-md-7 border-left border-danger border-wide">
        <div class="row no-gutters-sm h-100">
            <div class="col-12 align-self-center text-left">
                <p class="px-2">
                    <?php echo $item->jcFields['article-title-intro-paragraph']->rawvalue; ?>
            </p>
            </div>
        </div>
    </div>
</div>
