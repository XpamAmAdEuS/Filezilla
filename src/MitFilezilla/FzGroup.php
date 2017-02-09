<?php

namespace MitFilezilla;
use MitFilezilla\FzSpeedLimits;
use MitFilezilla\FzUser;


/**
 * 
 * @author Ivan Ramirez
 *
 */
class FzGroup {
  
  public $name;
  
  /**
   * indexed by the name
   * @var array
   */
  public $options;
  
  /**
   * indexed by the directory path
   * @var array
   */
  public $permissions;
  
  /**
   * 
   * @var FzSpeedLimits
   */
  public $speedLimits;
  
  
  /**
   * 
   * @param SimpleXMLElement $elt
   * @return FzGroup
   */
  public static function fromXml(SimpleXMLElement $elt) {
      $group = new FzGroup();
      $group->name = (string) $elt['Name'];
      
      //fetch group's options
      $group->options = self::parseOptions( $elt );

      //fetch parmissions
      $group->permissions = self::parseOptions( $elt );
      
      return $group;
  }
  
  /**
   * REturn an array of the options indexed by the name
   * @param SimpleXMLElement $elt
   * @return array
   */
  public static function parseOptions(SimpleXMLElement $elt) {
      $options = array();
      
      foreach ($elt->Option as $option) {
          $optName = (string)$option['Name'];
          $options[$optName] = (string) $option;
      }
      
      return $options;
  }
  
  public static function parsePermissions(SimpleXMLElement $elt) {
      $permissions = array();
      foreach($elt->Permissions->Permission as $perm) {
          $permDir = (string) $perm['Dir'];
          $permOptions = self::parseOptions( $perm );
          
         $permissions[$permDir] = $permOptions;
      }
      
      return $permissions;
  } 
}