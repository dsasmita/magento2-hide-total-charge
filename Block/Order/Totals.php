<?php

namespace Dangs\TotalChargeHide\Block\Order;

class Totals extends \Magento\Sales\Block\Order\Totals
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = [])
    {
        parent::__construct($context, $registry, $data);
    }
	
    /**
     * Initialize order totals array
     *
     * @return $this
     */
    protected function _initTotals()
    {	
        parent::_initTotals();
		if (\Dangs\TotalChargeHide\Helper\Data::getStatusCharge($this->_scopeConfig)) {
			$this->removeTotal('base_grandtotal');
		}
        return $this;
    }
}
