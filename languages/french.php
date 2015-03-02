<?php
//======================================================================\\
// Author: Carole & Javier Robledo                                      \\
// Website: http://www.refchile.cl                                      \\
// Email: pricop2008@yahoo.com                                          \\
// Updated: 01/27/2015 [MM/DD/YYYY]                                     \\
// Language: French                                                     \\
//======================================================================\\

// Character encoding
$LNG['charset'] = "iso-8859-1";

$LNG['user_success'] = "Votre compte a été créé avec succès";
$LNG['user_exists'] = "Ce nom d'utilisateur existe déjà";
$LNG['email_exists'] = "Ce courrier électronique est déjà utilisé";
$LNG['all_fields'] = "Tous les champs doivent être remplis";
$LNG['user_alnum'] = "Le nom d'utilisateur doit comprendre seulement des lettres et des nombres";
$LNG['user_too_short'] = "Le nom d'utilisateur doit comprendre entre 3 et 32 caractères";
$LNG['invalid_email'] = "Courrier électronique incorrect";
$LNG['invalid_user_pw'] = "Nom d'utilisateur ou mot de passe incorrect";
$LNG['invalid_captcha'] = "Code Captcha incorrect";
$LNG['log_out'] = "Se déconnecter";
$LNG['hello'] = "Bonjour";
$LNG['visitor'] = "Visiteurs";
$LNG['register'] = "Inscription";
$LNG['login'] = "Se connecter";
$LNG['password'] = "Mot de passe";
$LNG['username'] = "Nom d'utilisateur";
$LNG['email'] = "Email";
$LNG['captcha'] = "Captcha";
$LNG['username_or_email'] = "Nom d'utilisateur ou email";
$LNG['welcome_title'] = "Bienvenue à Ref";
$LNG['welcome_desc'] = "Le Réseau Social des Etudiants de Français du Chili.";
$LNG['welcome_about'] = "";
$LNG['forgot_password'] = "Vous avez oublié votre mot de passe?";
$LNG['all_rights_reserved'] = "Tous droits réservés";
    
// NOTIFICATION BOXES //
$LNG['settings_saved'] = "Réglages sauvegardés.";
$LNG['nothing_saved'] = "Rien n'est sauvegardé.";
$LNG['general_settings_saved'] = "Paramètres généraux sauvegardés avec succès.";
$LNG['overall_settings_saved'] = "Vos paramètres ont été mis à jour.";
$LNG['general_settings_unaffected'] = "Aucun changement n'a été détecté.";
$LNG['password_changed'] = "Mot de passe sauvegardé.";
$LNG['nothing_changed'] = "Rien n'a changé.";
$LNG['password_success_changed'] = "Mot de passe changé avec succès. Vous pouvez maintenant utiliser votre nouveau mot de passe.";
$LNG['incorrect_date'] = "La date sélectionnée n'est pas valide. Choisissez une date valide.";
$LNG['password_not_changed'] = "Votre mot de passe n'a pas été changé.";
$LNG['image_saved'] = "Image enregistrée";
$LNG['profile_picture_saved'] = "Votre photo de profil a été enregistrée.";
$LNG['error'] = "Erreur";
$LNG['no_file'] = "Vous n'avez sélectionné aucun fichier à ajouter, ou le(s) fichier(s) sélectionné(s) sont vides.";
$LNG['file_exceeded'] = "Le fichier sélectionné de doit pas dépasser <strong>%s</strong> MB.";
$LNG['file_format'] = "Le format du fichier sélectionné n'est pas compatible. Ajouter un fichier au format <strong>%s</strong>";
$LNG['image_removed'] = "Image supprimée.";
$LNG['profile_picture_removed'] = "Votre photo de profil a été supprimée.";
$LNG['bio_description'] = "Votre description doit comporter moins de %s caractères.";
$LNG['valid_email'] = "Veuillez entrer une adresse email valide.";
$LNG['valid_url'] = "Veuillez introduire une adresse URL valide.";
$LNG['background_changed'] = "Votre image de fond a été changée avec succès.";
$LNG['background_not_changed'] = "Votre image de fond n'a pas pu être changée.";
$LNG['password_too_short'] = "Le mot de de passe doit comporter au moins <strong>3</strong> caractère.";
$LNG['username_not_found'] = "Nous n'avons pas trouvé le nom d'utilisateur indiqué.";
$LNG['userkey_not_found'] = "Le nom d'utilisateur ou le code de réinitialisation sont incorrects, assurez-vous d'avoir indiqué les identifiants correctes.";
$LNG['password_reseted'] = "Vous avez bien réinitialisé votre mot de passe. Vous pouvez maintenant vous connecter avec vos nouveaux identifiants.";
$LNG['email_sent'] = "E-mail envoyé";
$LNG['email_reset'] = "Un e-mail pour réinitialiser votre mot de passe vous sera envoyé dans un délai de 24 heures. Vérifiez votre corbeille à Spam s'il n'apparait pas dans votre boîte de réception.";
$LNG['user_deleted'] = "Utilisateur supprimé";
$LNG['user_has_been_deleted'] = "Utilisateur aver l'ID: <strong>%s</strong> a été supprimé.";
$LNG['user_not_deleted'] = "L'utilisateur sélectionné (ID: %s) n'a pas pu être supprimé.";
$LNG['user_not_exist'] = "L'utilisateur sélecionné n'existe pas.";
$LNG['theme_changed'] = "Thème modifié.";
$LNG['theme_success_changed'] = "Le thème a bien été modifié.";
$LNG['theme_not_changed'] = "Désolé mais le thème n'a pas pu être modifié.";
$LNG['notif_saved'] = "Notifications modifiées";
$LNG['notif_success_saved'] = "Les notifications not été mises à jour.";

