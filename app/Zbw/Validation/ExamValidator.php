<?php  namespace Zbw\Validators; 

class ExamValidator extends ZbwValidator
{
    protected $rules;
    public function __construct()
    {
        $cids = \Zbw\Helpers::getCids(true);
        $this-> rules = [
            'exam_id' => 'between:1,11',
            'total_questions' => 'integer',
            'cid' => 'in:' . $cids,
            'reviewed_by' => 'in:' . $cids
        ];
    }
}
