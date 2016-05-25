<?php
/**
 * Created by PhpStorm.
 * User: Vu Van Phan
 * Date: 28-01-2015
 * Time: 17:15
 */
class Sm_Cameraslide_Block_Adminhtml_Sliders_Edit_Tab_Main extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareLayout()
    {
        $head = $this->getLayout()->getBlock('head');
        if(Mage::app()->getRequest()->getActionName() == 'addSliders')
        {
//            $head->removeJs('prototype/prototype.js');
//            $head->addCss('prototype/windows/themes/default.css');
//            $head->addCss('prototype/windows/themes/magento.css');
            $head->addCss('lib/prototype/windows/themes/magento.css');
//            $head->addJs('mage/adminhtml/variables.js');
//            $head->addJs('mage/adminhtml/wysiwyg/widget.js');
//            $head->addJs('prototype/window.js');
//            $head->addJs('prototype/prototype.js');
//            $head->addJs('mage/adminhtml/browser.js');
            $head->addJs('lib/flex.js');
            $head->addJs('lib/FABridge.js');
            $head->addJs('mage/adminhtml/flexuploader.js');
            $head->addJs('sm/cameraslide/js/renderhelper.js');
            $head->addJs('sm/cameraslide/js/rendersliders.js');
            $head->addJs('sm/cameraslide/js/jquery-2.1.3.min.js');
            $head->addJs('sm/cameraslide/js/jquery-migrate-1.2.1.min.js');
            $head->addJs('sm/cameraslide/js/jquery-noconflict.js');
            $head->addJs('sm/cameraslide/js_plugin/js/camera.js');
//            $head->addCss('sm/cameraslide/css/cameraslide.css');
            $head->addItem('skin_css', 'sm/cameraslide/css/cameraslide.css');
            $head->addItem('skin_css', 'sm/cameraslide/css/jquery-ui-1.10.3.min.css');
            $head->addItem('skin_css', 'sm/cameraslide/css/font-awesome.css');
        }
        $return = parent::_prepareLayout();
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        return $return;
    }
    /*
     * Retrieve collection table slide
     * */
    public function _getCollectionSlide()
    {
        return 'sm_cameraslide/slide';
    }

    /*
     * Retrieve collection table sliders
     * */
    public function _getCollectionSliders()
    {
        return 'sm_cameraslide/sliders';
    }
    public function getIdSlide()
    {
        $slideId = $this->getRequest()->getParam('sid');
        if(is_numeric($slideId))
        {
            return $slideId;
        }
    }

    public function getIdSliders()
    {
        $slidersId = $this->getRequest()->getParam('id');
        if(is_numeric($slidersId))
        {
            return $slidersId;
        }else{
            return '';
        }
    }
    /*
     *  Prepare form elements
     *
     *  @return Mage_Adminhtml_Block_Widget_Form
     * */
    public function _prepareForm()
    {
        $modelSlide   = Mage::registry('slide');
        $modelSliders = Mage::registry('sliders');

        $form = new Varien_Data_Form();
//        $form->setHtmlIdPrefix('cameraslide_main_');

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => "<i class='fa fa-cog'></i>".Mage::helper('sm_cameraslide')->__('General'),
            'class'     => 'collapsible'
        ));

        if($modelSlide->getId())
        {
            $fieldset->addField('slide_id', 'hidden', array(
                'name'  => 'slide_id',
                'value' => $modelSlide->getId(),
            ));
        }

        if($modelSliders->getId())
        {
            $fieldset->addField('sliders_id', 'hidden', array(
                'name'  => 'sliders_id',
                'value' => $modelSliders->getId()
            ));
        }

        if($modelSliders->getData('priority'))
        {
            $fieldset->addField('priority', 'hidden', array(
                'name'  => 'sliders_priority',
                'value' => $modelSliders->getData('priority')
            ));
        }
        $fieldset->addField('sliders_title', 'text', array(
            'name'      => 'sliders_title',
            'label'     => Mage::helper('sm_cameraslide')->__('Title'),
            'title'     => Mage::helper('sm_cameraslide')->__('Title'),
            'class'     => 'required-entry',
            'required'  => true,
        ));

        $fieldset->addField('status', 'select', array(
            'name'      => 'status',
            'label'     => Mage::helper('sm_cameraslide')->__('Status'),
            'title'     => Mage::helper('sm_cameraslide')->__('Status'),
            'values'    => $modelSliders->getStatusActiveNotActive(),
            'required'  => false,
        ));

//        $fieldset->addField('data_easing_sliders', 'select', array(
//            'name'      => 'data_easing_sliders',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Easing Sliders'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Easing Sliders'),
//            'values'    => $modelSliders->getDataEasing(),
//            'require'   => false
//        ));

//        $fieldset->addField('data_transitions_fx', 'multiselect', array(
//            'name'      => 'data_transitions_fx',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Sliders Transitions'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Sliders Transitions'),
//            'values'    => $modelSliders->getDataTransitions(),
//            'value'     => $modelSliders->getData('data_transitions_fx') ? $modelSliders->getData('data_transitions_fx') : array('random'),
//            'note'      => 'You can also use more than on effect, just separate them width commas : &CloseCurlyQuote;simpleFade&CloseCurlyQuote;, &CloseCurlyQuote;scrollRight&CloseCurlyQuote;, &CloseCurlyQuote;scrollBottom&CloseCurlyQuote;',
//            'require'   => false,
//        ));

