<!DOCTYPE html>
<html>
<head>
	<title>Data Tables Client Side</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.js">
	</script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>


<table id="table_id" class="display">
	<thead>
		<tr>
			<th>column 1</th>
			<th>column 2</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>row 1 data 1</td>
			<td>row 1 data 2</td>
		</tr>
		<tr>
			<td>row 2 data 1</td>
			<td>row 2 data 2</td>
		</tr>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	})
</script>
</body>
</html>