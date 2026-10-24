<?php
declare(strict_types=1);

// Escape plain text before including it in HTML text or quoted attributes.
function portfolio_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Preserve intentional title breaks without allowing HTML in editable data.
function portfolio_lines(string $value): string
{
    return nl2br(portfolio_e($value), false);
}