//        $fieldset->addField('data_time', 'text', array(
//            'class'     => 'validate-number',
//            'name'      => 'data_time',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Time'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Time'),
//            'note'      => 'The milliseconds between the end of the sliding effect and the start of the nex one',
//            'require'   => true,
//        ));

//        $fieldset->addField('data_trans_period', 'text', array(
//            'class'     => 'validate-number',
//            'name'      => 'data_trans_period',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Translate Period'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Translate Period'),
//            'note'      => 'The length of the sliding effect in milliseconds',
//            'require'   => true,
//        ));
//
//        $fieldset->addField('data_alignment', 'select', array(
//            'name'      => 'data_alignment',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Alignment'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Alignment'),
//            'values'    => $modelSliders->getOptionAlignment(),
//            'value'     => $modelSliders->getData('data_alignment') ? $modelSliders->getData('data_alignment') : 'center',
//            'require'   => false,
//        ));

//        $fieldset->addField('data_link', 'text', array(
//            'name'      => 'data_link',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Link'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Link'),
//            'note'      => 'The URL where you go by clicking your slide. <br> Note: the URL is full link <br> Ex: http://magento.com, https://www.google.com.vn, ...',
//            'require'   => false,
//        ));

//        $fieldset->addField('data_portrait', 'select', array(
//            'name'      => 'data_portrait',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Portrait'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Portrait'),
//            'values'    => $modelSliders->getTrueFalse(),
//            'note'      => 'Select "true" if you don&CloseCurlyQuote;t want that your images are cropped',
//            'require'   => false,
//        ));

//        $fieldset->addField('data_slide_on', 'select', array(
//            'name'      => 'data_slide_on',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Slide On'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Slide On'),
//            'values'    => $modelSliders->getDataSlideOn(),
//            'note'      => 'Decide if the transition effect will be applied to the current (prev) or the next slide',
//            'require'   => false,
//        ));

//        $fieldset->addField('data_target', 'select', array(
//            'name'      => 'data_target',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Target'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Target'),
//            'values'    => $modelSliders->getDataTarget(),
//            'note'      => 'The target values for the data-link attribute',
//            'require'   => false,
//        ));

//        if($modelSlide->getData('thumbnails') == 'true')
//        {
//            $thumb = $fieldset->addField('data_thumb', 'text', array(
//                'name'      => 'data_thumb',
//                'label'     => Mage::helper('sm_cameraslide')->__('Data Thumb'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Data Thumb'),
//                'note'      => 'The URL of the thumbnail of the slide (if the value of the &CloseCurlyQuote;thumbnail&CloseCurlyQuote; option is true)',
//                'require'   => false,
//            ));
//
//            $form->getElement('data_thumb')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browsers', '', array(
//                'element'   => $thumb
//            )));
//        }

        $fieldset2 = $form->addFieldset('layers_fieldset', array(
            'legend'    => "<i class='fa fa-tasks'></i>".Mage::helper('sm_cameraslide')->__('Sliders Image and Layers'),
            'class'     => 'collapsible'
        ));

        $bg = $fieldset2->addField('background_type', 'select', array(
            'name'      => 'background_type',
            'label'     => Mage::helper('sm_cameraslide')->__('Background Type'),
            'title'     => Mage::helper('sm_cameraslide')->__('Background Type'),
            'values'    => $modelSliders->getBackgroundType(),
            'value'     => $modelSliders->getBackgroundType() ? $modelSliders->getBackgroundType() : 'image',
            'onchange'  => 'CmrSl.updateContainer()',
            'required'  => false,
        ));

        $bg1 = $fieldset2->addField('data_src', 'text', array(
            'name'  => 'data_src',
            'label' => Mage::helper('sm_cameraslide')->__('Data Src Image'),
            'title' => Mage::helper('sm_cameraslide')->__('Data Src Image'),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'  => Mage::helper('sm_cameraslide')->__('The URL of the image of the slide')
        ));
        $form->getElement('data_src')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browsers', '', array(
            'element'   => $bg1
        )));

//        $bg2 = $fieldset2->addField('data_src_video', 'text', array(
//            'name'  => 'data_src_video',
//            'label' => Mage::helper('sm_cameraslide')->__('Background Of Video'),
//            'title' => Mage::helper('sm_cameraslide')->__('Background Of Video'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'  => Mage::helper('sm_cameraslide')->__('The URL of the image video of the slide')
//        ));
//        $form->getElement('data_src_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browsers', '', array(
//            'element'   => $bg2
//        )));
//
//        $bg3 = $fieldset2->addField('service_video', 'select', array(
//            'name'      => 'service_video',
//            'label'     => Mage::helper('sm_cameraslide')->__('Select Service Video'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Select Service Video'),
//            'values'    => $modelSliders->getServiceVideo(),
//            'onchange'  => 'CmrSl.updateContainer()',
//        ));

//        $bg4a = $fieldset2->addField('src_video', 'text', array(
//            'name'      => 'src_video',
//            'label'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Ex: s-CGC4BDu6U or 30300114',
//        ));
//
//        $bg4b = $fieldset2->addField('src_video_2', 'text', array(
//            'name'      => 'src_video_2',
//            'label'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Ex: s-CGC4BDu6U or 30300114',
//        ));



