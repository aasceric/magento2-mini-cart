<?php
/**
 * Aliw Solutions
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Aliw-solutions.com license that is
 * available through the world-wide-web at this URL:
 * https://www.aliw-solutions.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    AliwSolutions
 * @package     AliwSolutions_MiniCart
 * @copyright   Copyright (c) Aliw Solutions (https://www.aliw-solutions.com/)
 * @license     https://www.aliw-solutions.com/LICENSE.txt
 */
namespace AliwSolutions\MiniCart\Block\Cart;

use Magento\Framework\View\Element\Template;

class Sidebar extends Template
{
    /**
     * @var \AliwSolutions\MiniCart\Helper\Data
     */
    private $helper;

    /**
     * Sidebar constructor.
     * @param Template\Context $context
     * @param \AliwSolutions\MiniCart\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \AliwSolutions\MiniCart\Helper\Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    public function getConfigForShippingBar()
    {
        return $this->helper->getPriceForShippingBar();
    }
}