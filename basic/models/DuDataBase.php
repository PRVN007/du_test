<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "du_data_base".
 *
 * @property int $id
 * @property string|null $szName
 * @property string|null $szCollege
 * @property string|null $szEmail
 * @property int|null $iMobileNumber
 * @property string|null $szResearchTitleProject
 * @property string|null $szBoardSubject
 * @property string|null $szProectDescription
 * @property string|null $szInnovative
 * @property string|null $szNameIndividual1
 * @property string|null $szEmail1
 * @property string|null $NameDepartment1
 * @property string|null $szNameIndividual2
 * @property string|null $szEmail2
 * @property string|null $NameDepartment2
 * @property string|null $szNameIndividual3
 * @property string|null $szEmail3
 * @property string|null $NameDepartment3
 * @property string|null $szNameIndividual4
 * @property string|null $szEmail4
 * @property string|null $NameDepartment4
 * @property string|null $szNameIndividual5
 * @property string|null $NameDepartment5
 * @property string|null $szNameIndividual6
 * @property string|null $szEmail6
 * @property string|null $NameDepartment6
 * @property int|null $iProjectDuratio
 * @property string|null $szMethodology
 * @property string|null $szMilestones
 * @property string|null $szMaterials
 * @property string|null $szInfrastructure
 * @property string|null $szSendEmail
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class DuDataBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'du_data_base';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['szName', 'szCollege', 'szEmail', 'szResearchTitleProject', 'szBoardSubject', 'szNameIndividual1', 'szEmail1', 'NameDepartment1', 'szNameIndividual2', 'szEmail2', 'NameDepartment2', 'szNameIndividual3', 'szEmail3', 'NameDepartment3', 'szNameIndividual4', 'szEmail4', 'NameDepartment4', 'szNameIndividual5', 'NameDepartment5', 'szNameIndividual6', 'szEmail6', 'NameDepartment6', 'szSendEmail'], 'required'],
            [['iMobileNumber', 'iProjectDuratio'], 'integer'],
            [['szProectDescription', 'szInnovative', 'szMethodology', 'szMilestones', 'szMaterials', 'szInfrastructure'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['szName', 'szCollege', 'szEmail', 'szResearchTitleProject', 'szBoardSubject', 'szNameIndividual1', 'szEmail1', 'NameDepartment1', 'szNameIndividual2', 'szEmail2', 'NameDepartment2', 'szNameIndividual3', 'szEmail3', 'NameDepartment3', 'szNameIndividual4', 'szEmail4', 'NameDepartment4', 'szNameIndividual5', 'NameDepartment5', 'szNameIndividual6', 'szEmail6', 'NameDepartment6', 'szSendEmail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'szName' => 'Name',
            'szCollege' => 'College',
            'szEmail' => 'Email',
            'iMobileNumber' => 'Mobile Number',
            'szResearchTitleProject' => 'Research Title Project',
            'szBoardSubject' => 'Board Subject',
            'szProectDescription' => 'Proect Description',
            'szInnovative' => 'Innovative',
            'szNameIndividual1' => 'Name Individual',
            'szEmail1' => 'Email1',
            'NameDepartment1' => 'Name Department',
            'szNameIndividual2' => 'Name Individual',
            'szEmail2' => 'Email',
            'NameDepartment2' => 'Name Department',
            'szNameIndividual3' => 'Name Individual',
            'szEmail3' => 'Email',
            'NameDepartment3' => 'Name Department',
            'szNameIndividual4' => 'Name Individual',
            'szEmail4' => 'Email',
            'NameDepartment4' => 'Name Department',
            'szNameIndividual5' => 'Name Individual',
            'NameDepartment5' => 'Name Department',
            'szNameIndividual6' => 'Name Individual',
            'szEmail6' => 'Email',
            'NameDepartment6' => 'Name Department',
            'iProjectDuratio' => ' Project Duratio',
            'szMethodology' => 'Methodology',
            'szMilestones' => 'Milestones',
            'szMaterials' => 'Materials',
            'szInfrastructure' => 'Infrastructure',
			'szSpecial' => 'Infrastructure',
			'szEmail5' => 'Email5',
			'szDegination' => 'Degination',
            'szSendEmail' => 'Send Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
