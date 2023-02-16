<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentForm extends FormRequest
{
    public function authorize()
    {
        return auth("web")->check();
    }

    public function rules()
    {
        return [
            "text" => ["required", "string", "min:2"],
            "user_id" => ["required", "exists:users,id"]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => auth("web")->id()
        ]);
    }
}
