<?php
include("../database/dbConnect.php");
$sql = "SELECT * FROM bloodgroup";
$res = mysqli_query($con, $sql);

$displayedGroups = array();

if (mysqli_num_rows($res) == 0) {
    echo '<option value="">No blood groups found</option>';
} else {
    while ($row = mysqli_fetch_assoc($res)) {
       
        $bloodGroupId = $row['blood_grp_id'];
        $groupName = $row['bloodGroup'];
        if (!in_array($groupName, $displayedGroups)) {
            $displayedGroups[] = $groupName;
            
            ?>

<option value="<?php echo $bloodGroupId ?>"><?php echo $groupName ?></option>
<?php
        }
    }
}
?>