<?php

namespace Modules\Leads\Providers;

use Modules\Core\Providers\CmsRoutingProvider;
use Illuminate\Support\Facades\Route;

class LeadsRoutingProvider extends CmsRoutingProvider
{
    protected $namespace = 'Modules\Leads\Http\Controllers';

    /**
     * @return string
     */
    protected function getFrontendRoute()
    {
        return __DIR__ . '/../Http/routes-frontend.php';
    }

    /**
     * @return string
     */
    protected function getBackendRoute()
    {
        return __DIR__ . '/../Http/routes-backend.php';
    }

    /**
     * @return string
     */
    protected function getApiRoute()
    {
        return __DIR__ . '/../Http/routes-api.php';
    }

    public function boot()
    {
        parent::boot();
    }
}