// MAIL CONTENT //
$LNG['welcome_mail'] = "Bienvenue à %s";
$LNG['user_created'] = "Merci d'avoir rejoint <strong>%s</strong><br /><br /> votre nom d'utilisateur : <strong>%s</strong><br /> Votre mot de passe : <strong>%s</strong><br /><br />Vous pouvez vous connecter à: <a href='%s' target='_blank'>%s</a>";
$LNG['recover_mail'] = "Récupération de mot de passe";
$LNG['recover_content'] = "Vous avez demandé la récupération d'un mot de passe, si vous ne l'avez pas demandé, ignorez ce message. <br /><br />Votre nom d'utilisateur : <strong>%s</strong><br />Votre code de récupération : <strong>%s</strong><br /><br />Vous pouvez mettre à jour votre mot de passe en suivant ce lien : <a href='%s/index.php?a=recover&r=1' target='_blank'>%s/index.php?a=recover&r=1</a>";
$LNG['ttl_comment_email'] = "%s a commenté votre message.";
$LNG['comment_email'] = "Bonjour <strong>%s</strong>,<br /><br /><strong><a href='%s'>%s</a></strong> a commenté votre <strong><a href='%s'>message.</a></strong><br /><br /><span style='color: #aaa;'>Ce message a été envoyé automatiquement, si vous ne voulez pas recevoir ce type de message de <strong>%s</strong> à l'avenir, s'il vous plait <a href='%s'>désabonnez-vous</a>.</span>";
$LNG['ttl_like_email'] = "%s a aimé votre message";
$LNG['like_email'] = "Bonjour <strong>%s</strong>,<br /><br /><strong><a href='%s'>%s</a></strong> a aimé votre <strong><a href='%s'>message.</a></strong><br /><br /><span style='color: #aaa;'>Ce message a été envoyé automatiquement, si vous ne voulez pas recevoir ce type de message de <strong>%s</strong> à l'avenir, s'il vous plait <a href='%s'>Désabonnez-vous</a>.</span>";
$LNG['ttl_new_friend_email'] = "%s vous a envoyé une demandé d'amitié";
$LNG['new_friend_email'] = "Bonjour <strong>%s</strong>,<br /><br /><strong><a href='%s'>%s</a></strong> vous a envoyé une demande d'amitié.<br /><br /><span style='color: #aaa;'>Ce message a été envoyé automatiquement, si vous ne voulez pas recevoir ce type de message de <strong>%s</strong> à l'avenir, s'il vous plait <a href='%s'>désabonnez-vous</a>.</span>";

// ADMIN PANEL //

$LNG['general_link'] = "Général";
$LNG['security_link'] = "Sécurité";
$LNG['manage_users'] = "Gestion des utilisateurs";

$LNG['theme_install'] = "Pour installer un nouveau thème, sélectionnez le dans le dossier<strong>themes</strong>.";
$LNG['theme_author_homepage'] = "Aller voir la page d'accueil de l'auteur";
$LNG['theme_version'] = "Version";
$LNG['theme_active'] = "Actif";
$LNG['theme_activate'] = "Activer";
$LNG['theme_by'] = "Par";

// FEED //
$LNG['welcome_feed_ttl'] = "Bienvenue sur votre flux d'activité";
$LNG['welcome_feed'] = "Toutes les publications de vos amis vont apparaître sur cette page, commencez par vous connecter à de nouveaux amis.";
$LNG['welcome_timeline_ttl'] = "Bienvenue sur le flux de votre journal.";
$LNG['welcome_timeline'] = "Toutes vos publications font apparaître sur cette page, commencez par vous exprimer.";
$LNG['leave_comment'] = "Ecrire un commentaire.";
$LNG['post'] = "Publication";
$LNG['view_more_comments'] = "Voir plus de commentaires";
$LNG['this_post_private'] = "Ce message est privé";
$LNG['this_post_public'] = "Ce message est publique";
$LNG['delete_this_comment'] = "Supprimer ce commentaire";
$LNG['delete_this_message'] = "Supprimer ce message";
$LNG['report_this_message'] = "Signaler ce message";
$LNG['report_this_comment'] = "Signaler ce commentaire";
$LNG['view_more_messages'] = "Voir plus";
$LNG['food'] = "J'ai mangé à: <strong>%s</strong>";
$LNG['visited'] = "J'ai visité:  <strong>%s</strong>";
$LNG['played'] = "J'ai joué à: <strong>%s</strong>";
$LNG['watched'] = "J'ai vu: <strong>%s</strong>";
$LNG['listened'] = "J'ai écouté : <strong>%s</strong>";
$LNG['shared'] = "J'ai partagé <a href='%s'><strong>message</strong></a> depuis <a href='%s'><strong>%s</strong></a>.";
$LNG['form_title'] = "Mettre à jour votre statut";
$LNG['comment_wrong'] = "Il y a eu une erreur, actualisez la page et réessayez.";
$LNG['comment_too_long'] = "Désolé, mais le nombre maximum de caractères permis dans les messages est de <strong>%s</strong>.";
$LNG['comment_error'] = "Désolé, mais le commentaire n'a pas pu être publié, actualisez la page et réessayez.";
$LNG['message_hidden'] = "Désolé, mais ce message est privé, l'auteur du message est le seul à pouvoir le voir.";
$LNG['message_hidden_ttl'] = "Message privé";
$LNG['login_to_lcs'] = "Connectez-vous pour aimer, commenter ou partager";
$LNG['comment'] = "Commenter";
$LNG['share'] = "Partager";
$LNG['shared_success'] = "La publication a bien été partagée sur <a href='%s'><strong>timeline</strong></a>.";
$LNG['no_shared'] = "Désolé, mais le message n'a pas pu être partagé, actualisez la page et réessayez.";
$LNG['share_title'] = "Partager cette publication";
$LNG['share_desc'] = "Etes-vous sûr de vouloir partager cette publication sur votre journal ?";
$LNG['cancel'] = "Annuler";
$LNG['close'] = "Fermer";

