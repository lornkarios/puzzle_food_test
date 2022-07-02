<?php

namespace App\Http\Resources;

use App\Models\Order;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Order */
class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fio' => $this->fio,
            'sum' => $this->sum,
            'created_date' => $this->created_date,
            'delivery_address' => $this->delivery_address
        ];
    }
}
