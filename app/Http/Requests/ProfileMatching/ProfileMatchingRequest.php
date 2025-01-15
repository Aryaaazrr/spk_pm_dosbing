<?php

namespace App\Http\Requests\ProfileMatching;

use Illuminate\Foundation\Http\FormRequest;

class ProfileMatchingRequest extends FormRequest
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
        $rules = [
            'judul' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255']
        ];

        for ($i = 1; $i <= 6; $i++) {
            $rules["kriteria-$i"] = ['required', 'exists:subkriteria,id_subkriteria,id_kriteria,' . $i];
        }

        $rules['alternatif'] = ['required', 'array', 'min:1', 'max:3'];
        for ($i = 0; $i < 3; $i++) {
            $rules["alternatif.$i"] = ['nullable', 'exists:alternatif,id_alternatif'];
        }

        return $rules;
    }

      /**
     * Get the custom error messages for validation errors.
     *
     * @return array
     */
    public function messages(): array
    {
        $messages = [
            'judul.required' => 'Judul harus diisi.',
            'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'deskripsi.required' => 'Deskripsi harus diisi.',

            'kriteria-1.required' => 'Kriteria Jumlah Kuota Bimbingan harus diisi.',
            'kriteria-2.required' => 'Kriteria Pemenuhan Kuota Bimbingan harus diisi.',
            'kriteria-3.required' => 'Kriteria Keahlian Utama harus diisi.',
            'kriteria-4.required' => 'Kriteria Pengalaman Dalam Bidang harus diisi.',
            'kriteria-5.required' => 'Kriteria Proyek Penelitian harus diisi.',
            'kriteria-6.required' => 'Kriteria Jumlah Publikasi Ilmiah harus diisi.',

            'alternatif.required' => 'Setidaknya satu alternatif harus dipilih.',
            'alternatif.array' => 'Format alternatif tidak valid.',
            'alternatif.min' => 'Setidaknya satu alternatif harus dipilih.',
            'alternatif.max' => 'Tidak boleh lebih dari tiga alternatif.',
            'alternatif.*.exists' => 'Alternatif yang dipilih tidak valid.',
        ];

        return $messages;
    }
}