<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styles.css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="wrapper">

    <?php include 'html_includes/header_nav.inc'; ?>
  
  	<main role="main">
 		<h1>Upgrade</h1><br />
 		<p>Your level is: Simple profile</p>
		<form method="post" action="main.php">
			<fieldset>
				<legend><span class="formH2">Simple profile</span></legend>
				<ul>
                    <li>A simple profile consisting of a single page of text and a profile picture</li>
                    <li>All information is ‘updated’ to all viewers as it is updated by the author</li>
                    <li>A time and date stamped ‘read receipt’ is sent back to the author which is stored for the
                        author to know what the reader has viewed</li>
                </ul>
			</fieldset><br /><br />


			<fieldset>
				<legend><span class="formH2">In-Depth profile</span></legend>
                <p>Upgrading to the In-Depth profile level adds the following features to the Simple profile:</p>
				<ul>
					<li>Links are included to ‘more about me’ pages that can be read by the viewers</li>
					<li>Contributors e.g., health professionals can fill in the additional page/s with recommendations
						or synopsis field that is then automatically seen on the front page of the in-depth profile</li>
					<li>All information is ‘updated’ to all viewers as it is updated and approved by the author</li>
					<li>A time and date stamped ‘read receipt’ is sent back to the author which is stored for the 
						author to know what the reader has viewed</li>
				</ul>
				<input type="submit" value="Upgrade" id="upgradel2">
			</fieldset><br /><br />




			<fieldset>
				<legend><span class="formH2">Planning profile</span></legend>
                <p>Upgrading to the Planning profile level adds the following features to the In-Depth profile:</p>
				<ul>
					<li>Three planning templates are available to guide planning for the person</li>
					<li>These planning templates are shared with contributors and the owner can then 
						use the information to plan for their needs</li>
					<li>The fields of these templates are based on research of what we know works best and 
						include advice on what to discuss</li>
					<li>The outcomes of the planning are shared via a synopsis on the in-depth profile as well
						 as a link to the planning page. All of this information is approved by the ‘author’</li>
					<li>All information is ‘updated’ to all viewers as it is updated and approved by the author</li>
					<li>A time and date stamped ‘read receipt’ is sent back to the author which is stored for the author
						 to know what the reader has viewed</li>
				</ul>	
				<input type="submit" value="Upgrade" id="upgradel3">
			</fieldset><br />

			
		</form>
		
	</main>
    <?php include 'html_includes/footer.inc'; ?>
</div>
</body>
</html>


