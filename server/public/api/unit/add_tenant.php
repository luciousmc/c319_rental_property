<?php
require_once('../credentials.php');
require_once('../functions.php');
startup();
$input = file_get_contents('php://input');
$_POST = json_decode($input, true);

$unitID = $_POST['unit_id'];
$businessName = $_POST['business_name'];
$contactName = $_POST['contact_name'];
$tenantPhone = $_POST['tenant_phone'];
$tenantEmail = $_POST['tenant_email'];
$moveInDate = $_POST['move_in_date'];
$leaseEndDate = $_POST['lease_end_date'];
$rentDueDate = $_POST['rent_due_date'];

$query = "INSERT INTO `tenants` 
(`unit_id`, `business_name`, `contact_name`, `tenant_phone`, `tenant_email`, `move_in_date`, `lease_end_date`, `rent_due_date`) VALUES 
(1, '$businessName', '$contactName', '$tenantPhone', '$tenantEmail', DATE_FORMAT('2019-04-05', '%Y-%m-%d'), DATE_FORMAT('2019-09-21', '%Y-%m-%d'), DATE_FORMAT('2010-01-05', '%Y-%m-%d'))";
// print($query);
$result = mysqli_query($conn, $query);
if(!$result){
    throw new Exception(mysqli_error($conn));
    exit();
}
print(json_encode(
    [
        'result' => true,
    ]
));

