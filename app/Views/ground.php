<?php include('header.php')?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form id="vendor_type_form" method="post">
                            <div class="card-header">
                                <h4>Add Academy</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Academy Name</label>
                                    <input type="hidden" class="form-control" name="id"
                                           value="<?php if(!empty($single)){ echo $single->id;} ?>">
                                    <input type="text" class="form-control" name="academy_name" value="">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" value="">
                                </div>
                                <div class="form-group">
                                    <label>Weekday Prices</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Morning Peak Hours</label>
                                            <input type="text" class="form-control" name="weekday_morning_price" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Happy Hours</label>
                                            <input type="text" class="form-control" name="weekday_happy_hours_price" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Evening Peak Hours</label>
                                            <input type="text" class="form-control" name="weekday_evening_price" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Weekend Prices</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Morning Peak Hours</label>
                                            <input type="text" class="form-control" name="weekend_morning_price" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Happy Hours</label>
                                            <input type="text" class="form-control" name="weekend_happy_hours_price" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Evening Peak Hours</label>
                                            <input type="text" class="form-control" name="weekend_evening_price" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group court-type-container">
                                    <label>Court Type</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="court_type[]">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger remove-court-type" type="button">Remove</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-secondary" type="button" id="addCourtType">Add Court
                                        Type</button>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="submit"
                                        value="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('footer.php')?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Add Court Type
        $("#addCourtType").click(function(){
            $(".court-type-container:last").after($(".court-type-container:last").clone());
        });

        // Remove Court Type
        $(document).on('click', '.remove-court-type', function(){
            $(this).closest('.court-type-container').remove();
        });
    });
</script>
