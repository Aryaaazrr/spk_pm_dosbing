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
            'judul' => ['required'],
            'deskripsi' => ['required'],
            'kriteria-1' => ['required', 'exists:subkriteria,id_subkriteria,kriteria_id,1'],
            'kriteria-2' => ['required', 'exists:subkriteria,id_subkriteria,kriteria_id,2'],
            'kriteria-3' => ['required', 'exists:subkriteria,id_subkriteria,kriteria_id,3'],
            'kriteria-4' => ['required', 'exists:subkriteria,id_subkriteria,kriteria_id,4'],
            'kriteria-5' => ['required', 'exists:subkriteria,id_subkriteria,kriteria_id,5'],
            'kriteria-6' => ['required', 'exists:subkriteria,id_subkriteria,kriteria_id,6'],
        ];

        for ($i = 1; $i <= 3; $i++) {
            $rules["alternatif-$i"] = ['required', 'exists:alternatif,id_alternatif'];
        }

        return $rules;
    }
}