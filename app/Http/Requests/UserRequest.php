<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
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
        return [
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=200,min_height=200',
        ];
    }


    public function messages()
    {
        return [
            'name.unique'       => '用户名已被占用，请重新填写',
            'name.regex'        => '请使用数字，字母，横杠或下划线',
            'name.between'      => '用户名长度必须为 3 - 25 个字符之间',
            'name.required'     => '用户名不能为空',
            'avatar.mimes'      => '头像必须是jpeg,bmp,png,gif格式的',
            'avatar.dimensions' => '图片太小',
        ];
    }
}
