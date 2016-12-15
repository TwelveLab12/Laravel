<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return false;
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
            'title' => 'required|min:3',
            // Exemple de règle de validation perso
            // => ValidatorServiceProvider
            // 'title' => 'nameOfTheRule:test', 
            'content' => 'required|min:10'
        ];
    }
    
    
}
