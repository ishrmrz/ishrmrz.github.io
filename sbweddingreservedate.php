<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Calendar</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .reserved {
            background-color: #ffcccc;
        }
    </style>
</head>

<body>

<?php
// Example reserved dates (you should fetch this from your database)
$reservedDates = ['2023-12-10', '2023-12-15', '2023-12-20'];

// Handle form submission
if (isset($_POST['submit'])) {
    $selectedMonth = $_POST['month'];
    $selectedYear = $_POST['year'];
} else {
    // Default to current month and year
    $selectedMonth = date('m');
    $selectedYear = date('Y');
}

echo '<h2>Reservation Calendar - ' . date('F Y', strtotime("$selectedYear-$selectedMonth-01")) . '</h2>';

echo '<form method="post" action="">';
echo '<label for="month">Select Month:</label>';
echo '<select id="month" name="month">';
for ($i = 1; $i <= 12; $i++) {
    $monthName = date('F', mktime(0, 0, 0, $i, 1));
    $selected = ($i == $selectedMonth) ? 'selected' : '';
    echo "<option value=\"$i\" $selected>$monthName</option>";
}
echo '</select>';

echo '<label for="year">Select Year:</label>';
echo '<select id="year" name="year">';
for ($i = date('Y'); $i <= (date('Y') + 10); $i++) {
    $selected = ($i == $selectedYear) ? 'selected' : '';
    echo "<option value=\"$i\" $selected>$i</option>";
}
echo '</select>';

echo '<button type="submit" name="submit">Show Calendar</button>';
echo '</form>';

echo '<table>';
echo '<tr>';
echo '<th>Sun</th>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '</tr>';

// Get the first day of the selected month and the total number of days in the month
$firstDayOfMonth = date('N', strtotime("$selectedYear-$selectedMonth-01"));
$totalDaysInMonth = date('t', strtotime("$selectedYear-$selectedMonth-01"));

// Initialize variables
$dayCount = 1;
$currentDay = 1;

// Create calendar cells
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= 7; $j++) {
        if ($dayCount >= $firstDayOfMonth && $currentDay <= $totalDaysInMonth) {
            $currentDate = "$selectedYear-$selectedMonth-" . str_pad($currentDay, 2, '0', STR_PAD_LEFT);
            $isReserved = in_array($currentDate, $reservedDates);

            echo '<td' . ($isReserved ? ' class="reserved"' : '') . '>';
            echo $currentDay;

            if ($isReserved) {
                echo '<br><span style="color: red;">Reserved</span>';
            }

            echo '</td>';
            $currentDay++;
        } else {
            echo '<td></td>';
        }

        $dayCount++;
    }

    echo '</tr>';
}

echo '</table>';
?>

<!-- Add the JavaScript to set the minimum date -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the date input element
        var dateInput = document.getElementById("date");

        // Calculate the first day of the next month
        var today = new Date();
        var nextMonth = new Date(today);
        nextMonth.setMonth(today.getMonth() + 1);
        var firstDayOfNextMonth = new Date(nextMonth.getFullYear(), nextMonth.getMonth(), 1);

        // Format the date to be set in the input
        var formattedDate = formatDate(firstDayOfNextMonth);

        // Set the minimum attribute of the date input
        dateInput.setAttribute("min", formattedDate);
    });

    function formatDate(date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var day = date.getDate().toString().padStart(2, '0');
        return year + '-' + month + '-' + day;
    }
</script>

</body>

</html>
