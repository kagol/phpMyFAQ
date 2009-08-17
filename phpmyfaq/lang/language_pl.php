<?php
/******************************************************************************
 * File:				language_pl.php
 * Description:		    Polish language file
 * Authors:				Krzysztof Kudłacik <null@adres.pl>
 * Authors:				Sławomir Małusecki <mori@online-rpg.pl>
 * Authors:				Dariusz Grzesista  <darek@linux.rybnik.pl>
 * Date:				2004-06-24
 * Last Update:		    2009-08-04
 * Copyright:           (c) 2006 phpMyFAQ Team
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 ******************************************************************************/

$PMF_LANG["metaCharset"] = "UTF-8";
$PMF_LANG["metaLanguage"] = "pl";
$PMF_LANG["language"] = "polski";
// ltr: left to right (e.g. English language); rtl: right to left (e.g. Arabic language)
$PMF_LANG["dir"] = "ltr";

$PMF_LANG["nplurals"] = "3";
/**
 * This parameter is used with the function 'plural' from inc/PMF_Language/Plurals.php
 * If this parameter and function are not in sync plural form support will be broken.
 */

$PMF_LANG["nplurals"] = 3;
/**
 * Check inc/PMF_Language/Plurals.php to see if this language has plural form support.
 * If it doesn't English plural messages will be used.
 * You can add support for this language by editing the function plural()
 * and adding the correct expression for this language.
 * If you need any help, please contact phpMyFAQ team.
 */

// Navigation
$PMF_LANG["msgCategory"] = "Kategorie";
$PMF_LANG["msgShowAllCategories"] = "Pokaż wszystkie kategorie";
$PMF_LANG["msgSearch"] = "Szukaj";
$PMF_LANG["msgAddContent"] = "Dodaj artykuł";
$PMF_LANG["msgQuestion"] = "Zadaj pytanie";
$PMF_LANG["msgOpenQuestions"] = "Pytania otwarte";
$PMF_LANG["msgHelp"] = "Pomoc";
$PMF_LANG["msgContact"] = "Kontakt";
$PMF_LANG["msgHome"] = "Start";
$PMF_LANG["msgNews"] = "Newsy w FAQ";
$PMF_LANG["msgUserOnline"] = " użytkowników online";
$PMF_LANG["msgXMLExport"] = "XML-File";
$PMF_LANG["msgBack2Home"] = "wróć na początek";

// Contentpages
$PMF_LANG["msgFullCategories"] = "Kategorie z wpisami";
$PMF_LANG["msgFullCategoriesIn"] = "Kategorie z wpisami w ";
$PMF_LANG["msgSubCategories"] = "Podkategorie";
$PMF_LANG["msgEntries"] = "Wpisy";
$PMF_LANG["msgEntriesIn"] = "Wpisy w ";
$PMF_LANG["msgViews"] = "oglądnięcia";
$PMF_LANG["msgPage"] = "Strona ";
$PMF_LANG["msgPages"] = " stron";
$PMF_LANG["msgPrevious"] = "poprzednia";
$PMF_LANG["msgNext"] = "następna";
$PMF_LANG["msgCategoryUp"] = "kategoria wyżej";
$PMF_LANG["msgLastUpdateArticle"] = "Zaktualizowano: ";
$PMF_LANG["msgAuthor"] = "Autor: ";
$PMF_LANG["msgPrinterFriendly"] = "wersja do wydruku";
$PMF_LANG["msgPrintArticle"] = "wydrukuj ten wpis";
$PMF_LANG["msgMakeXMLExport"] = "eksportuj jako XML";
$PMF_LANG["msgAverageVote"] = "Średnia ocena:";
$PMF_LANG["msgVoteUseability"] = "Oceń ten wpis:";
$PMF_LANG["msgVoteFrom"] = "z";
$PMF_LANG["msgVoteBad"] = "bezużyteczny";
$PMF_LANG["msgVoteGood"] = "najlepszy";
$PMF_LANG["msgVotings"] = "głosów";
$PMF_LANG["msgVoteSubmit"] = "głosuj";
$PMF_LANG["msgVoteThanks"] = "Dziękujemy za oddany głos!";
$PMF_LANG["msgYouCan"] = "Możesz ";
$PMF_LANG["msgWriteComment"] = "skomentować ten wpis";
$PMF_LANG["msgShowCategory"] = "Przegląd wpisu: ";
$PMF_LANG["msgCommentBy"] = "Komentarz ";
$PMF_LANG["msgCommentHeader"] = "Komentuj ten wpis";
$PMF_LANG["msgYourComment"] = "Twój komentarz:";
$PMF_LANG["msgCommentThanks"] = "Dziękujemy za komentarz!";
$PMF_LANG["msgSeeXMLFile"] = "otwórz plik XML";
$PMF_LANG["msgSend2Friend"] = "wyślij do znajomego";
$PMF_LANG["msgS2FName"] = "Imię i nazwisko:";
$PMF_LANG["msgS2FEMail"] = "Adres e-mail:";
$PMF_LANG["msgS2FFriends"] = "Twoi znajomi:";
$PMF_LANG["msgS2FEMails"] = ". ich adresy e-mail:";
$PMF_LANG["msgS2FText"] = "Tekst do wysłania:";
$PMF_LANG["msgS2FText2"] = "FAQ znajdziesz pod następującym adresem:";
$PMF_LANG["msgS2FMessage"] = "Dodatkowa informacja dla znajomych:";
$PMF_LANG["msgS2FButton"] = "wyślij pocztę";
$PMF_LANG["msgS2FThx"] = "Dziękujemy za polecenie naszych stron!";
$PMF_LANG["msgS2FMailSubject"] = "Rekommendacja od ";

// Search
$PMF_LANG["msgSearchWord"] = "Słowo kluczowe";
$PMF_LANG["msgSearchFind"] = "Wynik poszukiwania ";
$PMF_LANG["msgSearchAmount"] = " wynik poszukiwania";
$PMF_LANG["msgSearchAmounts"] = " wyniki poszukiwania";
$PMF_LANG["msgSearchCategory"] = "Kategoria: ";
$PMF_LANG["msgSearchContent"] = "Treść: ";

// new Content
$PMF_LANG["msgNewContentHeader"] = "Propozycja do FAQ";
$PMF_LANG["msgNewContentAddon"] = "Twoja propozycja zostanie opublikowana po zaakceptowaniu przez administratora. Pamiętaj, aby wypełnić <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong>, <strong>kategorię</strong>, <strong>nagłówek</strong> i <strong>treść pytania</strong>. Słowa kluczowe należy oddzielić spacją.";
$PMF_LANG["msgNewContentUBB"] = "<p>Możesz używać znaczników  UBB. <a href=\"help/ubbcode.php\" target=\"_blank\">Co to są znaczniki UBB</a></p>";
$PMF_LANG["msgNewContentName"] = "Imię i nazwisko:";
$PMF_LANG["msgNewContentMail"] = "Adres e-mail:";
$PMF_LANG["msgNewContentCategory"] = "Wybierz kategorię";
$PMF_LANG["msgNewContentTheme"] = "Nagłówek:";
$PMF_LANG["msgNewContentArticle"] = "Treść pytania:";
$PMF_LANG["msgNewContentKeywords"] = "Słowa kluczowe:";
$PMF_LANG["msgNewContentLink"] = "Link dodatkowy";
$PMF_LANG["msgNewContentSubmit"] = "wyślij";
$PMF_LANG["msgInfo"] = "Dodatkowe informacje: ";
$PMF_LANG["msgNewContentThanks"] = "Dziękujemy za wysłanie propozycji pytania!";
$PMF_LANG["msgNoQuestionsAvailable"] = "Obecnie brak nowych pytań.";

// ask Question
$PMF_LANG["msgNewQuestion"] = "Stąd możesz zadać pytanie.";
$PMF_LANG["msgAskCategory"] = "Kategoria, której dotyczy pytanie:";
$PMF_LANG["msgAskYourQuestion"] = "Treść pytania:";
$PMF_LANG["msgAskThx4Mail"] = "<h2>Dziękujemy za twój list.</h2>";
$PMF_LANG["msgDate_User"] = "Data / Użytkownik";
$PMF_LANG["msgQuestion2"] = "Pytanie";
$PMF_LANG["msg2answer"] = "odpowiedź";
$PMF_LANG["msgQuestionText"] = "Na tej stronie znajdują się pytania innych użytkowników. Możesz napisać odpowiedzi na te pytania i wówczas być może trafią one do zasobów FAQ.";

// Help
$PMF_LANG["msgHelpText"] = "<p>FAQ (<strong>F</strong>requently <strong>A</strong>sked <strong>Q</strong>uestions) posiada prostą strukturę. Przeszukiwać można <strong><a href=\"?aktion=anzeigen\">kategorie</a></strong> lub <strong><a href=\"?aktion=search\">używając wyszukiwarki FAQ</a></strong> przeszukiwać słowa kluczowe.</p>";

// Contact
$PMF_LANG["msgContactEMail"] = "e-mail do webmastera:";
$PMF_LANG["msgMessage"] = "Wiadomość:";

// Startseite
$PMF_LANG["msgNews"] = " - newsy";
$PMF_LANG["msgTopTen"] = "TOP 10";
$PMF_LANG["msgHomeThereAre"] = "Udostępniamy obecnie ";
$PMF_LANG["msgHomeArticlesOnline"] = " wpisów";
$PMF_LANG["msgNoNews"] = "Brak newsów.";
$PMF_LANG["msgLatestArticles"] = "5 ostatnich";

