<?php
/***********************************************************************/
/* ATutor															   */
/***********************************************************************/
/* Copyright (c) 2002-2009											   */
/* Adaptive Technology Resource Centre / Inclusive Design Institute	   */
/* http://atutor.ca													   */
/*																	   */
/* This program is free software. You can redistribute it and/or	   */
/* modify it under the terms of the GNU General Public License		   */
/* as published by the Free Software Foundation.					   */
/***********************************************************************/
// $Id: index.php 9941 2010-05-21 17:24:29Z hwong $

define(AT_INCLUDE_PATH, '../../include/');
include(AT_INCLUDE_PATH.'vitals.inc.php');
include(AT_JB_INCLUDE.'classes/Job.class.php');
$_custom_css = $_base_path . AT_JB_BASENAME . 'module.css'; // use a custom stylesheet

$job = new Job();
$all_job_posts = $job->getAllJobs();

//Check the form username and pwd
if (isset($_POST['submit']) && $_POST['submit']!=''){
	$this_password	= $addslashes($_POST['form_password_hidden']);
	$this_login		= $addslashes($_POST['form_login']);

	//if succeeded
	header('Location: employer_home.php');
	exit;
}

include(AT_INCLUDE_PATH.'header.inc.php');
$savant->display('jb_employer_login.tmpl.php');
include(AT_INCLUDE_PATH.'footer.inc.php'); 
?>