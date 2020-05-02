<!-- Sesssion Messege -->

        <?php if(isset($_SESSION['messege'])): ?>

            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                <?php 
        echo "<center><marquee><h3>".$_SESSION['messege']."</h3></marquee></center>";
        unset ($_SESSION['messege']);
        ?>
            </div>
            <?php endif; ?>

