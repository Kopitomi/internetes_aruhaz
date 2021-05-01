<?php

 ];
 if (isset($_POST["reg"])) {
 $Email = $_POST["Email"]; // be�rt adatok lek�r�se
 $password = $_POST["pwd"];
 $name=$_POST["name"];
 $phonenumber=$_POST["phonenumber"];
 
 else
 
 foreach () {
 if (["Email"] === $Email) // m�r foglalt felhaszn�l�n�v
 die("<b>HIBA:</b> A felhaszn�l�n�v m�r foglalt!");
 }
 if (strlen($password) < 5) // 5 karaktern�l r�videbb jelsz�
 die("<b>HIBA:</b> A jelsz� t�l r�vid!");

 


 // sikeres regisztr�ci�
 [] = ["username" => $username, "password" => $password];
 echo "Sikeres regisztr�ci�! <br/>";
 }
 
    <form class="c-form two-column-layout right" method="post">


        <h3>Regisztr�ci�</h3>



        <fieldset>
            <label for="reg_email">E-mail c�m</label>
            <input type="email" name="email" id="reg_email" value="" required="required"> <br>
            <label for="reg_password">Jelsz�</label>
            <input type="password" name="password" id="password" required="required"><br>
            <label for="name">N�v</label>
            <input type="text" name="name" id="name" value="" required="required"> <br>
            <label for="number">Telefonsz�m</label>
            <input type="text" name="telephone" id="number" value="" required="required"> <br>


            <div><p>A szem�lyes adatokat a weboldalon t�rt�n� v�s�rl�si �lm�ny fenntart�s�hoz, a fi�khoz val� hozz�f�r�s kezel�s�hez �s m�s c�lokra haszn�ljuk, melyeket a <a href="" class="woocommerce-privacy-policy-link" target="_blank">adatkezel�si t�j�koztat�</a> tartalmaz.</p>
            </div>
            <p class="form-row validate-required">
                <label for="gdpr_accept">
                    <input type="checkbox" name="gdpr_accept" id="gdpr_accept" class="checkbox" required="required">
                    Elolvastam �s elfogadom az <a href="">adatkezel�si szab�lyzatot.</a>		<span class="required">*</span>
                </label>
            </p>
            <input type="Submit" name="signup" value="Regisztr�ci�">
        </fieldset>
    </form>




<?php
    $accounts = loadUser("");
    $name="";
    $email="";
    $pass="";
    $tel="";

    $errors=[];

    if (isset($_POST["signup"])){


        $name=$_POST["name"];
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $tel=$_POST["telephone"];

        // A felhasz�l�n� m�r foglalt

        foreach ($accounts as $account){
            if ($account["email"]===$email){
                $errors[]="Az email c�m m�r foglalt!";
            }

        }
        // A jelsz� legal�bb 5 karakter
        if (strlen($pass)<5){
            $errors[]="A jelsz� t�l r�vid!";

        }
        // Jelsz�nak tartalmaznia kell bet�t �s sz�mot is


        if (count($errors)===0){
            echo "Sikeres regiszt�ci�! <br>";

            $data =[
                    "name"=>$name,
                    "email"=>$email,
                    "password"=>$pass,
                    "telephone number"=>$tel
                    ];

            saveUser("adatok.txt",$data);


        }
        else{

            foreach ($errors as $error){
                echo $error . "<br>";


            }

        }





    }

?>