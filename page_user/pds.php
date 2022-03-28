<?php
session_start();
require '../php/func.php';

echo $uid = $_SESSION['uid'];
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
    <form id="testform" action="#" method="get" autocomplete="off">
      <label for="cs_ID">1. CS ID No. </label>
      <input
        type="text"
        name="cs_ID"
        id="cs_ID"
        placeholder="(Do not fill up. For CSC use only)"
        disabled
      />
      <br />
      <span>I. Personal information</span>
      <br />
      <label for="user_sname">Surname </label>
      <input type="text" name="user_sname" id="user_sname" readonly />
      <label for="user_fname">First Name </label>
      <input type="text" name="user_fname" id="user_fname" readonly />
      <label for="midName">Middle Name </label>
      <input type="text" name="midName" id="midName" readonly />
      <label for="bday">Date of Birth </label>
      <input type="date" name="bday" id="bday" />
      <label for="plcBirt">Place of Birth </label>
      <input type="text" name="plcBirt" id="plcBirt" />
    </form>

    <button type="submit" form="testform">Submit</button>
  </body>
</html>
