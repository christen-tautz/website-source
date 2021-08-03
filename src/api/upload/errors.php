<?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="error">
            <p><?php echo $error ?></p>
        </div>
    <?php endforeach ?>
<?php endif ?>

<?php if (count($notifs) > 0) : ?>
    <?php foreach ($notifs as $notif) : ?>

        <div class="notif">
            <p><?php echo $notif ?></p>
        </div>
    <?php endforeach ?>
<?php endif ?>