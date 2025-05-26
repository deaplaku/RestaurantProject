<?php
// Include config file
require_once "../config.php";

// Check if the reservation_id parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the reservation_id from the URL and sanitize it
    $reservation_id = intval($_GET['id']);

    // Delete the reservation directly
    $deleteReservationSQL = "DELETE FROM Reservations WHERE reservation_id = ?";
    if ($stmt = mysqli_prepare($link, $deleteReservationSQL)) {
        mysqli_stmt_bind_param($stmt, "i", $reservation_id);
        if (mysqli_stmt_execute($stmt)) {
            // Reservation successfully deleted, redirect back to the main page
            header("location: ../panel/reservation-panel.php");
            exit();
        } else {
            // Error occurred during reservation deletion
            echo "Error: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        // Error occurred while preparing statement
        echo "Error: " . mysqli_error($link);
    }

    // Close the connection
    mysqli_close($link);
}
?>
