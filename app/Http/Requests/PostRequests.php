<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequests extends FormRequest
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
        $post = $this->route()->parameter('post');

        $rules = [
            'name' => 'required|unique:posts',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image|max:1024'
        ];

        if ($post) {
            $rules['name'] = 'required|unique:posts,name,' . $post->id;
            $rules['slug'] = 'required|unique:posts,slug,' . $post->id;
        }

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
