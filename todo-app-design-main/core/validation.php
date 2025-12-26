<?php

function validateRequire($inputName, $value)
{
    return empty($value) ? "$inputName is required" : null;
}

function validateTitle($title)
{
    if (strlen($title) < 3) {
        return "title must be at least 3 characters";
    } elseif (strlen($title) > 20) {
        return "title must be at most 20 characters";
    }
}

function validateTask($title)
{
    $fields = [
        "title" => $title
    ];
    foreach ($fields as $input_name => $value) {
        if ($error = validateRequire($input_name, $value)) {
            return $error;
        }
    }
    if ($error = validateTitle($title)) {
        return $error;
    }
}