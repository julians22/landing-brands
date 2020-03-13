<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Customer extends FormRequest
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
            'nama' => 'required',
            'email' => 'required|email|unique:customers',
            'nomor' => 'required|unique:customers',
            'alamat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Form Nama Harus Diisi',
            'email.email' => 'Masukkan Format Email Yang Benar',
            'email.required' => 'Form Email Harus Diisi',
            'email.unique' => 'Alamat Email Ini Sudah Digunakan',
            'nomor.unique' => 'Nomor ini Sudah Digunakan',
            'nomor.required' => 'Form HP Harus Diisi',
            'alamat.required' => 'Form Alamat Harus Diisi'
        ];
    }
}
