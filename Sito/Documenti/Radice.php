<!--
OLD VERSION <3
    <!DOCTYPE html>
    <html>
        <body>
            <p> Numeri: 64,0,1,9 </p>

            <?php
            echo(sqrt(64) . "<br>");
            echo(sqrt(0) . "<br>");
            echo(sqrt(1) . "<br>");
            echo(sqrt(9));
            ?>
        </body>
    </html>
-->

<!DOCTYPE html>
<html>
    <body>

        <p> Radici Automaticamente Generate: </p>

        <?php
        echo "Radice quadrata di 64: " . sqrt(64) . "<br>";
        echo "Radice quadrata di 0: " . sqrt(0) . "<br>";
        echo "Radice quadrata di 1: " . sqrt(1) . "<br>";
        echo "Radice quadrata di 9: " . sqrt(9) . "<br>" . "<br>";
        ?>

        <form method="post" action="">
            <label for="numero">Inserisci un numero:</label>
            <input type="number" step="any" name="numero" id="numero" required>
            <button type="submit">Calcola radice quadrata</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"]) && $_POST["numero"] !== "") {
            $numero = $_POST["numero"];

            if (is_numeric($numero)) {
                $numero = floatval($numero);
                if ($numero < 0) {
                    echo "<p>Non è possibile calcolare la radice quadrata di un numero negativo.</p>";
                } else {
                    echo "<p>Radice quadrata di " . htmlspecialchars($numero) . ": " . sqrt($numero) . "</p>";
                }
            } else {
                echo "<p>Per favore inserisci un numero valido.</p>";
            }
        }
        ?>

    </body>
</html>