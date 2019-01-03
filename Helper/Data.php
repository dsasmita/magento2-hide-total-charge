<?php
namespace Dangs\TotalChargeHide\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
	
	public function getConfig() {
		return $this->scopeConfig;
	}
	/**
     * Return status
     *
     * @return string
     */	 
	public static function getStatusCharge(
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
	{
		return $scopeConfig->getValue('sales/totals_sort/hide_charge', 
                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
}
