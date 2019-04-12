<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ProductForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('type', 'select', [
            'label' => '类型',
            'choices' => ['cube' => '机柜', 'cable' => '综合布线'],
            'empty_value' => '--- 请选择 ---',
            'rules' => 'required'
        ])
        ->add('name', 'text', [
            'label' => '名称',
            'rules' => 'required|min:2|max:18'
        ])
        ->add('model', 'text', [
            'label' => '编号',
            'rules' => 'required|min:2|max:18'
        ])
        ->add('description', 'text', [
            'label' => '描述',
            'rules' => 'required|min:4|max:22'
        ])
        ->add('content', 'textarea', [
            'label' => '说明',
            'rules' => 'min:4|max:500'
        ])
        ->add('submit','submit',[
              'label' => "下一步",
              'attr' => ['class' => 'btn btn-success btn-block']
        ]);
    }
}
