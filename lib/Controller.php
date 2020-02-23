<?php

namespace MyApp;

class Controller {

  private $_errors;
  private $_values;

  public function __condtruct() {
    if(!isset($_SESSION['token'])){
      $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
    }
    $this->_errors = new \stdClass();
    $this->_values = new \stdClass();
  }

  protected function setValues($key, $value) {
    $this->_values = new \stdClass();
    $this->_values->$key = $value;
  }

  public function getValues() {
    return $this->_values;
  }

  protected function setErrors($key, $error) {
    $this->_errors = new \stdClass();
    $this->_errors->$key = $error;
  }

  public function getErrors($key) {
    return isset($this->_errors->$key) ?  $this->_errors->$key : '';
  }

  protected function hasError() {
    $this->_errors = new \stdClass();
    return !empty(get_object_vars($this->_errors));
  }

  protected function isLoggedIn() {
    return isset($_SESSION['me']) && !empty($_SESSION['me']);
  }

  public function me() {
    return $this->isLoggedIn() ? $_SESSION['me'] : null;
  }

  public function beforePostFire($thisModule){
      $moduleName = get_class($thisModule);

      if ( $moduleName === 'ACMS_POST_Form_Submit' ) {
          $secret = '6LfHatsUAAAAAP05oR3NhgFZT7vDrwggHeIHKabI';
          $response = $thisModule->Post->get('g-recaptcha-response');
          $api = "https://www.google.com/recaptcha/api/siteverify?secret=${secret}&response=${response}";

          $valid = false;
          if ( $res = @file_get_contents($api) ) {
              $check = json_decode($res);
              if ( $check->success === true ) {
                  $valid = true;
              }
          }

          if ( !$valid ) {
              $Field  = $thisModule->extract('field');
              $Field->setMethod('g-recaptcha-response', 'check', false);
              $thisModule->Post->set('step', 'forbidden');
          }
      }
  }





}
