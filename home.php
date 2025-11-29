<?php
$title = "MenTech Mobile Store";
include 'header.php';

// Variables
$tagline = "Your trusted mobile partner";
$open_time = 9;
$close_time = 21;
$curr_hour = (int)date("G"); 

// Arrays
$brands = ["Samsung", "Apple", "Xiaomi", "OnePlus", "Realme"];
$flagship = [
    "Samsung" => "Galaxy S25 Ultra",
    "Apple"   => "iPhone 16 Pro Max", 
    "Xiaomi"  => "Mi 15 Ultra",
    "OnePlus" => "OnePlus 13 Pro",
    "Realme"  => "GT 7 Pro"
];
$budget_phones = [
    "Samsung" => "Galaxy A16 5G",
    "Apple"   => "iPhone SE 2025",
    "Xiaomi"  => "Redmi Note 14",
    "OnePlus" => "Nord 5",
    "Realme"  => "C85"
];

// Expressions & Operators
$store_open = ($curr_hour >= $open_time && $curr_hour < $close_time);

// if else if else
if ($curr_hour < $open_time) {
    $hrs_msg = "Good morning! We'll open at {$open_time}:00 AM";
} else if ($curr_hour >= $close_time) {
    $hrs_msg = "We're closed for today. See you tomorrow at {$open_time}:00 AM!";
} else {
    $hrs_msg = "We're open now! Closing at {$close_time}:00 PM";
}


$status_txt = $store_open ? "Open Now" : "Closed";

// Switch statement
$day_number = date('N');
switch ($day_number) {
    case 1:
        $day_name = "Monday";
        break;
    case 2:
        $day_name = "Tuesday";
        break;
    case 3:
        $day_name = "Wednesday";
        break;
    case 4:
        $day_name = "Thursday";
        break;
    case 5:
        $day_name = "Friday";
        break;
    default:
        $day_name = "Weekend";
        break;
}

// Match expression
$is_weekend = match($day_number) {
    6, 7 => true,
    default => false
};

$todays_deal = $is_weekend 
    ? "Weekend Special: 10% off all accessories!" 
    : "Weekday Deal: Free tempered glass with every phone";

// While loop 
$counter = 0;
$welcome_message = "";
while ($counter < 3) {
    $welcome_message .= "Welcome! ";
    $counter++;
}
?>


<div class="hero">
    <h1><?= $title ?></h1>
    <p><?= $tagline ?></p>
    <div class="status-bar">
        <span class="badge <?= $store_open ? 'open' : 'closed' ?>"><?= $status_txt ?></span>
        <span><?= $hrs_msg ?></span>
    </div>
    <div class="offer"><?= $todays_deal ?></div>
    <div class="welcome-message"><?= $welcome_message ?></div>
</div>

<section>
    <h2>Brands We Carry</h2>
    <div class="brand-list">
    <?php 
    foreach ($brands as $b) {
        echo "<div class='brand-item'>" . $b . "</div>";
    }
    ?>
    </div>
</section>

<section>
    <h2>Our Top Picks for 2025</h2>
    <p>Looking for the latest flagship or a reliable budget phone? We got you covered.</p>
    
    <table class="phone-table">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Premium Model</th>
                <th>Budget Model</th>
                <th>Price Range</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($brands as $b) {
            $flag = $flagship[$b];
            $budg = $budget_phones[$b];
            
            // if else if else
            if($b == 'Samsung') {
                $price_range = 'P52,000 - P10,000';
            } elseif($b == 'Apple') {
                $price_range = 'P58,000 - P25,000';
            } elseif($b == 'Xiaomi') {
                $price_range = 'P25,000 - P8,000';
            } elseif($b == 'OnePlus') {
                $price_range = 'P26,000 - P12,000';
            } elseif($b == 'Realme') {
                $price_range = 'P28,000 - P5,000';
            } else {
                $price_range = 'Ask for pricing';
            }
            
            echo "<tr>";
            echo "<td><strong>" . $b . "</strong></td>";
            echo "<td>" . $flag . "</td>";
            echo "<td>" . $budg . "</td>";
            echo "<td>" . $price_range . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    
   
</section>

<?php
// stock check
$stock = 7;
$stock_msg = "";
$stock_level = "";

// More if else if else
if ($stock === 0) {
    $stock_msg = "Currently out of stock";
    $stock_level = "empty";
} else if ($stock <= 2) {
    $stock_msg = "Only " . $stock . " left - grab yours now!";
    $stock_level = "critical";
} else if ($stock <= 5) {
    $stock_msg = "Limited stock available (" . $stock . " units)";
    $stock_level = "low";
} else {
    $stock_msg = "In stock and ready to ship";
    $stock_level = "good";
}
?>

<section>
    <h2>Stock Status</h2>
    <div class="stock-box <?= $stock_level ?>">
        <p><?= $stock_msg ?></p>
        
        <?php 
        if ($stock > 0) {
            echo "<div class='stock-dots'>";
            
           
            echo "<span class='dot'></span>";
            echo "<span class='dot'></span>";
            echo "<span class='dot'></span>";
            echo "<span class='dot'></span>";
            echo "<span class='dot'></span>";
            echo "<span class='dot'></span>";
            echo "<span class='dot'></span>";
            
            echo "</div>";
        }
        ?>
        
        <?php 
        if ($stock <= 2 && $stock > 0) {
            echo "<button class='btn-notify'>Notify me when restocked</button>";
        }
        ?>
    </div>
</section>

<section>
    <h2>Why Choose MenTech?</h2>
    <div class="benefits">
        <div class="benefit">
            <h4>Fast Delivery</h4>
            <p>Same-day delivery in metro areas</p>
        </div>
        <div class="benefit">
            <h4>Genuine Products</h4>
            <p>100% authentic with warranty</p>
        </div>
        <div class="benefit">
            <h4>Easy Payment</h4>
            <p>Flexible installment options</p>
        </div>
        <div class="benefit">
            <h4>Expert Support</h4>
            <p>Our team is here to help</p>
        </div>
    </div>
</section>

<?php
$days_til_monday = (8 - date('N')) % 7;

// More if else if else
if($days_til_monday === 0) {
    $restock_txt = "today";
} elseif($days_til_monday === 1) {
    $restock_txt = "tomorrow";
} else {
    $restock_txt = "in " . $days_til_monday . " days";
}
?>

<div class="restock-info">
    <p><strong>New arrivals every Monday!</strong> Next restock: <?= $restock_txt ?></p>
</div>

<?php include 'footer.php'; ?>