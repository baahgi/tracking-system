<?php

namespace App\Http\Requests\Shipment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShipmentFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'origin_id' => ['required','integer'],
            'destination_id' => ['required','integer'],
            'weight' => ['required', 'numeric'],
            'amount' => ['required', 'numeric'],
            'value' => ['required', 'numeric'],
            'description' => ['required', 'alpha_num'],
            'payment_mode' => ['required', 'string'],
            'sender_name' => ['required', 'max:60'],
            'sender_phone' => ['required', 'string', 'min:10', 'max:13'],
            'sender_email' => ['nullable', 'max:60'],
            'sender_address' => ['required', 'max:100'],
            'receiver_name' => ['required', 'max:60'],
            'receiver_phone' => ['required', 'max:60'],
            'receiver_email' => ['required', 'max:60'],
            'receiver_address' => ['required', 'max:100'],
            'reference_no' => ['nullable', 'string'],
            'consignmentno' => ['required', 'min:10','max:16', Rule::unique('shipments')],

        ];
    }
}
