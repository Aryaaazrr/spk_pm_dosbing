<?php

namespace App\Http\Requests\Aspek;

use Illuminate\Foundation\Http\FormRequest;

class AspekCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('aspek-create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'aspek_name' => ['required', 'string', 'max:225'],
            'persentase' => ['required', 'string', 'min:0', 'max:100'],
            'keterangan' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'aspek_name.required' => 'Nama aspek wajib diisi.',
            'aspek_name.string' => 'Nama aspek harus berupa teks.',
            'aspek_name.max' => 'Nama aspek maksimal 225 karakter.',

            'persentase.required' => 'Persentase wajib diisi.',
            'persentase.numeric' => 'Persentase harus berupa angka.',
            'persentase.min' => 'Persentase tidak boleh kurang dari 0.',
            'persentase.max' => 'Persentase tidak boleh lebih dari 100.',

            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan maksimal 500 karakter.',
        ];
    }
}