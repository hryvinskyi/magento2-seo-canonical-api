<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCanonicalApi\Api;

interface CheckIsProductEnabledInterface
{
    /**
     * @param int $productId
     *
     * @return bool
     */
    public function executeById(int $productId): bool;

    /**
     * @param int $productSku
     *
     * @return bool
     */
    public function executeBySku(int $productSku): bool;
}
