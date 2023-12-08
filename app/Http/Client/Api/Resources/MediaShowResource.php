<?php

namespace App\Http\Client\Api\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

final class MediaShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $fullUrl = $this->getFullUrl(isset($this->generated_conversions['optimize']) ? 'optimize' : '');

        return [
            'id' => $this->id,
            'mime_type' => $this->mime_type,
            'name' => $this->name,
            'url' => $fullUrl,
//            'is_main' => boolval($this->is_main),
//            'alt' => $this->custom_properties['alt'] ?? '',
//            'title' => $this->custom_properties['title'] ?? '',
            'conversions' => $this->when(boolval($a = $this->getConversions()) , fn() => $a),
        ];
    }

    public function getConversions(): array
    {
        $conversions = array_keys($this->generated_conversions ?? []);
        $res = [];

        foreach ($conversions as $conversion) {
            $res[$conversion] = [
                'url' => $this->getFullUrl($conversion),
                'srcset' => $this->getSrcset($conversion)
            ];
        }

        return $res;
    }
}
