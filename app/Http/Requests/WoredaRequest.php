<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class WoredaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'name' => 'string',
            'zone' => 'string',
            'region' => 'string',
            'country' => 'string',
            'lang' => 'string|in:am,en',
            'fields' => 'nullable|array|min:1',
            'fields.*' => [Rule::in(filterable('woredas'))],
            'limit' => 'nullable|integer|min:1|max:10',
        ];
    }


    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'status' => 'failed',
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ],
            422
        ));
    }
}
