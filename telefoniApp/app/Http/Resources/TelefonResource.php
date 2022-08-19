<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TelefonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->resource->id,
            'naziv'=>$this->resource->naziv,
            'boja'=>$this->resource->boja,
            'baterija'=>$this->resource->baterija,
            'ekran'=>$this->resource->ekran,
            'cena'=>$this->resource->cena,
            'os'=>$this->resource->os,


        ];
    }
}
