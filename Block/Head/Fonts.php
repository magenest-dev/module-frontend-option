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

namespace Magenest\FrontendOptions\Block\Head;

use Magento\Framework\View\Element\Template;

class Fonts extends \Magento\Framework\View\Element\Template
{
    /**
     * @var string
     */
    protected $_googleFontUrl = 'https://fonts.googleapis.com/css?display=swap&family=';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;
    protected $_fontsHelper;

    public function __construct(
        Template\Context $context,
        \Magenest\FrontendOptions\Helper\Fonts $fonts,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $context->getScopeConfig();
        $this->_fontsHelper = $fonts;
    }


    public function getGoogleFont()
    {
        $googleFont = $this->_fontsHelper->getGoogleFont();
        return $googleFont;
    }

    public function getFontName()
    {
        return $this->_fontsHelper->getFrontName();
    }

    public function canApplyGoogleFont(){
        return $this->_fontsHelper->canApplyGoogleFont();
    }

    public function toHtml()
    {
        return parent::toHtml(); // TODO: Change the autogenerated stub
    }
}
