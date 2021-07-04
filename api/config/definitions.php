<?php

$files = array_merge(
	glob(__DIR__ . '/common/*.php') ?: [],
	glob(__DIR__ . '/' . (getenv('APP_ENV') ?: 'prod') . '/*.php') ?: [],
);

$configs = array_map(fn(string $filePath) => require $filePath, $files);
return array_merge_recursive(...$configs);