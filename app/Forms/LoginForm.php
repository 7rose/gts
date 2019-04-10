<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this->add('email', 'email', [
            'label' => '邮箱',
            'rules' => 'required'
        ])
        ->add('password', 'password', [
            'label' => '密码',
            'rules' => 'required|min:4|max:32'
        ])
        ->add('submit','submit',[
              'label' => "登录",
              'attr' => ['class' => 'btn btn-success btn-block']
        ]);
    }
}
