<?php
require_once __DIR__ . '/helpers.php';

echo 'offline: ' . getLearningModeLabel('offline') . '<br>';
echo 'online: ' . getLearningModeLabel('online') . '<br>';
echo 'hybrid: ' . getLearningModeLabel('hybrid') . '<br>';
echo 'lainnya: ' . getLearningModeLabel('xyz');