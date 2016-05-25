<?php
    class Sm_Cameraslide_Block_Adminhtml_Cameraslide_Edit_Tab_General extends Mage_Adminhtml_Block_Widget_Form
    {
        protected function _prepareLayout()
        {
            $head = $this->getLayout()->getBlock('head');
            if((Mage::app()->getRequest()->getActionName() == 'edit') || (Mage::app()->getRequest()->getActionName() == 'new'))
            {
                $head->addCss('prototype/windows/themes/default.css');
                $head->addCss('prototype/windows/themes/magento.css');
                $head->addCss('lib/prototype/windows/themes/magento.css');
                $head->addJs('lib/flex.js');
                $head->addJs('lib/FABridge.js');
                $head->addJs('mage/adminhtml/flexuploader.js');
                $head->addJs('sm/cameraslide/js/renderhelper.js');
            }
            $return = parent::_prepareLayout();
            if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
                $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
            }
            return $return;
        }
        /*
         *  Prepare form elements
         *
         *  @return Mage_Adminhtml_Block_Widget_Form
         * */
        public function _prepareForm()
        {
            $model = Mage::registry('slide');
            /*
             * Checking id use have permissions to save information
             * */
            if(Mage::helper('sm_cameraslide/admin')->isActionAllowed('save'))
            {
                $isElementDisabled = false;
            }else{
                $isElementDisabled = true;
            }
            $form = new Varien_Data_Form();
            $form->setHtmlIdPrefix('cameraslide_general_');

            $fieldset = $form->addFieldset('base_fieldset', array(
                'legend'    => "<i class='fa fa-gears'></i>".Mage::helper('sm_cameraslide')->__('General Options'),
                'class'     => 'collapsible'
            ));

            if($model->getId())
            {
                $fieldset->addField('slide_id', 'hidden', array(
                    'name'  => 'slide_id'
                ));
            }

            $fieldset->addField('name_slide', 'text', array(
                'name'      => 'name_slide',
                'label'     => Mage::helper('sm_cameraslide')->__('Name Slide'),
                'title'     => Mage::helper('sm_cameraslide')->__('Name Slide'),
                'class'     => 'required-entry',
                'required'  => true,
                'disable'   => $isElementDisabled
            ));

            $fieldset->addField('status', 'select', array(
                'name'      => 'status',
                'label'     => Mage::helper('sm_cameraslide')->__('Status'),
                'title'     => Mage::helper('sm_cameraslide')->__('Status'),
                'require'   => false,
                'type'      => 'options',
                'options'   => $model->getOptionStatus(),
                'disable'   => $isElementDisabled
            ));

            $fieldset->addField('slide_width', 'text', array(
                'class'     => 'required-entry validate-number',
                'name'      => 'slide_width',
                'label'     => Mage::helper('sm_cameraslide')->__('Slide Width'),
                'title'     => Mage::helper('sm_cameraslide')->__('Slide Width'),
                'require'   => true,
                'value'     => $model->getData('slide_width') ? $model->getData('slide_width') : '100',
                'note'      => 'The width of the slide you want, here only use type "%"',
                'disable'   => $isElementDisabled
            ));

            $fieldset->addField('slide_height', 'text', array(
                'class'     => 'required-entry validate-number',
                'name'      => 'slide_height',
                'label'     => Mage::helper('sm_cameraslide')->__('Slide Height'),
                'title'     => Mage::helper('sm_cameraslide')->__('Slide Height'),
                'require'   => true,
                'value'     => $model->getData('slide_height') ? $model->getData('slide_height') : '574',
                'disable'   => $isElementDisabled,
	            'note'      => 'The height of slide you want, here only use type "px"'
            ));

//            $fieldset->addField('height_type', 'select', array(
//                'name'      => 'height_type',
//                'label'     => Mage::helper('sm_cameraslide')->__('Slide Height Type'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Slide Height Type'),
//                'note'      => 'Allow set number height of the slide you want, here you can type pixels (for instance &CloseCurlyQuote;574px&CloseCurlyQuote;), a percentage (relative to the width of the slideshow, for instance &CloseCurlyQuote;50%&CloseCurlyQuote;)',
//                'require'   => false,
//                'options'     => $model->getOptionType(),
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('slide_min_height', 'text', array(
//                'class'     => 'required-entry validate-number',
//                'name'      => 'slide_min_height',
//                'label'     => Mage::helper('sm_cameraslide')->__('Slide Min Height'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Slide Min Height'),
//                'require'   => true,
//                'value'     => $model->getData('slide_height') ? $model->getData('slide_height') : '200',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('min_height_type', 'select', array(
//                'name'      => 'min_height_type',
//                'label'     => Mage::helper('sm_cameraslide')->__('Slide Min Height Type'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Slide Min Height Type'),
//                'note'      => 'You can also leave it blank, here you can type pixels (for instance &CloseCurlyQuote;300px&CloseCurlyQuote;), a percentage (relative to the width of the slideshow, for instance &CloseCurlyQuote;50%&CloseCurlyQuote;) or auto',
//                'require'   => false,
//                'options'     => $model->getOptionType(),
//                'disable'   => $isElementDisabled
//            ));

            $fieldset->addField('time_load', 'text', array(
                'class'     => 'validate-number required-entry',
                'name'      => 'time_load',
                'label'     => Mage::helper('sm_cameraslide')->__('Time Load'),
                'title'     => Mage::helper('sm_cameraslide')->__('Time Load'),
                'require'   => true,
                'note'      => Mage::helper('sm_cameraslide')->__('Milliseconds between the end of the sliding effect and start of the next one'),
                'value'     => (int)$model->getData('time_load') ? (int)$model->getData('time_load') : 7000,
                'disable'   => $isElementDisabled
            ));

            $fieldset->addField('trans_period', 'text', array(
                'class'     => 'validate-number required-entry',
                'name'      => 'trans_period',
                'label'     => Mage::helper('sm_cameraslide')->__('Translate Period'),
                'title'     => Mage::helper('sm_cameraslide')->__('Translate Period'),
                'require'   => true,
                'value'     => (int)$model->getData('time_load') ? (int)$model->getData('time_load') : 1500,
                'note'      => Mage::helper('sm_cameraslide')->__('Length of the sliding effect in milliseconds'),
                'disable'   => $isElementDisabled
            ));

//            $fieldset->addField('data_until', 'text', array(
//                'class'     => 'validate-number',
//                'name'      => 'data_until',
//                'label'     => Mage::helper('sm_cameraslide')->__('Data Until'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Data Until'),
//                'require'   => true,
//                'value'     => (int)$model->getData('data_until') ? (int)$model->getData('data_until') : 768,
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('pause_hover', 'select', array(
//                'name'      => 'pause_hover',
//                'label'     => Mage::helper('sm_cameraslide')->__('Pause Hover'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Pause Hover'),
//                'require'   => false,
//                'type'      => 'options',
//                'options'   => $model->getTrueFalse(),
//                'note'      => 'Pause on state hover. Not available for mobile devices',
//                'disable'   => $isElementDisabled
//            ));

            $fieldset->addField('play_pause', 'select', array(
                'name'      => 'play_pause',
                'label'     => Mage::helper('sm_cameraslide')->__('Play Pause'),
                'title'     => Mage::helper('sm_cameraslide')->__('Play Pause'),
                'require'   => false,
                'type'      => 'options',
                'options'   => $model->getTrueFalse(),
                'note'      => 'To display or not the play/pause buttons',
                'disable'   => $isElementDisabled
            ));

//            $fieldset->addField('pause_on_click', 'select', array(
//                'name'      => 'pause_on_click',
//                'label'     => Mage::helper('sm_cameraslide')->__('Pause On CLick'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Pause On Click'),
//                'require'   => false,
//                'type'      => 'options',
//                'options'   => $model->getTrueFalse(),
//                'note'      => 'It stops the slideshow when you click the slide',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('slide_on', 'select', array(
//                'name'      => 'slide_on',
//                'label'     => Mage::helper('sm_cameraslide')->__('Slide On'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Slide On'),
//                'require'   => false,
//                'type'      => 'options',
//                'options'   => $model->getSlideOn(),
//                'value'     => $model->getData('slide_on') ? $model->getData('slide_on') : 'random',
//                'note'      => 'Decide if the transition effect will be applied to the current (prev) or the next slide',
//                'disable'   => $isElementDisabled
//            ));

            $fieldset->addField('auto_advance', 'select', array(
                'name'      => 'auto_advance',
                'label'     => Mage::helper('sm_cameraslide')->__('Auto Advance'),
                'title'     => Mage::helper('sm_cameraslide')->__('Auto Advance'),
                'require'   => false,
                'type'      => 'options',
                'options'   => $model->getTrueFalse(),
                'note'      => 'Use or not auto transitions slide',
                'disable'   => $isElementDisabled
            ));

            $fieldset->addField('prev_next', 'select', array(
                'name'      => 'prev_next',
                'label'     => Mage::helper('sm_cameraslide')->__('Prev Next'),
                'title'     => Mage::helper('sm_cameraslide')->__('Prev Next'),
                'require'   => false,
                'type'      => 'options',
                'options'   => $model->getTrueFalse(),
                'note'      => 'To display or not the prev / next buttons',
                'disable'   => $isElementDisabled
            ));

//            $fieldset->addField('cols', 'text', array(
//                'class'     => 'validate-number required-entry',
//                'name'      => 'cols',
//                'label'     => Mage::helper('sm_cameraslide')->__('Number Columns'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Number Columns'),
//                'require'   => true,
//                'value'     => $model->getData('cols') ? $model->getData('cols') : 6,
//                'note'      => "The number colums of sliders to split. <br /> Recommended : you don't the setup \"Number Colums\" is very large, because slide can the stop load",
//                'disable'   => $isElementDisabled
//            ));
//
//            $fieldset->addField('sliced_cols', 'text', array(
//                'class'     => 'validate-number required-entry',
//                'name'      => 'sliced_cols',
//                'label'     => Mage::helper('sm_cameraslide')->__('Sliced Columns'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Sliced Columns'),
//                'require'   => true,
//                'value'     => $model->getData('sliced_cols') ? $model->getData('sliced_cols') : 12,
//                'note'      => 'If 0 the same value of cols',
//                'disable'   => $isElementDisabled
//            ));
//
//            $fieldset->addField('rows', 'text', array(
//                'class'     => 'validate-number required-entry',
//                'name'      => 'rows',
//                'label'     => Mage::helper('sm_cameraslide')->__('Number Rows'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Number Rows'),
//                'require'   => true,
//                'value'     => $model->getData('rows') ? $model->getData('rows') : 4,
//                'note'      => "The number rows of sliders to split. <br /> Recommended : you don't the setup \"Number Cols\" is very large, because slide can the stop load",
//                'disable'   => $isElementDisabled
//            ));
//
//            $fieldset->addField('sliced_rows', 'text', array(
//                'class'     => 'validate-number required-entry',
//                'name'      => 'sliced_rows',
//                'label'     => Mage::helper('sm_cameraslide')->__('Sliced Rows'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Sliced Rows'),
//                'require'   => true,
//                'value'     => $model->getData('sliced_cols') ? $model->getData('sliced_cols') : 8,
//                'note'      => 'If 0 the same value of rows',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('effect_easing', 'select', array(
//                'name'      => 'effect_easing',
//                'label'     => Mage::helper('sm_cameraslide')->__('Effect Easing'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Effect Easing'),
//                'require'   => false,
//                'values'    => $model->getEasing(),
//                'disable'   => $isElementDisabled
//            ));
//
//            $fieldset->addField('transitions_fx', 'multiselect', array(
//                'name'      => 'transitions_fx',
//                'label'     => Mage::helper('sm_cameraslide')->__('Transitions Slide'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Transitions Slide'),
//                'require'   => false,
//                'values'    => $model->getTransitions(),
//                'value'     => $model->getData('transitions_fx') ? $model->getData('transitions_fx') : array('random'),
//                'note'      => 'You can also use more than on effect, just separate them width commas : &CloseCurlyQuote;simpleFade&CloseCurlyQuote;, &CloseCurlyQuote;scrollRight&CloseCurlyQuote;, &CloseCurlyQuote;scrollBottom&CloseCurlyQuote;',
//                'disable'   => $isElementDisabled
//            ));
//
//            $fieldset->addField('grid_difference', 'text', array(
//                'class'     => 'validate-number required-entry',
//                'name'      => 'grid_difference',
//                'label'     => Mage::helper('sm_cameraslide')->__('Grid Difference'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Grid Difference'),
//                'value'     => $model->getData('grid_difference') ? $model->getData('grid_difference') : 250,
//                'require'   => true,
//                'note'      => 'To make the grid blocks slower than the slices, this value must be smaller than Translate Period',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('image_path', 'text', array(
//                'name'      => 'image_path',
//                'label'     => Mage::helper('sm_cameraslide')->__('Image Path'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Image Path'),
//                'value'     => $model->getData('image_path') ? $model->getData('image_path') : 'skin/frontend/base/default/sm/cameraslide/images/',
//                'require'   => false,
//                'note'      => 'The path to the image folder (it serves for the blank.gif, when you want to display videos)',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('opacity_on_grid', 'select', array(
//                'name'      => 'opacity_on_grid',
//                'label'     => Mage::helper('sm_cameraslide')->__('Opacity On Grid'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Opacity On Grid'),
//                'require'   => false,
//                'values'    => $model->getTrueFalse(),
//                'value'     => $model->getData('portrait') ? $model->getData('portrait') : 'false',
//                'note'      => 'Decide to apply a fade effect to blocks and slices: if your slideshow is fullscreen or simply big, I recommend to set it false to have a smoother effect',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('overlayer', 'select', array(
//                'name'      => 'overlayer',
//                'label'     => Mage::helper('sm_cameraslide')->__('Overlayer'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Overlayer'),
//                'require'   => false,
//                'values'    => $model->getTrueFalse(),
//                'note'      => 'Decide to put a layer on the images to prevent the users grab them simply by clicking the right button of their mouse (.camera_overlayer)',
//                'disable'   => $isElementDisabled
//            ));

            $fieldset->addField('pagination', 'select', array(
                'name'      => 'pagination',
                'label'     => Mage::helper('sm_cameraslide')->__('Pagination'),
                'title'     => Mage::helper('sm_cameraslide')->__('Pagination'),
                'require'   => false,
                'values'    => $model->getTrueFalse(),
                'note'      => 'To display or not the pagination buttons',
                'disable'   => $isElementDisabled
            ));

//            $fieldset->addField('portrait', 'select', array(
//                'name'      => 'portrait',
//                'label'     => Mage::helper('sm_cameraslide')->__('Portrait'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Portrait'),
//                'require'   => false,
//                'values'    => $model->getTrueFalse(),
//                'value'     => $model->getData('portrait') ? $model->getData('portrait') : 'false',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('thumbnails', 'select', array(
//                'name'      => 'thumbnails',
//                'label'     => Mage::helper('sm_cameraslide')->__('Thumbnails'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Thumbnails'),
//                'require'   => false,
//                'values'    => $model->getTrueFalse(),
//                'value'     => $model->getData('portrait') ? $model->getData('portrait') : 'false',
//                'disable'   => $isElementDisabled
//            ));

//            $fieldset->addField('layer_style', 'select', array(
//                'name'      => 'layer_style',
//                'label'     => Mage::helper('sm_cameraslide')->__('Style'),
//                'title'     => Mage::helper('sm_cameraslide')->__('Style'),
//                'values'    => $model->getOptionCss(),
//                'require'   => false,
//            ));

            Mage::dispatchEvent('adminhtml_cameraslide_edit_tab_slide_prepare_form', array('form' => $form));
            /*
             * Điều kiện if sẽ phân biệt trường hợp add và edit là khác nhau
             *
             * + nếu có Id thì sẽ setValues với values của id đó.
             * + nếu ko có Id thì sẽ setValues với values mặc định của addField
             * */
            if($model->getId()){
                $form->setValues($model->getData());
            }
            $this->setForm($form);
            return parent::_prepareForm();
        }
    }
?>