<?php function DrawNavMain($navMainOn) { ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-navbar shadow">
			<div class="container">
				<a class="navbar-brand" href="/index.php"><img src="/joejos/img/joe-jos.png" alt="Joe-Jo's Fish &amp; Chicken"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCCLLC" aria-controls="navbarCCLLC" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCCLLC">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item<?php if($navMainOn=="Home"){?> active<?php } ?>">
							<a class="nav-link" href="/index.php">Home<?php if($navMainOn=="Home"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Classes"){?> active<?php } ?>">
							<a class="nav-link" href="/training/index.php">Classes<?php if($navMainOn=="Classes"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="For Parents"){?> active<?php } ?>">
							<a class="nav-link" href="/media/index.php">For Parents<?php if($navMainOn=="For Parents"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Enrolling"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">Enrolling<?php if($navMainOn=="Enrolling"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Fundraising"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">Fundraising<?php if($navMainOn=="Fundraising"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Contact"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">Contact<?php if($navMainOn=="Contact"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="About Us"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">About Us<?php if($navMainOn=="About Us"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<?php } ?>