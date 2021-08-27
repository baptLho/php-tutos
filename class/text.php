<?php

/**
 * Class Text
 * Permet de manipuler du texte
 */
class Text
{

  const SUFFIX = " €";

  /**
   * @param $chiffre le chiffre à préfixer par des 0 si < 10
   * @return string
   */
  public static function withZero($chiffre)
  {
    if ($chiffre < 10) {
      return '0' . $chiffre . self::SUFFIX;
    } else {
      return $chiffre . self::SUFFIX;
    }
  }
}
