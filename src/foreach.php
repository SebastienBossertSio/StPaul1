<?php

foreach ($sejours as $sejour): ?>

    <h2><p><?php echo $sejour['SEJINTITULE'] ?></p></h2>
    <?php echo $sejour['SEJMONTANTMBI'].'€' ?><BR/>
    <?php echo 'A partir du '.$sejour['SEJDTEDEB'] ?>
    <?php echo $sejour['SEJDUREE'].' nuits' ?>
<?php endforeach ?>
