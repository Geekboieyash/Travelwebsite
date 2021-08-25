<?php
$user = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $user = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
    echo "<h2 style='color:#000063; text-align:center;'>Invalid email format</h2>";
  }


    if ( $_COOKIE['username'] == $user && $_COOKIE['password'] == $password) {
      setcookie("success", $user);
      echo "<h2 style='color:#000063; text-align:center;'>Login Successful, Redirecting...</h2>";
      header("Refresh:2; url=home.html");
    } else {
      echo "<h2 style='color:#000063; text-align:center;'>Invalid Username or Password</h2>";
    }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travida-Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <link rel="icon" href="https://res.cloudinary.com/dcpipxb1h/image/upload/c_scale,h_58/v1625395713/Screenshot_2021-07-04_154739-removebg-preview_odxzyn.png" type="image/x-icon" />
  <body>
  <section>
     <img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625397816/proj/bg_icuxtw.jpg" id="bg" />
      <h2 id="text">Travida</h2>
      <img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625397814/proj/man_jdibde.png" id="man" />
      <img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625397814/proj/clouds_1_pgvbcm.png" id="clouds_1" />
      <img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625397814/proj/clouds_2_vfmmwv.png" id="clouds_2" />
      <img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625397814/proj/mountain_left_fkwarn.png" id="mountain_left" />
      <img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625397814/proj/mountain_right_iic9tr.png" id="mountain_right" />
    </section>
    <div class="sec">
      <h2 style="color: #000063; font-size: xx-large; text-align:center;">Sign In</h2>
      <br>
      <div
      class="content"
      style="
        display: flex;
        justify-content: center;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        align-items: center;
      "
    >
      <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <input type="email" name="username" placeholder="E-mail" style="
              border-radius: 30px;
              height: 45px;
              width: 575px;
              border: 1px solid #dcdcdc;
              padding: 10px;
            " required />
        <br>
        <br>
        <input type="password" name="password" placeholder="Password" style="
              border-radius: 30px;
              height: 45px;
              width: 575px;
              border: 1px solid #dcdcdc;
              padding: 10px;
            " required />
        <br>
        <br>
        <input type="submit" value="Login" style="
              border-radius: 30px;
              height: 45px;
              width: 575px;
              border: 1px solid #000063;
              padding: 10px;
              font-size: larger;
              font-weight: bold;
              background-color: #000063;
            color: azure;
            " />
      </form>
      <br>
      <button type="button" onclick="location.href='register.php'" style="
            border-radius: 30px;
            height: 45px;
            width: 575px;
            border: 1px solid rgb(221, 221, 221);
            padding: 10px;
            font-size: larger;
            font-weight: bold;
            background-color:rgb(221, 221, 221);
          ">
        Sign Up
      </button>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>
    <script>
        gsap.to("#bg",{
            scrollTrigger : {
                scrub : 1
            },
            scale : 1.5
        });

        gsap.to("#mountain_left",{
            scrollTrigger : {
                scrub : 1
            },
            x : -500,
        });

        gsap.to("#mountain_right",{
            scrollTrigger : {
                scrub : 1
            },
            x : 500,
        });

        gsap.to("#mountain_right",{
            scrollTrigger : {
                scrub : 1
            },
            x : 500,
        });

        gsap.to("#clouds_1",{
            scrollTrigger : {
                scrub : 1
            },
            x : 200,
        });

        gsap.to("#clouds_2",{
            scrollTrigger : {
                scrub : 1
            },
            x : -200,
        });
        gsap.to("#text",{
            scrollTrigger : {
                scrub : 1
            },
            y : 500,
        });


    </script>
  </body>
</html>