// E-Mailbenachrichtigung
$PMF_LANG["msgMailThanks"] = "Dziękuję za propozycje do naszego FAQ.";
$PMF_LANG["msgMailCheck"] = "Dodano nowy wpis do FAQ! Zajrzyj do sekcji administracyjnej.";
$PMF_LANG["msgMailContact"] = "Wiadomość wysłana do administratora.";

// Fehlermeldungen
$PMF_LANG["err_noDatabase"] = "Brak połączenia z bazą danych!";
$PMF_LANG["err_noHeaders"] = "Nie ma żadnej kategorii!";
$PMF_LANG["err_noArticles"] = "<p>Brak wpisów.</p>";
$PMF_LANG["err_badID"] = "<p>Błędny identyfikator!</p>";
$PMF_LANG["err_noTopTen"] = "<p>Jeszcze nie ma TOP 10.</p>";
$PMF_LANG["err_nothingFound"] = "<p>Brak wpisów.</p>";
$PMF_LANG["err_SaveEntries"] = "Wymagane pola: <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong>, <strong>kategoria</strong>, <strong>nagłówek</strong> oraz <strong>treść wpisu</strong>!<br /><br /><a href=\"javascript:history.back();\">wróć do poprzedniej strony</a><br /><br />";
$PMF_LANG["err_SaveComment"] = "Wymagane pola: <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong> oraz <strong>treść komentarza</strong>!<br /><br /><a href=\"javascript:history.back();\">wróć do poprzedniej strony</a><br /><br />";
$PMF_LANG["err_VoteTooMuch"] = "<p>Można głosować tylko jeden raz. <a href=\"javascript:history.back();\">wróć do poprzedniej strony</a>.</p>";
$PMF_LANG["err_noVote"] = "<p><strong>Nie oddałeś głosu!</strong> <a href=\"javascript:history.back();\">wejdź tutaj</a>, aby oddać głos.</p>";
$PMF_LANG["err_noMailAdress"] = "Nieprawidłowy adres e-mail.<br /><a href=\"javascript:history.back();\">wróć</a>";
$PMF_LANG["err_sendMail"] = "Wymagane pola: <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong> oraz <strong>treść wiadomości</strong>!<br /><br /><a href=\"javascript:history.back();\">wróć do poprzedniej strony</a><br /><br />";

// Hilfe zur Suche
$PMF_LANG["help_search"] = "<p><strong>Szukaj wpisu:</strong><br /></p>";

// Men&uuml;
$PMF_LANG["ad"] = "ADMINISTRACJA";
$PMF_LANG["ad_menu_user_administration"] = "Zarządzanie użytkownikami";
$PMF_LANG["ad_menu_entry_aprove"] = "Akceptuj wpisy";
$PMF_LANG["ad_menu_entry_edit"] = "Edytuj wpisy";
$PMF_LANG["ad_menu_categ_add"] = "Dodaj kategorię";
$PMF_LANG["ad_menu_categ_edit"] = "Edytuj kategorię";
$PMF_LANG["ad_menu_news_add"] = "Dodaj newsa";
$PMF_LANG["ad_menu_news_edit"] = "Edytuj newsa";
$PMF_LANG["ad_menu_open"] = "Edytuj pytania otwarte";
$PMF_LANG["ad_menu_stat"] = "Statystyka";
$PMF_LANG["ad_menu_cookie"] = "Cookies";
$PMF_LANG["ad_menu_session"] = "Sesje";
$PMF_LANG["ad_menu_adminlog"] = "Sesje Admina";
$PMF_LANG["ad_menu_passwd"] = "Zmień hasło";
$PMF_LANG["ad_menu_logout"] = "Wyloguj";
$PMF_LANG["ad_menu_startpage"] = "Początek";

// Nachrichten
$PMF_LANG["ad_msg_identify"] = "Podaj swój login.";
$PMF_LANG["ad_msg_passmatch"] = "Obydwa hasła muszą być <strong>identyczne</strong>!";
$PMF_LANG["ad_msg_savedsuc_1"] = "Profil";
$PMF_LANG["ad_msg_savedsuc_2"] = "zapisano pomyślnie.";
$PMF_LANG["ad_msg_mysqlerr"] = "Nie można zapisać profilu z powodu <strong>błędu bazy danych</strong>.";
$PMF_LANG["ad_msg_noauth"] = "Nie zostałeś zautoryzowany.";

// Allgemein
$PMF_LANG["ad_gen_page"] = "Strona";
$PMF_LANG["ad_gen_of"] = "z";
$PMF_LANG["ad_gen_lastpage"] = "Poprzednia strona";
$PMF_LANG["ad_gen_nextpage"] = "Następna strona";
$PMF_LANG["ad_gen_save"] = "Zapisz";
$PMF_LANG["ad_gen_reset"] = "Wyczyść";
$PMF_LANG["ad_gen_yes"] = "Tak";
$PMF_LANG["ad_gen_no"] = "Nie";
$PMF_LANG["ad_gen_top"] = "Na górę";
$PMF_LANG["ad_gen_ncf"] = "Nie znaleziono kategorii!";
$PMF_LANG["ad_gen_delete"] = "Kasuj";

// Benutzerverwaltung
$PMF_LANG["ad_user"] = "Administracja użytkownikami";
$PMF_LANG["ad_user_username"] = "Zarejestrowani użytkownicy";
$PMF_LANG["ad_user_rights"] = "Uprawnienia";
$PMF_LANG["ad_user_edit"] = "edytuj";
$PMF_LANG["ad_user_delete"] = "kasuj";
$PMF_LANG["ad_user_add"] = "Dodaj użytkownika";
$PMF_LANG["ad_user_profou"] = "Profil użytkownika";
$PMF_LANG["ad_user_name"] = "Imię";
$PMF_LANG["ad_user_password"] = "Hasło";
$PMF_LANG["ad_user_confirm"] = "Potwierdź";
$PMF_LANG["ad_user_rights"] = "Uprawnienia";
$PMF_LANG["ad_user_del_1"] = "Użytkownik";
$PMF_LANG["ad_user_del_2"] = "ma być skasowany?";
$PMF_LANG["ad_user_del_3"] = "Jesteś pewien?";
$PMF_LANG["ad_user_deleted"] = "Użytkownik został skasowany.";

// Beitragsverwaltung
$PMF_LANG["ad_entry_aor"] = "Administracja wpisami";
$PMF_LANG["ad_entry_id"] = "ID";
$PMF_LANG["ad_entry_topic"] = "Temat";
$PMF_LANG["ad_entry_action"] = "Akcja";
$PMF_LANG["ad_entry_edit_1"] = "Edytuj wpis";
$PMF_LANG["ad_entry_edit_2"] = "";
$PMF_LANG["ad_entry_theme"] = "Temat:";
$PMF_LANG["ad_entry_content"] = "Treść:";
$PMF_LANG["ad_entry_keywords"] = "Słowa kluczowe:";
$PMF_LANG["ad_entry_author"] = "Autor:";
$PMF_LANG["ad_entry_category"] = "Kategoria:";
$PMF_LANG["ad_entry_active"] = "Aktywować?";
$PMF_LANG["ad_entry_date"] = "Data:";
$PMF_LANG["ad_entry_changed"] = "Jakich dokonano zmian?";
$PMF_LANG["ad_entry_changelog"] = "Histria zmian:";
$PMF_LANG["ad_entry_commentby"] = "Komentowane przez";
$PMF_LANG["ad_entry_comment"] = "Komentarze:";
$PMF_LANG["ad_entry_save"] = "Zapisz";
$PMF_LANG["ad_entry_delete"] = "kasuj";
$PMF_LANG["ad_entry_delcom_1"] = "Czy na pewno komentarz użytkownika";
$PMF_LANG["ad_entry_delcom_2"] = "ma być skasowany?";
$PMF_LANG["ad_entry_commentdelsuc"] = "Komentarz został <strong>skasowany</strong>.";
$PMF_LANG["ad_entry_back"] = "Wróć do artykułu";
$PMF_LANG["ad_entry_commentdelfail"] = "Komentarz <strong>nie został</strong> skasowany.";
$PMF_LANG["ad_entry_savedsuc"] = "Zmiany zostały <strong>zapisane</strong>.";
$PMF_LANG["ad_entry_savedfail"] = "Wystąpił <strong>błąd bazy danych</strong>.";
$PMF_LANG["ad_entry_del_1"] = "Czy na pewno temat";
$PMF_LANG["ad_entry_del_2"] = "z";
$PMF_LANG["ad_entry_del_3"] = "ma być skasowany?";
$PMF_LANG["ad_entry_delsuc"] = "Pozycja została <strong>skasowana</strong>.";
$PMF_LANG["ad_entry_delfail"] = "Pozycja <strong>nie została</strong> skasowana.";
$PMF_LANG["ad_entry_back"] = "Wróć";


