<?php

namespace App\Http\Requests;


class PostRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return $this->getAproperRules();
    }

    /**
     * Return the rules of create request.
     *
     * @return array
     */
    public function createRules()
    {
        return [
            'title' => 'required|max:200',
            'categories' => 'required',
            'content' => 'required|min:200|max:2000'
        ];
    }
}
