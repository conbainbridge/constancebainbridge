<!DOCTYPE html>
<!-- Constance Bainbridge Portfolio -->
<html lang="en">
  <head>
    <title>Constance Bainbridge Portfolio</title>
    <?php include("parts/htmlhead.php"); ?>
  </head>
  <body id="portfolio">

    <p class="floater">
      <?php include("parts/social.php"); ?>
    </p>

    <div class="content">

      <header>
        <?php include("parts/header.php"); ?>
      </header>

      <nav>
        <?php include("parts/navigation.php"); ?>
      </nav>

      <main>
        <h2>Portfolio</h2>
        <div class="button-center">
          <button class="button-tab" id="musicTog">Music</button>
          <button class="button-tab" id="artTog">Art/Graphics</button><br/><br/>
        </div>
        <div id="music_info" class="card">
          <h3>Music</h3>
          <p>For more, including music videos and live footage, visit <a href="https://www.meiohara.com" target="_blank">meiohara.com</a></p>
          <iframe width="100%" height="265" scrolling="no" frameborder="no" src="https://www.reverbnation.com/widget_code/html_widget/artist_238849?widget_id=55&pwc[included_songs]=1&context_type=page_object&spoid=artist_238849&pwc[size]=small" style="width:0px;min-width:100%;max-width:100%;"></iframe>
        </div>
        <div id="art_info" class="card">
          <h3>Art/Graphics</h3>
          <strong>Logo and graphic design</strong>
          <ul class="gallery">
            <li><a href="img/mecapsule-logo1.png" class="swipebox" title="Logo designed in Adobe Illustrator"><img src="img/thumb/logo1.jpg" alt="gallery image 1" /></a></li>
            <li><a href="img/mei-ohara-logo1.png" class="swipebox" title="Logo designed in Adobe Illustrator and Photoshop"><img src="img/thumb/logo2.jpg" alt="gallery image 2" /></a></li>
          </ul>
          <br/>
          <strong>2D art:</strong>
          <ul class="gallery">
            <li><a href="img/art1.jpg" class="swipebox" title="Untitled drawing"><img src="img/thumb/art1.jpg" alt="gallery image 1" /></a></li>
            <li><a href="img/art2.jpg" class="swipebox" title="Self portrait"><img src="img/thumb/art2.jpg" alt="gallery image 2" /></a></li>
            <li><a href="img/art3.jpg" class="swipebox" title="Digital painting done in Adobe Photoshop"><img src="img/thumb/art3.jpg" alt="gallery image 3" /></a></li>
            <li><a href="img/art4.jpg" class="swipebox" title="Untitled drawing"><img src="img/thumb/art4.jpg" alt="gallery image 4" /></a></li>
          </ul>
          <br/>
          <strong>3D modeling and animation:</strong>
          <ul class="gallery">
            <li><a href="img/model1.jpg" class="swipebox" title="3D model made in Blender"><img src="img/thumb/model1.jpg" alt="3d model image 1" /></a></li>
            <li>
              <video width="100%" controls>
                <source src="video/discokitty.mp4" type="video/mp4" />Your browser does not support this media
              </video>
            </li>
          </ul>
        <br/>
      </div>
      <a href="#top">back to top</a>
      </main>

      <footer>
        <div class="left">© 2019 - all rights reserved</div>
        <div class="right"><a href="mailto:con.bainbridge@gmail.com" target="_blank">Contact</a></div>
        <br/>
      </footer>

    </div>
  </body>
</html>
