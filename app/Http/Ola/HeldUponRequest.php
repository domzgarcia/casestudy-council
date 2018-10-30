<?php

namespace App\Ola\Requests;
use Illuminate\Foundation\Http\FormRequest;

class HeldUponRequest extends FormRequest {

    public function authorize(){
        // dd('Ola is called');
        return true;
    }
    public function rules()
    {
        return [
            'body' => 'required|spamfree'
        ];
    }
}