// Newsverwaltung
$PMF_LANG["ad_news_header"] = "Nagłówek artykułu";
$PMF_LANG["ad_news_text"] = "Treść wpisu";
$PMF_LANG["ad_news_link_url"] = "Łącze: (<strong>bez http://</strong>)!";
$PMF_LANG["ad_news_link_title"] = "Tytuł łącza:";
$PMF_LANG["ad_news_link_target"] = "Okno docelowe łącza";
$PMF_LANG["ad_news_link_window"] = "Łącze otwiera się w nowym oknie";
$PMF_LANG["ad_news_link_faq"] = "Łącze otwiera się w FAQ";
$PMF_LANG["ad_news_add"] = "Dodaj newsa";
$PMF_LANG["ad_news_id"] = "#";
$PMF_LANG["ad_news_headline"] = "Nagłówek";
$PMF_LANG["ad_news_date"] = "Data";
$PMF_LANG["ad_news_action"] = "Akcja";
$PMF_LANG["ad_news_update"] = "aktualizuj";
$PMF_LANG["ad_news_delete"] = "kasuj";
$PMF_LANG["ad_news_nodata"] = "Brak danych w bazie";
$PMF_LANG["ad_news_updatesuc"] = "Newsy zaktualizowano.";
$PMF_LANG["ad_news_del"] = "Czy na pewno chcesz skasować te newsy?";
$PMF_LANG["ad_news_yesdelete"] = "tak, kasuj!";
$PMF_LANG["ad_news_nodelete"] = "nie!";
$PMF_LANG["ad_news_delsuc"] = "News skasowany.";
$PMF_LANG["ad_news_updatenews"] = "Aktualizacja newsów";

// Kategorieverwaltung
$PMF_LANG["ad_categ_new"] = "Dodaj nową kategorię";
$PMF_LANG["ad_categ_catnum"] = "Numer kategorii:";
$PMF_LANG["ad_categ_subcatnum"] = "Numer podkategorii:";
$PMF_LANG["ad_categ_nya"] = "<em>jeszcze nic nie odpublikowano!</em>";
$PMF_LANG["ad_categ_titel"] = "Tytuł kategorii:";
$PMF_LANG["ad_categ_add"] = "Dodaj kategorię";
$PMF_LANG["ad_categ_existing"] = "Istniejące kategorie";
$PMF_LANG["ad_categ_id"] = "#";
$PMF_LANG["ad_categ_categ"] = "Kategoria";
$PMF_LANG["ad_categ_subcateg"] = "Podkategoria";
$PMF_LANG["ad_categ_titel"] = "Tytuł kategorii";
$PMF_LANG["ad_categ_action"] = "Akcja";
$PMF_LANG["ad_categ_update"] = "aktualizacja";
$PMF_LANG["ad_categ_delete"] = "kasuj";
$PMF_LANG["ad_categ_updatecateg"] = "Aktualizuj kategorię";
$PMF_LANG["ad_categ_nodata"] = "Brak danych w bazie";
$PMF_LANG["ad_categ_remark"] = "W przypadku usunięcia kategorii, skasowane zostą wszystkie wpisy znajdujące się w tej kategorii. W takim przypkadu przenieś wpisy do nowej kategorii lub usuń wpis.";
$PMF_LANG["ad_categ_edit_1"] = "Edytuj";
$PMF_LANG["ad_categ_edit_2"] = "Kategoria";
$PMF_LANG["ad_categ_add"] = "Dodaj kategorię";
$PMF_LANG["ad_categ_added"] = "Kategoria została dodana.";
$PMF_LANG["ad_categ_updated"] = "Kategoria została zaktualizowana.";
$PMF_LANG["ad_categ_del_yes"] = "tak, kasuj!";
$PMF_LANG["ad_categ_del_no"] = "nie!";
$PMF_LANG["ad_categ_deletesure"] = "Czy na pewno chcesz skasować tę kategorię?";
$PMF_LANG["ad_categ_deleted"] = "Kategoria została skasowana.";

// Cookies
$PMF_LANG["ad_cookie_cookiesuc"] = "Cookie <strong>pomyślnie</strong> ustawiono.";
$PMF_LANG["ad_cookie_already"] = "Cookie już ustawiono. Obecnie możesz:";
$PMF_LANG["ad_cookie_again"] = "ustawić cookie ponownie";
$PMF_LANG["ad_cookie_delete"] = "skasować cookie";
$PMF_LANG["ad_cookie_no"] = "Cookie jeszcze nie ustawiono. Ustawiając cookie możesz się ponownie logować bez podawania hasła i loginu. Obecnie możesz:";
$PMF_LANG["ad_cookie_set"] = "ustawić cookie";
$PMF_LANG["ad_cookie_deleted"] = "Cookie zostało skasowane.";

// Adminlog
$PMF_LANG["ad_adminlog"] = "Sesje Admina";

// Passwd
$PMF_LANG["ad_passwd_cop"] = "Zmień hasło";
$PMF_LANG["ad_passwd_old"] = "Dotychczasowe hasło:";
$PMF_LANG["ad_passwd_new"] = "Nowe hasło:";
$PMF_LANG["ad_passwd_con"] = "Potwierdź:";
$PMF_LANG["ad_passwd_change"] = "Zmień hasło";
$PMF_LANG["ad_passwd_suc"] = "Hasło zostało zmienione.";
$PMF_LANG["ad_passwd_remark"] = "<strong>UWAGA:</strong><br />Cookie musi być ponownie ustawione!";
$PMF_LANG["ad_passwd_fail"] = "Dotychczasowe hasło musi być <strong>poprawne</strong>, natomiast nowe hasło musi być wpisane dwukrotnie.";

// Adduser
$PMF_LANG["ad_adus_adduser"] = "Dodaj użytkownika";
$PMF_LANG["ad_adus_name"] = "Login:";
$PMF_LANG["ad_adus_password"] = "Hasło:";
$PMF_LANG["ad_adus_add"] = "Dodaj użytkownika";
$PMF_LANG["ad_adus_suc"] = "Użytkownik został dodany.";
$PMF_LANG["ad_adus_edit"] = "Edytuj profil";
$PMF_LANG["ad_adus_dberr"] = "<strong>błąd bazy danych!</strong>";
$PMF_LANG["ad_adus_exerr"] = "Podane imię już <strong>istnieje</strong> - podaj inne.";

// Sessions
$PMF_LANG["ad_sess_id"] = "ID";
$PMF_LANG["ad_sess_sid"] = "ID sesji";
$PMF_LANG["ad_sess_ip"] = "IP";
$PMF_LANG["ad_sess_time"] = "Czas";
$PMF_LANG["ad_sess_pageviews"] = "Wyświetleń";
$PMF_LANG["ad_sess_search"] = "Szukaj";
$PMF_LANG["ad_sess_sfs"] = "Szukaj sesji";
$PMF_LANG["ad_sess_s_ip"] = "IP:";
$PMF_LANG["ad_sess_s_minct"] = "min. Actions:";
$PMF_LANG["ad_sess_s_date"] = "Data";
$PMF_LANG["ad_sess_s_after"] = "po";
$PMF_LANG["ad_sess_s_before"] = "przed";
$PMF_LANG["ad_sess_s_search"] = "Szukaj";
$PMF_LANG["ad_sess_session"] = "Sesje";
$PMF_LANG["ad_sess_r"] = "Wynik poszukiwania";
$PMF_LANG["ad_sess_referer"] = "Referer:";
$PMF_LANG["ad_sess_browser"] = "Przeglądarka:";
$PMF_LANG["ad_sess_ai_rubrik"] = "Kategoria:";
$PMF_LANG["ad_sess_ai_artikel"] = "Wpis:";
$PMF_LANG["ad_sess_ai_sb"] = "Wyszukiwane frazy:";
$PMF_LANG["ad_sess_ai_sid"] = "ID sesji:";
$PMF_LANG["ad_sess_back"] = "Wróć";

// Statistik
$PMF_LANG["ad_rs"] = "Statystyka ocen";
$PMF_LANG["ad_rs_rating_1"] = "Ranking ";
$PMF_LANG["ad_rs_rating_2"] = "wynurzeń użytkowników:";
$PMF_LANG["ad_rs_red"] = "Czerwony";
$PMF_LANG["ad_rs_green"] = "Zielony";
$PMF_LANG["ad_rs_altt"] = "ze średnią poniżej 2";
$PMF_LANG["ad_rs_ahtf"] = "ze średnią powyżej 4";
$PMF_LANG["ad_rs_no"] = "Nie ma jeszcze żadnego rankingu";

// Auth
$PMF_LANG["ad_auth_insert"] = "Podaj swój login (imię) i hasło.";
$PMF_LANG["ad_auth_user"] = "Login:";
$PMF_LANG["ad_auth_passwd"] = "Hasło:";
$PMF_LANG["ad_auth_ok"] = "Gotowe";
$PMF_LANG["ad_auth_reset"] = "Wyczyść";
$PMF_LANG["ad_auth_fail"] = "Nie ma takiej pary loginu i hasła.";
$PMF_LANG["ad_auth_sess"] = "Sesja wygasła.";

// Added v0.8 - 24.05.2001 - Bastian - Admin
$PMF_LANG["ad_config_edit"] = "Edytuj konfigurację";
$PMF_LANG["ad_config_save"] = "Zapisz konfigurację";
$PMF_LANG["ad_config_reset"] = "Wyczyść";
$PMF_LANG["ad_config_saved"] = "Konfiguracja została zapisana.";
$PMF_LANG["ad_menu_editconfig"] = "Edytuj konfigurację";
$PMF_LANG["ad_att_none"] = "Nie ma załączników";
$PMF_LANG["ad_att_att"] = "Załączniki:";
$PMF_LANG["ad_att_add"] = "Dołącz plik";
$PMF_LANG["ad_entryins_suc"] = "Wpis został zachowany.";
$PMF_LANG["ad_entryins_fail"] = "Wystąpił niespodziewany błąd.";
$PMF_LANG["ad_att_del"] = "Kasuj";
$PMF_LANG["ad_att_nope"] = "Załączniki dostępne są tylko podczas edycji.";
$PMF_LANG["ad_att_delsuc"] = "Załącznik został skasowany.";
$PMF_LANG["ad_att_delfail"] = "Wystąpił niespodziewany błąd podczas kasowania załącznika.";
$PMF_LANG["ad_entry_add"] = "Dodaj wpis";

