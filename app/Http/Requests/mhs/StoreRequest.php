<?php

namespace App\Http\Requests\mhs;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()    
    {        return true;    }    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()    
    {        return [            
        'nama' => 'Required|max:255',			
        'nrp' => 'Required|max:10',            
        'jurusan' => 'Required|max:255'        
        ];    
    }

    public function messages()    
    {        return [            
        'nama.required' => 'Nama Tidak Boleh Kosong.',            
        'nrp.required' => 'NRP Tidak Boleh Kosong.',			
        'jurusan.required' => 'jurusan Tidak Boleh Kosong.'        
        ];    
    }





}
