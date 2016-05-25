<?php
/**
 * Created by PhpStorm.
 * User: Vu Van Phan
 * Date: 24/01/2015
 * Time: 09:17
 */
class Sm_Cameraslide_Model_Slide extends Mage_Core_Model_Abstract
{
    // Status Enable or Disable
    const STATUS_ENABLED    = 1;
    const STATUS_DISABLED   = 2;

    // Type '%' or 'px'
    const PX = 'px';
    const PERCENT = '%';

    // Status Yes or No
    const YES = 1;
    const NO = 2;

    // Options Alignment. Position slide on the page
    const TOP_LEFT      = 'topLeft';
    const TOP_CENTER    = 'topCenter';
    const TOP_RIGHT     = 'topRight';
    const CENTER_LEFT   = 'centerLeft';
    const CENTER        = 'center';
    const CENTER_RIGHT  = 'centerRight';
    const BOTTOM_LEFT   = 'bottomLeft';
    const BOTTOM_CENTER = 'bottomCenter';
    const BOTTOM_RIGHT  = 'bottomRight';

    // Options True | False
    const TRUE  = 'true';
    const FALSE = 'false';

    // Options barDirection
    const LEFT_TO_RIGHT = 'leftToRight';
    const RIGHT_TO_LEFT = 'rightToLeft';
    const TOP_TO_BOTTOM = 'topToBottom';
    const BOTTOM_TO_TOP = 'bottomToTop';

    // Options barPosition
    const LEFT      = 'left';
    const RIGHT     = 'right';
    const TOP       = 'top';
    const BOTTOM    = 'bottom';

    // Options Easing
    const EASING_1      = 'linear';
    const EASING_2      = 'swing';
    const EASING_3      = 'easeInQuad';
    const EASING_4      = 'easeOutQuad';
    const EASING_5      = 'easeInOutQuad';
    const EASING_6      = 'easeInCubic';
    const EASING_7      = 'easeOutCubic';
    const EASING_8      = 'easeInOutCubic';
    const EASING_9      = 'easeInQuart';
    const EASING_10     = 'easeOutQuart';
    const EASING_11     = 'easeInOutQuart';
    const EASING_12     = 'easeInQuint';
    const EASING_13     = 'easeOutQuint';
    const EASING_14     = 'easeInOutQuint';
    const EASING_15     = 'easeInExpo';
    const EASING_16     = 'easeOutExpo';
    const EASING_17     = 'easeInOutExpo';
    const EASING_18     = 'easeInSine';
    const EASING_19     = 'easeOutSine';
    const EASING_20     = 'easeInOutSine';
    const EASING_21     = 'easeInCirc';
    const EASING_22     = 'easeOutCirc';
    const EASING_23     = 'easeInOutCirc';
    const EASING_24     = 'easeInElastic';
    const EASING_25     = 'easeOutElastic';
    const EASING_26     = 'easeInOutElastic';
    const EASING_27     = 'easeInBack';
    const EASING_28     = 'easeOutBack';
    const EASING_29     = 'easeInOutBack';
    const EASING_30     = 'easeInBounce';
    const EASING_31     = 'easeOutBounce';
    const EASING_32     = 'easeInOutBounce';

    // Options translate fx
    const TRANSITION_1  = 'random';
    const TRANSITION_2  = 'simpleFade';
    const TRANSITION_3  = 'curtainTopLeft';
    const TRANSITION_4  = 'curtainTopRight';
    const TRANSITION_5  = 'curtainBottomLeft';
    const TRANSITION_6  = 'curtainBottomRight';
    const TRANSITION_7  = 'curtainSliceLeft';
    const TRANSITION_8  = 'curtainSliceRight';
    const TRANSITION_9  = 'blindCurtainTopLeft';
    const TRANSITION_10 = 'blindCurtainTopRight';
    const TRANSITION_11 = 'blindCurtainBottomLeft';
    const TRANSITION_12 = 'blindCurtainBottomRight';
    const TRANSITION_13 = 'blindCurtainSliceBottom';
    const TRANSITION_14 = 'blindCurtainSliceTop';
    const TRANSITION_15 = 'stampede';
    const TRANSITION_16 = 'mosaic';
    const TRANSITION_17 = 'mosaicReverse';
    const TRANSITION_18 = 'mosaicRandom';
    const TRANSITION_19 = 'mosaicSpiral';
    const TRANSITION_20 = 'mosaicSpiralReverse';
    const TRANSITION_21 = 'topLeftBottomRight';
    const TRANSITION_22 = 'topRightBottomLeft';
    const TRANSITION_23 = 'bottomRightTopLeft';
    const TRANSITION_24 = 'bottomLeftTopRight';
    const TRANSITION_25 = 'scrollLeft';
    const TRANSITION_26 = 'scrollRight';
    const TRANSITION_27 = 'scrollHorz';
    const TRANSITION_28 = 'scrollBottom';
    const TRANSITION_29 = 'scrollTop';

