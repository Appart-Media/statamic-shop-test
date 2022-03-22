<?php

namespace Appart\Shop;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

/**
 * Class ServiceProvider
 * @package Appart\Shop
 * @author Niek Vaanholt <niek@appart.nl>
 */
class ServiceProvider extends AddonServiceProvider
{
    /**
     * @var string[]
     */
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    /**
     * The boot function
     */
    public function boot()
    {
        parent::boot();

        Nav::extend(function ($nav) {
            $nav->content('Store')
                ->route('appart.store.index')
                ->icon('shopping-cart')
                ->children([
                    'Categories' => cp_route('appart.store.categories.index'),
//                    'Products' => cp_route('appart.store.products.index'),
//                    'Orders' => cp_route('appart.store.orders.index')
                ]);
        });


        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'appart-store');
    }
}
