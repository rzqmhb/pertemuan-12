<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequests extends FormRequest
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
            'nim' => 'required|min:10',
            'nama' => 'required',
            'foto' => 'required',
            'tgl_lahir' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'kelas_id' => 'required',
        ];
    }
}
