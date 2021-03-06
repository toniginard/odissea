<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'install', language 'el', branch 'MOODLE_31_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Ο φάκελος admin έχει οριστεί λανθασμένα';
$string['admindirname'] = 'Φάκελος Admin';
$string['admindirsetting'] = 'Πολλοί λίγοι κεντρικοί υπολογιστές ιστού χρησιμοποιούν το /admin ως ειδικό URL για την πρόσβαση σε κάποιο πίνακα ελέγχου ή κάτι τέτοιο. Δυστυχώς αυτό έρχεται σε αντίθεση με την κανονική τοποθεσία των admin σελίδων του ΠΗΛΕΑΣ. Μπορείτε να το διορθώσετε αυτό μέσα από την μετονομασία του admin φακέλου στην εγκατάστασή σας, και βάζοντας αυτό το καινούργιο όνομα εδώ. Για παράδειγμα: <br /> <br /><b>moodleadmin</b><br /> <br /> Αυτό θα διορθώσει τους συνδέσμους admin στο ΠΗΛΕΑΣ.';
$string['admindirsettinghead'] = 'Προσδιορίζοντας τον φάκελο admin...';
$string['admindirsettingsub'] = 'Πολλοί λίγοι κεντρικοί υπολογιστές ιστού χρησιμοποιούν το /admin ως ειδικό URL για την πρόσβαση σε κάποιο πίνακα ελέγχου ή κάτι τέτοιο. Δυστυχώς αυτό έρχεται σε αντίθεση με την κανονική τοποθεσία των admin σελίδων του ΠΗΛΕΑΣ. Μπορείτε να το διορθώσετε αυτό μέσα από την μετονομασία του admin φακέλου στην εγκατάστασή σας, και βάζοντας αυτό το καινούργιο όνομα εδώ. Για παράδειγμα: <br /> <br /><b>moodleadmin</b><br /> <br /> Αυτό θα διορθώσει τους συνδέσμους admin στο ΠΗΛΕΑΣ.';
$string['availablelangs'] = 'Λίστα διαθέσιμων γλωσσών';
$string['caution'] = 'Προσοχή';
$string['chooselanguage'] = 'Επιλογή γλώσσας';
$string['chooselanguagehead'] = 'Επιλογή γλώσσας';
$string['chooselanguagesub'] = 'Παρακαλώ, επιλέξτε γλώσσα για την εγκατάσταση ΜΟΝΟ. Θα μπορείτε να επιλέξετε γλώσσα ιστοσελίδας και χρηστών σε μια μετέπειτα οθόνη.';
$string['compatibilitysettings'] = 'Έλεγχος των PHP ρυθμίσεών σας...';
$string['compatibilitysettingshead'] = 'Έλεγχος των PHP ρυθμίσεών σας...';
$string['compatibilitysettingssub'] = 'Ο εξυπηρετητής σας πρέπει να περάσει όλα αυτά τα τεστ για να λειτουργεί το ΠΗΛΕΑΣ κανονικά';
$string['configfilenotwritten'] = 'Το σενάριο εγκατάστασης δεν μπόρεσε να δημιουργήσει αυτόματα ένα αρχείο config.php το οποίο να περιέχει τις επιλεγμένες ρυθμίσεις, μάλλον γιατί ο φάκελος του ΠΗΛΕΑΣ δεν είναι εγγράψιμος. Μπορείτε χειροκίνητα να αντιγράψετε τον παρακάτω κώδικα σε ένα αρχείο με όνομα config.php μέσα στο root φάκελο του ΠΗΛΕΑΣ.';
$string['configfilewritten'] = 'Το αρχείο config.php δημιουργήθηκε με επιτυχία';
$string['configurationcomplete'] = 'Ολοκληρώθηκαν οι ρυθμίσεις';
$string['configurationcompletehead'] = 'Ολοκληρώθηκαν οι ρυθμίσεις';
$string['configurationcompletesub'] = 'Το ΠΗΛΕΑΣ προσπάθησε να αποθηκεύσει τις ρυθμίσεις σε ένα αρχείο στο root της εγκατάστασης του ΠΗΛΕΑΣ';
$string['database'] = 'Βάση Δεδομένων';
$string['databasehead'] = 'Ρυθμίσεις Βάσης Δεδομένων';
$string['databasehost'] = 'Κεντρικός Υπολογιστής Βάσης Δεδομένων';
$string['databasename'] = 'Όνομα Βάσης Δεδομένων';
$string['databasepass'] = 'Κωδικός Βάσης Δεδομένων';
$string['databasesocket'] = 'Unix socket';
$string['databasetypehead'] = 'Επιλογή οδηγού βάσης δεδομένων';
$string['databasetypesub'] = 'Το Moodle υποστηρίζει αρκετούς τύπους εξυπηρετητών βάσης δεδομένων. Παρακαλούμε επικοινωνήστε τον διαχειριστή του εξυπηρετητή εάν δεν ξέρετε ποιόν τύπο να χρησιμοποιήσετε.';
$string['databaseuser'] = 'Χρήστης Βάσης Δεδομένων';
$string['dataroot'] = 'Φάκελος Δεδομένων';
$string['datarooterror'] = 'Ο φάκελος δεδομένων που ορίσατε δεν μπόρεσε να βρεθεί ή να δημιουργηθεί. Διορθώστε τη διεύθυνση ή δημιουργήστε το φάκελο χειροκίνητα.';
$string['datarootpublicerror'] = 'Ο \'Φάκελος Δεδομένων\' που ορίσατε είναι απευθείας προσβάσιμος μέσω ιστού, πρέπει να χρησιμοποιήσετε έναν διαφορετικό φάκελο.';
$string['dbconnectionerror'] = 'Δεν έγινε σύνδεση με τη βάση δεδομένων που ορίσατε. Παρακαλώ ελέγξτε τις ρυθμίσεις της βάσης σας.';
$string['dbcreationerror'] = 'Σφάλμα δημιουργίας βάσης δεδομένων. Δε δημιουργήθηκε βάση με το επιθυμητό όνομα και της προσδιορισμένες ρυθμίσεις';
$string['dbhost'] = 'Κεντρικός Εξυπηρετητής';
$string['dbpass'] = 'Κωδικός';
$string['dbprefix'] = 'Πρόθεμα πινάκων';
$string['dbtype'] = 'Τύπος';
$string['directorysettings'] = '<p> Παρακαλώ επιβεβαιώστε τις τοποθεσίες αυτής της εγκατάστασης ΠΗΛΕΑΣ.</p>

