<?php
/**
 * Copyright © 2020 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * cf_theme extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package cf_theme
 * @package linhphung
 */

namespace Magenest\FrontendOptions\Helper;

use Magento\Framework\App\Helper\Context;

class Fonts extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    protected $_googlefontUrl = 'https://fonts.googleapis.com/css?display=swap&family=';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function getGoogleFont()
    {
        $fontName = $this->getFrontName();
        $baseUrl = $this->_googlefontUrl;
        $fontFamily = str_replace(' ', '+', $fontName);
        if (strlen(trim($fontFamily))) {
            return $baseUrl . $fontFamily;
        }
        return null;
    }

    public function getFrontName()
    {
        $fontName = $this->scopeConfig->getValue('magenest_frontend_options/google_font_options/font_family', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $fontName;
    }
}
