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

