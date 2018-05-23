<?php
//register user
function register_user($register_person){

    array_walk($register_person, 'array_sanitize');
    //encrypt the password
    $register_person['password'] = md5($register_person['password']);

    $username = $register_person['username'];
    $password = $register_person['password'];

    $fields = '`' . implode('`, `', array_keys($register_person) ). '`';

    $data = '\'' . implode('\', \'', $register_person) . '\'';

    mysql_query("INSERT INTO staff ($fields) VALUES($data)");

    $last_id = mysql_insert_id();

    $user_role = "INSERT INTO users(user_id, username, password, role, status) VALUES ('$last_id', '$username', '$password', 'Applicant', 'Active')";

    mysql_query($user_role);
}
function new_employee($employee_details){

    array_walk($employee_details, 'array_sanitize');
    //encrypt the password
    $employee_details['password'] = md5($employee_details['password']);

    $username = $employee_details['username'];
    $password = $employee_details['password'];

    $fields = '`' . implode('`, `', array_keys($employee_details) ). '`';

    $data = '\'' . implode('\', \'', $employee_details) . '\'';

    $add_new_employee = "INSERT INTO staff ($fields) VALUES($data)";

    mysql_query($add_new_employee);

    $last_id = mysql_insert_id();

    if($add_new_employee === true)
    {
        mysql_query("INSERT INTO users(user_id, username, password, role, status) VALUES ('$last_id', '$username','$password', 'Employee', 'Active')");
    }

}
//create a job post
function create_job($job_details){

    array_walk($job_details, 'array_sanitize');

    $job_fields = '`' . implode('`, `', array_keys($job_details) ). '`';

    $job_data = '\'' . implode('\', \'', $job_details) . '\'';

    mysql_query("INSERT INTO jobs ($job_fields) VALUES($job_data)");

}

function resign_request($resign_details){

    array_walk($resign_details, 'array_sanitize');

    $resign_fields = '`' . implode('`, `', array_keys($resign_details) ). '`';

    $resign_data = '\'' . implode('\', \'', $resign_details) . '\'';

    mysql_query("INSERT INTO resign_request ($resign_fields) VALUES($resign_data)");

}

function set_interview($interview_details){

    array_walk($interview_details, 'array_sanitize');

    $department_fields = '`' . implode('`, `', array_keys($interview_details) ). '`';

    $department_data = '\'' . implode('\', \'', $interview_details) . '\'';

    mysql_query("INSERT INTO interview ($department_fields) VALUES($department_data)");

    //echo "INSERT INTO interview ($department_fields) VALUES($department_data)";

}

function create_task($task_details){

    array_walk($task_details, 'array_sanitize');

    $task_fields = '`' . implode('`, `', array_keys($task_details) ). '`';

    $task_data = '\'' . implode('\', \'', $task_details) . '\'';

    mysql_query("INSERT INTO tasks ($task_fields) VALUES($task_data)");

}

function create_department($department_details){

    array_walk($department_details, 'array_sanitize');

    $fullname =$department_details['department_head'];

    $department_fields = '`' . implode('`, `', array_keys($department_details) ). '`';

    $department_data = '\'' . implode('\', \'', $department_details) . '\'';

    mysql_query("INSERT INTO department ($department_fields) VALUES($department_data)");

    $user = mysql_query("SELECT staff_id FROM staff WHERE CONCAT(first_name, ' ', middle_name, ' ', last_name) = '$fullname'") or die(mysql_error());
    $user_role = mysql_fetch_assoc($user);
    //update user_role
    $user_id = $user_role['staff_id'];
    $update_user_role = mysql_query("UPDATE staff s INNER JOIN users u ON (s.staff_id = u.user_id) SET s.role = 'HOD', u.role = 'HOD' WHERE s.staff_id = '$user_id' AND u.user_id = '$user_id'") or die(mysql_error());

}

function new_leave($apply_leave){

    array_walk($apply_leave, 'array_sanitize');

    $leave_fields = '`' . implode('`, `', array_keys($apply_leave) ). '`';

    $leave_data = '\'' . implode('\', \'', $apply_leave) . '\'';

    mysql_query("INSERT INTO leave_request ($leave_fields) VALUES($leave_data)");
}
function account_info($account){

    array_walk($account, 'array_sanitize');

    $leave_fields = '`' . implode('`, `', array_keys($account) ). '`';

    $leave_data = '\'' . implode('\', \'', $account) . '\'';

    mysql_query("INSERT INTO account ($leave_fields) VALUES($leave_data)");
}

function event_info($event){

    array_walk($event, 'array_sanitize');

    $event_fields = '`' . implode('`, `', array_keys($event) ). '`';

    $event_data = '\'' . implode('\', \'', $event) . '\'';

    mysql_query("INSERT INTO events ($event_fields) VALUES($event_data)");


}

function interview_candidate($interview_summary){

    array_walk($interview_summary, 'array_sanitize');

    $interview_fields = '`' . implode('`, `', array_keys($interview_summary) ). '`';

    $interview_data = '\'' . implode('\', \'', $interview_summary) . '\'';

    mysql_query("INSERT INTO interview_summary ($interview_fields) VALUES($interview_data)");


}

