<?php
require_once 'jsonRPCClient.php';
require_once 'analytics.php';


$rpcUser = '';          // RPC User (casinocoin.conf)
$rpcPassword = '';      // RPC Password (casinocoin.conf)
$rpcHost = '';         // RPC Casinocoin deamon host
$rpcPort = '47970';         // RPC Port (casinocoin.conf)
$casinocoinDeamon = new jsonRPCClient('http://'.$rpcUser.':' . $rpcPassword . '@' . $rpcHost . ':' . $rpcPort . '/');


$casinocoinInfo = $casinocoinDeamon->getinfo();
$casinocoinMiningInfo = $casinocoinDeamon->getmininginfo();

echo '<div style="margin: 20px; width: auto; float: left;"><h1>casinocoind::getinfo</h1><br />' . PHP_EOL;
foreach($casinocoinInfo as $jsonLabel => $labelValue){
    echo '<div style="width: 200px;"><b>' . $jsonLabel . ':</b></div>' . $labelValue . '<br />' . PHP_EOL;
}

echo '</div><div style="margin: 20px; width: auto; float: left;"><h1>casinocoind::getmininginfo</h1><br />' . PHP_EOL;
foreach($casinocoinMiningInfo as $jsonLabel => $labelValue){
      echo '<div style="width: 200px;"><b>' . $jsonLabel . ':</b></div>' . $labelValue . '<br />' . PHP_EOL;
}



echo '</div><div style="margin: 20px; width: auto; float: left;"><h1>cryptsy_api::tradingprice</h1><br />' . PHP_EOL;
echo '<div style="width: 200px;"><b>Trading price:</b></div>BTC ' . getLastTradingPrice() . '<br /></div>' . PHP_EOL;

function getLastTradingPrice() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=68');

    // Set so curl_exec returns the result instead of outputting it.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // Get the response and close the channel.
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response);
    $CSCBTC = $data->return->markets->CSC->lasttradeprice;

    $cryptsyHandle = fopen("/tmp/lasttradeprice", 'r+');
    if ($CSCBTC == '') {
        $CSCBTC = file_get_contents('/tmp/lasttradeprice');
    } else {
        file_put_contents('/tmp/lasttradeprice', $CSCBTC);
    }

    return $CSCBTC;
}