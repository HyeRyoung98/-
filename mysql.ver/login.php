<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>여행가자</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
      .mytitle {
        background-color : skyblue;
        color : white;
        text-align : center;
        border-radius : 20px;
        padding-top : 10px;
        padding-bottom : 10px;
        margin : 20px;
      }
      .wrap{text-align : right;}
    </style>
  </head>


  <body>
    <div class = "wrap">
      
      <form method="get" action="input_test.php">
        <fontcolor="gray"> id : <input type="text" name="id"/>
        pw : <input type="password" name="pw"/>
        <button>login</button>
      </form>
      <p></P>
      <form  method="get" action="newtourist0.html">
        &ensp; &ensp;
        <fontsize="2em" color="gray">Are you going to make new account
        <button>Sign up</button>
      </form>
    </div>


    <div class = "mytitle">
      <h2>Where do you want to go?, What do you want to do?</h2>
      <h5>If you are a member, we will provide you with tourist attractions and season and advice that suits your taste.</h5>
      <form method="get" action="attraction.php">
        tema :
        <select name="id">
          <option value="Mount">Mount</option>
          <option value="Museum">Museum</option>
          <option value="Valley">Valley</option>
          <option value="Forest">Forest</option>
        </select>
        &ensp; &ensp;
        state :
        <select name="pw">
          <option value="Seogwipo-si">Seogwipo-si</option>
          <option value="Jeju-si">Jeju-si</option>
        </select>
        <button>submit</button>
      </form>
    </div>

    <div class = "mytitle">
      <h2> When will you go on a trip?</h2>
      <h5>Get Some recommend from us! just free!</h5>
      <h6> Please Write Cappital  ex)Winter,Summer...</h6>

      <form method="get" action="month.php">
        month :
        <select name="month">
          <option value="1">1月</option>
          <option value="2">2月</option>
          <option value="3">3月</option>
          <option value="4">4月</option>
          <option value="5">5月</option>
          <option value="6">6月</option>
          <option value="7">7月</option>
          <option value="8">8月</option>
          <option value="9">9月</option>
          <option value="10">10月</option>
          <option value="11">11月</option>
          <option value="12">12月</option>
        </select>
        <button>submit</button>
      </form>

      <form method="get" action="seasons.php">
        season :
        <select name="season">
          <option value="spring">Spring</option>
          <option value="summer">Summer</option>
          <option value="fall">Fall</option>
          <option value="winter">Winter</option>
        </select>
        <button>submit</button>
      </form>
    </div>



    <div class = "mytitle">
      <h2> Or.. just want's some information about attractions</h2>
      <h5>Get some inform</h5>

      <form method="get" action="check.php">
        name :
        <select name="name">
          <option value="Seongsan Ilchulbong Tuff Cone">Seongsan Ilchulbong Tuff Cone</option>
          <option value="TeddyBearMuseum">TeddyBearMuseum</option>
          <option value="Yongyeon Valley">Yongyeon Valley</option>
          <option value="DoryeonTangerineForest">DoryeonTangerineForest</option>
        </select>
        <button>submit</button>
      </form>
    </div>
  </body>
</html>