// REPORT //
$LNG['1_not_exists'] = "Le message signalé n'existe pas.";
$LNG['0_not_exists'] = "Le commentaire signalé n'existe pas.";
$LNG['1_already_reported'] = "Le message a déjà été signalé et il va être contrôler sous peu, merci.";
$LNG['0_already_reported'] = "Le commentaire a déjà été signalé et il va être vérifié sous peu, merci.";
$LNG['1_is_safe'] = "Ce message a été signalé comme <strong>safe</strong> par un administrateur, merci de nous avoir prévenu.";
$LNG['0_is_safe'] = "Ce message a été signalé comme <strong>safe</strong> par un administrateur, merci de nous avoir prévenu.";
$LNG['1_report_added'] = "Ce message a été signalé, merci de nous avoir prévenu.";
$LNG['0_report_added'] = "Ce commentaire a été signalé, merci de nous avoir prévenu.";
$LNG['1_report_error'] = "Désolé mais il y a eu une erreur au moment du signalement du message, actualisez la page et réessayez";
$LNG['0_report_error'] = "Désolé mais il y a eu une erreur au moment du signalement du commentaire, actualisez la page et réessayez.";
$LNG['1_is_deleted'] = "Le message a été supprimé, merci de nous avoir prévenu.";
$LNG['0_is_deleted'] = "Le commentaire a été supprimé, merci de nous avoir prévenu.";

// SIDEBAR //
$LNG['filter_events'] = "Filtrer les évènements";
$LNG['archive'] = "Archives";
$LNG['all_events'] = "Tous les évènements";
$LNG['sidebar_map'] = "Lieux";
$LNG['sidebar_food'] = "Repas";
$LNG['sidebar_visited'] = "Visites";
$LNG['sidebar_movie'] = "Films";
$LNG['sidebar_game'] = "Jeux";
$LNG['sidebar_picture'] = "Photos";
$LNG['sidebar_video'] = "Vidéos";
$LNG['sidebar_music'] = "Musique";
$LNG['sidebar_shared'] = "Eléments partagés";
$LNG['all_time'] = "Tous les horaires";
$LNG['subscriptions'] = "Ami(e)s";
$LNG['subscribers'] = "est ami(e) avec";
$LNG['welcome'] = "Bienvenue";
$LNG['filter_age'] = "Filtrer les âges";
$LNG['all_ages'] = "Tous les âges";
$LNG['filter_gender'] = "Filtrer par genre";
$LNG['sidebar_male'] = "Homme";
$LNG['sidebar_female'] = "Femme";
$LNG['all_genders'] = "Tous les genres";
$LNG['online_friends'] = "Ami(e)s connecté(e)s";
$LNG['sidebar_likes'] = "Mentions J'aime";
$LNG['sidebar_comments'] = "Commentaires";
$LNG['sidebar_friendships'] = "Amitiés";
$LNG['sidebar_chats'] = "Discussions instantannées";
$LNG['sidebar_suggestions'] = "Suggestions d'amis";
$LNG['sidebar_trending'] = "Sujets à suivre";
$LNG['sidebar_friends_activity'] = "Activités de vos ami(e)s";

// MESSAGES / CHAT //
$LNG['lonely_here'] = "Il n'y a personne ici, et si vous ajoutiez des ami(e)s?";
$LNG['write_message'] = "Ecrire un message…";
$LNG['chat_too_long'] = "Désolé, mais le nombre maximum de caractères autorisés est de <strong>%s</strong>.";
$LNG['blocked_by'] = "Le message n'a pas pu être envoyé. <strong>%s</strong> blocked you.";
$LNG['blocked_user'] = "Le message n'a pas pu être envoyé. Vous avez bloqué <strong>%s</strong>.";
$LNG['chat_self'] = "Désolé mais vous ne pouvez pas vous envoyer des messages à vous-même.";
$LNG['chat_no_user'] = "Vous devez sélectionner une personne pour commencer une discussion.";
$LNG['view_more_conversations'] = "Voir plus de conversations";
$LNG['block'] = "Bloquer";
$LNG['unblock'] = "Débloquer";
$LNG['conversation'] = "Conversation";
$LNG['start_conversation'] = "Vous pouvez commencer une conversation en choisissant une personne dans votre liste d'ami(e)s.";
$LNG['send_message'] = "Envoyer le message";

// MESSAGE FORM //
$LNG['label_food'] = "Ajoutez un lieu où vous avez mangé";
$LNG['label_game'] = "Ajoutez un jeu auquel vous avez joué";
$LNG['label_movie'] = "Ajoutez un film que vous avez vu";
$LNG['label_visited'] = "Ajoutez un endroit que vous avez visité";
$LNG['label_map'] = "Ajoutez une localisation";
$LNG['label_video'] = "Partagez un lien vers une vidéo de YouTube ou Vimeo ";
$LNG['label_music'] = "Partagez un lien vers SoundCloud ou ajoutez une chanson que vous avez écouté";
$LNG['label_image'] = "Ajoutez une image";
$LNG['message_form'] = "Exprimez-vous";
$LNG['file_too_big'] = "La taille de l'image sélectionnée (%s) est trop grande, la taille maximum autorisée est de <strong>%s</strong>.";
$LNG['format_not_exist'] = "Le format du fichier sélectionné (%s) n'est pas compatible, n'ajoutez que des images au format <strong>%s</strong>.";
$LNG['privacy_no_exist'] = "Le paramètre de confidentialité sélectionné n'existe pas, actualisez la page et réessayez.";
$LNG['event_not_exist'] = "L'évènement sélectionné n'existe pas, actualisez la page et réessayez.";

