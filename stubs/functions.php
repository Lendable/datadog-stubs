<?php

declare(strict_types=1);

namespace {

    if (!function_exists('dd_trace_peek_span_id')) {
        function dd_trace_peek_span_id(): int
        {
            return 0;
        }
    }

    if (!function_exists('ddtrace_config_distributed_tracing_enabled')) {
        function ddtrace_config_distributed_tracing_enabled(): bool
        {
            return false;
        }
    }

    if (!function_exists('ddtrace_config_app_name')) {
        function ddtrace_config_app_name(string $fallback): string
        {
            return '';
        }
    }
}

namespace DDTrace {

    if (!function_exists('DDTrace\trace_method')) {
        /**
         * @phpstan-param \Closure(DDTrace\SpanData, list<mixed>=, mixed|null=, \Throwable|null=): void $tracingClosure
         */
        function trace_method(string $className, string $methodName, \Closure $tracingClosure): void
        {
        }
    }

    if (!function_exists('DDTrace\trace_id')) {
        function trace_id(): int
        {
            return 0;
        }
    }
}
