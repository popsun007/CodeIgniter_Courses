<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>courses</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<form action="/courses/add" method="post">
	        <table class="add_course">
	        	<tr>
	        		<th colspan="2">Add a new course</th>
	        	</tr>
	        	<tr>
	        		<td>Name:</td>
	        		<td><input type="text" name="course_name"></td>
	        	</tr>
	        	<tr>
	        		<td>Description</td>
	        		<td><textarea name="course_description"></textarea></td>
	        	</tr>
	        	<tr>
	        		<td></td>
	        		<td style="text-align: right"><input type="submit" value="Add"></td>
	        	</tr>
	        </table>
        </form>
        <table class="table table-striped display_course">
 			<thead>
 				<tr>
	 				<th>Course Name </th>
	 				<th>Description</th>
	 				<th>Date Added</th>
	 				<th>Actions</th>
	 			</tr>
	 		</thead>
 			<tbody>
<?php
		if(isset($courses)){
			foreach($courses as $course)
			{
?>
				<tr>
	 				<td><?= $course['name']?></td>
	 				<td><?= $course['description'] ?> </td>
	 				<td><?= $course['created_at'] ?></td>
	 				<td><a href="/courses/destroy/id">remove</a></td>
	 			</tr>
<?php
			}
		}
?> 
 			</tbody>
		</table>
    </body>
</html>