$LNG['unexpected_message'] = "Une erreur inattendue est survenue, actualisez la page et réessayez.";
$LNG['message_too_long'] = "Désolé, mais le nombre maximum de caractères autorisé est de <strong>%s</strong>.";
$LNG['files_selected'] = "Image(s) sélectionnée(s).";
$LNG['too_many_images'] = "Le nombre maximum d'images qui peuvent être ajoutées dans un message est de <strong>%s</strong>, vous avez essayé d'ajouter <strong>%s</strong> images.";

// USER PANEL //
$LNG['user_menu_general'] = "Général";
$LNG['user_menu_security'] = "Mot de passe";
$LNG['user_menu_avatar'] = "Profil";
$LNG['user_menu_notifications'] = "Notifications";

$LNG['user_ttl_general'] = "Paramètres généraux";
$LNG['user_ttl_security'] = "Paramètres du mot de passe";
$LNG['user_ttl_avatar'] = "Paramètres du profil";
$LNG['user_ttl_notifications'] = "Paramètres des notifications";

$LNG['user_desc_general'] = "Changer les paramètres du compte, de confidentialité et de lieu.";
$LNG['user_desc_security'] = "Changer votre mot de passe.";
$LNG['user_desc_avatar'] = "Changer la photo de votre compte.";
$LNG['user_desc_cover'] = "Change votre photo de couverture.";
$LNG['user_desc_notifications'] = "Changer vos paramètres de notifications.";

$LNG['ttl_background'] = "Image de fond";
$LNG['sub_background'] = "Sélecionner une image de fond pour votre profil";

$LNG['ttl_first_name'] = "Prénom";
$LNG['sub_first_name'] = "Indiquer votre prénom";

$LNG['ttl_last_name'] = "Nom de famille";
$LNG['sub_last_name'] = "Indiquer votre nom de famille";

$LNG['ttl_email'] = "Email";
$LNG['sub_email'] = "Votre email ne sera pas affiché";

$LNG['ttl_location'] = "Lieu";
$LNG['sub_location'] = "Où habitez-vous ?";

$LNG['ttl_website'] = "Site internet";
$LNG['sub_website'] = "Si vows avez un blog ou un site personnel, indiquez-le";

$LNG['ttl_gender'] = "Genre";
$LNG['sub_gender'] = "Sélectionner votre genre (homme ou femme)";

$LNG['ttl_profile'] = "Profil";
$LNG['sub_profile'] = "Confidentialité du profil";

$LNG['ttl_messages'] = "Confidentialité des messages";
$LNG['sub_messages'] = "Paramètres par défaut des messages";

$LNG['ttl_offline'] = "Statut de la discussion instantanée";
$LNG['sub_offline'] = "Visibilité du statut de la discussion instantanée";

$LNG['ttl_facebook'] = "Facebook";
$LNG['sub_facebook'] = "L'ID de votre profil Facebook.";

$LNG['ttl_twitter'] = "Twitter";
$LNG['sub_twitter'] = "L'ID de votre profil Twitter.";

$LNG['ttl_google'] = "Google+";
$LNG['sub_google'] = "L'ID de votre profil google+.";

$LNG['ttl_bio'] = "Biographie";
$LNG['sub_bio'] = "A propos de moi (maximum 160 caractères)";

$LNG['ttl_born'] = "Date de naissance";
$LNG['sub_born'] = "Sélectionner votre date de naissance";

$LNG['ttl_not_verified'] = "Non vérifié";
$LNG['ttl_verified'] = "Verifié";
$LNG['sub_verified'] = "Badge de vérification sur le profil de l'utilisateur";

$LNG['ttl_upload_avatar'] = "Ajouter l'image de profil sélectionnée";
$LNG['ttl_delete_avatar'] = "Supprimer votre image de profil actuelle";

$LNG['opt_public'] = "Publique";
$LNG['opt_private'] = "Privé";
$LNG['opt_semi_private'] = "Réservé aux abonnés";

$LNG['opt_offline_off'] = "En ligne (si disponible)";
$LNG['opt_offline_on'] = "Toujours hors ligne";

$LNG['no_gender'] = "Sans genre";
$LNG['male'] = "Homme";
$LNG['female'] = "Femme";

$LNG['ttl_upload'] = "Ajouter";
$LNG['ttl_password'] = "Mot de passe";
$LNG['sub_password'] = "Ajouter un nouveau mot de passe (au moins 3 caractères)";
$LNG['save_changes'] = "Sauvegarder les modifications";
$LNG['ttl_upload_photo'] = "Ajouter la photo";
$LNG['ttl_upload_cover'] = "Ajouter l'image de couverture";
$LNG['ttl_delete_photo'] = "Effacer la photo";

$LNG['ttl_notificationl'] = "Notifications des mentions J'aime";
$LNG['sub_notificationl'] = "Afficher les alertes et les notifications des <strong>mentions j'aime</strong>";

