<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class card_shoppingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id_pro' => $this->id_pro,
            'name_prod' => $this->name_prod,
            'type_' => $this->type_,
            'avelb' => $this->avelb,
            'discription' => $this->discription,
            'id_tager' => $this->id_tager,
            'prise' => $this->prise,
            'img' => $this->img,
            'id_clint' => $this->id_clint,
            'clint_name' => $this->clint_name,
            'clint_addres' => $this->clint_addres,
            'clint_phone' => $this->clint_phone,
            'size' => $this->size,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
