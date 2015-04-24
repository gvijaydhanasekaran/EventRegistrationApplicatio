<div style="padding-top:5%;">
	<div class="row">
	    <!--quick info section -->
	    <div class="col-lg-3">
			<div class="panel panel-primary text-center no-boder">
                <div class="panel-body yellow">
                    <h3>Active : <?php echo Student::model()->count("t.status = 'A'"); ?></h3>
                    <h3>In Active : <?php echo Student::model()->count("t.status = 'I'"); ?></h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">Participants
                    </span>
                </div>
            </div>	        
	    </div>
	    <div class="col-lg-3">
			<div class="panel panel-primary text-center no-boder">
                <div class="panel-body blue">
                    <h3>Active : <?php echo Course::model()->count("t.status = 'A'"); ?></h3>
                    <h3>In Active : <?php echo Course::model()->count("t.status = 'I'"); ?></h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">Course
                    </span>
                </div>
            </div>
	    </div>
	    <div class="col-lg-3">
    		<div class="panel panel-primary text-center no-boder">
                <div class="panel-body green">
                    <h3>Active : <?php echo Event::model()->count("t.status = 'A'"); ?></h3>
                    <h3>In Active : <?php echo Event::model()->count("t.status = 'I'"); ?></h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">Event
                    </span>
                </div>
            </div>
	    </div>
	    <div class="col-lg-3">
    		<div class="panel panel-primary text-center no-boder">
                <div class="panel-body green">
                    <h3>Active : <?php echo Institute::model()->count("t.status = 'A'"); ?></h3>
                    <h3>In Active : <?php echo Institute::model()->count("t.status = 'I'"); ?></h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">Institutes
                    </span>
                </div>
            </div>
	    </div>
	    <!--end quick info section -->
	</div>
</div>