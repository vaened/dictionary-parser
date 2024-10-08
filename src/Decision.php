<?php
/**
 * @author enea dhack <enea.so@live.com>
 */

declare(strict_types=1);

namespace Vaened\DictionaryFlow;

interface Decision
{
    public function argumentBag(): ArgumentBag;

    public function action(): callable;
}