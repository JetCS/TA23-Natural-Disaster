<div id="tab3" class="ays-quiz-tab-content <?php echo ($ays_quiz_tab == 'tab3') ? 'ays-quiz-tab-content-active' : ''; ?>">
    <p class="ays-subtitle"><?php echo __('Quiz Settings',$this->plugin_name)?></p>
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Show quiz head information',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Enable to show the quiz title and description in the start page of the quiz(in the front-end).',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <div class="form-check form-check-inline checkbox_ays">
                <input type="checkbox" id="ays_show_quiz_title" name="ays_show_quiz_title"
                        value="on" <?php echo $show_quiz_title ? 'checked' : ''; ?>/>
                <label class="form-check-label" for="ays_show_quiz_title"><?php echo __('Show title',$this->plugin_name)?></label>
            </div>
            <div class="form-check form-check-inline checkbox_ays">
                <input type="checkbox" id="ays_show_quiz_desc" name="ays_show_quiz_desc"
                        value="on" <?php echo $show_quiz_desc ? 'checked' : ''; ?>/>
                <label class="form-check-label" for="ays_show_quiz_desc"><?php echo __('Show description',$this->plugin_name)?></label>
            </div>
        </div>
    </div> <!-- Show quiz head information -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_autostart">
                <?php echo __('Enable autostart',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('If you enable this option, your quiz will start automatically after the page is fully loaded. Note, that this option is designed for 1 quiz in a page. If you put multiple quizzes in a page, only the one located at the top will autostart.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_enable_autostart" name="ays_enable_autostart" value="on" <?php echo $enable_autostart ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable autostart -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_randomize_answers">
                <?php echo __('Enable randomize answers',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('The possibility of showing the answers of the questions in an accidental sequence. Every time it will show answers in random order.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_enable_randomize_answers"
                   name="ays_enable_randomize_answers"
                   value="on" <?php echo (isset($options['randomize_answers']) && $options['randomize_answers'] == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable randomize answers -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_randomize_questions">
               <?php echo __('Enable randomize questions',$this->plugin_name)?>
               <a class="ays_help" data-toggle="tooltip" title="<?php echo __('The possibility of showing questions in an accidental sequence. It will show questions in random order. If you want to take a specific amount of questions from a pool of questions randomly you need to enable question bank option.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_enable_randomize_questions"
                   name="ays_enable_randomize_questions"
                   value="on" <?php echo (isset($options['randomize_questions']) && $options['randomize_questions'] == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable randomize questions -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_enable_question_bank">
                <?php echo __('Enable question bank',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Enable to take a specific amount of questions from the quiz randomly. For example, you can choose 20 questions from 50 randomly. Every time it will take different questions from the pool.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timer1 ays_toggle_checkbox" id="ays_enable_question_bank"
                   name="ays_enable_question_bank" value="on"
                <?php echo (isset($options['enable_question_bank']) && $options['enable_question_bank'] == 'on') ? 'checked' : ''; ?>>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo (isset($options['enable_question_bank']) && $options['enable_question_bank'] == 'on') ? '' : 'display_none'; ?>">
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="ays_quiz_loader">
                        <input type="radio" class="ays-enable-timer1" name="ays_question_bank_type" value="general" <?php echo ($question_bank_type == 'general') ? 'checked' : '' ?>/>
                        <span><?php echo __( "General", $this->plugin_name ); ?></span>
                    </label>
                    <label class="ays_quiz_loader">
                        <input type="radio" class="ays-enable-timer1" name="ays_question_bank_type" value="by_category" <?php echo ($question_bank_type == 'by_category') ? 'checked' : ''; ?>/>
                        <span><?php echo __( "By Category", $this->plugin_name ); ?></span>
                    </label>
                    <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php echo "<p style='text-indent:10px;margin:0;'>" .
                        __('There are two ways of making question bank system.', $this->plugin_name ) . "</p><p style='text-indent:10px;margin:0;'><strong>" .
                        __('General', $this->plugin_name ) . ": </strong>" .
                        __('It will take the specified amount of questions from all the questions you include in this quiz.', $this->plugin_name ) . "</p><p style='text-indent:10px;margin:0;'><strong>" .
                        __('By Category', $this->plugin_name ) . ": </strong>" .
                        __('Here you can see all the categories of questions you have included in the general tab. You can provide different numbers for different categories. Also, you can reorder them as you want by drag and dropping. The category order will be kept in the front end, but questions will be printed randomly.', $this->plugin_name ) . "</p>"; ?>">
                        <i class="ays_fa ays_fa_info_circle"></i>
                    </a>
                    <div class="ays_refresh_qbank_categories display_none float-right">
                        <p>
                            <button type="button" class="button ays_refresh_qbank_cats_button"><?php echo __( "Refresh Categories", $this->plugin_name ); ?></button>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="question_bank_general <?php echo ($question_bank_type == 'general') ? '' : 'display_none'; ?>">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="ays_questions_count">
                            <?php echo __('Questions count',$this->plugin_name)?>
                            <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Number of randomly selected questions',$this->plugin_name)?>">
                                <i class="ays_fa ays_fa_info_circle"></i>
                            </a>
                        </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="ays_questions_count" id="ays_questions_count"
                               class="ays-enable-timerl ays-text-input"
                               value="<?php echo (isset($options['questions_count'])) ? $options['questions_count'] : '' ?>">
                    </div>
                </div>
            </div>
            <div class="question_bank_by_category <?php echo ($question_bank_type == 'by_category') ? '' : 'display_none'; ?>">
                <div class="form-group row" style="margin:0;">
                    <div class="col-sm-12 question_bank_by_category_div">
                        <?php
                        $bank_i = 0;
                        foreach($questions_bank_cat_count as $cid => $val):
                            if(! array_key_exists(strval($cid), $question_bank_categories)){
                                continue;
                            }
                        ?>
                        <div class="row question_bank_category">
                            <div class="col-sm-4">
                                <label for="ays_questions_count_<?php echo $cid; ?>">
                                    <i class="ays_fa ays_fa_arrows question_bank_by_category_sort_handle"></i>
                                    <?php echo $question_bank_categories[$cid]; ?>
                                </label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" name="ays_questions_bank_cat_count[<?php echo $cid; ?>]" id="ays_questions_count_<?php echo $cid; ?>"
                                       class="ays-enable-timerl ays-text-input"
                                       value="<?php echo $val; ?>">
                            </div>
                        </div>
                        <?php
                            $bank_i++;
                        ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Enable question bank -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_questions_ordering_by_cat">
               <?php echo __('Group questions by category',$this->plugin_name); ?>
               <a class="ays_help" data-toggle="tooltip" title="<?php echo __('If the option is enabled, then selected questions for the given quiz, will be grouped based on categories. When the Enable randomize questions option is enabled too, then it will randomize both questions among categories and categories among quiz.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_enable_questions_ordering_by_cat"
                   name="ays_enable_questions_ordering_by_cat"
                   value="on" <?php echo $enable_questions_ordering_by_cat ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Group questions by category -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_navigation_bar">
               <?php echo __('Enable navigation bar',$this->plugin_name); ?>
               <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Activate the quiz navigation box in the upper of the questions??? It helps to move back and forth between questions easily. After answering a question, its box becomes black and indicates that you have answered it already.Please note that it does not work with the Questions count per page and Display all questions on one page options.', $this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_enable_navigation_bar"
                   name="ays_enable_navigation_bar"
                   value="on" <?php echo $enable_navigation_bar ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable navigation bar -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_question_count_per_page">
                <?php echo __('Question count per page',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow more than one question per page',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timer1 ays_toggle_checkbox" id="ays_question_count_per_page"
                   name="ays_question_count_per_page" value="on"
                <?php echo (isset($options['question_count_per_page']) && $options['question_count_per_page'] == 'on') ? 'checked' : ''; ?>>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo (isset($options['question_count_per_page']) && $options['question_count_per_page'] == 'on') ? '' : 'display_none'; ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_question_count_per_page_number">
                        <?php echo __('Questions count',$this->plugin_name)?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Number of questions per page.',$this->plugin_name)?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="number" name="ays_question_count_per_page_number"
                           id="ays_question_count_per_page_number" class="ays-enable-timerl ays-text-input"
                           value="<?php echo (isset($options['question_count_per_page_number'])) ? $options['question_count_per_page_number'] : '' ?>">
                </div>
            </div>
        </div>
    </div> <!-- Question count per page -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_quiz_display_all_questions">
                <?php echo __('Display all questions on one page',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick the checkbox if you want to show all your questions on one page.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_quiz_display_all_questions" name="ays_quiz_display_all_questions" value="on" <?php echo ( $quiz_display_all_questions ) ? 'checked' : ''; ?>/>
        </div>
    </div>
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_questions_counter">
                <?php echo __('Show questions counter',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the number of the current question and the total amount of the question in the quiz. It will be shown on the right top corner of the quiz container. Example:3/7',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_enable_questions_counter"
                   name="ays_enable_questions_counter"
                   value="on" <?php echo (isset($options['enable_questions_counter']) && $options['enable_questions_counter'] == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show questions counter -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_rtl_direction">
                <?php echo __('Use RTL Direction',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Enable Right to Left direction for the text. This option is intended for the Arabic language.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timerl" id="ays_enable_rtl_direction"
                   name="ays_enable_rtl_direction"
                   value="on" <?php echo (isset($options['enable_rtl_direction']) && $options['enable_rtl_direction'] == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Use RTL direction -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_copy_protection">
                <?php echo __('Enable copy protection',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Disable copy functionality in quiz page(CTRL+C) and Right-click',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_copy_protection"
                   name="ays_enable_copy_protection"
                   value="on" <?php echo ($enable_copy_protection == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Enable copy protection -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_make_questions_required">
                <?php echo __('Make the questions required',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('If the user doesn???t answer the question he/she can???t go to the next question.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_make_questions_required"
                   name="ays_make_questions_required"
                   value="on" <?php echo ($make_questions_required == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Make the questions required -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_enable_correction">
                <?php echo __('Show correct answers',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php echo __('Show if the selected answer is right or wrong with green and red marks. To decide when the right/wrong answers will be shown go to ???Show messages for right/wrong answers option???.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timer1 ays_toggle_checkbox" id="ays_enable_correction"
                   name="ays_enable_correction"
                   value="on" <?php echo (isset($options['enable_correction']) && $options['enable_correction'] == 'on') ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo (isset($options['enable_correction']) && $options['enable_correction'] == 'on') ? '' : 'display_none'; ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="ays_explanation_time">
                        <?php echo __('Display duration of right/wrong answers (in seconds)', $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip"
                        title="<?php echo __('Display duration of right/wrong answers (in seconds) after answering the question.', $this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                        <input type="number" class="ays-text-input" id="ays_explanation_time" name="ays_explanation_time" value="<?php echo $explanation_time; ?>" placeholder="4">
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="ays_finish_after_wrong_answer">
                        <?php echo __('Finish the quiz after one wrong answer', $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip"
                        title="<?php echo __('Finish the quiz after one wrong answer.', $this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                        <input type="checkbox" class="" id="ays_finish_after_wrong_answer" name="ays_finish_after_wrong_answer" value="on" <?php echo $finish_after_wrong_answer ? 'checked' : ''; ?>>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="ays_show_only_wrong_answer">
                        <?php echo __('Show only wrong answers', $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip"
                        title="<?php echo __('If the user\'s chosen answer is wrong he/she won\'t see the right answer.', $this->plugin_name) ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                        <input type="checkbox" class="" id="ays_show_only_wrong_answer" name="ays_show_only_wrong_answer" value="on" <?php echo $show_only_wrong_answer ? 'checked' : ''; ?>>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Show correct answers -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Show messages for right/wrong answers',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Specify where to display right/wrong answers. Note that the ???Show correct answers??? option should be enabled.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <label class="ays_quiz_loader">
                <input type="radio" class="ays-enable-timer1" name="ays_answers_rw_texts" value="on_passing" <?php echo ($answers_rw_texts == 'on_passing') ? 'checked' : '' ?>/>
                <span><?php echo __( "During the quiz", $this->plugin_name ); ?></span>
            </label>
            <label class="ays_quiz_loader">
                <input type="radio" class="ays-enable-timer1" name="ays_answers_rw_texts" value="on_results_page" <?php echo ($answers_rw_texts == 'on_results_page') ? 'checked' : '' ?>/>
                <span><?php echo __( "On results page", $this->plugin_name ); ?></span>
            </label>
            <label class="ays_quiz_loader">
                <input type="radio" class="ays-enable-timer1" name="ays_answers_rw_texts" value="on_both" <?php echo ($answers_rw_texts == 'on_both') ? 'checked' : '' ?>/>
                <span><?php echo __( "On Both", $this->plugin_name ); ?></span>
            </label>
        </div>
    </div> <!-- Text for right/wrong answers show -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Show question explanation',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Specify where to display questions explanation. Note that the ???Show correct answers??? option should be enabled.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <label class="ays_quiz_loader">
                <input type="radio" class="ays-enable-timer1" name="ays_show_questions_explanation" value="on_passing" <?php echo ($show_questions_explanation == 'on_passing') ? 'checked' : '' ?>/>
                <span><?php echo __( "During the quiz", $this->plugin_name ); ?></span>
            </label>
            <label class="ays_quiz_loader">
                <input type="radio" class="ays-enable-timer1" name="ays_show_questions_explanation" value="on_results_page" <?php echo ($show_questions_explanation == 'on_results_page') ? 'checked' : '' ?>/>
                <span><?php echo __( "On results page", $this->plugin_name ); ?></span>
            </label>
            <label class="ays_quiz_loader">
                <input type="radio" class="ays-enable-timer1" name="ays_show_questions_explanation" value="on_both" <?php echo ($show_questions_explanation == 'on_both') ? 'checked' : '' ?>/>
                <span><?php echo __( "On Both", $this->plugin_name ); ?></span>
            </label>
        </div>
    </div> <!-- Show question explanation -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_enable_pass_count">
                <?php echo __('Show passed users count',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show how many users passed the quiz. It will be shown at the bottom of the start page of the quiz',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_enable_pass_count"
                   name="ays_enable_pass_count"
                   value="on" <?php echo ($enable_pass_count == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show passed users count -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_enable_rate_avg">
                <?php echo __('Show average rate',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the average rate of the quiz. It will be shown at the bottom of the start page of the quiz.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_enable_rate_avg"
                   name="ays_enable_rate_avg"
                   value="on" <?php echo ($enable_rate_avg == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show Quiz average rate -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_show_create_date">
                <?php echo __('Show creation date',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show quiz creation date in quiz start page',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_show_create_date"
                   name="ays_show_create_date"
                   value="on" <?php echo ($show_create_date == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show quiz creation date -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_show_author">
                <?php echo __('Show quiz author',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show quiz author in quiz start page',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_show_author"
                   name="ays_show_author"
                   value="on" <?php echo ($show_author == 'on') ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show quiz author -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_show_category">
                <?php echo __('Show quiz category',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show quiz category in quiz start page',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_show_category"
                   name="ays_show_category"
                   value="on" <?php echo ($show_category) ? 'checked' : ''; ?>/>
        </div>
    </div> <!-- Show quiz category -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_show_question_category">
                <?php echo __('Show question category',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show question category in each question.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timer1 ays_toggle_checkbox" id="ays_show_question_category" name="ays_show_question_category" value="on" <?php echo ($show_question_category) ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo ( $show_question_category ) ? '' : 'display_none'; ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_quiz_enable_question_category_description">
                        <?php echo __('Show question category description',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show question category description for each question.',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" name="ays_quiz_enable_question_category_description" id="ays_quiz_enable_question_category_description" <?php echo ($quiz_enable_question_category_description) ? 'checked' : ''; ?>/>
                </div>
            </div>
        </div>
    </div> <!-- Show question category -->   
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_enable_quiz_rate">
                <?php echo __('Enable quiz assessment',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Comment and rate the quiz with up to 5 stars at the end of the quiz.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" id="ays_enable_quiz_rate" class="ays_toggle_checkbox"
                   name="ays_enable_quiz_rate"
                   value="on" <?php echo ($enable_quiz_rate == 'on') ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo ($enable_quiz_rate == 'on') ? '' : 'display_none' ?>">
            <div class="form-group row">
                <div class="col-sm-4" style="padding-right: 0px;">
                    <label for="ays_enable_rate_comments">
                        <?php echo __('Show the last 5 reviews',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show last 5 reviews after rating the quiz',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" id="ays_enable_rate_comments"
                           name="ays_enable_rate_comments"
                           value="on" <?php echo ($enable_rate_comments == 'on') ? 'checked' : ''; ?>/>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_quiz_make_responses_anonymous">
                        <?php echo __('Make responses anonymous',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Collect anonymous responses no matter the quiz taker is a logged-in user or guest.',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" name="ays_quiz_make_responses_anonymous" id="ays_quiz_make_responses_anonymous"
                           <?php echo ($quiz_make_responses_anonymous) ? 'checked' : ''; ?>/>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_quiz_make_all_review_link">
                        <?php echo __('Enable to show all reviews button',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Tick the option, and the quiz taker will have the opportunity to see all feedbacks written by others.',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" name="ays_quiz_make_all_review_link" id="ays_quiz_make_all_review_link" <?php echo ($quiz_make_all_review_link) ? 'checked' : ''; ?>/>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3" style="padding-right: 0px;">
                    <label for="ays_rate_form_title">
                        <?php echo __('Rating form title',$this->plugin_name)?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Text which will notify user that he can submit a feedback',$this->plugin_name)?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-9">
                    <?php
                    $content = stripslashes(wpautop($rate_form_title));
                    $editor_id = 'ays_rate_form_title';
                    $settings = array('editor_height' => $quiz_wp_editor_height, 'textarea_name' => 'ays_rate_form_title', 'editor_class' => 'ays-textarea', 'media_elements' => false);
                    wp_editor($content, $editor_id, $settings);
                    ?>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4" style="padding-right: 0px;">
                    <label for="ays_show_rate_after_rate">
                        <?php echo __('Show average of rating after the rate',$this->plugin_name)?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show average of rating after the rate. It will show how many votes in total and average.',$this->plugin_name)?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" id="ays_show_rate_after_rate"
                           name="ays_show_rate_after_rate"
                           value="on" <?php echo ($show_rate_after_rate == 'on') ? 'checked' : ''; ?>/>
                </div>
            </div>
        </div>
    </div> <!-- Enable Quiz assessment -->
    <hr>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_enable_live_bar_option">
                <?php echo __('Enable live progress bar', $this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the current state of the user passing the quiz. It will be shown at the top of the quiz container.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timer1 ays_toggle_checkbox" id="ays_enable_live_bar_option"
                   name="ays_enable_live_progress_bar"
                   value="on" <?php echo (isset($options['enable_live_progress_bar']) && $options['enable_live_progress_bar'] == 'on') ? 'checked' : '' ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo (isset($options['enable_live_progress_bar']) && $options['enable_live_progress_bar'] == 'on') ? '' : 'display_none' ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_enable_percent_view_option">
                        <?php echo __('Enable percent view',$this->plugin_name)?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show the progress bar by percentage',$this->plugin_name)?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" class="ays-enable-timer1" id="ays_enable_percent_view_option"
                           name="ays_enable_percent_view"
                           value="on" <?php echo (isset($options['enable_percent_view']) && $options['enable_percent_view'] == 'on') ? 'checked' : '' ?>/>
                </div>
            </div>
        </div>
    </div> <!-- Enable live progressbar -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-12">
            <div class="form-group row" style="margin-bottom: 0;">
                <div class="col-sm-4">
                    <label>
                        <?php echo __('Hint icon',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Choose between the default symbol, button, or your preferred text for the hint icon.',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-3">
                    <label class="ays_quiz_loader">
                        <input type="radio" class="ays-enable-timer1 ays_toggle_questions_hint_radio" data-flag="false" data-type="default" name="ays_questions_hint_icon_or_text" value="default" <?php echo ($questions_hint_icon_or_text == 'default') ? 'checked' : '' ?>/>
                        <span>
                            <?php echo __( "Default", $this->plugin_name ); ?>
                            <i class="ays_fa ays_fa_info_circle ays_question_hint" aria-hidden="true"> </i>
                        </span>
                    </label>
                    <label class="ays_quiz_loader">
                        <input type="radio" class="ays-enable-timer1 ays_toggle_questions_hint_radio" data-flag="true" data-type="text" name="ays_questions_hint_icon_or_text" value="text" <?php echo ($questions_hint_icon_or_text == 'text') ? 'checked' : '' ?>/>
                        <span><?php echo __( "Custom text", $this->plugin_name ); ?></span>
                    </label>
                    <hr>
                </div>
                <div data-type="text" class="col-sm-5 ays_toggle_target <?php echo ($questions_hint_icon_or_text == 'text') ? '' : 'display_none' ?>">
                    <input type="text" class="ays-text-input" name="ays_questions_hint_value" value="<?php echo $questions_hint_value; ?>">
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group row" style="margin-bottom: 0;">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <label class="ays_quiz_loader">
                        <input type="radio" class="ays-enable-timer1 ays_toggle_questions_hint_radio" data-flag="true" data-type="button" name="ays_questions_hint_icon_or_text" value="button" <?php echo ($questions_hint_icon_or_text == 'button') ? 'checked' : '' ?>/>
                        <span><?php echo __( "Button", $this->plugin_name ); ?></span>
                    </label>
                </div>
                <div data-type="button" class="col-sm-5 ays_toggle_target <?php echo ($questions_hint_icon_or_text == 'button') ? '' : 'display_none' ?>">
                    <input type="text" class="ays-text-input" placeholder="<?php echo __( "Button text", $this->plugin_name ); ?>" name="ays_questions_hint_button_value" value="<?php echo $questions_hint_button_value; ?>">
                </div>
            </div>
        </div>
    </div> <!-- Text instead of question hint icon -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_enable_early_finish">
                <?php echo __('Enable finish button',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow user to finish the quiz early',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timer1 ays_toggle_checkbox" id="ays_enable_early_finish"
                   name="ays_enable_early_finish"
                   value="on" <?php echo ($enable_early_finish) ? 'checked' : '' ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo ($enable_early_finish) ? '' : 'display_none' ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ays_enable_early_finsh_comfirm_box">
                        <?php echo __('Enable confirm box for the Finish button' , $this->plugin_name)?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('If the checkbox is ticked and the Finish button is enabled too, then when the user clicks on the Finish button, the confirmation box will be displayed. It will ask `Do you want to finish the quiz? Are you sure? `.',$this->plugin_name)?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" class="ays-enable-timer1" id="ays_enable_early_finsh_comfirm_box" name="ays_enable_early_finsh_comfirm_box" value="on" <?php echo ($enable_early_finsh_comfirm_box) ? 'checked' : '' ?>/>
                </div>
            </div>
        </div>
    </div> <!-- Enable finish button -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_clear_answer">
                <?php echo __('Enable clear answer button',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow user to clear the selected answer. Button will not be displayed if Show correct answers option is enabled.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_clear_answer"
                   name="ays_enable_clear_answer"
                   value="on" <?php echo ($enable_clear_answer) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable clear answer button -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_enter_key">
                <?php echo __('Enable to go next by pressing Enter key',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('This option allows users to go to the next question by pressing Enter key. It is working with the following question types only: Text, Short Text, Number.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_enter_key"
                   name="ays_enable_enter_key"
                   value="on" <?php echo ($enable_enter_key) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable to go next by pressing Enter key -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_next_button">
                <?php echo __('Enable next button',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('User can change the question forward manually. If you want to make the questions required just disable this option.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_enable_next_button" value="on"
                   name="ays_enable_next_button" <?php echo (isset($options['enable_next_button']) && $options['enable_next_button'] == 'on') ? 'checked' : '' ?>>
        </div>
    </div> <!-- Enable next button -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_previous_button">
                <?php echo __('Enable previous button',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('User can change the question backward manually',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="ays_enable_previous_button" value="on" name="ays_enable_previous_button" <?php echo (isset($options['enable_previous_button']) && $options['enable_previous_button'] == 'on') ? 'checked' : '' ?>>
        </div>
    </div> <!-- Enable previous button -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_enable_arrows">
                <?php echo __('Use arrows instead of buttons',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Buttons will be replaced to icons.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timerl ays_toggle_checkbox" id="ays_enable_arrows" name="ays_enable_arrows" value="on" <?php echo (isset($options['enable_arrows']) && $options['enable_arrows'] == 'on') ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target <?php echo (isset($options['enable_arrows']) && $options['enable_arrows'] == 'on') ? '' : 'display_none' ?>">
            <label class="ays_quiz_loader ays_quiz_arrows_option_arrows">
                <input name="ays_quiz_arrow_type" class="" type="radio" value="default" <?php echo ($quiz_arrow_type == 'default') ? 'checked' : ''; ?>>
                <i class="ays_fa ays_fa_arrow_left"></i>
                <i class="ays_fa ays_fa_arrow_right"></i>
            </label>
            <label class="ays_quiz_loader ays_quiz_arrows_option_arrows">
                <input name="ays_quiz_arrow_type" class="" type="radio" value="long_arrow" <?php echo ($quiz_arrow_type == 'long_arrow') ? 'checked' : ''; ?>>
                <i class="ays_fa ays_fa_long_arrow_left"></i>
                <i class="ays_fa ays_fa_long_arrow_right"></i>
            </label>
            <label class="ays_quiz_loader ays_quiz_arrows_option_arrows">
                <input name="ays_quiz_arrow_type" class="" type="radio" value="arrow_circle_o" <?php echo ($quiz_arrow_type == 'arrow_circle_o') ? 'checked' : ''; ?>>
                <i class="ays_fa ays_fa_arrow_circle_o_left"></i>
                <i class="ays_fa ays_fa_arrow_circle_o_right"></i>
            </label>
            <label class="ays_quiz_loader ays_quiz_arrows_option_arrows">
                <input name="ays_quiz_arrow_type" class="" type="radio" value="arrow_circle" <?php echo ($quiz_arrow_type == 'arrow_circle') ? 'checked' : ''; ?>>
                <i class="ays_fa ays_fa_arrow_circle_left"></i>
                <i class="ays_fa ays_fa_arrow_circle_right"></i>
            </label>
        </div>
    </div> <!-- Use arrows instead of buttons -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="ays_enable_timer">
                <?php echo __('Enable Timer',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show countdown time in the quiz. It will be automatically submitted if the time is over.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" class="ays-enable-timerl ays_toggle_checkbox" id="ays_enable_timer"
                   name="ays_enable_timer"
                   value="on" <?php echo ($enable_timer == 'on') ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left <?php echo ($enable_timer == 'on') ? '' : 'display_none'; ?>">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="ays_quiz_timer"><?php echo __('Timer seconds',$this->plugin_name)?></label>
                </div>
                <div class="col-sm-9">
                    <input type="number" name="ays_quiz_timer" id="ays_quiz_timer"
                           class="ays-text-input"
                           value="<?php echo (isset($options['timer'])) ? $options['timer'] : ''; ?>"/>
                    <p class="ays-important-note"><span><?php echo __('Note!!',$this->plugin_name)?></span> <?php echo __('After timer finished
                        countdowning, quiz will be submitted automatically.',$this->plugin_name)?></p>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="ays_quiz_message_before_timer">
                        <?php echo __('Message before timer',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo esc_attr( __('Write a message to display before the timer. For example, "Hurry up, the time is ticking! 00:30".',$this->plugin_name) ); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="ays-text-input" id="ays_quiz_message_before_timer" name="ays_quiz_message_before_timer" value="<?php echo $quiz_message_before_timer; ?>"/>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="timer_text">
                        <?php echo __("Message before starting the quiz", $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php echo esc_attr( sprintf(
                            __( '%sThis message will appear in your quiz, before it starts. You can use:%s %%%%time%%%% %s %%%%quiz_name%%%% %s %%%%user_first_name%%%% %s %%%%user_last_name%%%% %s %%%%questions_count%%%% %s %%%%user_nickname%%%% %s %%%%user_display_name%%%% %s message variables to customize the text. %s', $this->plugin_name ),
                                "<div class='ays-quiz-tooltip-box'>",
                                "<ul class='ays-quiz-tooltip-ul'><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li></ul>",
                                "</div>"
                            ) ); ?>"
                        >
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-9">
                    <?php
                        $content = wpautop(stripslashes((isset($options['timer_text'])) ? $options['timer_text'] : ''));
                        $editor_id = 'timer_text';
                        $settings = array('editor_height' => $quiz_wp_editor_height, 'textarea_name' => 'ays_timer_text', 'editor_class' => 'ays-textarea', 'media_elements' => false);
                        wp_editor($content, $editor_id, $settings);
                    ?>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="after_timer_text">
                        <?php echo __("Message after the timer ends", $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" data-html="true" title="<?php echo esc_attr( sprintf(
                            __( '%sThis message will appear after the timer ends. You can use:%s %%%%time%%%% %s %%%%quiz_name%%%% %s %%%%user_first_name%%%% %s %%%%user_last_name%%%% %s %%%%questions_count%%%% %s %%%%user_nickname%%%% %s %%%%user_display_name%%%% %s message variables to customize the text. %s', $this->plugin_name ),
                                "<div class='ays-quiz-tooltip-box'>",
                                "<ul class='ays-quiz-tooltip-ul'><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li><li>",
                                "</li></ul>",
                                "</div>"
                            ) ); ?>"
                        >
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-9">
                    <?php
                        $content = $after_timer_text;
                        $editor_id = 'after_timer_text';
                        $settings = array('editor_height' => $quiz_wp_editor_height, 'textarea_name' => 'ays_after_timer_text', 'editor_class' => 'ays-textarea', 'media_elements' => false);
                        wp_editor($content, $editor_id, $settings);
                    ?>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="ays_quiz_timer_in_title">
                        <?php echo __('Show timer on page tab',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Enable to show countdown timer in the browser tab.',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" name="ays_quiz_timer_in_title" id="ays_quiz_timer_in_title"
                           <?php echo ($quiz_timer_in_title) ? 'checked' : ''; ?>/>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="ays_quiz_timer_red_warning">
                        <?php echo __('Turn on warning',$this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('When 90% of the set time passes, the timer color changes to red.',$this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" name="ays_quiz_timer_red_warning" id="ays_quiz_timer_red_warning"
                           <?php echo ($quiz_timer_red_warning) ? 'checked' : ''; ?>/>
                </div>
            </div>
        </div>
    </div> <!-- Enable Timer -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_enable_bg_music">
                <?php echo __('Enable Background music',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Background music will play while passing the quiz. Upload your own audio file for the quiz.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" id="ays_enable_bg_music"
                   name="ays_enable_bg_music" class="ays_toggle_checkbox"
                   value="on" <?php echo $enable_bg_music ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left" style="<?php echo $enable_bg_music ? '' : 'display:none;' ?>">
            <div class="ays-bg-music-container">
                <a class="add-quiz-bg-music" href="javascript:void(0);"><?php echo __("Select music", $this->plugin_name); ?></a>
                <audio controls src="<?php echo $quiz_bg_music; ?>"></audio>
                <input type="hidden" name="ays_quiz_bg_music" class="ays_quiz_bg_music" value="<?php echo $quiz_bg_music; ?>">
            </div>
        </div>
    </div> <!-- Enable Background music -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4" style="padding-right: 0px;">
            <label for="ays_enable_rw_asnwers_sounds">
                <?php echo __('Enable sounds for right/wrong answers',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('This option will work only when Enable Show correct answers option is enabled and sounds are selected from General options page.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input type="checkbox" id="ays_enable_rw_asnwers_sounds"
                   name="ays_enable_rw_asnwers_sounds" class="ays_toggle_checkbox"
                   value="on" <?php echo $enable_rw_asnwers_sounds ? 'checked' : ''; ?>/>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left" style="<?php echo $enable_rw_asnwers_sounds ? '' : 'display:none;' ?>">
            <?php if($rw_answers_sounds_status): ?>
            <blockquote class=""><?php echo __('Sounds are selected. For change sounds go to', $this->plugin_name); ?> <a href="?page=quiz-maker-settings" target="_blank"><?php echo __('General options', $this->plugin_name); ?></a> <?php echo __('page', $this->plugin_name); ?></blockquote>
            <?php else: ?>
            <blockquote class=""><?php echo __('Sounds are not selected. For selecting sounds go to', $this->plugin_name); ?> <a href="?page=quiz-maker-settings" target="_blank"><?php echo __('General options', $this->plugin_name); ?></a> <?php echo __('page', $this->plugin_name); ?></blockquote>
            <?php endif; ?>
        </div>
    </div> <!-- Enable Right/Wrong answers sounds -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_audio_autoplay">
                <?php echo __('Enable audio autoplay',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('If there is audio in the question, it will automatically turn on.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_audio_autoplay"
                   name="ays_enable_audio_autoplay"
                   value="on" <?php echo ($enable_audio_autoplay) ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable audio autoplay -->
    <hr/>
    <div class="form-group row ays_toggle_parent">
        <div class="col-sm-4">
            <label for="active_date_check">
                <?php echo __('Schedule the quiz', $this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip"
                   title="<?php echo __('The period of time when quiz will be active. When the date is out the expiration message will be shown.', $this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-1">
            <input id="active_date_check" type="checkbox" class="active_date_check ays_toggle_checkbox"
                    name="active_date_check" <?php echo $active_date_check ? 'checked' : '' ?>>
        </div>
        <div class="col-sm-7 ays_toggle_target ays_divider_left active_date <?php echo $active_date_check ? '' : 'display_none' ?>">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="ays-active"> <?php echo __('Start date:', $this->plugin_name); ?> </label>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                        <input type="text" class="ays-text-input ays-text-input-short" id="ays-active" name="ays-active"
                           value="<?php echo $activeQuiz; ?>" placeholder="<?php echo current_time( 'mysql' ); ?>">
                        <div class="input-group-append">
                            <label for="ays-active" class="input-group-text">
                                <span><i class="ays_fa ays_fa_calendar"></i></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="ays-deactive"> <?php echo __('End date:', $this->plugin_name); ?> </label>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                        <input type="text" class="ays-text-input ays-text-input-short" id="ays-deactive" name="ays-deactive"
                           value="<?php echo $deactiveQuiz; ?>" placeholder="<?php echo current_time( 'mysql' ); ?>">
                        <div class="input-group-append">
                            <label for="ays-deactive" class="input-group-text">
                                <span><i class="ays_fa ays_fa_calendar"></i></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!--Show timer start -->
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for='ays_quiz_show_timer'>
                        <?= __('Show timer', $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip"
                           data-placement="top"
                           title="<?= __("Show the countdown or end date time in the quiz.", $this->plugin_name); ?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="ays_quiz_show_timer" id="ays_quiz_show_timer"
                           value="on" <?= $schedule_show_timer ? 'checked' : '' ?> >
                </div>
                <div class="col-sm-8">
                    <div class="ays_show_time">
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label ays_quiz_loader" for="show_time_countdown">
                                   <input type="radio" id="show_time_countdown" name="ays_show_timer_type" value="countdown" <?= $show_timer_type == 'countdown' ? 'checked' : ''; ?> />
                                   <span><?= __('Show countdown', $this->plugin_name); ?></span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label ays_quiz_loader" for="show_time_enddate">
                                   <input type="radio" id="show_time_enddate" name="ays_show_timer_type"
                                   value="enddate" <?= $show_timer_type == 'enddate' ? 'checked' : ''; ?> />
                                   <span><?= __('Show start date', $this->plugin_name); ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--Show timer end-->
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for='ays_quiz_schedule_timezone'>
                        <?php echo __('Timezone', $this->plugin_name); ?>
                        <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Choose the right timezone based on the coordinates of your quiz takers.',$this->plugin_name);?>">
                            <i class="ays_fa ays_fa_info_circle"></i>
                        </a>
                    </label>
                </div>
                <div class="col-sm-8">
                    <select class="ays-text-input" name="ays_quiz_schedule_timezone" id="ays_quiz_schedule_timezone">
                        <?php echo wp_timezone_choice( $ays_quiz_schedule_timezone, get_user_locale() ); ?>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="active_date_pre_start_message"><?php echo __("Pre-start message:", $this->plugin_name); ?></label>
                </div>
                <div class="col-sm-8">
                    <div class="editor">
                        <?php
                        $content   = isset($options['active_date_pre_start_message']) ? stripslashes($options['active_date_pre_start_message']) : __("The quiz will be available soon!", $this->plugin_name);
                        $editor_id = 'active_date_pre_start_message';
                        $settings  = array(
                            'editor_height'  => $quiz_wp_editor_height,
                            'textarea_name'  => 'active_date_pre_start_message',
                            'editor_class'   => 'ays-textarea',
                            'media_elements' => false
                        );
                        wp_editor($content, $editor_id, $settings);
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-check-label" for="active_date_message"><?php echo __("Expiration message:", $this->plugin_name) ?></label>
                </div>
                <div class="col-sm-8">
                    <div class="editor">
                        <?php
                        $content   = isset($options['active_date_message']) ? stripslashes($options['active_date_message']) : __("This quiz has expired!", $this->plugin_name);
                        $editor_id = 'active_date_message';
                        $settings  = array(
                            'editor_height'  => $quiz_wp_editor_height,
                            'textarea_name'  => 'active_date_message',
                            'editor_class'   => 'ays-textarea',
                            'media_elements' => false
                        );
                        wp_editor($content, $editor_id, $settings);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Schedule the Quiz -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_leave_page">
                <?php echo __('Enable confirmation box for leaving the page',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Show confirmation popup if user tries to refresh or leave the page during the quiz taking process.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_leave_page"
                   name="ays_enable_leave_page"
                   value="on" <?php echo $enable_leave_page ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Enable confirmation box for leaving the page -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_see_result_confirm_box">
                <?php echo __('Enable confirmation box for the See Result button',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('When this option is ticked, a confirmation box will appear after the user clicks the See Result button at the end of the quiz.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_see_result_confirm_box" name="ays_enable_see_result_confirm_box" value="on" <?php echo $enable_see_result_confirm_box ? 'checked' : '' ?>/>
        </div>
    </div>
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_show_questions_numbering">
                <?php echo __('Questions numbering',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Assign numbering to each question in ascending sequential order. Choose your preferred type from the list.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select name="ays_show_questions_numbering" class="ays-text-input ays-text-input-short" id="ays_show_questions_numbering">
                <option value="none" <?php echo ($show_questions_numbering == 'none') ? 'selected' : ''; ?> ><?php echo __( "None", $this->plugin_name ); ?></option>
                <option value="1." <?php echo ($show_questions_numbering == '1.') ? 'selected' : ''; ?> ><?php echo __( "1.", $this->plugin_name ); ?></option>
                <option value="1)" <?php echo ($show_questions_numbering == '1)') ? 'selected' : ''; ?> ><?php echo __( "1)", $this->plugin_name ); ?></option>
                <option value="A." <?php echo ($show_questions_numbering == 'A.') ? 'selected' : ''; ?> ><?php echo __( "A.", $this->plugin_name ); ?></option>
                <option value="A)" <?php echo ($show_questions_numbering == 'A)') ? 'selected' : ''; ?> ><?php echo __( "A)", $this->plugin_name ); ?></option>
                <option value="a." <?php echo ($show_questions_numbering == 'a.') ? 'selected' : ''; ?> ><?php echo __( "a.", $this->plugin_name ); ?></option>
                <option value="a)" <?php echo ($show_questions_numbering == 'a)') ? 'selected' : ''; ?> ><?php echo __( "a)", $this->plugin_name ); ?></option>
            </select>
        </div>
    </div> <!-- Show questions numbering -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_show_answers_numbering">
                <?php echo __('Answers numbering',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Assign numbering to each answer in ascending sequential order. Choose your preferred type from the list.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select name="ays_show_answers_numbering" class="ays-text-input ays-text-input-short" id="ays_show_answers_numbering">
                <option value="none" <?php echo ($show_answers_numbering == 'none') ? 'selected' : ''; ?> ><?php echo __( "None", $this->plugin_name ); ?></option>
                <option value="1." <?php echo ($show_answers_numbering == '1.') ? 'selected' : ''; ?> ><?php echo __( "1.", $this->plugin_name ); ?></option>
                <option value="1)" <?php echo ($show_answers_numbering == '1)') ? 'selected' : ''; ?> ><?php echo __( "1)", $this->plugin_name ); ?></option>
                <option value="A." <?php echo ($show_answers_numbering == 'A.') ? 'selected' : ''; ?> ><?php echo __( "A.", $this->plugin_name ); ?></option>
                <option value="A)" <?php echo ($show_answers_numbering == 'A)') ? 'selected' : ''; ?> ><?php echo __( "A)", $this->plugin_name ); ?></option>
                <option value="a." <?php echo ($show_answers_numbering == 'a.') ? 'selected' : ''; ?> ><?php echo __( "a.", $this->plugin_name ); ?></option>
                <option value="a)" <?php echo ($show_answers_numbering == 'a)') ? 'selected' : ''; ?> ><?php echo __( "a)", $this->plugin_name ); ?></option>
            </select>
        </div>
    </div> <!-- Show answers numbering -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label>
                <?php echo __('Change current quiz creation date',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Change the quiz creation date to your preferred date.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <div class="input-group mb-3">
                <input type="text" class="ays-text-input ays-text-input-short ays-quiz-date-create" id="ays_quiz_change_creation_date" name="ays_quiz_change_creation_date" value="<?php echo $change_creation_date; ?>" placeholder="<?php echo current_time( 'mysql' ); ?>">
                <div class="input-group-append">
                    <label for="ays_quiz_change_creation_date" class="input-group-text">
                        <span><i class="ays_fa ays_fa_calendar"></i></span>
                    </label>
                </div>
            </div>
        </div>
    </div> <!-- Change current quiz creation date -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_quiz_create_author">
                <?php echo __('Change the author of the current quiz',$this->plugin_name); ?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('You can change the author who created the current quiz to your preferred one. You need to write the User ID here. Please note, that in case you write an ID, by which there are no users found, the changes will not be applied and the previous author will remain the same.',$this->plugin_name); ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="number" class="ays-text-input ays-text-input-short" id='ays_quiz_create_author'name='ays_quiz_create_author' value="<?php echo $change_quiz_create_author; ?>"/>
        </div>
    </div> <!-- Change the author of the current quiz -->
    <hr/>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_enable_full_screen_mode">
                <?php echo __('Enable full-screen mode',$this->plugin_name)?>
                <a class="ays_help" data-toggle="tooltip" title="<?php echo __('Allow the quiz takers to enter full-screen mode by pressing the icon located in the top-right corner of the quiz container.',$this->plugin_name)?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" class="ays-enable-timer1" id="ays_enable_full_screen_mode"
                   name="ays_enable_full_screen_mode" value="on" <?php echo $enable_full_screen_mode ? 'checked' : '' ?>/>
        </div>
    </div> <!-- Open Full Screen Mode -->
    <hr>
    <div class="form-group row">
        <div class="col-sm-4">
            <label for="ays_payment_type">
                <?php echo __('Paymant Type',$this->plugin_name); ?>
                <a class="ays_help" style="font-size:15px;" data-toggle="tooltip" data-html="true"
                    title="<?php
                        echo __('Select the time when the quiz taker will need to pay to pass the quiz:',$this->plugin_name) .
                        "<ul style='list-style-type: circle;padding-left: 20px;'>".
                            "<li>". __('Prepay: The quiz taker will be allowed to pass the quiz only after paying.',$this->plugin_name) ."</li>".
                            "<li>". __('Postpay: The quiz taker will be able to see the results of his/her quiz only after doing a payment. That means that they could pass the quiz but would not be allowed to get results, emails, or certificates until they pay. Besides, if you set the payment type as Postpay the only payment term that will be available is Onetime payment???',$this->plugin_name) ."</li>".
                        "</ul>";
                    ?>">
                    <i class="ays_fa ays_fa_info_circle"></i>
                </a>
            </label>
        </div>
        <div class="col-sm-8">
            <select name="ays_payment_type" class="ays-text-input ays-text-input-short" id="ays_payment_type">
                <option value="prepay" <?php echo ($payment_type == 'prepay') ? 'selected' : ''; ?> ><?php echo __( "Prepay", $this->plugin_name ); ?></option>
                <option value="postpay" <?php echo ($payment_type == 'postpay') ? 'selected' : ''; ?> ><?php echo __( "Postpay", $this->plugin_name ); ?></option>
            </select>
        </div>
    </div>
</div>
