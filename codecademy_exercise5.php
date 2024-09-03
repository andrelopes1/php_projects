<?php


/*
Calculate Our Expected Amount of USD

Create variables to hold the amount of each foreign currency we’ll be exchanging:

    We had a blissful time at Lake Yeak Laom in Ratanakiri, Cambodia and ended up with 2103942 riel left in our pocket
    We saw the best sunset of our lives in Hpa-an, Myanmar and left the country with 19092 kyat
    We got our fill of fjords in Bergen, Norway and discovered 109 krones that went unspent
    We soaked up the sun and history in Saranda, Albania and found 9094 lek scattered throughout our luggage when we arrived home to NYC

It makes sense to name the variables meaningfully. For example, we would create a variable $riel to hold the value 2103942.

Use echo to print how much of each currency we started out with.

Look up the exchange rate for each of those currencies. Save a variable for each exchange rate.

For each currency, calculate the amount of USD it will be exchanged for and use echo to print this to the terminal.

The currency exchange business takes a flat $1 fee per conversion. Calculate our final amount of USD and use echo to print it to the terminal.

Thanks for your help! Consider exploring other currencies or changing your echo statements to make the program even more unique to you.

Are those extra decimals driving you crazy? There are lot’s of ways to get rid of them, including using language features you might not know, but there are some tricks to getting rid of them using mathematical operators (in particular modulo (%)). For an extra challenge, play around and see what you can do. You can check out the way we did it in the hint!
*/

// Amount of each currency
$riel = 2103942; // Cambodian Riel
$kyat = 19092;   // Myanmar Kyat
$krones = 109;   // Norwegian Krones
$lek = 9094;     // Albanian Lek

// Exchange rates (to USD)
$riel_to_usd = 0.00024;   // 1 Riel = 0.00024 USD
$kyat_to_usd = 0.00047;   // 1 Kyat = 0.00047 USD
$krones_to_usd = 0.094;   // 1 Krone = 0.094 USD
$lek_to_usd = 0.010;      // 1 Lek = 0.010 USD

// Calculate USD equivalent for each currency
$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones = $krones * $krones_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

// Print initial currency values
echo "Starting currency amounts:\n";
echo "Riel: $riel\n";
echo "Kyat: $kyat\n";
echo "Krones: $krones\n";
echo "Lek: $lek\n\n";

// Print USD equivalent for each currency
echo "Equivalent in USD:\n";
echo "USD from Riel: " . number_format($usd_from_riel, 2) . "\n";
echo "USD from Kyat: " . number_format($usd_from_kyat, 2) . "\n";
echo "USD from Krones: " . number_format($usd_from_krones, 2) . "\n";
echo "USD from Lek: " . number_format($usd_from_lek, 2) . "\n\n";

// Calculate total USD before fee
$total_usd_before_fee = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek;

// Total number of conversions
$total_conversions = 4;

// Calculate total fee
$total_fee = $total_conversions * 1; // $1 fee per conversion

// Calculate final amount of USD after deducting fees
$final_usd = $total_usd_before_fee - $total_fee;

// Print final USD amount
echo "Total USD after all conversions and fees: $" . number_format($final_usd, 2) . "\n";
