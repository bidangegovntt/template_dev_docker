<?php

if (! function_exists('disk_url'))
{
    function disk_url($path, $disk = null)
    {
        $disk OR $disk = config('filesystems.default');

        return Storage::disk($disk)->url($path);
    }
}
