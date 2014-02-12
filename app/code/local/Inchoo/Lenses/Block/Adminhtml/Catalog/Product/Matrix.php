<?php

class Inchoo_Lenses_Block_Adminhtml_Catalog_Product_Matrix
extends Mage_Adminhtml_Block_Widget_Grid_Container
implements Mage_Adminhtml_Block_Widget_Tab_Interface {

    /**
     * Set the template for the block
     *
     */
//    public function _construct()
//    {
//        parent::_construct();
//
//        // @TODO: get attribute set name, depending on it's name, load different template e.g. spherical, toric and multifocal lenses
////        $attributeSetName = Mage::getModel('eav/entity_attribute_set')->load($_product->getAttributeSetId())->getAttributeSetName();
////        if(0 == strcmp($attributeSetName, 'My Attribute Set') {
////                print $product->getAttributeText('attribute');
////        }
////
//        $csetId = Mage::app()->getRequest()->getParam('set');
//        Mage::register('csetId', $csetId);
//
//        //if lenses, load lenses template
//        if($csetId==63) $this->setTemplate('inchoo/lenses/lenses.phtml');
//
//        // @TODO: if glasses, load glasses template
////        if($setId==63) $this->setTemplate('inchoo/lenses/glasses.phtml');
//    }

    public function __construct()
    {
        $this->_blockGroup = 'lenses';
        $this->_controller = 'adminhtml_catalog_product_matrix';
        $this->_headerText = Mage::helper('inchoo_lenses')->__(''); // @TODO: fix matrix name
        parent::__construct();
        $this->_removeButton('add');

    }

    /**
     * Retrieve the label used for the tab relating to this block
     *
     * @return string
     */

    public function getTabLabel()
    {
        return $this->__('Matrix');
    }

    /**
     * Retrieve the title used by this tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return $this->__('Click here to view your custom tab content');
    }

    /**
     * Determines whether to display the tab
     * Add logic here to decide whether you want the tab to display
     *
     * @return bool
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * Stops the tab being hidden
     *
     * @return bool
     */
    public function isHidden()
    {
        return false;
    }


    /**
     * AJAX TAB's
     * If you want to use an AJAX tab, uncomment the following functions
     * Please note that you will need to setup a controller to recieve
     * the tab content request
     *
     */
    /**
     * Retrieve the class name of the tab
     * Return 'ajax' here if you want the tab to be loaded via Ajax
     *
     * return string
     */
#   public function getTabClass()
#   {
#       return 'my-custom-tab';
#   }

    /**
     * Determine whether to generate content on load or via AJAX
     * If true, the tab's content won't be loaded until the tab is clicked
     * You will need to setup a controller to handle the tab request
     *
     * @return bool
     */
#   public function getSkipGenerateContent()
#   {
#       return false;
#   }

    /**
     * Retrieve the URL used to load the tab content
     * Return the URL here used to load the content by Ajax
     * see self::getSkipGenerateContent & self::getTabClass
     *
     * @return string
     */
#   public function getTabUrl()
#   {
#       return null;
#   }

}