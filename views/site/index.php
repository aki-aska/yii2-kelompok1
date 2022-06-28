<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

   
    <div class="body-content">
        <?php foreach($data as $ky => $i){?>
                <div>
                    <h1><?=$i->title?></h1>
                    <small>
                    <?=$i->username?> <?=$i->date?>
                    </small>
                    <p>
                    <?=$i->content?>
                    </p>
                </div>
        <?php }?>
    </div>

</div>
