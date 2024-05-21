<?php
namespace Interfaces;

interface IProject {
    public function addDeveloper($dev);
    public function getDevelopers();
    public function getProgress();
    public function setProgress($progress);
    public function getStatus();
    public function setStatus($status);
    public function getId();
}