//        $bg31 = $fieldset2->addField('html5_mp4_video', 'text', array(
//            'name'      => 'html5_mp4_video',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video MP4 Url'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video MP4 Url'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Video mp4 choice to PC you or source other',
//        ));
//
//        $form->getElement('html5_mp4_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browser', '', array(
//            'element'   => $bg31
//        )));
//
//        $bg32 = $fieldset2->addField('html5_webm_video', 'text', array(
//            'name'      => 'html5_webm_video',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video WEBM Url'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video WEBM Url'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Video webm choice to PC you or source other',
//        ));
//
//        $form->getElement('html5_webm_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browser', '', array(
//            'element'   => $bg32
//        )));
//
//        $bg33 = $fieldset2->addField('html5_ogg_video', 'text', array(
//            'name'      => 'html5_ogg_video',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video OGG Url'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video OGG Url'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Video ogg choice to PC you or source other',
//        ));
//
//        $form->getElement('html5_ogg_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browser', '', array(
//            'element'   => $bg33
//        )));

//        $bg312 = $fieldset2->addField('video_width', 'text', array(
//            'name'      => 'video_width',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video Width'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video Width'),
//            'value'     => $modelSliders->getData('video_width') ? $modelSliders->getData('video_width') : '100%',
//            'onchange'  => "CmrSl.updateContainer()",
//            'note'      => "Width can type \"px\" or \"%\". <br>Ex: 100px, 40%,...",
//        ));
//
//        $bg313 = $fieldset2->addField('video_height', 'text', array(
//            'name'      => 'video_height',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video Height'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video Height'),
//            'value'    => $modelSliders->getData('video_height') ? $modelSliders->getData('video_height') : '100%',
//            'onchange'  => "CmrSl.updateContainer()",
//            'note'      => "Width can type \"px\" or \"%\". <br>Ex: 100px, 40%,...",
//        ));

//        $bg314 = $fieldset2->addField('video_left', 'text', array(
//            'name'      => 'video_left',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video Left'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video Left'),
//            'onchange'  => "CmrSl.updateContainer()",
//            'note'      => "Width can type \"px\" or \"%\". <br>Ex: 100px, 40%,...",
//        ));

//        $bg315 = $fieldset2->addField('video_top', 'text', array(
//            'name'      => 'video_top',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video Top'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video Top'),
//            'onchange'  => "CmrSl.updateContainer()",
//            'note'      => "Width can type \"px\" or \"%\". <br>Ex: 100px, 40%,...",
//        ));

//        $bg316 = $fieldset2->addField('video_class', 'text', array(
//            'name'      => 'video_class',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video Class'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video Class'),
//            'onchange'  => "CmrSl.updateContainer()",
//            'note'      => 'Class not contain space. Ex: class_1, class_2, ...'
//        ));

//        $bg34 = $fieldset2->addField('video_loop', 'select', array(
//            'name'      => 'video_loop',
//            'label'     => Mage::helper('sm_cameraslide')->__('Video Loop'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Video Loop'),
//            'values'    => $modelSliders->getVideoLoop(),
//            'onchange'  => "CmrSl.updateContainer()"
//        ));
//
//        $bg35y = $fieldset2->addField('video_controls', 'select', array(
//            'name'      => 'video_controls',
//            'label'     => Mage::helper('sm_cameraslide')->__('Show Controls'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Show Controls'),
//            'values'    => $modelSliders->getVideoControls(),
//            'value'     => $modelSliders->getData('video_controls') ? $modelSliders->getData('video_controls') : 'controls',
//            'onchange'  => "CmrSl.updateContainer()"
//        ));

//        $bg35h = $fieldset2->addField('video_controls_html5', 'select', array(
//            'name'      => 'video_controls_html5',
//            'label'     => Mage::helper('sm_cameraslide')->__('Show Controls'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Show Controls'),
//            'values'    => $modelSliders->getVideoControls(),
//            'value'     => $modelSliders->getData('video_controls_html5') ? $modelSliders->getData('video_controls_html5') : 'controls',
//            'onchange'  => "CmrSl.updateContainer()"
//        ));

//        $bg36 = $fieldset2->addField('video_autoplay', 'select', array(
//            'name'      => 'video_autoplay',
//            'label'     => Mage::helper('sm_cameraslide')->__('Auto Play'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Auto Play'),
//            'values'    => $modelSliders->getVideoAutoPlay(),
//            'onchange'  => "CmrSl.updateContainer()",
//            'note'      => 'Video auto play but time load of sliders is running. You want the watch full video,you can click on the video sliders or pause slide to watch full video'
//        ));
//
//        $bg37 = $fieldset2->addField('video_muted', 'select', array(
//            'name'      => 'video_muted',
//            'label'     => Mage::helper('sm_cameraslide')->__('Mute'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Mute'),
//            'values'    => $modelSliders->getVideoMuted(),
//            'onchange'  => "CmrSl.updateContainer()"
//        ));
//
//        $bg38a = $fieldset2->addField('video_showinfo', 'select', array(
//            'name'      => 'video_showinfo',
//            'label'     => Mage::helper('sm_cameraslide')->__('Show Information Of Video'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Show Information Of Video'),
//            'values'    => $modelSliders->getVideoShowInfo(),
//            'value'     => $modelSliders->getData('video_showinfo') ? $modelSliders->getData('video_showinfo') : '1',
//            'onchange'  => "CmrSl.updateContainer()"
//        ));

