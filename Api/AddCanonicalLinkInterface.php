<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCanonicalApi\Api;

use Magento\Framework\View\Page\Config;

interface AddCanonicalLinkInterface
{
    /**
     * @param Config $pageConfig
     * @param string $canonicalUrl
     */
    public function execute(Config $pageConfig, string $canonicalUrl): void;
}
