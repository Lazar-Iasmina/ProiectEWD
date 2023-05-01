<?php
include('developers.php');
$query = "SELECT id,name,idol,email,message FROM fanmail";
$result = mysqli_query($conn, $query);
?>
    <link rel="stylesheet" href="css1/style.css">

<header style="min-height: 3rem;">

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">ST<span>★</span>RISH</a>

    <nav class="navbar">
        <a href="index.html">main page</a>
        
        <div class="dropdown">
            <button class="dropbtn">Characters 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="otoya.html">Ittoki Otoya</a>
              <a href="natsuki.html">Shinomiya Natsuki</a>
              <a href="masato.html">Hijirikawa Masato</a>
              <a href="tokiya.html">Ichinose Tokiya</a>
              <a href="ren.html">Jinguji Ren</a>
              <a href="syo.html">Kurusu Syo</a>
              <a href="cecil.html">Aijima Cecil</a>
            </div>
          </div> 
          
        <a href="fanmail.php">FanMail</a>
    </nav>
   

    <div class="icons">

        <a href="login.html" class="fas fa-user"></a>
    </div>

</header>
<br><br><br><br><br><br><br>
<section class="home" id="home"style="background-image: url(images1/fanmail-bg.jpg); no-repeat;">

    <div class="content">
        <h3>Fan <span style="color: #E48BF8 ; font-size: 6rem;">Mail</h3>
        <p>Fan mail is mail sent to a public figure, especially a celebrity, by their admirers or "fans". In return for a fan's support and admiration, public figures may send an autographed poster, photo, reply letter or note thanking their fans for their encouragement, gifts, and support.</p>
        <p>Here you can find all the kind messages sent by fans to the idols</p>

    </div>
    
</section>
<section class="products">
  <section class="about">
    <h1><span class="headline">Messages</span></h1>
  </section> 
  <div class="box-container" style="display: flex;">
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) { ?>

 <div class="box" style="display:flex;">
  <table style="border: none;">
   
   <tr style="height: 30px; width: 4rem;">
    <td><?php echo $data['name']; ?></td> 
</tr>
  <tr>
    <td>
        <span style="color: #CB36FF;height:30px;"> <?php echo $data['idol']; ?></span>
    </td>
     </tr>
   <tr style="height: 100px;">
    <td><?php echo $data['message']; ?></td>
     </tr>
 </table>
</div>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
</div>

</section>
<section class="footer">

    <div class="box-container">

        <div class="box" style="align-content: center;">
            <h3>quick links</h3><br><br>
            <center>
            <a href="https://www.utapri-shining-live.com/en/">Official Website</a><br>
            <a href="index.html">Main Page</a><br>
            <a href="fanmail.php">FanMail</a><br>
        </center>
        </div>

       

    </div>


</section>