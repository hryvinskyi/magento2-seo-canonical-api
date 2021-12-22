<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCanonicalApi\Api;

interface DeleteDoubleSlashInterface
{
    /**
     * @param string $url
     *
     * @return string
     */
    public function execute(string $url): string;
}
