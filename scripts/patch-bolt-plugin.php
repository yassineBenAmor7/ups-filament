<?php
// Lightweight, safe patcher to remove `final` keyword from LaraZeus BoltPlugin.
// Runs on composer install/update via composer.json scripts.

declare(strict_types=1);

use Composer\Autoload\ClassLoader;

// Ensure we are in project root when executed via composer scripts
chdir(dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

// The target class we need to patch
$targetClass = 'LaraZeus\\Bolt\\BoltPlugin';

try {
    if (!class_exists($targetClass)) {
        fwrite(STDERR, "[patch-bolt-plugin] Target class not found: {$targetClass}\n");
        exit(0); // do not fail composer
    }

    $reflection = new ReflectionClass($targetClass);
    $file = $reflection->getFileName();
    if (!$file || !is_file($file)) {
        fwrite(STDERR, "[patch-bolt-plugin] Cannot resolve file for {$targetClass}\n");
        exit(0);
    }

    $contents = file_get_contents($file);
    if ($contents === false) {
        fwrite(STDERR, "[patch-bolt-plugin] Failed reading file: {$file}\n");
        exit(0);
    }

    // Only modify if the class is declared final
    $pattern = '/\\bfinal\\s+class\\s+BoltPlugin\\b/';
    if (preg_match($pattern, $contents) === 1) {
        $patched = preg_replace($pattern, 'class BoltPlugin', $contents, 1);
        if ($patched !== null && $patched !== $contents) {
            // Make a backup once
            $backup = $file . '.bak';
            if (!file_exists($backup)) {
                @copy($file, $backup);
            }
            file_put_contents($file, $patched);
            echo "[patch-bolt-plugin] Removed final from BoltPlugin at {$file}\n";
        } else {
            echo "[patch-bolt-plugin] Nothing changed (preg_replace returned same).\n";
        }
    } else {
        echo "[patch-bolt-plugin] BoltPlugin not declared final, no change.\n";
    }
} catch (Throwable $e) {
    // Never fail composer operations
    fwrite(STDERR, "[patch-bolt-plugin] Error: " . $e->getMessage() . "\n");
    exit(0);
}


