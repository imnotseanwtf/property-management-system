<?php

namespace App\Http\Requests\Tenant;

use App\Enums\GenderType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreTenantRequest extends FormRequest
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'mobile_number' => ['required', 'string', 'unique:users,mobile_number'],
            'picture' => ['required', 'file', 'image','mimes:jpeg,png,gif'],
            'gender' => ['required', new Enum(GenderType::class)],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }
}
