<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Cache\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Cache\DistributorCacheInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorCacheInitialization('dmf_distributor_cache'));
    }
}
