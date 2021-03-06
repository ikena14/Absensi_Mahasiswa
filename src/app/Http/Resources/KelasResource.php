<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KelasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
            return[
                "id" => $this-> id,
                "nama" => $this-> nama,
                "matakuliah" => $this-> matakuliah,
                "noruang" => $this->noruang
            ];
    }
}
