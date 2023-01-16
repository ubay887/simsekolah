<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TahunCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('admin')->check() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ];
    }
}