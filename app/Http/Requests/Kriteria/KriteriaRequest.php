<?php

namespace App\Http\Requests\Kriteria;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KriteriaRequest extends FormRequest
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
            'kriteria_name' => ['required', 'string', 'max:255'],
            'tipe' => ['required', 'string', 'in:Core Factor,Secondary Factor'],
            'id_aspek' => ['required'],
            'keterangan' => ['nullable', 'string', 'max:500'],
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
            'kriteria_name.required' => 'Nama Kriteria harus diisi.',
            'kriteria_name.string' => 'Nama Kriteria harus berupa teks.',
            'kriteria_name.max' => 'Nama Kriteria tidak boleh lebih dari 255 karakter.',
            'id_aspek.required' => 'Aspek harus dipilih.',
            'tipe.required' => 'Tipe harus diisi.',
            'tipe.string' => 'Tipe harus berupa teks.',
            'tipe.in' => 'Tipe harus salah satu dari Core Factor atau Secondary Factor.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 500 karakter.',
        ];
    }
}