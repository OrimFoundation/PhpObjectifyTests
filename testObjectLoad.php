<?php

// start script time
$timeExecutionStart = microtime(true);
// start memory usage
$memoryExecutionStart = memory_get_usage(true);
// start memory peak usage
$peakMemoryExecutionStart = memory_get_peak_usage(true);

// default test to run
$test = 1;
// number of iterations to do
$iterations = 10000;

// fetch params from CLI
$options = getopt("t:i:");

if (array_key_exists('t', $options)) {
    $test = $options['t'];
}

if (array_key_exists('i', $options)) {
    $iterations = $options['i'];
}

include 'test' . $test . '/User.class.php';
include 'data.inc.php';
include 'Integer.class.php';
include 'String.class.php';

for ($i = 0; $i < $iterations; $i++) {

    $obj = new User();
    $obj->load($data);
}

// end script time
$timeExecutionEnd = microtime(true);
// end memory usage
$memoryExecutionEnd = memory_get_usage(true);
// end memory peak usage
$peakMemoryExecutionEnd = memory_get_peak_usage(true);

$timeSpent                    = 1000 * ($timeExecutionEnd - $timeExecutionStart);
$paddedMemoryExecutionStart   = str_pad(number_format($memoryExecutionStart, 0, '.', ','), 10, ' ', STR_PAD_LEFT);
$paddedMemoryExecutionEnd     = str_pad(number_format($memoryExecutionEnd, 0, '.', ','), 10, ' ', STR_PAD_LEFT);
$paddedPeakMemoryExecutionEnd = str_pad(number_format($peakMemoryExecutionEnd, 0, '.', ','), 10, ' ', STR_PAD_LEFT);

echo 'Time spent:        ' . $timeSpent . ' ms' . PHP_EOL;
echo 'Memory start:      ' . $paddedMemoryExecutionStart . ' B' . PHP_EOL;
echo 'Memory end:        ' . $paddedMemoryExecutionEnd . ' B' . PHP_EOL;
echo 'Memory peak:       ' . $paddedPeakMemoryExecutionEnd . ' B' . PHP_EOL;


?>
