<?php

//executing this php script in the linux terminal converts .jpg files to .png files using the ffmpeg tool
//php and ffmpeg should be installed prior to the script execution.
//this script works in linux terminal but does not work in windows command prompt.

//$input_path is the location of the .jpg files.
//*.jpg selects all the files with .jpg extension.
//$output_path is the location in which the .png files to be created.
//outputfile%d is to create the .png files in this sequence -> outputfile1.png, outputfile2.png, outputfile3.png and so on.

$input_path = '/mnt/c/Users/rajes/OneDrive/Desktop/*.jpg';
$output_path = '/mnt/c/Users/rajes/OneDrive/Desktop/outputfile%d.png';
shell_exec("ffmpeg -pattern_type glob -i '$input_path' $output_path ");

?>