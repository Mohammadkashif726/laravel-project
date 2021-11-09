<?php

namespace App\Http\Requests\API;

use App\Models\Video;
use InfyOm\Generator\Request\APIRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Traits\ApiResponser;

class CreateVideoAPIRequest extends APIRequest
{
  use ApiResponser;
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
        return [
            'videos' => 'bail|required',
//            'videos' => 'bail|required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException($this->sendError($validator->errors()->all(), 422));
    }
}
