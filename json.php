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
<li>Use Raven Tools to build SEO reports, make changes as per SEO reports</li>
<li>Use Litmus to build HTML emails that look correct in all clients</li>
<li>Working with CRM\'s ( in particular Sharpspring ) to track the users experience on the websites and try to add </li>automated triggers to help market the websites better.
<li>Responsive HTML Email Development</li>
</ul>',
	),
	array(
		'title'    => 'Full Stack Developer',
		'name'     => 'Eagle Web Designs, Inc.',
		'range'    => 'Aug 2014 – Feb 2015',
		'duration' => '7 mos',
		'location' => 'Myrtle Beach, SC',
		'body'     => 'Updated and Developed custom CMS systems for 2 websites during my last time working at<br/>
Eagle Web Designs,  During my time at EWD I primarily worked on TheNationalTrader.com and brought it to launch.
TheNationalTrader.com is a Online Sales Catalog similar to Craigslist.
',
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