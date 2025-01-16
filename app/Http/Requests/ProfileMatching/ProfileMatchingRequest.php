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
            'deskripsi' => ['required', 'max:255'],
        ];

        $rules['kriteria'] = ['required', 'array', 'size:6'];
        foreach (range(0, 5) as $index) {
            $rules["kriteria.$index"] = ['required', 'exists:subkriteria,id_subkriteria'];
        }

        $rules['alternatif'] = ['required', 'array', 'min:1', 'max:3'];
        foreach (range(0, 2) as $index) {
            $rules["alternatif.$index"] = ['nullable', 'exists:alternatif,id_alternatif'];
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

            'kriteria.required' => 'Semua kriteria harus diisi.',
            'kriteria.array' => 'Format kriteria tidak valid.',
            'kriteria.size' => 'Semua 6 kriteria harus dipilih.',
            'kriteria.*.exists' => 'Kriteria yang dipilih tidak valid.',

            'alternatif.required' => 'Setidaknya satu alternatif harus dipilih.',
            'alternatif.array' => 'Format alternatif tidak valid.',
            'alternatif.min' => 'Setidaknya satu alternatif harus dipilih.',
            'alternatif.max' => 'Tidak boleh lebih dari tiga alternatif.',
            'alternatif.*.exists' => 'Alternatif yang dipilih tidak valid.',
        ];

        return $messages;
    }
}