<?php
/**
 * Copyright © 2017 Rubic. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Rubic\CleanCheckout\Block;

use Magento\Framework\View\Element\Template;

class Customizer extends Template
{
    const CONFIG_PATH_COLORS = 'clean_checkout/colors/%s';

    /**
     * @return string
     */
    public function getCheckoutBorderColor()
    {
        return $this->_scopeConfig->getValue(sprintf(self::CONFIG_PATH_COLORS, 'checkout_border'));
    }

    /**
     * @return string
     */
    public function getCheckoutBackgroundColor()
    {
        return $this->_scopeConfig->getValue(sprintf(self::CONFIG_PATH_COLORS, 'checkout_background'));
    }

    /**
     * @return string
     */
    public function getBodyBackgroundColor()
    {
        return $this->_scopeConfig->getValue(sprintf(self::CONFIG_PATH_COLORS, 'body_background'));
    }
}