<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post" action="<?php echo base_url(); ?>search">
  <label> Gender: </label>
  <input type="radio" name="gender" value="2"><label> Female </label>
  <input type="radio" name="gender" value="1"><label> Male </label><br>
  <label> Age: </label>
  <select name="age_from">
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
  </select>
  <label> to </label>
  <select name="age_to">
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
  </select><br>
  <label> Height: </label>
  <select name="height_from">
    <option value="137">137</option>
    <option value="138">138</option>
    <option value="139">139</option>
    <option value="140">140</option>
  </select>
  <label> to </label>
  <select name="height_to">
    <option value="137">137</option>
    <option value="138">138</option>
    <option value="139">139</option>
    <option value="140">140</option>
  </select><br>
  <label> Marital Status: </label>
  <select name="mar_status">
    <option value="1">Single</option>
    <option value="2">Widowed</option>
    <option value="3">Divorced</option>
    <option value="4">Annulled</option>
  </select><br>
 <!--  <label> Mother Tongue: </label>
  <select multiple="">
    <option value="1">Tamil</option>
    <option value="2">Telegu</option>
    <option value="3">Kannada</option>
    <option value="5">Punjabi</option>
  </select><br> -->
  <!-- <label> Education: </label>
  <select multiple="">
    <option value="1">Tamil</option>
    <option value="2">Telegu</option>
    <option value="3">Kannada</option>
    <option value="5">Punjabi</option>
  </select><br> -->
  <!-- <label> Show Profile: </label>
  <input type="radio" name="profile_type" value="Both"><label> Both </label>
  <input type="radio" name="profile_type" value="With Photo"><label> With Photo </label>
  <input type="radio" name="profile_type" value="Without Photo"><label> Without Photo </label><br> -->
  <input type="submit" value="Search Now" />
</form>
</body>
</html>