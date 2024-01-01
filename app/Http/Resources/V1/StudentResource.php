<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'id'=>$this->id,
            'npm'=>$this->npm,
            // 'npm'=>route('students.show', $this->npm),
            'nama'=>$this->nama,
            'kelas'=>$this->kelas,
            'jurusan'=>$this->jurusan,
            'nohp'=>$this->nohp,
        ];
    }
}