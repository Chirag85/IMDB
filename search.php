<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
      img{
        float:right;
        z-index : -1;
      }
      </style>
</head>
<body>
    
   <div id ="container">
   <div id="img">
</div>
<div id="title">
</div>
<div id="rel">
</div>
<div id="run">
</div>
<div id="gen">
</div>
<div id="dir">
</div>
<div id="act">
</div>
<div id="award">
</div>
<div id="rat">
</div>
<div id="rated">
</div>
<div id="lang">
</div>
<div id="count">
</div>
<div id="box">
</div>
</div>
       
      
    <script>
    async function imdb() {
      const resp = await fetch('http://www.omdbapi.com/?t=<?php echo $_POST["name"];?>&apikey=22ac6374&');
      const data = await resp.json();
      console.log(data);
      poster = data.Poster;
      title = data.Title;
      release_date = data.Released;
      genre = data.Genre;
      director = data.Director;
      actors = data.Actors;
      rating = data.imdbRating;
      box = data.BoxOffice;
      run = data.Runtime;
      language = data.Language;
      awards = data.Awards;
      rated = data.Rated;
      country = data.Country;

      var img = document.createElement("img");
      img.setAttribute("src", poster);
      document.getElementById("img").appendChild(img);
      
      document.getElementById("title").innerHTML = "<h3>Title : "+title+"</h3>";
      document.getElementById("rel").innerHTML = "<h3>Released Date : "+release_date+"</h3>";
      document.getElementById("run").innerHTML = "<h3>Run Time : "+run+"</h3>";
      document.getElementById("gen").innerHTML = "<h3>Genre : "+genre+"</h3>";
      document.getElementById("dir").innerHTML = "<h3>Director : "+director+"</h3>";
      document.getElementById("act").innerHTML = "<h3>Actors : "+actors+"</h3>";
      document.getElementById("award").innerHTML = "<h3>Awards : "+awards+"</h3>";
      document.getElementById("lang").innerHTML = "<h3>Language : "+language+"</h3>";
      document.getElementById("count").innerHTML = "<h3>Country : "+country+"</h3>";
      document.getElementById("rat").innerHTML = "<h3>Rating : "+rating+"</h3>";
      document.getElementById("rated").innerHTML = "<h3>Rated : "+rated+"</h3>";
      document.getElementById("box").innerHTML = "<h3>Box Office : "+box+"</h3>";

     
     
    }
    imdb();
   
   
  </script>
</body>
</html>