//        $bg38b = $fieldset2->addField('video_autopause', 'select', array(
//            'name'      => 'video_autopause',
//            'label'     => Mage::helper('sm_cameraslide')->__('Auto Pause When Another Video Is Played'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Auto Pause When Another Video Is Played'),
//            'values'    => $modelSliders->getVideoAutoPause(),
//            'onchange'  => "CmrSl.updateContainer()"
//        ));

//        $bg39 = $fieldset2->addField('video_colorcontrolsvimeo', 'text', array(
//            'class'     => 'color {required:false}',
//            'name'      => 'video_colorcontrolsvimeo',
//            'label'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Vimeo'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Vimeo'),
//            'value'     => $modelSliders->getData('video_colorcontrolsvimeo') ? $modelSliders->getData('video_colorcontrolsvimeo') : '00ADEF',
//            'onchange'  => "CmrSl.updateContainer()"
//        ));
//
//        $bg310 = $fieldset2->addField('video_autohide', 'select', array(
//            'name'      => 'video_autohide',
//            'label'     => Mage::helper('sm_cameraslide')->__('Auto Hidden Controls'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Auto Hidden Controls'),
//            'values'    => $modelSliders->getVideoAutoHide(),
//            'value'     => $modelSliders->getData('video_autohide') ? $modelSliders->getData('video_autohide') : '1',
//            'onchange'  => "CmrSl.updateContainer()"
//        ));
//
//        $bg311 = $fieldset2->addField('video_colorcontrolsyoutube', 'select', array(
//            'name'      => 'video_colorcontrolsyoutube',
//            'label'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Youtube'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Youtube'),
//            'values'    => $modelSliders->getVideoColorYoutube(),
//            'onchange'  => "CmrSl.updateContainer()"
//        ));

//        $bg5 = $fieldset2->addField('data_video', 'select', array(
//            'name'      => 'data_video',
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Video'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Video'),
//            'values'    => $modelSliders->getDataVideo(),
//            'value'     => $modelSliders->getData('data_video') ? $modelSliders->getData('data_video') : '',
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => '"hide" is the unique possible value. If you use this data- attribute means you are using a video on your slideshow.
//                            The videos on Camera can be displayed only after the transition.
//                            By adding this data- attribute you must click the image to display the video, otherwise the video will be displayed automatically after the transition.
//                            More info are available on the demo pages',
//            'require'   => false,
//        ));

        $bg6 = $fieldset2->addField('sliders_bg_color', 'text', array(
            'class'     => 'color {required:false}',
            'name'      => 'sliders_bg_color',
            'label'     => Mage::helper('sm_cameraslide')->__('Background Color'),
            'title'     => Mage::helper('sm_cameraslide')->__('Background Color'),
            'value'     => $modelSliders->getData('sliders_bg_color') ? $modelSliders->getData('sliders_bg_color') : 'CCCCCC',
            'require'   => false,
            'onchange'  => 'CmrSl.updateContainer()'
        ));

        $fieldset2->addField('preview_width', 'text', array(
            'class'     => 'validate-number',
            'name'      => 'preview_width',
            'label'     => Mage::helper('sm_cameraslide')->__('Preview Width'),
            'title'     => Mage::helper('sm_cameraslide')->__('Preview Width'),
            'onchange'  => 'CmrSl.collectContainer()',
            'note'      => 'Preview width only use preview in admin. Not use set width of slide in frontend website.',
            'require'   => true,
        ));
        $fieldset2->addField('preview_height', 'text', array(
            'class'     => 'validate-number',
            'name'      => 'preview_height',
            'label'     => Mage::helper('sm_cameraslide')->__('Preview Height'),
            'title'     => Mage::helper('sm_cameraslide')->__('Preview Height'),
            'onchange'  => 'CmrSl.collectContainer()',
            'note'      => 'Preview height only use preview in admin. Not use set height of slide in frontend website.',
            'require'   => true,
        ));

