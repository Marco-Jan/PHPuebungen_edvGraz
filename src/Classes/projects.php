<?php
namespace Classes;

use Interfaces\IProject;

class Project implements IProject {
    private $id;
    private $name;
    private $developers = [];
    private $progress;
    private $status;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->progress = 0;
        $this->status = false;
    }

    public function addDeveloper($dev) {
        $this->developers[] = $dev;
    }

    public function getDevelopers() {
        return $this->developers;
    }

    public function getProgress() {
        return $this->progress;
    }

    public function setProgress($progress) {
        $this->progress = $progress;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}
?>
