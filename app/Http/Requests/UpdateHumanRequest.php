<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHumanRequest extends FormRequest
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
        /*
        $method=$this->method();

        if($method=='POST'){
        return [
            "FirstName"=>['required'],
            "LastName"=>['required'],
            "PhoneNumber"=>['required'],
            "Street"=>['required'],
            "City"=>['required'],
            "Country=>['required']"
        ];
        }else{

        return [
            "FirstName"=>['sometimes','required'],
            "LastName"=>['sometimes','required'],
            "PhoneNumber"=>['sometimes','required'],
            "Street"=>['sometimes','required'],
            "City"=>['sometimes','required'],
            "Country"=>['sometimes','required'],
        ];


        }*/
        return[

        ];
        
    }
}
