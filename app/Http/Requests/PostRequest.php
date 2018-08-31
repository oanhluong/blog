<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Post;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->isMethod('post'))
        {
            return [
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body' => 'required'
            ];
        }
        else
        {
            $post = Post::find($id);
            if ($this->input('slug') == $post->slug) {
                return [
                    'title' => 'required|max:255',
                    'body' => 'required'
                ];
            } else {
                return [
                    'title' => 'required|max:255',
                    'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                    'body' => 'required'
                ];
            }
        }
    }
}
