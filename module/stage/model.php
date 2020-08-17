<?php
class stageModel extends model
{
    public function create()
    {
        $stage = fixer::input('post')
            ->add('createdBy', $this->app->user->account)
            ->add('createdDate', helper::today())
            ->get();

        $this->dao->insert(TABLE_STAGE)->data($stage)->autoCheck()->exec();

        if(!dao::isError()) return $this->dao->lastInsertID();
        return false;
    }

    public function update($stageID)
    {
        $oldStage = $this->dao->select('*')->from(TABLE_STAGE)->where('id')->eq((int)$stageID)->fetch();

        $stage = fixer::input('post')
            ->add('editedBy', $this->app->user->account)
            ->add('editedDate', helper::today())
            ->get();

        $this->dao->update(TABLE_STAGE)->data($stage)->autoCheck()->where('id')->eq((int)$stageID)->exec();

        if(!dao::isError()) return common::createChanges($oldStage, $stage);
        return false;
    }

    public function getStages()
    {
        return $this->dao->select('*')->from(TABLE_STAGE)->where('deleted')->eq(0)->fetchAll('id');
    }

    public function getPairs()
    {
        $stages = $this->getStages();

        $pairs = array();
        foreach($stages as $stageID => $stage)
        {
            $pairs[$stageID] = $stage->name;
        }

        return $pairs;
    }
}