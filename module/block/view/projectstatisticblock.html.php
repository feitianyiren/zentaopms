<style>
.types-line {display: table; padding: 0; margin: 0 auto;}
.types-line > li {display: table-cell;}
.types-line > li > div {position: relative; padding: 18px 5px 5px; text-align: center;}
.types-line > li > div:before {content: ''; display: block; background: #eee;  width: 100%; height: 2px; position: absolute; left: 50%; top: 4px;}
.types-line > li:last-child > div:before {display: none;}
.types-line > li > div:after {content: ''; display: block; background: #FFFFFF; box-shadow: 0 2px 4px 0 rgba(170,170,170,0.50), 0 0 5px 0 rgba(0,0,0,0.1); width: 10px; height: 10px; position: absolute; border-radius: 50%; top: 0; left: 50%; margin-left: -2px;}
.types-line > li > div > small {display: block; color: #A6AAB8;}
.types-line > li > div > span {display: block; color: #CBD0DB; font-size: 16px;}
.product-info {position: relative; height: 65px;}
.product-info + .product-info {margin-top: 10px;}
.product-info .progress {position: absolute; left: 10px; top: 35px; right: 100px;}
.product-info .progress-info {position: absolute; left: 8px; top: 10px; width: 180px; font-size: 12px;}
.product-info .type-info {color: #A6AAB8; text-align: center; position: absolute; right: 0; top: 6px; width: 100px;}
html[lang="en"] .product-info .type-info {color: #A6AAB8; text-align: center; position: absolute; right: 0; top: 6px; width: 110px;}
.product-info .type-value,
.product-info .type-label {font-size: 12px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}
.product-info .type-value {font-size: 14px;}
.product-info .type-value > strong {font-size: 20px; color: #3C4353;}
.product-info .actions {position: absolute; left: 10px; top: 14px;}
.block-statistic .panel-body {padding-top: 0}
.block-statistic .tile {margin-bottom: 30px;}
.block-statistic .tile-title {font-size: 18px; color: #A6AAB8;}
.block-statistic .tile-amount {font-size: 48px; margin-bottom: 10px;}
.block-statistic .col-nav {border-right: 1px solid #EBF2FB; width: 260px; padding: 0;}
.block-statistic .nav-secondary > li {position: relative}
.block-statistic .nav-secondary > li > a {font-size: 14px; color: #838A9D; position: relative; box-shadow: none; padding-left: 20px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; transition: all .2s;}
.block-statistic .nav-secondary > li > a:first-child {padding-right: 36px;}
.block-statistic .nav-secondary > li.active > a:first-child {color: #3C4353; background: transparent; box-shadow: none;}
.block-statistic .nav-secondary > li.active > a:first-child:hover,
.block-statistic .nav-secondary > li.active > a:first-child:focus,
.block-statistic .nav-secondary > li > a:first-child:hover {box-shadow: none; border-radius: 4px 0 0 4px;}
.block-statistic .nav-secondary > li.active > a:first-child:before {content: ' '; display: block; left: -1px; top: 10px; bottom: 10px; width: 4px; background: #006af1; position: absolute;}
.block-statistic .nav-secondary > li > a.btn-view {position: absolute; top: 0; right: 0; bottom: 0; padding: 8px; width: 36px; text-align: center; opacity: 0;}
.block-statistic .nav-secondary > li:hover > a.btn-view {opacity: 1}
.block-statistic .nav-secondary > li.active > a.btn-view {box-shadow: none}
.block-statistic .nav-secondary > li.switch-icon {display: none;}
.block-statistic.block-sm .panel-body {padding-bottom: 10px; position: relative; padding-top: 45px; border-radius: 3px;}
.block-statistic.block-sm .panel-body > .table-row,
.block-statistic.block-sm .panel-body > .table-row > .col {display: block; width: auto;}
.block-statistic.block-sm .panel-body > .table-row > .tab-content {padding: 0; margin: 0 -5px;}
.block-statistic.block-sm .tab-pane > .table-row > .col-5 {width: 125px;}
.block-statistic.block-sm .tab-pane > .table-row > .col-5 > .table-row {padding: 5px 0;}
.block-statistic.block-sm .col-nav {border-left: none; position: absolute; top: 0; left: 15px; right: 15px; background: #f5f5f5;}
.block-statistic.block-sm .nav-secondary {display: table; width: 100%; padding: 0; table-layout: fixed;}
.block-statistic.block-sm .nav-secondary > li {display: none}
.block-statistic.block-sm .nav-secondary > li.switch-icon,
.block-statistic.block-sm .nav-secondary > li.active {display: table-cell; width: 100%; text-align: center;}
.block-statistic.block-sm .nav-secondary > li.active > a:hover {cursor: default; background: none;}
.block-statistic.block-sm .nav-secondary > li.switch-icon > a:hover {background: rgba(0,0,0,0.07);}
.block-statistic.block-sm .nav-secondary > li > a {padding: 5px 10px; border-radius: 4px;}
.block-statistic.block-sm .nav-secondary > li > a:before {display: none;}
.block-statistic.block-sm .nav-secondary > li.switch-icon {width: 40px;}
.block-statistic.block-sm .nav-secondary > li.active > a:first-child:before {display: none}
.block-statistic.block-sm .nav-secondary > li.active > a.btn-view {width: auto; left: 0; right: 0;}
.block-statistic.block-sm .nav-secondary > li.active > a.btn-view > i {display: none;}
.block-statistic.block-sm .nav-secondary > li.active > a.btn-view:hover {cursor: pointer; background: rgba(0,0,0,.1)}
.block-statistic .program-info .info span+span{margin-left: 15px}
.block-statistic .project-info{margin-top: 25px}
.block-statistic .project-info .col-xs-5, .block-statistic .project-info .col-xs-7{margin-top: 8px}
.block-statistic .project-info .col-xs-5{padding-left: 0px;}

.status-count{margin:auto}
.status-count tr:first-child td:last-child{color:#000;font-weight:bold}

.block-statistic .progress-group{margin-top: 20px; margin-bottom: 10px; height: 65px;}
.block-statistic .weekly-title{font-weight: bold; font-size:14px; color: #3C4253;}
.block-statistic .weekly-small{font-size:12px; color: #838A9D;}
.block-statistic .weekly-progress {font-weight: bold; font-size:24px;}
.block-statistic .weekly-name{font-size:14px; color: #838A9D;}
.block-statistic .weekly-value{font-size:14px;}
.block-statistic .col-6 .stage{margin-left: 10px}
</style>
<script>
<?php $blockNavId = 'nav-' . uniqid(); ?>
$(function()
{
    var $nav = $('#<?php echo $blockNavId;?>');
    $nav.on('click', '.switch-icon', function(e)
    {
        var isPrev = $(this).is('.prev');
        var $activeItem = $nav.children('.active');
        var $next = $activeItem[isPrev ? 'prev' : 'next']('li:not(.switch-icon)');
        if ($next.length) $next.find('a').trigger('click');
        else $nav.children('li:not(.switch-icon)')[isPrev ? 'last' : 'first']().find('a').trigger('click');
        e.preventDefault();
    });

    var $projectLi = $('#activeProject');
    if($projectLi.length)
    {
        var projectLi  = $projectLi[0];
        $(".col ul.nav").animate({scrollTop: projectLi.offsetTop}, "slow");
    }
});
</script>
<div class="panel-body">
  <div class="table-row">
    <?php if(empty($projects)):?>
    <div class="table-empty-tip">
      <p><span class="text-muted"><?php echo $lang->block->noData;?></span></p>
    </div>
    <?php else:?>
    <div class="col col-nav">
      <ul class="nav nav-stacked nav-secondary scrollbar-hover" id='<?php echo $blockNavId;?>'>
        <li class='switch-icon prev'><a><i class='icon icon-arrow-left'></i></a></li>
        <?php $selected = key($projects);?>
        <?php foreach($projects as $project):?>
        <li <?php if($project->id == $selected) echo "class='active' id='activeProject'";?> projectID='<?php echo $project->id;?>'>
          <a href="###" data-target="#tab3Content<?php echo $project->id;?>" data-toggle="tab"><?php echo $project->name;?></a>
          <?php echo html::a(helper::createLink('program', 'index', "projectID=$project->id"), "<i class='icon-arrow-right text-primary'></i>", '', "class='btn-view' title={$lang->program->PGMIndex}");?>
        </li>
        <?php endforeach;?>
        <li class='switch-icon next'><a><i class='icon icon-arrow-right'></i></a></li>
      </ul>
    </div>
    <div class="col tab-content">
      <?php foreach($projects as $project):?>
      <div class="tab-pane fade<?php if($project->id == $selected) echo ' active in';?>" id="tab3Content<?php echo $project->id;?>">
        <div class="table-row">
        <?php if($project->model == 'scrum'):?>
          <div class="col-5 text-middle text-center">
            <div class="progress-pie inline-block space" data-value="<?php echo $project->progress;?>" data-doughnut-size="84">
              <canvas width="120" height="120"></canvas>
              <div class="progress-info">
                <small><?php echo $lang->story->common . $lang->program->doneStories;?></small>
                <strong><?php echo $project->doneStories;?></strong>
              </div>
            </div>
            <div class="table-row text-center small text-muted with-padding">
              <div class="col-4 text-bottom">
                <div><?php echo $lang->program->allStories;?></div>
                <div><?php echo $project->allStories;?></div>
              </div>
              <div class="col-4">
                <span class="label label-dot label-primary"></span>
                <div><?php echo $lang->program->doneStories;?></div>
                <div><?php echo $project->doneStories;?></div>
              </div>
              <div class="col-4">
                <span class="label label-dot label-pale"></span>
                <div><?php echo $lang->program->leftStories;?></div>
                <div><?php echo $project->leftStories;?></div>
              </div>
            </div>
          </div>
          <div class="col-7">
            <div class="project-info">
              <h4><?php echo $lang->program->allInput;?></h4>
              <div class='info'>
                <span><i class='icon icon-group'></i> <?php echo sprintf($lang->program->membersUnit, $project->teamCount);?></span>
                <span><i class='icon icon-clock'></i> <?php echo sprintf($lang->program->hoursUnit, $project->estimate);?></span>
                <span><i class='icon icon-cost'></i> <?php echo $project->budget . ' ' . zget($lang->program->unitList, $project->budgetUnit);?></span>
              </div>
            </div>
            <div class="project-info">
              <?php $i = 0;?>
              <h4><?php echo $lang->program->lastIteration;?></h4>
              <?php foreach($project->executions as $execution):?>
              <?php $i ++;?>
              <?php if($i > 3) break;?>
              <div class='col-xs-5'><?php echo $execution->name;?></div>
              <div class='col-xs-7'>
                <div class='progress progress-text-left'>
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $execution->hours->progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $execution->hours->progress;?>%">
                    <span class='progress-text'><?php echo $execution->hours->progress . '%';?></span>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        <?php else:?>
          <div class="col-6">
            <div class='table-row text-left weekly-row with-padding'>
              <span class='weekly-title'><?php echo $lang->program->weekly;?></span>
              <span class='stage text-muted'><?php echo $project->current;?></span>
            </div>
            <div class='progress-group col-10 center-block'>
              <div class='progress-num text-center'>
                <div class='weekly-title'><?php echo $lang->program->PRJProgress;?></div>
                <div class='weekly-progress'><?php echo $project->progress . '%';?></div>
              </div>
              <div class='progress'>
                <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $project->progress;?>%"></div>
              </div>
            </div>
            <div class="table-row text-center small with-padding col-10 center-block">
              <div class="col-4 text-bottom">
                <div class='weekly-name'><?php echo $lang->program->pv;?></div>
                <div class='weekly-value'><?php echo $project->pv;?></div>
              </div>
              <div class="col-4">
                <div class='weekly-name'><?php echo $lang->program->ev;?></div>
                <div class='weekly-value'><?php echo $project->ev;?></div>
              </div>
              <div class="col-4">
                <div class='weekly-name'><?php echo $lang->program->sv;?></div>
                <div class='weekly-value'><?php echo $project->sv;?></div>
              </div>
            </div>
          </div>
          <div class='col-6'>
            <div class='table-row weekly-row with-padding'>
              <div class='col-4 text-center'>
                <span class='weekly-title'><?php echo $lang->program->allInput;?></span>
              </div>
              <div class='col-8'></div>
            </div>
            <div class='progress-group'>
              <div class="table-row text-center small with-padding">
                <div class="col-4 text-bottom">
                  <div class='weekly-name'><?php echo $lang->program->PRJPM;?></div>
                  <div class='weekly-value'><?php echo $project->PM ? zget($users, $project->PM) : $lang->program->emptyPM;?></div>
                </div>
                <div class="col-4">
                  <div class='weekly-name'><?php echo $lang->program->teamCount;?></div>
                  <div class='weekly-value'><?php echo $project->teamCount;?></div>
                </div>
                <div class="col-4">
                  <div class='weekly-name'><?php echo $lang->program->PRJBudget;?></div>
                  <div class='weekly-value'><?php echo $project->budget;?></div>
                </div>
              </div>
            </div>
            <div class="table-row text-center small with-padding">
                <div class="col-4 text-bottom">
                  <div class='weekly-name'><?php echo $lang->program->ac;?></div>
                  <div class='weekly-value'><?php echo $project->ac;?></div>
                </div>
                <div class="col-4">
                  <div class='weekly-name'><?php echo $lang->program->cv;?></div>
                  <div class='weekly-value'><?php echo $project->cv;?></div>
                </div>
                <div>
                </div>
              </div>
            </div>
        <?php endif;?>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <?php endif;?>
  </div>
</div>
