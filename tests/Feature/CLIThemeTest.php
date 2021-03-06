<?php

use Minicli\Output\CLITheme;
use Minicli\Output\Theme\UnicornTheme;
use Minicli\Output\CLIColors;

it('asserts that Default CLI theme sets all default styles', function () {
   $theme = new CLITheme();

   assertIsArray($theme->getStyle('default'));
   assertIsArray($theme->getStyle('alt'));
   assertIsArray($theme->getStyle('info'));
   assertIsArray($theme->getStyle('info_alt'));
   assertIsArray($theme->getStyle('error'));
   assertIsArray($theme->getStyle('error_alt'));
   assertIsArray($theme->getStyle('success'));
   assertIsArray($theme->getStyle('success_alt'));
});

it('asserts that default theme returns expected colors for default text', function () {
    $theme_default = new CLITheme();

    assertContains(CLIColors::$FG_WHITE, $theme_default->getStyle('default'));
});

it('asserts that Unicorn CLI theme sets all default styles', function () {
    $theme = new UnicornTheme();

    assertIsArray($theme->getStyle('default'));
    assertIsArray($theme->getStyle('alt'));
    assertIsArray($theme->getStyle('info'));
    assertIsArray($theme->getStyle('info_alt'));
    assertIsArray($theme->getStyle('error'));
    assertIsArray($theme->getStyle('error_alt'));
    assertIsArray($theme->getStyle('success'));
    assertIsArray($theme->getStyle('success_alt'));
});