    // Options Loader
    const PIE   = 'pie';
    const BAR   = 'bar';
    const NONE  = 'none';

    // Options piePosition
    const RIGHT_TOP     = 'rightTop';
    const LEFT_TOP      = 'leftTop';
    const LEFT_BOTTOM   = 'leftBottom';
    const RIGHT_BOTTOM  = 'rightBottom';

    // Options slideOn
    const PREV      = 'prev';
    const NEXT      = 'next';
    const RANDOM    = 'random';

    // Options Css for Camera Js
    const CSS_1     = 'camera_amber_skin';
    const CSS_2     = 'camera_ash_skin';
    const CSS_3     = 'camera_azure_skin';
    const CSS_4     = 'camera_beige_skin';
    const CSS_5     = 'camera_black_skin';
    const CSS_6     = 'camera_blue_skin';
    const CSS_7     = 'camera_brown_skin';
    const CSS_8     = 'camera_burgundy_skin';
    const CSS_9     = 'camera_charcoal_skin';
    const CSS_10    = 'camera_chocolate_skin';
    const CSS_11    = 'camera_coffee_skin';
    const CSS_12    = 'camera_cyan_skin';
    const CSS_13    = 'camera_fuchsia_skin';
    const CSS_14    = 'camera_gold_skin';
    const CSS_15    = 'camera_green_skin';
    const CSS_16    = 'camera_grey_skin';
    const CSS_17    = 'camera_indigo_skin';
    const CSS_18    = 'camera_khaki_skin';
    const CSS_19    = 'camera_lime_skin';
    const CSS_20    = 'camera_magenta_skin';
    const CSS_21    = 'camera_maroon_skin';
    const CSS_22    = 'camera_orange_skin';
    const CSS_23    = 'camera_olive_skin';
    const CSS_24    = 'camera_pink_skin';
    const CSS_25    = 'camera_pistachio_skin';
    const CSS_26    = 'camera_pink_skin';
    const CSS_27    = 'camera_red_skin';
    const CSS_28    = 'camera_tangerine_skin';
    const CSS_29    = 'camera_turquoise_skin';
    const CSS_30    = 'camera_violet_skin';
    const CSS_31    = 'camera_white_skin';
    const CSS_32    = 'camera_yellow_skin';

    /*
     * Define resource model
     * */
    protected function _construct(){
        $this->_init('sm_cameraslide/slide');
    }

    /*
     * Get Status
     * */
    public function getOptionStatus()
    {
        $option = new Varien_Object(array(
            self::STATUS_ENABLED => Mage::helper('sm_cameraslide')->__('Enable'),
            self::STATUS_DISABLED => Mage::helper('sm_cameraslide')->__('Disable'),
        ));
        return $option->getData();
    }

    /*
     * Get Type
     * */
    public function getOptionType()
    {
        $option = new Varien_Object(array(
            self::PX => Mage::helper('sm_cameraslide')->__('px'),
            self::PERCENT => Mage::helper('sm_cameraslide')->__('%'),
        ));
        return $option->getData();
    }

    /*
     * Get status Yes or No
     * */
    public function getOptionYesNo()
    {
        $option = new Varien_Object(array(
            self::YES => Mage::helper('sm_cameraslide')->__('Yes'),
            self::NO => Mage::helper('sm_cameraslide')->__('No'),
        ));
        return $option->getData();
    }

    /*
     * Get Options of Position
     * */
    public function getPositon()
    {
        $option = new Varien_Object(array(
            self::LEFT      => Mage::helper('sm_cameraslide')->__('Left'),
            self::CENTER    => Mage::helper('sm_cameraslide')->__('Center'),
            self::RIGHT     => Mage::helper('sm_cameraslide')->__('Right'),
        ));
        return $option->getData();
    }

