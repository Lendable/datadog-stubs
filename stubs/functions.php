<?php

declare(strict_types=1);

namespace DDTrace {
    /**
     * @phpstan-param \Closure(DDTrace\SpanData, list<mixed>=, mixed|null=, \Throwable|null=): void $tracingClosure
     */
    function trace_method(string $className, string $methodName, \Closure $tracingClosure): void
    {
    }
}