//        $bg7 = $fieldset2->addField('bg_fit', 'select', array(
//            'name'      => 'bg_fit',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Fit'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Fit'),
//            'values'    => $modelSliders->getBackgroundFit(),
//            'value'     => $modelSliders->getBgFit() ? $modelSliders->getBgFit() : 'cover',
//            'required'  => false,
//            'onchange'  => 'CmrSl.updateContainer()',
//        ));
//        $bg71 = $fieldset2->addField('bg_fit_x', 'text', array(
//            'name'      => 'bg_fit_x',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Fit X'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Fit X'),
//            'onchange'  => 'CmrSl.updateContainer()'
//        ));
//        $bg72 = $fieldset2->addField('bg_fit_y', 'text', array(
//            'name'      => 'bg_fit_y',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Fit Y'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Fit Y'),
//            'onchange'  => 'CmrSl.updateContainer()'
//        ));
//
//        $fieldset2->addField('bg_repeat', 'select', array(
//            'name'      => 'bg_repeat',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Repeat'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Repeat'),
//            'values'    => $modelSliders->getBackgroundRepeat(),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'required'  => false,
//        ));
//
//        $bg8 = $fieldset2->addField('bg_position', 'select', array(
//            'name'      => 'bg_position',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Position'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Position'),
//            'values'    => $modelSliders->getBackgroundPosition(),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'required'  => false,
//        ));
//
//        $bg81 = $fieldset2->addField('bg_position_x', 'text', array(
//            'name'      => 'bg_position_x',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Position X'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Position X'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'required'  => false,
//
//        ));
//
//        $bg82 = $fieldset2->addField('bg_position_y', 'text', array(
//            'name'      => 'bg_position_y',
//            'label'     => Mage::helper('sm_cameraslide')->__('Background Position Y'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Background Position Y'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'required'  => false,
//        ));

        $fieldset2->addField('layers', 'text', array(
            'label' => Mage::helper('sm_cameraslide')->__('Layers')
        ));
        $form->getElement('layers')->setRenderer(
            $this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_layers')
        );


        $container = $form->addFieldset('container_fieldset', array(
            'class'     => 'no-spacing'
        ));

        $left = $container->addFieldset('left_fieldset', array(
            'class'     => 'no-spacing'
        ));

        $fieldset3 = $left->addFieldset('layer_params_fieldset', array(
            'legend'    => "<i class='fa fa-list-ul'></i>".Mage::helper('sm_cameraslide')->__('Layer General Parameters'),
            'class'     => 'collapsible'
        ));

        $fieldset3->addField('layer_width', 'text', array(
	        'class'     => 'validate-number',
            'label'     => Mage::helper('sm_cameraslide')->__('Width'),
            'title'     => Mage::helper('sm_cameraslide')->__('Width'),
            'note'      => "Width use type \"%\". Ex: 40%, 50%, ... <br/> Note: with layer image, place image can the responsive, you would be best set width to layer",
            'require'   => true,
        ));

        $fieldset3->addField('layer_height', 'text', array(
	        'class'     => 'validate-number',
            'label'     => Mage::helper('sm_cameraslide')->__('Height'),
            'title'     => Mage::helper('sm_cameraslide')->__('Height'),
            'require'   => true,
            'note'      => "Height use type \"%\". Ex: 40%, 50%, ...<br/> Note: with layer image, place image can the responsive, you would be best set width to layer",
        ));

        $fieldset3->addField('layer_min_width', 'text', array(
	        'class'     => 'validate-number',
            'label'     => Mage::helper('sm_cameraslide')->__('Min Width'),
            'title'     => Mage::helper('sm_cameraslide')->__('Min Width'),
            'require'   => true,
            'note'      => "Min width use type \"%\". Ex: 40%, 50%, ...",
        ));

        $fieldset3->addField('layer_min_height', 'text', array(
	        'class'     => 'validate-number',
            'label'     => Mage::helper('sm_cameraslide')->__('Min Height'),
            'title'     => Mage::helper('sm_cameraslide')->__('Min Height'),
            'require'   => true,
            'note'      => "Min height use type \"%\". Ex: 40%, 50%, ...",
        ));

        $fieldset3->addField('layer_bg_color', 'text', array(
            'class'     => 'color {required:false}',
            'label'     => Mage::helper('sm_cameraslide')->__('Layer Background Color'),
            'title'     => Mage::helper('sm_cameraslide')->__('Layer Background Color'),
            'value'     => $modelSliders->getData('layer_bg_color') ? $modelSliders->getData('layer_bg_color') : '222222',
            'note'      => 'Loader with the color you choice',
            'require'   => false,
        ));

        $fieldset3->addField('layer_color', 'text', array(
            'class'     => 'color {required:false}',
            'label'     => Mage::helper('sm_cameraslide')->__('Layer Text Color'),
            'title'     => Mage::helper('sm_cameraslide')->__('Layer Text Color'),
            'value'     => $modelSliders->getData('layer_color') ? $modelSliders->getData('layer_color') : 'EEEEEE',
            'note'      => 'Loader with the color you choice',
            'require'   => false,
        ));

        $fieldset3->addField('layer_text_align', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Text Align'),
            'title'     => Mage::helper('sm_cameraslide')->__('Text Align'),
            'values'    => $modelSliders->getOptsTextAlign(),
        ));

        $fieldset3->addField('layer_textBold', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Text Bold'),
            'title'     => Mage::helper('sm_cameraslide')->__('Text Bold'),
            'values'    => $modelSliders->getOptsTextBold(),
        ));

        $fieldset3->addField('layer_textItalic', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Text Italic'),
            'title'     => Mage::helper('sm_cameraslide')->__('Text Italic'),
            'values'    => $modelSliders->getOptsTextItalic(),
        ));

        $fieldset3->addField('layer_textUnderline', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Text Underline'),
            'title'     => Mage::helper('sm_cameraslide')->__('Text Underline'),
            'values'    => $modelSliders->getOptsTextUnderline(),
        ));

        $fieldset3->addField('layer_font_family', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Font Family'),
            'title'     => Mage::helper('sm_cameraslide')->__('Font Family'),
            'note'      => "Ex: \"Open Sans\", Helvetica, Arial, sans-serif <br/>"
                ." Note: Separate each value with a comma. If a font name contains white-space, it must be quoted. Single quotes must be used when using the \"style\" attribute in HTML.",
        ));

        $fieldset3->addField('layer_font_size', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Font Size'),
            'title'     => Mage::helper('sm_cameraslide')->__('Font Size'),
            'class'     => 'validate-number',
            'require'   => true,
            'note'      => "Only use type number. Ex : 13, 14, ..."
        ));

        $fieldset3->addField('layer_top', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Top'),
            'title'     => Mage::helper('sm_cameraslide')->__('Top'),
            'class'     => 'validate-number',
            'require'   => true,
            'note'      => "Only use type number. Ex : 50, 100, ..."
        ));

        $fieldset3->addField('layer_left', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Left'),
            'title'     => Mage::helper('sm_cameraslide')->__('Right'),
            'class'     => 'validate-number',
            'require'   => true,
            'note'      => "Only use type number, Ex : 50, 100, ..."
        ));

