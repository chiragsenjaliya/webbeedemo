<?php

namespace App\Http\Resources;

use App\Http\Resources\MenuCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'url' => $this->url,
            'parent_id' => $this->parent_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'children' => new MenuCollection($this->children)
        ];
    }
}
