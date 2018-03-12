<?php

use app\components\MyWidget;



?>




<h1>SHOW action</h1>


<?php
  echo MyWidget::widget(['name' => 'Vasya']);
?>

<?php //foreach ($cats as $cat){
//    echo $cat->name.'<br>';
//}
//
//?>


<?php debug($cats); ?>


