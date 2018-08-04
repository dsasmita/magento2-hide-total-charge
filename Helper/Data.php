<?php

namespace Dangs\TotalChargeHide\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

	public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

	/**
     * Return status
     *
     * @return string
     */

	public function getStatusCharge(){
		return $this->scopeConfig->getValue('sales/totals_sort/hide_charge', 
                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
}