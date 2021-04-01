<?php

/*
 * LimeSurvey
 * Copyright (C) 2007-2020 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */


/**
 * Dummy helper intended to facilitate "twig only" strings to be picked by Translations Bot.
 *
 * Since twig files are not scanned by the bot, translatable strings that only appear in twig
 * files can be placed here in order to be scanned.
 *
 * @return void
 */
function dummy_twig_translation_helper()
{
    return;

    gT("Your survey responses have not been recorded. This survey is not yet active."); // From themes/survey/vanilla/views/subviews/content/submit_preview.twig:23 (2020/11/16)
    gT("Search (3 characters minimum)"); // From application/views/survey/questions/answer/shortfreetext/location_mapservice/item_100.twig:29 (2021/02/19)
    gT("Restrict search place to map extent"); // From application/views/survey/questions/answer/shortfreetext/location_mapservice/item_100.twig:40 (2021/02/19)
    gT("Latitude:"); // From application/views/survey/questions/answer/shortfreetext/location_mapservice/item_100.twig:66 (2021/02/19)
    gT("Longitude:"); // From application/views/survey/questions/answer/shortfreetext/location_mapservice/item_100.twig:80 (2021/02/19)
    gT("Some example answer option"); // From application/views/questionAdministration/answerOptionRow.twig
    gT("Drag to sort"); // From application/views/questionAdministration/answerOptionRow.twig
    gT("Insert a new answer option after this"); // From application/views/questionAdministration/answerOptionRow.twig
    gT("Predefined label sets..."); // From application/views/questionAdministration/subquestions.twig
    gT("Save as label set");  // From application/views/questionAdministration/answerOptions.twig
    gT("Short free text"); // From application/views/survey/questions/answer/shortfreetext/config.xml
}
