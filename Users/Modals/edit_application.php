<?php

include '../../Includes/Core/Database/connection.php';

$app_id = $_GET['edit_id'];

if(isset($app_id))
{
    $sql_query = mysql_query("SELECT * FROM applications WHERE application_id = '" . $app_id . "'") or die(mysql_error());

if(mysql_num_rows($sql_query) != 0){

if(isset($_POST['btn-edit']))
{
    //Get the input data
    $app_number = $_POST[''];
    $app_title = $_POST[''];
    $applicant = $_POST[''];
    $app_contact = $_POST[''];
    $app_date = $_POST[''];
    $app_status = $_POST[''];
    $hiring_manager = $user_date['username'];
}
?>
<div id="review_application<?php echo $row['application_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['application_id']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="myModalLabel">Candidate : <?php echo $row['application_id']; ?> </h4>
            </div>

            <div class="modal-body">
                <div class="tab-pane" id="employement">
                    <form id="edit-profile2" class="form-horizontal col-md-8">
                        <fieldset>


                            <div class="form-group">
                                <label class="col-md-4" for="accounttype">Employement Type</label>
                                <div class="col-md-8">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
                                            Employeed
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="accounttype" value="option2">
                                            Self Employed
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <hr>
                            <p class="help-block"> If Self employed fill below</p>

                            <h4>Self Employeed Info </h4>

                            <hr />

                            <div class="form-group">
                                <label class="col-md-4" for="industry">Industry</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="industry" name="industry">
                                        <option value="Academic">Academic</option>
                                        <option value="Media">Media</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Colsultation">Colsultation</option>
                                        <option value="IT">IT</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Government">Governance</option>
                                        <option value="Medical">Medical</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Company Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="duration" value="" name="company_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Position</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="duration" value="" name="sposition">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Duration</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="accountpassword" value="" name="sduration" placeholder="eg 3 months, 2 years">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="accountpassword" value="" name="sduration" placeholder="eg 25710 - 01000 Nairobi, Kenya">
                                </div>
                            </div>

                            <hr>
                            <p class="help-block"> If Previously employed fill below</p>

                            <h4>Employement Info 1 </h4>

                            <hr />

                            <div class="form-group">
                                <label class="col-md-4" for="industry">Industry</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="industry" name="industry">
                                        <option value="Academic">Academic</option>
                                        <option value="Media">Media</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Colsultation">Colsultation</option>
                                        <option value="IT">IT</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Government">Governance</option>
                                        <option value="Medical">Medical</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="emailserver">Employer Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="emailserver" value="" name="employer1" placeholder="Employer Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Position</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="duration" value="" name="position1" placeholder="Position">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Duration</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="accountpassword" value="" name="duration1" placeholder="eg 3 months, 2 years">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="address1" value="" name="address1" placeholder="eg 25710 - 01000 Nairobi, Kenya">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Referee Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="accountpassword" value="" name="referee1" placeholder="Referee Full name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Referee Contact</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="accountpassword" value="" name="rContact1" placeholder="eg 0705000000">
                                </div>
                            </div>

                            <h4>Employement Info 2 </h4>

                            <hr />

                            <div class="form-group">
                                <label class="col-md-4" for="industry">Industry</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="industry" name="industry">
                                        <option value="Academic">Academic</option>
                                        <option value="Media">Media</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Colsultation">Colsultation</option>
                                        <option value="IT">IT</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Government">Governance</option>
                                        <option value="Medical">Medical</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="emailserver">Employer Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="emailserver" value="" name="employer1" placeholder="Employer Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Position</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="position" value="" name="position1" placeholder="Position">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Duration</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="duration" value="" name="duration1" placeholder="eg 3 months, 2 years">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="accountpassword" value="" name="address2" placeholder="eg 25710 - 01000 Nairobi, Kenya">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Referee Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="referee2" value="" name="referee2" placeholder=" Referee Full name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4" for="duration">Referee Contact</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="rContact2" value="" name="rContact2" placeholder="eg 0705000000">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8">
                                    <button type="submit" class="btn btn-primary">Save Progress</button> <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>

<?php }} ?>