<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequets extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user_id == auth()->user()->id) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|unique:posts',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image|max:1024'
        ];

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags' => 'required',
                'body' => 'required'
            ]);
        }

        return $rules;
    }
}
