<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCanonicalApi\Api\CanonicalUrl;

interface ProcessorInterface
{
    /**
     * @return ProcessInterface[]
     */
    public function getItems(): array;

    /**
     * @param array $data
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(array &$data): void;
}
