<?php

declare(strict_types=1);

namespace {

    function dd_trace_peek_span_id(): int
    {
        return 0;
    }

    function ddtrace_config_distributed_tracing_enabled(): bool
    {
        return false;
    }
}

namespace DDTrace {
    /**
     * @phpstan-param \Closure(DDTrace\SpanData, list<mixed>=, mixed|null=, \Throwable|null=): void $tracingClosure
     */
    function trace_method(string $className, string $methodName, \Closure $tracingClosure): void
    {
    }

    function trace_id(): int
    {
        return 0;
    }
}
