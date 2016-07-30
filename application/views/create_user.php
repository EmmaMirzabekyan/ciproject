
        <h1>User Create</h1>
        <form action="<?php echo base_url('user/create');?>" method="POST">
            <label for="userName">User Name</label>
            <input type="text" name="userName"/>
            <label for="userEmail">User Email</label>
            <input type="text" name="userEmail"/>
            <input type="submit" name="submit" value="Create"/>
        </form>
 