<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCanonicalApi\Api\CanonicalUrl;

class Processor implements ProcessorInterface
{
    /**
     * @var array
     */
    private $items;

    /**
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            if (isset($item['object']) === false) {
                throw new \InvalidArgumentException('The item object empty');
            }

            if (!$item['object'] instanceof ProcessInterface) {
                throw new \InvalidArgumentException('The item should be implemented of ' . ProcessInterface::class);
            }
        }

        usort($items, static function ($a, $b) {
            if (isset($a['sortOrder']) === false || isset($b['sortOrder']) === false) {
                return true;
            }

            return $a['sortOrder'] <=> $b['sortOrder'];
        });

        $this->items = [];
        foreach ($items as $item) {
            $this->items[] = $item['object'];
        }
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @inheritDoc
     */
    public function execute(array &$data): void
    {
        foreach ($this->getItems() as $item) {
            $item->execute($data);
        }
    }
}
