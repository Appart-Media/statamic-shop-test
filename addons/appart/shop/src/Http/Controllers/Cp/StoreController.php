<?php

namespace Appart\Shop\Http\Controllers\Cp;

use Statamic\View\View;
use function Illuminate\Support\Facades\Response;

/**
 * Class StoreController
 * @package Appart\Shop\Http\Controllers
 * @author Niek Vaanholt <niek@appart.nl>
 */
class StoreController
{
    /**
     * Teh store index page
     *
     * @return View
     */
    public function index()
    {
        return View::make('appart-store::cp.store.index');
    }
}