// Added v0.85 - 08.06.2001 - Bastian - Admin
$PMF_LANG["ad_csv_make"] = "Kopia zapasowa jest dokładnym odzwierciedleniem zawartości bazy danych. Kopia powinna być wykonywana przynajmniej raz na miesiąc. Format kopii zapasowej pozwala na jej bezpośredni import np. do phpMyAdmina  przez linię poleceń mysql.";
$PMF_LANG["ad_csv_link"] = "Pobierz kopię zapasową";
$PMF_LANG["ad_csv_head"] = "Utwórz kopię zapasową";
$PMF_LANG["ad_att_addto"] = "Dodaj załącznik";
$PMF_LANG["ad_att_addto_2"] = "";
$PMF_LANG["ad_att_att"] = "Plik:";
$PMF_LANG["ad_att_butt"] = "Gotowe";
$PMF_LANG["ad_att_suc"] = "Plik został dodany.";
$PMF_LANG["ad_att_fail"] = "Wystąpił niespodziewany błąd podczas dodawania załącznika.";
$PMF_LANG["ad_att_close"] = "zamknij to okno";

// Added v0.85 - 08.07.2001 - Bastian - Admin
$PMF_LANG["ad_csv_restore"] = "Przy pomocy tego formularza możesz przywrócić z kopii zapasowej phpmyfaq zawartość bazy danych. Zauważ, że wpisy już istniejące w aktualizowanej bazie phpmyfaq będą nadpisane.";
$PMF_LANG["ad_csv_file"] = "Plik";
$PMF_LANG["ad_csv_ok"] = "Gotowe";
$PMF_LANG["ad_csv_linklog"] = "kopia logów";
$PMF_LANG["ad_csv_linkdat"] = "kopia danych";
$PMF_LANG["ad_csv_head2"] = "Przywróć";
$PMF_LANG["ad_csv_no"] = "Format jest niezgodny z formatem stosowanym w phpmyfaq.";
$PMF_LANG["ad_csv_prepare"] = "Przygotowuję zapytania do bazy danych...";
$PMF_LANG["ad_csv_process"] = "Wysyłam zapytania...";
$PMF_LANG["ad_csv_of"] = "z";
$PMF_LANG["ad_csv_suc"] = "zakończono pomyślnie.";
$PMF_LANG["ad_csv_backup"] = "Kopia zapasowa";
$PMF_LANG["ad_csv_rest"] = "Przywróć z kopii";

// Added v0.8 - 25.05.2001 - Bastian - Admin
$PMF_LANG["ad_menu_backup"] = "Kopia zapasowa";
$PMF_LANG["ad_logout"] = "Zostałeś wylogowany.";
$PMF_LANG["ad_news_add"] = "Dodaj newsa";
$PMF_LANG["ad_news_edit"] = "Edytuj newsa";
$PMF_LANG["ad_cookie"] = "Cookies";
$PMF_LANG["ad_sess_head"] = "Sesje";

// Added v1.1 - 06.01.2002 - Bastian
$PMF_LANG["ad_menu_categ_edit"] = "Adminstracja kategoriami";
$PMF_LANG["ad_menu_stat"] = "Statystyka ocen";
$PMF_LANG["ad_kateg_add"] = "dodaj kategorię";
$PMF_LANG["ad_kateg_rename"] = "Zmień nazwę";
$PMF_LANG["ad_adminlog_date"] = "Data";
$PMF_LANG["ad_adminlog_user"] = "Użytkownik";
$PMF_LANG["ad_adminlog_ip"] = "Adres IP";

$PMF_LANG["ad_stat_sess"] = "Sesje";
$PMF_LANG["ad_stat_days"] = "Dni";
$PMF_LANG["ad_stat_vis"] = "Sesji (Wizyt)";
$PMF_LANG["ad_stat_vpd"] = "Wizyt dziennie";
$PMF_LANG["ad_stat_fien"] = "Pierwszy dziennik";
$PMF_LANG["ad_stat_laen"] = "Ostatni dziennik";
$PMF_LANG["ad_stat_browse"] = "przeglądaj sesje";
$PMF_LANG["ad_stat_ok"] = "Gotowe";

$PMF_LANG["ad_sess_time"] = "Czas";
$PMF_LANG["ad_sess_sid"] = "ID-sesji";
$PMF_LANG["ad_sess_ip"] = "Adres IP";

$PMF_LANG["ad_ques_take"] = "Wybierz pytanie i edytuj";
$PMF_LANG["no_cats"] = "Brak kategorii!";

// Added v1.1 - 17.01.2002 - Bastian
$PMF_LANG["ad_log_lger"] = "Nieprawidłowy login lub hasło.";
$PMF_LANG["ad_log_sess"] = "Sesja wygasła.";
$PMF_LANG["ad_log_edit"] = "Formularz \"Edytuj użytkownika\" dla: ";
$PMF_LANG["ad_log_crea"] = "Formularz \"Nowy artykuł\".";
$PMF_LANG["ad_log_crsa"] = "Dodano nowy wpis.";
$PMF_LANG["ad_log_ussa"] = "Aktualizuj dane użytkownika: ";
$PMF_LANG["ad_log_usde"] = "Kasuj użytkownika: ";
$PMF_LANG["ad_log_beed"] = "Formularz dla użytkownika: ";
$PMF_LANG["ad_log_bede"] = "Skasowano następujące wpisy: ";

$PMF_LANG["ad_start_visits"] = "Wizyty";
$PMF_LANG["ad_start_articles"] = "Artykuły";
$PMF_LANG["ad_start_comments"] = "Komentarze";



// Added v1.1 - 30.01.2002 - Bastian
$PMF_LANG["ad_categ_paste"] = "wklej";
$PMF_LANG["ad_categ_cut"] = "wytnij";
$PMF_LANG["ad_categ_copy"] = "kopiuj";
$PMF_LANG["ad_categ_process"] = "Przetwarzam kategorie...";

// Added v1.1.4 - 07.05.2002 - Thorsten
$PMF_LANG["err_NotAuth"] = "<strong>Nie masz uprawnień.</strong>";

// Added v1.2.3 - 29.11.2002 - Thorsten
$PMF_LANG["msgPreviusPage"] = "poprzednia strona";
$PMF_LANG["msgNextPage"] = "następna strona";
$PMF_LANG["msgPageDoublePoint"] = "Strona: ";
$PMF_LANG["msgMainCategory"] = "Główna kategoria";

// Added v1.2.4 - 30.01.2003 - Thorsten
$PMF_LANG["ad_passwdsuc"] = "Hasło zostało zmienione!";

// Added v1.3.0 - 04.03.2003 - Thorsten
$PMF_LANG["msgPDF"] = "Wyświetl jako plik PDF";
$PMF_LANG["ad_xml_head"] = "kopia XML";
$PMF_LANG["ad_xml_hint"] = "Zapisz wszystkie pytania FAQ do pliku XML.";
$PMF_LANG["ad_xml_gen"] = "utwórz plik XML";
$PMF_LANG["ad_entry_locale"] = "Język";
$PMF_LANG["msgLangaugeSubmit"] = "Zmień język";

// Added v1.3.1 - 17.04.2003 - Thorsten

$PMF_LANG["ad_entry_preview"] = "Podgląd";
$PMF_LANG["ad_attach_1"] = "Najpierw należy w konfiguracji wskazać katalog dla załączników.";
$PMF_LANG["ad_attach_2"] = "Najpierw należy w konfiguracji wybrać link do załączników.";
$PMF_LANG["ad_attach_3"] = "Do otwarcia skryptu attachment.php konieczna jest autoryzacja.";
$PMF_LANG["ad_attach_4"] = "Dołączany plik musi być mniejszy niż  %s Bitów.";
$PMF_LANG["ad_menu_export"] = "Eksportuj FAQ";
$PMF_LANG["ad_export_1"] = "Budowanie RSS włączone";
$PMF_LANG["ad_export_2"] = ".";
$PMF_LANG["ad_export_file"] = "Błąd: nie można zapisać pliku.";
$PMF_LANG["ad_export_news"] = "Nagłówki RSS";
$PMF_LANG["ad_export_topten"] = "RSS Top 10";
$PMF_LANG["ad_export_latest"] = "5 ostatnich nagłówków RSS";
$PMF_LANG["ad_export_pdf"] = "Eksport wszystkich wpisów do PDF";
$PMF_LANG["ad_export_generate"] = "budowanie RSS";

