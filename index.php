<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Lyric Remix</title>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            background-color: #2e2e2e; 
            color: #f0f0f0; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
            margin: 0;
        }
        .container {
            text-align: center;
            max-width: 800px;
            width: 100%;
            padding: 30px;
            background-color: #333; 
            border-radius: 8px;


        }
        h1, h2 {
            color: #f0f0f0; 
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        .verse, .chorus {
            margin-bottom: 20px;
        }
        .chorus {
            font-weight: bold;
            color:rgb(238, 116, 116); 
        }
        .tag {
            font-style: italic;
            color: #bbb; 
            font-size: 0.9em;
            margin-top: 20px;
        }
        .verse p {
            line-height: 1.8;
            margin-bottom: 10px;
            color: #f0f0f0; 
        }
    </style>
</head>
<body>
<div class="container">

<?php

$title = "Babalik";
$artist = "Honcho, John Roa, Skusta Clee, Flow G";
$mood = "regretful";

$verseCount = 4;
$chorusRepeat = 2;

$nouns = ["panahon", "panghihinayang", "palad", "pagmamahal", "ulan", "sakit", "sandali", "yakap", "buhay"];
$verbs = ["marararamdaman", "bitawan", "iniwanan", "pinamukha", "babalik", "magpakamatay", "pinaiyak", "sinugatan"];
$adjectives = ["mahabang", "lubos", "sapat", "mag-isa", "matino", "malamig", "masakit"];

// Verse 1
$verse1_line1 = "Makalipas ang mahabang {$nouns[0]}, tsaka mo {$verbs[0]} ang lubos na {$nouns[1]}.";
$verse1_line2 = "Sayang lamang dahil hindi na muling mahahawakan pa.";
$verse1_line3 = "Ang mga {$nouns[2]} ko mula ng ako'y iyong {$verbs[1]}.";
$verse1_line4 = "{$verbs[2]} mo'ko kahit na walang {$adjectives[2]} na dahilan.";
$verse1_line5 = "Binasura ang {$nouns[3]}, hindi pinahalagahan.";
$verse1_line6 = "{$verbs[3]} mo sa'kin na hindi mo'ko minahal.";
$verse1_line7 = "Binitawan ang kamay ko sa gitna ng {$nouns[4]}.";
$verse1_line8 = "At pinamukha mo sa'kin na hindi mo'ko minahal ('di mo minahal).";
$verse1_line9 = "Kaya sana 'wag na magbakasakali.";
$verse1_line10 = "Na maibabalik ang dating pagsinta, hindi na bale.";
$verse1_line11 = "Matapos mong alisin ang higpit ng pagkakatali.";
$verse1_line12 = "Babalik ka sa'kin, naku po, hindi na maaari.";
$verse1_line13 = "Wala na ako'ng gana (wala na, wala na).";
$verse1_line14 = "Lahat ng {$nouns[5]} ay mag-isa ko lang kinaya.";
$verse1_line15 = "Kaya sana wag na'ng mangumusta pa.";
$verse1_line16 = "At umasa na maibabalik pa tayo, ayaw na kitang kasama.";

// Chorus
$chorus_line1 = "Balang araw ay {$verbs[4]} ka din.";
$chorus_line2 = "At maalala mo ang mga {$nouns[6]} na tayo'y magkasama, tayo'y magkausap.";
$chorus_line3 = "Magdamag hanggang umaga.";
$chorus_line4 = "Ngayon hindi mo pa makita, pero balang araw ay {$verbs[4]} ka.";

// Verse 2
$verse2_line1 = "Bago mo sabihing hindi kita minahal.";
$verse2_line2 = "Anong pruweba mo sabihin sa'kin? (Sabihin sa'kin)";
$verse2_line3 = "'Di ako nagkulang o nagkamali.";
$verse2_line4 = "Alam mong pinaglaban ko pag-ibig natin?";
$verse2_line5 = "(Masaya ka na ba?) Masaya ka ba'ng nasasaktan ako, baby?";
$verse2_line6 = "('Pag kasama mo siya) Kulang na lang ay magpakamatay ako, baby.";
$verse2_line7 = "Iiyak kunwari 'pag ako ang kaharap.";
$verse2_line8 = "Pero pagtalikod mo ay maglalaho na lahat.";
$verse2_line9 = "Mga sinabi mo sa'kin, puro lamang ka-shit-an.";
$verse2_line10 = "Sa lahat ng matino, ako pa ang napag-trip-an (oh, no-no-no).";
$verse2_line11 = "Babalik sa'yo ang (babalik sa'yo) ang mga ginawa mo sa'kin.";
$verse2_line12 = "'Pag nangyari 'yon ay hindi na kita kayang tignan.";

// Verse 3
$verse3_line1 = "Balang araw ay magbabalik ka din.";
$verse3_line2 = "At maalala mo ang mga {$nouns[6]} na tayo'y magkasama, tayo'y magkausap.";
$verse3_line3 = "Magdamag hanggang umaga.";
$verse3_line4 = "Ngayon hindi mo pa makita.";
$verse3_line5 = "Pero balang araw ay babalik ka.";

// Verse 4
$verse4_line1 = "Balang araw ay babalik ka.";
$verse4_line2 = "Pero 'pag nangyari 'yon, hindi na (hindi na).";
$verse4_line3 = "Hindi ko na makita (hindi ko na makita).";
$verse4_line4 = "Hindi ko na madadama dahil pinahina (oh, yeah) mo ang aking kalooban (yeah).";
$verse4_line5 = "Iniwanan mo, pinaiyak tapos sinugatan.";
$verse4_line6 = "Teka lang, 'bat ka nagbabalik?";
$verse4_line7 = "Alam mo bang tapos na ako sa panananabik?";
$verse4_line8 = "Kaya hindi na ulit magpapakasakit.";
$verse4_line9 = "Hindi ko na naisip pang humalik.";
$verse4_line10 = "Kaya hindi ko na kailangan pa ng {$nouns[7]}.";
$verse4_line11 = "Hindi ko na kailangan pa, hindi na kita kailangan pa dito sa {$nouns[8]} ko.";
$verse4_line12 = "Hindi mo ba nakita?";
$verse4_line13 = "Hindi ko na kailangan nang saktan mo pa nang sobra.";
$verse4_line14 = "Ngayon sa'kin babalik ka.";
$verse4_line15 = "Hindi mo na ginalang sa harap ko, umalis ka.";
$verse4_line16 = "'Wag ka sa'kin magpakita.";
$verse4_line17 = "Ang mga iniwan mong sugat sa'kin, magaling na.";
$verse4_line18 = "'Wag nang bumalik pa.";


$totalSections = $verseCount + $chorusRepeat; 
$info = "Total sections to display: " . $totalSections;


echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p class='tag'>Mood: $mood</p>";
echo "<p class='tag'>$info</p>";

echo "<div class='verse'><h3>Verse 1</h3>";
echo "<p>$verse1_line1</p>";
echo "<p>$verse1_line2</p>";
echo "<p>$verse1_line3</p>";
echo "<p>$verse1_line4</p>";
echo "<p>$verse1_line5</p>";
echo "<p>$verse1_line6</p>";
echo "<p>$verse1_line7</p>";
echo "<p>$verse1_line8</p>";
echo "<p>$verse1_line9</p>";
echo "<p>$verse1_line10</p>";
echo "<p>$verse1_line11</p>";
echo "<p>$verse1_line12</p>";
echo "<p>$verse1_line13</p>";
echo "<p>$verse1_line14</p>";
echo "<p>$verse1_line15</p>";
echo "<p>$verse1_line16</p>";
echo "</div>";

for ($i = 1; $i <= $chorusRepeat; $i++) {
    echo "<div class='chorus'><h3>Chorus (x$i)</h3>";
    echo "<p>$chorus_line1</p>";
    echo "<p>$chorus_line2</p>";
    echo "<p>$chorus_line3</p>";
    echo "<p>$chorus_line4</p>";
    echo "</div>";
}

echo "<div class='verse'><h3>Verse 2</h3>";
echo "<p>$verse2_line1</p>";
echo "<p>$verse2_line2</p>";
echo "<p>$verse2_line3</p>";
echo "<p>$verse2_line4</p>";
echo "</div>";

echo "<div class='verse'><h3>Verse 3</h3>";
echo "<p>$verse3_line1</p>";
echo "<p>$verse3_line2</p>";
echo "<p>$verse3_line3</p>";
echo "<p>$verse3_line4</p>";
echo "<p>$verse3_line5</p>";
echo "</div>";

echo "<div class='verse'><h3>Verse 4</h3>";
echo "<p>$verse4_line1</p>";
echo "<p>$verse4_line2</p>";
echo "<p>$verse4_line3</p>";
echo "<p>$verse4_line4</p>";
echo "<p>$verse4_line5</p>";
echo "<p>$verse4_line6</p>";
echo "<p>$verse4_line7</p>";
echo "<p>$verse4_line8</p>";
echo "<p>$verse4_line9</p>";
echo "<p>$verse4_line10</p>";
echo "<p>$verse4_line11</p>";
echo "<p>$verse4_line12</p>";
echo "<p>$verse4_line13</p>";
echo "<p>$verse4_line14</p>";
echo "<p>$verse4_line15</p>";
echo "<p>$verse4_line16</p>";
echo "<p>$verse4_line17</p>";
echo "<p>$verse4_line18</p>";
echo "</div>";

?>

</div>
</body>
</html>

