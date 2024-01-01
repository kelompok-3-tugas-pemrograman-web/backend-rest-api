<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
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
            // 'npm' =>['required','min:8','max:8', 'unique:students,npm,'.$this->student->id],
            'npm' =>['required','min:8','max:8', Rule::unique('students')->ignore($this->student)],
            'nama' =>['required', 'min:1','max:55'],
            'kelas' =>['required', 'min:5','max:5'],
            'jurusan' =>['required', 'min:7','max:35'],
            'nohp' =>['required', 'min:10','max:13'],
        ];
    }
}