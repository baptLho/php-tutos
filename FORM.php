<?php

/**
 * class form
 * sert à créer un formulaire rapidement et simplement
 * 
 */
class Form
{
  /**
   * @var array données utilisées par le formulaire
   */
  private $data;

  public $surround = 'div';

  public function __construct($data = [])
  {
    $this->data = $data;
  }
  private function surround($html)
  {
    return "<{$this->surround}>{$html}</$this->surround}>";
  }

  private function getValue($index)
  {
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }

  public function input($name)
  {
    return $this->surround(
      '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
    );
  }
  public function submit()
  {
    return $this->surround("<button type='submit'>Envoyer</button>");
  }
}
