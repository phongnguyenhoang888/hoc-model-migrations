<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addRequest extends FormRequest
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
    public function rules()
    {
        return [
            'ten_cau_thu'=>'required|max:50',
            'tuoi'=>'required|max:5',
            // unique : ko cho phep trong bangr(table) co 2 email giong nhau
            'email'=>'required|email|unique:cauthu',
            'vi_tri'=>'required',
            'quoc_tich'=>'required',
            'luong'=>'required|max:12',
            // 'avatar'=>'image|mimes:jepg,png,jpg,gif|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute :Không được để trống',
            'max'=>':attribute :Không được quá :max ký tự',
            'email.email' => ':attribute :email sai định dạng',
            'email.unique' => ':attribute :email da ton tai',
            //'avatar' => ':attribute : Hinh anh upload len phai la hình ảnh',
            //'mimes' => ':attribute : Hinh anh upload len phai dinh dang như sau:jpeg,png,jpg,gif',
            //'avatar.max' => ':attribute : Hinh anh upload len vuot qua kich thuoc cho phep :max'
        ];
    }


}