$PMF_LANG["rightsLanguage"]['adduser'] = "dodaj użytkownika";
$PMF_LANG["rightsLanguage"]['edituser'] = "edytuj użytkownika";
$PMF_LANG["rightsLanguage"]['deluser'] = "usuń użytkownika";
$PMF_LANG["rightsLanguage"]['addbt'] = "dodaj wpis";
$PMF_LANG["rightsLanguage"]['editbt'] = "edytuj wpis";
$PMF_LANG["rightsLanguage"]['delbt'] = "usuń użytkownika";
$PMF_LANG["rightsLanguage"]['viewlog'] = "pokaż dziennik";
$PMF_LANG["rightsLanguage"]['adminlog'] = "pokaż dziennik admina";
$PMF_LANG["rightsLanguage"]['delcomment'] = "usuń komentarz";
$PMF_LANG["rightsLanguage"]['addnews'] = "dodaj newsa";
$PMF_LANG["rightsLanguage"]['editnews'] = "edytuj newsa";
$PMF_LANG["rightsLanguage"]['delnews'] = "usuń newsa";
$PMF_LANG["rightsLanguage"]['addcateg'] = "dodaj kategorię";
$PMF_LANG["rightsLanguage"]['editcateg'] = "edytuj kategorię";
$PMF_LANG["rightsLanguage"]['delcateg'] = "usuń kategorię";
$PMF_LANG["rightsLanguage"]['passwd'] = "zmień hasło";
$PMF_LANG["rightsLanguage"]['editconfig'] = "edytuj konfigurację";
$PMF_LANG["rightsLanguage"]['addatt'] = "dodaj załączniki";
$PMF_LANG["rightsLanguage"]['delatt'] = "usuń załączniki";
$PMF_LANG["rightsLanguage"]['backup'] = "utwórz kopię bezpieczeństwa";
$PMF_LANG["rightsLanguage"]['restore'] = "odtwórz z kopii";
$PMF_LANG["rightsLanguage"]['delquestion'] = "usuń pytania otwarte";

$PMF_LANG["msgAttachedFiles"] = "pliki dołączone:";

// Added v1.3.3 - 27.05.2003 - Thorsten
$PMF_LANG["ad_user_action"] = "akcja";
$PMF_LANG["ad_entry_email"] = "Adres e-mail:";
$PMF_LANG["ad_entry_allowComments"] = "włącz komentarze";
$PMF_LANG["msgWriteNoComment"] = "Nie możesz komentować tego wpisu";
$PMF_LANG["ad_user_realname"] = "Imię i nazwisko:";
$PMF_LANG["ad_export_generate_pdf	"] = "wygeneruj plik PDF";
$PMF_LANG["ad_export_full_faq"] = "FAQ w pliku PDF: ";
$PMF_LANG["err_bannedIP"] = "Twój numer IP został zablokowany.";
$PMF_LANG["err_SaveQuestion"] = "Pola wymagane: <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong> i <strong>treść pytania</strong>!<br /><br /><a href=\"javascript:history.back();\">wróć na poprzednią stronę</a><br /><br />";

// added v1.3.4 - 23.07.2003 - Thorsten
$PMF_LANG["ad_entry_fontcolor"] = "Kolor czcionki: ";
$PMF_LANG["ad_entry_fontsize"] = "Wielkość czcionki: ";

// added v1.4.0 - 2003-12-04 by Thorsten / Mathias
$LANG_CONF['main.language'] = array(0 => "select", 1 => "Plik językowy");
$LANG_CONF["main.languageDetection"] = array(0 => "checkbox", 1 => "Włącz automatyczną negocjację treści");
$LANG_CONF['main.titleFAQ'] = array(0 => "input", 1 => "Tytuł FAQ");
$LANG_CONF['main.currentVersion'] = array(0 => "print", 1 => "Wersja FAQ");
$LANG_CONF["main.metaDescription"] = array(0 => "input", 1 => "Opis strony");
$LANG_CONF["main.metaKeywords"] = array(0 => "input", 1 => "Słowa kluczowe dla wyszukiwarek");
$LANG_CONF["main.metaPublisher"] = array(0 => "input", 1 => "Imię autora");
$LANG_CONF['main.administrationMail'] = array(0 => "input", 1 => "Adres e-mail administraotra");
$LANG_CONF["main.contactInformations"] = array(0 => "area", 1 => "Informacje kontaktowe");
$LANG_CONF["main.send2friendText"] = array(0 => "area", 1 => "Tekst na stronie \"Wyślij do znajomego\"");
$LANG_CONF['main.maxAttachmentSize'] = array(0 => "input", 1 => "maksymalny rozmiar załącznika w bajtach (maks. %sbajtów)");
$LANG_CONF["main.disableAttachments"] = array(0 => "checkbox", 1 => "Linkować załaczniki pod wpisami?");
$LANG_CONF["main.enableUserTracking"] = array(0 => "checkbox", 1 => "Używać statystyk?");
$LANG_CONF["main.enableAdminLog"] = array(0 => "checkbox", 1 => "Używać logowania działań administratora?");
$LANG_CONF["main.ipCheck"] = array(0 => "checkbox", 1 => "Sprawdzać IP podczas kontroli UIN-ów w admin.php?");
$LANG_CONF["main.numberOfRecordsPerPage"] = array(0 => "input", 1 => "Liczba wyswietlanych tematów na stronę");
$LANG_CONF["main.numberOfShownNewsEntries"] = array(0 => "input", 1 => "Liczba newsów");
$LANG_CONF['main.bannedIPs'] = array(0 => "area", 1 => "Zbanuj te adresy IP");
$LANG_CONF["main.enableRewriteRules"] = array(0 => "checkbox", 1 => "Użyć wsparcia dla mod_rewrite? (domyślnie wyłączone)");
$LANG_CONF["main.ldapSupport"] = array(0 => "checkbox", 1 => "Użyć wsparcia dla LDAP? (domyślnie wyłączone)");

$PMF_LANG["ad_categ_new_main_cat"] = "jako nową główną kategorię";
$PMF_LANG["ad_categ_paste_error"] = "Przesunięcie tej kategorii nie jest możliwe.";
$PMF_LANG["ad_categ_move"] = "przesuń kategorię";
$PMF_LANG["ad_categ_lang"] = "Język";
$PMF_LANG["ad_categ_desc"] = "Opis";
$PMF_LANG["ad_categ_change"] = "Zamień na";

$PMF_LANG["lostPassword"] = "Zapomniałeś hasła? Kliknij tutaj.";
$PMF_LANG["lostpwd_err_1"] = "Błąd: nie znaleziono loginu i adresu e-mail";
$PMF_LANG["lostpwd_err_2"] = "Błąd: złe wpisy!";
$PMF_LANG["lostpwd_text_1"] = "Żądanie zrealizowane, dziękujemy.";
$PMF_LANG["lostpwd_text_2"] = "Ustaw nowe osobiste hasło w części administracyjnej twojego FAQ.";
$PMF_LANG["lostpwd_mail_okay"] = "E-mail został wysłany.";

$PMF_LANG["ad_xmlrpc_button"] = "Sprawdź najnowszą wersję phpMyFAQ";
$PMF_LANG["ad_xmlrpc_latest"] = "Najnowsza dostępna wersja na";

// added v1.5.1 - 2005-09-06 by Thorsten
$PMF_LANG['msgSitemap'] = 'Mapa serwisu';

// added v2.5.0 - 2009-08-04 by DarGrze
$PMF_LANG['msgInstantResponse'] = 'Natychmiastowa odpowiedź';
$PMF_LANG['msgInstantResponseMaxRecords'] = '. Wyświetl pierwsze %d rekordów.';
$PMF_LANG['msgRegisterUser'] = 'Nie masz konta? Zarejestruj się.';
$PMF_LANG['msgUsersOnline'] = ' :: %d gości, %d zarejestrowanych';
$PMF_LANG['newsShowArchive'] = 'Wyświetl archiwum.';
$PMF_LANG['stickyRecordsHeader'] = 'Przyklejone';
$PMF_LANG['msgAdvancedSearch'] = 'Wyszukiwanie zaawansowane';
$PMF_LANG['msgCaptcha'] = "Wpisz znaki, które widzisz na obrazku";
$PMF_LANG['msgSearchOnAllLanguages'] = 'Przeszukaj we wszystkich językach:';
$PMF_LANG['msgSelectCategories'] = 'Szukaj w...';
$PMF_LANG['msgAllCategories'] = '- wszystkie kategorie -';
$PMF_LANG['opensearch_plugin_install'] = 'Dodaj plugin do przeglądarki';
$PMF_LANG['msgMostPopularSearches'] = 'Najczęściej wyszukiwane:';
$PMF_LANG['msgDescriptionInstantResponse'] = 'Wpisz poszukiwane słowo...';
$LANG_CONF['main.attachmentsPath'] = array(0 => "input", 1 => "Ścieżka dla zapisu załączników.<br /><small>Ścieżka względna, czyli folder po obcięciu web root.</small>");
$LANG_CONF['main.enableWysiwygEditor'] = array(0 => "checkbox", 1 => "Użyj wbudowanego edytora WYSIWYG (domyślnie włączony)");
$LANG_CONF['main.permLevel'] = array(0 => "select", 1 => "Poziom uprawnień");
$LANG_CONF['main.referenceURL'] = array(0 => "input", 1 => "URL bazowy dla weryfikacji linku (e.g.: http://www.example.org/faq)");
$LANG_CONF['main.urlValidateInterval'] = array(0 => "input", 1 => "Interwał weryfikacji linku dla AJAX-a (w sekundach)");
$LANG_CONF['records.defaultActivation'] = array(0 => "checkbox", 1 => "Aktywuj nowe rekordy (domyślnie nieaktywne)");
$LANG_CONF['records.defaultAllowComments'] = array(0 => "checkbox", 1 => "Zezwól na komentarze do nowych rekordów (domyślnie zabronione)");
$LANG_CONF['records.enableVisibilityQuestions'] = array(0 => "checkbox", 1 => "Czy wyłączyć widoczność nowych pytań?");
$LANG_CONF['records.numberOfRelatedArticles'] = array(0 => "input", 1 => "Ilość wpisów powiązanych");
$LANG_CONF['records.orderby'] = array(0 => "select", 1 => "Sortowanie rekordów (stosownie do własności)");
$LANG_CONF['records.sortby'] = array(0 => "select", 1 => "Kierunek sortowania rekordów (malejąco lub rosnąco)");
$LANG_CONF['spam.checkBannedWords'] = array(0 => "checkbox", 1 => "Sprawdzaj formularze publiczne na występowanie słów zabronionych (domyślnie włączone).");
$LANG_CONF['spam.enableCatpchaCode'] = array(0 => "checkbox", 1 => "Używaj captcha do zatwierdzania publicznych formularzy (domyślnie włączone).");
$LANG_CONF['spam.enableSafeEmail'] = array(0 => "checkbox", 1 => "Wyświetlaj adres e-mail użytkownika w sposób bezpieczny (domyślnie włączone).");
$PMF_LANG['rightsLanguage']['addglossary'] = "dodaj do glosariusza";
$PMF_LANG['rightsLanguage']['editglossary'] = "edytuj w glosariuszu";
$PMF_LANG['rightsLanguage']['delglossary'] = "usuń z glosariusza";
$PMF_LANG['rightsLanguage']['addgroup'] = "dodaj grupę kont";
$PMF_LANG['rightsLanguage']['editgroup'] = "edytuj grupę kont";
$PMF_LANG['rightsLanguage']['delgroup'] = "usuń grupę kont";
$PMF_LANG['rightsLanguage']['changebtrevs'] = "edytuj rewizje";

