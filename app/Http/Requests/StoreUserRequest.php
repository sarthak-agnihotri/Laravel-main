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
            // 'name' => ['required','min:3','max:6','alpha',new checkUpperCase],
            // 'email' => ['required','email']
            'student_name' => ['required', 'min:3', 'alpha'],
            'student_email' => ['required', 'email','unique:users,email'],
            'student_mobile' => ['required', 'numeric','regex:/^[0-9]{10}$/'],
            'alternate_mobile' => ['nullable', 'numeric','regex:/^[0-9]{10}$/'],
            'student_gender' => ['required'],
            'student_dob' => ['required', 'date'],
            'student_age' => ['required', 'integer', 'min:0'],
            'student_address' => ['required'],
            'student_pincode' => ['required', 'numeric','regex:/^[0-9]{6}$/'],
            'student-course' => ['required'],
            'student_marks' => ['required', 'numeric', 'min:0', 'max:100'],
            'student_signature' => ['required', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'student_password' => ['required', 'string', 'min:8', 'confirmed'],
            'student_confirm_password' => ['required', 'string', 'min:8'],
            'student_terms' => ['accepted'],
        ];
    }
    // public function attributes()
    // {
    //     return [
    //         'name' => 'user name',
    //         'email' => 'email address',
    //     ];
    // }
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
    public function messages()
    {
        return [
            'student_name.required' => 'Student name is required',
            'student_name.min' => 'Student name must be at least 3 characters',
            'student_name.alpha' => 'Student name must contain only letters',
            'student_email.required' => 'Student email is required',
            'student_email.email' => 'Student email must be a valid email address',
            'student_email.unique' => 'This email is already registered',
            'student_mobile.required' => 'Student mobile number is required',
            'student_mobile.numeric' => 'Student mobile number must be numeric',
            'student_mobile.regex' => 'Student mobile number must be 10 digits',
            'alternate_mobile.numeric' => 'Alternate mobile number must be numeric',
            'alternate_mobile.regex' => 'Alternate mobile number must be 10 digits',
            'student_gender.required' => 'Student gender is required',
            'student_dob.required' => 'Student date of birth is required',
            'student_dob.date' => 'Student date of birth must be a valid date',
            'student_age.required' => 'Student age is required',
            'student_age.integer' => 'Student age must be an integer',
            'student_age.min' => 'Student age must be a positive number',
            'student_address.required' => 'Student address is required',
            'student_pincode.required' => 'Student pincode is required',
            'student_pincode.numeric' => 'Student pincode must be numeric',
            'student_pincode.regex' => 'Student pincode must be 6 digits',
            'student-course.required' => 'Student course is required',
            'student_marks.required' => 'Student marks are required',
            'student_marks.numeric' => 'Student marks must be a number',
            'student_marks.min' => 'Student marks must be a positive number',
            'student_marks.max' => 'Student marks cannot exceed 100',
            'student_signature.required' => 'Student signature is required',
            'student_signature.file' => 'Student signature must be a file',
            'student_signature.mimes' => 'Student signature must be a JPG, JPEG, or PNG file',
            'student_signature.max' => 'Student signature must not exceed 2MB',
            'student_password.required' => 'Student password is required',
            'student_password.string' => 'Student password must be a string',
            'student_password.min' => 'Student password must be at least 8 characters',
            'student_password.confirmed' => 'Student password confirmation does not match',
            'student_confirm_password.required' => 'Student confirm password is required',
            'student_confirm_password.string' => 'Student confirm password must be a string',
            'student_confirm_password.min' => 'Student confirm password must be at least 8 characters',
            'student_terms.accepted' => 'You must accept the terms and conditions',
        ];
    }
}