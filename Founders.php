<?php
	include 'includes/HomePageConnect.php';
	include 'includes/Functs.php';
	include 'includes/Buttons.php';

	$PatrickPic = getImage("Patrick", "Images", $mysqli);
	$HarrisonPic = getImage("Harrison", "Images", $mysqli);

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Founders</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link type="text/css" rel = "stylesheet" href = "zurb/css/normalize.css">
			<link type="text/css" rel = "stylesheet" href = "zurb/css/foundation.css">
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<script src="js/vendor/modernizr.js"></script>

		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="stylesheet" type="text/css" href = "includes/styles.css">
		</head>

<body>

<nav class="nav right">
		<ul><strong>
			<li><a href="index.php">HOME</a></li>
			<li><a href="./Membersonly.php">MEMBERS</a></li>
			<li class = "current"><a href="#">FOUNDERS</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>
			
			<?php
			homePageButton();
			membersButton();
			logoutButton();
			?>

			</strong>
		</ul>
	</nav>


    <img height = "300" width = "700" src="http://www.albany.edu/~nk848638/201/PATRICK/img/polkadotsNFJ.jpg"  alt = "our logo"/>
  <div class="row">
        <div class="large-3 columns">

<img src = "images/<?php
echo "$PatrickPic";
?>"
alt = "Patrick Rahm" />

        </div>
        <div class ="large-9 columns">
        	<p>
        	<strong>Patrick Rahm MS CSCS HFI USAW</strong>
        	<br>
Co-Founder of The National Fitness Junto<br><br>

&emsp; Patrick is a health and fitness professional with over twelve years of experience, but his passion for exercise and sports sciences began much earlier than that. Patrick attributes much of his great success in high school athletics to his early interest and participation in strength and speed training. This success allowed him to play Division IAA football for Marist College. <br>
&emsp; While at Marist, Patrick experienced the true value of a proper strength and conditioning program when he dramatically improved his strength and athleticism over the course of one offseason training cycle. This collegiate strength and conditioning experience was one of Patrick’s major inspirations to pursue exercise as a career.<br>
&emsp; After a successful freshman football season at Marist, Patrick’s desire to pursue exercise as a career was too much to ignore. This led to Patrick transferring to Ithaca College to study exercise science. In 2005, Patrick graduated cum laude from Ithaca with a bachelor’s degree in Clinical Exercise Science. After graduation, Patrick spent time in cardiac rehabilitation facilities administering exercise testing for diseased and general health populations. He went on to receive the ACSM HFS certification to safely prescribe exercises and coach diseased populations.<br>
&emsp; With a strong underlying and unfulfilled interest in strength and conditioning knowledge, Patrick received the CSCS certification and interned under strength coaches Shane Domer and Mark Stephenson at the National Strength and Conditioning Association’s Human Performance Center in Colorado Springs, CO. While in Colorado Springs he also spent time at the US Olympic Training Center observing some of the best US Olympic coaches and athletes. <br>
&emsp; Following this experience, Patrick received his USAW club coach certification and spent a year coaching athletes at the Parisi Speed Scool. Also during this time, he instigated the first strength and conditioning program at this high school alma mater in New York. The following year, he moved to Washington DC to pursue a Masters Degree in Strength and Conditioning from The George Washington (GW) University. <br>
&emsp; While at GW, Patrick was invited by Harrison Bernstein to assist him and the rest of the Speed and Strength Staff of the Washington Redskins in implementing the team’s off-season training program. At the same time, Patrick began assisting Harrison in growing Satori Sports. Since then, their collaborations have made Satori Sports one of the highest quality fitness organizations in the Washington DC metro area. <br>
&emsp; Since graduating cum laude from the Masters in Strength and Conditioning program at GW, Patrick has been a full-time health, fitness, and performance specialist and a part time faculty member for GW’s Department of Exercise Science. As educators and coaches, Harrison and Patrick’s passion to seek out, learn and share great information has been at the heart of their continued efforts to become the best health and fitness experts they can be. This passion coupled with their recognition of the importance of collaboration with other health, fitness, and sport professionals in improving the industry as a whole is what led to the creation of the National Fitness Junto.
 </p>
        </div>
 </div>

 <div class = "row">
	<div class ="large-3 columns">


