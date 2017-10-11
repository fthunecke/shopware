<?php declare(strict_types=1);

namespace Shopware\Shop\Extension;

use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Factory\ExtensionInterface;
use Shopware\Shop\Event\ShopBasicLoadedEvent;
use Shopware\Shop\Event\ShopDetailLoadedEvent;
use Shopware\Shop\Event\ShopWrittenEvent;
use Shopware\Search\QueryBuilder;
use Shopware\Search\QuerySelection;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Shop\Struct\ShopBasicStruct;

abstract class ShopExtension implements ExtensionInterface, EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ShopBasicLoadedEvent::NAME => 'shopBasicLoaded',
            ShopDetailLoadedEvent::NAME => 'shopDetailLoaded',
            
        ];
    }

    public function joinDependencies(
        QuerySelection $selection,
        QueryBuilder $query,
        TranslationContext $context
    ): void {

    }

    public function getDetailFields(): array
    {
        return [];
    }

    public function getBasicFields(): array
    {
        return [];
    }

    public function hydrate(
        ShopBasicStruct $shop,
        array $data,
        QuerySelection $selection,
        TranslationContext $translation
    ): void
    { }

    public function shopBasicLoaded(ShopBasicLoadedEvent $event): void
    { }

    public function shopDetailLoaded(ShopDetailLoadedEvent $event): void
    { }

    

}