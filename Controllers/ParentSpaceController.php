<?php

namespace Controllers ;

use Models\ActivityModel;
use Models\ClassModel;
use Models\CourseModel;
use Models\MarkModel;
use Models\UsersModel;

class ParentSpaceController extends Controller {
    
    public $space = "parents" ;
    public $userCredentials = NULL;
    public $infos = NULL ;
    public $children ;
    public function __construct(){  
        $this->verifAuth('parent');
    }


    public function getUser(){
        return (new UsersModel)->getUser($_SESSION['username'],$_SESSION['passwd']) ;

    }

    public function getInfos(){
        return (new UsersModel)->getParentInfo($this->userCredentials->__get('id'));
    }

    public function getChildren(){
        return (new UsersModel)->getChildren($this->userCredentials->__get('id'));
    }


    public function getClasse($classId){
        return (new ClassModel)->getClasse($classId) ;

    }

    public function getSchedule($id){
        $tmp = $this->getClasse($id);
        if (isset($tmp))
            return $tmp->__get('scheduleUrl'); 

    }

    public function getActivities($id) {
        $acties = (new ActivityModel)->getActivities($id);
        $new = [] ;
        foreach ($acties as $act) {
            $new[] = (new ActivityModel)->getActivity($act);
        }
        return $new ;
    }

    public function getMarks($id) {
        return (new MarkModel)->getMarks($id);
    }

    public function getCourse($id){
           return (new CourseModel)->getCourse($id);
    }

    public function getChildrenSchedules(){
        $schedules = [] ;
        foreach ($this->children as $child ) {  
            $schedules[$child->firstName] = $this->getSchedule($child->__get('classId'));
        }
        return $schedules ;
    }

    public function getChildrenClasses(){
        $classes = [] ;
        foreach ($this->children as $child ) {
            $classes[] = $this->getClasse($child->__get('classId'));
        }
        return $classes ;
    }

    public function getChildrenActivities(){
        $acts = [] ;
        foreach ($this->children as $child ) {
            $acts[$child->firstName] = $this->getActivities($child->__get('id'));
        }
        return $acts ;
    }

    public function getChildrenMarks(){
        $marks = [] ;
        foreach ($this->children as $child ) {
            $marks[$child->firstName] = $this->getMarks($child->__get('id'));
        }
        return $marks ;
    }
    /*
    public function getObservations(){
        $acts = [] ;
        foreach ($this->children as $child ) {
            $acts[] = $this->getObservation($child->__get('id'));
        }
        return $acts ;
    }*/

    public function render(){
        $this->userCredentials = $this->getUser() ;
        $this->infos = $this->getInfos() ;
        $this->children = $this->getChildren();
        $this->view('ParentSpaceView');
	}
}