$LNG['ttl_notificationc'] = "Notifications des commentaires";
$LNG['sub_notificationc'] = "Afficher les alertes et les notifications des <strong>Commentaires</strong>";

$LNG['ttl_notifications'] = "Notifications des messages";
$LNG['sub_notifications'] = "Afficher les alertes et les notifications des <strong>Messages partagés</strong>";

$LNG['ttl_notificationd'] = "Notifications de discussion instantanée";
$LNG['sub_notificationd'] = "Afficher les alertes et les notifications des <strong>discussions instantanées</strong>";

$LNG['ttl_notificationf'] = "Notifications de vos amis";
$LNG['sub_notificationf'] = "Afficher les alertes et les notifications des <strong>Ajouts d'amis</strong>";

$LNG['ttl_sound_nn'] = "Son des notifications";
$LNG['sub_sound_nn'] = "Emettre un son quand une nouvelles notification est reçue.";

$LNG['ttl_sound_nc'] = "Son de la discussion instantanée";
$LNG['sub_sound_nc'] = "Emettre un son quand un nouveau message est reçu";

$LNG['ttl_email_comment'] = "Emails pour les commentaires";
$LNG['sub_email_comment'] = "Recevoir un email quand quelqu'un commente un de vos messages";

$LNG['ttl_email_like'] = "Emails pour les mentions j'aime";
$LNG['sub_email_like'] = "Recevoir un email quand quelqu'un aime un de vos messages";

$LNG['ttl_email_new_friend'] = "Emails pour les nouveaux amis";
$LNG['sub_email_new_friend'] = "Recevoir un email quand quelqu'un vous envoie une demande d'amitié";

$LNG['user_ttl_sidebar'] = "Paramètres";

// ADMIN PANEL //
$LNG['admin_login'] = "Connexion de l'administrateur";
$LNG['admin_user_name'] = "Nom d'utilisateur";
$LNG['desc_admin_user'] = "Indiquer votre nom d'administrateur";
$LNG['admin_pass'] = "Mot de passe";
$LNG['desc_admin_pass'] = "Indiquer votre mot de passe d'administrateur";
$LNG['admin_menu_general'] = "Paramètres généraux";
$LNG['admin_menu_security'] = "Mot de passe";
$LNG['admin_menu_users'] = "Gérer les utilisateurs";
$LNG['admin_menu_logout'] = "Déconexion";
$LNG['admin_menu_stats'] = "Statistiques";
$LNG['admin_menu_users_settings'] = "Paramètres d'utilisateurs";
$LNG['admin_menu_themes'] = "Thèmes";
$LNG['admin_menu_manage_reports'] = "Gérer les rapports";
$LNG['admin_menu_manage_ads'] = "Gérer les publicités";

$LNG['admin_ttl_sidebar'] = "Menu";
$LNG['admin_ttl_general'] = "Paramètres généraux";
$LNG['admin_ttl_security'] = "Paramètres de mot de passe";
$LNG['admin_ttl_themes'] = "Thèmes";
$LNG['admin_ttl_users'] = "Gestion des utilisateurs";
$LNG['admin_ttl_stats'] = "Statistiques";
$LNG['admin_ttl_users_settings'] = "Paramètres des utilisateurs";
$LNG['admin_ttl_manage_reports'] = "Gestion des rapports";
$LNG['admin_ttl_manage_ads'] = "Gestion des publicités";

$LNG['admin_desc_general'] = "Changer les paramètres généraux du site.";
$LNG['admin_desc_users_settings'] = "Changer les paramètres généraux des utilisateurs.";
$LNG['admin_desc_themes'] = "Changer l'interface du site.";
$LNG['admin_desc_security'] = "Changer votre mot de passe d'administrateur.";
$LNG['admin_desc_users'] = "Gestion des utilisateurs inscrits.";
$LNG['admin_desc_stats'] = "Statistiques du site et des utilisateurs.";
$LNG['admin_desc_edit_users'] = "Modifier les paramètres des utilisateurs.";
$LNG['admin_desc_manage_reports'] = "Gestion des messages et des commentaires signalés.";
$LNG['admin_desc_manage_ads'] = "Gestion des unités d'annonces du site.";

$LNG['admin_ttl_title'] = "Titre";
$LNG['admin_sub_title'] = "Titre du site.";

$LNG['admin_ttl_captcha'] = "Captcha";
$LNG['admin_sub_captcha'] = "Activer le code captcha d'inscription.";

$LNG['admin_ttl_timestamp'] = "Horodatage";
$LNG['admin_sub_timestamp'] = "Type d'horodatage des messages, des commentaires et du chat";

$LNG['admin_ttl_msg_perpage'] = "Messages";
$LNG['admin_sub_msg_perpage'] = "Nombre de messages par page";

$LNG['admin_ttl_com_perpage'] = "Commentaires";
$LNG['admin_sub_com_perpage'] = "Nombre de commentaires par message";

$LNG['admin_ttl_chat_perpage'] = "Chat";
$LNG['admin_sub_chat_perpage'] = "Nombre discussions instantanées par page";

$LNG['admin_ttl_smiles'] = "Emoticones";
$LNG['admin_sub_smiles'] = "Autoriser et transformer les codes abrégés d'émoticones pour les messages, les commentaires et le chat";

$LNG['admin_ttl_nperpage'] = "Notifications";
$LNG['admin_sub_nperpage'] = "Quantité de notifications affichées par page (page de notifications)";

$LNG['admin_ttl_qperpage'] = "Rechercher";
$LNG['admin_sub_qperpage'] = "Quantité de résultats d'utilisateurs par page (Page de recherche)";

