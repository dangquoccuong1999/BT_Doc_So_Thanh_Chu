<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 180px;
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Mời bạn nhập number</h2>
        <input type="text" name="number" size="30" placeholder="Input Number"/>
        <input type="submit" name="submit" size="30"/>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_REQUEST['number'];

    function hangDonVi($number)
    {
        $hangDonVi = $number % 10;
        switch ($hangDonVi) {
            case 0:
                $hangDonVi = ' ';
                break;
            case 1:
                $hangDonVi = ' One';
                break;
            case 2:
                $hangDonVi = ' Two';
                break;
            case 3:
                $hangDonVi = ' Three';
                break;
            case 4:
                $hangDonVi = ' Four';
                break;
            case 5:
                $hangDonVi = ' Five';
                break;
            case 6:
                $hangDonVi = ' Six';
                break;
            case 7:
                $hangDonVi = ' Seven';
                break;
            case 8:
                $hangDonVi = ' Eight';
                break;
            case 9:
                $hangDonVi = ' Nine';
                break;
        }
        return $hangDonVi;
    }

    function hangChuc($number)
    {
        $tempNumber = $number / 10;
        $hangChuc = $tempNumber % 10;

        switch ($hangChuc) {
            case 0:
                $hangChuc = ' ';
                break;
            case 1:
                $hangChuc = ' One';
                break;
            case 2:
                $hangChuc = ' Twenty';
                break;
            case 3:
                $hangChuc = ' Thirty';
                break;
            case 4:
                $hangChuc = ' Forty';
                break;
            case 5:
                $hangChuc = ' Fifty';
                break;
            case 6:
                $hangChuc = ' Sixty';
                break;
            case 7:
                $hangChuc = ' Seventy';
                break;
            case 8:
                $hangChuc = ' Eighty';
                break;
            case 9:
                $hangChuc = ' Ninety';
                break;
        }
        return $hangChuc;
    }

    function hangTram($number)
    {
        $hangTram = floor($number / 100);
        switch ($hangTram) {
            case 1:
                $hangTram = ' One hundred ';
                break;
            case 2:
                $hangTram = ' Two hundred ';
                break;
            case 3:
                $hangTram = ' Three hundred ';
                break;
            case 4:
                $hangTram = ' Four hundred ';
                break;
            case 5:
                $hangTram = ' Five hundred ';
                break;
            case 6:
                $hangTram = ' Six hundred ';
                break;
            case 7:
                $hangTram = ' Seven hundred ';
                break;
            case 8:
                $hangTram = ' Eight hundred ';
                break;
            case 9:
                $hangTram = ' Nine hundred ';
                break;
        }
        return $hangTram;
    }

    if ($number > 0 && $number < 10) {
        echo hangDonVi($number);
    }

    if ($number >= 10 && $number < 20) {
        switch ($number) {
            case 10:
                echo 'ten';
                break;
            case 11:
                echo 'eleven';
                break;
            case 12:
                echo 'twelfth';
                break;
            case 13:
                echo 'thirteen';
                break;
            case 14:
                echo 'fourteen';
                break;
            case 15:
                echo 'fifteen';
                break;
            case 16:
                echo 'sixteen';
                break;
            case 17:
                echo 'seventeen';
                break;
            case 18:
                echo 'eighteen';
                break;
            case 19:
                echo 'nineteen';
                break;
        }
    }
    if ($number >= 20 && $number < 100) {
        echo hangChuc($number) . hangDonVi($number);
    }
    if ($number >= 100 && $number < 1000) {
        if ($number == 100) {
            echo hangTram($number) . hangChuc($number) . hangDonVi($number);
        } else {
            echo hangTram($number) . 'and' . hangChuc($number) . hangDonVi($number);
        }
    }
}
?>