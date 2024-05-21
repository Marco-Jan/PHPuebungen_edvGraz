<?php
namespace Classes;

use Person\Person;
use Interfaces\ITeamLeader;

class TeamLeader extends Person implements ITeamLeader {
    private $projects = [];

    public function addProject($project) {
        $this->projects[] = $project;
    }

    public function getProjects() {
        return $this->projects;
    }

    public function setDeveloper($dev, $prId) {
        foreach ($this->projects as $project) {
            if ($project->getId() === $prId) {
                $project->addDeveloper($dev);
            }
        }
    }

    public function changeProjectStatus($status, $prId) {
        foreach ($this->projects as $project) {
            if ($project->getId() === $prId) {
                $project->setStatus($status);
            }
        }
    }
}
?>
