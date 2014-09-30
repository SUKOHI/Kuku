<?php namespace Sukohi\Kuku\Facades;

use Illuminate\Support\Facades\Facade;

class Kuku extends Facade {

  /**
   * コンポーネントの登録名を取得
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'kuku'; }

}