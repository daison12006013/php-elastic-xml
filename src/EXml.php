<?php

declare(strict_types=1);

namespace Daison\EXml;

class EXml
{
  const SPACE = 'space';
  const TAB   = 'tab';

  public static function indent(int $indent) {}
  public static function indentType(string $indentType) {}
  public static function element(string $name, array $props, ...$elements) {}
  public static function elementInline(string $name, array $props, ...$elements) {}
  public static function template(string $template) {}
}
