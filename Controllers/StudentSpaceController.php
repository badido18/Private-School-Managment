<?php

namespace Controllers ;

use Classes\Activity;
use Models\ActivityModel;
use Models\ClassModel;
use Models\CourseModel;
use Models\MarkModel;
use Models\ScheduleModel;
use Models\UsersModel;

class StudentSpaceController extends Controller {

    public $space = "students" ;
    public $userCredentials = NULL;
    public $infos = NULL ;
    public $classe = NULL ;
    public $activities = NULl ;
    public $marks = NULl ;

    public function __construct(){
        $this->verifAuth('student');
    }

    public function getUser(){
        return (new UsersModel)->getUser($_SESSION['username'],$_SESSION['passwd']) ;

    }

    public function getInfos(){
        return (new UsersModel)->getStudentInfo($this->userCredentials->__get('id'));
    }

    public function getClasse(){
        return (new ClassModel)->getClasse($this->infos->__get('classId')) ;

    }

    public function getSchedule(){
        return $this->classe->__get('scheduleUrl'); 

    }

    public function getActivities() {
        $acties = (new ActivityModel)->getActivities($this->userCredentials->__get('id'));
        $new = [] ;
        foreach ($acties as $act) {
            $new[] = (new ActivityModel)->getActivity($act);
        }
        return $new ;
    }

    public function getMarks() {
        return (new MarkModel)->getMarks($this->userCredentials->__get('id'));
    }

    public function getCourse($id){
           return (new CourseModel)->getCourse($id);
    }

    public function render($params){
        $this->userCredentials = $this->getUser();
        $this->infos = $this->getInfos();
        $this->classe = $this->getClasse();
        $this->activities = $this->getActivities();
        $this->marks = $this->getMarks();
		$this->view('StudentSpaceView');
	}
}