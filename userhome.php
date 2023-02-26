<?php
session_start();
if (isset($_SESSION['useri']))
{
	header ('location:login.php')
}
?>
<html>
  <head>
    <title>Online Newspaper</title>
    <link rel="stylesheet" href="gz.css">
  </head>
  <body>
    <h1>Online Newspaper</h1>
<a href="contactus.php" class="ctc-btn">Contact Us</a>
<a href="aboutus.php" class="abtus-btn">About Us</a>
<a href="signup.php" class="sign-up-btn">Sign Up</a>
<a href="LogIn.php" class="login-btn">Log In</a>
 
<div class="grid-collumn">

	<div class="head">
		<h3>Argentina top group as Poland through on goal difference</h3>
      <p>
        Lionel Messi was the catalyst for the crucial win against Mexico that
        got Argentina's campaign back on track, and he was instrumental again as
        they illustrated why they were regarded as one of the tournament
        favourites to set up a second-round match against Australia. Poland were
        set to progress by virtue of the Fifa Fair Play rule for having fewer
        yellow cards than Mexico - until Saudi Arabia pulled one back deep into
        stoppage time in their 2-1 loss to the Concacaf side. That meant goal
        difference was decisive for the Poles, who will next face France.
      </p>
      <img src="https://images.indianexpress.com/2022/11/Argentina-WC.png"> 
    </div>
    <div class="collumn">
			<h3>Mexico out despite victory over Saudi Arabia</h3>
      <p>
				Mexico defeated Saudi Arabia 2-1 but agonisingly went out of the World
        Cup on goal difference on a night of incredible drama in Doha. With
        Argentina beating Poland 2-0 in Group C at Stadium 974 and Mexico
        leading by the same scoreline at Lusail Stadium in the 94th minute,
        Gerardo Martino's side needed one more goal to prevent them from going
        out according to Fifa's fair play rule.
      </p>

      <h3>Australia stun Denmark to reach World Cup last 16</h3>

      <p>
				Australia reached the knockout stage of the World Cup for the first time
        in 16 years after shocking Denmark. The Danes, needing victory to
        progress, dominated possession but were caught out on the break when
        Australia scored the winner on the hour mark. Denmark lost the ball in
        the Australian box and Mathew Leckie finished a brilliant counter-attack
        with a low shot past Kasper Schmeichel. Australia finish in second place
        in Group D on six points, only behind world champions France on goal
        difference. Denmark, meanwhile, exit Qatar 2022 in disappointing
        fashion, with just one point from three games, sitting bottom of the
        group.
      </p>
      <img src="./aus.jpg">
    </div>
    <div class="collumn2">
			<h3>Tunisia upset France but fail to qualify</h3>

      <p>
        France had a goal ruled out by VAR for offside in the final minute of
        stoppage-time as Tunisia held on to register a shock victory. However,
        despite victory they failed to qualify for the last 16 of the World Cup.
        Substitute Antoine Griezmann volleyed in a dramatic equaliser at the
        Education City Stadium, but the VAR decision meant Tunisia captain Wahbi
        Khazi's brilliant second-half goal proved to be the winner. However,
        with Australia recording a 1-0 victory over Denmark in the other match
        in Group D, Tunisia's hopes of progressing had been dashed before
        Griezmann's goal was ruled out. "It's mixed feelings because we're happy
        to beat a team like France," said Tunisia manager Jalel Kadri. "We can
        be proud and leave with our head high, but it is a bitter victory. "It
        would have been beautiful to beat France and reach the last 16. It is
        our fault for not doing what we needed to do before." France are through
        to the last 16 as group winners having already secured qualification
        with victory over Denmark in the last game.
      </p>
<img src="./tun.jpg">
</div>
<div class="collumn3">
      <h3>
        Emotional clash turns 5-goal thriller as Shaqiri punches Switzerland
        past Serbia to World Cup knockouts
      </h3>
      <p>
        DOHA, Qatar -- Switzerland sealed a round-of-16 matchup against Portugal
        with a 3-2 win against Serbia in an ill-tempered clash at Stadium 974
        that saw 11 players yellow-carded by referee Fernando Rapallini. Goals
        from Xherdan Shaqiri, Breel Embolo and Remo Freuler were enough to seal
        victory for the Swiss, with Aleksandar Mitrovic and Dusan Vlahovic
        netting for Serbia.
      </p>
      <img src="./swiss.jpg">
		</div>
      <div class="collumn5">
				<h3>Portugal advances to knockout stage with 2-0 win over Uruguay</h3>
      <p>
				Portugal have become the third team to qualify for the last 16 of the
        2022 World Cup. Bruno Fernandes scored a double to ensure his country
        joined France and Brazil in sealing progression in Qatar. Cristiano
        Ronaldo thought he scored but the goal was eventually credited to Bruno
        Fernandes in Portugals 2-0 win over Uruguay on Monday, a result that
        secured the team a place in the last 16 of the World Cup. Fernandes
        curled in a cross from the left that barely went over the head of
        Ronaldo and bounced into the far corner of the net in the 54th minute to
        give Portugal a 1-0 lead. Ronaldo wheeled away in celebration, believing
        he had scored his ninth World Cup goal and second of this year’s
        tournament. After repeated close-up replays, it was awarded to
        Fernandes, who added a second goal from the penalty spot in stoppage
        time after a handball by Jose Maria Gimenez.
      </p>
      </div>
<div class="collumn4">
      <h3>Japan so far enjoying historic success in 2022 FIFA World Cup</h3>
      <p>
				The Japan National Football Team has so far enjoyed historic success in
        the 2022 FIFA World Cup. The Samurai Blues beat two former world
        champions, Germany and Spain, to reach the Round of 16 as Group E
        leaders with six points. Japan's first World Cup group stage
        participation was in the 1998 FIFA World Cup in France. That year they
        were out of the tournament without any points in Group H, which was
        dominated by Argentina. The White and Sky Blues dominated the group with
        3 wins out of 3, with 9 points. In Qatar 2022, Japan's first victims
        were 2014 World Cup winner Germany. In the first group stage game of
        Group E, the Samurai Blues shocked the Germans with 2-1 victory. After a
        shocking 0-1 defeat to Costa Rica in the second group stage game, many
        dismissed Japan's chances in the 2022 World Cup. But they proved them
        wrong, by defeating the 2010 world champions, Spain, 2-1 in the last
        game of Group E and advanced to the Round of 16 as group leaders.
      </p>
			<img src="./jpn.jpg">
      </div>
    </div>
	</div>
	<?PHP echo $_SESSION['useri']?>

<a href='logout.php'>Log out</a>
		

  </body>
</html>
