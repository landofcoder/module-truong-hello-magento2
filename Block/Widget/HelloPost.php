<?php

/**
 * Test widget, get data from widget
 * 
 * 
 * **/

namespace Lof\TruongHelloMagento2\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class HelloPost extends Template implements BlockInterface
{

	protected $_template = "widget/hellopost.phtml";
	protected $helperData;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Lof\TruongHelloMagento2\Helper\Data $helperData
	) {
		$this->helperData = $helperData;
		parent::__construct($context);
	}

	public function Hello()
	{
		$post = $this->getData('helloposts');
		$name = $this->getData('name');
		return strval($post) . " " . \strval($name);
		//return __(" Magento");

	}
}
