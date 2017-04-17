<?php
class Zozoconcepts_Ajaxcart_JefflilcotController extends Mage_Core_Controller_Front_Action
{

public function postalcodeAction(){

            $dest_region_id = $this->getRequest()->getPost('dest_region_id');
			//$dest_region_id = 515;
			$tablerateColl = Mage::getResourceModel('shipping/carrier_tablerate_collection')->addFieldToFilter('dest_region_id',$dest_region_id);
/* @var $tablerateColl Mage_Shipping_Model_Resource_Carrier_Tablerate_Collection */

if($tablerateColl->count() == 1){
	$tablerateDatad = $tablerateColl->getFirstItem();
	$tablerateData = $tablerateDatad->debug();
	$tablerateData['status'] = 200;
	echo json_encode(array('status' => 200, 'dest_zip' => $tablerateData['dest_zip']));
            return;
	
}
else{
	//not found or many results
	echo json_encode(array('status' => 200, 'dest_zip' => ''));
            return;
}
/**foreach ($tablerateColl as $tablerate) {
    /* @var $tablerate Mage_Shipping_Model_Carrier_Tablerate */
	   /** Zend_Debug::dump($tablerate->debug());
        //Zend_Debug::dump($tablerate->debug());
}**/
}
	
	}