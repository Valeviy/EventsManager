<?php

namespace Valeviy\EventManager\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'short_description' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'beginning' => 'required',
            'logo' => 'required|file',
            'website' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ];

    }

    public function messages()
    {
        return [
            'title.required' => 'Необходимо указать заголовок',

            'name.required' => '',
            'name.max' => '',
            'type.required' => '',
            'type.max' => '',
            'short_description.required' => '',
            'short_description.max' => '',
            'city.required' => '',
            'city.max' => '',
            'address.required' => '',
            'address.max' => '',
            'beginning.required' => '',
            'logo.required' => '',
            'logo.file' => '',
            'website.required' => '',
            'website.max' => '',
            'email.required' => '',
            'email.email' => '',
            'phone.required' => '',
            'phone.numeric' => '',
        ];
    }
}
