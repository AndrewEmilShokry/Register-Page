<?php if(count($errors) > 0 ) : ?>

    <div>
        <?php foreach($errors as $errpr) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
    
<?php endif ?>