<?php
class myWebResponse extends sfWebResponse
{
  /*
   * Supprime la balise title des métas
   */
  public function getMetas()
  {
    $meta_tags = parent::getMetas();

    if (array_key_exists('title', $meta_tags))
    {
      unset($meta_tags['title']);
    }

    return $meta_tags;
  }

  /*
   * Change le meta-title de la page
   *
   * @param string $title
   */
  public function prependTitle($title)
  {
    $this->setTitle($title, false);
  }

  /*
   * Change le meta-description de la page
   *
   * @param string $text
   */
  public function prependDescription($text)
  {
    $this->addMeta('description', substr($text, 0, 150) . ((strlen($text) > 150)?'...':null));
  }
}