<!--
	Author: Luke Badini
	Version: November 2015
	
	Project 5: One Degree of Kevin Bacon
	This web page allows users to search for actors' roles in movies with or without Kevin Bacon.
-->

	<!-- form to search for every movie by a given actor -->
	<form action="search-all.php" method="get">
	  <fieldset>
	    <legend>All movies</legend>
	    <div>
	      <input name="firstname" type="text" size="12" placeholder="first name" autofocus="autofocus" /> 
	      <input name="lastname" type="text" size="12" placeholder="last name" /> 
	      <input type="submit" value="go" />
	    </div>
	  </fieldset>
	</form>

	<!-- form to search for movies where a given actor was with Kevin Bacon -->
	<form action="search-kevin.php" method="get">
	  <fieldset>
	    <legend>Movies with Kevin Bacon</legend>
	    <div>
	      <input name="firstname" type="text" size="12" placeholder="first name" /> 
	      <input name="lastname" type="text" size="12" placeholder="last name" /> 
	      <input type="submit" value="go" />
	    </div>
	  </fieldset>
	</form>