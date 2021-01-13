<?php include '../header.php';?>
<div class="webcontact">
    <div class="textcontact">CONTACTS</div>

    <div class="rectangle5">
        <div class=""><img src="../../assets/images/contactmap.png" alt="" class="contactmap"></div>
        
        <div class="contacttext">
            NOUS TROUVER <br><br>
        <p>KA Restaurant - Métro Ménilmontant <br>
            35 rue Jean Pierre Timbaud <br>
            75011 Paris <br>
            0143313042</p>
        </div>
        <form action="">
            <input type="submit" class="btn boutcontact" value="Nous contacter" id="btncontact">
        </form>
    </div>

    <div class="titrecontact">ÉCRIVEZ NOUS</div>

    <div class="formulairecontact">
        <form action="" method="post">
            <div class="row marge">
                <div class="col-md-6 form-group">
                    <div><label for="nom" class="labelnom">Nom</label></div>
                    <!-- <label for="nom" class="labelnom">Nom</label><br> -->
                    <div><input type="text" name="nom" id="nom" class="form-control inputnom"></div>
                    
                </div>
                <div class="col-md-6 form-group">
                    <div><label for="prenom" class="labelprenom">Prénom</label></div>
                    
                    <div><input type="text" name="prenom" id="prenom" class="form-control inputprenom"></div>
                </div>
            </div>

            <div class="row marge">
                <div class="col-md-12 form-group">
                    <div><label for="email" class="labelemail">Email</label></div>
                    <div><input type="email" name="email" id="email" class="form-control inputemail"></div>
                    
                </div>
            </div>

            <div class="row marge">
                <div class="col-md-12 form-group">
                    <label for="objet" class="labelobjet">Objet</label><br>
                    <input type="text" name="objet" id="objet" class="form-control inputobjet">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message" class="labelmessage">Message</label><br>
                    <!-- <input type="text" name="objet" id="objet" class="form-control inputobjet"> -->
                    <textarea name="message" id="message" class="form-control inputmessage"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    
                    <input type="submit" name="envoyer" id="envoyer" class="form-control btn btn-default inputsubmit" value="Envoyer">
                
                </div>
            </div>

        </form>
    </div>

</div>

<div class="mobilecontact">
    <div class="contactmobiledessus">
        <div class="row">
            <p class="titrecontactmobile">CONTACTS</p>
        </div>

        <div class="row">
            <a href=""><img src="../../assets/images/mapcontactmobile.png" alt="" class="mapCM"></a>
        </div>

        <div class="row localCM">
            
            <p class="localcontact">NOUS TROUVER</p>
            <p class="localmobile">   
                KA Restaurant - Métro Ménilmontant <br>  35 rue Jean Pierre Timbaud <br> 75011 Paris <br> 0143313042
            </p>

        </div>
    </div>

    <div class="formulairecontactmobile">
        <p class="enteteformulaire">ÉCRIVEZ NOUS</p>


        <div class="formmobilecontact">
            <form action="">
            <div class="row margemobile">
                <div class="col-md-12 form-group">
                    <div><label for="nom" class="labelnommobile">Nom</label></div>
                    <div><input type="text" name="nom" id="nom" class="form-control inputnommobile"></div>
                    
                </div>
            </div>
            <div class="row margemobile">
                <div class="col-md-12 form-group">
                    <div><label for="prenom" class="labelprenommobile">Prénom</label></div>
                    
                    <div><input type="text" name="prenom" id="prenom" class="form-control inputprenommobile"></div>
                </div>
            </div>

            <div class="row margemobile">
                <div class="col-md-12 form-group">
                    <div><label for="email" class="labelemailmobile">Email</label></div>
                    <div><input type="email" name="email" id="email" class="form-control inputemailmobile"></div>
                    
                </div>
            </div>

            <div class="row margemobile">
                <div class="col-md-12 form-group">
                    <label for="objet" class="labelobjetmobile">Objet</label><br>
                    <input type="text" name="objet" id="objet" class="form-control inputobjetmobile">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message" class="labelmessagemobile">Message</label><br>
                    <!-- <input type="text" name="objet" id="objet" class="form-control inputobjet"> -->
                    <textarea name="message" id="message" class="form-control inputmessagemobile"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    
                    <input type="submit" name="envoyer" id="envoyer" class="form-control btn btn-default inputsubmitmobile" value="Envoyer">
                
                </div>
            </div>

            </form>
        </div>

    </div>
    
</div>



    <div id="footercgu">
        <?php include '../footer.php';?>
    </div>