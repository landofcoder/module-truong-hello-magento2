<?php 
namespace Lof\TruongHelloMagento2\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class HelloPost extends Template implements BlockInterface {

    protected $_template = "widget/hellopost.phtml";
    protected $helperData;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Lof\TruongHelloMagento2\Helper\Data $helperData)
	{
		$this->helperData = $helperData;
		parent::__construct($context);
	}

	public function Hello()
	{
		return $this->getData('helloposts');
		//return __(" Magento");
		
	}

}