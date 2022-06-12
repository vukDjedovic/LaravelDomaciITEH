<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VodicResource extends JsonResource
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
            'Ime i prezime: ' => $this->resource->imePrezime,
            'Broj telefona: ' => $this->resource->brojTelefona,
            'Email: ' => $this->resource->email,
            'Agencija: ' => new AgencijaResource($this->resource->agencija)
        ];
    }
}
