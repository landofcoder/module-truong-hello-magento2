<?php

/**
 * Test widget, get data from widget
 * 
 * 
 * **/

namespace Lof\TruongHelloMagento2\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;
	protected $_resultPageFactory;
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Lof\TruongHelloMagento2\Helper\Data $helperData

	) {
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo $this->helperData->getGeneralConfig('enable');
		echo $this->helperData->getGeneralConfig('display_text');
		exit();
	}
}
