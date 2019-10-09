<?php
/**
 * Created by PhpStorm.
 * User: george
 * Date: 09/10/2019
 * Time: 1:59:54 PM
 */
include_once 'turboParser.php';


$job_output = new turboParser((object)[
    "job" => (object)[
        "text" => "Привет, мне на <a href=\"test@test.ru\">test@test.ru</a> пришло приглашение встретиться, попить кофе с <strong>10%</strong> содержанием молока за <i>$5</i>, пойдем вместе!",
        "methods" => [
            "stripTags", "removeSpaces", "replaceSpacesToEol", "htmlspecialchars", "removeSymbols", "toNumber"
        ]
    ]
]);