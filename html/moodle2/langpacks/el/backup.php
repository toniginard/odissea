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
 * Strings for component 'backup', language 'el', branch 'MOODLE_31_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Επιλέξτε αν θέλετε ή όχι να δημιουργούνται αυτόματα αντίγραφα ασφαλείας. Αν είναι επιλεγμένο το μη αυτόματο, αυτοματοποιημένη δημιουργία αντιγράφων ασφαλείας θα είναι δυνατή μόνο μέσα από το πρόγραμμα αυτομάτων αντιγράφων ασφαλείας CLI. Αυτό μπορεί να γίνει είτε χειροκίνητα από τη γραμμή εντολών ή μέσω του cron.';
$string['autoactivedisabled'] = 'Απενεργοποιημένο';
$string['autoactiveenabled'] = 'Ενεργοποιημένο';
$string['autoactivemanual'] = 'Μη αυτόματο';
$string['automatedbackupschedule'] = 'Πρόγραμμα';
$string['automatedbackupschedulehelp'] = 'Ημέρες λήψης αυτόματου αντιγράφου ασφαλείας';
$string['automatedbackupsinactive'] = 'Η προγραμματισμένη λήψη αντιγράφων ασφαλείας δεν έχει ενεργοποιηθεί από το διαχειριστή του ιστοχώρου';
$string['automatedbackupstatus'] = 'Κατάσταση λήψης αυτόματων αντιγράφων ασφαλείας';
$string['automateddeletedays'] = 'Διαγραφή αντιγράφων ασφαλείας προγενέστερων από';
$string['automatedmaxkept'] = 'Μέγιστος αριθμός αντιγράφων ασφαλείας που θα διατηρούνται';
$string['automatedmaxkepthelp'] = 'Καθορίζει το μέγιστο αριθμό των πρόσφατων αυτόματων αντιγράφων ασφαλείας που πρέπει να διατηρούνται για κάθε μάθημα. Παλαιότερα αντίγραφα ασφαλείας θα διαγράφονται αυτόματα.';
$string['automatedminkept'] = 'Ελάχιστος αριθμός αντιγράφων ασφαλείας που θα διατηρούνται';
$string['automatedminkepthelp'] = 'Αν τα αντίγραφα ασφαλείας προγενέστερα από ένα συγκεκριμένο αριθμό ημερών έχουν διαγραφεί, μπορεί να συμβεί ένα ανενεργό μάθημα να βρεθεί χωρίς κανένα αντίγραφο ασφαλείας. Για να αποφευχθεί αυτό, θα πρέπει να καθοριστεί ένας ελάχιστος αριθμός αντιγράφων ασφαλείας που θα διατηρούνται.';
$string['automatedsettings'] = 'Ρυθμίσεις αυτόματων αντιγράφων ασφαλείας';
$string['automatedsetup'] = 'Ρύθμιση αυτόματων αντιγράφων ασφαλείας';
$string['automatedstorage'] = 'Αυτόματη αποθήκευση αντιγράφων ασφαλείας';
$string['automatedstoragehelp'] = 'Επιλέξτε την τοποθεσία που θέλετε να αποθηκεύονται τα αντίγραφα ασφαλείας όταν δημιουργούνται αυτόματα.';
$string['backupactivity'] = 'Δραστηριότητα αντιγράφου ασφαλείας: {$a}';
$string['backupcourse'] = 'Αντίγραφο ασφαλείας μαθήματος: {$a}';
$string['backupcoursedetails'] = 'Λεπτομέρειες μαθήματος';
$string['backupcoursesection'] = 'Ενότητα: {$a}';
$string['backupcoursesections'] = 'Ενότητες του μαθήματος';
$string['backupdate'] = 'Ημερομηνία λήψης';
$string['backupdetails'] = 'Λεπτομέρειες αντιγράφων ασφαλείας';
$string['backupdetailsnonstandardinfo'] = 'Το επιλεγμένο αρχείο δεν είναι τυπικό αρχείο αντιγράφου ασφαλείας του Moodle. Η διαδικασία επαναφοράς θα προσπαθήσει να μετατρέψει το αρχείο αντιγράφου ασφαλείας σε τυποποιημένη μορφή και στη συνέχεια να το επαναφέρει.';
$string['backupformat'] = 'Μορφή';
$string['backupformatunknown'] = 'Άγνωστη μορφή';
$string['backuplog'] = 'Τεχνικές πληροφορίες και προειδοποιήσεις';
$string['backupmode'] = 'Λειτουργία';
$string['backupmode10'] = 'Γενικά';
$string['backupmode20'] = 'Εισαγωγή';
$string['backupmode30'] = 'Κόμβος';
$string['backupmode40'] = 'Ίδιος ιστοχώρος';
$string['backupmode50'] = 'Αυτοματοποιημένο';
$string['backupmode60'] = 'Τροποποιημένο';
$string['backupsection'] = 'Αντίγραφο ασφαλείας ενότητας μαθήματος: {$a}';
$string['backupsettings'] = 'Ρυθμίσεις αντιγράφων ασφαλείας';
$string['backupsitedetails'] = 'Λεπτομέρειες ιστοχώρου';
$string['backupstage16action'] = 'Συνέχεια';
$string['backupstage1action'] = 'Επόμενο';
$string['backupstage2action'] = 'Επόμενο';
$string['backupstage4action'] = 'Εκτέλεση αντιγράφου ασφαλείας';
$string['backupstage8action'] = 'Συνέχεια';
$string['backuptype'] = 'Τύπος';
$string['backuptypeactivity'] = 'Δραστηριότητα';
$string['backuptypecourse'] = 'Μάθημα';
$string['backuptypesection'] = 'Ενότητα';
$string['backupversion'] = 'Έκδοση αντιγράφου ασφαλείας';
$string['cannotfindassignablerole'] = 'Ο ρόλος {$a} στο αρχείο αντιγράφου ασφαλείας δεν μπορεί να αντιστοιχιστεί με κάποιο από τους ρόλους που έχετε τη δυνατότητα να αναθέσετε.';
$string['choosefilefromactivitybackup'] = 'Περιοχή αντιγράφου ασφαλείας δραστηριότητας';
$string['choosefilefromactivitybackup_help'] = 'Εδώ αποθηκεύονται αντίγραφα ασφαλείας που δημιουργούνται με χρήση των προεπιλεγμένων ρυθμίσεων.';
$string['choosefilefromautomatedbackup'] = 'Αυτόματη δημιουργία αντιγράφων ασφαλείας';
$string['choosefilefromautomatedbackup_help'] = 'Περιέχει αντίγραφα ασφαλείας που δημιουργήθηκαν αυτόματα.';
$string['choosefilefromcoursebackup'] = 'Περιοχή αντιγράφων ασφαλείας μαθήματος';
$string['choosefilefromcoursebackup_help'] = 'Όταν χρησιμοποιούνται οι προεπιλεγμένες ρυθμίσεις για τα αντίγραφα ασφαλείας των μαθημάτων, τα αντίγραφα ασφαλείας θα αποθηκεύονται εδώ';
$string['choosefilefromuserbackup'] = 'Προσωπική περιοχή αντιγράφων ασφαλείας χρήστη';
$string['choosefilefromuserbackup_help'] = 'Όταν έχει σημειωθεί η επιλογή "Ανωνυμία πληροφοριών χρήστη" στα αντίγραφα ασφαλείας μαθημάτων, τα αντίγραφα ασφαλείας θα αποθηκεύονται εδώ';
$string['configgeneralactivities'] = 'Ορίζει την προεπιλογή για την συμπερίληψη των δραστηριοτήτων στα αντίγραφα ασφαλείας.';
$string['configgeneralanonymize'] = 'Αν ενεργοποιηθεί όλες οι πληροφορίες σχετικά με τους χρήστες θα είναι ανώνυμες από προεπιλογή.';
$string['configgeneralbadges'] = 'Ορίζει την προεπιλογή για την συμπερίληψη κονκάρδων στα αντίγραφα ασφαλείας.';
$string['configgeneralblocks'] = 'Ορίζει την προεπιλογή για την συμπερίληψη των μπλοκ στα αντίγραφα ασφαλείας.';
$string['configgeneralcomments'] = 'Ορίζει την προεπιλογή για την συμπερίληψη των σχολίων στα αντίγραφα ασφαλείας.';
$string['configgeneralfilters'] = 'Ορίζει την προεπιλογή για την συμπερίληψη φίλτρων στα αντίγραφα ασφαλείας.';
$string['configgeneralgroups'] = 'Ορίζει την προεπιλογή για την συμπερίληψη ομάδων και ομαδοποιήσεων στα αντίγραφα ασφαλείας.';
$string['configgeneralhistories'] = 'Ορίζει την προεπιλογή για την συμπερίληψη του ιστορικού χρήστη εντός των αντιγράφων ασφαλείας.';
$string['configgenerallogs'] = 'Αν ενεργοποιηθεί οι αναφορές θα περιλαμβάνονται στα αντίγραφα ασφαλέιας από προεπιλογή.';
$string['configgeneralquestionbank'] = 'Αν είναι ενεργοποιημένο η τράπεζα ερωτήσεων θα περιλαμβάνεται στα αντίγραφα ασφαλείας από προεπιλογή. ΣΗΜΕΙΩΣΗ: Η απενεργοποίηση αυτής της ρύθμισης θα απενεργοποιήσει τη δημιουργία αντιγράφων ασφαλείας δραστηριοτήτων που χρησιμοποιούν τράπεζα ερωτήσεων, όπως το κουίζ.';
$string['configgeneralroleassignments'] = 'Αν ενεργοποιηθεί από προεπιλογή θα δημιουργηθούν επίσης αντίγραφα ασφαλείας για τις αναθέσεις ρόλων.';
$string['configgeneralusers'] = 'Ορίζει την προεπιλογή για το αν περιλαμβάνονται οι χρήστες στα αντίγραφα ασφαλείας.';
$string['configgeneraluserscompletion'] = 'Αν ενεργοποιηθεί οι πληροφορίες ολοκλήρωσης ενός χρήστη θα περιλαμβάνονται στα αντίγραφα ασφαλείας από προεπιλογή.';
$string['configloglifetime'] = 'Καθορίζει το χρονικό διάστημα που θέλετε να κρατήσετε πληροφορίες δημιουργίας αντιγράφων ασφαλείας. Τα αρχεία καταγραφής που είναι προγενέστερα αυτόυ του χρονικού διαστήματος θα διαγράφονται αυτόματα. Συνιστάται να διατηρείται αυτή η τιμήμικρές, επειδή οι πληροφορίες δημιουργίας αντιγράφων ασφαλείας καταγράφονται μπορεί να είναι τεράστιες.';
$string['confirmcancel'] = 'Ακύρωση αντιγράφου ασφαλείας';
$string['confirmcancelno'] = 'Παραμονή';
$string['confirmcancelquestion'] = 'Είστε βέβαιοι ότι θέλετε να κάνετε ακύρωση; Όλες οι πληροφορίες που έχετε εισάγει θα χαθούν.';
$string['confirmcancelyes'] = 'Ακύρωση';
$string['confirmnewcoursecontinue'] = 'Προειδοποίηση νέου μαθήματος';
$string['confirmnewcoursecontinuequestion'] = 'Ένα προσωρινό (κρυφό) μάθημα θα δημιουργηθεί από τη διαδικασία επαναφοράς μαθήματος. Για να ματαιώσετε την επαναφοράς πατήστε Ακύρωση. Μην κλείσετε το πρόγραμμα περιήγησης, κατά τη διαδικασία επαναφοράς.';
$string['coursecategory'] = 'Κατηγορία που θα γίνει επαναφορά το μάθημα';
$string['courseid'] = 'Αρχικό αναγνωριστικό';
$string['coursesettings'] = 'Ρυθμίσεις Μαθήματος';
$string['coursetitle'] = 'Τίτλος';
$string['currentstage1'] = 'Αρχικές ρυθμίσεις';
$string['currentstage16'] = 'Ολοκλήρωση';
$string['currentstage2'] = 'Ρυθμίσεις διάταξης';
$string['currentstage4'] = 'Επιβεβαίωση και επανεξέταση';
$string['currentstage8'] = 'Εκτέλεση αντιγράφου ασφαλείας';
$string['enterasearch'] = 'Εισάγετε μια αναζήτηση';
$string['error_block_for_module_not_found'] = 'Βρέθηκε ορφανό στιγμιότυπο μπλοκ (αναγνωριστικό: {$a->bid}) για το άρθρωμα αναγνωριστικό(id: {$a->mid}). Αυτό το μπλοκ δεν θα συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['errorcopyingbackupfile'] = 'Αποτυχία αντιγραφής του αρχείου αντιγράφου ασφαλεάις στον προσωρινό φάκελο πριν την επαναφορά.';
$string['error_course_module_not_found'] = 'Βρέθηκε ορφανό άρθρωμα μαθήματος (αναγνωριστικό: {$a}). Αυτό το άρθρωμα δεν θα συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['errorfilenamemustbezip'] = 'Το όνομα του αρχείου που εισάγετε πρέπει να είναι ένα αρχείο ZIP και να έχει την επέκταση .mbz';
$string['errorfilenamerequired'] = 'Θα πρέπει να εισάγετε ένα έγκυρο όνομα αρχείου για το αντίγραφο ασφαλείας';
$string['errorinvalidformat'] = 'Άγνωστη μορφή αντιγράφου ασφαλείας';
$string['errorinvalidformatinfo'] = 'Το επιλεγμένο αρχείο δεν είναι ένα έγκυρο αρχείο αντιγράφου ασφαλείας του Moodle και δεν είναι δυνατή η επαναφορά του.';
$string['errorminbackup20version'] = 'Αυτό το αντίγραφο ασφαλείας έχει δημιουργηθεί με μία υπο ανάπτυξη έκδοση του Moodle δημιουργίας αντιγράφων ασφαλείας ({$a->backup}). Ελάχιστο απαιτούμενο είναι {$a->min}. Δεν είναι εφικτή η επαναφορά.';
$string['errorrestorefrontpagebackup'] = 'Μπορείτε να επαναφέρετε μόνο αντίγραφα ασφαλείας πρώτης σελίδας στην πρώτη σελίδα';
$string['executionsuccess'] = 'Το αρχείο αντιγράφου ασφαλείας δημιουργήθηκε με επιτυχία.';
$string['filealiasesrestorefailures'] = 'Αποτυχίες επαναφοράς ψευδώνυμων';
$string['filealiasesrestorefailures_help'] = 'Τα ψευδώνυμα είναι συμβολικοί σύνδεσμοι σε άλλα αρχεία, συμπεριλαμβανομένων εκείνων που είναι αποθηκευμένα σε εξωτερικά αποθετήρια. Σε ορισμένες περιπτώσεις, το Moodle δεν μπορεί να τα επαναφέρει - για παράδειγμα, όταν η γίνεται επαναφορά του αντιγράφου ασφαλείας σε ένα άλλο ιστοχώρο ή όταν δεν υπάρχει το αναφερόμενο αρχείο.<br/><br/>
Περισσότερες λεπτομέρειες και η πραγματική αιτία της αποτυχίας μπορεί να βρεθεί στο αρχείο καταγραφής της επαναφοράς.';
$string['filealiasesrestorefailuresinfo'] = 'Δεν είναι δυνατή η επαναφορά μερικών ψευδώνυμων που περιλαμβάνονται στο αρχείο αντιγράφου ασφαλείας. Η ακόλουθη λίστα περιέχει την αναμενόμενη θέση τους και το αρχείο προέλευσης που αναφέρονταν στον αρχικό ιστοχώρο.';
$string['filename'] = 'Όνομα αρχείου';
$string['filereferencesincluded'] = 'Οι αναφορές του αρχείου σε εξωτερικό περιεχόμενο περιλαμβάνονται στο αρχείο αντιγράφου ασφαλείας. Αυτές δεν θα λειτουργούν αν το αντίγραφο ασφαλείας γίνει επεναφορά σε διαφορετικό ιστοχώρο.';
$string['filereferencesnotsamesite'] = 'Το αρχείο αντιγράφου ασφαλείας είναι από διαφορετικό ιστοχώρο, και έτσι δεν είναι εφικτή η επαναφορά των αναφορών του αρχείου.';
$string['filereferencessamesite'] = 'Το αρχείο αντιγράφου ασφαλείας είναι από αυτό το ιστοχώρο, και έτσι είναι εφικτή η επαναφορά των αναφορών του αρχείου.';
$string['generalactivities'] = 'Συμπεριέλαβε δραστηριότητες';
$string['generalanonymize'] = 'Ανωνυμία πληροφοριών';
$string['generalbackdefaults'] = 'Γενικές προεπιλογές αντιγράφων ασφαλείας';
$string['generalbadges'] = 'Συμπερίληψη κονκάρδων';
$string['generalblocks'] = 'Συμπεριέλαβε μπλοκ';
$string['generalcomments'] = 'Συμπεριλάβετε σχόλια';
$string['generalfilters'] = 'Συμπεριέλαβε φίλτρα';
$string['generalgradehistories'] = 'Συμπεριέλαβε ιστορικό';
$string['generalgroups'] = 'Συμπερίληψη ομάδων και ομαδοποιήσεων';
$string['generalhistories'] = 'Συμπεριέλαβε ιστορικό';
$string['generallogs'] = 'Συπμεριέλαβε αναφορές';
$string['generalquestionbank'] = 'Συμπερίληψη τράπεζας ερωτήσεων';
$string['generalroleassignments'] = 'Συμπεριέλαβε αναθέσεις ρόλων';
$string['generalsettings'] = 'Γενικές ρυθμίσεις δημιουργίας αντιγράφων ασφαλείας';
$string['generalusers'] = 'Συμπεριέλαβε χρήστες';
$string['generaluserscompletion'] = 'Συμπεριέλαβε πληροφορίες ολοκλήρωσης ενός χρήστη';
$string['hidetypes'] = 'Επιλογές απόκρυψης τύπων';
$string['importbackupstage16action'] = 'Συνέχεια';
$string['importbackupstage1action'] = 'Επόμενο';
$string['importbackupstage2action'] = 'Επόμενο';
$string['importbackupstage4action'] = 'Εκτέλεση εισαγωγής';
$string['importbackupstage8action'] = 'Συνέχεια';
$string['importcurrentstage0'] = 'Επιλογή μαθήματος';
$string['importcurrentstage1'] = 'Αρχικές ρυθμίσεις';
$string['importcurrentstage16'] = 'Ολοκλήρωση';
$string['importcurrentstage2'] = 'Ρυθμίσεις διάταξης';
$string['importcurrentstage4'] = 'Επιβεβαίωση και επανεξέταση';
$string['importcurrentstage8'] = 'Εκτελέστε την εισαγωγή';
$string['importfile'] = 'Εισαγωγή ενός αντιγράφου ασφαλείας';
$string['importgeneralduplicateadminallowed'] = 'Να επιτρέπεται επίλυση σύγκρουση admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Αν ο ιστοχώρος έχει ένα λογαριασμό με όνομα χρήστη \'admin\', και γίνει προσπάθεια επαναφοράς ενός αρχείου αντιγράφου ασφαλείας που περιέχει ένα λογαριασμό με όνομα χρήστη \'admin\' θα προκληθεί σύγκρουση. Αν είναι ενεργοποιημένη αυτή η ρύθμιση, η σύγκρουση θα επιλυθεί με την αλλαγή του ονόματος χρήστη στο αρχείο αντιγράφου ασφαλείας σε \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Μέγιστος αριθμός μαθημάτων για εισαγωγή';
$string['importgeneralmaxresults_desc'] = 'Ελέγχει τον αριθμό των μαθημάτων που απαριθμούνται στο πρώτο στάδιο της διαδικασίας εισαγωγής';
$string['importgeneralsettings'] = 'Προεπιλογές γενικής εισαγωγής';
$string['importsuccess'] = 'Η εισαγωγή ολοκληρώθηκε. Κάντε κλικ στο κουμπί Συνέχεια για να επιστρέψετε στο μάθημα';
$string['includeactivities'] = 'Περιλαμβάνουν:';
$string['includeditems'] = 'Αντικείμενα που συμπεριλαμβάνονται:';
$string['includefilereferences'] = 'Αναφορές αρχείου σε εξωτερικό περιεχόμενο';
$string['includesection'] = 'Ενότητα {$a}';
$string['includeuserinfo'] = 'Δεδομένα χρήστη';
$string['jumptofinalstep'] = 'Μετάβαση στο τελικό στάδιο';
$string['locked'] = 'Κλειδωμένο';
$string['lockedbyconfig'] = 'Η ρύθμιση αυτή έχει κλειδωθεί από τις προεπιλεγμένες ρυθμίσεις δημιουργίας αντιγράφων ασφαλείας';
$string['lockedbyhierarchy'] = 'Κλειδωμένο από εξαρτήσεις';
$string['lockedbypermission'] = 'Δεν έχετε επαρκή δικαιώματα για να αλλάξετε αυτή τη ρύθμιση';
$string['loglifetime'] = 'Διατήρηση αρχείων καταγραφής για';
$string['managefiles'] = 'Διαχείριση αντιγράφων ασφαλείας';
$string['missingfilesinpool'] = 'Δεν είναι δυνατή η αποθήκευση κάποιων αρχείων κατά τη δημιουργία αντιγράφου ασφαλείας, και έτσι δεν θα είναι εφικτή η επαναφορά τους.';
$string['module'] = 'Άρθρωμα';
$string['moodleversion'] = 'Έκδοση Moodle';
$string['morecoursesearchresults'] = 'Βρέθηκαν περισσότερα από {$a} μαθήματα, εμφάνιση {$a} πρώτων αποτελεσμάτων';
$string['moreresults'] = 'Υπάρχουν πάρα πολλά αποτελέσματα, εισάγετε μια πιο συγκεκριμένη αναζήτηση.';
$string['nomatchingcourses'] = 'Δεν υπάρχουν μαθήματα για να εμφανίσετε';
$string['norestoreoptions'] = 'Δεν υπάρχουν κατηγορίες ή υπάρχοντα μαθήματα για επαναφορά.';
$string['originalwwwroot'] = 'URL αντιγράφου ασφαλείας';
$string['preparingdata'] = 'Προετοιμασία δεδομένων';
$string['preparingui'] = 'Προετοιμασία εμφάνισης σελίδας';
$string['previousstage'] = 'Προηγούμενο';
$string['qcategory2coursefallback'] = 'Η κατηγορία ερωτήσεων "{$a->name}", αρχικά στο πλαίσιο σύστημα / κατηγορία μαθημάτων στο αρχείο αντιγράφου ασφαλείας, θα δημιουργηθεί στο πλαίσιο μαθήματος κατά την επαναφορά';
$string['qcategorycannotberestored'] = 'Δεν είναι δυνατή η δημιουργία της κατηγορίας ερωτήσεων "{$a->name}" κατά την επαναφορά';
$string['question2coursefallback'] = 'Η κατηγορία ερωτήσεων "{$a->name}", αρχικά στο πλαίσιο σύστημα / κατηγορία μαθημάτων στο αρχείο αντιγράφου ασφαλείας, θα δημιουργηθεί στο πλαίσιο μαθήματος κατά την επαναφορά';
$string['questionegorycannotberestored'] = 'Δεν είναι δυνατή η δημιουργία της κατηγορίας ερωτήσεων "{$a->name}" κατά την επαναφορά';
$string['restoreactivity'] = 'Δραστηριότητα επαναφοράς';
$string['restorecourse'] = 'Επαναφορά μαθήματος';
$string['restorecoursesettings'] = 'Ρυθμίσεις Μαθήματος';
$string['restoreexecutionsuccess'] = 'Το μάθημα έγινε επαναφορά με επιτυχία, πατώντας το κουμπί Συνέχεια παρακάτω θα δείτε το μάθημα που έγινε επαναφορά.';
$string['restorefileweremissing'] = 'Δεν είναι εφικτή η επαναφορά κάποιων αρχείων, διότι λείπουν από το αντίγραφο ασφαλείας.';
$string['restorenewcoursefullname'] = 'Νέο όνομα μαθήματος';
$string['restorenewcourseshortname'] = 'Σύντομο όνομα νέου μαθήματος';
$string['restorenewcoursestartdate'] = 'Νέα ημερομηνία έναρξης';
$string['restorerolemappings'] = 'Επαναφορά αντιστοιχήσεων ρόλων';
$string['restorerootsettings'] = 'Επαναφορά ρυθμίσεων';
$string['restoresection'] = 'Επαναφορά ενότητας';
$string['restorestage1'] = 'Επιβεβαίωση';
$string['restorestage16'] = 'Ανασκόπηση';
$string['restorestage16action'] = 'Εκτέλεση επαναφοράς';
$string['restorestage1action'] = 'Επόμενο';
$string['restorestage2'] = 'Προορισμός';
$string['restorestage2action'] = 'Επόμενο';
$string['restorestage32'] = 'Διαδικασία';
$string['restorestage32action'] = 'Συνέχεια';
$string['restorestage4'] = 'Ρυθμίσεις';
$string['restorestage4action'] = 'Επόμενο';
$string['restorestage64'] = 'Ολοκλήρωση';
$string['restorestage64action'] = 'Συνέχεια';
$string['restorestage8'] = 'Σχήμα';
$string['restorestage8action'] = 'Επόμενο';
$string['restoretarget'] = 'Επαναφορά στόχου';
$string['restoretocourse'] = 'Επαναφορά στο μάθημα:';
$string['restoretocurrentcourse'] = 'Επαναφορά σε αυτό το μάθημα';
$string['restoretocurrentcourseadding'] = 'Συγχώνευση του μαθήματος από το αντίγραφο ασφαλείας σε αυτό το μάθημα';
$string['restoretocurrentcoursedeleting'] = 'Διαγραφή των περιεχομένων αυτού του μαθήματος και επαναφορά';
$string['restoretoexistingcourse'] = 'Επαναφορά σε ένα υφιστάμενο μάθημα';
$string['restoretoexistingcourseadding'] = 'Συγχώνευση του μαθήματος από το αντίγραφο ασφαλείας στο υφιστάμενο μάθημα';
$string['restoretoexistingcoursedeleting'] = 'Διαγραφή των περιεχομένων του υφιστάμενου μαθήματος και επαναφορά';
$string['restoretonewcourse'] = 'Επαναφορά ως νέο μάθημα';
$string['restoringcourse'] = 'Επαναφορά μαθήματος σε εξέλιξη';
$string['restoringcourseshortname'] = 'επαναφορά';
$string['rootenrolmanual'] = 'Επαναφορά ως χειροκίνητες εγγραφές';
$string['rootsettingactivities'] = 'Συμπεριέλαβε δραστηριότητες';
$string['rootsettinganonymize'] = 'Ανωνυμία πληροφοριών χρήστη';
$string['rootsettingbadges'] = 'Συμπερίληψη κονκάρδων';
$string['rootsettingblocks'] = 'Συμπεριέλαβε μπλοκ';
$string['rootsettingcalendarevents'] = 'Συμπερίληψη γεγονότων ημερολογίου';
$string['rootsettingcomments'] = 'Συμπεριλάβετε σχόλια';
$string['rootsettingcompetencies'] = 'Συμπερίληψη δεξιοτήτων';
$string['rootsettingfilters'] = 'Συμπεριέλαβε φίλτρα';
$string['rootsettinggradehistories'] = 'Συμπεριέλαβε βαθμολογικό ιστορικό';
$string['rootsettinggroups'] = 'Συμπερίληψη ομάδων και ομαδοποιήσεων';
$string['rootsettingimscc1'] = 'Μετατροπή σε IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Μετατροπή σε IMS Common Cartridge 1.1';
$string['rootsettinglogs'] = 'Συμπεριέλαβε αρχεία καταγραφής (logs) μαθήματος';
$string['rootsettingquestionbank'] = 'Συμπερίληψη τράπεζας ερωτήσεων';
$string['rootsettingroleassignments'] = 'Συμπερίληψη αναθέσεων ρόλου χρήστη';
$string['rootsettings'] = 'Ρυθμίσεις αντιγράφων ασφαλείας';
$string['rootsettingusers'] = 'Συμπερίληψη εγγεγραμμένων χρηστών';
$string['rootsettinguserscompletion'] = 'Συμπεριέλαβε λεπτομερειες ολοκλήρωσης χρήστη';
$string['sectionactivities'] = 'Δραστηριότητες';
$string['sectioninc'] = 'Συμπεριλαμβάνονται στο αντίγραφο ασφαλείας (χωρίς πληροφορίες χρήστη)';
$string['sectionincanduser'] = 'Συμπεριλαμβάνονται στο αντίγραφο ασφαλείας μαζί με πληροφορίες χρήστη';
$string['selectacategory'] = 'Επιλογή μιας κατηγορίας';
$string['selectacourse'] = 'Επιλογή ενός μαθήματος';
$string['setting_course_fullname'] = 'Όνομα μαθήματος';
$string['setting_course_shortname'] = 'Σύντομο όνομα μαθήματος';
$string['setting_course_startdate'] = 'Ημερομηνία έναρξης μαθήματος';
$string['setting_keep_groups_and_groupings'] = 'Διατήρηση τρέχοντων ομάδων και ομαδοποιήσεων';
$string['setting_keep_roles_and_enrolments'] = 'Διατήρηση τρέχοντων ρόλων και εγγραφών';
$string['setting_overwriteconf'] = 'Αντικατάσταση διαμόρφωσης μαθήματος';
$string['showtypes'] = 'Εμφάνιση επιλογών τύπου';
$string['sitecourseformatwarning'] = 'Αυτό είναι ένα αντίγραφο ασφαλείας πρώτης σελίδας, σημειώστε ότι μπορέι να γίνει επαναφορά μόνο στην πρώτη σελίδα';
$string['skiphidden'] = 'Παράβλεψη κρυφών μαθημάτων';
$string['skiphiddenhelp'] = 'Επιλέξτε αν θα γίνει παράβλεψη ή όχι των κρυφών μαθημάτων';
$string['skipmodifdays'] = 'Παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από';
$string['skipmodifdayshelp'] = 'Επιλέξτε αν θα γίνει παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από έναν αριθμό ημερών';
$string['skipmodifprev'] = 'Παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από το προηγούμενο αντίγραφο ασφαλείας';
$string['skipmodifprevhelp'] = 'Επιλέξτε αν θα γίνει παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από την τελευταία αυτόματη λήψη αντιγράφου ασφαλείας. Αυτό απαιτεί να είναι ενεργοποιημένη η σύνδεση.';
$string['storagecourseandexternal'] = 'Περιοχή αρχείων αντιγράφων ασφαλείας μαθήματος και ο ορισμένος κατάλογος';
$string['storagecourseonly'] = 'Περιοχή αρχείων αντιγράφων ασφαλείας μαθήματος';
$string['storageexternalonly'] = 'Ορισμένος κατάλογος για αυτόματα αντίγραφα ασφαλείας';
$string['timetaken'] = 'Χρόνος που χρειάστηκε';
$string['title'] = 'Τίτλος';
$string['totalcategorysearchresults'] = 'Σύνολο κατηγοριών: {$a}';
$string['totalcoursesearchresults'] = 'Σύνολο μαθημάτων: {$a}';
$string['unnamedsection'] = 'Ενότητα χωρίς όνομα';
$string['userinfo'] = 'Πληροφορίες χρήστη';
