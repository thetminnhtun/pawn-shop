<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'category'        => 'required|max:255',
            'kyat'            => 'required|max:255',
            'pae'             => 'required|integer|between:0,16',
            'yway'            => 'required|integer|between:0,8',
            'loan'            => 'required|max:255',
            'customerName'    => 'required|max:255',
            'customerAddress' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'ပစၥည္းအမ်ိဳးအမည္ ထည့္ပါ။',
            'kyat.required'  => 'က်ပ္ ထည့္ပါ။',
            'pae.required'  => 'ပဲ ထည့္ပါ။',
            'yway.required'  => 'ေရြး ထည့္ပါ။',
            'loan.required'  => ' ထုတ္ေခ်းေသာေငြရင္း ထည့္ပါ။',
            'customerName.required'  => 'ေပါင္သူအမည္ ထည့္ပါ။',
            'customerAddress.required'  => 'ေနရပ္လိပ္စာ ထည့္ပါ။',
            'pae.between'  => 'ပဲ သည္ ၀ မွ ၁၆ အတြင္းျဖစ္ရမည္။',
            'yway.between'  => 'ေရြး သည္ ၀ မွ ၈ အတြင္းျဖစ္ရမည္။',
        ];
    }
}
