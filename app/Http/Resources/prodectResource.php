<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class prodectResource extends JsonResource
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
              
            'id' => $this->id,
            'name_prod' => $this->name_prod,
            'type_' => $this->type_,
            'discription' => $this->discription,
            'avelb' => $this->avelb,
            'prise' => $this->prise,
            'img' => $this->img,
            'id_tager' => $this->id_tager,
            'discount' => $this->discount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

         
        ];

        


 
    }
}
