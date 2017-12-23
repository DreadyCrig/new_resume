<?php

$array = array(
	array(
		'title'    => 'Full Stack Developer',
		'name'     => 'Southern Tide Media',
		'range'    => 'Dec 2015 – Present',
		'duration' => '2 yrs 1 mo',
		'location' => 'Myrtle Beach, South Carolina Area',
		'body'     => '
I currently work as a contract developer for Southern Tide Media.<br/><br/>
At Southern Tide Media, My job responsibilities vary from
<ul>
<li>Estimating how much time a project will take, and any technical challenges of the project</li>
<li>Setting up a new servers</li>
<li>building custom web sites</li>
<li>migrating websites to new hosts</li>
<li>Server and Web maintenance</li>
<li>building custom web sites from scratch</li>
<li>building API connectors</li>
<li>Working with CRM\'s ( in particular Sharpspring ) to track the users experience on the websites and try to add </li>automated triggers to help market the websites better.
<li>Responsive HTML Email Development</li>
</ul>',
	),
/*
	array(
		'title'    => '',
		'name'     => '',
		'range'    => '',
		'duration' => '',
		'location' => '',
		'body'     => '',
	),
*/
);

echo json_encode( $array, JSON_PRETTY_PRINT );