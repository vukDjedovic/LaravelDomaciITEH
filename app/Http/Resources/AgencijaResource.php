<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgencijaResource extends JsonResource
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
            'Naziv agencije: ' => $this->resource->naziv,
            'Broj telefona: ' => $this->resource->brojTelefona,
            'Email: ' => $this->resource->email
        ];
    }
}
