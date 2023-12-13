<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMDb</title>
    <link rel="icon" type="image/x-icon" href="../web Project/Images/lmbd.ico">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div>
<nav> 
   <div id="navbar" >
     <a href="index.html" target="_top">Home</a>
     <a href="Movies.html">Movies</a>
     <a href="Series.html">Series</a>
     <a href="Plays.html">Plays</a>
     <a href="TvShows.html" >Tv Shows</a>
     <a href="Anime.html" >Anime</a>
   </div> 
   <header>
    <h1>
      <img src="..\web Project\Images/lmbd.png" alt="erreur" width="50" height="30">
       All Movie Database
    </h1>
  </header>
</nav>
<section>
    <table>
      <tr>
        <td>
          <img src="$row[8]" alt="" class="featured-title">
        </td>
        <td>
          <h2><b>Title:</b></h2><h3>$row[1]</h3><br>
          <h2><b>Genre:</b></h2><h3>$row[3]</h3><br>
          <h2><b>Release Date:</b></h2><h3>$row[4]</h3><br>
          <h2><b>Score:</b></h2><h3>$row[2]</h3><br>
          <h2><b>Directors:</b></h2><h3>$row[5]</h3><br>
          <h2><b>Cast:</b></h2><h3>$row[6]</h3><br>
        </td>
      </tr>
      <tr >
        <td colspan="2">
        <h2><b>Description:</b></h2><h3>$row[7]</h3><br>
        </td>
      </tr>
      <tr>
        <td>
        <a href="$row[10]"><button class="watch-button">watch Now</button></a>
      </td>
        <td>
          <a href="$row[11]"><button class="watch-button-fagri">Watch Now Fagri</button></a>
        </td>
      </tr>
      <tr >
        <td colspan="3">
        <iframe src="$row[9]" frameborder="0" width="770px" height="450"></iframe>
      </td>
    </tr>
    </table>
</section>
</div>
</body>