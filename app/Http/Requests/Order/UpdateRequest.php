<?php

namespace App\Http\Requests\Order;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'number' => ['nullable', 'integer', Rule::unique('orders','number')->ignore(request('number'),'number')],
            'fio' => 'nullable|string|max:255',
            'sum' => 'nullable|numeric',
            'created_date' => 'nullable|date',
            'delivery_address' => 'nullable|string|max:1000'
        ];
    }
}
