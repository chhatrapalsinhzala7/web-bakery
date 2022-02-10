<?php
    session_start();
    if (isset($_SESSION['userid'])) {
        ?>
        <form>
            <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>">
            <input type="text" name="email" value="<?php echo $_SESSION['email'] ?>">
            <textarea>
                <?php echo $_SESSION['address']; ?>
            </textarea>
            <input type="password" name="password">
        </form>
        <?php
    }
?>