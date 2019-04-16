<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $website_design_questionnaire_dump_id
 * @property int $website_design_questionnaire_id
 * @property string $questionnaire_unique_code
 * @property boolean $end_record
 * @property string $created_at
 * @property string $updated_at
 * @property string $your_name
 * @property string $contact_name
 * @property string $title
 * @property string $address
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $q1
 * @property string $q2
 * @property string $q3
 * @property string $q4
 * @property string $q5
 * @property string $q6
 * @property string $q7
 * @property string $q8
 * @property string $q9
 * @property string $q10
 * @property string $q11
 * @property string $q12
 * @property string $q13
 * @property string $q14
 * @property string $q15
 * @property string $q16
 * @property string $q17
 * @property string $q18
 * @property string $q19
 * @property string $q20
 * @property string $q21
 * @property string $q22
 * @property string $q23
 * @property string $q24
 * @property string $q25
 * @property string $q26
 * @property string $q27
 * @property string $q28
 * @property string $q29
 * @property string $q30
 * @property string $q31
 * @property string $q32
 * @property string $q33
 * @property string $q34
 * @property string $q35
 * @property string $q36
 * @property string $q37
 * @property string $q38
 * @property string $q39
 * @property string $q40
 * @property string $q41
 * @property string $q42
 * @property string $q43
 * @property string $q44
 * @property string $q45
 * @property string $q46
 * @property string $q47
 * @property string $q48
 * @property string $q49
 * @property string $q50
 * @property string $q51
 * @property string $q52
 * @property string $q53
 * @property string $q54
 * @property string $q55
 * @property string $q56
 * @property string $q57
 * @property string $q58
 * @property string $q59
 * @property string $q60
 * @property string $q61
 * @property string $q62
 * @property WebsiteDesignQuestionnaire $websiteDesignQuestionnaire
 */
class Website_design_questionnaire_dump extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'website_design_questionnaires_dump';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'website_design_questionnaire_dump_id';

    /**
     * @var array
     */
    protected $fillable = ['website_design_questionnaire_id', 'questionnaire_unique_code', 'end_record', 'created_at', 'updated_at', 'your_name', 'contact_name', 'title', 'address', 'phone', 'fax', 'email', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20', 'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'q31', 'q32', 'q33', 'q34', 'q35', 'q36', 'q37', 'q38', 'q39', 'q40', 'q41', 'q42', 'q43', 'q44', 'q45', 'q46', 'q47', 'q48', 'q49', 'q50', 'q51', 'q52', 'q53', 'q54', 'q55', 'q56', 'q57', 'q58', 'q59', 'q60', 'q61', 'q62'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Website_design_questionnaire_func()
    {
        return $this->belongsTo('App\Website_design_questionnaire', 'website_design_questionnaire_id');
    }
}
