<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

        public function rules()
        {
            return [
                'projectsname' => 'required|string|max:255', // Validate the projectsname
                'description' => 'nullable|string|max:255',
            ];
        }


}


