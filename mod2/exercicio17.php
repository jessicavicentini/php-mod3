<?php
$names = ['Fugiro', 'Cagaro', 'Fulano', 'Cicrano', 'People'];

$listNames = function () USE ($names) {
    var_dump ($names);
};

$listNames();