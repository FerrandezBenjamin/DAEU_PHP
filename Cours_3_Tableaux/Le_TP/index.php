<?php

/**
 * 
 * TP 1 : Gestion d'un club sportif (tableau indexé)
 * OBJET : Travailler avec un tableau indexé pour gérer les membres
 * d’un club sportif, avec des fonctionnalités simples comme l'ajout, la suppression et l'affichage des membres.
 * 
 * ATTENDU :
 * a) Une fonction qui permet d'ajouter un membre (votre prénom) dans un tableau
 * b) Une fonction qui permet de supprimer un membre (vous) du tableau par son nom
 * c) Une fonction qui permet de chercher un membre du tableau par son nom
 * 
 * Vous pouvez vous aidez des fonctionnalitées suivantes :
 * 
 * UNSET():
 * https://www.php.net/manual/fr/function.unset.php
 * 
 * array_search()
 * https://www.php.net/manual/fr/function.array-search.php
 * 
 * in_array()
 * https://www.php.net/manual/fr/function.in-array.php
 * 
 * Attention, je veux également une gestion des erreurs sur les conditions, en créant donc des else !
 * 
 * 
 */


    /***********************/
    /** AJOUTER UN MEMBRE **/
    /***********************/





    /************************/
    /** SUPPRIMER UN MEMBRE **/
    /************************/





    /************************/
    /** CHERCHER UN MEMBRE **/
    /************************/




 
/**
 * ***********************
 * FIN TP 1
 * ***********************
 */




 /**
 * 
 * TP 2 : Gestion des étudiants (tableau associatif)
 * 
 * OBJET : Travailler avec un tableau associatif pour gérer une liste d’étudiants
 * et leurs moyennes. Chaque étudiant est identifié par son prénom et sa moyenne.
 * 
 * ATTENDU :
 * a) Une fonction qui permet d'ajouter un étudiant avec sa moyenne dans un tableau associatif.
 * 
 * b) Une fonction qui permet de supprimer un étudiant du tableau par son prénom.
 * 
 * c) Une fonction qui permet de rechercher un étudiant par son prénom et d’afficher sa moyenne.
 * 
 * d) Une fonction qui affiche tous les étudiants et leurs moyennes sous la forme :
 *    "Paul a une moyenne de 15.5."
 * 
 * Vous pouvez vous aider des fonctionnalités suivantes :
 * 
 * UNSET():
 * https://www.php.net/manual/fr/function.unset.php
 * 
 * array_key_exists():
 * https://www.php.net/manual/fr/function.array-key-exists.php
 * 
 * foreach():
 * https://www.php.net/manual/fr/control-structures.foreach.php
 * 
 * ATTENTION :
 * - Gérez les erreurs avec des conditions (else) pour éviter les actions impossibles.
 * - Par exemple, ne pas supprimer ou rechercher un étudiant qui n'existe pas.
 * - Afficher un message clair dans chaque cas.
 * 
 */



    /****************************************/
    /** AJOUTER UN MEMBRE AVEC SA MOYENNE ***/
    /****************************************/




    /******************************************/
    /** SUPPRIMER UN MEMBRE AVEC SA MOYENNE ***/
    /******************************************/



    
    /*************************************************************/
    /** AFFICHAGE DE TOUT LES ETUDIANTS AINSI QUE LEUR MOYENNE ***/
    /*************************************************************/






    /**
     * 
     * TP3
     */

     // Le tableau
     $tabMulti = [
        [
            'nom' => 'dupres',
            'notes' => [
                'Maths' => 12,
                'Francais' => 18,
                'Histoire' => 4
            ],
        ],
        [
            'nom' => 'moutey',
            'notes' => [
                'Maths' => 2,
                'Francais' => 14,
                'Histoire' => 9
            ],
        ],
        [
            'nom' => 'keron',
            'notes' => [
                'Maths' => 16,
                'Francais' => 8,
                'Histoire' => 4
            ],
        ]
    ];

    //Affichage du tableau ci dessus
    var_dump($tabMulti);
    
    //Function création
    function addNewEleve(&$tabMulti, $name, $notes)
    {
        // A vous de completer
    }

    //Création variable pour l'ajout
    $name = "VotrePrenom";
    $notes = [];

    //L'execution de la fonction
    addNewEleve($tabMulti, $name, $notes);

    //Affichage des données
    foreach($tabMulti as $tab)
    {
        // a vous, TESTER DES CHOSES, des echo de variable, du tableau !
    }


    
    


?>