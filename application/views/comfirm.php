<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Delete a course</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body class="com_body">
        <h2>Are you sure you want to delete the following course?</h2>
        <table class="comfirm_table">
        	<tr>
        		<td>Name:</td>
        		<td>Math</td>
        	</tr>
        	<tr>
        		<td>Description:</td>
        		<td>Descritption about this course...</td>
        	</tr>
        </table>
        <form action="****" method="post">
        	<input type="submit" class="btn btn-default" name="no" value="No">
        	<input type="submit" class="btn btn-danger" name="yes" value="Yes!I want to delete this">
        </form>
    </body>
</html>