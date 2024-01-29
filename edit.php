<?PHP
    $conn = new mysqli("localhost", "root", "", "dbactone");
        $conn->query("update tblaccount set fldname='$_GET[edtxtname]' WHERE fldaccno='$_GET[txtedit]'");
    header('location:account.php');
?>
