<?php
$sites = array
(
   'HELLO'=>array
   (
       "hello~",
       "My friend"
   ),
   'sameting'=>array
   (
       "do anyting",
       "for everyting"
   ),
   'OK'=>array
   (
       'I can do anyting',
       'for everyting'
   )

);
print('<pre>');
print_r($sites);
print('</pre>');
echo $sites['sameting'][0].' I can '.$sites['OK'][1];


?>