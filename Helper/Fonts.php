<?php
/**
 * Copyright © 2020 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Frontend Options extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package Magenest_FrontendOptions
 *
 */

namespace Magenest\FrontendOptions\Helper;

use Magento\Framework\App\Helper\Context;

class Fonts extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    protected $_googlefontUrl = 'https://fonts.googleapis.com/css2?display=swap&family=';

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

    public function canApplyGoogleFont(){
        return $this->scopeConfig->getValue('magenest_frontend_options/google_font_options/apply_font', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