//Count number of active users
function user_count(){
    return mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE status = 'active'"), 0);
}
//get staff number
function staff_count(){
    return mysql_result(mysql_query("SELECT COUNT(staff_id) FROM staff WHERE role = 'Employee' OR role = 'HOD' OR role = 'Intern'"), 0);
}
function intern_count(){
    return mysql_result(mysql_query("SELECT COUNT(staff_id) FROM staff WHERE role = 'Intern'"), 0);
}
//get department number
function applications_count(){
    return mysql_result(mysql_query("SELECT COUNT(staff_id) FROM staff WHERE role = 'Applicant'"), 0);
}

function department_count(){
    return mysql_result(mysql_query("SELECT COUNT(department_id) FROM department"), 0);
}
//get staff number
function application_count(){
    return mysql_result(mysql_query("SELECT COUNT(application_id) FROM applications"), 0);
}

function account_count(){
    return mysql_result(mysql_query("SELECT COUNT(account_id) FROM account"), 0);
}

function short_listed(){
    return mysql_result(mysql_query("SELECT COUNT(application_id) FROM applications WHERE application_status = 'Short Listed'"), 0);
}

function app_pending(){
    return mysql_result(mysql_query("SELECT COUNT(application_id) FROM applications WHERE application_status = 'Pending'"), 0);
}

function task_count(){
    return mysql_result(mysql_query("SELECT COUNT(task_id) FROM tasks"), 0);
}

function task_complete(){
    return mysql_result(mysql_query("SELECT COUNT(task_id) FROM tasks WHERE status = 'Completed'"), 0);
}

function task_inprogress(){
    return mysql_result(mysql_query("SELECT COUNT(task_id) FROM tasks WHERE status = 'Pending'"), 0);
}

function task_started(){
    return mysql_result(mysql_query("SELECT COUNT(task_id) FROM tasks WHERE status = 'Started'"), 0);
}
//get staff number
function jobs_count(){
    return mysql_result(mysql_query("SELECT COUNT(job_id) FROM jobs"), 0);
}

function job_pending(){
    return mysql_result(mysql_query("SELECT COUNT(job_id) FROM jobs WHERE status = 'Pending Approval'"), 0);
}

function open_job(){
    return mysql_result(mysql_query("SELECT COUNT(job_id) FROM jobs WHERE status = 'Approved' AND deadline >= CURRENT_DATE"), 0);
}

function approved_job(){
    return mysql_result(mysql_query("SELECT COUNT(job_id) FROM jobs WHERE status = 'Approved'"), 0);
}

function pending_job(){
    return mysql_result(mysql_query("SELECT COUNT(job_id) FROM jobs WHERE status = 'Pending Approval'"), 0);
}

function closed_job(){
    return mysql_result(mysql_query("SELECT COUNT(job_id) FROM jobs WHERE deadline <= CURRENT_DATE"), 0);
}
//Check if a user is logged in
function logged_in(){
    return (isset($_SESSION['user_id'])) ? true : false;
}
//Display logged in user data
function user_data($user_id){
    $data = array();
    $user_id = (int)$user_id;

    $func_num_args = func_num_args();
    $func_get_args = func_get_args();

    if($func_num_args > 1){
        unset($func_get_args[0]);

        $fields = '`' . implode('`, `', $func_get_args) . '`';
        $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users WHERE user_id = $user_id"));

        return $data;
    }
}
//staff details
function email_exists($email){
    $email = sanitize($email);
    return (mysql_result(mysql_query("SELECT COUNT(staff_id) FROM staff WHERE email ='$email'"), 0) == 1) ? true : false;
}

//Check if user is registered
function user_exists($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username'"), 0) == 1) ? true : false;
}
//check if user is active
function user_active($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND status = 'active' "), 0) == 1) ? true : false;
}
//Get user id from username
function user_id_from_username($username){
    $username = sanitize($username);
    return mysql_result(mysql_query("SELECT user_id FROM users WHERE username = '$username'"), 0, 'user_id');
}
//user login credentials. validate login
function login($username, $password){
    $user_id = user_id_from_username($username);
    $username = sanitize($username);
    $password =md5($password);
    //return if the user login combinatioon works
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND password = '$password'"), 0) == 1) ? $user_id : false;
}
//Check if admin
function user_admin($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND role = 'admin' OR role = 'H.R.'"), 0) ==1) ? true : false;
}


function user_applicant($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND role = 'Applicant'"), 0) ==1) ? true : false;
}

function user_employee($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND role = 'Employee'"), 0) ==1) ? true : false;
}

function user_hod($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND role = 'HOD'"), 0) ==1) ? true : false;
}
//check if is staff member
function staff_member($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT(staff_id) FROM staff WHERE CONCAT(first_name,'.',last_name) = '$username';"), 0) == 1) ? true : false;
}
//if is user is in