
<style>
table, th, td {
  border: 1px solid black;
  font-size: 20px;

}
</style>

<?php foreach ($employees as $employees_member): ?>
    <table>
        <tr>
        <th><?php echo 'Full Name: </br>'.$employees_member['fullName']; ?></th>
              <th>  <?php echo 'Phone number: </br>'. $employees_member['phoneNumber']; ?> </th>
              <th><?php echo 'Birthday: </br>'.$employees_member['birthday']; ?></th>
              <th><?php echo 'Hometown: </br>'.$employees_member['hometown']; ?></th>
              <th><?php echo 'Position: </br>'.$employees_member['position']; ?></th>

        </tr>
    </table>
        <p><a href="<?php echo site_url('employees/'.$employees_member['slug']); ?>">View employee</a></p>
        <p><a href="<?php echo site_url('employees/deletedata/'.$employees_member['slug']);?>">Delete</a></p>

<?php endforeach; ?>