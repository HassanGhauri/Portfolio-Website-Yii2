<?php 
/** @var yii\web\View $this */
/** @var string $content */

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PortFolio Website</title>
</head>
<body>
    <div>
        <h1>My Portfolio Website</h1>
    </div>

    <?php $this->beginBody() ?>
    <?php echo $content ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>