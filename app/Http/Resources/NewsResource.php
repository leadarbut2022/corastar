<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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

            'id_Poster' => $this->id_Poster,
            'name_poster' => $this->name_poster,
            'addres_post' => $this->addres_post,
            'discription' => $this->discription,
            'img' => $this->img,
            'vedo' => $this->vedo,
            'day' => $this->day,
            'type_' => $this->type_,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
