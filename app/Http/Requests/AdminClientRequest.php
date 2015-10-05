<?php

namespace CodeDelivery\Http\Requests;

class AdminClientRequest extends Request
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
            'user_id' => 'required',
            'phone' => 'required|min:5',
            'address' => 'required|min:5',
            'city' => 'required|min:5',
            'state' => 'required|min:5',
            'zipcode' => 'required|min:8'
        ];
    }
}
