<?php
    include_once 'includes/conn.inc.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <nav> 
   <div id='navbar' >
     <a href='index.html' target='_top'>Home</a>
     <a href='Movies.html'>Movies</a>
     <a href='Series.html'>Series</a>
     <a href='Plays.html'>Plays</a>
     <a href='TvShows.html' >Tv Shows</a>
     <a href='Anime.html' >Anime</a>
   </div> 
   <header>
    <h1>
      <img src='Images/lmbd.png' alt='erreur' width='50' height='30'>
       All Movie Database
    </h1>
  </header>
</nav>
       <?php
            // echo "<h1> test </h1> <br>";
            // $result = mysqli_query($conn,"select * from animelist;");
            // $resultCheck = mysqli_num_rows($result);
            // if($resultCheck > 0)
            // {
            //     while($row = mysqli_fetch_assoc($result))
            //     {
            //         echo $row['title']."<br>";
            //     }
            // }
            $info = $_GET['details'];
            $type = substr($info,0,1);
            $show_id = substr($info,1,strlen($info)-1);
            // echo $type."<br>";
            // echo $show_id."<br>";
            if($type == "M")
            {
                $table = "movieslist";
            }
            elseif($type == "S")
            {
                $table = "serieslist";
            }
            else
            {
                $table = "animelist";
            }
            $result = mysqli_query($conn, "select * from $table where id = $show_id;");
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0 && $type == "M")
            {
                $row = mysqli_fetch_row($result);
                echo "<section>
                <table>
                  <tr height= 300px>
                    <td>
                      <img src=$row[8] alt='' class='featured-title'>
                    </td>
                    <td>
                      <p class='p1'><b>Title:</b></p><p class='p2'>$row[1]</p>
                      <p class='p1'><b>Genre:</b></p><p class='p2'>$row[3]</p>
                      <p class='p1'><b>Release Date:</b></p><p class='p2'>$row[4]</p>
                      <p class='p1'><b>Score:</b></p><p class='p2'>$row[2]</p>
                      <p class='p1'><b>Directors:</b></p><p class='p2'>$row[5]</p>
                      <p class='p1'><b>Cast:</b></p><p class='p2'>$row[6]</p>
                    </td>
                  </tr>
                  <tr >
                    <td colspan='2'>
                    <p class='p1'><b>Description:</b></p><p>$row[7]</p><br>
                    </td>
                  </tr>
                  <tr >
                    <td colspan='3'>
                    <center>
                    <iframe src='$row[9]' frameborder='0' width='770px' height='450'></iframe>
                    </center>
                  </td>
                </tr>
                <tr>
                    <td>
                    <center>
                    <form action=$row[10]><button class='watch-button'>watch Now</button></form>
                    </center>
                  </td>
                    <td>
                    <center>
                    <form action=$row[11]><button class='watch-button-fagri'>Watch Now Fagri</button></form>
                    </center>
                    </td>
                  </tr>
                </table>
            </section>";
            }
            else
            {
                $row = mysqli_fetch_row($result);
                echo $row[1]."<br>";
                echo $row[2]."<br>";
                echo $row[3]."<br>";
                echo $row[4]."<br>";
                echo $row[5]."<br>";
                echo $row[6]."<br>";
                echo $row[7]."<br>";
                echo $row[8]."<br>";
                echo $row[9]."<br>";
                echo $row[10]."<br>";
                echo $row[11]."<br>";
                echo $row[12]."<br>";
                echo "<h1>$row[1]</h1><br>";
            }
       ?>
       <script src="app.js"></script>
    </body>
</html>