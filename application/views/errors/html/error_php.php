

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>EROR 404</title>
  </head>
  <body>
		<div class="container-fluid py-5 center-block">
		<section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="not_found">
					<img src="https://www.averna.com/wp-content/themes/Divi/includes/builder/images/existing.gif" alt="404 page">
                        <h3>Pusatkoding.com</h3>
						
							<p>Severity: <?php echo $severity; ?></p>
							<p>Message:  <?php echo $message; ?></p>
							<p>Filename: <?php echo $filepath; ?></p>
							<p>Line Number: <?php echo $line; ?></p>

							<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

								<p>Backtrace:</p>
								<?php foreach (debug_backtrace() as $error): ?>

									<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

										<p style="margin-left:10px">
										File: <?php echo $error['file'] ?><br />
										Line: <?php echo $error['line'] ?><br />
										Function: <?php echo $error['function'] ?>
										</p>

									<?php endif ?>

								<?php endforeach ?>

							<?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>