    /*
     * Get options of alignment
     * */
    public function getOptionAlignment()
    {
        $option = new Varien_Object(array(
            self::TOP_LEFT      => Mage::helper('sm_cameraslide')->__('Top Left'),
            self::TOP_CENTER    => Mage::helper('sm_cameraslide')->__('Top Center'),
            self::TOP_RIGHT     => Mage::helper('sm_cameraslide')->__('Top Right'),
            self::CENTER_LEFT   => Mage::helper('sm_cameraslide')->__('Center Left'),
            self::CENTER        => Mage::helper('sm_cameraslide')->__('Center'),
            self::CENTER_RIGHT  => Mage::helper('sm_cameraslide')->__('Center Right'),
            self::BOTTOM_LEFT   => Mage::helper('sm_cameraslide')->__('Bottom Left'),
            self::BOTTOM_CENTER => Mage::helper('sm_cameraslide')->__('Bottom Center'),
            self::BOTTOM_RIGHT  => Mage::helper('sm_cameraslide')->__('Bottom Right'),
        ));
        return $option->getData();
    }

    // get Options True | False
    public function getTrueFalse()
    {
        $options = new Varien_Object(array(
            self::TRUE  => Mage::helper('sm_cameraslide')->__('True'),
            self::FALSE => Mage::helper('sm_cameraslide')->__('False'),
        ));
        return $options->getData();
    }

    // get Options barDirection
    public function getBarDirection()
    {
        $options = new Varien_Object(array(
            self::LEFT_TO_RIGHT => Mage::helper('sm_cameraslide')->__('Left To Right'),
            self::RIGHT_TO_LEFT => Mage::helper('sm_cameraslide')->__('Right To Left'),
            self::TOP_TO_BOTTOM => Mage::helper('sm_cameraslide')->__('Top To Bottom'),
            self::BOTTOM_TO_TOP => Mage::helper('sm_cameraslide')->__('Bottom To Top'),
        ));
        return $options->getData();
    }

    /*
     * Get options barPosition
     * */
    public function getOptionBarPosition()
    {
        $option = new Varien_Object(array(
            self::LEFT      => Mage::helper('sm_cameraslide')->__('Left'),
            self::RIGHT     => Mage::helper('sm_cameraslide')->__('Right'),
            self::TOP       => Mage::helper('sm_cameraslide')->__('Top'),
            self::BOTTOM    => Mage::helper('sm_cameraslide')->__('Bottom'),
        ));
        return $option->getData();
    }

