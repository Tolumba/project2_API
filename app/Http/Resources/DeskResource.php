<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
		$keys = ['id', 'name', 'created_at'];

        return array_combine(
			$keys,
			array_map(
				function($key) {
					return $this->{$key};
				},
				$keys
			)
		);
    }
}
