<?php

if(isset($_GET['submit'])) {
    $regex = $_GET['regex'];
    if(preg_match($regex, $_GET['string']) === 1) {
        echo "it matches";
    }
    else {
        echo "no match found";
    }
}

?>

<html>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <table>
            <tr>
            <td>String</td>
            <td><input type="text" name="string" value="<? if(isset($_GET["string"])) echo htmlspecialchars($_GET["string"]) ?>"/></td>
            </tr>
            <tr>
            <td>Regex</td>
            <td><input type="text" name="regex" value="<? if(isset($_GET["regex"])) echo htmlspecialchars($_GET["regex"]) ?>"/></td>
            </tr>
            <input type="submit" name="submit" value="submit">
        </table>
    </form>
    </body></html>