<?php

declare(strict_types=1);

namespace DDTrace;

if (!class_exists('DDTrace\SpanData')) {
    final class SpanData
    {
        public ?string $name;
    }
}
