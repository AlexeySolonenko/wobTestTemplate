<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$i = 0;
$mediumWidth = 3;
$medCell = round(12 / $mediumWidth,0,PHP_ROUND_HALF_DOWN);
if($medCell == 0) $medCell = 1;

$largeWidth = 4;
$largeCell = round(12 / $largeWidth,0,PHP_ROUND_HALF_DOWN);
if($largeCell == 0) $largeCell = 1;

$hidden = "w3-hide";
$len = count($list);
?>
<?php /* SMALL SCREEN SIZES 1-col wide slideshow */?>
<div class="clearfix"></div>
<hr>
<div class="w3-display-container w3-content hot-offers-flash newsflash <?php echo $moduleclass_sfx; ?>">
    <div class="w3-row-padding  ">
       
        <!-- <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle "> -->
        <!-- @TODO TO COMPLETE TEH DOTS LATER -->
        <div class="w3-col w3-hide s12 w3-large   ">
            <div class="w3-cell-row w3-center ">
                <!-- <div class="w3-cell w3-hover-text-khaki hot-offer-left">&#10094;</div> -->
                <div class="w3-cell"></div>
                <div class="w3-cell">
                    <div class="w3-cell-row ">
                        <?php foreach ($list as $item) : ?>
                            <span 
                                class="w3-badge w3-cell direct-access-small w3-border w3-light-gray w3-hover-dark-gray "
                                data-width="<?php echo 1; ?>"
                                >&nbsp;</span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="w3-cell">
                    <div class="w3-cell-row ">
                        <?php $i = 0; ?>
                        <?php if($len > $mediumWidth): ?>
                            <?php foreach ($list as $item) : ?>
                                <?php if($i == 0 || ($i > 1 &&  $i % $mediumWidth == 0 ) ): ?>
                                    <span 
                                        class="w3-badge w3-cell direct-access-medium w3-border w3-light-gray w3-hover-dark-gray "
                                        data-width="<?php echo $mediumWidth; ?>"
                                        >&nbsp;</span>
                                <?php endif; ?>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="w3-cell">
                <div class="w3-cell-row ">
                        <?php $i = 0; ?>
                        <?php if($len > $largeWidth): ?>
                            <?php foreach ($list as $item) : ?>
                                <?php if($i == 0 || ($i > 1 &&  $i % $largeWidth == 0 ) ): ?>
                                    <span 
                                        class="w3-badge w3-cell direct-access-large w3-border w3-light-gray w3-hover-dark-gray "
                                        data-width="<?php echo $largeWidth; ?>"
                                        >&nbsp;</span>
                                <?php endif; ?>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="w3-cell"></div>
                <!-- <div class="w3-cell w3-hover-text-khaki hot-offer-right">&#10095;</div> -->
            </div>
        </div>

        <div class="w3-col s12">

            <div class="w3-row-padding w3-stretch ">
                <?php $hidden = ($len > 1 ? "w3-hide ":"" ); ?>
                <?php foreach ($list as $item) : ?>
                    <div 
                        class="w3-col 
                            <?php echo $hidden; ?> 
                            hot-offers-slides-small w3-animate-right  
                            s12 " 
                            data-width="<?php echo 1; ?>" ><?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item-hot-offers'); ?></div>
                <?php endforeach; ?>
            </div>

            <div class="w3-cell-row ">
                <?php $hidden = ($len > $mediumWidth ? "w3-hide ":"" );?>
                <?php foreach($list as $item) : ?>
                    <div 
                        class="w3-col 
                        <?php echo $hidden; ?> 
                        hot-offers-slides-medium w3-animate-right  
                        s<?php echo $medCell;?>" data-width="<?php echo $mediumWidth; ?>" ><?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item-hot-offers'); ?></div>
                <?php endforeach; ?>
            </div>

            <div class="w3-cell-row ">
                <?php $hidden = ($len > $largeWidth ? "w3-hide ":"" ); ?>
                <?php foreach ($list as $item) : ?>
                    <div 
                        class="w3-col <?php echo $hidden; ?> 
                        hot-offers-slides-large w3-animate-right  
                        s<?php echo $largeCell;?>" 
                        data-width="<?php echo $largeWidth; ?>" ><?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item-hot-offers'); ?></div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
        <script>
            var root = document.currentScript.parentNode;
            var smallDots = root.querySelectorAll(".direct-access-small");
            var mediumDots = root.querySelectorAll(".direct-access-medium");
            var largeDots = root.querySelectorAll(".direct-access-large");
            var smallSlides = root.querySelectorAll(".hot-offers-slides-small");
            var mediumSlides = root.querySelectorAll(".hot-offers-slides-medium");
            var largeSlides = root.querySelectorAll(".hot-offers-slides-large");
            var slides = [smallSlides, mediumSlides, largeSlides];
            var dots = [smallDots,mediumDots,largeDots];
            for(var i = 0; i < dots.length; i++) if(dots[i].length === 0) dots[i] = false;

            //var left = root.querySelector('.hot-offer-left');
            //var right = root.querySelector('.hot-offer-right');
            // console.log(largeSlides);
            // console.log(smallDots);
            // console.log(mediumDots);
            // console.log(largeDots);
    
            //if (root && dots && slides && left && right && slideIndex) {
            
            showOneOutOfCollection(0,smallSlides, smallDots,null,null);
            showOneOutOfCollection(0,mediumSlides, mediumDots,null,null);
            showOneOutOfCollection(0,largeSlides, largeDots,null,null);

            function showOneOutOfCollection(startIndex = false,col,dots,prev = false,next = false){
                console.log(arguments);
                if(!col || col.length < 1 || !dots || dots.length < 1) return;

                var currentStart = 0, i = 0, count = 0,width = 0, end = 0;
                var startFound = false;
                /* reset dots  */
                for(i = 0; i < dots.length; i++) {
                    dots[i].classList.remove('w3-dark-gray');
                    dots[i].classList.add('w3-light-gray');
                }
                /* if startIndex exists in current list, treat it as current start */
                if(startIndex && col[startIndex] && col[startIndex] !== undefined){
                    currentStart = startIndex;
                    startFound = true;
                }
                /* find width and reset slides */
                for(var i = 0; i < col.length; i ++){
                    width = col[i].getAttribute('data-width');
                    if(col[i].classList.contains('w3-hide') == false && !startFound){
                        currentStart = i;
                        startFound = true; 
                    }
                    col[i].classList.add('w3-hide');
                }
                width = parseInt(width);

                if(prev) {
                    startIndex = currentStart -1;
                } else if(next) {
                    startIndex = currentStart + 1;
                } else if(!startIndex && startIndex !== 0) startIndex = 0;
                
                if(startIndex >= col.length) startIndex = 0;
                if(startIndex <0) startIndex = col.length -1;

                /* reset sub-icons wisibility */
                
                end = startIndex + width;
                if(col.length < end) end = startIndex + width - col.length;
                console.log("current start: " + currentStart + ", startIndex: " + startIndex+ ", end: " + end + ", width: " + width);

                var parent = col[0].parentNode;
                console.log(parent);
                var indexes = [];
                
                for(i = 0; i < col.length; i++) {
                    if(( startIndex < end && i >= startIndex && i < end) || (startIndex > end && (i >= startIndex) )) {
                        col[i].classList.remove('w3-hide');
                        indexes.push(i);
                    }
                }

                for(i = 0; i < col.length; i++) {
                    if(startIndex > end && i < end ) {
                        col[i].classList.remove('w3-hide');
                        indexes.push(i);
                    }
                }

                for(i = 0; i < col.length; i++) {
                    if(( startIndex < end && (i < startIndex || i >= end) ) || (startIndex > end && (i < startIndex && i >= end) )) {
                        indexes.push(i);
                    }
                }
                var newNodes = [];
                //indexes = indexes.reverse();
                for(i = 0; i < col.length; i++){
                    //parent.replaceChild(parent.children[indexes[i]],parent.children[i]);
                    //parent.insertBefore(parent.children[indexes[i]],parent.children[i]);
                    newNodes.push(col[indexes[i]].cloneNode(true));
                }
                while(parent.firstChild)parent.removeChild(parent.firstChild);
                for(i = 0; i < col.length; i++){
                    newNodes[i].addEventListener('click',showOneOutOfCollection.bind(null,null,newNodes,dots,null,true));
                    parent.appendChild(newNodes[i]);
                }
         
                var activeDotIndex = parseInt(startIndex / width);
                if (dots && dots[activeDotIndex] && dots[activeDotIndex] !== undefined) {
                    dots[activeDotIndex].classList.remove('w3-light-gray');
                    dots[activeDotIndex].classList.add('w3-dark-gray');
                }

                for(var j = 0; j < dots.length; j++){
                    if (dots[j]) {
                        dots[j].addEventListener('click', showOneOutOfCollection.bind(null, j*width, newNodes, dots,null,null));
                    }
                }

            }


            for (i = 0; i < dots.length; i++) {
                if(!dots[i] || dots[i].length === 0) continue;
                var width = parseInt(dots[i][0].getAttribute('data-width'));
                for(var j = 0; j < dots[i].length; j++){
                    if (dots[i] && dots[i][j]) {
                        dots[i][j].addEventListener('click', showOneOutOfCollection.bind(null, j*width, slides[i], dots[i],null,null));
                    }
                }
            }
            
            for (i = 0; i < slides.length; i++) {
                if(!slides[i] || slides[i].length === 0) continue;
                for(j = 0; j < slides[i].length; j++){
                    if(slides[i]&& slides[i][j]){
                        slides[i][j].addEventListener('click',showOneOutOfCollection.bind(null,null,slides[i],dots[i],null,true));
                    }
                }
            }
            

        </script>
</div>
<div class="clearfix"></div>
