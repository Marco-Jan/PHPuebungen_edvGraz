<?php
namespace Classes;

use Person\Person;
use Interfaces\IDeveloper;

class Developer extends Person implements IDeveloper {
    private $skills = [];

    public function getSkills() {
        return $this->skills;
    }

    public function addSkills($skill) {
        $this->skills[] = $skill;
    }

    public function getAssignedProjects($projects) {
        $assignedProjects = [];
        foreach ($projects as $project) {
            if (in_array($this, $project->getDevelopers())) {
                $assignedProjects[] = $project;
            }
        }
        return $assignedProjects;
    }

    public function progress($project, $progress) {
        if (in_array($this, $project->getDevelopers())) {
            $project->setProgress($progress);
        }
    }
}
?>
