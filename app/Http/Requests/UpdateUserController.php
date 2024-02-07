<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserController extends FormRequest
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
            'username' => 'required',
            'password' => 'required',
            'hak_akses' => 'required|in:admin,operator_Guru,rpl,operator_Siswa',
            'role' => 'required|in:admin,Guru,Siswa',
            'status' => 'required|in:aktif,suspend,tidak_aktif',
        ];
    }
}
