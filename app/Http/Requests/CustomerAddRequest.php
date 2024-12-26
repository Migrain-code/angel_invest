<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerAddRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|min:4|unique:customers',
            'password' => 'required|min:8',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Ad Soyad',
            //'phone' => 'Telefon Numarası',
            'password' => "Şifre",
            'email' => 'E-posta Adresi',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ad Soyad alanı gereklidir.',
            'name.string' => 'Ad Soyad alanı sadece metin içerebilir.',
            'name.max' => 'Ad Soyad en fazla 255 karakter olabilir.',

            'phone.required' => 'Telefon Numarası alanı gereklidir.',
            'phone.min' => 'Telefon Numarası en az 10 karakter olmalıdır.',
            'phone.unique' => 'Bu telefon numarası zaten kayıtlıdır.',

            'email.required' => 'E-posta Adresi alanı gereklidir.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'email.min' => 'E-posta Adresi en az 4 karakter olmalıdır.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlıdır.',

            'password.required' => 'Şifre alanı gereklidir.',
            'password.min' => 'Şifre en az 8 karakter olmalıdır.',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => 'Doğrulama hatası',
            'errors' => $validator->errors()->all(),
        ], 422));
    }
}
