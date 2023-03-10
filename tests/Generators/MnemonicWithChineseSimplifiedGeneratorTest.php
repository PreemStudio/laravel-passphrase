<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithChineseSimplifiedGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithChineseSimplifiedGenerator::class)->generate())->toBeString();
});
