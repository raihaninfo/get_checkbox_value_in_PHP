<?php include 'header.php'; ?>
<section class="main-body bg-dark text-white">
    <!-- html code hear -->

    <table>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <tr>
                <td>Coder : </td>
                <td>
                    PHP
                    <input type="checkbox" name="coder[]" value="PHP">
                    JAVA
                    <input type="checkbox" name="coder[]" value="JAVA">
                    Python
                    <input type="checkbox" name="coder[]" value="Python">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Sunmit" id="">
                </td>
            </tr>
        </form>
    </table>
    <!-- php code hear -->
    <?php

    if (empty($_POST['coder'])) {
        echo "Please select the checkbox";
    } else {
        if (isset($_POST['submit'])) {
            $cdr = $_POST['coder'];
            echo "You have a selected : ";
            foreach ($cdr as $coder => $value) {
                echo $value . ", ";
            }
        }
    }
    ?>

</section>
<?php include 'footer.php'; ?>