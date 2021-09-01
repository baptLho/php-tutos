<?php

namespace Tutoriel\HTML;

class BootstrapForm extends Form
{

  /**
   * @param $html string code html à entourer
   * @return string
   */
  protected function surround($html)
  {
    return "<div class='form-group'>{$html}</div>";
  }


  /**
   * @param $name stringr
   * @return string
   */
  public function input($name)
  {
    return $this->surround(
      '<label>' . $name . '</label>' . '<input type="text" class="form-control" name="' . $name . '" value="' . $this->getValue($name) . '">'
    );
  }

  /**
 
   * @return string
   */
  public function submit()
  {
    return $this->surround("<button type='submit' class='btn btn-primary'>Envoyer</button>");
  }
}
