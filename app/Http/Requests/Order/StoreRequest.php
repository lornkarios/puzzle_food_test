<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'id'=>'nullable|integer|unique:orders',
            'fio'=>'required|string|max:255',
            'sum'=>'required|numeric',
            'created_date'=>'nullable|date',
            'delivery_address'=>'required|string|max:1000'
        ];
    }
}
