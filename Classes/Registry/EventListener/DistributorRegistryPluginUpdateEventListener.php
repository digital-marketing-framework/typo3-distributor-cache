<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Cache\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Cache\DistributorPluginInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;

class DistributorRegistryPluginUpdateEventListener
{
    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        DistributorPluginInitialization::initialize($event->getRegistry());
    }
}