//        $fieldset3->addField('layer_right', 'text', array(
//            'label'     => Mage::helper('sm_cameraslide')->__('Right'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Right'),
//            'class'     => 'validate-number',
//            'require'   => true,
//            'note'      => "Only use type number. Ex : 50, 100, ..."
//        ));
//
//        $fieldset3->addField('layer_bottom', 'text', array(
//            'label'     => Mage::helper('sm_cameraslide')->__('Bottom'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Bottom'),
//            'class'     => 'validate-number',
//            'require'   => true,
//            'note'      => "Only use type number. Ex : 50, 100, ..."
//        ));

        $right = $container->addFieldset('right_fieldset', array(
            'class'     => 'no-spacing'
        ));

        $fieldset4 = $right->addFieldset('layer_time_fieldset', array(
            'legend'    => "<i class='fa fa-sort-numeric-asc'></i>".Mage::helper('sm_cameraslide')->__('Layers Timing & Sorting')
        ));

        $fieldset4->setHeaderBar(
            $this->getLayout()->createBlock('adminhtml/widget_button', '', array(
                'label'     => "<i class='fa fa-list'></i>".Mage::helper('sm_cameraslide')->__('By Depth'),
                'title'     => Mage::helper('sm_cameraslide')->__('By Depth'),
                'type'      => 'button',
                'onclick'   => 'CmrSl.sortLayerItem(this,\'depth\')'
            ))->toHtml()
            .'&nbsp;'.

//            $this->getLayout()->createBlock('adminhtml/widget_button', '', array(
//                'label'     => "<i class='fa fa-clock-o'></i>".Mage::helper('sm_cameraslide')->__('By Time'),
//                'title'     => Mage::helper('sm_cameraslide')->__('By Time'),
//                'type'      => 'button',
//                'class'     => 'normal',
//                'onclick'   => 'CmrSl.sortLayerItem(this,\'time\')'
//            ))->toHtml()
//            .'&nbsp;'.
            $this->getLayout()->createBlock('adminhtml/widget_button', '', array(
                'label'     => "<i class='fa fa-eye'></i>",
                'title'		=> Mage::helper('sm_cameraslide')->__('Hide All Layer'),
                'type'		=> 'button',
                'class'     => 'btn-hide-all normal ',
                'id'		=> 'button_sort_visibility',
                'onclick'   => 'CmrSl.setHideAll()'
            ))->toHtml()
        );

        $fieldset4->addField('list_sorting', 'text', array());
        $form->getElement('list_sorting')->setRenderer(
            $this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_sorting')
        );

        $fieldset5 = $form->addFieldset('layer_animate_fieldset', array(
            'legend'    => "<i class='fa fa-outdent'></i>".Mage::helper('sm_cameraslide')->__('Layer Animation '),
            'class'     => 'collapsible'
        ));

        $fieldset5->addField('layer_animation_preview', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Preview Transition'),
            'note'      => Mage::helper('sm_cameraslide')->__('Preview Transition (Start & End Time is ignored during demo)')
        ));

        $form->getElement('layer_animation_preview')->setRenderer(
            $this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_animation')
        );

        $fieldset5->addField('layer_class', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Layer Class'),
            'title'     => Mage::helper('sm_cameraslide')->__('Layer Class'),
            'require'   => false,
            'note'      => 'Class not contain space. Ex: class_1, class_2, ...'
        ));

        $fieldset5->addField('layer_time_transitions', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Time Transitions Layer'),
            'title'     => Mage::helper('sm_cameraslide')->__('Time Transitions Layer'),
            'require'   => false,
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Time delay load of a layer in milliseconds'
        ));

        $fieldset5->addField('layer_time_delay_transitions', 'text', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Time Delay Transitions Layer'),
            'title'     => Mage::helper('sm_cameraslide')->__('Time Delay Transitions Layer'),
            'require'   => false,
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Time delay load of a layer in milliseconds'
        ));

//        $bg9 = $fieldset5->addField('layer_enable_link', 'select', array(
//            'name'      => 'layer_enable_link',
//            'label'     => Mage::helper('sm_cameraslide')->__('Enable Link'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Enable Link'),
//            'values'    => $modelSliders->getOptionYesNo(),
//            'onchange'  => 'CmrSl.updateContainer()',
//        ));

	    $fieldset5->addField('layer_alt_image', 'text', array(
		    'label'     => Mage::helper('sm_cameraslide')->__('Alt Image'),
		    'title'     => Mage::helper('sm_cameraslide')->__('Alt Image'),
		    'onchange'  => 'CmrSl.updateContainer()',
		    'require'   => false,
	    ));

        $fieldset5->addField('layer_text', 'textarea', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Text / Html'),
            'title'     => Mage::helper('sm_cameraslide')->__('Text / Html'),
            'onchange'  => 'CmrSl.updateContainer()'
        ));