<p><b>Διεύθυνση ιστοσελίδας:</b>
Προσδιορίστε την πλήρη διεύθυνση ιστοσελίδας από την οποία γίνεται η πρόσβαση στο ΠΗΛΕΑΣ. Εάν η ιστοσελίδα σας είναι προσβάσιμη μέσω πολλαπλών URL επιλέξτε αυτό που θα χρησιμοποιούν οι φοιτητές περισσότερο. Μην συμπεριλάβετε τελική κάθετος (/).</p>

<p><b>Φάκελος ΠΗΛΕΑΣ:</b>
Προσδιορίστε το πλήρες μονοπάτι του φακέλου αυτής της εγκατάστασης. Βεβαιωθείτε ότι τα πεζά/κεφαλαία είναι σωστά.</p>

<p><b>Φάκελος Δεδομένων:</b>
Χρειάζεστε ένα μέρος όπου το ΠΗΛΕΑΣ θα μπορεί να παοθηκεύει τα ανεβασμένα αρχεία. Αυτος ο φάκελος θα πρέπει να είναι αναγνώσιμος και εγγράψιμος από τον χρήστη του εξυπηρετητή ιστού (συνήθως \'nobody\' ή \'apache\'), αλλά δεν πρέπει να είναι προσβάσιμος κατευθείαν από το δίκτυο. </p>';
$string['directorysettingshead'] = 'Παρακαλώ επιβεβαιώστε τις τοποθεσίες αυτής της εγκατάστασης ΠΗΛΕΑΣ.';
$string['directorysettingssub'] = '<b>Διεύθυνση ιστοσελίδας:</b>
Προσδιορίστε την πλήρη διεύθυνση ιστοσελίδας από την οποία γίνεται η πρόσβαση στο ΠΗΛΕΑΣ. Εάν η ιστοσελίδα σας είναι προσβάσιμη μέσω πολλαπλών URL επιλέξτε αυτό που θα χρησιμοποιούν οι φοιτητές περισσότερο. Μη συμπεριλάβετε τελική κάθετος (/).
<br />
<br />
<b>Φάκελος ΠΗΛΕΑΣ:</b>
Προσδιορίστε το πλήρες μονοπάτι του φακέλου αυτής της εγκατάστασης. Βεβαιωθείτε ότι τα πεζά/κεφαλαία είναι σωστά.
<br />
<br />
<b>Φάκελος Δεδομένων:</b>
Χρειάζεστε ένα μέρος όπου το ΠΗΛΕΑΣ θα μπορεί να παοθηκεύει τα ανεβασμένα αρχεία. Αυτος ο φάκελος θα πρέπει να είναι αναγνώσιμος και εγγράψιμος από το χρήστη του εξυπηρετητή ιστού (συνήθως \'nobody\' ή \'apache\'), αλλά δεν πρέπει να είναι προσβάσιμος κατευθείαν από το δίκτυο.';
$string['dirroot'] = 'Φάκελος ΠΗΛΕΑΣ';
$string['dirrooterror'] = 'Η ρύθμιση \'Φάκελος ΠΗΛΕΑΣ\' φαίνεται να είναι εσφαλμένη - δεν μπορέσαμε να βρούμε εγκατάσταση ΠΗΛΕΑΣ εκεί. Η τιμή έχει επαναρυθμιστεί.';
$string['download'] = 'Μεταφόρτωση';
$string['downloadlanguagebutton'] = 'Μεταφόρτωση σε "{$a}" γλωσσικό πακέτο';
$string['downloadlanguagehead'] = 'Μεταφόρτωση γλωσσικού πακέτου';
$string['downloadlanguagenotneeded'] = 'Μπορείτε να συνεχίσετε την εγκατάσταση χρησιμοποιώντας το προεπιλεγμένο γλωσσικό πακέτο, "{$a}".';
$string['downloadlanguagesub'] = 'Τώρα έχετε την επιλογή του κατεβάσματος ενός γλωσσικού πακέτου και συνέχιση της εγκατάστασης σε αυτήν την γλώσσα.<br /><br /> Εάν δεν μπορέσετε να κατεβάσετε το γλωσσικό πακέτο, η εγκατάσταση θα προχωρήσει στα αγγλικά. (Μόλις η εγκατάσταση ολοκληρωθεί, θα έχετε την δυνατότητα να κατεβάσετε και να εγκαταστήσετε επιπλέον γλωσσικά πακέτα.)';
$string['doyouagree'] = 'Συμφωνείτε ? (ναι/όχι):';
$string['environmenthead'] = 'Έλεγχος περιβάλλοντος...';
$string['environmentsub'] = 'Έλεγχος εάν τα διάφορα τμήματα του συστήματός σας ταιριάζουν με τις απαιτήσεις συστήματος';
$string['environmentsub2'] = 'Κάθε έκδοση Moodle έχει κάποια ελάχιστη απαίτηση σχετικά με την έκδοση της PHP και ενός αριθμού από αναγκαίες επεκτάσεις PHP.
Ο πλήρης έλεγχος του περιβάλλοντος πραγματοποιείται πριν κάθε εγκατάσταση και αναβάθμιση. Παρακαλούμε επικοινωνήστε με τον διαχειριστή του εξυπηρετητή εάν δεν ξέρετε πως να εγκαταστήσετε νέα έκδοση της PHP ή να ενεργοποιήσετε επεκτάσεις της.';
$string['errorsinenvironment'] = 'Ο έλεγχος του περιβάλλοντος απέτυχε!';
$string['fail'] = 'Αποτυχία';
$string['fileuploads'] = 'Ανέβασμα αρχείων';
$string['fileuploadserror'] = 'Αυτό πρέπει να είναι ενεργοποιημένο';
$string['fileuploadshelp'] = '<p>Το ανέβασμα αρχείων φαίνεται να είναι απενεργοποιημένο στο εξυπηρετητή σας.</p>

<p> Το ΠΗΛΕΑΣ μπορεί να εγκατασταθεί, αλλά χωρίς αυτήν τη δυνατότητα, δε θα μπορείτε να ανεβάσετε αρχεία μαθημάτων ή καινούργιες εικόνες για τα προφίλ χρηστών.</p>

<p> Για να ενεργοποιήσετε το ανέβασμα αρχείων (εσείς ή ο διαχειριστής) πρέπει να επεξεργαστείτε το κύριο php.ini αρχείο του συστήματός σας και να αλλάξετε τη ρύθμιση για <b>file_uploads</b> σε \'1\'.</p>';
$string['inputdatadirectory'] = 'Φάκελος Δεδομένων :';
$string['inputwebadress'] = 'Διεύθυνση Ιστού :';
$string['inputwebdirectory'] = 'Φάκελος Moodle :';
$string['installation'] = 'Εγκατάσταση';
$string['langdownloaderror'] = 'Δυστυχώς η γλώσσα "{$a}" δεν είναι εγκατεστημένη. Η εγκατάσταση θα συνεχιστεί στα αγγλικά.';
$string['langdownloadok'] = 'Η γλώσσα "{$a}" εγκαταστάθηκε με επιτυχία. Η εγκατάσταση θα συνεχιστεί σε αυτήν τη γλώσσα.';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'Το memory limit της PHP έχει οριστεί πολύ χαμηλά ... ίσως αντιμετωπίσετε προβλήματα στη συνέχεια.';
$string['memorylimithelp'] = '<p>Το memory limit της PHP στο server σας είναι ορισμένο αυτή τη στιγμή στα {$a}.</p>

<p>Αυτό μπορεί να προκαλέσει προβλήματα μνήμης στο ΠΗΛΕΑΣ στη συνέχεια, ειδικά αν έχετε πολλά ενεργοποιημένα αρθρώματα και/ή πολλούς χρήστες.</p>

<p>Προτείνεται η ρύθμιση της PHP με μεγαλύτερο όριο, αν αυτό είναι δυνατό, π.χ. 16M. Υπάρχουν πολλοί τρόποι που μπορείτε να δοκιμάσετε να το κάνετε αυτό:</p>
<ol>
<li>Αν έχετε τη δυνατότητα, κάνετε επαναμεταγλώττιση την PHP με την παράμετρο <i>--enable-memory-limit</i>.
Αυτό θα επιτρέψει στο Moodle να ορίσει μόνο του το memory limit.</li>
<li>Αν έχετε πρόσβαση στο αρχείο php.ini, μπορείτε να αλλάξετε τη ρύθμιση <b>memory_limit</b>
σε 16M. Αν δεν έχετε πρόσβαση ζητήστε από το διαχειριστή να το κάνει για εσάς.</li>
<li>Σε κάποιους εξυπηρετητές PHP μπορείτε να δημιουργήσετε ένα αρχείο .htaccess στο φάκελο του ΠΗΛΕΑΣ που να περιέχει τις παρακάτω γραμμές:<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Ωστόσο, σε κάποιους εξυπηρετητές αυτό θα εμποδίσει τη λειτουργία <b>όλων</b> των σελιδών PHP
(θα βλέπετε σφάλματα όταν ανοίγετε τις σελίδες), σε αυτήν την περίπτωση θα πρέπει να διαγράψετε το αρχείο .htaccess.</p></li>
</ol>';
$string['mssqlextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση MSSQL, έτσι ώστε να μπορεί να επικοινωνεί με το SQL*Server. Παρακαλώ ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['mysqliextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση MySQLi, έτσι ώστε να μπορεί να επικοινωνεί με τη MySQL.  Παρακαλώ ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.  Η επέκταση MySQLi δεν είναι διαθέσιμη για την PHP 4.';
$string['nativemysqli'] = 'Improved MySQL (native/mysqli)';
$string['nativemysqlihelp'] = 'Τώρα πρέπει να ρυθμίσετε την βάση δεδομένων όπου τα περισσότερα δεδομένα του Moodle θα αποθηκευθούν.
Η βάση δεδομένων μπορεί να δημιουργηθεί εάν ο χρήστης της βάσης έχει τα απαραίτητα δικαιώματα, και τα ονόματα χρήστη και συνθηματικό υπάρχουν ήδη. Το πρόθεμα πινάκων είναι προαιρετικό.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'Τώρα πρέπει να ρυθμίσετε την βάση δεδομένων όπου τα περισσότερα δεδομένα του Moodle θα αποθηκευθούν.
Η βάση πρέπει να έχει δημιουργηθεί ήδη καθώς επίσης και ένα όνομα χρήστη και συνθηματικό για πρόσβαση σε αυτήν. Το πρόθεμα πινάκων είναι υποχρεωτικό.';
$string['ociextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση OCI8, έτσι ώστε να μπορεί να επικοινωνεί με τη Oracle. Παρακαλώ ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['pass'] = 'Πέρασμα';
$string['paths'] = 'Διαδρομές';
$string['pathserrcreatedataroot'] = 'Ο Φάκελος Δεδομένων ({$a->dataroot}) δεν μπορεί να δημιουργθεί από το πρόγραμμα εγκατάστασης.';
$string['pathshead'] = 'Επιβεβαίωση Διαδρομών';
$string['pathsrodataroot'] = 'Ο Φάκελος Δεδομένων δεν είναι εγγράψιμος.';
$string['pathsroparentdataroot'] = 'Ο Φάκελος γονέας ({$a->parent}) δεν είναι εγγράψιμος. Ο Φάκελος Δεδομένων ({$a->dataroot}) δεν μπορεί να δημιουργθεί από το πρόγραμμα εγκατάστασης.';
$string['pathssubadmindir'] = 'Λίγοι κεντρικοί υπολογιστές ιστού χρησιμοποιούν το /admin σαν ένα ειδικό URL για να έχετε πρόσβαση
σε έναν πίνακα ελέγχου ή κάτι παρόμοιο.  Δυστυχώς αυτό έρχεται σε σύγκρουση με την πρότυπη τοποθεσία για τις σελίδες διαχείρισης του Moodle.  Μπορείτε να το διορθώσετε αυτό
μετονομάζοντας τον φάκελο admin στην εγκατάσταση σας, και βάζοντας ένα νέο όνομα εδώ.  Για παράδειγμα: <em>moodleadmin</em>. Αυτό θα διορθώσει τους συνδέσμους στο Moodle.';
$string['pathssubdataroot'] = 'Χρειάζεστε ένα μέρος όπου το Moodle μπορεί να αποθηκεύει τα ανεβασμένα αρχεία. Αυτός ο φάκελος θα πρέπει να μπορεί να διαβάζεται και να εγγράφεται από τον χρήστη του εξυπηρετητή ιστού
(συνήθως \'nobody\' ή \'apache\'), αλλά δεν πρέπει να είναι προσβάσιμος απευθείας μέσω ιστού. Το πρόγραμμα εγκατάστασης θα προσπαθήσει να τον δημιουργήσει εάν δεν υπάρχει.';
$string['pathssubdirroot'] = 'Πλήρης διαδρομή φακέλου για την εγκατάσταση moodle. Αλλάξτε την μόνο εάν χρειάζεται να χρησιμοποιήστε symbolic links.';
$string['pathssubwwwroot'] = 'Πλήρης διεύθυνση ιστού από την οποία θα υπάρχει πρόσβαση στο moodle.
Δεν είναι δυνατόν να έχετε πρόβαση στο Moodle χρησιμοποιώντας πολλαπλές διευθύνσεις.
Εάν ο ιστοχώρος έχει πολλαπλές δημόσιες διευθύνσεις θα πρέπει να ρυθμίσετε μόνιμες ανακατευθύνσεις σε καθεμία από αυτές εκτός από αυτήν.
Εάν ο ιστοχώρος σας είναι προσβάσιμος και από intranet και από το Διαδίκτυο χρησιμοποιήστε την δημόσια διεύθυνση εδώ και ρυθμίστε τον DNS ώστε οι χρήστες του inranet να μπορούν να χρησιμοποιούν και αυτοί την δημόσια διεύθυνση.';
$string['pathsunsecuredataroot'] = 'Η τοποθεσία του Φάκελου Δεδομένων δεν είναι ασφαλής';
$string['pathswrongadmindir'] = 'Ο Φάκελος Admin δεν υπάρχει';
$string['pgsqlextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση PGSQL, έτσι ώστε να μπορεί να επικοινωνεί με το PostgreSQL. Παρακαλώ ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['phpextension'] = 'Επέκταση {$a} της PHP';
$string['phpversion'] = 'Έκδοση της PHP';
$string['phpversionhelp'] = '<p>Το ΠΗΛΕΑΣ απαιτεί η έκδοση της PHP να είναι τουλάχιστον 4.3.0 ή 5.1.0 (η 5.0.x έχει ένα αριθμό γνωστών προβλημάτων).</p>
<p>Αυτή τη στιγμή έχετε την έκδοση {$a}</p>
<p>Πρέπει να κάνετε upgrade την PHP ή να μεταφερθείτε σε ένα κεντρικό υπολογιστή με μια νεότερη έκδοση της PHP!<br/>
(Σε περίπτωση που έχετε την 5.0.x μπορείτε επίσης να κάνετε και υποβάθμιση στην έκδοση 4.4.x)</p>';
$string['releasenoteslink'] = 'Για πληροφορίες σχετικά με αυτή την έκδοση του Moodle, παρακαλούμε δείτε τις Release Notes στο {$a}';
$string['safemode'] = 'Ασφαλής λειτουργία';
$string['safemodeerror'] = 'Το ΠΗΛΕΑΣ μπορεί να έχει προβλήματα με το safe mode on';
$string['safemodehelp'] = '<p>Το ΠΗΛΕΑΣ μπορεί να έχει έναν αριθμό προβλημάτων με το safe mode on, όπως για παράδειγμα να μην μπορεί να δημιουργήσει νέα αρχεία.</p>

<p>Το safe mode είναι συνήθως ενεργοποιημένο σε ορισμένους (παρανοϊκούς!) δημόσιους κεντρικούς υπολογιστές ιστού, οπότε ίσως χρειαστεί να βρείτε ένα νέο κεντρικό υπολογιστή ιστού για τον ιστοχώρο σας.</p>

<p>Μπορείτε αν θέλετε να συνεχίσετε με την εγκατάστση, ωστόσο να είστε προετοιμασμένοι για προβλήματα στο μέλλον.</p>';
$string['sessionautostart'] = 'Αυτόματη ένερξη συνεδρίας';
$string['sessionautostarterror'] = 'Αυτό πρέπει να είναι απενεργοποιημένο';
$string['sessionautostarthelp'] = '<p>Το ΠΗΛΕΑΣ απαιτεί την υποστήριξη συνόδων και δεν μπορεί να λειτουργήσει χωρίς αυτήν.</p>

<p>Τα sessions μπορούν να ενεργοποιηθούν στο αρχείο php.ini ... δείτε την παράμετρο session.auto_start</p>';
$string['sqliteextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση SQLite.  Παρακαλώ ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['upgradingqtypeplugin'] = 'Αναβάθμιση της υπομονάδας λογισμικού Τύπου Ερωτήσεων';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Βλέπετε αυτή τη σελίδα γιατί εγκαταστήσατε και ξεκινήσατε με επιτυχία το πακέτο <strong>{$a->packname} {$a->packversion}</strong> στον υπολογιστή σας. Συγχαρητήρια!';
$string['welcomep30'] = 'Αυτή η έκδοση <strong>{$a->installername}</strong> περιλαμβάνει τις εφαρμογές για τη δημιουργία ενός περιβάλλοντος μέσα στο οποίο θα λειτουργεί το <strong>ΠΗΛΕΑΣ </strong>:';
$string['welcomep40'] = 'Το πακέτο περιλαμβάνει επίσης <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Η χρήση όλων των εφαρμογών σε αυτό το πακέτο υπόκειται στις αντίστοιχες άδειες. Ολόκληρο το πακέτο <strong>{$a->installername}</strong> είναι <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> και διανέμεται με την <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> άδεια.';
$string['welcomep60'] = 'Οι παρακάτω σελίδες θα σας καθοδηγήσουν με εύκολα βήματα στην εγκατάσταση και ρύθμιση του <strong>ΠΗΛΕΑΣ </strong> στο υπολογιστή σας. Μπορείτε να δεχθείτε τις προκαθορισμένες ρυθμίσεις ή να τις αλλάξετε ανάλογα με τις ανάγκες σας.';
$string['welcomep70'] = 'Πατήστε το κουμπί "Συνέχεια" για να συνεχίσετε με την εκγατάσταση του <strong>Moodle</strong>.';
$string['wwwroot'] = 'Διεύθυνση ιστοσελίδας';
$string['wwwrooterror'] = 'Η \'διεύθυνση ιστοσελίδας\' δεν είναι έγκυρη -  η εγκατάσταση του ΠΗΛΕΑΣ δεν εμφανίζεται εκεί. Η παρακάτω τιμή έχει επαναφερθεί.';
