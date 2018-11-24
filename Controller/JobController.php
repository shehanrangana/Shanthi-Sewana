<?php
require_once("../../Model/Database.php");
require_once("../../Model/Job.php");

function getJobs($id)
{
    $job = new Job();
    return $job->getJobs($id);
}

?>