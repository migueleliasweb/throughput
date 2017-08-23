<?php

require_once __DIR__.'/vendor/autoload.php';

use Silex\Application;

$app = new Silex\Application();

$data = <<<EOT
toim4ZrCOhocev8tyhd2JhZ8r2AZsTcQ7sGOHTmL
7lN6sAspURyLYRjYQRJ0
XbB1AHEUHkAf06smiDm9
VQ93xuIQhx5PIaJ15BEw
AefmkueNRXJ6oNQLQCWI
rq1gRQtRfreYr1CVHNMW
12uN60QNE1ceYzaGK56T
Fz2cYSr91YLkTANMqGHv
zyUUvnr1fZkIMXHFu31n
JzFjiwYvOQ9mKkQqKLDb
wbijH8cYB2wJbPuM8HTN
TmEW6yM9RcuMIebFDFcg
gDo5bbrX7qCw6vdEnggo
SaxWmDrDnrLQUIJFWezW
dSwTCbDppqEkV1qV5Wqy
1gLBMoSANaUlStPvMMp9
LW4XlGPe49e5FUj1bHMD
ScXiTX7yXNZEsY5b0elW
UyFJtnJwbio9NJAbBRSr
8Li7bYoVCQeQgIPaJDVH
Ml8q7cIYgd76kuSGoiNH
IRnscIsSMV79BZfC4kUs
T2KbWSeXbHc1pOgx35al
fSCBu5n0eFqLjZm5unNM
wvnp5RArHmJK204t25RX
fii8yNAB1tTzMtVVLFHs
2k1Kc2iobgmBJJ9Zohpg
6qjxDAWrSrCzCmgu7IqF
vB8JWsqhBtqVM2ypPduL
OUTNuEHtoOYedWrsgyjp
4A4LmNWBsaa0FV7xtBDt
LZutMlPsyW7bYKkVtqpn
y6SOciYgz8ocGzN6HsfJ
8n7aysMXXqErNezMftlT
twuZWOWMHBhRCKRUUtJe
MQxfWZ9cf48zdpkV9KUx
3XZ4IscpTUMApQuv274O
3mlId4QZ4iM1PKgY4pT1
nzxEd1MtiyLYwqEwg7R0
YNRTpo1Qs5GQOlhlIkGT
6x4f3t7xnf7lTsKTTHGQ
TZjVvwlmzklz61eYay8L
y4MyBQwxIRGuBDa3za1D
yNy1aCP2md24g0WT5JOO
sEMI78WvEGQafghlynCt
IZrSvmrK9Hs8qGiWd5jd
6CDwZ00Ac82Hu
EOT;

$app->get('/', function () use ($data) {
    return $data;
});

$app->run();
