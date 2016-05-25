<?php
/**
 * Created by PhpStorm.
 * User: Vu Van Phan
 * Date: 15-05-2015
 * Time: 16:56
 */
class Sm_Cameraslide_Block_Adminhtml_Sliders_Video_Form extends Mage_Adminhtml_Block_Widget_Form
{
//    protected function _prepareLayout()
//    {
//        $head = $this->getLayout()->getBlock('head');
//        if(Mage::app()->getRequest()->getActionName() == 'addSliders')
//        {
//
//        }
//    }

    protected function _prepareForm()
    {
        $modelSliders = Mage::getModel('sm_cameraslide/sliders');

        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'method' => 'post'
        ));

        $view = $form->addFieldset('video_view_fieldset', array(
            'legend' => $this->helper('sm_cameraslide')->__('Video Preview')
        ));

        $view->addField('video_title', 'text', array(
            'label' => $this->helper('sm_cameraslide')->__('Video Title')
        ));

        $view->addField('video_thumb', 'text', array(
            'label' => $this->helper('sm_cameraslide')->__('Video Thumb')
        ));

        $form->getElement('video_thumb')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_thumb'));

        $fieldset = $form->addFieldset('video_info_fieldset', array(
            'legend' => $this->helper('sm_cameraslide' )->__('Video Settings')
        ));

        $bg = $fieldset->addField('service_video', 'select', array(
            'name'      => 'service_video',
            'label'     => Mage::helper('sm_cameraslide')->__('Select Service Video'),
            'title'     => Mage::helper('sm_cameraslide')->__('Select Service Video'),
            'values'    => $modelSliders->getServiceVideo(),
            'required'  => true,
            'onchange'  => 'CmrSl.updateContainer()',
        ));

        $bg1a = $fieldset->addField('src_video', 'text', array(
            'name'      => 'src_video',
            'label'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
            'title'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
            'onchange'  => 'CmrSl.updateContainer()',
            'required'  => true,
            'note'      => 'Ex: s-CGC4BDu6U or 30300114',
        ));

        $s = $fieldset->addField('video_search', 'text', array ());
        $form->getElement('video_search')->setRenderer( $this->getLayout()->createBlock( 'sm_cameraslide/adminhtml_widget_form_search', '', array(
            'element' => $s
        ) ) );

        $bg31 = $fieldset->addField('html5_mp4_video', 'text', array(
            'name'      => 'html5_mp4_video',
            'label'     => Mage::helper('sm_cameraslide')->__('Video MP4 Url'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video MP4 Url'),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Video mp4 choice to PC you or source other',
        ));

        $form->getElement('html5_mp4_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browser', '', array(
            'element'   => $bg31
        )));

        $bg32 = $fieldset->addField('html5_webm_video', 'text', array(
            'name'      => 'html5_webm_video',
            'label'     => Mage::helper('sm_cameraslide')->__('Video WEBM Url'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video WEBM Url'),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Video webm choice to PC you or source other',
        ));

        $form->getElement('html5_webm_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browser', '', array(
            'element'   => $bg32
        )));

        $bg33 = $fieldset->addField('html5_ogg_video', 'text', array(
            'name'      => 'html5_ogg_video',
            'label'     => Mage::helper('sm_cameraslide')->__('Video OGG Url'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video OGG Url'),
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => 'Video ogg choice to PC you or source other',
        ));

        $form->getElement('html5_ogg_video')->setRenderer($this->getLayout()->createBlock('sm_cameraslide/adminhtml_widget_form_browser', '', array(
            'element'   => $bg33
        )));

        $fieldset->addField('video_width', 'text', array(
            'name'      => 'video_width',
            'label'     => Mage::helper('sm_cameraslide')->__('Video Width'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video Width'),
            'value'     => $modelSliders->getData('video_width') ? $modelSliders->getData('video_width') : '100%',
            'onchange'  => "CmrSl.updateContainer()",
            'note'      => "Use type \"%\". Ex: 40%, 50%, ...",
        ));

        $fieldset->addField('video_height', 'text', array(
            'name'      => 'video_height',
            'label'     => Mage::helper('sm_cameraslide')->__('Video Height'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video Height'),
            'value'    => $modelSliders->getData('video_height') ? $modelSliders->getData('video_height') : '100%',
            'onchange'  => "CmrSl.updateContainer()",
            'note'      => "Use type \"%\". Ex: 40%, 50%, ...",
        ));

        $fieldset->addField('video_class', 'text', array(
            'name'      => 'video_class',
            'label'     => Mage::helper('sm_cameraslide')->__('Video Class'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video Class'),
            'onchange'  => "CmrSl.updateContainer()",
            'note'      => 'Class not contain space. Ex: class_1, class_2, ...'
        ));

        $fieldset->addField('video_fullwidth', 'checkbox', array(
            'name' => 'video_fullwidth',
            'label' => $this->helper( 'sm_cameraslide' )->__( 'Full Width' ),
            'title' => $this->helper( 'sm_cameraslide' )->__( 'Full Width' ),
            'onchange' => 'CmrSl.onChangeVideoFullWidth(this)'
        ));

        $fieldset->addField('video_loop', 'checkbox', array(
            'name'      => 'video_loop',
            'label'     => Mage::helper('sm_cameraslide')->__('Video Loop'),
            'title'     => Mage::helper('sm_cameraslide')->__('Video Loop'),
//            'values'    => $modelSliders->getVideoLoop(),
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('video_controls', 'checkbox', array(
            'name'      => 'video_controls',
            'label'     => Mage::helper('sm_cameraslide')->__('Show Controls'),
            'title'     => Mage::helper('sm_cameraslide')->__('Show Controls'),
//            'values'    => $modelSliders->getVideoControls(),
            'value'     => $modelSliders->getData('video_controls') ? $modelSliders->getData('video_controls') : 'controls',
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('video_autoplay', 'checkbox', array(
            'name'      => 'video_autoplay',
            'label'     => Mage::helper('sm_cameraslide')->__('Auto Play'),
            'title'     => Mage::helper('sm_cameraslide')->__('Auto Play'),
//            'values'    => $modelSliders->getVideoAutoPlay(),
            'onchange'  => "CmrSl.updateContainer()",
            'note'      => 'Video auto play but time load of sliders is running. You want the watch full video,you can click on the video sliders or pause slide to watch full video'
        ));

        $fieldset->addField('video_muted', 'checkbox', array(
            'name'      => 'video_muted',
            'label'     => Mage::helper('sm_cameraslide')->__('Mute'),
            'title'     => Mage::helper('sm_cameraslide')->__('Mute'),
//            'values'    => $modelSliders->getVideoMuted(),
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('video_showinfo', 'checkbox', array(
            'name'      => 'video_showinfo',
            'label'     => Mage::helper('sm_cameraslide')->__('Show Information Of Video'),
            'title'     => Mage::helper('sm_cameraslide')->__('Show Information Of Video'),
//            'values'    => $modelSliders->getVideoShowInfo(),
            'value'     => $modelSliders->getData('video_showinfo') ? $modelSliders->getData('video_showinfo') : '1',
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('video_colorcontrolsvimeo', 'text', array(
            'class'     => 'color{required:false}',
            'name'      => 'video_colorcontrolsvimeo',
            'label'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Vimeo'),
            'title'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Vimeo'),
            'value'     => $modelSliders->getData('video_colorcontrolsvimeo') ? $modelSliders->getData('video_colorcontrolsvimeo') : '00ADEF',
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('video_autohide', 'checkbox', array(
            'name'      => 'video_autohide',
            'label'     => Mage::helper('sm_cameraslide')->__('Auto Hidden Controls'),
            'title'     => Mage::helper('sm_cameraslide')->__('Auto Hidden Controls'),
//            'values'    => $modelSliders->getVideoAutoHide(),
            'value'     => $modelSliders->getData('video_autohide') ? $modelSliders->getData('video_autohide') : '1',
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('video_colorcontrolsyoutube', 'select', array(
            'name'      => 'video_colorcontrolsyoutube',
            'label'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Youtube'),
            'title'     => Mage::helper('sm_cameraslide')->__('Color Of Controls Youtube'),
            'values'    => $modelSliders->getVideoColorYoutube(),
            'onchange'  => "CmrSl.updateContainer()"
        ));

        $fieldset->addField('data_video', 'select', array(
            'name'      => 'data_video',
            'label'     => Mage::helper('sm_cameraslide')->__('Data Video'),
            'title'     => Mage::helper('sm_cameraslide')->__('Data Video'),
            'values'    => $modelSliders->getDataVideo(),
            'value'     => $modelSliders->getData('data_video') ? $modelSliders->getData('data_video') : '',
            'onchange'  => 'CmrSl.updateContainer()',
            'note'      => '"hide" is the unique possible value. If you use this data- attribute means you are using a video on your slideshow.
                            The videos on Camera can be displayed only after the transition.
                            By adding this data- attribute you must click the image to display the video, otherwise the video will be displayed automatically after the transition.
                            More info are available on the demo pages',
            'require'   => false,
        ));
//
//        $bg1b = $fieldset->addField('src_video_2', 'text', array(
//            'name'      => 'src_video_2',
//            'label'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
//            'title'     => Mage::helper('sm_cameraslide')->__('Enter video ID or URL'),
//            'onchange'  => 'CmrSl.updateContainer()',
//            'note'      => 'Ex: s-CGC4BDu6U or 30300114',
//        ));

//        $v  = $fieldset->addField( 'video_type', 'select', array(
//            'name' => 'video_type',
//            'label' => $this->helper( 'sm_cameraslide' )->__( 'Select video service' ),
//            'required' => true,
//            'values' => $this->getVideoServices(),
////            'onchange' => 'DnmSl.onChangeVideoType(this)'
//        ));

        $this->setChild('form_after', $this->getLayout()->createBlock('adminhtml/widget_form_element_dependence')
            ->addFieldMap($bg->getHtmlId(), $bg->getName())
            ->addFieldMap($bg1a->getHtmlId(), $bg1a->getName())
            ->addFieldMap($s->getHtmlId(), $s->getName())
            ->addFieldDependence($bg1a->getName(), $bg->getName(), array('youtube', 'player.vimeo.com'))
            ->addFieldDependence($s->getName(), $bg->getName(), array('youtube', 'player.vimeo.com'))
        );

        $form->setUseContainer( true );
        $this->setForm( $form );
        return parent::_prepareForm();
    }

    public function getVideoServices()
    {
        return array(
            array(
                'value' => 'youtube',
                'label' => $this->helper( 'sm_cameraslide' )->__( 'Youtube' )
            ),
            array(
                'value' => 'vimeo',
                'label' => $this->helper( 'sm_cameraslide' )->__( 'Vimeo' )
            ),
            array(
                'value' => 'html5',
                'label' => $this->helper( 'sm_cameraslide' )->__( 'HTML5' )
            )
        );
    }
}