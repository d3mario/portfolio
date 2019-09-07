<?php

namespace App\Services;

class ClientServices {
     private $value = '';

     /**
      * @param int $projectId
      * @return string
      */
     public function __construct($projectId){
          $this->setProjectType($projectId);
     }

    /**
     * Handles project type conversion
     * @param int $projectId
     * @return string
     */
    private function setProjectType($projectId){

        $WEB = "Live demo";
        $PRINTS = 'Print Work';
        $LOGO = 'Logo Work';

        switch($projectId){
            case 0: $this->value = $PRINTS;
            break;
            case 1: $this->value = $WEB;
            break;
            case 2: $this->value = $LOGO;
            break;
            default: $this->value = "N/a";
        }
    }

    /**
     * @return string
     */
    public function getProjectType(){
        return $this->value;
    }

}
