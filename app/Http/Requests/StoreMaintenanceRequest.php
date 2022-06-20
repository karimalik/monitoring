<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaintenanceRequest extends FormRequest
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
            //
            'site' => 'required',
            'reference' => 'required',
            'status' => 'required',
            'date' => 'required',
            'diagnostique' => 'required',
            'action' => 'required',
            'observation' => 'required',
            'comment' => 'required',
            'image' => 'required',
            'leave_code' => 'required',
            'team_id' => 'required',
        ];
    }
}
