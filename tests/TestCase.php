<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpCsFixer\Tests;

use LegacyPHPUnit\TestCase as BaseTestCase;
use PHPUnitGoodPractices\Polyfill\PolyfillTrait;
use PHPUnitGoodPractices\Traits\ExpectationViaCodeOverAnnotationTrait;
use PHPUnitGoodPractices\Traits\ExpectOverSetExceptionTrait;
use PHPUnitGoodPractices\Traits\IdentityOverEqualityTrait;
use PHPUnitGoodPractices\Traits\ProphecyOverMockObjectTrait;
use PHPUnitGoodPractices\Traits\ProphesizeOnlyInterfaceTrait;
use Prophecy\PhpUnit\ProphecyTrait;

// To ensure compatibility for different PHPUnit versions, we may need to inject the ProphecyTrait, if it's present.
if (trait_exists(ProphecyTrait::class)) {
    /**
     * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
     *
     * @internal
     */
    abstract class InterimTestCase extends BaseTestCase
    {
        use ProphecyTrait;
    }
} else {
    /**
     * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
     *
     * @internal
     */
    abstract class InterimTestCase extends BaseTestCase
    {
    }
}

/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
abstract class TestCase extends InterimTestCase
{
    use ExpectationViaCodeOverAnnotationTrait;
    use ExpectOverSetExceptionTrait;
    use IdentityOverEqualityTrait;
    use PolyfillTrait;
    use ProphecyOverMockObjectTrait;
    use ProphesizeOnlyInterfaceTrait;
}
