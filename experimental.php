<?php
declare(strict_types=1);

function orderPizza(string $pizza, string $client)
{
    $type = $pizza;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizza;
    $price = calcPrice($type);

    $address = 'unknown';
    if($client == 'koen')
    {
        $address = 'a yacht in Antwerp';
    } elseif ($client == 'manuele')
    {
        $address = 'somewhere in Belgium';
    } elseif ($client == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$price.'.<br>';

    echo "Order finished.<br><br>";
}

function totalPrice($totalPrice) {
    return $totalPrice;
}

function test($pizza) {
    echo "Test: type is {$pizza}. <br>";
}

function calcPrice($pizza): int
{
    $price = 'unknown';

    if ($pizza == 'margarita') {
        $price = 5;
    }
    else
    {
        if ($pizza == 'golden')
        {
            $price = 100;
        }

        if ($pizza == 'calzone')
        {
            $price = 10;
        }

        if ($pizza == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $price;
}

function orderAllPizzas()
{
    $test= 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');

    orderPizza('golden', 'students');
}

function makeEverybodyHappy(bool $doIt)
{
    if ($doIt) {
        orderAllPizzas();
    }
}

makeEverybodyHappy(true);
 