<?php include("nav.php") ?>
    <div class="container">
        <a href="index.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Created</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Information about your Job Offer</strong>
            </div>
            <div class="card-body">
                <form action="add.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label"><b>Job Title</b></label>
                            <input type="text" class="form-control" id="title" name="barcode" placeholder="Job Title - e.g Western family looking for help" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label"><b>Job Region</b></label>
                            <select name="type" class="form-control" id="type">
                            	<option value="region">Where is your Job Region</option>
                            	<option value="fulltype">Western Province</option>
                            	<option value="parttype">Southern Province</option>
                            	<option value="temporary">Northern Province</option>
                            	<option value="temporary">Central Province</option>
                            	<option value="temporary">Eastern Province</option>
							 </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name" class="col-form-label"><b>Job Type</b></label>
                            <select name="type" class="form-control" id="type">
                            	<option value="type">What is the job type</option>
                            	<option value="fulltype">Full time</option>
                            	<option value="parttype">Part time</option>
                            	<option value="temporary">Temporary</option>
							 </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="name" class="col-form-label"><b>Job Position</b></label>
                            <select name="position" class="form-control" id="type">
                            	<option value="type">What is your Job Position</option>
                            	<option value="fulltype">Domestic</option>
                            	<option value="parttype">Driver</option>
                            	<option value="temporary">Baby Sitter</option>
                            	<option value="temporary">Gardner</option>
                            	<option value="temporary">Option</option>
							 </select>
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                        </div> -->
                        
                       <script type="text/javascript" src="offer.js"></script>
   						
   						<div class="form-group col-md-4">
                        	<label for="name" class="col-form-label"><b>Skills</b></label>
                        	<select class="form-control" multiple>
  								<option value="" disabled selected>What are the main skills needed?</option>
  								<option value="1">USA</option>
  								<option value="2">Germany</option>
								<option value="3">France</option>
  								<option value="4">Poland</option>
  								<option value="5">Japan</option>
							</select>
						</div>
                    </div>

                    <div class="form-group"> 
                    	<label for="contact" class="col-form-label"><b>Contact Details</b></label>
						
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="telephone" class="col-form-label"><b>Telephone Number</b></label>
								<input type="text" class="form-control" id="resident" name="resident" placeholder="Enter your Residential number" required>
							</div>

							<div class="form-group col-md-4">
								<label for="email" class="col-form-label"><b>E-mail</b></label>
								<input type="text" class="form-control" id="email" name="email" placeholder="Enter your E-mail address" required>
							</div>

						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="name" class="col-form-label"><b>Address</b></label>
								<input type="address" class="form-control" id="address" name="email" placeholder="Enter your home address" required>
							</div>

						</div>
                    </div>

                    <div class="form-group">
                    	<div class="form-row">
                    		<div class="form-group col-md-4">
                    			<label for="duration" class="col-form-label"><b>Start Date</b></label>
                    			<input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" required>
                    		</div>
                    		<div class="form-group col-md-4">
                    			<label for="duration" class="col-form-label"><b>End Date</b></label>
                    			<input type="date" class="form-control" id="end_date" name="end_date" placeholder="End Date">
                    		</div>
                    	</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
<?php include("inc/footer.php") ?>