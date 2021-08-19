<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuCollection extends ResourceCollection
{
     /**
     * This is the resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\MenuResource';
}
