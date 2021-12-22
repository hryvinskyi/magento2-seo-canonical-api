<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCanonicalApi\Api;

use Magento\Store\Model\ScopeInterface;

interface ConfigInterface
{
    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isEnabled($scopeCode = null, string $scopeType = ScopeInterface::SCOPE_STORE): bool;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return string
     */
    public function getIgnoreUrls($scopeCode = null, string $scopeType = ScopeInterface::SCOPE_STORE): string;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isCanonicalStoreWithoutStoreCode(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return int
     */
    public function getCrossdomain(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): int;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isCrossdomainPreferHttps(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isPaginatedCanonical(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;

    /**
     * @return bool
     */
    public function isAddStoreCodeToUrlsEnabled(): bool;
}
