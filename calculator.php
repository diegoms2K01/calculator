<?php
    $value = "";
    $op = "";
    $result = "";
    $cookieName1 = "value";
    $cookieValue1 = "";
    $cookieName2 = "op";
    $cookieValue2 = "";

    if (isset($_POST['submit'])) {
        $value = $_POST['submit'];
    } else {
        $value = "";
    }

    if (isset($_POST[''])) {
        $cookieValue1 = $_POST['op'];
        setcookie($cookieName1,$cookieValue1,time()+(86400 * 30),"/");

        $cookieValue2 = $_POST['op'];
        setcookie($cookieName2,$cookieValue2,time()+(86400 * 30),"/");

        $value = "";
    }

    switch($_COOKIE['op']){
        case "+":
            $result = $_COOKIE['submit'] + $value;
            break;
        case "/":
            $result = $_COOKIE['submit'] / $value;
            break;
        case "-":
            $result = $_COOKIE['submit'] - $value;
            break;
        case "x":
            $result = $_COOKIE['submit'] * $value;
            break;
    }

    if (isset($_POST['equals_to'])) {
        $value = $_POST['submit'];

        echo $_COOKIE['op'];
        echo $_COOKIE['submit'];

        echo $value;

        $result = $value + $_COOKIE['submit'];
    }

    $value = $result;
?>

<h3>C A L C U L A T O R</h3>

<form method="post">
    <center>
        <input type="text" name="value" value="<?php echo $value?>" readonly>
        <br>
        <br>
        <table border="1">
            <tr>
                <td>
                    <input type="submit" name="submit" value="7">
                </td>
                <td>
                    <input type="submit" name="submit" value="8">
                </td>
                <td>
                    <input type="submit" name="submit" value="9">
                </td>
                <td>
                    <input type="submit" name="op" value="/">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="4">
                </td>
                <td>
                    <input type="submit" name="submit" value="5">
                </td>
                <td>
                    <input type="submit" name="submit" value="6">
                </td>
                <td>
                    <input type="submit" name="op" value="*">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="1">
                </td>
                <td>
                    <input type="submit" name="submit" value="2">
                </td>
                <td>
                    <input type="submit" name="submit" value="3">
                </td>
                <td>
                    <input type="submit" name="op" value="-">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="0">
                </td>
                <td colspan="2">
                    <input type="submit" name="equals_to" value="=">
                </td>
                <td>
                    <input type="submit" name="op" value="+">
                </td>
            </tr>
        </table>
    </center>
</form>