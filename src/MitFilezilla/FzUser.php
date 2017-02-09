<?php

namespace MitFilezilla;
class FzUser extends FzGroup {
  

  public $group;
  

  public static function fromXml(SimpleXMLElement $elt) {
      $user = new self();
      $user->name = (string) $elt['Name'];
      
      //fetch group's options
      $user->options = self::parseOptions( $elt );

      //fetch parmissions
      $user->permissions = self::parsePermissions( $elt );
      return $user;
  }
  
}