<h1>User Create</h1>
<ul>
    <?php
    foreach ($hayk as $user) {
        ?>
    <li><?php echo $user->name; ?> and <?php echo $user->email; ?><a href="<?php echo base_url('user/delete/'.$user->id)?>">Delete user</a></li>

        <?php
    }
    ?>

</ul>
