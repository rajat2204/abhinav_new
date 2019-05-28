	<div id="interview-page">
    <section id="interview-and-talks">
     <!-- pen image wrapper -->
        <div class="pen-image-wrapper">
          <img src="{{asset('assets/img/Union 42.png')}}"  alt="union 42 image not available" >
        </div>  
        <div class="interviews-and-talks-heading">
          Interviews & Talks
        </div>
         
        <?php
$API_key    = 'AIzaSyBxu2hOi94lllbdKW961XjUg4PACbAf8NQ';
$channelID  = 'UCudMT1C6ZbHj5IVJEsIpwug';
$maxResults = 10;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));



  /////print_r($videoList);die();

 ?>
<div class = grid>
 <?php

  foreach($videoList->items as $item){
   //Embed video
 if(isset($item->id->videoId)){
     echo '<div id="'. $item->id->videoId .'" class="agileits_portfolio_grid"">
     <iframe  height="190" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
   <h5>'. $item->snippet->title .'</h5>
   </div>';
 }
 }
 ?>
 </div>
      </section>
    </div>