<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		body {
			margin:10px auto;
			color: #999;
		}

		.welcome {
			padding: 20px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<h1>My Todo</h1>
		<hr>

		<form method="POST" action="/add_item">
			<label for="title">Add New Todo</label> <br>
			<input type="text" name="title" id="title">
			<button type="submit">Add</button>
		</form>
		
		<div style="margin-top: 20px;">
			<table border="2" cellspacing="2" width="400px">
				<thead>
					<tr>
						<th>Title</th>
						<th>Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($type as $key => $value):
					?>
					<tr>
						<td><?= $value['title'] ?></td>
						<td><?= $value['date'] ?></td>
						<td><a href="/delete/<?= $value['id'] ?>">Delete</a></td>
					</tr>
					<?php
						endforeach;
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
