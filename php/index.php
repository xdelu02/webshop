<?php
    require "header.php";
?>

    <main style="clear:both">
        <div class="wrapped-main">
            <section class="section-default">
                <?php
                    if (isset($_SESSION["userId"])) {
                        echo '<p>You are logged in!</p>';
                        require "includes/index.inc.php";
                    }
                    else {
                        echo '<p>You are logged out!</p>';
                    }

                ?>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>