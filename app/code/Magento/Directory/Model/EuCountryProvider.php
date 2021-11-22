<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Directory\Model;

use Magento\Directory\Controller\Adminhtml\Json\EuCountryProviderInterface;
use Magento\Framework\Serialize\SerializerInterface;

class EuCountryProvider implements EuCountryProviderInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(
        SerializerInterface $serializer
    ) {
        $this->serializer = $serializer;
    }

    /**
     * @inheritDoc
     */
    public function isEuCountry($countryCode): string
    {
        $isEuCountry = false;
        return $this->serializer->serialize($isEuCountry);
    }
}
