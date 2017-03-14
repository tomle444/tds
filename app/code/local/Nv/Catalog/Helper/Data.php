<?php

class Nv_Catalog_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Returns html class to li element instead of :nth-child() to handle responsive grid
     *
     * @param $position
     * @return string
     */

    public function getProductGridItemCountHtmlClass($position) {
        if (!$position) {
            return '';
        }

        $additionalClasses = array();
        if ( $position % 2 != 0) {
            $additionalClasses[] = 'odd';
        } else {
            $additionalClasses[] = 'even';
        }

        $classes = array(
            3 => 'third',
            4 => 'fourth',
            5 => 'fifth',
            6 => 'sixth'
        );
        foreach ($classes as $index => $class) {
            if ($position % $index == 0) {
                $additionalClasses[] = $class;
            }
        }

        return implode(' ', $additionalClasses);
    }
}