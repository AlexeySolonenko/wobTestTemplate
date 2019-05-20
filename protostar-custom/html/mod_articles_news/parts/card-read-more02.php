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
<div class=" mb-4 card rounded-0 border-left-0 border-right-0 border-top border-bottom border-danger shadow-sm <?php echo $col; ?> h-100">
    <div class="card-header w-100 bg-success">
        <h5 class="text-center font-weight-bold  text-white"><?php echo $item->title; ?></h5>
    </div>
    <div class="mt-2 row justify-content-center align-items-center h-25 ">
        <div class="col-12 h-100 text-center">
            <img 
                <?php // class="d-block  w-100 " ; ?>
                class=' img-fluid h-100 rounded-circle '
                alt="<?php echo $item->imageAlt; ?>" 
                src="<?php echo $item->imageSrc; ?>"
                >
        </div>
    </div>
    <div class="card-body fixed-height-70">
 
        
        <?php if (!empty($item->imageCaption)) : ?>
            <p class="card-text text-center px-2"><?php echo $item->imageCaption; ?></p>
        <?php endif; ?>
        <?php if (!empty($item->jcFields['image-description']->rawvalue)) : ?>
            <p class="card-text text-justify px-2"><?php echo $item->jcFields['image-description']->rawvalue; ?></p>
        <?php endif; ?>
     
    </div>
    <?php //echo "<pre>".print_r(($item),true)."</pre>"; ?>
    <?php if(!empty($urls->urla)): 
        $urla = $urls->urla;
        $urlatext = $urls->urlatext; ?>
    
   
    <?php
        endif; 
        $urls = []; ?>
       
</div>

<?php 

?>