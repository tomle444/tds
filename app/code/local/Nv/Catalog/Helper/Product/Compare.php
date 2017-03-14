<?php
/**
* @category   Mage
* @package    Mage_Catalog
* @author     Ben Marks, Blue Acorn LLC
*/
class Nv_Catalog_Helper_Product_Compare extends Mage_Catalog_Helper_Product_Compare
{
 
    /**
     * Retrieve url for adding product to conpare list, return false
     *
     * @param   Mage_Catalog_Model_Product $product - not used but must leave else we get errors
     * @return  boolean false
     */
    public function getAddUrl($product)
    {
    	if(Mage::getStoreConfig('catalog/recently_products/compared_count')) {
			return parent::getAddUrl($product);
		}
        return false;
    }
 
}
