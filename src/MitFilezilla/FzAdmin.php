<?php
namespace MitFilezilla;
use MitFilezilla\FzItem;
use MitFilezilla\FzGroup;

class FzAdmin {

    /**
     *
     * @var array of FzItem
     */
    private $settings;

    /**
     * Indexed by group's name
     * @var array of FzGroup
     */
    private $groups;

    /**
     * Indexed by user's name
     * @var array of FzUser
     */
    private $users;


    public static function getGroupByName($name) {
        //TODO
    }

    public function getSettings() {
        return $this->settings;
    }
    
    public function setSettings(array $s) {
        $this->settings = $s;
    }
    
    public function getGroups() {
        return $this->groups;
    }
    
    public function setGroups(array $g) {
        $this->groups = $g;
    }
    
    public function getUsers() {
        return $this->users;
    }
    
    public function setUsers(array $u) {
        $this->users = $u;
    }
    
}