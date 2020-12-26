<?php
    require "header.php";
?>

<main style="clear:both">
    <div class="">
        <section class="#">
            <?php
                if (isset($_SESSION["userId"])) {
                    echo '<p>You are logged in!</p>';
                }
                else {
                    echo '<p>You are logged out!</p>';
                }

            ?>
        </section>
    </div>
    <p>PAGE</p>
    <button>button</button>
</main>

<?php
    require "footer.php";
?>