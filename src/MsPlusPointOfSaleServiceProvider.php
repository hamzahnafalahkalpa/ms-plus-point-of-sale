<?php

namespace WellmedPlus\MsPlusPointOfSale;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class MsPlusPointOfSaleServiceProvider extends BaseServiceProvider
{
    /**
     * Registers the package's namespaces.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(MsPlusPointOfSale::class)->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }
}
