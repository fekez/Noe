<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm" style="background-color:#ADEAFF;">
            <h1 >Kapcsolat</h1>
            <br>

            <form name="right" action="php/kapcsolat.php" onsubmit="return ellenoriz();" method="post">


                <label><input type="text" id="nev" name="nev" size="20" maxlength="40">Név (minimum 5
                    karakter): </label>
                <br/>
                <label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail
                    (kötelező): </label>
                <br/>
                <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet
                    (kötelező): </label>
                <br/>

                <input id="kuld" type="submit" value="Küld">
                <button onclick="ellenoriz();" type="button">Ellenőriz</button>

        </div>
        <div class="row">
            <div class="col-sm" style="background-color:#ADEAFF;">
                <h2>Adatok:</h2>
                <br>
                <p>Ügyvezető: <strong>Valaki Az</strong></p>
                <p>E-mail: <strong>valaki.az@minihonlap.hu</strong></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                <a target="_blank" href="https://www.google.hu/maps/place/Pallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar/@46.8960799,19.6669509,17z/data=!3m1!4b1!4m5!3m4!1s0x4743da7a6c479e1d:0xc8292b3f6dc69e7f!8m2!3d46.8960763!4d19.6691396?hl=hu">Nagyobb térkép</a>

            </div>
        </div>
    </div>
</div>

</form>
</body>