//        $bg91 = $fieldset5->addField('layer_title_link', 'text', array(
//            'name'      => 'layer_title_link',
//            'label'     => Mage::helper('sm_cameraslide')->__('Title Link'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Title Link'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => "Title link is name of link and title show when you hover mouse on link"
//        ));
//
//        $bg92 = $fieldset5->addField('layer_alt_link', 'text', array(
//            'class'     => 'alt_link',
//            'name'      => 'layer_alt_link',
//            'label'     => Mage::helper('sm_cameraslide')->__('Alt Link'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Alt Link'),
//            'onchange'  => 'CmrSl.updateContainer()'
//        ));
//
//        $bg93 = $fieldset5->addField('layer_target_link', 'select', array(
//            'name'      => 'layer_target_link',
//            'label'     => Mage::helper('sm_cameraslide')->__('Target Link'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Target Link'),
//            'values'     => $modelSliders->getDataTarget(),
//            'onchange'  => 'CmrSl.updateContainer()'
//        ));
//
//        $bg94 = $fieldset5->addField('layer_link', 'text', array(
//            'name'      => 'layer_link',
//            'label'     => Mage::helper('sm_cameraslide')->__('Http Link'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Http Link'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => "Http link can is full link \"http://magento.com, ...\" or short link \"magento.com, ...\". <br/>".
//                "Note: With link type \"https://www.google.com.vn\", \"https://...\", you only can use full link \"https://www.google.com.vn\", \"https://...\""
//        ));

//        $fieldset5->addField('layer_animation', 'select', array(
////            'name'      => 'layer_animation',
//            'label'     => Mage::helper('sm_cameraslide')->__('Captions'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Captions'),
//            'values'    => $modelSliders->getLayerAnimation(),
//            'require'   => false
//        ));

        $fieldset5->addField('layer_data_fxin', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Data Sliders Transitions In'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Sliders Transitions In'),
            'values'    => $modelSliders->getFadeIn(),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Transions in sliders on slide',
            'require'   => false,
        ));

        $fieldset5->addField('layer_data_fxout', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Data Sliders Transitions Out'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Sliders Transitions Out'),
            'values'    => $modelSliders->getFadeOut(),
            'onchange'  => 'CmrSl.updateContainer()',
//            'value'     => $modelSliders->getData('data_transitions_fx') ? $modelSliders->getData('data_transitions_fx') : array('random'),
            'note'      => 'Transions out sliders on slide',
            'require'   => false,
        ));

        $fieldset5->addField('layer_data_fadein', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Data Fade In'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Fade In'),
            'values'    => $modelSliders->getTrueFalse(),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Fade in sliders on slide',
            'require'   => false,
        ));

        $fieldset5->addField('layer_data_fadeout', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Data Fade Out'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Fade Out'),
            'values'    => $modelSliders->getTrueFalse(),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Fade out sliders on slide',
            'require'   => false,
        ));

//        $fieldset5->addField('layer_data_rotatein', 'select', array(
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Rotate In'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Rotate In'),
//            'values'    => $modelSliders->getTrueFalse(),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Rotate in sliders on slide',
//            'require'   => false,
//        ));
//
//        $fieldset5->addField('layer_data_rotateout', 'select', array(
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Rotate Out'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Rotate Out'),
//            'values'    => $modelSliders->getTrueFalse(),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Rotate out sliders on slide',
//            'require'   => false,
//        ));

