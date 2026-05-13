<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\checkUpperCase;

class StoreUserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:3','max:6','alpha',new checkUpperCase],
            'email' => ['required','email']
            //
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'user name',
            'email' => 'email address',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Name is required',
    //         'name.min' => 'Name must be at least 3 characters',
    //         'name.max' => 'Name must not exceed 6 characters',
    //         'name.alpha' => 'Name must contain only letters',
    //         'email.required' => 'Email is required',
    //         'email.email' => 'Email must be a valid email address',
    //     ];
    // }
}
