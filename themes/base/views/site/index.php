<?php $this->pageTitle = Yii::app()->name; ?>

<div class="hero-unit visible-desktop">
    <h1>Welcome to <em><?php echo CHtml::encode(Yii::app()->name); ?></em></h1>
    <p>All the goodness of H5BP & Twitter Bootstrap wrapped up in a Yii theme.</p>
    <br />
    <p>
        <a class="btn btn-primary btn-large" href="http://www.yiiframework.com/doc/" target="_blank">
            Learn more
        </a>
    </p>
</div>
<?php
 $message = new YiiMailMessage;
 $message->setBody('Message content here with HTML', 'text/html');
 $message->subject = 'My Subject';
 $message->addTo('daniel.mirecki@satel.pl');
 $message->from = Yii::app()->params['adminEmail'];
 Yii::app()->mail->send($message);
$rawData = array();
$gridDataProvider = new CArrayDataProvider($rawData);
// $gridColumns
$gridColumns = array(
    array('name' => 'id', 'header' => '#', 'htmlOptions' => array('style' => 'width: 60px')),
    array('name' => 'firstName', 'header' => 'First name'),
    array('name' => 'lastName', 'header' => 'Last name'),
    array('name' => 'language', 'header' => 'Language'),
    array('name' => 'hours', 'header' => 'Hours worked'),
//    array(
//        'htmlOptions' => array('nowrap' => 'nowrap'),
//        //'class' => 'bootstrap.widgets.TbButtonColumn',
//        //'viewButtonUrl' => null,
//        //'updateButtonUrl' => null,
//        //'deleteButtonUrl' => null,
//    )
);
$this->widget('zii.widgets.grid.CGridView', array(
    //'type' => 'striped',
    'dataProvider' => $gridDataProvider,
    'template' => "{items}",
    'columns' => $gridColumns,
));
?>
