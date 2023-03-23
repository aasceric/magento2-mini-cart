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
namespace AliwSolutions\MiniCart\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const PRICE_SHIPPING_BAR = 'shippingbar/shippingsection/shipping_bar';
    /**
     * Return if maximum price for shipping bar
     * @return int
     */
    public function getPriceForShippingBar()
    {
        return $this->scopeConfig->getValue(
            self::PRICE_SHIPPING_BAR,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}