<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Please fill out all required fields";
} elseif ($msg == "created") {
    $msg = "Created Successfully";
} elseif ($msg == "delete") {
    $msg = "Deleted Successfully";
}
?>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Patient</a></li>
            <li class="active"><?php echo $msg; ?></li>
        </ol>
    </div>
</section>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Patients</a>
                    <a href="<?php echo base_url(); ?>ShowForm/patient/main" class="list-group-item">Create Patient</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rounded-0 panel panel-default">
                    <div class="panel-heading rounded-0 main-color-bg">
                        <h3 class="panel-title">Create Patient</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('Insert/patient'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="birth_place">Place of Birth</label>
                                    <input type="text" class="form-control" id="birth_place" name="birth_place">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="birth_date">Date of Birth</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                                </div>
                                <div class="col-sm-6">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">-- Select --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="blood_type">Blood Type</label>
                                    <input type="text" class="form-control" id="blood_type" name="blood_type">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="allergy">Allergy</label>
                                    <textarea class="form-control" id="allergy" name="allergy"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="hereditary_diseases">Hereditary Diseases</label>
                                    <textarea class="form-control" id="hereditary_diseases" name="hereditary_diseases"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="blood_sugar">Blood Sugar</label>
                                    <input type="text" class="form-control" id="blood_sugar" name="blood_sugar">
                                </div>
                                <div class="col-sm-4">
                                    <label for="high_blood_pressure">High Blood Pressure</label>
                                    <input type="text" class="form-control" id="high_blood_pressure" name="high_blood_pressure">
                                </div>
                                <div class="col-sm-4">
                                    <label for="blood_pressure_info">Blood Pressure</label>
                                    <input type="text" class="form-control" id="blood_pressure_info" name="blood_pressure_info">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="rounded-0 panel panel-default">
                    <div class="panel-heading rounded-0">
                        <h3 class="panel-title">Patient List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th style="text-align: center;">#</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Birth</th>
                                <th style="text-align: center;">Gender</th>
                                <th style="text-align: center;">Phone</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 0;
                            foreach ($all_value as $single_value) {
                                $count++;
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->full_name; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->birth_place.', '.$single_value->birth_date; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->gender; ?></td>
                                    <td style="text-align: center;"><?php echo $single_value->phone; ?></td>
                                    <td style="text-align: center;">
                                        <a style="margin: 5px;" class="btn btn-danger" href="<?php echo base_url(); ?>Delete/patient/<?php echo $single_value->id; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
