<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'description_i_can_help' => 'required',
            'description_get_online_and' => 'required',
            'resume' => 'required',
            'projects' => 'required',
            'name' => 'required',
            'description_about_me' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
        ];
    }
}
