<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\FourDiceListGenerator;

it('should generate a string', function () {
    expect(resolve(FourDiceListGenerator::class)->generate())->toBeString();
});
