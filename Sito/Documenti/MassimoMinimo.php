<!-- 
OLD VERSION <3
	<!DOCTYPE html>
	<html>
		<body>

			<p> Numeri: 0, 35, 254, 60, -8, -300 </p>

			<?php
			echo("Minimo = " . min(0, 35, 254, 60, -8, -300) . "<br>");
			echo("Massimo = " . max(0, 35, 254, 60, -8, -300));
			?>

		</body>
	</html>
-->

<!DOCTYPE html>
<html>
    <body>

        <p> Lista Generata Automaticamente: 0, 35, 254, 60, -8, -300 </p>

		<?php
		    echo("Minimo = " . min(0, 35, 254, 60, -8, -300) . "<br>");
		    echo("Massimo = " . max(0, 35, 254, 60, -8, -300)) . "<br>" . "<br>";
	    ?>

        <form method="post" action="">
            <label for="numeri">Inserisci una lista di numeri separati da virgola:</label><br>
            <input type="text" name="numeri" id="numeri" placeholder="es. 0, 35, 254, 60, -8, -300" required>
            <button type="submit">Calcola</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numeri"]) && $_POST["numeri"] !== "") {
            $input = $_POST["numeri"];
            $parti = explode(",", $input);

            $numeri = [];
            $errore = false;

            foreach ($parti as $p) {
                $p = trim($p);
                if ($p === "" || !is_numeric($p)) {
                    $errore = true;
                    break;
                }
                $numeri[] = floatval($p);
            }

            if ($errore || empty($numeri)) {
                echo "<p>Per favore inserisci solo numeri validi separati da virgola.</p>";
            } else {
                echo "<p>Numeri inseriti: " . htmlspecialchars($input) . "</p>";
                echo "<p>Minimo = " . min($numeri) . "<br>";
                echo "Massimo = " . max($numeri) . "</p>";
            }
        }
        ?>

    </body>
</html>