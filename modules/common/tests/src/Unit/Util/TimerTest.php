<?php

namespace Drupal\Tests\common\Unit\Util;

use Drupal\common\Util\Timer;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class TimerTest extends TestCase {

  /**
   *
   */
  public function test() {
    $timer = new Timer();
    $timer->start("hello");
    sleep(1);
    $timer->end("hello");
    $this->assertStringContainsString("hello AVG: 1", (string) $timer);
  }

}