$LNG['admin_ttl_msg_limit'] = "Limite des messages";
$LNG['admin_sub_msg_limit'] = "Nombre de caractères autorisées par message";

$LNG['admin_ttl_chat_limit'] = "Limite du chat";
$LNG['admin_sub_chat_limit'] = "Nombre de caractères autorisés par conversation";

$LNG['admin_ttl_email_user'] = "Envoi d'emails aux utilisateurs";
$LNG['admin_sub_email_user'] = "Envoi d'email au moment de l'inscription";

$LNG['admin_ttl_notificationsm'] = "Notifications des messages";
$LNG['admin_sub_notificationsm'] = "Intervalle de mise à jour pour consulter les nouveaux messages";

$LNG['admin_ttl_notificationsn'] = "Notification des évènements";
$LNG['admin_sub_notificationsn'] = "Intervalle de mise à jour pour consulter les nouvelles notifications";

$LNG['admin_ttl_chatrefresh'] = "Actualisation du chat";
$LNG['admin_sub_chatrefresh'] = "Fréquence d'actualisation des nouveaux messages dans la fenêtre de discussion instantanée.";

$LNG['admin_ttl_timeonline'] = "Utilisateurs en ligne";
$LNG['admin_sub_timeonline'] = "Durée en ligne à prendre en compte pour les dernières activités d'un utilisateur";

$LNG['admin_ttl_image_profile'] = "Taille de l'image (Profil)";
$LNG['admin_sub_image_profile'] = "Taille de l'image à ajouter (photo de couverture et avatar)";

$LNG['admin_ttl_image_format'] = "Format de l'image (Profil)";
$LNG['admin_sub_image_format'] = "Format d'image autorisé (photo de couverture et avatar): gif,png,jpg, les autres formats ne sont pas compatibles";

$LNG['admin_ttl_message_image'] = "Taille des images (Messages)";
$LNG['admin_sub_message_image'] = "Taille des images (Messages)";

$LNG['admin_ttl_message_format'] = "Format des images (Messages)";
$LNG['admin_sub_message_format'] = "Format d'image autorisé (messages): gif,png,jpg, les autres formats ne sont pas compatibles";

$LNG['admin_ttl_censor'] = "Censure";
$LNG['admin_sub_censor'] = "Mots à censuré (divisé par \',\' [virgule])";

$LNG['admin_ttl_ad1'] = "Annonce Unité 1";
$LNG['admin_sub_ad1'] = "Annonce de l'Unité 1 (Bas de la page de bienvenue)";

$LNG['admin_ttl_ad2'] = "Annonce Unité 2";
$LNG['admin_sub_ad2'] = "Annonce Unité 2 (Sidebar [Timeline Page])";

$LNG['admin_ttl_ad3'] = "Annonce Unité 3";
$LNG['admin_sub_ad3'] = "Annonce de l' Unité 3 (Barre latérale [News Feed Page])";

$LNG['admin_ttl_ad4'] = "Annonce Unité 4";
$LNG['admin_sub_ad4'] = "Annonce de l'Unité 4 (Barre latérale [page de profil])";

$LNG['admin_ttl_ad5'] = "Annonce Unité 5";
$LNG['admin_sub_ad5'] = "Annonce de l'unité 5 (Barre latérale [messages individuels])";

$LNG['admin_ttl_ad6'] = "Annonce Unité 6";
$LNG['admin_sub_ad6'] = "Annonce de l'Unité 6 (Barre latérale [Page de recherche de personnes])";

$LNG['admin_ttl_password'] = "Mot de passe";
$LNG['admin_sub_password'] = "Ne rien indiquer si vous ne voulez pas le changer";

$LNG['admin_ttl_edit'] = "Modifier";
$LNG['admin_ttl_edit_profile'] = "Modifier le profil";

$LNG['admin_ttl_delete'] = "Supprimer";
$LNG['admin_ttl_delete_profile'] = "Supprimer le Profil";

$LNG['admin_ttl_mail'] = "Email";
$LNG['admin_ttl_username'] = "Nom d'utilisateur";
$LNG['admin_ttl_id'] = "ID"; // As in user ID

$LNG['admin_ttl_mprivacy'] = "Msg. Type";
$LNG['admin_sub_mprivacy'] = "User\'s message privacy by default (can be changed from user\'s settings)";

$LNG['admin_ttl_notificationl'] = "Likes Notifications";
$LNG['admin_sub_notificationl'] = "Display alert and notifications for <strong>Likes</strong> (can be changed from user\'s settings)";

$LNG['admin_ttl_notificationc'] = "Comments Notifications";
$LNG['admin_sub_notificationc'] = "Display alert and notifications for <strong>Comments</strong> (can be changed from user\'s settings)";

$LNG['admin_ttl_notifications'] = "Messages Notifications";
$LNG['admin_sub_notifications'] = "Display alert and notifications for <strong>Shared Messages</strong> (can be changed from user\'s settings)";

$LNG['admin_ttl_notificationd'] = "Chat Notifications";
$LNG['admin_sub_notificationd'] = "Display alert and notifications for <strong>Chats</strong> (can be changed from user\'s settings)";

$LNG['admin_ttl_notificationf'] = "Friends Notifications";
$LNG['admin_sub_notificationf'] = "Display alert and notifications for <strong>Friends Additions</strong> (can be changed from user\'s settings)";

$LNG['admin_ttl_sound_nn'] = "Notifications Sound";
$LNG['admin_sub_sound_nn'] = "Enable playing a sound for new notifications (can be changed from user\'s settings)";

$LNG['admin_ttl_sound_nc'] = "Chat Sound";
$LNG['admin_sub_sound_nc'] = "Enable playing a sound for new chat messages (can be changed from user\'s settings)";

