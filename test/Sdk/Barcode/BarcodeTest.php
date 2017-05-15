<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/4/6
 * Time: 上午10:48
 */
namespace Zan\Framework\Test\Sdk\Barcode;

use Zan\Framework\Testing\TaskTest;
use Zan\Framework\Sdk\Barcode\Barcode;

class BarcodeTest extends TaskTest {
    public function taskGenerateBarcode()
    {
        $text = "youzan";
        $height = 10;
        $styles = [
            'rotate' => 0,
            'scale' => 1,
            'bg' => 'ffffff',
            'fg' => '000000',
            'hrt' => 1
        ];
        $barcode = 20;
        try {
            yield Barcode::createDataUrl($text, $height, $styles, $barcode);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

    }
}