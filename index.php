<?php

include __DIR__ . '/header.php';

spl_autoload_register(function ($class) {
    include $class . '.php';
});


use Classes\TeamLeader;
use Classes\Developer;
use Classes\Project;

$teamLeader = new TeamLeader("John Doe", "john@example.com");
$developer = new Developer("Jane Smith", "jane@example.com");
$project = new Project("1", "Projekt A");

$teamLeader->addProject($project);
$teamLeader->setDeveloper($developer, "1");
$teamLeader->changeProjectStatus(true, "1");

// Ausgabe auf der Index-Seite
echo "TeamLeader: " . $teamLeader->getName() . "<br>";
echo "Project Name: " . $project->getName() . "<br>";
echo "Project Status: " . ($project->getStatus() ? 'Active' : 'Inactive') . "<br>";
echo "Developer: " . $developer->getName() . "<br>";

include __DIR__ . '/footer.php';
?>
