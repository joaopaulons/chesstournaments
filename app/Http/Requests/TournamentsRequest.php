<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournamentsRequest extends FormRequest
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
            'name' => 'required', 'string', 'max:255',
            'state' => 'required', 'string', 'max:255',
            'rhythm' => 'required', 'string', 'max:255',
            'event_start_date' => 'required', 'date',
            'event_end_date' => 'required', 'date',
            'host_name' => 'required', 'max:255', 'string',
            'description' => 'required', 'max:255', 'string',
            'link_more_information' => 'required','string'
        ];
    }
}
