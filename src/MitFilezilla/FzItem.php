<?php
namespace MitFilezilla;
class FzItem {
  
  public $name;
  public $type;
  public $value;

  public static function fromXml(SimpleXMLElement $elt) {
      $item = new FzItem();
      
      $item->name = (string) $elt['name'];
      $item->type = (string) $elt['type'];
      $item->value = (string) $elt;
      
      return $item;
  } 
  
}