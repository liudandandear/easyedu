<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;

/**
 * 后台权限设置参数校验
 * Class AdminPermissionRequest
 * @package App\Http\Requests\Admin
 */
class AdminPermissionRequest extends BaseRequest
{
    /**
     * 这个方法可以用来控制访问权限，例如禁止未付费用户评论…
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 这个方法返回验证规则数组，也就是Validator的验证规则
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'display_name' => 'required',
            'description' => 'required',
            'method' => 'array',
        ];

        if ($this->isMethod('post')) {
            $rules['slug'] = 'required|unique:admin_roles';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'display_name.required' => '请输入角色名',
            'slug.required' => '请输入Slug',
            'slug.unique' => 'Slug值已经存在',
            'description.required' => '请输入角色描述',
            'method.array' => '数据格式错误',
        ];
    }

    /**
     * @return array
     */
    public function filldata()
    {
        $data = [
            'display_name' => $this->input('display_name'),
            'description' => $this->input('description'),
            'method' => implode('|', $this->input('method', [])),
            'url' => $this->input('url', ''),
        ];

        if ($this->isMethod('post')) {
            $data['slug'] = $this->input('slug');
        }

        return $data;
    }
}
