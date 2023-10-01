<?php

declare(strict_types=1);

namespace {

    if (!function_exists('dd_trace_peek_span_id')) {
        function dd_trace_peek_span_id(): string
        {
            return '0';
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

    if (!function_exists('ddtrace_config_trace_enabled')) {
        function ddtrace_config_trace_enabled(): bool
        {
            return false;
        }
    }
}

namespace DDTrace {

    if (!function_exists('DDTrace\trace_method')) {
        /**
         * @phpstan-param \Closure|array $tracingClosure
         */
        function trace_method(string $className, string $methodName, $tracingClosure): void
        {
        }
    }

    if (!function_exists('DDTrace\trace_function')) {
        /**
         * @phpstan-param \Closure|array $tracingClosure
         */
        function trace_function(string $functionName, $tracingClosure): void
        {
        }
    }

    if (!function_exists('DDTrace\trace_id')) {
        function trace_id(): string
        {
            return '0';
        }
    }

    if (!function_exists('DDTrace\set_distributed_tracing_context')) {
        /**
         * @param array<string,string>|null $tags
         */
        function set_distributed_tracing_context(string $trace_id, string $parent_id, ?string $origin = null, ?array $tags = null): bool
        {
            return true;
        }
    }
}
