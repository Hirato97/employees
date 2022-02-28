
<?php echo validation_errors(); ?>

<form method="POST" action="/codeigniter_2/index.php/employees/submit"> 
    <label for="fullName">Fullname</label>
    <input type="text" name="fullName" /><br />

    <label for="hometown">Hometown</label>
    <input type="text" name="hometown" /><br />

    <label for="birthday">Birthday</label>
    <input type="date" name="birthday" /><br />

    <label for="phoneNumber">Phone number</label>
    <input type="text" name="phoneNumber" /><br />

    <label for="position">Position</label>
    <input type="text" name="position" /><br />

    <label for="department">Department</label>
    <input type="text" name="department" /><br />

    <label for="identificationNum">Identification Number</label>
    <input type="text" name="identificationNum"/><br />

    <label for="issueDate">Issue date</label>
    <input type="date" name="issueDate" /><br />

    <label for="issuePlace">Issue Place</label>
    <input type="text" name="issuePlace" /><br />

    <input type="submit" name="submit" value="Submit" />

</form>