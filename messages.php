<?php 

	class message {
        public static $user_exists =    '<div class="error_message" field>
                                            <p>Användaren finns redan!</p>
                                            <p>Var god välj ett annat namn</p>   
                                        </div>';

        public static $wrong_info =     '<div class="error_message">
                                            <p>Fel användarnamn eller lösenord</p>
                                        </div>';

        public static $password =       '<div class="error_message">
                                            <p>Lösenordet måste innehålla ett numeriskt värde</p>
                                            <p>Lösenordet måste vara mer än 6 tecken långt</p>
                                        </div>';

        public static $conf_password =  '<div class="error_message">
                                            <p>Lösenorden stämmer ej</p>
                                        </div>';
    }

?>