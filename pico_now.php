<?php
/**
 * Pico Plugin Pico-Now
 * 拡張構文#now()を実装(フォーマットを指定して日付時刻を表示)
 *
 * @author TakamiChie
 * @link http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
class Pico_Now {

	public function after_render(&$output)
	{
    $now = new DateTime();
  	$output = preg_replace_callback('/#now\(([\w\s\/\-\:年月日時分秒]+)\)/', function($m) use ($now){
        return $now->format($m[1]);
      }, $output);
	}

}

?>
