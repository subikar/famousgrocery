<?php
/*------------------------------------------------------------------------
	# SM Listing Tabs - Version 2.0.1
	# Copyright (c) 2014 YouTech Company. All Rights Reserved.
	# @license - Copyrighted Commercial Software
	# Author: YouTech Company
	# Websites: http://www.magentech.com
   -------------------------------------------------------------------------*/

$config = Mage::helper('restaurant/config');
$effect_style = $config->getProductListing('effect_style');
//echo $effect_style ; die;
$display_nav = $config->getProductListing('show_nav');
$display_dot = $config->getProductListing('show_dot');

$helper = Mage::helper('listingtabs/data');
$rowCount = $this->_getConfig('row_count', 1);
if ($this->_isAjax()) {
    $type_filter = $this->_getConfig('filter_type');
    switch ($type_filter) {
        case 'categories':
            $catid = $this->getRequest()->getPost('categoryid');
            $catid = $this->getRequest()->getPost('categoryid');
            $child_items = $this->_getProductInfor($catid);
            break;
        case 'fieldproducts':
            $field_order = $this->getRequest()->getPost('categoryid');
            $catid = $this->_getCatIds();
            $child_items = $this->_getProductInfor($catid, $field_order);
            break;
    }
}

if (!empty($child_items)) {
    $i = 0;
    $k = $this->getRequest()->getPost('ajax_listingtags_start', 0);
    foreach ($child_items as $_product) {
        $k++; $i++; ?>
        <?php if( $i==1 || ($i-1)%$rowCount==0 ): ?>
        <div class="item-col">
        <?php endif; ?>

        <div class="ltabs-item new-ltabs-item">
            <div class="item-inner">
                <?php
                if ($_product->_image) {
                     $url_product = $_product->getProductUrl();
                    ?>
                    <div class="item-image box-image">
                        <?php if($effect_style == 'default'){?>
                            <div class="effect-default">
                                <a class="rspl-image"
                                   href="<?php echo $_product->link ?>">
                                    <img title="<?php echo $_product->title; ?>"
                                         alt="<?php echo $_product->title; ?>"
                                         src="<?php echo $_product->_image; ?>"/>
                                </a>
                            </div>
                        <?php } else if($effect_style == 'thumbs'){?>
                            <div class="effect-thumbs">
                                <a href="<?php echo $_product->link ?>" class="product-image">
                                    <img title="<?php echo $_product->title; ?>"
                                         alt="<?php echo $_product->title; ?>"
                                         src="<?php echo $_product->_image; ?>"/>

                                    <?php if($_product->getThumbnail() != $_product->getSmallImage()) { ?>
                                        <img class="second-image" src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(420 ,315); ?>" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" />
                                    <?php } ?>
                                </a>
                            </div>
                        <?php } else if($effect_style == 'slider'){?>
                            <div class="effect-slider">
                                <a class="rspl-image"
                                   href="<?php echo $_product->link ?>">
                                    <img title="<?php echo $_product->title; ?>"
                                         alt="<?php echo $_product->title; ?>"
                                         src="<?php echo $_product->_image; ?>"/>
                                </a>

                                <div class="image-slider-product">
                                    <div class="listing-img-slider">
                                        <?php $_media = Mage::getModel('catalog/product')->load($_product->getId())->getMediaGalleryImages() ?>
                                        <?php foreach($_media as $_img): ?>
                                            <div class="item_listing">
                                                <a href="<?php echo $url_product ?>" title="<?php echo $_product->title;?>">
                                                    <img  src="<?php echo $this->helper('catalog/image')->init($_product, 'image', $_img->getFile())->resize(270, 202.5); ?>" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true); ?>" />
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>


                            </div>
                        <?php } ?>

                        <div class="actions">

                            <?php if ((int)$this->_getConfig('product_addcart_display', 1)) { ?>
                                <?php if ($_product->isSaleable()) { ?>
<!--                                    <p class="item-addcart">-->
                                        <button type="button" title="<?php echo $this->__('Add to Cart') ?>"
                                                class="button btn-cart"
                                                onclick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')">
				 <span>
				 <span>
				 <?php echo $this->__('Add to Cart') ?>
				 </span>
				 </span>
                                        </button>
<!--                                    </p>-->
                                <?php } else { ?>
                                    <p class="availability out-of-stock">
				 <span>
				 <?php echo $this->__('Out of stock') ?>
				 </span>
                                    </p>
                                <?php } ?>
                            <?php } ?>

                            <?php if ((int)$this->_getConfig('product_addwishlist_display', 1) || (int)$this->_getConfig('product_addcompare_display', 1)) { ?>
                                <ul class="add-to-links">
                                    <?php if ((int)$this->_getConfig('product_addwishlist_display', 1)) { ?>
                                        <?php if ($this->helper('wishlist')->isAllow()) { ?>
                                            <li>
                                                <a title="<?php echo $this->__('Add to Wishlist') ?>" href="<?php echo $this->helper('wishlist')->getAddUrl($_product) ?>"
                                                   class="link-wishlist"><?php echo $this->__('Add to Wishlist') ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ((int)$this->_getConfig('product_addcompare_display', 1)) { ?>
                                        <?php if ($_compareUrl = $this->getAddToCompareUrl($_product)) { ?>
                                            <li>
                                                <span class="separator">|</span>
                                                <a title="<?php echo $this->__('Add to Compare') ?>" href="<?php echo $_compareUrl ?>"
                                                   class="link-compare"><?php echo $this->__('Add to Compare') ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>

                    </div>
                <div class="box-info">
                    <div class="item-left f-left a-left">
                        <?php
                        if ($this->_getConfig('product_title_display', 1) == 1) {
                            ?>
                            <div class="item-title product-name">
                                <a href="<?php echo $_product->link ?>" <?php echo $helper->parseTarget($this->_getConfig('product_links_target', '_self')) ?>
                                   title="<?php echo $_product->title ?>">
                                    <?php echo $helper->truncate($_product->title, $this->_getConfig('product_title_maxlength', 25)); ?>
                                </a>
                            </div>
                        <?php } ?>
                        <?php //if ((int)$this->_getConfig('product_reviews_count', 1) && $_product->num_rating_summary != null) { ?>
                            <div class="item-review">
                                <?php
                                $this->addReviewSummaryTemplate('sm', 'sm/listingtabs/default_summary.phtml');
                                echo $this->getReviewsSummaryHtml($_product, 'sm', false);
                                ?>
                            </div>
                        <?php //} ?>
                    </div>
                    <div class="item-right f-right a-right">
                        <?php
                        }
                        if ((int)$this->_getConfig('product_price_display', 1)) {
                            ?>
                            <div class="item-price">
                                <div class="sale-price">
                                    <?php echo $this->getPriceHtml($_product, true); ?>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>

                <?php if ($this->_getConfig('product_description_display', 1) == 1 && $helper->_trimEncode($_product->_description) != '') { ?>
                    <div class="item-desc">
                        <?php echo $_product->_description; ?>
                    </div>
                <?php } ?>

                <?php if ($this->_getConfig('product_date_display', 1) == 1) { ?>
                    <div class="created-date ">
                        <?php echo date("d F Y", strtotime($_product->created_at)); ?>
                    </div>
                <?php } ?>



                <?php if ((int)$this->_getConfig('product_readmore_display', 1)) { ?>
                    <div class="item-readmore">
                        <a href="<?php echo $_product->link; ?>"
                           title="<?php echo $_product->title ?>" <?php echo $helper->parseTarget($this->_getConfig('product_links_target', '_self')); ?> >
                            <?php echo $this->_getConfig('product_readmore_text', 'Detail'); ?>
                        </a>
                    </div>
                <?php } ?>
                <div class="other-infor">
                    <?php if ($this->_getConfig('product_hits_display')) { ?>
                        <div class="hits"><?php echo 'Read'; ?>
                            <?php
                            if ($_product->num_view_counts > 1) {
                                echo $_product->num_view_counts . ' times';
                            } else {
                                echo $_product->num_view_counts . ' time';
                            }?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php if( $i%$rowCount==0 || $i == count($child_items)): ?>
        </div>
        <?php endif; ?>

        <?php $clear = 'clr1';
        if ($k % 2 == 0) $clear .= ' clr2';
        if ($k % 3 == 0) $clear .= ' clr3';
        if ($k % 4 == 0) $clear .= ' clr4';
        if ($k % 5 == 0) $clear .= ' clr5';
        if ($k % 6 == 0) $clear .= ' clr6';
        ?>
        <?php if( $this->_getConfig('show_loadmore_slider') == 'loadmore'){ ?>
            <div class="<?php echo $clear; ?>"></div>
        <?php } ?>
    <?php
    }
}?>

