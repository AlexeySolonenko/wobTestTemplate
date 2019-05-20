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
try {
    if (empty($urls)) {
        $urls = json_decode($item->urls);
    }
} catch(\Exception $e){
    $urls = [];
}
//echo "<pre>".print_r($params,true)."</pre>";
?>
<?php /* <div class=" <?php echo $col;?> card "> */ ?>
<div class=" mb-4 card border border-danger shadow-sm <?php echo $col; ?>">

    
    <img 
        <?php // class="d-block  w-100 " ; ?>
        class='card-img-top '
        alt="<?php echo $item->imageAlt; ?>" 
        src="<?php echo $item->imageSrc; ?>"
        >
   
    <div class="card-body">

        <h5 class="card-title"><?php echo $item->title; ?></h5>
        <?php if (!empty($item->imageCaption)) : ?>
            <p class="card-text"><?php echo $item->imageCaption; ?></p>
        <?php endif; ?>
        <?php if (!empty($item->jcFields['image-description']->rawvalue)) : ?>
            <p class="card-text"><?php echo $item->jcFields['image-description']->rawvalue; ?></p>
        <?php endif; ?>
     
    </div>
    <?php //echo "<pre>".print_r(($item),true)."</pre>"; ?>
    <?php if(!empty($urls->urla)): ?>
        <div class="card-footer bg-danger   ">
                <a 
                    href="<?php echo $urls->urla; ?>"
                    ><h5 class="text-white text-center "><?php echo $urls->urlatext; ?></h5></a>
        </div>
   
    <?php
        endif; 
        $urls = []; ?>
       
</div>

<?php 

?>