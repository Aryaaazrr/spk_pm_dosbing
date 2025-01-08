<?php

namespace App\Http\Requests\ProfileMethod;

use Illuminate\Foundation\Http\FormRequest;

class ProfileMethodRequest extends FormRequest
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
            'id_alternatif' => 'required|exists:alternatif,id_alternatif',
            'kriteria' => 'required|array',
            'kriteria.*' => 'required|exists:subkriteria,id_subkriteria',
        ];
    }

    /**
     * Pesan error khusus untuk validasi.
     */
    public function messages(): array
    {
        return [
            'id_alternatif.required' => 'Nama alternatif wajib diisi.',
            'id_alternatif.exists' => 'Alternatif yang dipilih tidak valid.',
            'kriteria.required' => 'Nilai kriteria harus diisi.',
            'kriteria.*.exists' => 'Subkriteria yang dipilih tidak valid.',
        ];
    }
}