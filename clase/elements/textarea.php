<?php
/**************************************************************
* Projectname:   php form generate class 
* Version:       1.0
* Author:        Tzuly <tzulac@gmail.com>
* Last modified: 15-oct-2012
***************************************************************
* 
*******************************
* Description: textarea class *
******************************* 
* Child of element class
*  return string html element
 */
class textarea extends element{
    /**
     * 
     * @param string $name
     */
    public function __construct($name) {
        parent::__construct($name);
    }
    /**
     * 
     * @return string
     */
    public function getElement() {
        $full="<textarea name='".$this->_name."' ";
        foreach ($this->_attr as $key=>$value) {
            $full.="$key='".$value."' ";
        }
        $full.="></textarea>";
        return $full;
    }
}