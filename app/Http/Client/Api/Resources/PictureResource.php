<?php

namespace App\Http\Client\Api\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PictureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'body' => $this->body,
            'author' => $this->whenLoaded('author', fn() => AuthorResource::make($this->author)),
        ];
    }
}