$LNG['admin_ttl_email_comment'] = "Email on Comment";
$LNG['admin_sub_email_comment'] = "Enable sending e-mails when someone comments to a message";

$LNG['admin_ttl_email_like'] = "Email on Like";
$LNG['admin_sub_email_like'] = "Enable sending e-mails when someone likes a message";

$LNG['admin_ttl_email_new_friend'] = "Email on New Friend";
$LNG['admin_sub_email_new_friend'] = "Enable sending e-mails when someone adds a friend";

$LNG['admin_ttl_ilimit'] = "Max. Images";
$LNG['admin_sub_ilimit'] = "The maximum images allowed to be uploaded per message";

$LNG['admin_ttl_wholiked'] = "Who Liked";
$LNG['admin_sub_wholiked'] = "The number of avatars to be shown near likes number";

$LNG['admin_ttl_rperpage'] = "Reports";
$LNG['admin_sub_rperpage'] = "Reports per page (Manage Reports)";

$LNG['admin_ttl_sperpage'] = "Friends";
$LNG['admin_sub_sperpage'] = "Number of friends per page to be displayed (profile page)";

$LNG['admin_ttl_ronline'] = "Online Friends";
$LNG['admin_sub_ronline'] = "Number of online friends to be displayed on the Feed/Subscriptions page (sidebar).";

$LNG['admin_ttl_nperwidget'] = "Dropdown Notifications";
$LNG['admin_sub_nperwidget'] = "Number of notifications to be shown per category (likes, comments, messages)";

$LNG['admin_ttl_uperpage'] = "Users";
$LNG['admin_sub_uperpage'] = "Number of users per page (Manage Users)";

$LNG['admin_sub_verified'] = "Verified user profile by default? (Not recommended)";

$LNG['per_page'] = "/ page";
$LNG['second'] = "second";
$LNG['seconds'] = "seconds";
$LNG['minute'] = "minute";
$LNG['minutes'] = "minutes";
$LNG['hour'] = "hour";
$LNG['recommended'] = "recommended";
$LNG['edit_user'] = "Edit User";
$LNG['username_to_edit'] = "Enter a username";
$LNG['username_to_edit_sub'] = "Enter the username you want to edit";

// STATS //
$LNG['user_registration'] = "User Registration";
$LNG['users_today'] = "Today";
$LNG['users_this_month'] = "This Month";
$LNG['users_last_30'] = "Last 30 days";
$LNG['total_users'] = "Total";

$LNG['messages'] = "Messages";
$LNG['comments'] = "Commentaires";
$LNG['messages_and_comments'] = "Messages & Commentaires";
$LNG['reports_title'] = "Signalements - (Messages %26 Commentaires)";
$LNG['total_messages'] = "Total Messages";
$LNG['public_messages'] = "Messages publiques";
$LNG['private_messages'] = "Messages privés";
$LNG['total_comments'] = "Total Commentaires";
$LNG['stats_total'] = "Total";
$LNG['stats_public'] = "Public";
$LNG['stats_private'] = "Privé";
$LNG['stats_reports'] = "Signalements";
$LNG['total_reports'] = "Total Signalements";
$LNG['pending_reports'] = "Signalements en attente";
$LNG['safe_reports'] = "Signalements sécurisés";
$LNG['deleted_reports'] = "Signalements supprimés";
$LNG['likes_today'] = "J'aime aujourd'hui";
$LNG['likes_this_month'] = "J'aime ce mois-ci";
$LNG['likes_last_30'] = "Ce mois-ci";
$LNG['likes_total'] = "Total J'aime";
$LNG['likes'] = "J'aime";

// MANAGE REPORTS //
$LNG['admin_reports_id'] = "ID";
$LNG['admin_reports_view'] = "Voir le signalement";
$LNG['admin_reports_type'] = "Type";
$LNG['admin_reports_by'] = "Signalé par";
$LNG['admin_reports_safe'] = "Marquer comme sûr";
$LNG['admin_reports_delete'] = "Supprimer";
$LNG['admin_reports_ttl_safe'] = "Marquer comme sûr";

// LIKES //
$LNG['already_liked'] = "Vous avez déjà aimé ce message.";
$LNG['already_disliked'] = "Vous avez déjà retiré la mention j'aime de ce message.";
$LNG['like'] = "J'aime";
$LNG['dislike'] = "Je 'n'aime plus";
$LNG['like_message_not_exist'] = "Ce message n'existe plus.";
$LNG['liked_this'] = "Vous avez aimé ça";
$LNG['x_liked_y_post'] = "vous avez aimé %1$s\'s <a href='%2$s'><strong>message</strong></a>";

