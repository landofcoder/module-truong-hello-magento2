<?php 
namespace Lof\TruongHelloMagento2\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class HelloPosts extends Template implements BlockInterface {

    protected $_template = "widget/helloposts.phtml";
    protected $helperData;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Lof\TruongHelloMagento2\Helper\Data $helperData)
	{
		$this->helperData = $helperData;
		parent::__construct($context);
	}

	public function sayHello()
	{
		echo 'hi';
		exit();
	}

}