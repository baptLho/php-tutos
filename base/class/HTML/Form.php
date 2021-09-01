<?php

namespace Tutoriel\HTML;

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

  /**
   * @var string tag utilisé pour entourer les champs
   */
  public $surround = 'div';

  /**
   * @param array $data utilisées par le formulaire
   */
  public function __construct($data = [])
  {
    $this->data = $data;
  }


  /**
   * @param $html string code html à entourer
   * @return string
   */
  protected function surround($html)
  {
    return "<{$this->surround}>{$html}</$this->surround}>";
  }

  /**
   * @param $index string index de la valeur à récupérer
   * @return string
   */
  protected function getValue($index)
  {
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }

  /**
   * @param $name stringr
   * @return string
   */
  public function input($name)
  {
    return $this->surround(
      '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
    );
  }

  /**
 
   * @return string
   */
  public function submit()
  {
    return $this->surround("<button type='submit'>Envoyer</button>");
  }
  public function date()
  {
    return new \DateTime();
  }
}
