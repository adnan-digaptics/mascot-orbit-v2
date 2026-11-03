<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$outputDirectory = $root . DIRECTORY_SEPARATOR . '_site';

if (!is_dir($outputDirectory) && !mkdir($outputDirectory, 0777, true) && !is_dir($outputDirectory)) {
    throw new RuntimeException('Unable to create the static output directory.');
}

$pages = glob($root . DIRECTORY_SEPARATOR . '*.php');
if ($pages === false || $pages === []) {
    throw new RuntimeException('No PHP pages were found to build.');
}

foreach ($pages as $sourcePath) {
    ob_start();
    try {
        include $sourcePath;
        $html = ob_get_clean();
    } catch (Throwable $error) {
        ob_end_clean();
        throw $error;
    }

    $html = preg_replace('/\.php\b/', '.html', $html);
    if ($html === null) {
        throw new RuntimeException('Unable to rewrite page links in ' . basename($sourcePath) . '.');
    }

    $pageName = basename($sourcePath, '.php');
    $outputName = $pageName . '.html';
    if (file_put_contents($outputDirectory . DIRECTORY_SEPARATOR . $outputName, $html) === false) {
        throw new RuntimeException('Unable to write ' . $outputName . '.');
    }
}

$assetsDirectory = $root . DIRECTORY_SEPARATOR . 'assets';
if (!is_dir($assetsDirectory)) {
    throw new RuntimeException('The assets directory was not found.');
}

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($assetsDirectory, FilesystemIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $item) {
    $relativePath = substr($item->getPathname(), strlen($assetsDirectory) + 1);
    $targetPath = $outputDirectory . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . $relativePath;

    if ($item->isDir()) {
        if (!is_dir($targetPath) && !mkdir($targetPath, 0777, true) && !is_dir($targetPath)) {
            throw new RuntimeException('Unable to create asset directory ' . $targetPath . '.');
        }
        continue;
    }

    $targetDirectory = dirname($targetPath);
    if (!is_dir($targetDirectory) && !mkdir($targetDirectory, 0777, true) && !is_dir($targetDirectory)) {
        throw new RuntimeException('Unable to create asset directory ' . $targetDirectory . '.');
    }
    if (!copy($item->getPathname(), $targetPath)) {
        throw new RuntimeException('Unable to copy asset ' . $relativePath . '.');
    }
}

echo 'Built ' . count($pages) . ' pages into _site.' . PHP_EOL;
