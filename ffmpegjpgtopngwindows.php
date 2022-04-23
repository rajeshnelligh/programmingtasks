<?php

//executing this php script in the linux terminal or windows command prompt converts .jpg files to .png files using the ffmpeg tool
//php and ffmpeg should be installed prior to the script execution.
//this script works in linux terminal and also in the windows command prompt.

//$input_path is the location of the .jpg files.
//inputfile%d.jpg only selects the files which are in this sequence-> inputfile1.jpg, inputfile2.jpg, inputfile3.jpg and so on.
//$output_path is the location in which the .png files to be created.
//outputfile%d is to create the .png files in this sequence -> outputfile1.png, outputfile2.png, outputfile3.png and so on.

$input_path = 'C:\Users\rajes\OneDrive\Desktop\inputfile%d.jpg';
$output_path = 'C:\Users\rajes\OneDrive\Desktop\outputfile%d.png';
shell_exec("ffmpeg -i $input_path $output_path ");

?>