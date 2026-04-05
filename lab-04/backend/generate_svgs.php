<?php
$dir = __DIR__ . '/../assets/images/';
if(!is_dir($dir)) mkdir($dir, 0777, true);

function getThumb($color1, $color2, $iconText, $title) {
    return '<?xml version="1.0" encoding="UTF-8"?>
<svg viewBox="0 0 800 450" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="g" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="'.$color1.'"/>
      <stop offset="100%" stop-color="'.$color2.'"/>
    </linearGradient>
  </defs>
  <rect width="800" height="450" fill="url(#g)"/>
  <circle cx="400" cy="225" r="120" fill="white" opacity="0.1"/>
  <text x="400" y="245" font-family="Arial" font-size="120" font-weight="bold" fill="white" text-anchor="middle">'.$iconText.'</text>
  <text x="400" y="400" font-family="Arial" font-size="30" font-weight="bold" fill="white" opacity="0.5" text-anchor="middle">'.$title.'</text>
</svg>';
}

function getLogo($iconText) {
    return '<?xml version="1.0" encoding="UTF-8"?>
<svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
  <circle cx="200" cy="200" r="180" fill="#f8fafc"/>
  <text x="200" y="250" font-family="Arial" font-size="160" font-weight="bold" fill="#0f172a" text-anchor="middle">'.$iconText.'</text>
</svg>';
}

$courses = [
    'java' => ['#f97316', '#ea580c', '☕', 'Java Programming'],
    'dsa' => ['#8b5cf6', '#6d28d9', '🌳', 'Data Structures'],
    'python' => ['#3b82f6', '#1d4ed8', '🐍', 'Python'],
    'mern' => ['#10b981', '#047857', '⚛️', 'MERN Stack'],
    'security' => ['#ef4444', '#b91c1c', '🔒', 'Cyber Security'],
    'cpp' => ['#0284c7', '#0369a1', 'C++', 'C++ Programming'],
    'genai' => ['#ec4899', '#be185d', '🧠', 'Generative AI'],
    'data' => ['#14b8a6', '#0f766e', '📊', 'Data Science'],
    'cloud' => ['#f59e0b', '#b45309', '☁️', 'Cloud Computing']
];

foreach ($courses as $key => $c) {
    file_put_contents($dir . $key . '-thumb.svg', getThumb($c[0], $c[1], $c[2], $c[3]));
    file_put_contents($dir . $key . '-logo.svg', getLogo($c[2]));
}

echo "Created 18 SVG images in assets/images/";
?>
