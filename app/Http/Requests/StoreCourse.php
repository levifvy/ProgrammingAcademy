<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:courses,name|max:255',
            'description' => 'required|max:1000',
        ];
    }

    public function attributes()
    {
        return[
            'name'=> 'course name',
        ];
    }

    public function messages()
    {
        return[
            'description.required'=> 'You must enter a course description',
            'name.unique' => 'The course name already exists.',
        ];
    }
}
