<?php

/**
 * Laravel Domain Parser Package (https://github.com/bakame-php/laravel-domain-parser)
 *
 * (c) Ignace Nyamagana Butera <nyamsprod@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bakame\Laravel\Pdp;

use Illuminate\Support\Facades\Facade;
use Pdp\TopLevelDomains;

final class TopLevelDomainsFacade extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return TopLevelDomains::class;
    }
}
