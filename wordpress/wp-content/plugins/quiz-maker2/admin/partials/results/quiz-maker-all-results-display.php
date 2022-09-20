<?php

$tab = isset($_GET['tab']) ? $_GET['tab'] : '1';
$tab_url = "?page=".$this->plugin_name."-results&tab=";

?>
<div class="wrap ays_results_table">
    <h1 class="wp-heading-inline">
        <?php
        echo __(esc_html(get_admin_page_title()),$this->plugin_name);
        ?>
    </h1>
    <div class="question-action-butons">
        <a href="javascript:void(0)" class="ays-export-filters ays_export_results page-title-action" style="float: right;"><?php echo __('Export', $this->plugin_name); ?></a>
    </div>
    <div class="nav-tab-wrapper">
        <a href="<?php echo $tab_url . "1"; ?>" class="no-js nav-tab"><?php echo __('Quizzes',$this->plugin_name)?></a>
        <a href="<?php echo $tab_url . "2"; ?>" class="no-js nav-tab"><?php echo __('Global Statistics',$this->plugin_name)?></a>
        <a href="<?php echo $tab_url . "3"; ?>" class="no-js nav-tab"><?php echo __('Global Leaderboard',$this->plugin_name)?></a>
        <a href="<?php echo "?page=".$this->plugin_name."-all-results&tab=" . "4"; ?>" class="no-js nav-tab nav-tab-active"><?php echo __('All Results',$this->plugin_name)?></a>
    </div>
    <style>
        .column-quiz_rate,
        .column-score,
        .column-unreads,
        .column-id,
        .column-res_count,
        .column-user_count {
            text-align: center !important;
        }
        .column-id a {
            display: inline-block !important;
            padding: 5px 70px;
        }
    </style>

    <div id="tab4" class="ays-quiz-tab-content ays-quiz-tab-content-active">
        <div id="poststuff">
            <div id="post-body" class="metabox-holder">
                <div id="post-body-content">
                    <div class="meta-box-sortables ui-sortable">
                        <?php
                            $this->all_results_obj->views();
                        ?>
                        <form method="post">
                            <?php
                            $this->all_results_obj->prepare_items();
                            $search = __( "Search", $this->plugin_name );
                            $this->all_results_obj->search_box($search, $this->plugin_name);
                            $this->all_results_obj->display();
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <br class="clear">
        </div>
    </div>

    <div id="ays-results-modal" class="ays-modal">
        <div class="ays-modal-content">
            <div class="ays-quiz-preloader">
                <img class="loader" src="<?php echo AYS_QUIZ_ADMIN_URL; ?>/images/loaders/3-1.svg">
            </div>
            <div class="ays-modal-header">
                <span class="ays-close" id="ays-close-results">&times;</span>
                <h2><?php echo __("Results for", $this->plugin_name); ?></h2>
            </div>
            <div class="ays-modal-body" id="ays-results-body">
            </div>
        </div>
    </div>

    <div class="ays-modal" id="export-filters">
        <div class="ays-modal-content">
            <div class="ays-quiz-preloader">
                <img class="loader" src="<?php echo AYS_QUIZ_ADMIN_URL; ?>/images/loaders/3-1.svg">
            </div>
          <!-- Modal Header -->
            <div class="ays-modal-header">
                <span class="ays-close">&times;</span>
                <h2><?=__('Export Filter', $this->plugin_name)?></h2>
            </div>

          <!-- Modal body -->
            <div class="ays-modal-body">
                <form method="post" id="ays_export_filter">
                    <div class="filter-row">
                        <div class="filter-row-overlay display_none"></div>
                        <div class="filter-col">
                            <label for="user_id-filter"><?=__("Users", $this->plugin_name)?></label>
                            <button type="button" class="ays_userid_clear button button-small wp-picker-default"><?=__("Clear", $this->plugin_name)?></button>
                            <select name="user_id-select[]" id="user_id-filter" multiple="multiple"></select>
                        </div>
                        <hr>
                        <div class="filter-col">
                            <label for="quiz_id-filter"><?=__("Quizzes", $this->plugin_name)?></label>
                            <button type="button" class="ays_quizid_clear button button-small wp-picker-default"><?=__("Clear", $this->plugin_name)?></button>
                            <select name="quiz_id-select[]" id="quiz_id-filter" multiple="multiple"></select>
                        </div>
                        <hr>
                        <div class="filter-col">
                           <div style="padding: 10px;line-height:1;">
                                <input type="checkbox" name="export_results_guests" id="export_results_guests" value="on">
                                <label for="export_results_guests">
                                    <span><?php echo __( "Include guests who do not have any personal data", $this->plugin_name ); ?></span>
                                </label>
                                <br>
                                <span style="font-style: italic; font-size:14px;"><?php echo __( "Include those not logged in users who have not inserted any personal data such as name and email.", $this->plugin_name ); ?></span>
                           </div>
                        </div>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <div class="filter-block filter-col">
                            <label for="start-date-filter"><?=__("Start Date from", $this->plugin_name)?></label>
                            <input type="date" name="start-date-filter" id="start-date-filter">
                        </div>
                        <div class="filter-block filter-col">
                            <label for="end-date-filter"><?=__("Start Date to", $this->plugin_name)?></label>
                            <input type="date" name="end-date-filter" id="end-date-filter">
                        </div>
                    </div>
                    <hr>
                    <div class="filter-col">
                       <div style="padding: 10px;line-height:1;">
                            <input type="checkbox" name="export_results_only_guests" id="export_results_only_guests" value="on">
                            <label for="export_results_only_guests">
                                <span><?php echo __( "Export only guests results", $this->plugin_name ); ?></span>
                            </label>
                            <br>
                            <span style="font-style: italic; font-size:14px;"><?php echo __( "Please note that if this checkbox is ticked, the above filters (except dates) will not be applied.", $this->plugin_name ); ?></span>
                       </div>
                    </div>
                </form>
            </div>

          <!-- Modal footer -->
            <div class="ays-modal-footer">
                <div class="export_results_count">
                    <p><?php echo __( "Matched", $this->plugin_name ); ?> <span></span> <?php echo __( "results", $this->plugin_name ); ?></p>
                </div>
                <span><?php echo __('Export to', $this->plugin_name); ?></span>
                <button type="button" class="button button-primary export-action" data-type="csv"><?=__('CSV', $this->plugin_name)?></button>
                <button type="button" class="button button-primary export-action" data-type="xlsx"><?=__('XLSX', $this->plugin_name)?></button>
                <button type="button" class="button button-primary export-action" data-type="json"><?=__('JSON', $this->plugin_name)?></button>
                <a download="" id="downloadFile" hidden href=""></a>
            </div>

        </div>
    </div>
</div>