// MISC //
$LNG['sponsored'] = "Sponsorisé";
$LNG['censored'] = "<strong>censored</strong>";
$LNG['new_like_notification'] = "<strong><a href='%s'>%s</a></strong> a aimé votre <strong><a href='%s'>message</a></strong>";
$LNG['new_comment_notification'] = "<strong><a href='%s'>%s</a></strong> a commenté votre <strong><a href='%s'>message</a></strong>";
$LNG['new_shared_notification'] = "<strong><a href='%s'>%s</a></strong> a partagé votre <strong><a href='%s'>message</a></strong>";
$LNG['new_friend_notification'] = "<strong><a href='%s'>%s</a></strong> vous a envoyé une demande d'amitié";
$LNG['new_chat_notification'] = "<strong><a href='%s'>%s</a></strong> vous a envoyé un <strong><a href='%s'>message instantané</a></strong>";
$LNG['new_like_fa'] = "<strong><a href='%s'>%s</a></strong> a aimé un <strong><a href='%s'>message</a></strong>";
$LNG['new_comment_fa'] = "<strong><a href='%s'>%s</a></strong> a commenté un <strong><a href='%s'>message</a></strong>";
$LNG['new_message_fa'] = "<strong><a href='%s'>%s</a></strong> a publié un nouveau <strong><a href='%s'>message</a></strong>";
$LNG['change_password'] = "Changer de mot de passe";
$LNG['enter_new_password'] = "Indiquer votre nouveau mot de passe";
$LNG['enter_reset_key'] = "Indiquer code d'actualisation";
$LNG['enter_username'] = "Indiquer votre nom d'utilisateur";
$LNG['reset_key'] = "Code d'actualisation";
$LNG['new_password'] = "Nouveau mot de passe";
$LNG['password_recovery'] = "Récupérer votre mot de passe";
$LNG['recover'] = "Récupération";
$LNG['recover_sub_username'] = "Taper votre nom d'utilisateur ou email pour récupérer votre mot de passe";

// PROFILE //
$LNG['profile_not_exist'] = "Désolé mais ce nom d'utilisateur existe déjà.";
$LNG['profile_semi_private'] = "Désolé mais ce profil est privé, seulement les amis de cet utilisateur peuvent voir son profil";
$LNG['profile_private'] = "Désolé, mais ce profil est entièrement privé";
$LNG['profile_not_exist_ttl'] = "Ce profil n'existe pas.";
$LNG['profile_semi_private_ttl'] = "Ce profil est privé.";
$LNG['profile_private_ttl'] = "Ce profil est privé.";
$LNG['add_friend'] = "Envoyer une demande d'amitié";
$LNG['remove_friend'] = "Supprimer cet ami de ma liste";
$LNG['profile_about'] = "A propos";
$LNG['profile_born'] = "Né le";
$LNG['profile_location'] = "Lieu";
$LNG['profile_website'] = "Page principale";
$LNG['profile_view_site'] = "Voir le site internet";
$LNG['profile_view_profile'] = "Voir le profil";
$LNG['profile_bio'] = "Biographie";
$LNG['new_messages_posted'] = "De nouveaux messages ont été publiés. Cliquer pour actualiser.";
$LNG['verified_user'] = "Utilisateur vérifié";
$LNG['edit_profile_cover'] = "Changer la photo de profil";
$LNG['view_all_notifications'] = "Voir plus de notifications";
$LNG['view_chat_notifications'] = "Voir plus de messages";
$LNG['close_notifications'] = "Fermer les notifications";
$LNG['notifications_settings'] = "Paramètres des notifications";
$LNG['no_notifications'] = "Pas de notifications";
$LNG['search_title'] = "Chercher dans les résultats";
$LNG['view_all_results'] = "Voir tous les résultats";
$LNG['close_results'] = "Fermer les résultats";
$LNG['no_results'] = "Aucun résultat. Essayez avec une autre recherche.";
$LNG['no_results_ttl'] = "Chercher dans les résultats";
$LNG['search_for_users'] = "Chercher des utilisateurs";
$LNG['search_in_friends'] = "Chercher dans vos amis";
$LNG['follows'] = "Suivis";
$LNG['followed_by'] = "Suivi par";
$LNG['people'] = "Personnes";

// GENERAL //
$LNG['title_profile'] = "Profil";
$LNG['title_feed'] = "Fil d'actualités";
$LNG['title_post'] = "Publication";
$LNG['title_messages'] = "Messages";
$LNG['title_settings'] = "Paramètres";
$LNG['title_timeline'] = "Historique personnel";
$LNG['title_search'] = "Rechercher";
$LNG['title_notifications'] = "Notifications";
$LNG['title_admin'] = "Admin";
$LNG['on'] = "On";
$LNG['off'] = "Off";
$LNG['none'] = "Aucun";
$LNG['pages'] = "Pages";
$LNG['search_for_people'] = "Rechercher une personne";
$LNG['new_message'] = "Nouveau message";
$LNG['privacy_policy'] = "Politique de confidentialité";
$LNG['terms_of_use'] = "Conditions d'Utilisation";
$LNG['about'] = "à propos";
$LNG['disclaimer'] = "Dégagement de responsabilité";
$LNG['contact'] = "Contact";
$LNG['api_documentation'] = "API Documentation";
$LNG['developers'] = "Développeurs";
$LNG['language'] = "Langue";

// MONTHS
$LNG['month_1'] = "Janvier";
$LNG['month_2'] = "Février";
$LNG['month_3'] = "Mars";
$LNG['month_4'] = "Avril";
$LNG['month_5'] = "Mai";
$LNG['month_6'] = "Juin";
$LNG['month_7'] = "Juillet";
$LNG['month_8'] = "Août";
$LNG['month_9'] = "Septembre";
$LNG['month_10'] = "Octobre";
$LNG['month_11'] = "Novembre";
$LNG['month_12'] = "Décembre";

// GROUP

$LNG['group_desc_new'] = "Créer un groupe";
$LNG['group_name'] = "Nom du groupe";
$LNG['group_sub_name'] = "Indiquer le nom du groupe";
$LNG['group_privacy'] = "Confidentialité";
$LNG['group_sub_privacy'] = "Confidentialité du groupe";
$LNG['group_members'] = "Membres";
$LNG['group_sub_members'] = "Qui voulez-vous ajouter au groupe?";
$LNG['group_description'] = "Description";
$LNG['group_sub_description'] = "A propos du groupe";

?>
