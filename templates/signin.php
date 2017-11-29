<!doctype html>
<html lang="en">
	<head>
        <?php include '../sitewide1/globals-top.php'; ?>
		<title>Signin Template for Bootstrap</title>

	</head>
	<body class="sidebar-collapse">
		<div class="se-pre-con"></div>
        <?php include '../sitewide1/header.php'; ?>
		<main role="main" class="container">

				<form class="form-signin">
					<h2 class="form-signin-heading">Please sign in</h2>
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required
					       autofocus>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				</form>

		</main>
        <?php include '../sitewide1/footer.php'; ?>
        <?php include '../sitewide1/globals-bottom.php'; ?>
	</body>
</html>
