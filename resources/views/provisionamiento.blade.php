<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    .register{
        background: -webkit-linear-gradient(left, #1a1c20, #534e52, #1a1c20);
        margin-top: 3%;
        padding: 3%;
    }
    .register-left{
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }
    .register-left input{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }
    .register-left img{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    .register-left p{
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }
    .register .register-form{
        padding: 10%;
        margin-top: 10%;
    }
    .btnRegister{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #db6400;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .register .nav-tabs{
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }
    .register .nav-tabs .nav-link{
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }
    .register .nav-tabs .nav-link:hover{
        border: none;
    }
    .register .nav-tabs .nav-link.active{
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
</style>

<a href="javascript:history.back()" class="btn btn-primary"> Volver Atrás</a>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://beenet.com.sv/images/logoblancobeenet.png" alt="" />
                        <h3 style="color: #db6400;">Provisionamimento Beenet</h3>
                        
                        <!--input type="submit" name="" value="Login"/><br/-->
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h2 class="register-heading" style="color: #db6400;">Datos del usuario</h2>
                                <form method="POST" action="https://apigw.beenet.com.sv/api/customers">
                                <div class="row register-form">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre *" value="" required/>
                                        </div>
                                        

                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="telefono" placeholder="Telefono *" value="" required />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ciudad" placeholder="Localidad/ Ciudad *" value="" required />
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="documentoIdentidad" placeholder="Documento de identidad*" value="" required />
                                        </div> 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="apellido" placeholder="Apellido *" value=""  required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="correo" placeholder="Correo electronico *" value=""  required/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="pais" required>
                                                <option class="hidden"  selected disabled>Seleccione su país</option>
                                                <option value=”AF” >Afganistán</option>
                                                <option value=”AL” >Albania</option>
                                                <option value=”DZ” >Argelia</option>
                                                <option value=”AS” >Samoa Americana</option>
                                                <option value=”AD” >Andorra</option>
                                                <option value=”AO” >Angola</option>
                                                <option value=”AI” >Anguilla</option>
                                                <option value=”AQ” >Antártida</option>
                                                <option value=”AG” >Antigua y Barbuda</option>
                                                <option value=”AR” >Argentina</option>
                                                <option value=”AM” >Armenia</option>
                                                <option value=”AW” >Aruba</option>
                                                <option value=”AU” >Australia</option>
                                                <option value=”AT” >Austria</option>
                                                <option value=”AZ” >Azerbaiyán</option>
                                                <option value=”BS” >Bahamas</option>
                                                <option value=”BH” >Bahrein</option>
                                                <option value=”BD” >Bangladesh</option>
                                                <option value=”BB” >Barbados</option>
                                                <option value=”BY” >Bielorrusia</option>
                                                <option value=”BE” >Bélgica</option>
                                                <option value=”BZ” >Belice</option>
                                                <option value=”BJ” >Benin</option>
                                                <option value=”BM” >Bermudas</option>
                                                <option value=”BT” >Bután</option>
                                                <option value=”BO” >Bolivia</option>
                                                <option value=”BA” >Bosnia y Herzegovina</option>
                                                <option value=”BW” >Botswana</option>
                                                <option value=”BV” >Isla Bouvet</option>
                                                <option value=”BR” >Brasil</option>
                                                <option value=”IO” >Territorios británicos del océano Índico</option>
                                                <option value=”BN” >Brunei</option>
                                                <option value=”BG” >Bulgaria</option>
                                                <option value=”BF” >Burkina Faso</option>
                                                <option value=”BI” >Burundi</option>
                                                <option value=”KH” >Camboya</option>
                                                <option value=”CM” >Camerún</option>
                                                <option value=”CA” >Canadá</option>
                                                <option value=”CV” >Cabo Verde</option>
                                                <option value=”KY” >Islas Caimán</option>
                                                <option value=”CF” >República Centroafricana</option>
                                                <option value=”TD” >Chad</option>
                                                <option value=”CL” >Chile</option>
                                                <option value=”CN” >China</option>
                                                <option value=”CX” >Isla de Christmas</option>
                                                <option value=”CC” >Islas de Cocos o Keeling</option>
                                                <option value=”CO” >Colombia</option>
                                                <option value=”KM” >Comores</option>
                                                <option value=”CG” >Congo</option>
                                                <option value=”CD” >Congo, República Democrática del</option>
                                                <option value=”CK” >Islas Cook</option>
                                                <option value=”CR” >Costa Rica</option>
                                                <option value=”CI” >Costa de Marfíl</option>
                                                <option value=”HR” >Croacia (Hrvatska)</option>
                                                <option value=”CU” >Cuba</option>
                                                <option value=”CY” >Chipre</option>
                                                <option value=”CZ” >República Checa</option>
                                                <option value=”DK” >Dinamarca</option>
                                                <option value=”DJ” >Djibouti</option>
                                                <option value=”DM” >Dominica</option>
                                                <option value=”DO” >República Dominicana</option>
                                                <option value=”TP” >Timor Oriental</option>
                                                <option value=”EC” >Ecuador</option>
                                                <option value=”EG” >Egipto</option>
                                                <option value=”SV” selected >El Salvador</option>
                                                <option value=”GQ” >Guinea Ecuatorial</option>
                                                <option value=”ER” >Eritrea</option>
                                                <option value=”EE” >Estonia</option>
                                                <option value=”ET” >Etiopía</option>
                                                <option value=”FK” >Islas Malvinas</option>
                                                <option value=”FO” >Islas Faroe</option>
                                                <option value=”FJ” >Fiji</option>
                                                <option value=”FI” >Finlandia</option>
                                                <option value=”FR” >Francia</option>
                                                <option value=”GF” >Guayana Francesa</option>
                                                <option value=”PF” >Polinesia Francesa</option>
                                                <option value=”TF” >Territorios franceses del Sur</option>
                                                <option value=”GA” >Gabón</option>
                                                <option value=”GM” >Gambia</option>
                                                <option value=”GE” >Georgia</option>
                                                <option value=”DE” >Alemania</option>
                                                <option value=”GH” >Ghana</option>
                                                <option value=”GI” >Gibraltar</option>
                                                <option value=”GR” >Grecia</option>
                                                <option value=”GL” >Groenlandia</option>
                                                <option value=”GD” >Granada</option>
                                                <option value=”GP” >Guadalupe</option>
                                                <option value=”GU” >Guam</option>
                                                <option value=”GT” >Guatemala</option>
                                                <option value=”GN” >Guinea</option>
                                                <option value=”GW” >Guinea-Bissau</option>
                                                <option value=”GY” >Guayana</option>
                                                <option value=”HT” >Haití</option>
                                                <option value=”HM” >Islas Heard y McDonald</option>
                                                <option value=”HN”  >Honduras</option>
                                                <option value=”HK” >Hong Kong</option>
                                                <option value=”HU” >Hungría</option>
                                                <option value=”IS” >Islandia</option>
                                                <option value=”IN” >India</option>
                                                <option value=”ID” >Indonesia</option>
                                                <option value=”IR” >Irán</option>
                                                <option value=”IQ” >Irak</option>
                                                <option value=”IE” >Irlanda</option>
                                                <option value=”IL” >Israel</option>
                                                <option value=”IT” >Italia</option>
                                                <option value=”JM” >Jamaica</option>
                                                <option value=”JP” >Japón</option>
                                                <option value=”JO” >Jordania</option>
                                                <option value=”KZ” >Kazajistán</option>
                                                <option value=”KE” >Kenia</option>
                                                <option value=”KI” >Kiribati</option>
                                                <option value=”KR” >Corea</option>
                                                <option value=”KP” >Corea del Norte</option>
                                                <option value=”KW” >Kuwait</option>
                                                <option value=”KG” >Kirguizistán</option>
                                                <option value=”LA” >Laos</option>
                                                <option value=”LV” >Letonia</option>
                                                <option value=”LB” >Líbano</option>
                                                <option value=”LS” >Lesotho</option>
                                                <option value=”LR” >Liberia</option>
                                                <option value=”LY” >Libia</option>
                                                <option value=”LI” >Liechtenstein</option>
                                                <option value=”LT” >Lituania</option>
                                                <option value=”LU” >Luxemburgo</option>
                                                <option value=”MO” >Macao</option>
                                                <option value=”MG” >Madagascar</option>
                                                <option value=”MW” >Malawi</option>
                                                <option value=”MY” >Malasia</option>
                                                <option value=”MV” >Maldivas</option>
                                                <option value=”ML” >Malí</option>
                                                <option value=”MT” >Malta</option>
                                                <option value=”MH” >Islas Marshall</option>
                                                <option value=”MQ” >Martinica</option>
                                                <option value=”MR” >Mauritania</option>
                                                <option value=”MU” >Mauricio</option>
                                                <option value=”YT” >Mayotte</option>
                                                <option value=”MX” >México</option>
                                                <option value=”FM” >Micronesia</option>
                                                <option value=”MD” >Moldavia</option>
                                                <option value=”MC” >Mónaco</option>
                                                <option value=”MN” >Mongolia</option>
                                                <option value=”MS” >Montserrat</option>
                                                <option value=”MA” >Marruecos</option>
                                                <option value=”MZ” >Mozambique</option>
                                                <option value=”MM” >Birmania</option>
                                                <option value=”NA” >Namibia</option>
                                                <option value=”NR” >Nauru</option>
                                                <option value=”NP” >Nepal</option>
                                                <option value=”AN” >Antillas Holandesas</option>
                                                <option value=”NL” >Países Bajos</option>
                                                <option value=”NC” >Nueva Caledonia</option>
                                                <option value=”NZ” >Nueva Zelanda</option>
                                                <option value=”NI” >Nicaragua</option>
                                                <option value=”NE” >Níger</option>
                                                <option value=”NG” >Nigeria</option>
                                                <option value=”NU” >Niue</option>
                                                <option value=”NF” >Norfolk</option>
                                                <option value=”MP” >Islas Marianas del Norte</option>
                                                <option value=”NO” >Noruega</option>
                                                <option value=”OM” >Omán</option>
                                                <option value=”PK” >Paquistán</option>
                                                <option value=”PW” >Islas Palau</option>
                                                <option value=”PA” >Panamá</option>
                                                <option value=”PG” >Papúa Nueva Guinea</option>
                                                <option value=”PY” >Paraguay</option>
                                                <option value=”PE” >Perú</option>
                                                <option value=”PH” >Filipinas</option>
                                                <option value=”PN” >Pitcairn</option>
                                                <option value=”PL” >Polonia</option>
                                                <option value=”PT” >Portugal</option>
                                                <option value=”PR” >Puerto Rico</option>
                                                <option value=”QA” >Qatar</option>
                                                <option value=”RE” >Reunión</option>
                                                <option value=”RO” >Rumania</option>
                                                <option value=”RU” >Rusia</option>
                                                <option value=”RW” >Ruanda</option>
                                                <option value=”SH” >Santa Helena</option>
                                                <option value=”KN” >Saint Kitts y Nevis</option>
                                                <option value=”LC” >Santa Lucía</option>
                                                <option value=”PM” >St. Pierre y Miquelon</option>
                                                <option value=”VC” >San Vicente y Granadinas</option>
                                                <option value=”WS” >Samoa</option>
                                                <option value=”SM” >San Marino</option>
                                                <option value=”ST” >Santo Tomé y Príncipe</option>
                                                <option value=”SA” >Arabia Saudí</option>
                                                <option value=”SN” >Senegal</option>
                                                <option value=”SC” >Seychelles</option>
                                                <option value=”SL” >Sierra Leona</option>
                                                <option value=”SG” >Singapur</option>
                                                <option value=”SK” >República Eslovaca</option>
                                                <option value=”SI” >Eslovenia</option>
                                                <option value=”SB” >Islas Salomón</option>
                                                <option value=”SO” >Somalia</option>
                                                <option value=”ZA” >República de Sudáfrica</option>
                                                <option value=”ES” >España</option>
                                                <option value=”LK” >Sri Lanka</option>
                                                <option value=”SD” >Sudán</option>
                                                <option value=”SR” >Surinam</option>
                                                <option value=”SJ” >Islas Svalbard y Jan Mayen</option>
                                                <option value=”SZ” >Suazilandia</option>
                                                <option value=”SE” >Suecia</option>
                                                <option value=”CH” >Suiza</option>
                                                <option value=”SY” >Siria</option>
                                                <option value=”TW” >Taiwán</option>
                                                <option value=”TJ” >Tayikistán</option>
                                                <option value=”TZ” >Tanzania</option>
                                                <option value=”TH” >Tailandia</option>
                                                <option value=”TG” >Togo</option>
                                                <option value=”TK” >Islas Tokelau</option>
                                                <option value=”TO” >Tonga</option>
                                                <option value=”TT” >Trinidad y Tobago</option>
                                                <option value=”TN” >Túnez</option>
                                                <option value=”TR” >Turquía</option>
                                                <option value=”TM” >Turkmenistán</option>
                                                <option value=”TC” >Islas Turks y Caicos</option>
                                                <option value=”TV” >Tuvalu</option>
                                                <option value=”UG” >Uganda</option>
                                                <option value=”UA” >Ucrania</option>
                                                <option value=”AE” >Emiratos Árabes Unidos</option>
                                                <option value=”UK” >Reino Unido</option>
                                                <option value=”US” >Estados Unidos</option>
                                                <option value=”UM” >Islas menores de Estados Unidos</option>
                                                <option value=”UY” >Uruguay</option>
                                                <option value=”UZ” >Uzbekistán</option>
                                                <option value=”VU” >Vanuatu</option>
                                                <option value=”VA” >Ciudad del Vaticano (Santa Sede)</option>
                                                <option value=”VE” >Venezuela</option>
                                                <option value=”VN” >Vietnam</option>
                                                <option value=”VG” >Islas Vírgenes (Reino Unido)</option>
                                                <option value=”VI” >Islas Vírgenes (EE.UU.)</option>
                                                <option value=”WF” >Islas Wallis y Futuna</option>
                                                <option value=”YE” >Yemen</option>
                                                <option value=”YU” >Yugoslavia</option>
                                                <option value=”ZM” >Zambia</option>
                                                <option value=”ZW” >Zimbabue</option>
                                          
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <br><div class="col-md-6">
                                        <h4 class="register-heading" style="color: #db6400">Información de servicio</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                            <select class="form-control" name="paquete" required>
                                                <option class="hidden"  selected disabled>Seleccione tipo de paquete</option>
                                                <option value="basico">7 dias gratis</option>
                                                <option value="beenetplay">Beenetplay</option>
                                                <option value="plus">Plus</option>
                                            </select>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Registrarse"/>
                                    </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>