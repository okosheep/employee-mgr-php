<?php

class LoginForm extends sfForm
{
  public function configure()
  {    
    $this->setWidgets(array(
      'uid' => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputPassword(),
    ));
    $this->setValidators(array(
      'uid' => new sfValidatorString(array('required' => true)),
      'password' => new sfValidatorString(array('required' => true)),
    ));
    
    $this->widgetSchema->setLabels(array(
      'uid' => 'ユーザーID',
      'password' => 'パスワード',
    ));
    
    // setWidgets よりも下に各必要あり
    $this->widgetSchema->setNameFormat('login[%s]');
    $this->widgetSchema->addFormFormatter('LoginFormFormatter', new LoginFormFormatter($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('LoginFormFormatter');
  }
}
