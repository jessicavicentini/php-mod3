<?php
$names = ['Fugiro', 'Cagaro', 'Fulano', 'Cicrano', 'People'];
array_map(function($array_map) { return var_dump(strtoupper($array_map));}, $names);