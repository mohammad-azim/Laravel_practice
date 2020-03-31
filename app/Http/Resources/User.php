<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            // 'name'=> $this->first_name ." " .$this->last_name,
            'name'=> $this->name,
            'email'=> $this->email,
            'link'=> url('google.com'),
        ];
    }

    public function with($request)
    {
        return [
            'version' => '2.2.0',
            'date' => date('D, d M Y H:i:s'),
        ];
    }
}
