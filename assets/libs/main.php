<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Pages folder
$pages_folder = "./pages/";
$array_indexes = array();
$array_pages = array();

// Scandir to populate arrays
if (is_dir($pages_folder)) 
{
    if ($dh = opendir($pages_folder)) 
	{
        while (($file = readdir($dh)) !== false) 
		{
			if ( $file != "." && $file != ".." )
			{
				$filename = $file;
				$array_filename = explode("_", $filename);
				array_push($array_indexes, $array_filename[1]);
				array_push($array_pages, $filename);
			}
        }
        closedir($dh);
    }
}

