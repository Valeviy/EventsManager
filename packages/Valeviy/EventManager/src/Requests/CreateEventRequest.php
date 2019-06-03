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
            'name' => '',
            'type' => '',
            'short_description' => '',
            'full_description' => '',
            'city' => '',
            'address' => '',
            'beginning' => '',
            'ending' => '',
            'reg_end' => '',
            'number_participants' => '',
            'logo' => '',
            'website' => '',
            'email' => '',
            'phone' => '',
            'program' => '',
            'custom_fields' => '',
        ];
        $files = count($this->input('files'));
        foreach(range(0, $files) as $index) {
            $rules['files.' . $index] = 'max:2000';
        }

        $organizers =json_decode($this->input('organizers'), true);
        foreach($organizers as $organizer) {
            $rules['organizers.name'] = '';
            $rules['organizers.type'] = '';
        }

    }


    public function messages()
    {
        return [
            'title.required' => 'Необходимо указать заголовок',
            'body.required'  => 'Необходимо написать статью',
        ];
    }
}
