<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'judul' => 'required|min:5|max:20',
            'penulis' => 'required|min:5|max:20',
            'halaman' => 'required|integer|min:1',
            'tahun' => 'required|integer|min:2000|max:2021',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul buku harus diisi',
            'penulis.required' => 'Penulis buku harus diisi',
            'halaman.required' => 'Halaman harus ada lebih dari 0',
            'tahun.required' => 'Tahun terbit harus ada (2000-2021)'
        ];
    }
}