$PMF_LANG['ad_adminlog_delete_failure'] = 'Nie usunięto logów: błąd podczas realizacji żądania.';
$PMF_LANG['ad_adminlog_delete_success'] = 'Starsze logi zostały poprawnie usunięte.';
$PMF_LANG['ad_adminlog_del_older_30d'] = 'Usuń natychmiast logi starsze niż 30 dni';
$PMF_LANG["ad_categ_deletealllang"] = 'Usunąć we wszystkich językach?';
$PMF_LANG["ad_categ_deletethislang"] = 'Usunąć wyłącznie w tym języku?';
$PMF_LANG["ad_categ_owner"] = 'Właściciel kategorii';
$PMF_LANG["ad_categ_paste2"] = "Wklej za";
$PMF_LANG["ad_categ_remark_move"] = "Zamiana dwóch kategorii możliwa jest tylko na tym samym poziomie.";
$PMF_LANG["ad_categ_remark_overview"] = "Kategorie zostaną uporządkowane właściwie tylko jeśli wszystkie zdefiniujesz w aktualnym języku (pierwsza kolumna).";
$PMF_LANG['ad_categ_select'] = 'Wybierz język kategorii';
$PMF_LANG["ad_categ_show"] = "Podgląd";
$PMF_LANG['ad_categ_trans_1'] = 'Tłumacz';
$PMF_LANG['ad_categ_trans_2'] = 'Kategoria';
$PMF_LANG['ad_categ_transalready'] = 'Przetłumaczona na: ';
$PMF_LANG['ad_categ_translatecateg'] = 'Tumacz kategorię';
$PMF_LANG['ad_categ_translate'] = 'Tłumacz';
$PMF_LANG['ad_categ_translated'] = "Kategoria przetłumaczona poprawnie.";
$PMF_LANG['ad_changerev'] = 'Wybierz rewizję';
$PMF_LANG['ad_comment_administration'] = 'Administracja kompentarzy';
$PMF_LANG['ad_comment_faqs'] = 'Komentarze we wpisach FAQ:';
$PMF_LANG['ad_comment_news'] = 'Komentarze w Newsach:';
$PMF_LANG['ad_conf_asc'] = 'rosnąco';
$PMF_LANG['ad_conf_desc'] = 'malejąco';
$PMF_LANG['ad_config_stopword_input'] = 'Dodaj nowy wyraz pomijany';
$PMF_LANG['ad_conf_order_author'] = 'Autor';
$PMF_LANG['ad_conf_order_datum'] = 'Data';
$PMF_LANG['ad_conf_order_id'] = 'ID (domyślne)';
$PMF_LANG['ad_conf_order_thema'] = 'Tytuł';
$PMF_LANG['ad_conf_order_visits'] = 'Liczba odwiedzających';
$PMF_LANG['ad_entry_all_groups'] = 'Wszystkie';
$PMF_LANG['ad_entry_all_users'] = 'Wszyscy';
$PMF_LANG['ad_entry_changelog'] = 'Rejestr zmian';
$PMF_LANG['ad_entry_faq_record'] = 'wpis FAQ';
$PMF_LANG['ad_entry_grouppermission'] = 'Uprawnienia grup:';
$PMF_LANG['ad_entry_intlink'] = 'Wybierz wpis FAQ do wstawienia jako link...';
$PMF_LANG['ad_entry_new_revision'] = 'Stworzyć nową rewizję?';
$PMF_LANG['ad_entry_record_administration'] = 'Administracja wpisem';
$PMF_LANG['ad_entry_restricted_groups'] = 'Dostęp ograniczony do';
$PMF_LANG['ad_entry_restricted_users'] = 'Dostęp ograniczony do';
$PMF_LANG['ad_entry_revision'] = 'Rewizja';
$PMF_LANG['ad_entry_solution_id'] = 'Unikalny ID rozwiązania';
$PMF_LANG['ad_entry_sticky'] = 'Przyklejony';
$PMF_LANG['ad_entry_tags'] = 'Tagi';
$PMF_LANG['ad_entry_userpermission'] = 'Uprawnienia:';
$PMF_LANG['ad_entry_visibility'] = 'Publikować?';
$PMF_LANG['ad_export_cat_downwards'] = 'W dół?';
$PMF_LANG['ad_export_download_view'] = 'Pobrać czy wyświetlić?';
$PMF_LANG['ad_export_download'] = 'pobierz';
$PMF_LANG['ad_export_gen_docbook'] = 'Utwórz plik Docbook';
$PMF_LANG["ad_export_generate_pdf"] = "wygeneruj plik PDF";
$PMF_LANG['ad_export_gen_xhtml'] = 'Wygeneruj plik XHTML';
$PMF_LANG['ad_export_type'] = 'Format eksportu';
$PMF_LANG['ad_export_type_choose'] = 'Wybierz jeden z formatów:';
$PMF_LANG['ad_export_view'] = 'wyświetl';
$PMF_LANG['ad_export_which_cat'] = 'Limit danych FAQ do wyeksportowania (opcjonalnie)';
$PMF_LANG['ad_gen_cancel'] = "Anuluj";
$PMF_LANG['ad_glossary_add'] = 'Dodaj do glosariusza';
$PMF_LANG['ad_glossary_definition'] = 'Definicja';
$PMF_LANG['ad_glossary_delete'] = 'Usuń wpis';
$PMF_LANG['ad_glossary_delete_success'] = 'Wpis glosariusza został usunięty.';
$PMF_LANG['ad_glossary_delete_error'] = 'Wystąpił błąd podczas usuwania wpisu.';
$PMF_LANG['ad_glossary_edit'] = 'Edytuj wpis glosariusza';
$PMF_LANG['ad_glossary_item'] = 'Pozycja';
$PMF_LANG['ad_glossary_save'] = 'Zapisz';
$PMF_LANG['ad_glossary_save_success'] = 'Wpis pomyślnie dodany do glosariusza.';
$PMF_LANG['ad_glossary_save_error'] = 'Wystapił błąd zapisu do glosariusza.';
$PMF_LANG['ad_glossary_save_success'] = 'Wpis zachowany pomyślnie.';
$PMF_LANG['ad_glossary_update_error'] = 'Wystąpił błąd podczas aktualizacji wpisu.';
$PMF_LANG['ad_glossary_update_success'] = 'Wpis zaktualizowany pomyślnie.';
$PMF_LANG['ad_group_add'] = "Dodaj grupę";
$PMF_LANG['ad_group_add_link'] = "Dodaj grupę";
$PMF_LANG['ad_group_autoJoin'] = "Dołącz automatycznie:";
$PMF_LANG['ad_group_deleted'] = "Grupę usunięto pomyślnie.";
$PMF_LANG['ad_group_deleteGroup'] = "Usuń grupę";
$PMF_LANG['ad_group_deleteQuestion'] = "Czy jesteś pewien, że chcesz usunąć tą grupę?";
$PMF_LANG['ad_group_description'] = "Opis:";
$PMF_LANG['ad_group_details'] = "Szczegóły grupy";
$PMF_LANG['ad_group_error_delete'] = "Grupa nie mogła zostać usunięta. ";
$PMF_LANG['ad_group_error_noName'] = "Podaj nazwę grupy. ";
$PMF_LANG['ad_group_membership'] = "Członkostwo w grupie";
$PMF_LANG['ad_group_members'] = "Członkowie";
$PMF_LANG['ad_group_name'] = "Nazwa:";
$PMF_LANG['ad_group_removeMember'] = "-";
$PMF_LANG['ad_groups'] = 'Lista grup';
$PMF_LANG['ad_group_suc'] = "Grupa została <strong>pomyślnie</strong> dodana.";
$PMF_LANG['ad_linkcheck_checkFailed'] = 'Błąd';
$PMF_LANG['ad_linkcheck_checkResult'] = 'Rezultat weryfikacji automatycznego łącza';
$PMF_LANG['ad_linkcheck_checkSuccess'] = 'OK';
$PMF_LANG['ad_linkcheck_config_disabled'] = 'Weryfikator URL jest wyłączony';
$PMF_LANG['ad_linkcheck_config_ignorelist'] = 'URLe ignorowane';
$PMF_LANG['ad_linkcheck_config_ignorelist_description'] = 'URLe wymienione poniżej zostaną uznane za poprawne, bez walidacji.<br />Funkcjonalność służy do wykluczania URLi, które nie przechodzą walidacji Weryfikatora.';
$PMF_LANG['ad_linkcheck_config_th_chown'] = 'Ustaw własność';
$PMF_LANG['ad_linkcheck_config_th_enabled'] = 'Włącz wpis';
$PMF_LANG['ad_linkcheck_config_th_id'] = 'ID';
$PMF_LANG['ad_linkcheck_config_th_locked'] = 'Zablokuj własność';
$PMF_LANG['ad_linkcheck_config_th_owner'] = 'Właściciel';
$PMF_LANG['ad_linkcheck_config_th_reason'] = 'Powód dopasowania';
$PMF_LANG['ad_linkcheck_config_th_url'] = 'URL do dopasowania';
$PMF_LANG['ad_linkcheck_config_title'] = 'konfiguracja Weryfikatora URL';
$PMF_LANG['ad_linkcheck_config_warnlist'] = 'URLe ostrzegawcze';
$PMF_LANG['ad_linkcheck_config_warnlist_description'] = 'URLe poprzedzane poniższymi wpisami wyrzucą ostrzeżenie, bez względu na to, czy są poprawne.<br />Za pomocą tej funkcji wskazuje się URLe, które wkrótce przestaną działać.';
$PMF_LANG['ad_linkcheck_failReason'] = 'Przyczyna(y) błędu:';
$PMF_LANG['ad_linkcheck_feedback_url-batch1'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-batch2'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-batch3'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-checking'] = 'Sprawdzanie...';
$PMF_LANG['ad_linkcheck_feedback_url-disabled'] = 'Wyłączony';
$PMF_LANG['ad_linkcheck_feedback_url-linkbad'] = 'Złe łącze';
$PMF_LANG['ad_linkcheck_feedback_url-linkok'] = 'Łącze OK';
$PMF_LANG['ad_linkcheck_feedback_url-noaccess'] = 'Brak dostępu';
$PMF_LANG['ad_linkcheck_feedback_url-noajax'] = 'Brak AJAX';
$PMF_LANG['ad_linkcheck_feedback_url-nolinks'] = 'Brak łącza';
$PMF_LANG['ad_linkcheck_feedback_url-noscript'] = 'Brak skryptu';
$PMF_LANG['ad_linkcheck_infoReason'] = 'Dodatkowe informacje:';
$PMF_LANG['ad_linkcheck_noAllowUrlOpen'] = 'Automatyczna weryfikacja jest wyłączona (trzeba aktywować opcję PHP allow_url_fopen w serwerze)';
$PMF_LANG['ad_linkcheck_noLinksFound'] = 'Nie znaleziono URLi kompatybilnych z Weryfikatorem URL.';
$PMF_LANG['ad_linkcheck_noReferenceURL'] = 'Automatyczna weryfikacja jest wyłączona (nie zdefiniowano bazowego URLa dla weryfikacji linków)';
$PMF_LANG['ad_linkcheck_openurl_ambiguous'] = 'Niejednoznaczny status HTTP: <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_infoprefix'] = 'Podczas testowania znaleziono <strong>%s</strong>: ';
$PMF_LANG['ad_linkcheck_openurl_maxredirect'] = 'Przekroczono maksymalną liczbę przekierowań <strong>%d</strong>.';
$PMF_LANG['ad_linkcheck_openurl_nodns'] = 'Rozwiązywanie DNS dla hosta <strong>%s</strong> jest zbyt wolne lub nie działa, lokalnie lub zdalnie.';
$PMF_LANG['ad_linkcheck_openurl_not_allowed'] = 'Host <strong>%s</strong> nie wspiera metody <em>HEAD</em>. Dozwolone metody to: <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_not_found'] = 'Nie ma takiego zasobu na hoście <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_notready'] = 'Weryfikator URLi nie jest gotowy.';
$PMF_LANG['ad_linkcheck_openurl_redirected'] = 'URL został przekierowany do <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_tooslow'] = 'Host <strong>%s</strong> jest zbyt wolny lub nie odpowiada.';
$PMF_LANG['ad_linkcheck_openurl_urlisblank'] = 'Prowadzi do pustego URL.';
$PMF_LANG['ad_linkcheck_protocol_unsupported'] = 'Protokół %s nie jest wspierany w automatycznej weryfikacji URLi.';
$PMF_LANG['ad_linkcheck_searchbadonly'] = 'Tylko uszkodzone łącza';
$PMF_LANG['ad_menu_categ_structure'] = "Podgląd kategorii z uwzględnieniem języków";
$PMF_LANG['ad_menu_comments'] = 'Kometarze';
$PMF_LANG['ad_menu_glossary'] = 'Glosariusz';
$PMF_LANG["ad_menu_group_administration"] = "Grupy";
$PMF_LANG['ad_menu_linkconfig'] = 'Weryfikator URLi';
$PMF_LANG['ad_menu_searchstats'] = 'Statystyki wyszukiwań';
$PMF_LANG['ad_menu_stopwordsconfig'] = 'Wyrazy pomijane';
$PMF_LANG['ad_menu_translations'] = 'Tłumaczenie interfejsu';
$PMF_LANG['admin_mainmenu_backup'] = 'Backup';
$PMF_LANG['admin_mainmenu_configuration'] = 'Konfiguracja';
$PMF_LANG['admin_mainmenu_content'] = 'Zawartość';
$PMF_LANG['admin_mainmenu_exports'] = 'Eksport';
$PMF_LANG['admin_mainmenu_home'] = 'Start';
$PMF_LANG['admin_mainmenu_logout'] = 'Wyloguj';
$PMF_LANG['admin_mainmenu_statistics'] = 'Statystyki';
$PMF_LANG['admin_mainmenu_users'] = 'Użytkownicy';
$PMF_LANG['adminSection'] = 'Administracja';
$PMF_LANG['ad_news_allowComments'] = 'Można komentować:';
$PMF_LANG['ad_news_author_email'] = 'E-mail autora:';
$PMF_LANG['ad_news_author_name'] = 'Imię i nazwisko autora:';
$PMF_LANG['ad_news_data'] = 'Treść newsa';
$PMF_LANG['ad_news_expiration_window'] = 'Ważność newsa (opcjonalnie)';
$PMF_LANG['ad_news_from'] = 'Od:';
$PMF_LANG['ad_news_insertfail'] = 'Podczas dodawania newsa do bazy danych wystąpił błąd.';
$PMF_LANG['ad_news_link_parent'] = 'Łącze otwiera się w oknie wywołującym';
$PMF_LANG['ad_news_set_active'] = 'News aktywny:';
$PMF_LANG['ad_news_to'] = 'Do:';
$PMF_LANG['ad_news_updatefail'] = 'Aktualizacja newsa w bazie danych zakończyła się niepowodzeniem.';
$PMF_LANG['ad_online_info'] = 'Sprawdzanie wersji on-line';
$PMF_LANG['ad_pmf_info'] = 'Informacja phpMyFAQ';
$PMF_LANG['ad_quick_category'] = 'Nowa kategoria';
$PMF_LANG['ad_quick_group'] = 'Nowa grupa';
$PMF_LANG['ad_quicklinks'] = 'Skróty';
$PMF_LANG['ad_quick_record'] = 'Nowy wpis FAQ';
$PMF_LANG['ad_quick_user'] = 'Nowy użytkownik';
$PMF_LANG['ad_record_expiration_window'] = 'Okres obowiązywania wpisu (opcjonalny)';
$PMF_LANG['ad_record_sticky'] = 'Przyklejony';
$PMF_LANG['ad_searchstats_search_term'] = 'Słowo kluczowe';
$PMF_LANG['ad_searchstats_search_term_count'] = 'Ilość';
$PMF_LANG['ad_searchstats_search_term_lang'] = 'Język';
$PMF_LANG['ad_searchstats_search_term_percentage'] = 'Udział';
$PMF_LANG['ad_session_expiration'] = 'Sesja wygaśnie za';
$PMF_LANG['ad_session_expiring'] = 'Twoja sesja wygaśnie za %d minut: czy nadal chcesz pracować?';
$PMF_LANG['ad_start_notactive'] = 'Oczekujące na aktywację';
$PMF_LANG['ad_stat_choose'] = 'Wybierz miesiąc';
$PMF_LANG['ad_stat_delete'] = 'Natychmiast usuń wybrane sesje';
$PMF_LANG['ad_stat_management'] = 'Zarządzanie sesjami';
$PMF_LANG['ad_system_info'] = 'Informacje o systemie';
$PMF_LANG['ad_user_active'] = 'aktywny';
$PMF_LANG['ad_user_blocked'] = 'zablokowany';
$PMF_LANG["ad_user_checkall"] = "[<u> wszystko </u>]";
$PMF_LANG['ad_user_deleteUser'] = "Usuń konto";
$PMF_LANG['ad_user_error_delete'] =  "Konto użytkownika nie mogło zostać usunięte. ";
$PMF_LANG['ad_user_error_loginInvalid'] =  "Podana nazwa konta jest nieprawidłowa.";
$PMF_LANG['ad_user_error_noEmail'] =  "Podaj poprawny adres e-mail. ";
$PMF_LANG['ad_user_error_noId'] =  "Nieprawidłowy ID. ";
$PMF_LANG['ad_user_error_noRealName'] =  "Podaj imię i nazwisko. ";
$PMF_LANG['ad_user_error_password'] =  "Podaj hasło. ";
$PMF_LANG['ad_user_error_passwordsDontMatch'] =  "Hasło niezgodne z powtórzeniem, ";
$PMF_LANG['ad_user_error_protectedAccount'] =  "Konto użutkownika jest chronione. ";
$PMF_LANG['ad_user_lastModified'] = "ostatnio zmieniony:";
$PMF_LANG['ad_user_loggedin'] = 'Zalogowany jako ';
$PMF_LANG["ad_user_loginname"] = 'Login:';
$PMF_LANG['ad_user_protected'] = 'chroniony';
$PMF_LANG['ad_user_status'] = "Status:";
$PMF_LANG['ad_user_uncheckall'] = "[<u> nic </u>]";
$PMF_LANG['ad_you_should_update'] = 'Twój phpMyFAQ jest przestarzały. Powinieneś go zaktualizować do najnowszej stabilnej wersji.';
$PMF_LANG['captchaError'] = 'Podaj prawidłowy kod captcha.';
$PMF_LANG['emailRegSubject'] = '[%sitename%] Rejestracja: nowy użytkownik';
$PMF_LANG['err_expiredArticle'] = 'Ten wpis wygasł i nie może zostać wyświetlony';
$PMF_LANG['err_expiredNews'] = 'Ten news wygasł i nie może zostać wyświetlony';
$PMF_LANG['err_inactiveArticle'] = 'Wpis aktualnie podlega rewizji i nie może zostać wyświetlony.';
$PMF_LANG['err_inactiveNews'] = 'News aktualnie podlega rewizji i nie może zostać wyświetlony.';
$PMF_LANG['errorRegistration'] = 'To pole jest wymagane!';
$PMF_LANG['mainControlCenter'] = 'Konfiguracja główna';
$PMF_LANG['msgAdding3Dots'] = 'dodawanie...';
$PMF_LANG['msgAllCatArticles'] = 'Wpisów w tej kategorii';
$PMF_LANG['msgArticleCategories'] = 'Kategorii dla tego wpisu';
$PMF_LANG['msgAttachmentNotFound'] = "Na serwerze nie ma takiego pliku";
$PMF_LANG["msgAuthor"] = "Autor: ";
$PMF_LANG['msgCancel'] = 'Anuluj';
$PMF_LANG['msgChooseLanguageToTranslate'] = 'Wybierz język tłumaczenia';
$PMF_LANG['msgDelete'] = 'Usuń';
$PMF_LANG['msgEdit'] = 'Zmień';
$PMF_LANG['msgLangDirIsntWritable'] = 'Katalog tłumaczeń nie ma prawa zapisu';
$PMF_LANG['msgLanguage'] = 'Język';
$PMF_LANG['msgNewQuestionVisible'] = 'By przeanalizować pytanie, musi być ono publiczne.';
$PMF_LANG['msgNewTranslationAddon'] = 'Twoja propozycja nie zostanie opublikowana natychmiast, mimo że administrator potwierdzi Ci jej odbiór. Pola wymagane to: <strong>imię i nazwisko</strong>, <strong>adres e-mail</strong>, <strong>tłumaczenie tytułu</strong> i <strong>tłumaczenie FAQ</strong>. Słowa kluczowe powinieneś oddzielać wyłącznie spacją.';
$PMF_LANG['msgNewTranslationHeader'] = 'Propozycja tłumaczenia';
$PMF_LANG['msgNewTranslationKeywords'] = "Słowa kluczowe:";
$PMF_LANG['msgNewTranslationMail'] = "Adres e-mail:";
$PMF_LANG['msgNewTranslationName'] = "Imię i nazwisko:";
$PMF_LANG['msgNewTranslationPane'] = 'Panel translacyjny';
$PMF_LANG['msgNewTranslationSubmit'] = 'Zatwierdź propozycję';
$PMF_LANG['msgNewTranslationThanks'] = "Dziękujemy za propozycję!";
$PMF_LANG['msgNewTransSourcePane'] = 'Panel źródłowy';
$PMF_LANG["msgNoQuestionsAvailable"] = "Nie ma żadnych pytań.";
$PMF_LANG["msgNoNews"] = "Nie ma żadnych newsów.";
$PMF_LANG['msgNo'] = 'nie';
$PMF_LANG['msgQuestionsWaiting'] = 'Oczekujące na opublikowanie przez adminów: ';
$PMF_LANG['msgRegError'] = 'Znalazłem następujące błędy. Popraw je:';
$PMF_LANG['msgRegThankYou'] = 'Dziękujemy za rejestrację';
$PMF_LANG['msg_related_articles'] = 'Podobne wpisy';
$PMF_LANG['msgRemoving3Dots'] = 'usuwanie...';
$PMF_LANG['msgSave'] = 'Zapisz';
$PMF_LANG['msgSaving3Dots'] = 'zapisywanie...';
$PMF_LANG['msgSending3Dots'] = 'wysyłanie...';
$PMF_LANG['msgSendMailDespiteEverything'] = 'Nie, nadal nie ma wyczerpującej odpowiedzi (wysyła e-mail)';
$PMF_LANG['msgSendMailIfNothingIsFound'] = 'Czy powyższa lista zawiera pytanie, które rozwiązuje Twój problem?';
$PMF_LANG['msg_tags'] = 'Tagi';
$PMF_LANG['msgTagSearch'] = 'Otagowane wpisy';
$PMF_LANG['msgTranslate'] = 'Zaproponuj tłumaczenie';
$PMF_LANG['msgTranslateSubmit'] = 'Rozpoczynam tłumaczenie...';
$PMF_LANG['msgTransToolActions'] = 'Akcje';
$PMF_LANG['msgTransToolAddAuthor'] = 'Dodaj użytkownika';
$PMF_LANG['msgTransToolAddNewTranslation'] = 'Dodaj tłumaczenie';
$PMF_LANG['msgTransToolCouldntCreateTrans'] = 'Nie udało się utworzyć tłumaczenia';
$PMF_LANG['msgTransToolCreateTranslation'] = 'Utwórz tłumaczenie';
$PMF_LANG['msgTransToolErrorRemovingFile'] = 'Nie można usunąć pliku językowego';
$PMF_LANG['msgTransToolErrorSavingFile'] = 'Nie można pisać do pliku językowego';
$PMF_LANG['msgTransToolErrorSendingFile'] = 'Podczas wysyłania pliku językowego wystąpił błąd';
$PMF_LANG['msgTransToolFileRemoved'] = 'Plik językowy został usunięty';
$PMF_LANG['msgTransToolFileSaved'] = 'Plik językowy zapisano poprawnie';
$PMF_LANG['msgTransToolFileSent'] = 'Plik językowy wysłano do zespołu phpMyFAQ. Bardzo dziękujemy, że zechciałeś się nim podzielić.';
$PMF_LANG['msgTransToolLanguage'] = 'Język';
$PMF_LANG['msgTransToolLanguageCharset'] = 'Strona kodowa';
$PMF_LANG['msgTransToolLanguageDir'] = 'Kierunek pisania';
$PMF_LANG['msgTransToolLanguageDesc'] = 'Opis języka';
$PMF_LANG['msgTransToolPercent'] = 'Zaawansowanie';
$PMF_LANG['msgTransToolSendToTeam'] = 'Wyślij do zespołu phpMyFAQ';
$PMF_LANG['msgTransToolSureDeleteFile'] = 'Czy ten plik językowy na pewno musi zostać usunięty?';
$PMF_LANG['msgTransToolTransCreated'] = 'Nowe tłumaczenie zostało otwarte';
$PMF_LANG['msgTransToolWritable'] = 'Do zapisu';
$PMF_LANG['msgUserData'] = 'Informacje wymagane podczas rejestracji';
$PMF_LANG['msgVariable'] = 'Zmienna';
$PMF_LANG['msgYes'] = 'tak';
$PMF_LANG['newsArchive'] = ' Archiwum newsów';
$PMF_LANG['newsCommentDate'] = 'Dodane dnia: ';
$PMF_LANG['newsShowCurrent'] = 'Pokaż aktualne newsy.';
$PMF_LANG['newsWriteComment'] = 'skomentuj ten wpis';
$PMF_LANG['recordsControlCenter'] = 'konfiguracja wpisów FAQ';
$PMF_LANG['spamControlCenter'] = 'Centrum kontroli spamu';
$PMF_LANG['submitRegister'] = 'Rejestruj';
$PMF_LANG['successMessage'] = 'Zostałeś poprawnie zarejestrowany. Wkrótce otrzymasz e-mail w celu potwierdzenia Twoich danych.';
$PMF_LANG['admin_mainmenu_worklog'] = 'Historia';

