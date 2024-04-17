<?php include('header.php')?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form id="booking_form" method="post">
                            <div class="card-header">
                                <h4>Book Court</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Mobile No</label>
                                    <input type="text" class="form-control" name="mobile_no" id="mobile_no" value="">
                                </div>
                                <div class="form-group">
                                    <label>Academy Name</label>
                                    <input type="text" class="form-control" name="academy_name" id="academy_name"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" id="location" value="">
                                </div>
                                <div class="form-group">
                                    <label>Booking Date</label>
                                    <input type="date" class="form-control" name="booking_date">
                                </div>
                                <div class="form-group">
                                    <label>Booking Time</label>
                                    <input type="time" class="form-control" name="booking_time">
                                </div>
                                <!-- Add more fields as needed -->
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="submit">Book Now</button>
                            </div>
                        </form>
                        <div id="confirmation_message" style="display: none;">
                            <p>Your booking has been confirmed!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
<?php include('footer.php')?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Function to populate location based on academy name
    $("#academy_name").change(function() {
        var academyName = $(this).val();
        // Here, you would retrieve location data from the backend based on the academy name
        // For demonstration purpose, let's assume you have an array of academies and their locations
        var academyLocations = {
            "Academy 1": "Location 1",
            "Academy 2": "Location 2",
            // Add more academies and locations as needed
        };
        // Populate location field based on the selected academy
        $("#location").val(academyLocations[academyName]);
    });

    $("#booking_form").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Basic form validation
        var academyName = $("#academy_name").val();
        var customerName = $("#customer_name").val();
        var mobileNo = $("#mobile_no").val();
        var bookingDate = $("input[name='booking_date']").val();
        var bookingTime = $("input[name='booking_time']").val();

        if (academyName.trim() === "" || customerName.trim() === "" || mobileNo.trim() === "" ||
            bookingDate.trim() === "" || bookingTime.trim() === "") {
            alert("Please fill in all fields.");
            return;
        }

        // Submit the form data using AJAX
        $.ajax({
            type: "POST",
            url: "process_booking.php", // Specify the URL of your backend script
            data: $("#booking_form").serialize(), // Serialize the form data
            success: function(response) {
                // Display confirmation message
                $("#booking_form").hide();
                $("#confirmation_message").show();
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                alert("An error occurred. Please try again later.");
            }
        });
    });
});
</script>