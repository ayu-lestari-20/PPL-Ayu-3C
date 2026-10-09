<?php
// File: Validator.php

function validateName($name) {

    // Nama tidak boleh kosong
    if (trim($name) === "") {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }

    // Nama hanya boleh mengandung huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama hanya boleh berupa huruf");
    }

    return true;
}
?>