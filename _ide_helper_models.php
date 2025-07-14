<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $group_td_id
 * @property int|null $subject_id
 * @property int|null $year_id
 * @property string|null $year_designation
 * @property string|null $subject_designation
 * @property string|null $group_td_designation
 * @property string|null $teacher_name
 * @property string|null $teacher_cin
 * @property int|null $semestre
 * @property string|null $date
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $period_id
 * @property string|null $slug
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AbsenceStudent> $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereGroupTdDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereGroupTdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence wherePeriodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereSemestre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereSubjectDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereTeacherCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereTeacherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereYearDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereYearId($value)
 */
	class Absence extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $can_teacher_update
 * @property int|null $nb_passed_days
 * @property int|null $nb_update_days
 * @property int|null $auto_period
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereAutoPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereCanTeacherUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereNbPassedDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereNbUpdateDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceSetting whereUpdatedBy($value)
 */
	class AbsenceSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $student_name
 * @property int|null $student_cin
 * @property int|null $reclamation
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $absence_id
 * @property-read \App\Models\Absence|null $absence
 * @property-read \App\Models\StudentsPredefinedList|null $student
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereAbsenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereReclamation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereStudentCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereStudentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceStudent whereUpdatedBy($value)
 */
	class AbsenceStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $type
 * @property string|null $cover
 * @property string|null $folder
 * @property string|null $lieu
 * @property string|null $date
 * @property string|null $short_description_fr
 * @property string|null $short_description_ar
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $short_description_en
 * @property int|null $organism_id
 * @property int|null $publier
 * @property string|null $slug
 * @property string|null $short_code
 * @property string|null $links
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereFolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereLieu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereLinks($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereOrganismId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereShortDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereShortDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereShortDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Album whereUpdatedBy($value)
 */
	class Album extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $theme_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $cover
 * @property string|null $isbn
 * @property string|null $author
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUpdatedBy($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $book_id
 * @property string|null $user_name
 * @property string|null $user_cin
 * @property string|null $book
 * @property string|null $book_theme
 * @property string|null $etat
 * @property string|null $etat_deadline
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $date_pris
 * @property string|null $date_retour
 * @property string|null $date_limite
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDateLimite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDatePris($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDateRetour($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereEtatDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUserCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUserName($value)
 */
	class Booking extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $type
 * @property string|null $duration_reservation
 * @property string|null $duration_pret
 * @property string|null $max_reservation
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereDurationPret($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereDurationReservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereMaxReservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookingConfig whereUpdatedBy($value)
 */
	class BookingConfig extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $file
 * @property string|null $link
 * @property string|null $slug
 * @property int|null $timer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereTimer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuzzVideo whereUpdatedAt($value)
 */
	class BuzzVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $choix1
 * @property string|null $choix2
 * @property string|null $cin_passport
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $nom_jeune_fille
 * @property string|null $sexe
 * @property string|null $date_naissance
 * @property string|null $nationalite
 * @property string|null $adresse
 * @property string|null $pays
 * @property string|null $gouvernorat
 * @property string|null $ville
 * @property string|null $code_postal
 * @property string|null $telephone
 * @property string|null $email
 * @property string|null $annee_bac
 * @property float|null $moyenne_bac
 * @property int|null $nb_redoublement
 * @property string|null $reussite_3ans
 * @property int|null $retrait_inscription
 * @property float|null $moyenne_diplome
 * @property string|null $type_etablissement
 * @property string|null $nature_diplome
 * @property string|null $specialite
 * @property string|null $annee_diplome
 * @property string|null $situation_pro
 * @property int|null $nb_stages
 * @property string|null $etudes_superieures
 * @property string|null $date_soumission
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $year_id
 * @property float|null $score
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereAnneeBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereAnneeDiplome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereChoix1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereChoix2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereCinPassport($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereCodePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereDateSoumission($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereEtudesSuperieures($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereGouvernorat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereMoyenneBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereMoyenneDiplome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereNationalite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereNatureDiplome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereNbRedoublement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereNbStages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereNomJeuneFille($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster wherePays($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereRetraitInscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereReussite3ans($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereSituationPro($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereTypeEtablissement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereVille($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CandidatureMaster whereYearId($value)
 */
	class CandidatureMaster extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $course_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $files
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property string|null $type
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chapter whereUpdatedBy($value)
 */
	class Chapter extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $designation
 * @property int|null $etat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chat whereUserId($value)
 */
	class Chat extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cin query()
 */
	class Cin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $subject
 * @property string|null $message
 * @property string|null $file
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property string|null $name
 * @property string|null $email
 * @property int|null $destination_id
 * @property int|null $user_id
 * @property string|null $status
 * @property string|null $priority
 * @property int|null $claim_type_id
 * @property int|null $responsible_id
 * @property int|null $frigidaire
 * @property int|null $ref_id
 * @property string|null $feedback
 * @property-read \App\Models\Destination|null $destination
 * @property-read \App\Models\User|null $responsable
 * @property-read \App\Models\ClaimType|null $type
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereClaimTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereFrigidaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereRefId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Claim whereUserId($value)
 */
	class Claim extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimDestination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimDestination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimDestination query()
 */
	class ClaimDestination extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $order
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $module
 * @property int|null $responsible_id
 * @property int|null $claim_destination_id
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereClaimDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimType whereUpdatedBy($value)
 */
	class ClaimType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $claim_id
 * @property int|null $user_id
 * @property string|null $message
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereClaimId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClaimUser whereUserId($value)
 */
	class ClaimUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Club newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Club newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Club query()
 */
	class Club extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClubUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClubUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClubUser query()
 */
	class ClubUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $parent_id
 * @property string|null $content
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $course_id
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUserId($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $keyword
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigKeyword whereUpdatedBy($value)
 */
	class ConfigKeyword extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $route
 * @property string|null $display_type
 * @property string|null $title
 * @property string|null $title_bg_banner
 * @property string|null $widgets
 * @property string|null $specific_data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereDisplayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereSpecificData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereTitleBgBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigLayout whereWidgets($value)
 */
	class ConfigLayout extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $Name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ConfigKeyword> $keywords
 * @property-read int|null $keywords_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModule whereUpdatedBy($value)
 */
	class ConfigModule extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $config_module_id
 * @property int|null $config_keyword_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword whereConfigKeywordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword whereConfigModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigModuleKeyword whereUpdatedAt($value)
 */
	class ConfigModuleKeyword extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $destination_id
 * @property int|null $seen
 * @property int|null $replied
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereReplied($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereUpdatedBy($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $current_year_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $abbreviation
 * @property string|null $addresse_fr
 * @property string|null $addresse_en
 * @property string|null $addresse_ar
 * @property string|null $phone
 * @property string|null $phone_2
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $cover
 * @property string|null $university
 * @property string|null $ministere
 * @property string|null $facebook_link
 * @property string|null $youtube_link
 * @property string|null $google_link
 * @property string|null $linkedin_link
 * @property string|null $instagram_link
 * @property string|null $favicon
 * @property string|null $logo
 * @property string|null $logo_footer
 * @property string|null $short_description_fr
 * @property string|null $short_description_en
 * @property string|null $short_description_ar
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $creation_date
 * @property string|null $white_logo
 * @property string|null $black_logo
 * @property string|null $default_banner
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereAddresseAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereAddresseEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereAddresseFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereBlackLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereCreationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereCurrentYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDefaultBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereFacebookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereGoogleLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereInstagramLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereLinkedinLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereLogoFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereMinistere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereShortDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereShortDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereShortDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereUniversity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereWhiteLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coordinate whereYoutubeLink($value)
 */
	class Coordinate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $sector_id
 * @property int $user_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoordinationSector whereUserId($value)
 */
	class CoordinationSector extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Correspondence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Correspondence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Correspondence query()
 */
	class Correspondence extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $year_id
 * @property int|null $subject_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $teacher_id
 * @property string|null $teacher_cin
 * @property string|null $permission_comment
 * @property int|null $publier
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course wherePermissionComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereTeacherCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereYearId($value)
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $course_id
 * @property int|null $group_td_id
 * @property string|null $designation
 * @property string|null $description
 * @property string|null $expiration_date
 * @property string|null $files
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $teacher_cin
 * @property int|null $year_id
 * @property-read \App\Models\GroupTd|null $groupTd
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereExpirationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereGroupTdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereTeacherCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRender whereYearId($value)
 */
	class CourseRender extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $course_render_id
 * @property int|null $user_id
 * @property string|null $files
 * @property int|null $description
 * @property int|null $publier
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $userRenders
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereCourseRenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CourseRenderUser whereUserId($value)
 */
	class CourseRenderUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $group_td_id
 * @property int|null $course_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereGroupTdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CoursesGroupTd whereUpdatedBy($value)
 */
	class CoursesGroupTd extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $cv_education_type_id
 * @property string|null $start
 * @property string|null $end
 * @property int|null $is_current
 * @property string|null $place
 * @property string|null $description
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereCvEducationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereIsCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducation whereUserId($value)
 */
	class CvEducation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvEducationType whereUpdatedBy($value)
 */
	class CvEducationType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $cv_experience_type_id
 * @property string|null $start
 * @property string|null $end
 * @property int|null $is_current
 * @property string|null $designation
 * @property string|null $description
 * @property string|null $place
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereCvExperienceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereIsCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperience whereUserId($value)
 */
	class CvExperience extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvExperienceType whereUpdatedBy($value)
 */
	class CvExperienceType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguage whereUpdatedBy($value)
 */
	class CvLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $cv_language_id
 * @property string|null $note
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereCvLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvLanguageUser whereUserId($value)
 */
	class CvLanguageUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $cv_side_bg
 * @property string|null $cv_side_color_text
 * @property string|null $cv_head_bg
 * @property string|null $cv_head_color_text
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property int|null $theme
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereCvHeadBg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereCvHeadColorText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereCvSideBg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereCvSideColorText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSetting whereUserId($value)
 */
	class CvSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $cv_skill_category_id
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereCvSkillCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkill whereUpdatedBy($value)
 */
	class CvSkill extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillCategory whereUpdatedBy($value)
 */
	class CvSkillCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $cv_skill_id
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereCvSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CvSkillUser whereUserId($value)
 */
	class CvSkillUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $section
 * @property string|null $cover
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DefaultCover whereUpdatedBy($value)
 */
	class DefaultCover extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $teacher_cin
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $cover
 * @property string|null $description_en
 * @property string|null $description_fr
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sector> $sectors
 * @property-read int|null $sectors_count
 * @property-read \App\Models\Teacher|null $teacher
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Teacher> $teachers
 * @property-read int|null $teachers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereTeacherCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereUpdatedBy($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $role_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $order
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $module
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Destination whereUpdatedBy($value)
 */
	class Destination extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $cin
 * @property string|null $avatar
 * @property string|null $nationalite
 * @property string|null $genre
 * @property string|null $date_naissance
 * @property string|null $address
 * @property string|null $linkedin
 * @property string|null $lieu_naissance
 * @property string|null $cv
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereCv($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereLieuNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereNationalite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Diplome whereUpdatedBy($value)
 */
	class Diplome extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralComission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralComission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralComission query()
 */
	class DoctoralComission extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCommissionUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCommissionUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCommissionUser query()
 */
	class DoctoralCommissionUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCourse query()
 */
	class DoctoralCourse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCourseType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCourseType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCourseType query()
 */
	class DoctoralCourseType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCredit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCredit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralCredit query()
 */
	class DoctoralCredit extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDepot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDepot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDepot query()
 */
	class DoctoralDepot extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDepotResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDepotResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDepotResponse query()
 */
	class DoctoralDepotResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDiplome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDiplome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDiplome query()
 */
	class DoctoralDiplome extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDirection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDirection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralDirection query()
 */
	class DoctoralDirection extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralEstablishment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralEstablishment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralEstablishment query()
 */
	class DoctoralEstablishment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralReport query()
 */
	class DoctoralReport extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralSoutenance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralSoutenance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralSoutenance query()
 */
	class DoctoralSoutenance extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralStudent query()
 */
	class DoctoralStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralThesis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralThesis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralThesis query()
 */
	class DoctoralThesis extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralValidationLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralValidationLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DoctoralValidationLog query()
 */
	class DoctoralValidationLog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $subject_document_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $files
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property string|null $for
 * @property string|null $slug
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereSubjectDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Document whereUpdatedBy($value)
 */
	class Document extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $document_id
 * @property int|null $subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DocumentDownload whereUserId($value)
 */
	class DocumentDownload extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaine whereUpdatedBy($value)
 */
	class Domaine extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EducationStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EducationStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EducationStudent query()
 */
	class EducationStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $type
 * @property string|null $link
 * @property string|null $from
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Emploi whereUpdatedBy($value)
 */
	class Emploi extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation
 * @property string|null $logo
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $fax
 * @property string|null $description
 * @property string|null $location
 * @property string|null $responsable_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $publier
 * @property string|null $website
 * @property int|null $domaine_id
 * @property string|null $slug
 * @property int|null $validation
 * @property-read \App\Models\Domaine|null $domaine
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereDomaineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereResponsableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprise whereWebsite($value)
 */
	class Entreprise extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $cover
 * @property string|null $place
 * @property string|null $organizer
 * @property string|null $date_start
 * @property string|null $date_end
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $organism_id
 * @property string|null $slug
 * @property string|null $files
 * @property string|null $planning
 * @property string|null $a_la_une
 * @property string|null $target
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereALaUne($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereOrganismId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereOrganizer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event wherePlanning($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereUpdatedBy($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @property-read EventCategory|null $parentId
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventCategory whereUpdatedBy($value)
 */
	class EventCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $event_id
 * @property int|null $events_type_id
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereEventsTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventPerType whereUpdatedBy($value)
 */
	class EventPerType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $parent_id
 * @property-read EventsType|null $parentId
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventsType whereUpdatedBy($value)
 */
	class EventsType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback query()
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $diplome_prepare
 * @property string|null $specialite
 * @property string|null $etat
 * @property int|null $niveau_etude
 * @property int|null $year_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $student_id
 * @property string|null $etablissement_educatif_precedente
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $student_name
 * @property string|null $group_designation
 * @property string|null $group_td_designation
 * @property string|null $group_tp_designation
 * @property string|null $adresse
 * @property string|null $code_postale
 * @property string|null $profession
 * @property string|null $employeur
 * @property string|null $etat_civil
 * @property string|null $etat_militaire
 * @property string|null $besoin_specifique
 * @property string|null $description_besoin_specifique
 * @property string|null $adresse_parents
 * @property string|null $code_postale_parents
 * @property string|null $tel_parents
 * @property string|null $conjoint
 * @property string|null $profession_conjoint
 * @property string|null $etablissement_profession_conjoint
 * @property string|null $nombre_enfants
 * @property string|null $specialite_educatif_precedent
 * @property string|null $phone
 * @property string|null $avatar
 * @property string|null $niveau_etab_educatif_precedent
 * @property string|null $numero_inscription
 * @property string|null $sector_designation
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereAdresseParents($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereBesoinSpecifique($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereCodePostale($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereCodePostaleParents($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereConjoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereDescriptionBesoinSpecifique($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereDiplomePrepare($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereEmployeur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereEtablissementEducatifPrecedente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereEtablissementProfessionConjoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereEtatCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereEtatMilitaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereGroupDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereGroupTdDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereGroupTpDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereNiveauEtabEducatifPrecedent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereNiveauEtude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereNombreEnfants($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereNumeroInscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereProfessionConjoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereSectorDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereSpecialiteEducatifPrecedent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereStudentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereTelParents($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FormFicheRenseignement whereYearId($value)
 */
	class FormFicheRenseignement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $type_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $plan_etude
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $specialite_id
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation wherePlanEtude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereSpecialiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Formation whereUpdatedBy($value)
 */
	class Formation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $user_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $file
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ForumSubject withoutTrashed()
 */
	class ForumSubject extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $type
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereUpdatedBy($value)
 */
	class Grade extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property int|null $sector_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group whereUpdatedBy($value)
 */
	class Group extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $group_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property-read \App\Models\Group|null $group
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GroupTp> $groupTp
 * @property-read int|null $group_tp_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GroupTdTeacher> $groupeTdTeachers
 * @property-read int|null $groupe_td_teachers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentsPredefinedList> $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTd whereUpdatedBy($value)
 */
	class GroupTd extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\GroupTd|null $groupTd
 * @property-read \App\Models\Teacher|null $teacher
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTdTeacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTdTeacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTdTeacher query()
 */
	class GroupTdTeacher extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $group_td_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereGroupTdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GroupTp whereUpdatedBy($value)
 */
	class GroupTp extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $cover
 * @property int|null $order
 * @property int|null $validation
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $slug
 * @property string|null $text_btn_fr
 * @property string|null $text_btn_en
 * @property string|null $text_btn_ar
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereTextBtnAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereTextBtnEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereTextBtnFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeSection whereValidation($value)
 */
	class HomeSection extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $icon
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $cover
 * @property string|null $route
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeShortcut whereUpdatedBy($value)
 */
	class HomeShortcut extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeWidget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeWidget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HomeWidget query()
 */
	class HomeWidget extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $content_fr
 * @property string|null $content_en
 * @property string|null $content_ar
 * @property string|null $logo
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereContentAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereContentEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereContentFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inai whereUpdatedBy($value)
 */
	class Inai extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $year_id
 * @property string|null $name
 * @property string|null $avatar
 * @property string|null $sector
 * @property float|null $score
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property string|null $email
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereSector($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Laureate whereYearId($value)
 */
	class Laureate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Listepredefinieenseignant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Listepredefinieenseignant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Listepredefinieenseignant query()
 */
	class Listepredefinieenseignant extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $affichage_in_front
 * @property string|null $grade_name
 * @property int|null $grade_id
 * @property string|null $service_fr
 * @property string|null $service_en
 * @property string|null $service_ar
 * @property string|null $fonction_fr
 * @property string|null $fonction_ar
 * @property string|null $fonction_en
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $cin
 * @property string|null $slug
 * @property-read \App\Models\Grade|null $grade
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereAffichageInFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereFonctionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereFonctionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereFonctionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereGradeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereServiceAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereServiceEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereServiceFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personal whereUpdatedBy($value)
 */
	class Personal extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $file
 * @property int|null $sector_id
 * @property int|null $year_id
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property-read \App\Models\Sector|null $sector
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PlaquettePedagogique whereYearId($value)
 */
	class PlaquettePedagogique extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $sector_type_id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $plan_etude
 * @property string|null $description_en
 * @property string|null $description_fr
 * @property string|null $description_ar
 * @property int|null $department_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property string|null $slug
 * @property string|null $educational_coordinator
 * @property string|null $internship_coordinator
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CoordinationSector> $coordinationSectors
 * @property-read int|null $coordination_sectors_count
 * @property-read \App\Models\Department|null $department
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PlaquettePedagogique> $plaquettePedagogiques
 * @property-read int|null $plaquette_pedagogiques_count
 * @property-read \App\Models\SectorType|null $sectorType
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereEducationalCoordinator($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereInternshipCoordinator($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector wherePlanEtude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereSectorTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sector whereUpdatedBy($value)
 */
	class Sector extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $publier
 * @property string|null $slug
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sector> $sectors
 * @property-read int|null $sectors_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SectorType whereUpdatedBy($value)
 */
	class SectorType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $annee_bac
 * @property string|null $section_bac
 * @property string|null $session_bac
 * @property string|null $mention_bac
 * @property float|null $moyenne_bac
 * @property string|null $pays_bac
 * @property string|null $mon_pere
 * @property string|null $premon_pere
 * @property string|null $prefession_pere
 * @property string|null $etablissement_prof_pere
 * @property string|null $nom_mere
 * @property string|null $prenom_mere
 * @property string|null $etablissement_prof_mere
 * @property string|null $nom_jeune_fille
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $diploma
 * @property string|null $slug
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereAnneeBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereDiploma($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereEtablissementProfMere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereEtablissementProfPere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereMentionBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereMonPere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereMoyenneBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereNomJeuneFille($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereNomMere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePaysBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePrefessionPere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePremonPere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePrenomMere($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereSectionBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereSessionBac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUpdatedBy($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $numero_inscription
 * @property string|null $cin
 * @property int|null $year_id
 * @property int|null $groupe_tp_id
 * @property int|null $groupe_td_id
 * @property int|null $groupe_id
 * @property int|null $sector_id
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $nom_ar
 * @property string|null $prenom_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereGroupeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereGroupeTdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereGroupeTpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereNomAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereNumeroInscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList wherePrenomAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentsPredefinedList whereYearId($value)
 */
	class StudentsPredefinedList extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $department_id
 * @property string|null $cin
 * @property string|null $nom
 * @property string|null $name
 * @property int|null $nb_max_encadement
 * @property string|null $nb_surveillance
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int|null $affichage_in_front
 * @property string|null $slug
 * @property string|null $indentifiant_unique
 * @property string|null $poste
 * @property string|null $statut_ar
 * @property string|null $statut_en
 * @property string|null $statut_fr
 * @property string|null $specialite_ar
 * @property string|null $specialite_en
 * @property string|null $specialite_fr
 * @property int|null $grade_id
 * @property string|null $grade_name
 * @property string|null $email
 * @property string|null $nom_ar
 * @property string|null $prenom
 * @property string|null $prenom_ar
 * @property-read \App\Models\Grade|null $grade
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereAffichageInFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereGradeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereIndentifiantUnique($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereNbMaxEncadement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereNbSurveillance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereNomAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePoste($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePrenomAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSpecialiteAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSpecialiteEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSpecialiteFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereStatutAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereStatutEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereStatutFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereUpdatedBy($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property bool $is_validated
 * @property string|null $name_ar
 * @property string|null $phone
 * @property string|null $cin
 * @property string|null $avatar
 * @property string|null $nationalite
 * @property string|null $genre
 * @property string|null $address
 * @property string|null $cnss
 * @property string|null $date_naissance
 * @property string|null $lieu_naissance
 * @property string|null $cv
 * @property string|null $description_ar
 * @property string|null $description_en
 * @property string|null $description_fr
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property bool $publier
 * @property string|null $folder_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCnss($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCv($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsValidated($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLieuNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNationalite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent {}
}

