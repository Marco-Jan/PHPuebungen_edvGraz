<?php
namespace Interfaces;

interface IDeveloper {
    public function getSkills();
    public function addSkills($skill);
    public function getAssignedProjects($projects);
    public function progress($project, $progress);
}
