<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name'=> ['required', 'string', 'max:255'],
            'last_name'=> ['required', 'string', 'max:255'],
            'gender'=> ['required', 'numeric', 'between:1,3'],
            'email'=> ['required', 'string', 'email', 'max:255'],
            'tel_pre'=>['required', 'regex:/^[0-9]+$/','max:5'],
            'tel_mid'=>['required', 'regex:/^[0-9]+$/','max:5'],
            'tel_pos'=>['required', 'regex:/^[0-9]+$/','max:5'],
            'address'=>['required', 'string', 'max:255'],
            'category_id'=>['required', 'numeric', 'between:1,5'],
            'detail'=>['required', 'max:120'], 
        ];
    }

 public function messages()
     {
         return [
             'first_name.required' => '姓を入力してください',
             'last_name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.email' => 'メールアドレスはメール形式で入力してください',
             'tel_pre.required' => '電話番号を入力してください',
             'tel_pre.regex' => '電話番号は半角数字、ハイフンなしで入力してください',
             'tel_pre.max' => '電話番号は5桁までの数字で入力してください',
             'tel_mid.required' => '電話番号を入力してください',
             'tel_mid.regex' => '電話番号は半角数字、ハイフンなしで入力してください',
             'tel_mid.max' => '電話番号は5桁までの数字で入力してください',
             'tel_pos.required' => '電話番号を入力してください',
             'tel_pos.regex' => '電話番号は半角数字、ハイフンなしで入力してください',
             'tel_pos.max' => '電話番号は5桁までの数字で入力してください',
             'address.required' => '住所を入力してください',
             'category_id.required' => 'お問い合わせの種類を選択してください',
             'detail.required' => 'お問い合わせ内容を入力してください',
             'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
         ];
     }

}
