<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">

    <p>Personal Data Sheet<br/>Warning: Any misrepresentation made in the Personal Daata Sheet and the Work Experience Sheet Shall cause the filing of administrative/criminal case/s against the person concerned.<br/>Read the attached guide to filling out the personal data sheet (pds) before accomplishing the pds form.<br/>Print legibly. Tick appropriate boxes and use separate sheet if necessary. Indicate N/A if not applicable. Do not abbreviate</p>
    <label for="cs_ID">1. CS ID No. </label>
    <input type="text" name="cs_ID" id="cs_ID" placeholder="(Do not fill up. For CSC use only)" disabled>
    <br>
    <span>I. Personal information</span>
    <br />
    <label for="user_sname">Surname </label>
    <input type="text" name="user_sname" id="user_sname" readonly/>
    <label for="user_fname">First Name </label>
    <input type="text" name="user_fname" id="user_fname" readonly/>
    <label for="midName">Middle Name </label>
    <input type="text" name="midName" id="midName" readonly/>
    <label for="bday">Date of Birth </label>
    <input type="date" name="bday" id="bday" />
    <label for="plcBirt">Place of Birth </label>
    <input type="text" name="plcBirt" id="plcBirt" />
    <br />
    <span>Sex </span>
    <input type="radio" name="gender" id="mgender" value="male">
    <label for="mgender">Male</label>
    <input type="radio" name="gender" id="fgender" value="female">
    <label for="fgender">Female</label>
    <br>
    <span>Civil Status </span>
    <input type="radio" name="civStat" id="gender" value="single">
    <label for="gender">Single</label>
    <input type="radio" name="civStat" id="gender" value="married">
    <label for="gender">Married</label>
    <input type="radio" name="civStat" id="gender" value="widowed">
    <label for="gender">Widowed</label>
    <input type="radio" name="civStat" id="gender" value="separated">
    <label for="gender">Separated</label>
    <br>
    <label for="weight">Weight(kg) </label>
    <input type="number" name="weight" id="weight" />
    <label for="height">Height(m) </label>
    <input type="number" name="height" id="height" />
    <label for="weight">Weight(kg) </label>
    <input type="number" name="weight" id="weight" />
    <label for="blodType">Blood Type </label>
    <input type="text" name="blodType" id="blodType">
    <br />
    <label for="gsisID">GSIS ID No </label>
    <input type="text" name="gsisID" id="gsisID">
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
    <br>
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
    <br>
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
    <br>
    <label for="tel_No">19. Telephone no. </label>
    <input type="text" name="tel_No" id="tel_No">
    <label for="tel_No">20. Mobile no. </label>
    <input type="text" name="tel_No" id="tel_No">
    <label for="tel_No">21. E-mail address (if any) </label>
    <input type="text" name="tel_No" id="tel_No">

    <button type="submit">Test</button>
    </form>
</body>
</html>