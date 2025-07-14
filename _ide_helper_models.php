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
 * @property int|null $user_id
 * @property string|null $designation
 * @property int|null $etat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chats whereUserId($value)
 */
	class Chats extends \Eloquent {}
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
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Domaines whereUpdatedBy($value)
 */
	class Domaines extends \Eloquent {}
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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $publier
 * @property string|null $website
 * @property int|null $domaine_id
 * @property string|null $slug
 * @property int|null $validation
 * @property-read \App\Models\Domaines|null $domaine
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereDomaineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereResponsableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entreprises whereWebsite($value)
 */
	class Entreprises extends \Eloquent {}
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
 * @property string|null $company
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $description_fr
 * @property string|null $description_en
 * @property string|null $description_ar
 * @property string|null $type
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $responsible
 * @property string|null $email
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $cover
 * @property int|null $entreprise_id
 * @property int|null $publier
 * @property string|null $expiration_date
 * @property int|null $mode
 * @property int|null $offer_type_id
 * @property-read \App\Models\Entreprises|null $entreprise
 * @property-read \App\Models\OffersTypes|null $offerType
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereEntrepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereExpirationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereOfferTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereResponsible($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offers whereUpdatedBy($value)
 */
	class Offers extends \Eloquent {}
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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $cover_fr
 * @property string|null $cover_en
 * @property string|null $cover_ar
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereCoverAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereCoverEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereCoverFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersTypes whereUpdatedBy($value)
 */
	class OffersTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $offer_id
 * @property int|null $user_id
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $seen
 * @property-read \App\Models\Offers|null $offer
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OffersUsers whereUserId($value)
 */
	class OffersUsers extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $type_id
 * @property string|null $domaine
 * @property string|null $description
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $publier
 * @property-read \App\Models\OffersTypes|null $type
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereDomaine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offersrequests whereUserId($value)
 */
	class Offersrequests extends \Eloquent {}
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
 * @property string|null $designation_fr
 * @property string|null $designation_ar
 * @property string|null $designation_en
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $slug
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageCategories whereUpdatedBy($value)
 */
	class StageCategories extends \Eloquent {}
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
 * @property int $is_required
 * @property string|null $slug
 * @property int|null $order
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageDocumentTypes whereUpdatedBy($value)
 */
	class StageDocumentTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $test
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes whereTest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageEtes withoutTrashed()
 */
	class StageEtes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_ar
 * @property string|null $designation_en
 * @property int|null $is_required
 * @property int|null $is_supervised
 * @property int|null $is_company
 * @property int|null $nb_candidate
 * @property string|null $appui_model
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $publier
 * @property string|null $assignment_model
 * @property string|null $company_request_sheet_model
 * @property int|null $duration_min
 * @property int|null $duration_max
 * @property int|null $sector_type_id
 * @property int|null $level
 * @property string|null $convention_model
 * @property string|null $from
 * @property string|null $to
 * @property int|null $etranger
 * @property string|null $request_from
 * @property string|null $request_to
 * @property string|null $prefix
 * @property string|null $convention_model_en
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereAppuiModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereAssignmentModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereCompanyRequestSheetModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereConventionModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereConventionModelEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereDurationMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereDurationMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereEtranger($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereIsCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereIsSupervised($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereNbCandidate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereRequestFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereRequestTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereSectorTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StageTypes whereUpdatedBy($value)
 */
	class StageTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $candidat_1_id
 * @property int|null $candidat_2_id
 * @property int|null $candidat_3_id
 * @property int|null $entreprise_id
 * @property string|null $candidat_1_name
 * @property string|null $candidat_2_name
 * @property string|null $candidat_3_name
 * @property string|null $encadrant_name
 * @property string|null $sujet
 * @property string|null $domaine
 * @property string|null $description
 * @property string|null $duree
 * @property string|null $start
 * @property string|null $end
 * @property string|null $rapport
 * @property string|null $level
 * @property string|null $etat
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $encadrant_id
 * @property int|null $avis_encadrant
 * @property int|null $avis_jury
 * @property string|null $remarque_jury
 * @property float|null $resultat_jury
 * @property string|null $remarque_encadrant
 * @property string|null $slug
 * @property int|null $responsible_id
 * @property string|null $status
 * @property string $type_stage
 * @property string|null $motivation_letter
 * @property int|null $offer_id
 * @property int|null $company_acceptation
 * @property int|null $teacher_acceptation
 * @property int|null $acceptation
 * @property int|null $company_validation
 * @property int|null $teacher_validation
 * @property int|null $validation
 * @property string|null $assignment_file
 * @property string|null $internship_certificate
 * @property string|null $activities_file
 * @property int|null $stage_type_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $other_file
 * @property string|null $company_request_sheet
 * @property string|null $appui_request
 * @property string|null $responsible_name
 * @property string|null $responsible_email
 * @property int|null $year_id
 * @property string|null $convention_file
 * @property int|null $department_id
 * @property string|null $signed_by
 * @property string|null $convention_html
 * @property int|null $stage_category_id
 * @property string|null $signed_convention_file
 * @property string|null $code
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\Offers|null $offer
 * @property-read \App\Models\StageCategories|null $stageCategory
 * @property-read \App\Models\StageTypes|null $stageType
 * @property-read \App\Models\Years|null $year
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereAcceptation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereActivitiesFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereAppuiRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereAssignmentFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereAvisEncadrant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereAvisJury($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCandidat1Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCandidat1Name($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCandidat2Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCandidat2Name($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCandidat3Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCandidat3Name($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCompanyAcceptation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCompanyRequestSheet($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCompanyValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereConventionFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereConventionHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereDomaine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereDuree($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereEncadrantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereEncadrantName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereEntrepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereInternshipCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereMotivationLetter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereOtherFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereRapport($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereRemarqueEncadrant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereRemarqueJury($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereResponsibleEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereResponsibleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereResultatJury($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereSignedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereSignedConventionFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereStageCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereStageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereSujet($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereTeacherAcceptation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereTeacherValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereTypeStage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages whereYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stages withoutTrashed()
 */
	class Stages extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $stage_id
 * @property int|null $candidat_id
 * @property string|null $activity_date
 * @property string|null $description
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Stages|null $stage
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereActivityDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereCandidatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereStageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StagesActivities whereUpdatedBy($value)
 */
	class StagesActivities extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $value
 * @property string|null $cover
 * @property int|null $order
 * @property string|null $route
 * @property int|null $year_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $publier
 * @property-read \App\Models\Years|null $year
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereYearId($value)
 */
	class Stats extends \Eloquent {}
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
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $publier
 * @property int|null $order
 * @property string|null $url
 * @property int|null $parent_id
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectDocuments whereUrl($value)
 */
	class SubjectDocuments extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $subject_id
 * @property int|null $teacher_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Subjects|null $subject
 * @property-read \App\Models\Teacher|null $teacher
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeachers whereUpdatedBy($value)
 */
	class SubjectTeachers extends \Eloquent {}
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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $slug
 * @property int|null $publier
 * @property int|null $max_absence_nb
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereMaxAbsenceNb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subjects whereUpdatedBy($value)
 */
	class Subjects extends \Eloquent {}
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
 * @property string|null $cin
 * @property string|null $nom
 * @property string|null $nom_ar
 * @property string|null $prenom
 * @property string|null $prenom_ar
 * @property string|null $grade_fr
 * @property string|null $grade_en
 * @property string|null $grade_ar
 * @property string|null $specialite_fr
 * @property string|null $specialite_en
 * @property string|null $specialite_ar
 * @property int|null $department_id
 * @property string|null $statut_fr
 * @property string|null $statut_en
 * @property string|null $statut_ar
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $email
 * @property-read \App\Models\User|null $createdBy
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\User|null $updatedBy
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereGradeAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereGradeEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereGradeFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereNomAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists wherePrenomAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereSpecialiteAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereSpecialiteEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereSpecialiteFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereStatutAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereStatutEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereStatutFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeachersPredefinedLists whereUpdatedBy($value)
 */
	class TeachersPredefinedLists extends \Eloquent {}
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
 * @property int|null $publier
 * @property string|null $files
 * @property string|null $cdc
 * @property string|null $resultat
 * @property string|null $avis
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $slug
 * @property string|null $consultation_number
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereAvis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereCdc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereConsultationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereDescriptionFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereResultat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenders whereUpdatedBy($value)
 */
	class Tenders extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $url_file
 * @property int|null $tender_id
 * @property int|null $entreprise_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Entreprises|null $entreprise
 * @property-read \App\Models\Tenders|null $tender
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises whereEntrepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises whereTenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersEnterprises whereUrlFile($value)
 */
	class TendersEnterprises extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $tender_id
 * @property int|null $entreprise_id
 * @property string|null $files
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Entreprises|null $entreprise
 * @property-read \App\Models\Tenders|null $tender
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions whereEntrepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions whereFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions whereTenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TendersSubmissions whereUpdatedAt($value)
 */
	class TendersSubmissions extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $user_name
 * @property string|null $user_avatar
 * @property string|null $message
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereUserAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonials whereUserName($value)
 */
	class Testimonials extends \Eloquent {}
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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $publier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Themes whereUpdatedBy($value)
 */
	class Themes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $type
 * @property string|null $file
 * @property string|null $note
 * @property int|null $department_id
 * @property string|null $teacher_cin
 * @property int|null $sector_id
 * @property int|null $group_id
 * @property int|null $group_td_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $publier
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\Group|null $group
 * @property-read \App\Models\GroupTd|null $groupTd
 * @property-read \App\Models\Sector|null $sector
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereGroupTdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereTeacherCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Timetables whereUpdatedBy($value)
 */
	class Timetables extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $table_name
 * @property string $column_name
 * @property int $foreign_key
 * @property string $locale
 * @property string $value
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereForeignKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translations whereValue($value)
 */
	class Translations extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation_fr
 * @property string|null $designation_en
 * @property string|null $designation_ar
 * @property string|null $link
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $logo
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Usefullinks whereUpdatedBy($value)
 */
	class Usefullinks extends \Eloquent {}
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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksCategories whereUpdatedBy($value)
 */
	class UsefullinksCategories extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $usefullink_id
 * @property int|null $usefullinks_categorie_id
 * @property int|null $publier
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\UsefullinksCategories|null $category
 * @property-read \App\Models\Usefullinks|null $usefullink
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories wherePublier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereUsefullinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsefullinksPerCategories whereUsefullinksCategorieId($value)
 */
	class UsefullinksPerCategories extends \Eloquent {}
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

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $chat_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property-read \App\Models\Chats|null $chat
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereChatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserChats whereUserId($value)
 */
	class UserChats extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $user_id
 * @property int $role_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRoles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRoles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRoles query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRoles whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserRoles whereUserId($value)
 */
	class UserRoles extends \Eloquent {}
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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $icon
 * @property string|null $link
 * @property string|null $color
 * @property string|null $align
 * @property string|null $model_name
 * @property string|null $created_by
 * @property string|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereAlign($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereDesignationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereDesignationEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereDesignationFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereModelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Widgets whereUpdatedBy($value)
 */
	class Widgets extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $designation
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Years whereUpdatedBy($value)
 */
	class Years extends \Eloquent {}
}

