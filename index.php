<?php

  include('connection.php');



  if(isset($_POST['seach_by_song_name']))
  {
    $song_name = $_POST['seach_by_song_name'];
    $query ="SELECT * FROM `song` where `song_name` ='$song_name'";
    $query_run = mysqli_query($connection, $query);

    $result = mysqli_fetch_assoc($query_run);

    echo "Search By song name :";

    print_r($result);
  }


  if(isset($_POST['search_by_artist_name']))
  {
    $artist_name = $_POST['search_by_artist_name'];
    $query ="SELECT * FROM `song` where `Artist` ='$artist_name'";
    $query_run = mysqli_query($connection, $query);

    $result = mysqli_fetch_assoc($query_run);

    echo "Search By Artist name :";
    
    print_r($result);
  }

  if(isset($_POST['search_by_duration']))
  {
    $query ="SELECT * FROM `song` where `Duration` <= 1000 OR  `Duration` >= 500";
    $query_run = mysqli_query($connection, $query);

    $result = mysqli_fetch_assoc($query_run);

    echo "Search By Duration :";
    
    print_r($result);
  }
?>