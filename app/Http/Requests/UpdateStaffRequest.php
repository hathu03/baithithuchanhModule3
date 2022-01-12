<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
        return [
            'name'=>'required',
            'group'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
            'phone'=>'required|numeric',
            'cmnd'=>'required|numeric',
            'email'=>'required|email',
            'address'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'group.required' => 'Nhóm không được để trống!',
            'gender.required' => 'Giới tính không được để trống!',
            'birthday.required' => 'Ngày sinh không được để trống!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'phone.number' => 'Số điện thoại phải là dạng số!',
            'cmnd.required' => 'CMND không được để trống!',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng!',
            'address.required' => 'Địa chỉ không được để trống!',
        ];
    }
}
