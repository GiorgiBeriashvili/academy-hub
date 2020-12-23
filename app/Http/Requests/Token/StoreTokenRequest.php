<?php

namespace App\Http\Requests\Token;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Class StoreTokenRequest
 * @package App\Http\Requests\Token
 * @property-read string email
 * @property-read string password
 * @property-read string token_name
 */
class StoreTokenRequest extends FormRequest
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
    #[ArrayShape(['email' => "string", 'password' => "string", 'token_name' => "string"])] public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'token_name' => 'required|string',
        ];
    }
}
