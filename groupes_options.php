<option selected disabled value="">Choisissez un groupe</option>
<?php foreach ($groupes as $groupe) : ?>
    <option><?php echo $groupe['nomgr']; ?></option>
<?php endforeach; ?>

