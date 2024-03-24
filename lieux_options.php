<option selected disabled value="">Choisissez un groupe</option>
<?php foreach ($lieux as $groupe) : ?>
    <option><?php echo $groupe['nomL']; ?></option>
<?php endforeach; ?>
