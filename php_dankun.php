<?php
$data = ['おはようございます','こんにちは','こんばんは'];
date_default_timezone_set('Asia/Tokyo');
$t = date("G");
if($t > 6 and $t < 12):
    print $data[0];
elseif($t >= 12 and $t < 18):
    print $data[1];
else:
    print $data[2];
endif;
    print '編集しました';