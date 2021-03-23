<?php

/* @var $this yii\web\View */
/**
 * @var Member $model
 */
?>
<div class="cards-events">
    <?php foreach($models as $model):?>
        <div class="card">
            <img class="card-item-icon" src="img/list.png" alt="icon">
            <p class="card-item-text">
                <?php
                    if($model->content_id != NULL) {
                        $event_date = $model->date;
                        $cur_date = date("Y");
                        $jubilee = $cur_date - $event_date;
                        if(($jubilee) % 5 == 0) {
                            echo "<span class='jubilee'>Юбилей!</span> ";
                        }
                        $str = $model->description;
                        $str = mb_strimwidth($str, 0, 210, "...");
                        echo $str;
                    } else {
                    echo "Нет информации";
                }?>
            </p>
        </div>
    <?php endforeach?>
</div>