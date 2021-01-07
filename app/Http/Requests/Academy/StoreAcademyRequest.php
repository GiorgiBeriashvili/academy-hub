<?php

namespace App\Http\Requests\Academy;

use App\Repositories\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAcademyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'logo' => 'image',
            'website' => 'url',
            'country' => ['required', Rule::in(Constants::countries)],
            'state' => 'string',
            'city' => 'string',
            'description' => 'string',
            'motto' => 'string',
            'date_of_establishment' => 'date',
            'verified' => 'boolean',
            'tags' => 'string',
            'photographs' => 'image',
        ];
    }
}
