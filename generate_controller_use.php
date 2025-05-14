<?php
// generate_use_statements.php

$controllerDir = __DIR__ . '/app/Http/Controllers';
$baseNamespace = 'App\\Http\\Controllers';

function getControllers($dir, $namespace)
{
    $files = scandir($dir);
    $uses = [];

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $fullPath = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($fullPath)) {
            $uses = array_merge($uses, getControllers($fullPath, $namespace . '\\' . $file));
        } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $class = $namespace . '\\' . pathinfo($file, PATHINFO_FILENAME);
            $uses[] = "use $class;";
        }
    }

    return $uses;
}

$useStatements = getControllers($controllerDir, $baseNamespace);

echo implode(PHP_EOL, $useStatements) . PHP_EOL;
