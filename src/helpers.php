<?php

use Spatie\Flash\Flash;
use Spatie\Flash\Message;

/**
 * @param string $text
 * @param string|array $class
 */
function flash(string $text = null, $class = null): Flash
{
    /** @var \Spatie\Flash\Flash $flash */
    $flash = app(Flash::class);

    if (is_null($text)) {
        return $flash;
    }

    if (is_array($class)) {
        $class = implode(' ', $class);
    }

    $message = new Message($text, $class);

    $flash->flash($message);

    return $flash;
}
