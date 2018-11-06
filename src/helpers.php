<?php

function ssr(string $entry = null, bool $is_mix = true)
{
    if (func_num_args() === 0) {
        return app('ssr');
    }

    return app('ssr')->entry($entry, $is_mix);
}
