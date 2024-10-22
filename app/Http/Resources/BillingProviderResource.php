<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BillingProviderResource extends JsonResource
{
    public bool $preserveKeys = true;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'endpoint' => $this->endpoint,
            'active' => $this->active
        ];
    }
}
