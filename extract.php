<?php
$lines = file('application/views/tk/index.php');
// Content: lines 801-1119 (0-indexed: 800-1118)
$content = array_slice($lines, 800, 319);
// Page-specific scripts: lines 1192-1273 (0-indexed: 1191-1272)
$scripts = array_slice($lines, 1191, 82);

$output = implode('', $content);
$output .= "\n<script>\n(function () {\n";
$output .= implode('', $scripts);
$output .= "})();\n</script>\n";

file_put_contents('application/views/tk/index_new.php', $output);
echo "Done. New file has " . substr_count($output, "\n") . " lines.\n";
