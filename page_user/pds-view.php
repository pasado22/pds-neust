<?php
require 'php/conn.php';
require 'php/func.php';
require 'udry.php';
session_start();

check_id(1, $id, $conn);
$uid = $_SESSION['uid'];

try {
  $sql = "
  SELECT * FROM `user_main_tbl`
  LEFT JOIN `user_psl_tbl`
  ON `user_main_tbl`.user_id = `user_psl_tbl`.user_id
  LEFT JOIN `user_card_tbl`
  ON `user_main_tbl`.user_id = `user_card_tbl`.user_id
  WHERE `user_main_tbl`.user_id=:userid
  ";

  $select = $conn->prepare($sql);
  $select->execute([':userid' => $id]);
  $rows = $select->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo $e->getMessage();
}

foreach ($rows as $row) {
  $user_sname = $row['psl_user_sname'];
  $user_email = $row['main_user_email'];
  $user_gsis = $row['card_user_gsis'];
}

_userheaderIndex("Test");
?>
<p>
  Personal Data Sheet<br />Warning: Any misrepresentation made in the
  Personal Daata Sheet and the Work Experience Sheet Shall cause the filing
  of administrative/criminal case/s against the person concerned.<br />Read
  the attached guide to filling out the personal data sheet (pds) before
  accomplishing the pds form.<br />Print legibly. Tick appropriate boxes and
  use separate sheet if necessary. Indicate N/A if not applicable. Do not
  abbreviate
</p>
<br><br>
<fieldset disabled="disabled">
  <form action="#" method="get">
    <span>I. Personal information</span>
    <br><br>
    <label for="user_sname">Surname </label>
    <input type="text" name="user_sname" id="user_sname" value="<?php echo (isset($user_sname)) ?  $user_sname : '' ?>" />
    <label for="user_fname">First Name </label>
    <input type="text" name="user_fname" id="user_fname" />
    <label for="midName">Middle Name </label>
    <input type="text" name="user_mname" id="midName" />
    <label for="user_bdate">Date of Birth </label>
    <input type="date" name="user_bdate" id="user_bdate" />
    <label for="plcBirt">Place of Birth </label>
    <input type="text" name="user_bplace" id="user_bplace" />
    <br><br>
    <span>Sex</span>
    <input type="radio" name="user_sex" id="mgender" value="male">
    <label for="mgender">Male</label>
    <input type="radio" name="user_sex" id="fgender" value="female">
    <label for="fgender">Female</label>
    <br><br>
    <span>Civil Status </span>
    <input type="radio" name="user_civil" id="scivil" value="single">
    <label for="scivil">Single</label>
    <input type="radio" name="user_civil" id="mcivil" value="married">
    <label for="mcivil">Married</label>
    <input type="radio" name="user_civil" id="wcivil" value="widowed">
    <label for="wcivil">Widowed</label>
    <input type="radio" name="user_civil" id="sepcivil" value="separated">
    <label for="sepcivil">Separated</label>
    <br><br>
    <label for="weight">Weight(kg) </label>
    <input type="number" name="user_weight" id="weight" />
    <label for="height">Height(m) </label>
    <input type="number" name="user_height" id="height" />
    <label for="blodType">Blood Type </label>
    <input type="text" name="blodType" id="blodType">
    <br><br>
    <label for="gsisID">GSIS ID No </label>
    <input type="text" name="gsisID" id="gsisID" value="<?php echo (isset($user_gsis)) ?  $user_gsis : '' ?>">
    <label for="pgibigID">PAG-IBIG ID No </label>
    <input type="text" name="pgibigID" id="pgibigID">
    <label for="philHNo">PHILHEALTH No</label>
    <input type="text" name="philHID" id="philHID">
    <label for="sssNo">SSS No </label>
    <input type="text" name="sssNo" id="sssNo">
    <label for="tinNo">TIN No </label>
    <input type="text" name="tinNo" id="tinNo">
    <label for="agenEmNo">AGENCY EMPLOYEE No</label>
    <input type="text" name="agenEmNo" id="agenEmNo">
    <br><br>
    <span>Citizenship<br>(If holder of dual citizenship, please indicate the details.)</span>
    <input type="radio" name="citizenship" id="c_Filipino" value="filipino">
    <label for="c_Filipino">Filipino</label>
    <input type="radio" name="citizenship" id="c_Dual" value="dual">
    <label for="c_Dual">Dual Citizenship</label>
    <input type="radio" name="citizenship" id="c_Dual" value="dual">
    <label for="c_Dual_birth">by birth</label>
    <input type="radio" name="citizenship" id="c_Dual" value="dual">
    <label for="c_Dual_natural">by naturalization</label>
    <label for="citizenship_other">Pls. indicate country </label>
    <input type="text" name="citizenship_other" id="citizenship_other">
    <br><br>
    <span>Residential Address</br></span>
    <label for="addr_hbl">House/Block/Lot No. </label>
    <input type="text" name="h-b-l" id="h-b-l">
    <label for="addr_strt">Street </label>
    <input type="text" name="addr_strt" id="addr_strt">
    <label for="addr_subd">Subdivision/Village </label>
    <input type="text" name="addr_subd" id="addr_subd">
    <label for="addr_brgy">Barangay </label>
    <input type="text" name="addr_brgy" id="addr_brgy">
    <label for="addr_city">City/Municipality </label>
    <input type="text" name="addr_city" id="addr_city">
    <label for="addr_prov">Province </label>
    <input type="text" name="addr_prov" id="addr_prov">
    <label for="z_code">Zip Code </label>
    <input type="text">
    <br><br>
    <label for="tel_No">19. Telephone no. </label>
    <input type="text" name="tel_No" id="tel_No">
    <label for="tel_No">20. Mobile no. </label>
    <input type="text" name="tel_No" id="tel_No">
    <label for="email">21. E-mail address (if any) </label>
    <input type="text" name="user_email" id="email" value="<?php echo (isset($user_email)) ?  $user_email : '' ?>">
    <button type="submit">Test</button>
  </form>
</fieldset>

<br><br>
<?php _userfooterIndex(2022); ?>