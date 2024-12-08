<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>

 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
 <?php
 $name = "Ahmad Zamir Bin Ahmad";
 $matNum = "DI220078";
 $course = "Software Engineerings";
 $year = "Third Year";
 $address = "Lot 588-4, Lorong 1, Jalan Sri Cempaka,
  Kg Baru, Sri Gading, 83300, Batu Pahat, Johor.";
 ?>
 <table>
 <tr>
 <td>Name</td>
 <td><?php echo "$name"; ?></td>
 </tr>
 <tr>
 <td>Matric Number</td>
 <td><?php echo "$matNum"; ?></td>
 </tr>
 <tr>
 <td>Course</td>
 <td><?php echo "$course"; ?></td>
 </tr>
 <tr>
 <td>Year of Study</td>
 <td><?php echo "$year"; ?></td>
 </tr>
 <tr>
 <td>Address</td>
 <td><?php echo "$address"; ?></td>
 </tr>
 </table>

</body>
</html>