<img src = "images/<?php
echo "$HarrisonPic";
?>"
alt = "Harrison Bernstein" />

			</div>
			<div class ="large-9 columns">
				<p><strong>Harrison Bernstein CSCS</strong>
				 <br>
Co-Founder of The National Fitness Junto<br><br>

	&emsp;Harrison co-founded the National Fitness Junto in 2014 with esteemed colleague Patrick Rahm. Harrison started his education at Johns Hopkins University and participated in football.  Although he received his BA in Economics, it was his passion for superior athletic achievement that would consume his focus and ultimately become his vocation.  At Hopkins, Harrison was fortunate to have been a disciple under Bill Starr.  Starr, former strength coach of the Baltimore Colts, authored The Strongest Shall Survive and Defying Gravity, which are regarded as the original masterpieces among strength and conditioning professionals.   Through Starr, Harrison learned the best methods to coach Olympic Weight Lifting and Power Lifting.  At the same time, Harrison spent summers developing his speed and athleticism at the Parisi Speed School in Fair Lawn NJ.  Here, he was coached by Bill Parisi (Owner of The Parisi Speed School) and Martin Rooney (Author of Training for Warriors and Ultimate Warrior Workouts). <br>
&emsp; Upon graduating college, Harrison played Arena Football and coached his high school alma mater football team while becoming certified by the National Strength and Conditioning Association as a Strength and Conditioning Specialist. Eventually, Harrison teamed up with Bill Parisi and Martin Rooney to become the Assistant Managing Director of the Parisi Speed School. <br>
&emsp;	In 2004 Harrison partnered with Georgetown Strength and Conditioning Coach Augie Maurelli to create SiSu Systems. Together they built a web-based multi-relational database that managed the strength and conditioning progress of all athletes at Georgetown. Eventually, Randolph Macon College and Johns Hopkins would use the system as well.  While improving the SiSu System, Harrison was simultaneously providing speed and strength instruction, for all sports at Georgetown University, Johns Hopkins University Football and Basketball, Catholic University Lacrosse, Men’s Basketball, Women’s Basketball, Baseball and Softball, and the Washington Redskins.  <br>
&emsp;	Two years later, Harrison declined a permanent position at Georgetown to continue private business and pursue opportunities with select private clientele and the Washington Redskins. Based on the fundamentals learned at Georgetown and SiSu Systems, Satori Sports was created by Harrison to focus on coaching.  <br>
&emsp;	In 2006, Harrison began teaching in the Masters Program of Exercise Science at George Washington University.  Harrison teamed up with Patrick Rahm to spearhead the growth of Satori Sports.  Over the past 9 years, Satori has grown to coach many pro athletes, local high school athletes, and fitness enthusiasts.  As Satori Sports grew, Harrison accepted a full time coaching position with the Washington Redskins in 2007.  Over three years with the Redskins, Harrison has learned some of the best coaching techniques from Joe Gibbs, Joe Bugel, Al Saunders, Gregg Williams, Bill Khayat and so many other great Redskins coaches.  <br>
&emsp; After leaving the Redskins, Harrison returned to Satori Sports and George Washington University while simultaneously coaching high school football.  Harrison has held football positions at Gonzaga College High School and currently coaches at Bishop O’Connell High School as Assistant Head Football Coach, Special Teams Coordinator and Defensive Backs Coach.  From the knowledge and experience gained over the past 15 years, Harrison has become an expert Coach, Businessman, Speaker, Seminar Leader, and Teacher. The National Fitness Junto fuels Harrison’s passion for learning and creates a platform for sports and fitness professionals to openly share their indiscriminate thoughts and expertise on the industry’s most fascinating topics.
	<br><br><br>

 </p>
			</div>

 </div>

</body>
</html>        