<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request extends FormRequest
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
 
 
    public function rules()
    {
    return [
    'title' => 'required|unique:posts|max:200',
    'body' => 'required'
    ];
    }
   
    }
