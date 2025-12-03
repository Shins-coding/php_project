<!DOCTYPE html>
<html lang="tl">
<head>
    <meta charset="UTF-8">
    <title>PHP Lyric Remix - Babalik (Remix)</title>
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
$title = "Babalik (Remix)";
$artist = "Inspired by Honcho, John Roa, Skusta Clee, Flow G";
$mood = "regretful";

$verseCount = 3;
$chorusRepeat = 3;

$nouns = [
    "panahon", "panghihinayang", "palad", "pagmamahal", "ulan",
    "sakit", "sandali", "yakap", "buhay", "kamay", "proweba", "pagsinta", "kalooban", "sugat"
];
$verbs = [
    "marararamdaman", "bitawan", "iniwanan", "pinamukha", "babalik",
    "magpakasakit", "pinaiyak", "sinugatan", "alisin", "minahal", "sabihin"
];
$adjectives = [
    "mahabang", "lubos", "sapat", "mag-isa", "matino", "malamig", "masakit", "dating", "higpit"
];

$chorus = [
    "Balang araw ay " . $verbs[4] . " ka din.",
    "At maalala mo ang mga " . $nouns[6] . " na tayo'y magkasama, tayo'y magkausap.",
    "Magdamag hanggang umaga.",
    "Ngayon hindi mo pa makita, pero balang araw ay " . $verbs[4] . " ka."
];

$verses = [
    1 => [
        "Makalipas ang " . $adjectives[0] . " " . $nouns[0] . ", tsaka mo " . $verbs[0] . " ang " . $adjectives[1] . " " . $nouns[1] . ".",
        "Sayang lamang dahil hindi na muling mahahawakan pa.",
        "Ang mga " . $nouns[2] . " ko mula ng ako'y iyong " . $verbs[1] . ".",
        "Binasura ang " . $nouns[3] . ", hindi pinahalagahan.",
        $verbs[2] . " mo'ko kahit na walang " . $adjectives[2] . " na dahilan.",
        $verbs[3] . " mo sa'kin na hindi mo'ko " . $verbs[9] . ".",
        "Kaya sana 'wag na magbakasakali.",
        "Na maibabalik ang " . $adjectives[7] . " " . $nouns[11] . ", hindi na bale.",
        "Matapos mong " . $verbs[8] . " ang " . $adjectives[8] . " ng pagkakatali.",
        $verbs[4] . " ka sa'kin, naku po, hindi na maaari."
    ],
    2 => [
        "Wala na ako'ng gana (wala na, wala na).",
        "Lahat ng " . $nouns[5] . " ay " . $adjectives[3] . " ko lang kinaya.",
        "Kaya sana wag na'ng mangumusta pa.",
        "At umasa na maibabalik pa tayo, ayaw na kitang kasama."
    ],
    3 => [
        $verbs[6] . " mo ako, tapos " . $verbs[7] . " pa.",
        "Sa gitna ng " . $nouns[4] . ", " . $verbs[2] . " mo akong " . $adjectives[3] . ".",
        "Ngayon " . $verbs[4] . " ka, pero huli na ang lahat.",
        "Hindi ko na kailangan pa ng " . $nouns[3] . " mo."
    ]
];

$bridge = [
    "Bago mo sabihing hindi kita " . $verbs[9],
    "Anong " . $nouns[10] . " mo sabihin sa'kin? (Sabihin sa'kin)",
    "'Di ako nagkulang o nagkamali",
    "Alam mong pinaglaban ko pag-ibig natin?",
    "(Masaya ka na ba?) Masaya ka ba'ng nasasaktan ako, baby?",
    "('Pag kasama mo siya) Kulang na lang ay magpakamatay ako, baby",
    "Iiyak kunwari 'pag ako ang kaharap",
    "Pero pagtalikod mo ay maglalaho na lahat",
    "Mga sinabi mo sa akin, puro lamang ka-shit-an",
    "Sa lahat ng " . $adjectives[4] . ", ako pa ang napag-trip-an (oh, no-no-no)",
    "Babalik sa'yo ang (babalik sa'yo) ang mga ginawa mo sa akin",
    "'Pag nangyari 'yon ay hindi na kita kayang tignan"
];


$juggleTest1 = "10" + 5; 
$juggleTest2 = "Count: ";
$juggleTest2 .= $verseCount + $chorusRepeat; 

echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p class='tag'>Mood: $mood</p>";
echo "<p class='tag'>$juggleTest2</p>";

$i = 1;
while ($i <= $verseCount) {
    echo "<div class='verse'><h3>Verse $i</h3>";
    $lineCount = count($verses[$i]);
    for ($j = 0; $j < $lineCount; $j++) {
        echo "<p>" . $verses[$i][$j] . "</p>";
    }
    echo "</div>";

    if ($i <= $chorusRepeat) {
        echo "<div class='chorus'><h3>Chorus (x$i)</h3>";
        $chorusLineCount = count($chorus);
        for ($k = 0; $k < $chorusLineCount; $k++) {
            echo "<p>" . $chorus[$k] . "</p>";
        }
        echo "</div>";
    }
    $i++;
}

echo "<div class='bridge'><h3>Bridge</h3>";
$bridgeCount = count($bridge);
for ($m = 0; $m < $bridgeCount; $m++) {
    echo "<p>" . $bridge[$m] . "</p>";
}
echo "</div>";
?>

</body>
</html>
