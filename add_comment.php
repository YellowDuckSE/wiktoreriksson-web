<?php
    $conn = new mysqli("localhost","root","rootpass","comments");
    $sql = "insert into " . $_POST["table"] . " values ('" . $_POST["text"] . "');";
    $conn->query($sql);
    $conn->close();
?>
<script>history.back();</script>