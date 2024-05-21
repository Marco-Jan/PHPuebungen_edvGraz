<?php
namespace Interfaces;

interface ITeamLeader {
    public function addProject($project);
    public function getProjects();
    public function setDeveloper($dev, $prId);
    public function changeProjectStatus($status, $prId);
}
?>