//        $fieldset5->addField('layer_data_easing', 'select', array(
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Easing'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Easing'),
//            'values'    => $modelSliders->getDataEasing(),
//            'note'      => 'The easing effect for only layer',
//            'require'   => false
//        ));

        $fieldset5->addField('layer_data_easein', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Data Easing In'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Easing In'),
            'values'    => $modelSliders->getDataEasing(),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'The easing effect for only layer',
            'require'   => false
        ));

        $fieldset5->addField('layer_data_easeout', 'select', array(
            'label'     => Mage::helper('sm_cameraslide')->__('Data Easing Out'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Easing Out'),
            'values'    => $modelSliders->getDataEasing(),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'The easing effect for only layer',
            'require'   => false
        ));

//        $fieldset5->addField('layer_data_mobile_easing', 'select', array(
//            'label'     => Mage::helper('sm_cameraslide')->__('Data Mobile Easing'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Data Mobile Easing'),
//            'values'    => $modelSliders->getDataMobileEasing(),
//            'note'      => 'The easing effect for mobile devices only',
//            'require'   => false
//        ));


        Mage::dispatchEvent('adminhtml_sliders_edit_tab_main_prepare_form', array('form' => $form));
        /*
         * Điều kiện if sẽ phân biệt trường hợp add và edit là khác nhau
         *
         * + nếu có Id thì sẽ setValues với values của id đó.
         * + nếu ko có Id thì sẽ setValues với values mặc định của addField
         * */
        if($modelSliders->getId()){
            $form->setValues($modelSliders->getData());
        }
        $this->setForm($form);

        $this->setChild('form_after', $this->getLayout()->createBlock('adminhtml/widget_form_element_dependence')
            ->addFieldMap($bg->getHtmlId(), $bg->getName())
            ->addFieldMap($bg1->getHtmlId(), $bg1->getName())
//            ->addFieldMap($bg2->getHtmlId(), $bg2->getName())
//            ->addFieldMap($bg3->getHtmlId(), $bg3->getName())
//            ->addFieldMap($bg31->getHtmlId(), $bg31->getName())
//            ->addFieldMap($bg32->getHtmlId(), $bg32->getName())
//            ->addFieldMap($bg33->getHtmlId(), $bg33->getName())
//            ->addFieldMap($bg34->getHtmlId(), $bg34->getName())
//            ->addFieldMap($bg35y->getHtmlId(), $bg35y->getName())
//            ->addFieldMap($bg35h->getHtmlId(), $bg35h->getName())
//            ->addFieldMap($bg36->getHtmlId(), $bg36->getName())
//            ->addFieldMap($bg37->getHtmlId(), $bg37->getName())
//            ->addFieldMap($bg38a->getHtmlId(), $bg38a->getName())
//            ->addFieldMap($bg38b->getHtmlId(), $bg38b->getName())
//            ->addFieldMap($bg39->getHtmlId(), $bg39->getName())
//            ->addFieldMap($bg310->getHtmlId(), $bg310->getName())
//            ->addFieldMap($bg311->getHtmlId(), $bg311->getName())
//            ->addFieldMap($bg312->getHtmlId(), $bg312->getName())
//            ->addFieldMap($bg313->getHtmlId(), $bg313->getName())
//            ->addFieldMap($bg314->getHtmlId(), $bg314->getName())
//            ->addFieldMap($bg315->getHtmlId(), $bg315->getName())
//            ->addFieldMap($bg316->getHtmlId(), $bg316->getName())
//            ->addFieldMap($bg4a->getHtmlId(), $bg4a->getName())
//            ->addFieldMap($bg4b->getHtmlId(), $bg4b->getName())
//            ->addFieldMap($bg5->getHtmlId(), $bg5->getName())
            ->addFieldMap($bg6->getHtmlId(), $bg6->getName())
//            ->addFieldMap($bg7->getHtmlId(), $bg7->getName())
//            ->addFieldMap($bg71->getHtmlId(), $bg71->getName())
//            ->addFieldMap($bg72->getHtmlId(), $bg72->getName())
//            ->addFieldMap($bg8->getHtmlId(), $bg8->getName())
//            ->addFieldMap($bg81->getHtmlId(), $bg81->getName())
//            ->addFieldMap($bg82->getHtmlId(), $bg82->getName())
//            ->addFieldMap($bg9->getHtmlId(), $bg9->getName())
//            ->addFieldMap($bg91->getHtmlId(), $bg91->getName())
//            ->addFieldMap($bg92->getHtmlId(), $bg92->getName())
//            ->addFieldMap($bg93->getHtmlId(), $bg93->getName())
//            ->addFieldMap($bg94->getHtmlId(), $bg94->getName())
            ->addFieldDependence($bg1->getName(), $bg->getName(), 'image')
//            ->addFieldDependence($bg2->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg3->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg31->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg31->getName(), $bg3->getName(), 'html5')
//            ->addFieldDependence($bg32->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg32->getName(), $bg3->getName(), 'html5')
//            ->addFieldDependence($bg33->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg33->getName(), $bg3->getName(), 'html5')
//            ->addFieldDependence($bg34->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg35y->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg35y->getName(), $bg3->getName(), 'youtube')
//            ->addFieldDependence($bg35h->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg35h->getName(), $bg3->getName(), 'html5')
//            ->addFieldDependence($bg36->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg37->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg37->getName(), $bg3->getName(), 'html5')
//            ->addFieldDependence($bg38a->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg38a->getName(), $bg3->getName(), 'youtube')
//            ->addFieldDependence($bg38b->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg38b->getName(), $bg3->getName(), 'player.vimeo.com')
//            ->addFieldDependence($bg39->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg39->getName(), $bg3->getName(), 'player.vimeo.com')
//            ->addFieldDependence($bg310->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg310->getName(), $bg3->getName(), 'youtube')
//            ->addFieldDependence($bg311->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg311->getName(), $bg3->getName(), 'youtube')
//            ->addFieldDependence($bg312->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg313->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg314->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg315->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg316->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg4a->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg4b->getName(), $bg->getName(), 'video')
//            ->addFieldDependence($bg4a->getName(), $bg3->getName(), 'youtube')
//            ->addFieldDependence($bg4b->getName(), $bg3->getName(), 'player.vimeo.com')
//            ->addFieldDependence($bg5->getName(), $bg->getName(), 'video')
            ->addFieldDependence($bg6->getName(), $bg->getName(), 'color')
//            ->addFieldDependence($bg71->getName(), $bg7->getName(), 'percentage')
//            ->addFieldDependence($bg72->getName(), $bg7->getName(), 'percentage')
//            ->addFieldDependence($bg81->getName(), $bg8->getName(), 'position_fixed')
//            ->addFieldDependence($bg82->getName(), $bg8->getName(), 'position_fixed')
//            ->addFieldDependence($bg91->getName(), $bg9->getName(), '1')
//            ->addFieldDependence($bg92->getName(), $bg9->getName(), '1')
//            ->addFieldDependence($bg93->getName(), $bg9->getName(), '1')
//            ->addFieldDependence($bg94->getName(), $bg9->getName(), '1')
        );
        return parent::_prepareForm();
    }
}