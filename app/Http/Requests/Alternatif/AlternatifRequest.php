<?php

namespace App\Http\Requests\Alternatif;

use Illuminate\Foundation\Http\FormRequest;

class AlternatifRequest extends FormRequest
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
            'nip' => ['required', 'string', 'max:225'],
            'name' => ['required', 'string', 'max:255'],
        ];
    }

     /**
     * Get the custom error messages for validation errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'nip.required' => 'NIP harus diisi.',
            'nip.string' => 'NIP harus berupa teks.',
            'nip.max' => 'NIP tidak boleh lebih dari 255 karakter.',
            'name.required' => 'Nama Kriteria harus diisi.',
            'name.string' => 'Nama Kriteria harus berupa teks.',
            'name.max' => 'Nama Kriteria tidak boleh lebih dari 255 karakter.',
        ];
    }
}