    // Get Options Transitions
    public function getTransitions()
    {
        return array(
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Random'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_1,
                        'label' => Mage::helper('sm_cameraslide')->__('Random')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Simple Fade'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_2,
                        'label' => Mage::helper('sm_cameraslide')->__('Simple Fade')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Curtain'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_3,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Top Left')
                    ),
                    array(
                        'value' => self::TRANSITION_4,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Top Right')
                    ),
                    array(
                        'value' => self::TRANSITION_5,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Bottom Left')
                    ),
                    array(
                        'value' => self::TRANSITION_6,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Bottom Right')
                    ),
                    array(
                        'value' => self::TRANSITION_7,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Slice Left')
                    ),
                    array(
                        'value' => self::TRANSITION_8,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Slice Right')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_9,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Top Left')
                    ),
                    array(
                        'value' => self::TRANSITION_10,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Top Right')
                    ),
                    array(
                        'value' => self::TRANSITION_11,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Bottom Left')
                    ),
                    array(
                        'value' => self::TRANSITION_12,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Bottom Right')
                    ),
                    array(
                        'value' => self::TRANSITION_13,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Slice Bottom')
                    ),
                    array(
                        'value' => self::TRANSITION_14,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Slice Top')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Stampede'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_15,
                        'label' => Mage::helper('sm_cameraslide')->__('Stampede')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Mosaic'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_16,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic')
                    ),
                    array(
                        'value' => self::TRANSITION_17,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Reverse')
                    ),
                    array(
                        'value' => self::TRANSITION_18,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Random')
                    ),
                    array(
                        'value' => self::TRANSITION_19,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Spiral')
                    ),
                    array(
                        'value' => self::TRANSITION_20,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Spiral Reverse')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__(),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_21,
                        'label' => Mage::helper('sm_cameraslide')->__('Top Left Bottom Right')
                    ),
                    array(
                        'value' => self::TRANSITION_22,
                        'label' => Mage::helper('sm_cameraslide')->__('Top Right Bottom Left')
                    ),
                    array(
                        'value' => self::TRANSITION_23,
                        'label' => Mage::helper('sm_cameraslide')->__('Bottom Right Top Left')
                    ),
                    array(
                        'value' => self::TRANSITION_24,
                        'label' => Mage::helper('sm_cameraslide')->__('Bottom Left Top Right')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Scroll'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_25,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Left')
                    ),
                    array(
                        'value' => self::TRANSITION_26,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Right')
                    ),
                    array(
                        'value' => self::TRANSITION_27,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Horz')
                    ),
                    array(
                        'value' => self::TRANSITION_28,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Bottom')
                    ),
                    array(
                        'value' => self::TRANSITION_29,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Top')
                    )
                )
            ),
        );
    }

    // Get Options Transitions For Only Mobile
    public function getMobileTransitions()
    {
        return array(
            array(
                'value' => '',
                'label' => Mage::helper('sm_cameraslide')->__()
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Ramdom'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_1,
                        'label' => Mage::helper('sm_cameraslide')->__('Ramdom')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Simple Fade'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_2,
                        'label' => Mage::helper('sm_cameraslide')->__('Simple Fade')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Curtain'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_3,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Top Left')
                    ),
                    array(
                        'value' => self::TRANSITION_4,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Top Right')
                    ),
                    array(
                        'value' => self::TRANSITION_5,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Bottom Left')
                    ),
                    array(
                        'value' => self::TRANSITION_6,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Bottom Right')
                    ),
                    array(
                        'value' => self::TRANSITION_7,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Slice Left')
                    ),
                    array(
                        'value' => self::TRANSITION_8,
                        'label' => Mage::helper('sm_cameraslide')->__('Curtain Slice Right')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_9,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Top Left')
                    ),
                    array(
                        'value' => self::TRANSITION_10,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Top Right')
                    ),
                    array(
                        'value' => self::TRANSITION_11,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Bottom Left')
                    ),
                    array(
                        'value' => self::TRANSITION_12,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Bottom Right')
                    ),
                    array(
                        'value' => self::TRANSITION_13,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Slice Bottom')
                    ),
                    array(
                        'value' => self::TRANSITION_14,
                        'label' => Mage::helper('sm_cameraslide')->__('Blind Curtain Slice Top')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Stampede'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_15,
                        'label' => Mage::helper('sm_cameraslide')->__('Stampede')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Mosaic'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_16,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic')
                    ),
                    array(
                        'value' => self::TRANSITION_17,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Reverse')
                    ),
                    array(
                        'value' => self::TRANSITION_18,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Random')
                    ),
                    array(
                        'value' => self::TRANSITION_19,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Spiral')
                    ),
                    array(
                        'value' => self::TRANSITION_20,
                        'label' => Mage::helper('sm_cameraslide')->__('Mosaic Spiral Reverse')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__(),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_21,
                        'label' => Mage::helper('sm_cameraslide')->__('Top Left Bottom Right')
                    ),
                    array(
                        'value' => self::TRANSITION_22,
                        'label' => Mage::helper('sm_cameraslide')->__('Top Right Bottom Left')
                    ),
                    array(
                        'value' => self::TRANSITION_23,
                        'label' => Mage::helper('sm_cameraslide')->__('Bottom Right Top Left')
                    ),
                    array(
                        'value' => self::TRANSITION_24,
                        'label' => Mage::helper('sm_cameraslide')->__('Bottom Left Top Right')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Scroll'),
                'value' => array(
                    array(
                        'value' => self::TRANSITION_25,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Left')
                    ),
                    array(
                        'value' => self::TRANSITION_26,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Right')
                    ),
                    array(
                        'value' => self::TRANSITION_27,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Horz')
                    ),
                    array(
                        'value' => self::TRANSITION_28,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Bottom')
                    ),
                    array(
                        'value' => self::TRANSITION_29,
                        'label' => Mage::helper('sm_cameraslide')->__('Scroll Top')
                    )
                )
            ),
        );
    }

    // Get Options Easing
    public function getEasing()
    {
        return array(
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Linear'),
                'value' => array(
                    array(
                        'value' => self::EASING_1,
                        'label' => Mage::helper('sm_cameraslide')->__('Linear')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Swing'),
                'value' => array(
                    array(
                        'value' => self::EASING_2,
                        'label' => Mage::helper('sm_cameraslide')->__('Swing')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Quad'),
                'value' => array(
                    array(
                        'value' => self::EASING_3,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Quad')
                    ),
                    array(
                        'value' => self::EASING_4,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Quad')
                    ),
                    array(
                        'value' => self::EASING_5,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Quad')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Cubic'),
                'value' => array(
                    array(
                        'value' => self::EASING_6,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Cubic')
                    ),
                    array(
                        'value' => self::EASING_7,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Cubic')
                    ),
                    array(
                        'value' => self::EASING_8,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Cubic')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Quart'),
                'value' => array(
                    array(
                        'value' => self::EASING_9,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Quart')
                    ),
                    array(
                        'value' => self::EASING_10,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Quart')
                    ),
                    array(
                        'value' => self::EASING_11,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Quart')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Quint'),
                'value' => array(
                    array(
                        'value' => self::EASING_12,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Quint')
                    ),
                    array(
                        'value' => self::EASING_13,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Quint')
                    ),
                    array(
                        'value' => self::EASING_14,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Quint')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Expo'),
                'value' => array(
                    array(
                        'value' => self::EASING_15,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Expo')
                    ),
                    array(
                        'value' => self::EASING_16,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Expo')
                    ),
                    array(
                        'value' => self::EASING_17,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Expo')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Sine'),
                'value' => array(
                    array(
                        'value' => self::EASING_18,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Sine')
                    ),
                    array(
                        'value' => self::EASING_19,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Sine')
                    ),
                    array(
                        'value' => self::EASING_20,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Sine')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Circ'),
                'value' => array(
                    array(
                        'value' => self::EASING_21,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Circ')
                    ),
                    array(
                        'value' => self::EASING_22,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Circ')
                    ),
                    array(
                        'value' => self::EASING_23,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Circ')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Elastic'),
                'value' => array(
                    array(
                        'value' => self::EASING_24,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Elastic')
                    ),
                    array(
                        'value' => self::EASING_25,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Elastic')
                    ),
                    array(
                        'value' => self::EASING_26,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Elastic')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Back'),
                'value' => array(
                    array(
                        'value' => self::EASING_27,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Back')
                    ),
                    array(
                        'value' => self::EASING_28,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Back')
                    ),
                    array(
                        'value' => self::EASING_29,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Back')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Bounce'),
                'value' => array(
                    array(
                        'value' => self::EASING_30,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Bounce')
                    ),
                    array(
                        'value' => self::EASING_31,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Bounce')
                    ),
                    array(
                        'value' => self::EASING_32,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Bounce')
                    )
                )
            ),
        );
    }

    // Get Options Easing For Only Mobile
    public function getMobileEasing()
    {
        return array(
            array(
                'value' => '',
                'label' => Mage::helper('sm_cameraslide')->__()
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Linear'),
                'value' => array(
                    array(
                        'value' => self::EASING_1,
                        'label' => Mage::helper('sm_cameraslide')->__('Linear')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Swing'),
                'value' => array(
                    array(
                        'value' => self::EASING_2,
                        'label' => Mage::helper('sm_cameraslide')->__('Swing')
                    )
                )
            ),
            array(
                'label' => Mage::helper('sm_cameraslide')->__('Quad'),
                'value' => array(
                    array(
                        'value' => self::EASING_3,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Quad')
                    ),
                    array(
                        'value' => self::EASING_4,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Quad')
                    ),
                    array(
                        'value' => self::EASING_5,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Quad')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Cubic'),
                'value' => array(
                    array(
                        'value' => self::EASING_6,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Cubic')
                    ),
                    array(
                        'value' => self::EASING_7,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Cubic')
                    ),
                    array(
                        'value' => self::EASING_8,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Cubic')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Quart'),
                'value' => array(
                    array(
                        'value' => self::EASING_9,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Quart')
                    ),
                    array(
                        'value' => self::EASING_10,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Quart')
                    ),
                    array(
                        'value' => self::EASING_11,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Quart')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Quint'),
                'value' => array(
                    array(
                        'value' => self::EASING_12,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Quint')
                    ),
                    array(
                        'value' => self::EASING_13,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Quint')
                    ),
                    array(
                        'value' => self::EASING_14,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Quint')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Expo'),
                'value' => array(
                    array(
                        'value' => self::EASING_15,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Expo')
                    ),
                    array(
                        'value' => self::EASING_16,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Expo')
                    ),
                    array(
                        'value' => self::EASING_17,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Expo')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Sine'),
                'value' => array(
                    array(
                        'value' => self::EASING_18,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Sine')
                    ),
                    array(
                        'value' => self::EASING_19,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Sine')
                    ),
                    array(
                        'value' => self::EASING_20,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Sine')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Circ'),
                'value' => array(
                    array(
                        'value' => self::EASING_21,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Circ')
                    ),
                    array(
                        'value' => self::EASING_22,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Circ')
                    ),
                    array(
                        'value' => self::EASING_23,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Circ')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Elastic'),
                'value' => array(
                    array(
                        'value' => self::EASING_24,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Elastic')
                    ),
                    array(
                        'value' => self::EASING_25,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Elastic')
                    ),
                    array(
                        'value' => self::EASING_26,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Elastic')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Back'),
                'value' => array(
                    array(
                        'value' => self::EASING_27,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Back')
                    ),
                    array(
                        'value' => self::EASING_28,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Back')
                    ),
                    array(
                        'value' => self::EASING_29,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Back')
                    )
                )
            ),array(
                'label' => Mage::helper('sm_cameraslide')->__('Bounce'),
                'value' => array(
                    array(
                        'value' => self::EASING_30,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Bounce')
                    ),
                    array(
                        'value' => self::EASING_31,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease Out Bounce')
                    ),
                    array(
                        'value' => self::EASING_32,
                        'label' => Mage::helper('sm_cameraslide')->__('Ease In Out Bounce')
                    )
                )
            ),
        );
    }

    // Get Options Loader
    public function getTypeLoader()
    {
        $options = new Varien_Object(array(
            self::PIE => Mage::helper('sm_cameraslide')->__('Pie'),
            self::BAR => Mage::helper('sm_cameraslide')->__('Bar'),
            self::NONE => Mage::helper('sm_cameraslide')->__('None'),
        ));
        return $options->getData();
    }

    // Get Options Loader width Opacity
    public function getLoaderOpacity()
    {
        $array = array();
        for((int) $i=0; $i<=10; $i++)
        {
            $array[] = $i/10;
        }
        $array2 = array();
        foreach($array as $a)
        {
            $array2[] = array(
                'value' => $a,
                'label' => Mage::helper('sm_cameraslide')->__("$a")
            );
        }
        $options = new Varien_Object($array2);
        return $options->getData();
    }

    // get Options piePosition
    public function getPiePosition()
    {
        $options = new Varien_Object(array(
            self::RIGHT_TOP     => Mage::helper('sm_cameraslide')->__('Right Top'),
            self::LEFT_TOP      => Mage::helper('sm_cameraslide')->__('Left Top'),
            self::LEFT_BOTTOM   => Mage::helper('sm_cameraslide')->__('Left Bottom'),
            self::RIGHT_BOTTOM  => Mage::helper('sm_cameraslide')->__('Right Bottom'),
        ));
        return $options->getData();
    }

    // get Options slideOn
    public function getSlideOn()
    {
        $options = new Varien_Object(array(
            self::PREV      => Mage::helper('sm_cameraslide')->__('Prev'),
            self::NEXT      => Mage::helper('sm_cameraslide')->__('Next'),
            self::RANDOM    => Mage::helper('sm_cameraslide')->__('Random'),
        ));
        return $options->getData();
    }

    /*
     * Get options css for camera
     * */
    public function getOptionCss()
    {
        $option = new Varien_Object(array(
            self::CSS_1     => Mage::helper('sm_cameraslide')->__('Camera Amber Skin'),
            self::CSS_2     => Mage::helper('sm_cameraslide')->__('Camera Ash Skin'),
            self::CSS_3     => Mage::helper('sm_cameraslide')->__('Camera Azure Skin'),
            self::CSS_4     => Mage::helper('sm_cameraslide')->__('Camera Beige Skin'),
            self::CSS_5     => Mage::helper('sm_cameraslide')->__('Camera Black Skin'),
            self::CSS_6     => Mage::helper('sm_cameraslide')->__('Camera Blue Skin'),
            self::CSS_7     => Mage::helper('sm_cameraslide')->__('Camera Brown Skin'),
            self::CSS_8     => Mage::helper('sm_cameraslide')->__('Camera Burgundy Skin'),
            self::CSS_9     => Mage::helper('sm_cameraslide')->__('Camera Charcoal Skin'),
            self::CSS_10    => Mage::helper('sm_cameraslide')->__('Camera Chocolate Skin'),
            self::CSS_11    => Mage::helper('sm_cameraslide')->__('Camera Coffee Skin'),
            self::CSS_12    => Mage::helper('sm_cameraslide')->__('Camera Cyan Skin'),
            self::CSS_13    => Mage::helper('sm_cameraslide')->__('Camera Fuchsia Skin'),
            self::CSS_14    => Mage::helper('sm_cameraslide')->__('Camera Gold Skin'),
            self::CSS_15    => Mage::helper('sm_cameraslide')->__('Camera Green Skin'),
            self::CSS_16    => Mage::helper('sm_cameraslide')->__('Camera Grey Skin'),
            self::CSS_17    => Mage::helper('sm_cameraslide')->__('Camera Indigo Skin'),
            self::CSS_18    => Mage::helper('sm_cameraslide')->__('Camera Khaki Skin'),
            self::CSS_19    => Mage::helper('sm_cameraslide')->__('Camera Lime Skin'),
            self::CSS_20    => Mage::helper('sm_cameraslide')->__('Camera Magenta Skin'),
            self::CSS_21    => Mage::helper('sm_cameraslide')->__('Camera Maroon Skin'),
            self::CSS_22    => Mage::helper('sm_cameraslide')->__('Camera Orange Skin'),
            self::CSS_23    => Mage::helper('sm_cameraslide')->__('Camera Olive Skin'),
            self::CSS_24    => Mage::helper('sm_cameraslide')->__('Camera Pink Skin'),
            self::CSS_25    => Mage::helper('sm_cameraslide')->__('Camera Pistachio Skin'),
            self::CSS_26    => Mage::helper('sm_cameraslide')->__('Camera Pink Skin'),
            self::CSS_27    => Mage::helper('sm_cameraslide')->__('Camera Red Skin'),
            self::CSS_28    => Mage::helper('sm_cameraslide')->__('Camera Tangerine Skin'),
            self::CSS_29    => Mage::helper('sm_cameraslide')->__('Camera Turquoise Skin'),
            self::CSS_30    => Mage::helper('sm_cameraslide')->__('Camera Violet Skin'),
            self::CSS_31    => Mage::helper('sm_cameraslide')->__('Camera White Skin'),
            self::CSS_32    => Mage::helper('sm_cameraslide')->__('Camera Yellow Skin'),
        ));
        return $option->getData();
    }

    public function _afterLoad()
    {
        $id = $this->getId();
        $this->setData( (array) Mage::helper( 'core' )->jsonDecode( $this->getParams() ) );
        $this->setId( $id );
        $this->setSlideid( $id );
        return parent::_afterLoad();
    }

    public function _beforeSave()
    {
        if ( is_array( $this->getData( 'params' ) ) )
        {
            $this->setData( 'params', Mage::helper( 'core' )->jsonEncode( $this->getParams() ) );
        }
        return parent::_beforeSave();
    }

    /*
     *
     * */
    public function getAllSliders($status = false)
    {
        $collection = Mage::getModel('sm_cameraslide/sliders')->getCollection()->addSlideFilter($this)->setOrder('priority', 'asc');
        $sliders = array();
        foreach($collection as $c)
        {
            $id = $c->getId();
            $layers = $c->getLayers();
            $c->setData(Mage::helper('core')->jsonDecode($c->getParams()));
            $c->setLayers(Mage::helper('core')->jsonDecode($layers));
            $c->setId($id);
            if($status)
            {
                if($c->getData('status') == '1')
                {
                    $sliders[] = $c;
                }
            }else{
                $sliders[]  = $c;
            }
        }
        return $sliders;
    }
}