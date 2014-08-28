<?php

/**
 * A BCJ class
 *
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author JSatoshi Shiraishi <sachoco@gmail.com>
 * @copyright Satoshi Shiraishi
 * @license
 */
class BCJ
{
  /**
   * A public variable
   *
   * @var string stores data for the class
   */
  public $foo;

  /**
   * @param string $val a value required for the class
   * @return void
   */
  public function __construct($val)
  {

  }

  /**
   * @param
   * @param
   * @return
   */
  public function render_buyticket()
  {
    print '<button class="buy_ticket">チケット購入</button>';
  }
}

$bcj = new BCJ;

?>