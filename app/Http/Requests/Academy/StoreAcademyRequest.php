<?php

namespace App\Http\Requests\Academy;

use App\Repositories\Constants;
use DateTime;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property string name
 * @property string website
 * @property string country
 * @property string state
 * @property string city
 * @property string description
 * @property string motto
 * @property datetime date_of_establishment
 * @property string tags
 */
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
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|nullable',
            'website' => 'url|nullable',
            'country' => ['required', Rule::in(Constants::countries)],
            'state' => 'string|nullable',
            'city' => 'string|nullable',
            'description' => 'string|nullable',
            'motto' => 'string|nullable',
            'date_of_establishment' => 'date',
            'verified' => 'boolean',
            'tags' => 'string|nullable',
            'photographs[]' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|nullable',
        ];
    }
}
