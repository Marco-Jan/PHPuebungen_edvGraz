<?php 

require_once dirname(__DIR__) . '/Classes/TeamLeader.php';
require_once dirname(__DIR__) . '/Classes/Developer.php';
require_once dirname(__DIR__) . '/Classes/Project.php';


$claudia = new TeamLeader('Claudia Leader', 'claudia.leader@company.at');
$hendrik_dev = new Developer('Hendrik Dev', 'hendrik.de@company.at');
$hendrik_dev->addSkill('PHP');
$hendrik_dev->addSkill('Backend');
$amelia_dev = new Developer('Amelia Dev', 'amelia.dev@company.at');
$amelia_dev->addSkill('JavaScript');
$amelia_dev->addSkill('Frontend');


for( $i = 0; $i <5;  $i++){
    $claudia->addProject(new Project("Project $i"));
}

$claudia->setDeveloper($hendrik_dev, $claudia->getProjects()[0]->getId());
$claudia->setDeveloper($amelia_dev, $claudia->getProjects()[0]->getId());
$claudia->setDeveloper($hendrik_dev, $claudia->getProjects()[3]->getId());
$claudia->setDeveloper($amelia_dev, $claudia->getProjects()[4]->getId());

$hendrik_dev->progress(($hendrik_dev->getAssignedProjects($claudia->getProjects())[0]), 50);
$amelia_dev->progress(($amelia_dev->getAssignedProjects($claudia->getProjects())[1]), 76);

