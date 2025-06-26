<?php

namespace Kalimero\ReadonlyArray\Traits;

trait CastsToReadonlyArray
{
    public function toReadonlyArray(): array
    {
        return get_object_vars($this);
    }
}
