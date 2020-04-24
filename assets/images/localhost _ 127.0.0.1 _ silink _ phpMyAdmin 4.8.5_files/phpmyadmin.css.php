
/* FILE: common.css.php */
/* ----------------------------------------------------- */

/**
 * Fallen v0.7 (phpMyAdmin Theme)
 * Copyright 2016 Frans Allen (https://www.fransallen.com)
 * Licensed under the GPLv2 or later
 */

/* Fonts
---------------------------------------------- */

@font-face{font-family:Fallen;src:local("☺");src:url(./themes/fallen/fonts/fallen/fallen.eot);src:url(./themes/fallen/fonts/fallen/fallen.eot?#iefix) format("embedded-opentype"),url(./themes/fallen/fonts/fallen/fallen.svg#fallen) format("svg"),url(./themes/fallen/fonts/fallen/fallen.woff) format("woff"),url(./themes/fallen/fonts/fallen/fallen.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:Roboto;src:local(Roboto Thin),url(./themes/fallen/fonts/roboto/Roboto-Thin.eot);src:url(./themes/fallen/fonts/roboto/Roboto-Thin.eot?#iefix) format("embedded-opentype"),url(./themes/fallen/fonts/roboto/Roboto-Thin.woff2) format("woff2"),url(./themes/fallen/fonts/roboto/Roboto-Thin.woff) format("woff"),url(./themes/fallen/fonts/roboto/Roboto-Thin.ttf) format("truetype");font-weight:200}@font-face{font-family:Roboto;src:local(Roboto Light),url(./themes/fallen/fonts/roboto/Roboto-Light.eot);src:url(./themes/fallen/fonts/roboto/Roboto-Light.eot?#iefix) format("embedded-opentype"),url(./themes/fallen/fonts/roboto/Roboto-Light.woff2) format("woff2"),url(./themes/fallen/fonts/roboto/Roboto-Light.woff) format("woff"),url(./themes/fallen/fonts/roboto/Roboto-Light.ttf) format("truetype");font-weight:300}@font-face{font-family:Roboto;src:local(Roboto Regular),url(./themes/fallen/fonts/roboto/Roboto-Regular.eot);src:url(./themes/fallen/fonts/roboto/Roboto-Regular.eot?#iefix) format("embedded-opentype"),url(./themes/fallen/fonts/roboto/Roboto-Regular.woff2) format("woff2"),url(./themes/fallen/fonts/roboto/Roboto-Regular.woff) format("woff"),url(./themes/fallen/fonts/roboto/Roboto-Regular.ttf) format("truetype");font-weight:400}@font-face{font-family:Roboto;src:url(./themes/fallen/fonts/roboto/Roboto-Medium.eot);src:url(./themes/fallen/fonts/roboto/Roboto-Medium.eot?#iefix) format("embedded-opentype"),url(./themes/fallen/fonts/roboto/Roboto-Medium.woff2) format("woff2"),url(./themes/fallen/fonts/roboto/Roboto-Medium.woff) format("woff"),url(./themes/fallen/fonts/roboto/Roboto-Medium.ttf) format("truetype");font-weight:500}@font-face{font-family:Roboto;src:url(./themes/fallen/fonts/roboto/Roboto-Bold.eot);src:url(./themes/fallen/fonts/roboto/Roboto-Bold.eot?#iefix) format("embedded-opentype"),url(./themes/fallen/fonts/roboto/Roboto-Bold.woff2) format("woff2"),url(./themes/fallen/fonts/roboto/Roboto-Bold.woff) format("woff"),url(./themes/fallen/fonts/roboto/Roboto-Bold.ttf) format("truetype");font-weight:700}
/* Reset
---------------------------------------------- */

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  border: 0;
  margin: 0;
  padding: 0
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block
}

ol, ul {
  list-style: none
}

blockquote, q {
  quotes: none
}

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none
}

table {
  border-collapse: collapse;
  border-spacing: 0
}

*:focus {
  outline: none
}

#li_select_fontsize {
  display: none
}

/* General
---------------------------------------------- */

html {
  font-size: 100%
}

input, select, textarea {
  font-size: 1em
}

body {
  background: #fff;
  color: #444;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 1;
  margin-left: 250px;
  padding: 0
}

a, a:link, a:visited, a:active, button.mult_submit, .checkall_box+label {
  text-decoration: none;
  color: #666;
  cursor: pointer;
  outline: none
}

a:hover, button.mult_submit:hover, button.mult_submit:focus, .checkall_box+label:hover {
  text-decoration: underline;
  color: #4285f4}

font[color=red], span[style="color: #ff0000"] {
  color: #ea4335!important
}

strong {
  font-weight: normal
}

code, pre, textarea, tt {
  font-family: Consolas, Monospace, "Lucida Grande"!important
}

/* Login
---------------------------------------------- */

body#loginform {
  background-color: #fff;
  margin: 0
}

body#loginform #page_content {
  background-color: #4285f4;
  height: 220px;
  margin: 0!important;
  margin-top: 10%!important;
  padding: 35px 20px 20px
}

body#loginform div.container {
  margin-left: auto;
  margin-right: auto;
  text-align: left;
  width: 48em
}

body#loginform div.container:before {
  background-color: #666;
  border-radius: 50%;
  box-shadow: 0 4px 2px rgba(14, 14, 14, 0.29);
  color: #fff;
  content: "a";
  float: left;
  font-family: "Fallen";
  font-size: 235px;
  height: 220px;
  line-height: 1;
  margin-right: 20px;
  margin-top: -10px;
  overflow: hidden;
  width: 230px
}

/* IE Setting for 'body#loginform div.container:before' */

.ie body#loginform div.container:before {
  border-radius: 0;
  box-shadow: 0 1px 1px rgba(14, 14, 14, 0.29);
}

body#loginform h1 {
  color: #fff;
  display: inline-block;
  font-size: 2.5em;
  line-height: 2;
  margin-right: -50%;
  padding-top: 0;
  text-align: left
}

body#loginform a.logo {
  display: none
}

body#loginform fieldset legend {
  display: none
}

body#loginform .item {
  margin-bottom: 10px
}

body#loginform input.textfield {
  background: #eee;
  border: 1px solid #fff;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  color: #666;
  margin: 0;
  width: 100%
}

body#loginform input.textfield:hover, body#loginform input.textfield:focus {
  background-color: #fff;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  color: #333;
  margin: 0
}

body#loginform input[type=submit] {
  background-color: #fff;
  border: none;
  box-shadow: 0 1px 1px #444;
  color: #444;
  margin: 0;
  padding: 7px
}

body#loginform input[type=submit]:hover {
  background-color: #eee
}

body#loginform input[type=submit]:focus {
  background-color: #ddd;
  box-shadow: none
}

body#loginform select {
  background: #4285f4;
  border: 1px solid #fff;
  color: #eee;
  margin: 0!important;
  min-width: 100%;
  padding-left: 0!important
}

body#loginform select:hover {
  border: 1px solid #eee;
}

body#loginform br {
  display: none
}

body#loginform fieldset {
  background: none;
  border: none;
  margin-top: 0;
  margin-bottom: 10px;
  padding: 0
}

body#loginform fieldset:first-child {
  border-bottom: none;
  margin: 0;
  margin-bottom: 0
}

body#loginform fieldset.tblFooters {
  border: none;
  clear: none;
  margin: 0
}

body#loginform .error {
  box-shadow: 0 1px 1px #666;
  float: left;
  margin-top: -280px;
  width: 48em
}

body#loginform form.login label {
  display: none
}

/* Icons
---------------------------------------------- */

#page_nav_icons {
  position: fixed;
  top: 8px;
  right: 0;
  z-index: 99;
  padding: .25em 10px 0 0;
  filter: invert(70%)
}

#goto_pagetop, #lock_page_icon, #page_settings_icon {
  padding: .25em
}

#page_settings_icon {
  cursor: pointer;
  display: none;
  margin-right: 6px!important
}

/* Typography
---------------------------------------------- */

h1, h2 {
  color: #4285f4;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300}

h1 {
  font-size: 3em;
  letter-spacing: -1px;
  line-height: 1;
  margin: 0
}

h2 {
  font-size: 3.6em;
  margin: 10px 0 15px;
  line-height: 1;
  letter-spacing: -1px
}

h3 {
  text-transform: uppercase;
  font-weight: normal
}

/* Heading
---------------------------------------------- */

h2 img {
  display: none
}

h2 a img {
  display: inline
}

/* Globals
---------------------------------------------- */

a img {
  border: 0
}

hr {
  background-color: #ddd;
  border: 0;
  color: #ddd;
  height: 1px
}

dfn:hover {
  cursor: help
}

legend {
  border-radius: 3px;
  box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
  padding: 10px 12px 15px;
}

.some-margin {
  margin: 20px
}

.clearfloat {
  clear: both
}

.floatleft {
  float: left;
  margin-right: 1em
}

.floatright {
  float: right
}

.center {
  text-align: center
}

.displayblock {
  display: block
}

.paddingtop {
  padding-top: 1em
}

.separator {
  color: #fff;
}

.result_query {
  background: #f7f7f7;
  margin-bottom: 20px
}

div.tools {
  padding: 10px;
  text-align: right
}

div.tools span {
  float: right;
  margin: 6px 2px
}

div.tools a {
  color: #4285f4!important
}

div.null_div {
  height: 20px;
  text-align: center;
  font-style: normal;
  min-width: 50px
}

.odd:not(.nopointer):hover, .even:not(.nopointer):hover, .hover:not(.nopointer), .structure_actions_dropdown {
  background-color: #eee;
  color: #444}

.structure_actions_dropdown .icon {
  vertical-align: middle!important
}

.condition {
  border-color: #ea4335!important
}

.value {
  font-family: Consolas, Monospace, "Lucida Grande"}

/* Doc links in SQL */

.cm-sql-doc {
  border-bottom: 1px dotted #999;
  color: inherit!important;
  text-decoration: none
}

/* End Doc */

div.tools, .tblFooters {
  font-weight: normal;
  color: #666;
  background: #f7f7f7}

/* Disabled text */

.disabled, .disabled a:link, .disabled a:active, .disabled a:visited {
  color: #666
}

.disabled a:hover {
  color: #666;
  text-decoration: none
}

tr.disabled td, td.disabled {
  background-color: #f3f3f3;
  color: #aaa
}

/* End Disabled */

.nowrap {
  white-space: nowrap
}

#page_settings_modal {
  display: none
}

#pma_navigation_settings {
  display: none
}

#span_table_comment {
  font-weight: normal;
  font-style: italic;
  white-space: nowrap;
  margin-left: 10px
}

#textSQLDUMP {
  width: 95%;
  height: 95%;
  font-family: Consolas, "Courier New", Courier, mono;
  font-size: 110%
}

#TooltipContainer {
  position: absolute;
  z-index: 99;
  width: 20em;
  height: auto;
  overflow: visible;
  visibility: hidden;
  background-color: #ffffcc;
  color: #006600;
  border: .1em solid #000;
  padding: .5em
}

caption a.top {
  float: right
}

#edit_user_dialog, #add_user_dialog {
  margin: 20px!important
}

.click-hide-message {
  cursor: pointer
}

.prefsmanage_opts {
  margin-left: 2em
}

#prefs_autoload {
  margin-bottom: .5em;
  margin-left: .5em
}

#placeholder .button {
  position: absolute;
  cursor: pointer
}

#placeholder div.button {
  font-size: smaller;
  color: #999;
  background-color: #eee;
  padding: 2px
}

.wrapper {
  float: left;
  margin-bottom: 1.5em
}

.toggleButton {
  position: relative;
  cursor: pointer;
  font-size: .8em;
  text-align: center;
  line-height: 1.4em;
  height: 1.55em;
  overflow: hidden;
  border-right: .1em solid #888;
  border-left: .1em solid #888
}

.toggleButton table, .toggleButton td, .toggleButton img {
  padding: 0;
  position: relative
}

.toggleButton .container {
  position: absolute
}

.toggleButton .container td {
  background-image: none;
  background: none
}

.toggleButton .toggleOn {
  color: #fff;
  padding: 0 1em
}

.toggleButton .toggleOff {
  padding: 0 1em
}

#left_arrow {
  left: 8px;
  top: 26px
}

#right_arrow {
  left: 26px;
  top: 26px
}

#up_arrow {
  left: 17px;
  top: 8px
}

#down_arrow {
  left: 17px;
  top: 44px
}

#zoom_in {
  left: 17px;
  top: 67px
}

#zoom_world {
  left: 17px;
  top: 85px
}

#zoom_out {
  left: 17px;
  top: 103px
}

.colborder {
  cursor: col-resize;
  height: 100%;
  margin-left: -6px;
  position: absolute;
  width: 5px
}

.colborder_active {
  border-right: 2px solid #a44
}

.cRsz {
  position: absolute
}

.cCpy {
  background: #333;
  color: #FFF;
  font-weight: bold;
  margin: .1em;
  padding: .3em;
  position: absolute
}

.cPointer {
  background: url(./themes/fallen/img/col_pointer.png);
  height: 20px;
  margin-left: -5px;
  /* must be minus half of its width */
  margin-top: -10px;
  position: absolute;
  width: 10px
}

.tooltip {
  background: #333!important;
  opacity: .8!important;
  border: 1px solid #000!important;
  font-size: 10px!important;
  font-weight: normal!important;
  padding: 5px!important;
  width: 260px;
  line-height: 1.5
}

.tooltip * {
  background: none!important;
  color: #FFF!important
}

.cDrop {
  left: 0;
  position: absolute;
  top: 0
}

.coldrop {
  background: url(./themes/fallen/img/col_drop.png);
  cursor: pointer;
  height: 16px;
  margin-left: .3em;
  margin-top: .3em;
  position: absolute;
  width: 16px
}

.coldrop:hover, .coldrop-hover {
  background-color: #999
}

.cList {
  background: #fff;
  border: solid 1px #ccc;
  position: absolute
}

.cList .lDiv div {
  padding: .2em .5em .2em;
  padding-left: .2em
}

.cList .lDiv div:hover {
  background: #4285f4;
  cursor: pointer;
  color: #fff
}

.cList .lDiv div input {
  cursor: pointer
}

.showAllColBtn {
  border-bottom: solid 1px #ccc;
  border-top: solid 1px #ccc;
  cursor: pointer;
  font-size: .9em;
  padding: .35em 1em;
  text-align: center;
  font-weight: normal
}

.showAllColBtn:hover {
  background: #4285f4;
  cursor: pointer;
  color: #fff
}

#page_content {
  line-height: 1.5
}

.cEdit {
  margin: 0;
  padding: 0;
  position: absolute
}

.cEdit input[type=text], .cEdit input[type=password], .cEdit input[type=number] {
  background: #FFF;
  height: 100%;
  margin: 0;
  padding: 0
}

.cEdit .edit_area {
  background: #FFF;
  border: 1px solid #999;
  min-width: 10em;
  padding: .3em .5em
}

.cEdit .edit_area select, .cEdit .edit_area textarea {
  width: 97%
}

.cEdit .cell_edit_hint {
  color: #555;
  font-size: .8em;
  margin: .3em .2em
}

.cEdit .edit_box {
  overflow: hidden;
  padding: 0;
  margin-top: 10px
}

.cEdit .edit_box_posting {
  background: #FFF url("./themes/fallen/img/loader-blue.svg") no-repeat right center;
  padding-right: 1.5em
}

.cEdit .edit_area_loading {
  background: #FFF url("./themes/fallen/img/loader-blue.svg") no-repeat center;
  height: 10em
}

.cEdit .goto_link {
  background: #EEE;
  color: #555;
  padding: .2em .3em
}

.saving_edited_data {
  background: url("./themes/fallen/img/loader-blue.svg") no-repeat left;
  padding-left: 20px
}

.relationalTable select {
  width: 125px;
  margin-right: 5px
}

/* css for timepicker */
.ui-timepicker-div .ui-widget-header {
  margin-bottom: 8px
}

.ui-timepicker-div dl {
  text-align: left
}

.ui-timepicker-div dl dt {
  height: 25px;
  margin-bottom: -25px
}

.ui-timepicker-div dl dd {
  margin: 0 10px 10px 85px
}

.ui-timepicker-div td {
  font-size: 90%
}

.ui-tpicker-grid-label {
  background: none;
  border: none;
  margin: 0;
  padding: 0
}

.ui-timepicker-rtl {
  direction: rtl
}

.ui-timepicker-rtl dl {
  text-align: right
}

.ui-timepicker-rtl dl dd {
  margin: 0 65px 10px 10px
}

input.btn {
  color: #333;
  background-color: #d0dce0
}

body .ui-widget {
  font-size: 1em
}

.ui-dialog fieldset legend a {
  color: #235a81
}

.report-data {
  height: 13em;
  overflow: scroll;
  width: 570px;
  border: solid 1px;
  background: white;
  padding: 2px
}

.report-description {
  height: 10em;
  width: 570px
}

div#page_content div#tableslistcontainer table.data {
  border-top: 0.1px solid #eee
}

.small_font {
  font-size: smaller
}

/* Console styles */
#pma_console_container {
  width: 100%;
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 100
}

#pma_console {
  position: relative;
  margin-left: 250px
}

#pma_console .templates {
  display: none
}

#pma_console .mid_text, #pma_console .toolbar span {
  vertical-align: middle
}

#pma_console .toolbar {
  position: relative;
  background: #f7f7f7;
  border-top: solid 1px #ccc;
  cursor: n-resize
}

#pma_console .toolbar.collapsed:not(:hover) {
  display: inline-block;
  border-right: solid 1px #ccc
}

#pma_console .toolbar.collapsed {
  cursor: default
}

#pma_console .toolbar.collapsed>.button {
  display: none
}

#pma_console .message span.text, #pma_console .message span.action, #pma_console .toolbar .button, #pma_console .toolbar .text, #pma_console .switch_button {
  padding: 0 3px;
  display: inline-block
}

#pma_console .message span.action, #pma_console .toolbar .button, #pma_console .switch_button {
  cursor: pointer
}

#pma_console .toolbar .text {
  font-weight: bold
}

#pma_console .toolbar .button, #pma_console .toolbar .text {
  margin-right: .4em
}

#pma_console .toolbar .button, #pma_console .toolbar .text {
  float: right
}

#pma_console .content {
  overflow-x: hidden;
  overflow-y: auto;
  margin-bottom: -65px;
  border-top: solid 1px #ccc;
  background: #fff;
  padding-top: .4em
}

#pma_console .content.console_dark_theme {
  background: #000;
  color: #fff
}

#pma_console .content.console_dark_theme .CodeMirror-wrap {
  background: #000;
  color: #fff
}

#pma_console .content.console_dark_theme .action_content {
  color: #000
}

#pma_console .content.console_dark_theme .message {
  border-color: #373b41
}

#pma_console .content.console_dark_theme .CodeMirror-cursor {
  border-color: #fff
}

#pma_console .content.console_dark_theme .cm-keyword {
  color: #de935f
}

#pma_console .message, #pma_console .query_input {
  position: relative;
  font-family: "Monaco", "Consolas", monospace;
  cursor: text;
  margin: 0 10px .2em 1.4em
}

#pma_console .message {
  border-bottom: solid 1px #ccc;
  padding-bottom: .2em
}

#pma_console .message.expanded>.action_content {
  position: relative
}

#pma_console .message:before, #pma_console .query_input:before {
  left: -0.7em;
  position: absolute;
  content: ">"
}

#pma_console .query_input:before {
  top: -2px
}

#pma_console .query_input textarea {
  width: 100%;
  height: 4em;
  resize: vertical
}

#pma_console .message:hover:before {
  color: #7cf;
  font-weight: bold
}

#pma_console .message.expanded:before {
  content: "]"
}

#pma_console .message.welcome:before {
  display: none
}

#pma_console .message.failed:before, #pma_console .message.failed.expanded:before, #pma_console .message.failed:hover:before {
  content: "=";
  color: #944
}

#pma_console .message.pending:before {
  opacity: .3
}

#pma_console .message.collapsed>.query {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden
}

#pma_console .message.expanded>.query {
  display: block;
  white-space: pre;
  word-wrap: break-word
}

#pma_console .message .text.targetdb, #pma_console .message.collapsed .action.collapse, #pma_console .message.expanded .action.expand, #pma_console .message .action.requery, #pma_console .message .action.profiling, #pma_console .message .action.explain, #pma_console .message .action.bookmark {
  display: none
}

#pma_console .message.select .action.profiling, #pma_console .message.select .action.explain, #pma_console .message.history .text.targetdb, #pma_console .message.successed .text.targetdb, #pma_console .message.history .action.requery, #pma_console .message.history .action.bookmark, #pma_console .message.bookmark .action.requery, #pma_console .message.bookmark .action.bookmark, #pma_console .message.successed .action.requery, #pma_console .message.successed .action.bookmark {
  display: inline-block
}

#pma_console .message .action_content {
  position: absolute;
  bottom: 100%;
  background: #ccc;
  border: solid 1px #aaa
}

html.ie8 #pma_console .message .action_content {
  position: relative!important
}

#pma_console .message.bookmark .text.targetdb, #pma_console .message .text.query_time {
  margin: 0;
  display: inline-block
}

#pma_console .message.failed .text.query_time, #pma_console .message .text.failed {
  display: none
}

#pma_console .message.failed .text.failed {
  display: inline-block
}

#pma_console .message .text {
  background: #fff
}

#pma_console .message.collapsed>.action_content {
  display: none
}

#pma_console .message.collapsed:hover>.action_content {
  display: block
}

#pma_console .message .bookmark_label {
  padding: 0 4px;
  top: 0;
  background: #369;
  color: #fff
}

#pma_console .message .bookmark_label.shared {
  background: #396
}

#pma_console .query_input {
  position: relative
}

#pma_console .mid_layer {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  /* For support IE8, this layer doesn't use filter:opacity or opacity,
    js code will fade this layer opacity to 0.18(using animation) */
  background: #ccc;
  display: none;
  cursor: pointer;
  z-index: 200
}

#pma_console .card {
  position: absolute;
  width: 94%;
  height: 100%;
  min-height: 48px;
  left: 100%;
  top: 0;
  border-left: solid 1px #999;
  z-index: 300;
  transition: left 0.2s;
  -ms-transition: left 0.2s;
  -webkit-transition: left 0.2s;
  -moz-transition: left 0.2s;
}

#pma_console .card.show {
  left: 6%
}

html.ie7 #pma_console .query_input {
  display: none
}

#pma_bookmarks .content.add_bookmark, #pma_console_options .content {
  padding: 4px 6px
}

#pma_bookmarks .content.add_bookmark .options {
  margin-left: 1.4em;
  padding-bottom: .4em;
  margin-bottom: .4em;
  border-bottom: solid 1px #ccc
}

#pma_bookmarks .content.add_bookmark .options button {
  margin: 0 7px;
  vertical-align: bottom
}

#pma_bookmarks .content.add_bookmark input[type=text] {
  margin: 0;
  padding: 2px 4px
}

#pma_console .button.hide, #pma_console .message span.text.hide {
  display: none
}

#debug_console.grouped .ungroup_queries, #debug_console.ungrouped .group_queries {
  display: inline-block
}

#debug_console.ungrouped .ungroup_queries, #debug_console.ungrouped .sort_count, #debug_console.grouped .group_queries {
  display: none
}

#debug_console .count {
  margin-right: 8px
}

#debug_console .show_trace .trace, #debug_console .show_args .args {
  display: block
}

#debug_console .hide_trace .trace, #debug_console .hide_args .args, #debug_console .show_trace .action.dbg_show_trace, #debug_console .hide_trace .action.dbg_hide_trace, #debug_console .traceStep.hide_args .action.dbg_hide_args, #debug_console .traceStep.show_args .action.dbg_show_args {
  display: none
}

#debug_console .traceStep:after, #debug_console .trace.welcome:after, #debug_console .debug>.welcome:after {
  content: "";
  display: table;
  clear: both
}

#debug_console .debug_summary {
  float: left
}

#debug_console .trace.welcome .time {
  float: right
}

#debug_console .traceStep .file, #debug_console .script_name {
  float: right
}

#debug_console .traceStep .args pre {
  margin: 0
}

/* Code mirror console style*/
.cm-s-pma .CodeMirror-code pre, .cm-s-pma .CodeMirror-code {
  font-family: "Monaco", "Consolas", monospace;
}

.cm-s-pma .CodeMirror-measure>pre, .cm-s-pma .CodeMirror-code>pre, .cm-s-pma .CodeMirror-lines {
  padding: 0
}

.cm-s-pma.CodeMirror {
  resize: none;
  height: auto;
  width: 100%;
  min-height: initial;
  max-height: initial
}

.cm-s-pma .CodeMirror-scroll {
  cursor: text
}

/* PMA drop-improt style */
.pma_drop_handler {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  height: 100%;
  z-index: 999;
  color: white;
  font-size: 30pt;
  text-align: center;
  padding-top: 20%
}

.pma_sql_import_status {
  display: none;
  position: fixed;
  bottom: 0;
  right: 25px;
  width: 400px;
  border: 1px solid #999;
  background: #f3f3f3
}

.pma_sql_import_status h2, .pma_drop_result h2 {
  background-color: #bbb;
  padding: .1em .3em;
  margin-top: 0;
  margin-bottom: 0;
  color: #fff;
  font-size: 1.6em;
  font-weight: normal
}

.pma_sql_import_status div {
  height: 270px;
  overflow-y: auto;
  overflow-x: hidden;
  list-style-type: none
}

.pma_sql_import_status div li {
  padding: 8px 10px;
  border-bottom: 1px solid #bbb;
  color: rgb(148, 14, 14);
  background: white
}

.pma_sql_import_status div li .filesize {
  float: right
}

.pma_sql_import_status h2 .minimize {
  float: right;
  margin-right: 5px;
  padding: 0 10px
}

.pma_sql_import_status h2 .close {
  float: right;
  margin-right: 5px;
  padding: 0 10px;
  display: none
}

.pma_sql_import_status h2 .minimize:hover, .pma_sql_import_status h2 .close:hover, .pma_drop_result h2 .close:hover {
  background: rgba(155, 149, 149, 0.78);
  cursor: pointer
}

.pma_drop_file_status {
  color: #235a81
}

.pma_drop_file_status span.underline:hover {
  cursor: pointer;
  text-decoration: underline
}

.pma_drop_result {
  position: fixed;
  top: 10%;
  left: 20%;
  width: 60%;
  background: white;
  min-height: 300px;
  z-index: 800;
  cursor: move
}

.pma_drop_result h2 .close {
  float: right;
  margin-right: 5px;
  padding: 0 10px
}

.dependencies_box {
  background-color: white;
  border: 3px ridge black
}

#composite_index_list {
  list-style-type: none;
  list-style-position: inside
}

span.drag_icon {
  display: inline-block;
  background-image: url('./themes/fallen/img/s_sortable.png');
  background-position: center center;
  background-repeat: no-repeat;
  width: 1em;
  height: 3em;
  cursor: move
}

.topmargin {
  margin-top: 1em
}

/* styles for jQuery-ui to support rtl languages */
body .ui-dialog .ui-dialog-titlebar-close {
  right: .3em;
  left: initial
}

body .ui-dialog .ui-dialog-title {
  float: left
}

body .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
  float: right
}
/* end of styles for jQuery-ui to support rtl languages */

/* Override some jQuery-ui styling to have square corners */
body .ui-corner-all, body .ui-corner-top, body .ui-corner-left, body .ui-corner-tl {
  border-top-left-radius: 0
}

body .ui-corner-all, body .ui-corner-top, body .ui-corner-right, body .ui-corner-tr {
  border-top-right-radius: 0
}

body .ui-corner-all, body .ui-corner-bottom, body .ui-corner-left, body .ui-corner-bl {
  border-bottom-left-radius: 0
}

body .ui-corner-all, body .ui-corner-bottom, body .ui-corner-right, body .ui-corner-br {
  border-bottom-right-radius: 0
}

/* Override jQuery-ui styling for ui-dialog */
body .ui-dialog {
  padding: 0
}

body .ui-dialog .ui-widget-header {
  color: #fff;
  border: none;
  background-color: #4285f4;
  background-image: none
}

body .ui-dialog .ui-dialog-title {
  padding: 5px;
  font-weight: normal
}

body .ui-dialog .ui-dialog-buttonpane button {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  color: #fff;
  background-color: #4285f4;
  background-image: none;
  border: 1px solid #4285f4}

body .ui-dialog .ui-dialog-buttonpane button.ui-state-hover {
  background-color: #2171f5;
  border: 1px solid #2171f5}

body .ui-dialog .ui-dialog-buttonpane button.ui-state-active {
  background-color: #333;
  border: 1px solid #333
}

/* Selection */

::selection {
  background: #b3d4fc;
  text-shadow: none
}

/* Contents
---------------------------------------------- */

#page_content {
  margin: 20px!important
}

.turnOffSelect {
  user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none
}

/* Data
---------------------------------------------- */

.data, .data_full_width {
  margin: 10px 0
}

.data_full_width {
  width: 100%
}

.data th {
  border-bottom: 1px solid #ddd}

.data th a:hover {
  color: #999!important
}

div#dataDisplay input, div#dataDisplay select {
  margin: 0;
  margin-right: .5em
}

div#dataDisplay th {
  line-height: 2em
}

/* Tables &amp; Columns
---------------------------------------------- */

table {
  border-collapse: collapse
}

table caption, table th, table td {
  padding: 0.6em
}

th {
  text-align: left
}

th, th a {
  color: #666!important;
  font-weight: 500;
  padding-top: 10px!important;
  padding-bottom: 10px!important
}

table.nospacing {
  border-spacing: 0
}

table.nopadding tr th, table.nopadding tr td {
  padding: 0
}

th.left, td.left {
  text-align: left
}

th.center, td.center {
  text-align: center
}

th.right, td.right {
  text-align: right;
  padding-right: 1em
}

tr.vtop th, tr.vtop td, th.vtop, td.vtop {
  vertical-align: top
}

tr.vmiddle th, tr.vmiddle td, th.vmiddle, td.vmiddle {
  vertical-align: middle
}

tr.vbottom th, tr.vbottom td, th.vbottom, td.vbottom {
  vertical-align: bottom
}

#initials_table {
  background: #f7f7f7;
  border: 1px solid #ddd;
  margin-bottom: 10px
}

#initials_table a {
  background: #fff;
  border: 1px solid #ddd;
  padding: 4px 8px
}

#initials_table td {
  padding: 8px!important
}

.column_heading, .column_action {
  background-color: #f6f6f6;
  border: 1px solid #ddd}

table tbody:first-of-type tr:nth-child(odd), table tbody:first-of-type tr:nth-child(odd) th {
  background: #fff;
  border-bottom: none
}

table tbody:first-of-type tr:nth-child(even), table tbody:first-of-type tr:nth-child(even) th {
  background: #f7f7f7;
  border-bottom: none
}

table tr th, table tr {
  text-align: left;
  border-bottom: 1px solid #eee
}

table tr {
  border-left: 3px solid transparent;
  line-height: 1em
}

td.marked:not(.nomarker), table tr.marked:not(.nomarker) td, table tbody:first-of-type tr.marked:not(.nomarker) th, table tr.marked:not(.nomarker) {
  color: #444}

td.marked:not(.nomarker) {
  background-color: #eee}

table tr.marked:not(.nomarker) {
  border-left: 3px solid #4285f4
}

table tr.hover:not(.nopointer) th {
  background-color: #eee;
  color: #000}

th.condition, th.condition a {
  border: 1px solid #ea4335;
  background: #ea4335;
  color: #fff!important
}

td.condition {
  border: 1px solid
}

td.null {
  font-style: italic;
}

table .valueHeader {
  text-align: right;
  white-space: normal
}

table .value {
  text-align: left;
  white-space: normal
}

/* IE doesnt handles 'pre' right */

table [class=value] {
  white-space: normal
}

/* End IE */

td .icon {
  margin: 0
}

.new_central_col {
  width: 100%;
}

.tblcomment {
  font-size: 70%;
  font-weight: normal;
  color: #000099
}

.tblHeaders {
  color: #666;
  background: #f7f7f7;
  font-weight: normal
}

.tblHeaders a:link, .tblHeaders a:active, .tblHeaders a:visited, div.tools a:link, div.tools a:visited, div.tools a:active, .tblFooters a:link, .tblFooters a:active, .tblFooters a:visited {
  color: #0000ff
}

.tblHeaders a:hover, div.tools a:hover, .tblFooters a:hover {
  color: #ff0000
}

#tbl_maintenance li a {
  text-transform: uppercase;
  font-weight: normal
}

#tbl_maintenance li:before {
  font-family: "Fallen";
  content: "%";
  margin-right: 10px
}

table#tableFieldsId {
  width: 100%
}

/* Table stats */

div#tablestatistics table {
  float: left;
  margin-bottom: .5em;
  margin-right: 1.5em;
  margin-top: .5em;
  min-width: 16em
}

/* End table stats */

/* Server Privileges */

#tableuserrights td, #tablespecificuserrights td, #tabledatabases td {
  vertical-align: middle
}

/* End server privileges */

#structure-action-links a {
  margin-right: 1em
}

#create_table_form_minimal {
  display: block
}

#db_or_table_specific_priv .tblFooters {
  margin-top: -68px
}

.pma_table td {
  position: static
}

.pma_table th.draggable span, .pma_table tbody td span {
  display: block;
  overflow: hidden
}

.pma_table tbody td span code span {
  display: inline
}

.insertRowTable td, .insertRowTable th {
  vertical-align: middle
}

table.show_create {
  margin-top: 1em
}

table.show_create td {
  border-right: 1px solid #bbb
}

#alias_modal table th {
  vertical-align: middle;
  padding-left: 1em
}

#alias_modal label.col-2 {
  min-width: 20%;
  display: inline-block
}

#alias_modal select {
  width: 25%;
  margin-right: 2em
}

#alias_modal label {
  font-weight: bold
}

/* styles for sortable tables created with tablesorter jquery plugin */
th.header {
  cursor: pointer;
  color: #235a81
}

th.header:hover {
  text-decoration: underline
}

th.header .sorticon {
  width: 16px;
  height: 16px;
  background-repeat: no-repeat;
  background-position: right center;
  display: inline-table;
  vertical-align: middle;
  float: right
}

th.headerSortUp .sorticon, th.headerSortDown:hover .sorticon {
  background-image: url(./themes/fallen/img/s_desc.png)
}

th.headerSortDown .sorticon, th.headerSortUp:hover .sorticon {
  background-image: url(./themes/fallen/img/s_asc.png)
}
/* end of styles of sortable tables */

/* Forms, Input &amp; Textarea
---------------------------------------------- */

form {
  display: inline;
  margin: 0;
  padding: 0
}

input[type="checkbox" i] {
  margin-top: .2px!important
}

input[type=text], input[type=password], input[type=number] {
  background-color: #fff;
  border: 1px solid #ccc;
  color: #666;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  margin: 6px;
  padding: 5px
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
  border: 1px solid #2171f5;
  color: #444}

input[type=submit], input[type=reset], input[type=button] {
  background-color: #4285f4;
  border: 1px solid #4285f4;
  border-radius: 2px;
  box-shadow: 0 1px 1px #ccc;
  color: #fff;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  margin-left: 5px;
  padding: 4px;
  text-decoration: none
}

fieldset.confirmation input[type=submit], input[type=reset], input[type=button] {
  box-shadow: 0 1px 1px #666}

input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
  background-color: #2171f5;
  border: 1px solid #2171f5;
  cursor: pointer;
  position: relative
}

input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
  background-color: #333;
  border: 1px solid #333;
  position: relative
}

textarea {
  background-color: #fff;
  border: 1px solid #ccc;
  color: #666;
  overflow: visible
}

fieldset {
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  margin-top: 15px;
  padding: 20px
}

#boxContainer fieldset {
  margin: 5px
}

fieldset fieldset {
  background-color: #fff;
  border: none;
  margin: 20px;
  margin-bottom: 0
}

tr.noclick td:first-child:before {
  content: ""
}

fieldset.tblFooters {
  border-top: 0;
  clear: both;
  float: none;
  margin-top: -1px;
  text-align: right
}

fieldset .formelement {
  float: left;
  margin-right: 0.5em
}

fieldset div[class=formelement] {
  white-space: normal
}

.chrome input[type="checkbox"] {
  left: -9999px;
  position: relative
}

.chrome input[type="checkbox"]:before {
  font-family: "Fallen";
  content: "";
  color: #666;
  cursor: default;
  position: absolute;
  padding: 4px;
  top: 0;
  left: 9995px
}

.chrome input[type="checkbox"]:indeterminate:before {
  content: ""
}

.chrome input[type="checkbox"]:checked:before {
  content: ""
}

.chrome .navigation input[type="checkbox"]:before {
  color: #fff
}

.chrome input[type="radio"] {
  left: -9999px;
  position: relative
}

.chrome input[type="radio"]:before {
  font-family: "Fallen";
  content: "";
  color: #666;
  cursor: default;
  position: absolute;
  padding: 4px;
  top: 0;
  left: 9995px
}

.chrome input[type="radio"]:checked:before {
  content: ""
}

fieldset .group-header th {
  background: #fff;
}

fieldset .group-header+tr th {
  padding-top: .6em
}

fieldset .group-field-1 th, fieldset .group-header-2 th {
  padding-left: 1.5em
}

fieldset .group-field-2 th, fieldset .group-header-3 th {
  padding-left: 3em
}

fieldset .group-field-3 th {
  padding-left: 4.5em
}

fieldset .disabled-field th, fieldset .disabled-field th small, fieldset .disabled-field td {
  color: #666;
  background-color: #ddd
}

form.create_table_form fieldset.tblFooters, form#multi_edit_central_columns fieldset.tblFooters {
  background: none;
  border: none
}

form#tableOptionsForm input[name="comment"], form#tableOptionsForm select[name="tbl_collation"] {
  width: 130px
}

form#formDatabaseComment .tblFooters, form#create_table_form_minimal .tblFooters, form#rename_db_form .tblFooters, form#copy_db_form .tblFooters, form#change_db_charset_form .tblFooters, form#alterTableOrderby .tblFooters, form#moveTableForm .tblFooters, form#copyTable .tblFooters, form#tableOptionsForm .tblFooters {
  margin-top: -40px
}

fieldset#tableFilter {
  margin-bottom: 1em
}

fieldset#tableFilter input[type=submit] {
  margin-top: -1px
}

/* Table structure styles */

#fieldsForm ul.table-structure-actions {
  margin: 0;
  padding: 0;
  list-style: none
}

#fieldsForm ul.table-structure-actions li {
  float: left;
  margin-right: 0.3em
  /* same as padding of "table td" */
}

#fieldsForm ul.table-structure-actions .submenu li {
  padding: 0;
  margin: 0
}

#fieldsForm ul.table-structure-actions .submenu li span {
  padding: 0.3em;
  margin: 0.1em
}

#fieldset_zoom_search table th, #fieldset_zoom_search table td {
  line-height: 35px
}

#fieldset_table_qbe table th, #fieldset_table_qbe table td {
  line-height: 35px
}

form.append_fields_form .tblFooters {
  background: none;
  border: none
}

#table_columns input[type="text"], #table_columns input[type="password"], #table_columns input[type="number"], #table_columns input[type="date"], #table_columns select {
  width: 10em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

#table_columns select {
  margin: 6px
}

#placeholder {
  position: relative;
  border: 1px solid #aaa;
  float: right;
  overflow: hidden
}

.placeholderDrag {
  cursor: move
}

#placeholder .button {
  position: absolute
}

.doubleFieldset fieldset {
  width: 48%;
  float: left;
  padding: 0
}

.doubleFieldset fieldset.left {
  margin-right: 1%
}

.doubleFieldset fieldset.right {
  margin-left: 1%
}

.doubleFieldset legend {
  margin-left: 1.5em
}

.doubleFieldset div.wrap {
  padding: 1.5em
}

.modal-copy input {
  display: block;
  width: 100%;
  margin-top: 1.5em;
  padding: .3em 0
}

fieldset#fieldset_delete_user_footer {
  margin-top: -30px
}

#parameterized {
  margin: 20px 5px 20px 0!important
}

/* Buttons
---------------------------------------------- */

button {
  background-color: #4285f4;
  color: #fff;
  margin-left: 14px;
  padding: 4px;
  text-decoration: none
}

.sqlbutton, #tablefieldinsertbuttoncontainer input[type=button] {
  margin-top: 1em;
  margin-left: 0!important;
  margin-right: 14px!important
}

button {
  display: inline
}

button, img {
  vertical-align: middle
}

button.mult_submit {
  border: none;
  background-color: transparent;
  color: #4285f4;
  margin: 0
}

/* Select
---------------------------------------------- */

select {
  background-color: #fff;
  border: 1px solid #ccc;
  color: #666;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  margin: 5px;
  max-width: 17em;
  padding: 5px;
}

select:focus {
  border: 1px solid #2171f5;
  color: #444}

.selectallarrow {
  margin-left: .6em;
  margin-right: .3em
}

/* LTR
---------------------------------------------- */

/* LTR Mode */

/* Alert
---------------------------------------------- */

.attention {
  color: red;
  font-weight: bold
}

.allfine {
  color: green
}

/* Message Boxes: Error, Confirmation */

#pma_errors, #pma_demo, #pma_footer {
  padding: 20px
}

#pma_errors #pma_errors {
  padding: 0
}

.success h1, .notice h1, div.error h1 {
  text-align: left;
  margin: 0 0 0.2em 0;
  color: #eee}

div.success, div.notice, div.error, div.footnotes {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin: 20px 0 20px;
  border: 1px solid;
  background-repeat: no-repeat;
      background-position: 10px 50%;
  padding: 10px
    }

.ajax_notification .error {
  margin-top: 0;
  padding: 3px
}

div.success {
  margin: 0 0 1em 0;
  border: none
}

.success a, .notice a, .error a {
  text-decoration: underline;
  color: #fff}

.success {
  color: #fff;
  background-color: #01a31c}

h1.success, div.success {
  border-color: #01a31c}

.notice, .footnotes {
  color: #fff;
  background-color: #4285f4}

h1.notice, div.notice, div.footnotes {
  border-color: #4285f4}

.notice a {
  color: #fff}

.error {
  border: 1px solid #ea4335!important;
  color: #fff;
  background-color: #ea4335}

h1.error, div.error {
  border-color: #444}

.confirmation {
  color: #fff;
  background-color: #ea4335}

fieldset.confirmation legend {
  background-color: #d03912
}

/* End Message Boxes */

/* Forbidden, No Privileges */

.noPrivileges {
  color: #ff0000;
  font-weight: bold
}

/* End Forbidden */

fieldset.caution {
  background: #ea4335;
  border: 1px solid #ea4335}

fieldset.caution legend {
  background-color: #fff
}

fieldset.caution a {
  text-transform: uppercase;
  color: #fff;
  font-weight: normal
}

fieldset.caution ul, #tbl_maintenance {
  padding: 0
}

fieldset.caution li, #tbl_maintenance li {
  display: block
}

fieldset.caution li:before {
  font-family: "Fallen";
  content: "";
  color: #fff;
  margin-right: 10px
}

fieldset.caution li a:nth-child(2) img {
  background: url("./themes/fallen/img/s_info.png")!important
}

p.notice {
  margin: 1.5em 0;
  border: 1px solid #000;
  background-repeat: no-repeat;
  background: #555;
  color: #d4fb6a
      background-position: 10px 50%;
  padding: 10px 10px 10px 25px
    }

p.notice a {
  color: #fff;
  text-decoration: underline
}

/* Images
---------------------------------------------- */

img.lightbulb {
  cursor: pointer
}

/* Layouts
---------------------------------------------- */

.pdflayout {
  overflow: hidden;
  clip: inherit;
  background-color: #fff;
  display: none;
  border: 1px solid #000;
  position: relative
}

.pdflayout_table {
  background: #d3dce3;
  color: #000;
  overflow: hidden;
  clip: inherit;
  z-index: 2;
  display: inline;
  visibility: inherit;
  cursor: move;
  position: absolute;
  font-size: 80%;
  border: 1px dashed #000
}

/* Elements
---------------------------------------------- */

/* Topmenu */

#topmenu .error {
  background: #eee;
  border: 0!important;
  color: #aaa
}

ul#topmenu, ul#topmenu2 {
  list-style-type: none;
  margin: 0;
  height: 48px
}

ul.tabs {
  list-style-type: none;
  margin: 0
}

ul#topmenu2 {
  margin: -20px -10px -10px;
  padding: 10px;
  clear: both
}

ul#topmenu li, ul#topmenu2 li {
  float: left;
  margin: 0;
  vertical-align: middle;
  height: 38px
}

#topmenu img, #topmenu2 img {
  margin-right: .5em;
  vertical-align: -3px
}

.menucontainer {
  background-color: #f7f7f7;
  height: 48px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2)
}

.scrollindicator {
  display: none
}

#topmenu .tabactive {
  background: #fff!important
}

#topmenu2 .tabactive {
  background: #ccc
}

ul#topmenu2 a {
  display: block;
  margin: 7px 0;
  margin-left: 0;
  padding: 5px 15px;
  white-space: nowrap;
  color: #333;
  text-transform: uppercase;
  background-color: #f6f6f6;
  box-shadow: 0 1px 1px rgb(221, 221, 221)
}

#topmenu {
  padding-left: 20px;
  padding-right: 20px
}

ul#topmenu ul.only {
  left: 0
}

ul#topmenu a, ul#topmenu span {
  padding: 12px 10px 8px;
  height: 28px;
  line-height: 28px;
  text-transform: uppercase;
  color: #666;
  font-weight: normal
}

ul#topmenu ul a {
  border-width: 1pt 0 0 0
}

ul#topmenu ul li:first-child a {
  border-width: 0
}

ul#topmenu>li>a:hover, ul#topmenu>li>.tabactive {
  text-decoration: none;
  color: #333
}

ul#topmenu ul a:hover, ul#topmenu ul .tabactive {
  text-decoration: none
}

ul#topmenu2 a, ul#topmenu2 a:hover {
  text-decoration: none
}

ul#topmenu>li.active {
  border-right: 0
}

#topmenucontainer {
  width: 100%
}

/* End Topmenu */

/* Calendar */

table.calendar {
  width: 100%
}

table.calendar td {
  text-align: center
}

table.calendar td a {
  display: block
}

table.calendar td a:hover {
  background-color: #CCFFCC
}

table.calendar th {
  background-color: #D3DCE3
}

table.calendar td.selected {
  background-color: #FFCC99
}

img.calendar {
  border: none
}

form.clock {
  text-align: center
}

/* End Calendar */

/* Server Info */

#serverinfo {
  padding: 12px 30px;
  overflow: hidden;
  margin: 0;
  margin-left: -1em;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  color: #fff;
  background: linear-gradient(270deg, #0fe4c8 0, #4285f4 100%);
  font-height: 1.1em;
  height: 15px
}

#serverinfo .item {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  white-space: nowrap;
  color: #fff}

#serverinfo .item:before {
  padding-left: 5px;
  padding-right: 5px;
  font-family: "Fallen";
  font-size: 10px;
  color: #eee;
  content: ""
}

#serverinfo a:hover {
  text-decoration: none
}

#serverinfo a:first-child {
  display: none!important
}

#serverinfo .separator, #serverinfo .icon {
  display: none
}

#serverinfo img {
  margin: 0 .1em 0;
  margin-left: .2em
}

/* End Server Info */

/* User Privileges */

#fieldset_add_user_login div.item {
  border-bottom: 1px solid #ddd;
  padding-bottom: .3em;
  margin-bottom: .3em
}

#fieldset_add_user_login label {
  float: left;
  display: block;
  width: 10em;
  max-width: 100%;
  text-align: right;
  padding-right: .5em;
  line-height: 35px
}

#fieldset_add_user_login span.options #select_pred_username, #fieldset_add_user_login span.options #select_pred_hostname, #fieldset_add_user_login span.options #select_pred_password {
  width: 100%;
  max-width: 100%
}

#fieldset_add_user_login span.options {
  float: left;
  display: block;
  width: 12em;
  max-width: 100%;
  padding-right: .5em
}

#fieldset_add_user_login input {
  width: 12em;
  clear: right;
  max-width: 100%
}

#fieldset_add_user_login span.options input {
  width: auto
}

#fieldset_add_user_login span.options input[type=button] {
  margin: 4px
}

#fieldset_user_priv div.item {
  float: left;
  width: 9em;
  max-width: 100%
}

#fieldset_user_priv div.item div.item {
  float: none
}

#fieldset_user_priv div.item label {
  white-space: nowrap
}

#fieldset_user_priv div.item select {
  width: 100%
}

#fieldset_user_global_rights fieldset {
  float: left
}

#fieldset_user_group_rights fieldset {
  float: left
}

/* End user privileges */

/* Server Status */

.linkElem:hover {
  text-decoration: underline;
  color: #4285f4;
  cursor: pointer
}

h3#serverstatusqueries span {
  font-size: 60%;
  display: inline
}

div#serverStatusTabs {
  margin-top: 1em
}

.buttonlinks {
  float: right;
  white-space: nowrap
}

div#serverstatusquerieschart {
  float: left;
  width: 500px;
  height: 350px;
  padding-left: 30px
}

table#serverstatusqueriesdetails, table#serverstatustraffic {
  float: left
}

table#serverstatusqueriesdetails th {
  min-width: 35px
}

table#serverstatusvariables {
  width: 100%;
  margin-bottom: 1em
}

table#serverstatusvariables .name {
  width: 18em;
  white-space: nowrap
}

table#serverstatusvariables .value {
  width: 6em
}

table#serverstatusconnections {
  float: left;
  margin-left: 30px
}

div#serverstatus table tbody td.descr a, div#serverstatus table .tblFooters a {
  white-space: nowrap
}

div.tabLinks {
  margin-left: 0.3em;
  float: left;
  padding: 5px 0
}

div.tabLinks a, div.tabLinks label {
  margin-right: 7px
}

div.tabLinks .icon {
  margin: -0.2em 0.3em 0 0
}

.popupContent {
  display: none;
  position: absolute;
  border: 1px solid #ccc;
  margin: 0;
  padding: 3px;
  background-color: #fff;
  z-index: 2
}

div#logTable {
  padding-top: 10px;
  clear: both
}

div#logTable table {
  width: 100%
}

div#queryAnalyzerDialog {
  min-width: 700px
}

div#queryAnalyzerDialog div.CodeMirror-scroll {
  height: auto
}

div#queryAnalyzerDialog div#queryProfiling {
  height: 300px
}

div#queryAnalyzerDialog td.explain {
  width: 250px
}

div#queryAnalyzerDialog table.queryNums {
  display: none
  border: 0;
  text-align: left
}

.smallIndent {
  padding-left: 7px
}

#serverstatus h3 {
  margin: 15px 0;
  font-weight: normal;
  color: #999;
  font-size: 1.7em
}

/* End Server Status */

/* Chart */

div.liveChart {
  clear: both;
  min-width: 500px;
  height: 400px;
  padding-bottom: 80px
}

#addChartDialog input[type="text"] {
  margin: 0;
  padding: 3px
}

div#chartVariableSettings {
  margin-left: 10px
}

table#chartGrid td {
  padding: 3px;
  margin: 0
}

table#chartGrid div.monitorChart {
  background: #f7f7f7;
  border: 1px solid #ddd;
  box-shadow: 0 2px 2px #eee;
  overflow: hidden
}

div#profilingchart {
  width: 850px;
  height: 370px;
  float: left
}

#resizer {
  border: 1px solid silver
}

#inner-resizer {
  padding: 10px
}

.chartOption {
  float: left;
  margin-right: 40px
}

/* End Chart */

/* Server Variables */

#serverVariables {
  table-layout: fixed;
  width: 100%
}

#serverVariables .var-row>td {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 2em
}

#serverVariables .var-header {
  color: #666;
  background: #f3f3f3;
  font-weight: bold
}

#serverVariables .var-header {
  text-align: left
}

#serverVariables .var-row {
  padding: 0.5em;
  min-height: 18px
}

#serverVariables .var-action {
  width: 120px
}

#serverVariables .var-name {
  float: left
}

#serverVariables .var-name.session {
  font-weight: normal;
  font-style: italic
}

#serverVariables .var-value {
  width: 50%;
  float: right;
  text-align: right
}

#serverVariables .var-doc {
  overflow: visible;
  float: right
}

#serverVariables .editLink {
  padding-right: 1em;
  float: left;
  font-family: sans-serif
}

#serverVariables .serverVariableEditor {
  width: 100%;
  overflow: hidden
}

#serverVariables .serverVariableEditor input {
  width: 100%;
  margin: 0 0.5em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 2.2em
}

#serverVariables .serverVariableEditor div {
  display: block;
  overflow: hidden;
  padding-right: 1em
}

#serverVariables .serverVariableEditor a {
  float: right;
  margin: 0 0.5em;
  line-height: 2em
}

/* End Server Variables */

/* Querybox */

#togglequerybox {
  margin: 0 10px
}

#sectionlinks {
  padding: 16px;
  background: #f3f3f3;
  border: 1px solid #aaa
}

#sectionlinks a, .buttonlinks a, a.button {
  font-size: .88em;
  font-weight: bold;
  line-height: 35px;
  margin-left: 7px;
  border: 1px solid #aaa;
  padding: 5px 10px;
  color: #111;
  text-decoration: none;
  background: #ddd;
  white-space: nowrap
}

div#sqlquerycontainer {
  float: left;
  width: 69%
}

div#tablefieldscontainer {
  float: right;
  width: 29%;
  margin-top: -20px
}

div#tablefieldscontainer select {
  width: 100%;
  background: #fff;
  max-width: initial
}

textarea#sqlquery {
  width: 100%;
  border: 1px solid #aaa;
  padding: 5px;
  font-family: inherit
}

textarea#sql_query_edit {
  height: 7em;
  width: 95%;
  display: block
}

div#queryboxcontainer div#bookmarkoptions {
  margin-top: .5em
}

/* End Querybox */

/* Main Page */

#mysqlmaininformation, #pmamaininformation {
  float: left;
  width: 49%
}

#maincontainer ul {
  list-style-type: square;
  vertical-align: middle;
  color: #666;
  margin-left: 20px
}

#maincontainer ul li {
  line-height: 1.5
}

#full_name_layer {
  position: absolute;
  padding: 2px;
  margin-top: -3px;
  z-index: 801;
  border: solid 1px #888;
  background: #fff
}

/* End main page */

/* Iconic view for ul items */

li br {
  display: none
}

li.no_bullets {
  list-style-type: none!important
}

li#li_mysql_client_version {
  overflow: hidden;
  text-overflow: ellipsis
}

li#li_create_database {
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid #ddd;
  display: block;
  margin-top: 10px;
  margin-bottom: 20px
}

li#li_select_lang select {
  margin: 0!important;
  height: 26px
}

li#li_select_lang {
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300}

li#li_select_lang:hover {
  background: #f6f6f6
}

li#li_select_mysql_collation select {
  margin: 0!important
}

li#li_select_mysql_collation {
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300}

li#li_select_mysql_collation:hover {
  background: #f6f6f6
}

li#li_select_theme select {
  margin: 0!important
}

li#li_select_theme {
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300}

li#li_select_theme:hover {
  background: #f6f6f6
}

li#li_change_password {
  /* list-style-image: url(./themes/fallen/img/s_passwd.png); */
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300}

li#li_change_password:hover {
  background: #f6f6f6
}

li#li_user_preferences {
  /* list-style-image: url(./themes/fallen/img/b_tblops.png); */
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300}

li#li_user_preferences:hover {
  background: #f6f6f6
}

li#li_switch_dbstats {
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid #ddd;
  display: block
}

/* End iconic view for ul items */

#body_browse_foreigners {
  background: #4285f4;
  margin: .5em .5em 0 .5em
}

#bodyquerywindow {
  background: #4285f4}

#bodythemes {
  width: 500px;
  margin: auto;
  text-align: center
}

#bodythemes img {
  border: .1em solid #000
}

#bodythemes a:hover img {
  border: .1em solid red
}

#fieldset_select_fields {
  float: left
}

#selflink {
  clear: both;
  display: block;
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 20px;
  margin-right: 20px;
  border-top: 1px solid silver;
  text-align: right
}

#table_innodb_bufferpool_usage, #table_innodb_bufferpool_activity {
  float: left
}

#div_mysql_charset_collations table {
  float: left
}

#div_mysql_charset_collations table th, #div_mysql_charset_collations table td {
  padding: 0.4em
}

#div_mysql_charset_collations table th#collationHeader {
  width: 35%
}

.operations_half_width {
  width: 100%;
  float: left;
  margin-bottom: 10px
}

.operations_full_width {
  width: 100%;
  clear: both
}

#qbe_div_table_list {
  float: left
}

#qbe_div_sql_query {
  float: left
}

label.desc {
  width: 30em;
  float: left
}

label.desc sup {
  position: absolute
}

.sqlOuter code.sql, div.sqlvalidate, #inline_editor_outer {
  display: block;
  padding: 1em;
  margin: 1em;
  overflow: auto;
  background-color: #fff;
  border: 1px solid #ddd;
  direction: ltr
}

#main_pane_left {
  width: 60%;
  min-width: 260px;
  float: left;
  padding-top: 1em
}

#main_pane_right {
  overflow: hidden;
  min-width: 160px;
  padding-top: 1em;
  padding-left: 3em
}

.group {
  margin-bottom: 1em;
  padding-bottom: 1em
}

.group input[type=submit] {
  margin-left: 0
}

.group h2 {
  color: #4285f4;
  font-size: 2.8em;
  font-weight: normal;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300;
  margin-top: 0;
  margin-bottom: 0.6em
}

.group-cnt {
  padding: 0 0 0 0.5em;
  display: inline-block;
  width: 98%
}

textarea#partitiondefinition {
  height: 3em
}

/* For elements that should be revealed only via js */

.hide {
  display: none
}

#list_server {
  list-style-image: none;
  padding: 0
}

/* Progress Bar styles */

div.upload_progress {
  width: 400px;
  margin: 3em auto;
  text-align: center
}

div.upload_progress_bar_outer {
  border: 1px solid #000;
  width: 202px;
  position: relative;
  margin: 0 auto 1em;
  color: #444}

div.upload_progress_bar_inner {
  background-color: #4285f4;
  width: 0;
  height: 12px;
  margin: 1px;
  overflow: hidden;
  position: relative;
      color: #000    }

div.upload_progress_bar_outer div.percentage {
  position: absolute;
  top: 0;
  left: 0;
  width: 202px
}

div.upload_progress_bar_inner div.percentage {
  top: -1px;
  left: -1px
}

div#statustext {
  margin-top: .5em
}

table#serverconnection_src_remote, table#serverconnection_trg_remote, table#serverconnection_src_local, table#serverconnection_trg_local {
  float: left
}

/* End Progress Bar */

/* Validation error message styles */

input[type=text].invalid_value, input[type=password].invalid_value, input[type=number].invalid_value, input[type=date].invalid_value .invalid_value {
  background: #ffcccc;
}

/* Ajax notification styling */

.ajax_notification {
  top: 0;
  position: fixed;
  width: 100%;
  z-index: 1100;
  text-align: center;
  display: inline;
  left: 0;
  right: 0;
  background-image: url("./themes/fallen/img/loader-blue.svg");
  background-repeat: no-repeat;
  background-position: 46%;
  margin: 0;
  background-color: #eee;
  color: #444;
  padding: 10px!important;
  border: none;
  height: 19px
}

.dismissable {
  margin-left: -10px;
  margin-top: -10px
}

#loading_parent {
  /* Need this parent to properly center the notification division */
  position: relative;
  width: 100%
}

/* Export and Import styles */

.export_table_list_container {
  display: inline-block;
  max-height: 20em;
  overflow-y: scroll
}

.export_table_select th {
  text-align: center;
  vertical-align: middle
}

.export_table_select .all {
  font-weight: bold;
  border-bottom: 1px solid black
}

.export_structure, .export_data {
  text-align: center
}

.export_table_name {
  vertical-align: middle
}

.exportoptions h3, .importoptions h3 {
  border-bottom: 1px #ccc solid;
  font-size: 110%
}

.exportoptions ul, .importoptions ul, .format_specific_options ul {
  list-style-type: none;
  margin-bottom: 15px
}

.exportoptions li, .importoptions li {
  margin: 7px
}

.exportoptions label, .importoptions label, .exportoptions p, .importoptions p {
  margin: 5px;
  float: none
}

#csv_options label.desc, #ldi_options label.desc, #latex_options label.desc, #output label.desc {
  float: left;
  width: 15em
}

.exportoptions, .importoptions {
  margin: 20px 30px 30px;
  margin-left: 10px
}

.exportoptions #buttonGo, .importoptions #buttonGo {
  padding: 5px 12px;
  text-decoration: none;
  cursor: pointer;
  margin: 0
}

.format_specific_options h3 {
  margin: 10px 0 0;
  margin-left: 10px;
  border: 0
}

.format_specific_options {
  border: 1px solid #999;
  margin: 7px 0;
  padding: 3px
}

p.desc {
  margin: 5px
}

/* Export styles only */

select#db_select, select#table_select {
  width: 400px
}

.export_sub_options {
  margin: 20px 0 0;
  margin-left: 30px
}

.export_sub_options h4 {
  border-bottom: 1px solid #999
}

.export_sub_options li.subgroup {
  display: inline-block;
  margin-top: 0
}

.export_sub_options li {
  margin-bottom: 0
}

#output_quick_export {
  display: none
}

/* Import styles only */

.importoptions #import_notification {
  margin: 10px 0;
  font-style: italic
}

input#input_import_file {
  margin: 5px
}

.formelementrow {
  margin: 20px 0 5px 0
}

#popup_background {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000;
  z-index: 1000;
  overflow: hidden
}

/* Indexes */

#index_frm .index_info input, #index_frm .index_info select {
  width: 14em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

#index_frm .index_info div {
  padding: .2em 0
}

#index_frm .index_info .label {
  float: left;
  min-width: 12em
}

#index_frm .slider {
  width: 10em;
  margin: .6em;
  float: left
}

#index_frm .add_fields {
  float: left
}

#index_frm .add_fields input {
  margin-left: 1em
}

#index_frm input {
  margin: 0
}

#index_frm td {
  vertical-align: middle
}

table#index_columns {
  width: 100%
}

table#index_columns select {
  width: 85%;
  float: right
}

#move_columns_dialog div {
  padding: 1em
}

#move_columns_dialog ul {
  list-style: none;
  margin: 0;
  padding: 0
}

#move_columns_dialog li {
  background: #f7f7f7;
  border: 1px solid #aaa;
  color: #666;
  font-weight: bold;
  margin: .4em;
  padding: .2em
}

/* Config Forms */

.config-form ul.tabs {
  margin: 1.1em .2em 0;
  padding: 0 0 .3em 0;
  list-style: none;
  font-weight: bold
}

.config-form ul.tabs li {
  float: left;
  margin-bottom: -1px
}

.config-form ul.tabs li a {
  display: block;
  margin: .1em .2em 0;
  white-space: nowrap;
  text-decoration: none;
  border: 1px solid #fff;
  border-bottom: 1px solid #ddd
}

.config-form ul.tabs li a {
  padding: 7px 10px;
  background: #f2f2f2;
  color: #555
}

.config-form ul.tabs li a:hover, .config-form ul.tabs li a:active {
  background: #e5e5e5
}

.config-form ul.tabs li.active a {
  background-color: #fff;
  margin-top: 1px;
  color: #000;
  border-color: #ddd;
  border-bottom: 1px solid #fff
}

.config-form fieldset {
  margin-top: 0;
  padding: 0;
  clear: both;
  background: none
}

.config-form legend {
  display: none
}

.config-form fieldset p {
  margin: 0;
  padding: 10px;
  background: #fff;
  font-family: "Roboto", "Segoe UI Light", "Segoe UI"; font-weight: 300;
  font-size: 16px
}

.config-form fieldset .errors {
  /* form error list */
  margin: 0 -2px 1em;
  padding: .5em 1.5em;
  background: #FBEAD9;
  border: 0 #C83838 solid;
  border-width: 1px 0;
  list-style: none;
  font-family: sans-serif;
  font-size: small
}

.config-form fieldset .inline_errors {
  /* field error list */
  margin: .3em .3em .3em;
  margin-left: 0;
  padding: 0;
  list-style: none;
  color: #9a0000;
  font-size: small
}

.config-form fieldset table {
  background-color: #fff
}

.config-form fieldset label {
  font-weight: normal
}

.config-form fieldset textarea, .insertRowTable textarea {
  margin: 5px;
  padding: 5px
}

.config-form fieldset th {
  padding: 10px;
  padding-left: .5em;
  text-align: left;
  vertical-align: top;
  width: 40%
}

.config-form fieldset .doc, .config-form fieldset .disabled-notice {
  margin-left: 1em
}

.config-form fieldset .disabled-notice {
  font-size: 80%;
  text-transform: uppercase;
  color: #e00;
  cursor: help
}

.config-form fieldset td {
  padding-top: .3em;
  padding-bottom: .3em;
  vertical-align: top
}

.config-form fieldset th small {
  display: block;
  font-weight: normal;
  font-family: sans-serif;
  font-size: x-small;
  color: #444
}

.config-form fieldset th, .config-form fieldset td {
  border-bottom: 1px #eee solid;
  border-right: none
}

.config-form .lastrow {
  padding: .5em;
  text-align: center
}

.config-form span.checkbox {
  padding: 2px;
  display: inline-block
}

.config-form .custom {
  /* customized field */
  background: #ffc
}

.config-form span.checkbox.custom {
  padding: 1px;
  border: 1px #edec90 solid;
  background: #ffc
}

.config-form img.ic_s_reload {
  -webkit-filter: invert(70%);
  filter: invert(70%)
}

.config-form .field-error {
  border-color: #a11!important
}

.config-form input[type="text"], .config-form input[type="password"], .config-form input[type="number"], .config-form select, .config-form textarea {
  border: 1px #a7a6aa solid;
  height: auto
}

.config-form input[type="text"]:focus, .config-form input[type="password"]:focus, .config-form input[type="number"]:focus, .config-form select:focus, .config-form textarea:focus {
  border: 1px #6676ff solid;
  background: #f7fbff
}

.config-form .field-comment-mark {
  font-family: serif;
  color: #007;
  cursor: help;
  padding: 0 .2em;
  font-weight: bold;
  font-style: italic
}

.config-form .field-comment-warning {
  color: #a00
}

.config-form dd {
  margin-left: .5em
}

.config-form dd:before {
  content: "\25B8"
}

/* Export &amp; Import */

#export_templates .floatleft, .exportoptions li, .importoptions li, select#plugins, .exportoptions#databases_and_tables div {
  margin-top: 20px
}

#export_templates .floatleft #templateName, #export_templates .floatleft label[for="template"], select#plugins, .exportoptions select#db_select {
  margin-left: 0
}

/* Central Columns */

table.navigation.nospacing.nopadding {
  margin-top: 20px;
  margin-left: 0!important;
  padding: 10px 20px 10px 20px;
  width: auto!important;
  max-width: 100%!important
}

/* Table Search */

fieldset#fieldset_table_qbe {
  margin-bottom: 20px
}

fieldset#fieldset_table_search a.ajax {
  margin-left: 20px
}

/* Others */

h2 .nowrap {
  display: none
}

div h2 {
  margin-top: 0
}

.clearfloat.print_ignore {
  padding-bottom: 4px
}

p.print_ignore {
  padding-top: 11px
}

.prefsmanage_opts .localStorage-empty .notice {
  margin-left: -18px
}

/* Fix element position for demo server */

#pma_navigation #serverChoice, #pma_navigation #databaseList, #pma_navigation div.pageselector.dbselector {
  margin-top: 10px
}

li.fast_filter.db_fast_filter {
  margin-top: 20px;
  margin-left: -8px!important
}

/* End */

/* Navigations
---------------------------------------------- */

.navigation {
  width: 100%;
  background-color: #4285f4;
  color: #eee}

.navigation td {
  margin: 0;
  padding: 0;
  padding-left: 2px!important;
  vertical-align: middle;
  white-space: nowrap
}

.navigation_separator {
  color: #eee;
  display: inline-block;
  font-size: 1.5em;
  text-align: center;
  height: 1.4em
}

.navigation input[type=submit] {
  background: #fff;
  border: none;
  box-shadow: 0 1px 1px #666;
  color: #666;
  filter: none;
  margin: 5px;
  padding: 0.4em
}

.navigation input[type=submit]:hover, .navigation input.edit_mode_active {
  color: #666;
  cursor: pointer;
  background-color: #eee}

.navigation input[type=submit]:focus {
  box-shadow: none
}

.navigation select {
  margin: 0 0.8em;
  border: none
}

.navigation input[type=text] {
  border: none
}

.navigation_goto {
  width: 100%
}

/* Responsive
---------------------------------------------- */

@media (min-width: 768px) {
  #tbl_search_form fieldset, #zoom_search_form fieldset, #find_replace_form fieldset {
    margin-top: 5px
  }

  fieldset#tableFilter {
    margin-top: 0
  }

  .tabLinks {
    margin-top: -5px;
    margin-bottom: 5px
  }
}

/* Miscellaneous
---------------------------------------------- */

meter[value="1"]::-webkit-meter-optimum-value {
    background: linear-gradient(white 3%, #E32929 5%, transparent 10%, #E32929);
}

meter[value="2"]::-webkit-meter-optimum-value {
    background: linear-gradient(white 3%, #FF6600 5%, transparent 10%, #FF6600);
}

meter[value="3"]::-webkit-meter-optimum-value {
    background: linear-gradient(white 3%, #FFD700 5%, transparent 10%, #FFD700);
}
/* FILE: enum_editor.css.php */
/* ----------------------------------------------------- */

/**
 * ENUM/SET editor styles
 */

p.enum_notice {
  margin: 5px 2px;
  font-size: 80%
}

#enum_editor p {
  margin-top: 0;
  font-style: italic
}

#enum_editor .values, #enum_editor .add {
  width: 100%
}

#enum_editor .add td {
  vertical-align: middle;
  width: 50%;
  padding: 0;
  padding-left: 1em
}

#enum_editor .values td.drop {
  width: 1.8em;
  cursor: pointer;
  vertical-align: middle
}

#enum_editor .values input {
  margin: .1em 0;
  padding-right: 2em;
  width: 100%
}

#enum_editor .values img {
  width: 1.8em;
  vertical-align: middle
}

#enum_editor input.add_value {
  margin: 0;
  margin-right: 0.4em
}

#enum_editor_output textarea {
  width: 100%;
  float: right;
  margin: 1em 0 0 0
}


/**
 * ENUM/SET editor integration for the routines editor
 */

.enum_hint {
  position: relative
}

.enum_hint a {
  position: absolute;
  left: 81%;
  bottom: .35em
}

/* FILE: gis.css.php */
/* ----------------------------------------------------- */

/**
 * GIS data editor styles
 */

a.close_gis_editor {
  float: right
}

#gis_editor {
  display: none;
  position: fixed;
  _position: absolute;
  /* hack for IE */
  z-index: 1001;
  overflow-y: auto;
  overflow-x: hidden
}

#gis_data {
  min-height: 230px
}

#gis_data_textarea {
  height: 6em
}

#gis_data_editor {
  background: #D0DCE0;
  padding: 15px;
  min-height: 500px
}

#gis_data_editor .choice {
  display: none
}

#gis_data_editor input[type="text"] {
  width: 75px
}

/* FILE: navigation.css.php */
/* ----------------------------------------------------- */

/* Navigation
---------------------------------------------- */

#pma_navigation {
  width: 250px;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  background: #eee;
  color: #444;
  z-index: 800
}

#pma_navigation input[type=text] {
  background-color: #fff;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  padding: 5px 1px
}

#pma_navigation a img {
  border: 0
}

#pma_navigation a:link, #pma_navigation a:visited, #pma_navigation a:active {
  text-decoration: none;
  color: #333}

#pma_navigation select#select_server, #pma_navigation select#lightm_db {
  width: 100%
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
#pma_navigation button {
  display: inline
}

#pma_navigation_content {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0
}

#pma_navigation ul {
  margin: 0
}

#pma_navigation form {
  margin: 0;
  padding: 0;
  display: inline
}

/* Logos
---------------------------------------------- */

#pmalogo a img {
  margin-top: -8px
}

#pma_navigation #imgpmalogo {
  display: none
}

#pma_navigation #pmalogo:after {
  content: "phpMyAdmin";
  font-size: 30px;
  font-weight: 300;
  margin-left: 5px
}

#pma_navigation #pmalogo {
  margin: 0;
  padding: 12px;
  background: #4285f4;
  color: #fff;
  font-size: 14px;
  cursor: default;
  height: 15px;
  line-height: 100%
}

/* Elements
---------------------------------------------- */

#pma_navigation div.pageselector {
  text-align: center;
  margin: 0;
  margin-left: 0.75em;
  border-left: 1px solid #666
}

/* Globals
---------------------------------------------- */

#pma_navigation #recentTableList {
  text-align: center;
  padding: 10px
}

#pma_navigation #recentTableList select {
  min-width: 100%
}

#pma_navigation #databaseList {
  text-align: center;
  margin: 10px
}

#pma_navigation #navipanellinks {
  padding-top: 1em;
  padding-bottom: 1em;
  padding-left: 7px;
  text-align: left;
  background-color: #ddd}

div#left_tableList li a:first-child:before {
  color: #333;
  font-family: "Fallen";
  content: "";
  margin: 10px
}

div#left_tableList li:hover a:first-child:before {
  color: #fff}

#navipanellinks a {
  display: inline-block;
  height: 16px;
  width: 16px;
  color: #444;
  margin-right: 10px;
  padding: 5px;
  font-size: 15px
}

#navipanellinks a:hover {
  color: #666}

#pma_navigation #serverChoice, #pma_navigation #databaseList, #pma_navigation div.pageselector.dbselector {
  text-align: center;
  padding: 5px 10px 0;
  border: 0
}

#pma_navigation_content>img.throbber {
  display: none;
  margin: .3em auto 0
}

/* Navigation tree*/
#pma_navigation_tree {
  margin: 0;
  margin-left: 10px;
  overflow: hidden;
  height: 74%;
  position: relative
}

#pma_navigation_select_database {
  text-align: left;
  padding: 0 0 0;
  border: 0;
  margin: 0
}

#pma_navigation_db_select {
  margin-top: 0.5em;
  margin-left: 0.75em
}

#pma_navigation_db_select select {
  border: 1px solid #bbb;
  border-top: 1px solid #bbb;
  color: #333;
  padding: 4px 6px;
  margin: 0 0 0;
  width: 92%
}

#pma_navigation_tree_content {
  width: 100%;
  overflow: hidden;
  overflow-y: auto;
  position: absolute;
  height: 100%
}

#pma_navigation_tree li .dbItemControls {
  padding-left: 4px
}

#pma_navigation_tree li .navItemControls {
  display: none;
  padding-left: 4px
}

#pma_navigation_tree li.activePointer .navItemControls {
  display: inline;
  opacity: 0.5
}

#pma_navigation_tree li.activePointer .navItemControls:hover {
  display: inline;
  opacity: 1.0
}

#pma_navigation_tree_content a.hover_show_full {
  position: relative;
  z-index: 100
}

#pma_navigation_tree a {
  color: #eee}

#pma_navigation_tree a:hover {
  text-decoration: none;
  color: #666}

#pma_navigation_tree li.activePointer {
  color: #666}

#pma_navigation_tree li.selected {
  color: #666}

#pma_navigation_tree ul {
  clear: both;
  padding: 0;
  list-style-type: none;
  margin: 5px 0 0 0
}

#pma_navigation_tree ul ul {
  position: relative
}

#pma_navigation_tree li {
  white-space: nowrap;
  clear: both;
  min-height: 25px
}

#pma_navigation_tree img {
  margin: 0
}

#pma_navigation_tree i {
  display: block
}

#pma_navigation_tree div.block {
  position: relative;
  width: 1.5em;
  height: 2em;
  min-width: 16px;
  min-height: 16px;
  float: left
}

#pma_navigation_tree div.block.double {
  width: 2.5em
}

#pma_navigation_tree div.block i, #pma_navigation_tree div.block b {
  width: 1.5em;
  height: 2em;
  min-width: 16px;
  min-height: 8px;
  position: absolute;
  bottom: 0.7em;
  left: 0.75em;
  z-index: 0;
  margin-top: -4px
}

#pma_navigation_tree div.block i {
  /* Top and right segments for the tree element connections */
  display: block;
  border-left: 1px solid #616161;
  border-bottom: 1px solid #616161;
  position: relative;
  z-index: 0
}

#pma_navigation_tree div.block i.first {
  /* Removes top segment */
  border-left: 0
}

#pma_navigation_tree div.block b {
  /* Bottom segment for the tree element connections */
  display: block;
  height: 0.75em;
  bottom: 0;
  left: 0.75em;
  border-left: 1px solid #616161
}

#pma_navigation_tree div.block a, #pma_navigation_tree div.block u {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 10
}

#pma_navigation_tree div.block a+a {
  left: 100%
}

#pma_navigation_tree div.block.double a, #pma_navigation_tree div.block.double u {
  left: 33%
}

#pma_navigation_tree div.block.double a+a {
  left: 85%
}

#pma_navigation_tree div.block img {
  position: relative;
  top: -0.6em;
  left: 0;
  margin-left: -7px
}

#pma_navigation_tree div.throbber img {
  top: 2px;
  left: 2px
}

#pma_navigation_tree li.last>ul {
  background: none
}

#pma_navigation_tree li>a, #pma_navigation_tree li>i {
  line-height: 1.5em;
  height: 1.5em;
  padding-left: 0.3em
}

#pma_navigation_tree .list_container {
  border-left: 1px solid #616161;
  margin-left: 0.75em;
  padding-left: 0.75em
}

#pma_navigation_tree .last>.list_container {
  border-left: 0 solid #616161
}

/* Fast filter */
li.fast_filter {
  padding-left: 0.75em;
  margin-left: 0.75em;
  padding-right: 15px;
  border-left: 1px solid #616161
}

li.fast_filter input {
  width: 100%;
  background-color: #FFFFFF;
  border: 1px solid #CCCCCC;
  color: #666666;
  font-family: "Roboto", "Segoe UI";
  padding: 2px
}

li.fast_filter span {
  position: relative;
  right: 1.5em;
  padding: 0.2em;
  top: 1px;
  cursor: pointer;
  font-weight: bold;
  color: #800
}

li.fast_filter.db_fast_filter {
  border: 0;
  margin-left: 0;
  margin-right: 10px
}

#navigation_controls_outer {
  min-height: 21px !important;
  margin-top: 18px!important
}

#pma_navigation_collapse {
  padding-right: 2px
}

#navigation_controls_outer.activePointer {
  background-color: transparent !important
}

#navigation_controls {
  float: left;
  padding-left: 7.1px
}

/* Resize handler */
#pma_navigation_resizer {
  width: 1px;
  height: 100%;
  background-color: #aaa;
  cursor: col-resize;
  position: fixed;
  top: 0;
  left: 250px;
  z-index: 801
}

#pma_navigation_collapser {
  width: 20px;
  padding-top: 4px;
  padding-bottom: 12px;
  background: #4285f4;
  border-bottom: 1px solid #4285f4;
  line-height: 22px;
  color: #fff;
  position: fixed;
  top: 0;
  left: 250px;
  text-align: center;
  cursor: pointer;
  z-index: 801
}

/* Quick warp links */
.pma_quick_warp {
  margin-top: 20px;
  margin-left: 4px;
  position: relative
}

.pma_quick_warp .drop_list {
  float: left;
  margin-left: 3px;
  padding: 2px 0
}

.pma_quick_warp .drop_button {
  padding: .5em .9em;
  border: 1px solid #4285f4;
  background: #4285f4;
  cursor: pointer;
  color: #fff;
  box-shadow: 0 1px 1px #bbb;
  transition: box-shadow .2s cubic-bezier(.4, 0, .2, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
  -webkit-transition: box-shadow .2s cubic-bezier(.4, 0, .2, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
  border-radius: 2px
}

.pma_quick_warp .drop_list:hover .drop_button {
  background: #2171f5
}

.pma_quick_warp .drop_list ul {
  position: absolute;
  margin: 0;
  padding: 0;
  overflow: hidden;
  overflow-y: auto;
  list-style: none;
  background: #fff;
  border: 1px solid #ddd;
  top: 100%;
  left: 3px;
  right: 0;
  display: none;
  z-index: 802
}

.pma_quick_warp .drop_list:hover ul {
  display: block
}

.pma_quick_warp .drop_list li {
  white-space: nowrap;
  padding: 0
}

.pma_quick_warp .drop_list li img {
  vertical-align: sub
}

.pma_quick_warp .drop_list li:hover {
  background: #f2f2f2
}

.pma_quick_warp .drop_list a {
  display: block;
  padding: .2em .3em
}

.pma_quick_warp .drop_list a.favorite_table_anchor {
  clear: left;
  float: left;
  padding: .1em .3em 0
}

li.warp_link {
  padding: 7px 0 0 0!important
}

/* Table Sticky */

table.sticky_columns {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2)
}

/* FILE: designer.css.php */
/* ----------------------------------------------------- */

/* Designer */

.input_tab {
  background-color: #efefef;
  color: #000;
  border: 1px solid #ccc
}

.content_fullscreen {
  position: relative;
  overflow: auto
}

#canvas_outer {
  position: relative;
  width: 100%;
  display: block
}

#canvas {
  background-color: #fff;
  color: #000
}

canvas.designer {
  display: inline-block;
  overflow: hidden;
  text-align: left
}

canvas.designer * {
  behavior: url(#default#VML)
}

.designer_tab {
  color: #333;
  border-collapse: collapse;
  border: 1px solid #ccc;
  z-index: 1;
  -moz-user-select: none
}

.designer_tab .header {
  background-color: #f6f6f6
}

.tab_zag {
  text-align: center;
  cursor: move;
  padding: 1px;
  font-weight: bold;
  vertical-align: middle
}

.tab_zag_2 {
  text-align: center;
  cursor: move;
  padding: 1px;
  font-weight: bold;
  background-color: #f6f6f6;
  vertical-align: middle
}

.tab_field {
  background: #fff;
  color: #000;
  cursor: default
}

.tab_field_2 {
  background-color: #CCFFCC;
  color: #000;
  background-repeat: repeat-x;
  cursor: default
}

.tab_field_3 {
  background-color: #FFE6E6;
  /*#DDEEFF*/
  color: #000;
  cursor: default
}

#designer_hint {
  white-space: nowrap;
  position: absolute;
  background-color: #99ff99;
  color: #000;
  z-index: 3;
  border: #00CC66 solid 1px;
  display: none
}

.scroll_tab {
  overflow: auto;
  width: 100%;
  height: 500px
}

.designer_Tabs {
  cursor: default;
  color: #333;
  white-space: nowrap;
  text-decoration: none;
  text-indent: 3px;
  margin-left: 2px;
  text-align: left;
  border: #ccc solid 0
}

.designer_Tabs2 {
  cursor: default;
  color: #666;
  background: #eee;
  text-indent: 3px;
  white-space: nowrap;
  text-decoration: none;
  border: #eee solid 0;
  text-align: left
}

.owner {
  font-weight: normal;
  color: #888
}

.option_tab {
  padding-left: 2px;
  padding-right: 2px;
  width: 5px
}

.select_all {
  vertical-align: top;
  padding-left: 2px;
  padding-right: 2px;
  cursor: default;
  width: 1px;
  color: #000;
  background-repeat: repeat-x
}

.small_tab {
  vertical-align: top;
  background-color: #666;
  color: #fff;
  cursor: default;
  text-align: center;
  font-weight: bold;
  padding-left: 2px;
  padding-right: 2px;
  width: 1px;
  text-decoration: none
}

.small_tab2 {
  vertical-align: top;
  color: #fff;
  background-color: #ff9966;
  cursor: default;
  padding-left: 2px;
  padding-right: 2px;
  text-align: center;
  font-weight: bold;
  width: 1px;
  text-decoration: none
}

.small_tab_pref {
  background-color: #f6f6f6;
  text-align: center;
  width: 1px
}

.small_tab_pref2 {
  vertical-align: top;
  color: #fff;
  background-color: #ff9966;
  cursor: default;
  text-align: center;
  font-weight: bold;
  width: 1px;
  text-decoration: none
}

.L_butt2_1 {
  padding-left: 5px;
  text-decoration: none;
  vertical-align: middle;
  cursor: default
}

.L_butt2_2 {
  padding-left: 5px;
  color: #000;
  text-decoration: none;
  vertical-align: middle;
  cursor: default
}
/* ---------------------------------------------------------------------------*/

.bor {
  width: 10px;
  height: 10px
}

#osn_tab {
  position: absolute;
  background-color: #fff;
  color: #000;
  width: 100% !important;
}

.designer_header {
  background-color: #f6f6f6;
  border-top: 20px solid #fff;
  color: #333;
  display: block;
  height: 28px;
  margin-left: -20px;
  margin-top: -60px;
  padding: 5px 20px;
  position: fixed;
  text-align: center;
  width: 100%;
  z-index: 101
}

.designer_header a {
  display: block;
  float: left;
  margin: 3px 1px 4px;
  height: 20px
}

.designer_header .M_bord {
  display: block;
  float: left;
  margin: 4px;
  height: 20px;
  width: 2px
}

.designer_header a.first {
  margin-right: 1em
}

.designer_header a.last {
  margin-left: 1em
}

a.M_butt_Selected_down_IE, a.M_butt_Selected_down {
  background-color: #eee;
  color: #000
}

a.M_butt_Selected_down_IE:hover, a.M_butt_Selected_down:hover, a.M_butt:hover {
  background-color: #eee;
  color: #000
}

#layer_menu {
  z-index: 98;
  position: relative;
  float: right;
  ;
  background-color: #f6f6f6;
  border: #ccc solid 1px;
  border-top: 0;
  margin-right: -20px
}

.content_fullscreen #layer_menu {
  margin-right: 0
}

#layer_menu.left {
  float: left;
  margin-left: -20px
}

.content_fullscreen #layer_menu.left {
  margin-left: 0
}

#layer_upd_relation {
  position: absolute;
  left: 637px;
  top: 224px;
  z-index: 100
}

#layer_new_relation {
  position: absolute;
  left: 636px;
  top: 85px;
  z-index: 100;
  width: 153px
}

#designer_optionse {
  position: absolute;
  left: 636px;
  top: 85px;
  z-index: 100;
  width: 153px
}

#layer_menu_sizer {
  background-image: url(./themes/fallen/img/designer/resize.png);
  cursor: ew-resize
}

#layer_menu_sizer .icon {
  margin: 0
}

.panel {
  position: fixed;
  top: 90px;
  right: 0;
  width: 350px;
  max-height: 500px;
  display: none;
  overflow: auto;
  padding-top: 34px;
  z-index: 102
}

a.trigger {
  position: fixed;
  text-decoration: none;
  top: 90px;
  right: 0;
  color: #fff;
  padding: 10px 40px 10px 15px;
  background: #333 url(./themes/fallen/img/designer/plus.png) 85% 55% no-repeat;
  border: 1px solid #444;
  display: block;
  z-index: 102
}

a.trigger:hover {
  color: #080808;
  background: #fff696 url(./themes/fallen/img/designer/plus.png) 85% 55% no-repeat;
  border: 1px solid #999
}

a.active.trigger {
  background: #222 url(./themes/fallen/img/designer/minus.png) 85% 55% no-repeat;
  z-index: 999
}

a.active.trigger:hover {
  background: #fff696 url(./themes/fallen/img/designer/minus.png) 85% 55% no-repeat
}

.toggle_container .block {
  background-color: #eee;
  border-top: 1px solid #999
}

.toggle_container .block img.ic_s_info {
  -webkit-filter: invert(70%);
  filter: invert(70%)
}

.history_table {
  opacity: 1.0;
  cursor: pointer
}

.history_table2 {
  opacity: 0.7
}

#ab {
  min-width: 300px
}

#ab .ui-accordion-content {
  padding: 0
}

#box {
  display: none
}

#foreignkeychk {
  text-align: left;
  position: absolute;
  cursor: pointer
}

.side-menu {
  float: left;
  position: fixed;
  width: auto;
  height: auto;
  background: #efefef;
  border: 1px solid #ccc;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
  overflow: hidden;
  z-index: 50;
  padding: 2px;
  margin-top: 0;
  margin-left: -20px
}

.content_fullscreen .side-menu {
  margin-left: 0
}

.side-menu.right {
  float: right;
  right: 0
}

.content_fullscreen .side-menu.right {
  margin-right: 0
}

.side-menu .hide {
  display: none
}

.side-menu a {
  display: block;
  float: none;
  overflow: hidden
}

.side-menu img, .side-menu span, .side-menu .text {
  float: left;
  padding-left: 2px
}

#name-panel {
  border-bottom: 1px solid #ccc;
  text-align: center;
  background: #efefef;
  font-size: 1.2em;
  padding: 10px;
  font-weight: bold;
  margin-top: -20px;
  margin-left: -20px;
  margin-right: -20px
}

.content_fullscreen #name-panel {
  margin-top: 0;
  margin-left: 0;
  margin-right: 0
}

#container-form {
  width: 100%;
  position: absolute;
  left: 0
}

/* FILE: rte.css.php */
/* ----------------------------------------------------- */

.rte_table {
  table-layout: fixed
}

.rte_table td {
  vertical-align: middle;
  padding: 0.2em
}

.rte_table input, .rte_table select, .rte_table textarea {
  width: 100%;
  margin: 0;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

.rte_table input[type=checkbox], .rte_table input[type=radio] {
  width: auto;
  margin-right: 6px
}

.rte_table .routine_params_table {
  width: 100%
}

/* FILE: codemirror.css.php */
/* ----------------------------------------------------- */

.CodeMirror {
  border: 1px solid #ccc;
  font-family: Consolas, Monospace, "Lucida Grande"!important;
  direction: ltr;
  height: 18em
}

.CodeMirror * {
  font-family: Consolas, Monospace, "Lucida Grande"}

#inline_editor_outer .CodeMirror {
  height: 6em;
  margin-bottom: 10px
}

.insertRowTable .CodeMirror {
  height: 9em;
  width: 24em
}

#pma_console .CodeMirror {
  border: none
}

#pma_console .CodeMirror-gutters {
  background-color: initial;
  border: none
}

span.cm-keyword, span.cm-statement-verb {
  color: #909
}

span.cm-variable {
  color: black
}

span.cm-comment {
  color: #808000
}

span.cm-mysql-string {
  color: #008000
}

span.cm-operator {
  color: fuchsia
}

span.cm-mysql-word {
  color: black
}

span.cm-builtin {
  color: #f00
}

span.cm-variable-2 {
  color: #f90
}

span.cm-variable-3 {
  color: #00f
}

span.cm-separator {
  color: fuchsia
}

span.cm-number {
  color: teal
}

.autocomplete-column-name {
  display: inline-block
}

.autocomplete-column-hint {
  color: #666;
  display: inline-block;
  float: right;
  margin-left: 1em
}

.CodeMirror-hints {
  z-index: 200
}

/* FILE: jqplot.css.php */
/* ----------------------------------------------------- */

/* jqPlot */

/* rules for the plot target div.  These will be cascaded down to all plot elements according to css rules */
.jqplot-target {
  position: relative;
  color: #222222;
  font-family: "Roboto", "Segoe UI";
  font-size: 1em;
  /* height: 300px;
    width: 590px;*/
}

/* rules applied to all axes */
.jqplot-axis {
  font-size: 0.75em
}

.jqplot-xaxis {
  margin-top: 10px
}

.jqplot-x2axis {
  margin-bottom: 10px
}

.jqplot-yaxis {
  margin-right: 10px
}

.jqplot-y2axis, .jqplot-y3axis, .jqplot-y4axis, .jqplot-y5axis, .jqplot-y6axis, .jqplot-y7axis, .jqplot-y8axis, .jqplot-y9axis, .jqplot-yMidAxis {
  margin-left: 10px;
  margin-right: 10px
}

/* rules applied to all axis tick divs */
.jqplot-axis-tick, .jqplot-xaxis-tick, .jqplot-yaxis-tick, .jqplot-x2axis-tick, .jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick, .jqplot-yMidAxis-tick {
  position: absolute;
  white-space: pre
}

.jqplot-xaxis-tick {
  top: 0;
  /* initial position untill tick is drawn in proper place */
  left: 15px;
  /* padding-top: 10px;*/
  vertical-align: top
}

.jqplot-x2axis-tick {
  bottom: 0;
  /* initial position untill tick is drawn in proper place */
  left: 15px;
  /* padding-bottom: 10px; */
  vertical-align: bottom
}

.jqplot-yaxis-tick {
  right: 0;
  /* initial position untill tick is drawn in proper place */
  top: 15px;
  /* padding-right: 10px; */
  text-align: right
}

.jqplot-yaxis-tick.jqplot-breakTick {
  right: -20px;
  margin-right: 0;
  padding: 1px 5px 1px;
  /* background-color: white;*/
  z-index: 2;
  font-size: 1.5em
}

.jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick {
  left: 0;
  /* initial position untill tick is drawn in proper place */
  top: 15px;
  /* padding-left: 10px; */
  /* padding-right: 15px; */
  text-align: left
}

.jqplot-yMidAxis-tick {
  text-align: center;
  white-space: nowrap
}

.jqplot-xaxis-label {
  margin-top: 10px;
  font-size: 11pt;
  position: absolute
}

.jqplot-x2axis-label {
  margin-bottom: 10px;
  font-size: 11pt;
  position: absolute
}

.jqplot-yaxis-label {
  margin-right: 10px;
  /* text-align: center;*/
  font-size: 11pt;
  position: absolute
}

.jqplot-yMidAxis-label {
  font-size: 11pt;
  position: absolute
}

.jqplot-y2axis-label, .jqplot-y3axis-label, .jqplot-y4axis-label, .jqplot-y5axis-label, .jqplot-y6axis-label, .jqplot-y7axis-label, .jqplot-y8axis-label, .jqplot-y9axis-label {
  /* text-align: center; */
  font-size: 11pt;
  margin-left: 10px;
  position: absolute
}

.jqplot-meterGauge-tick {
  font-size: 0.75em;
  color: #999
}

.jqplot-meterGauge-label {
  font-size: 1em;
  color: #999
}

table.jqplot-table-legend {
  margin-top: 12px;
  margin-bottom: 12px;
  margin-left: 12px;
  margin-right: 12px
}

table.jqplot-table-legend, table.jqplot-cursor-legend {
  background-color: rgba(255, 255, 255, 0.6);
  border: 1px solid #ccc;
  position: absolute;
  font-size: 0.75em
}

td.jqplot-table-legend {
  vertical-align: middle
}

/*
These rules could be used instead of assigning
element styles and relying on js object properties.
*/

/*
td.jqplot-table-legend-swatch {
  padding-top: 0.5em;
  text-align: center
}

tr.jqplot-table-legend:first td.jqplot-table-legend-swatch {
  padding-top: 0
}
*/

td.jqplot-seriesToggle:hover, td.jqplot-seriesToggle:active {
  cursor: pointer
}

.jqplot-table-legend .jqplot-series-hidden {
  text-decoration: line-through
}

div.jqplot-table-legend-swatch-outline {
  border: 1px solid #ccc;
  padding: 1px
}

div.jqplot-table-legend-swatch {
  width: 0;
  height: 0;
  border-top-width: 5px;
  border-bottom-width: 5px;
  border-left-width: 6px;
  border-right-width: 6px;
  border-top-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-right-style: solid
}

.jqplot-title {
  top: 0;
  left: 0;
  padding-bottom: 0.5em;
  font-size: 1.2em
}

table.jqplot-cursor-tooltip {
  border: 1px solid #ccc;
  font-size: 0.75em
}

.jqplot-cursor-tooltip {
  border: 1px solid #ccc;
  font-size: 0.75em;
  white-space: nowrap;
  background: rgba(208, 208, 208, 0.5);
  padding: 1px
}

.jqplot-highlighter-tooltip, .jqplot-canvasOverlay-tooltip {
  border: 1px solid #ccc;
  font-size: 0.75em;
  white-space: nowrap;
  background: rgba(208, 208, 208, 0.5);
  padding: 1px
}

.jqplot-point-label {
  font-size: 0.75em;
  z-index: 2
}

td.jqplot-cursor-legend-swatch {
  vertical-align: middle;
  text-align: center
}

div.jqplot-cursor-legend-swatch {
  width: 1.2em;
  height: 0.7em
}

.jqplot-error {
  /* Styles added to the plot target container when there is an error go here. */
  text-align: center
}

.jqplot-error-message {
  /* Styling of the custom error message div goes here. */
  position: relative;
  top: 46%;
  display: inline-block
}

div.jqplot-bubble-label {
  font-size: 0.8em;
  /* background: rgba(90%, 90%, 90%, 0.15); */
  padding-left: 2px;
  padding-right: 2px;
  color: rgb(20%, 20%, 20%)
}

div.jqplot-bubble-label.jqplot-bubble-label-highlight {
  background: rgba(90%, 90%, 90%, 0.7)
}

div.jqplot-noData-container {
  text-align: center;
  background-color: rgba(96%, 96%, 96%, 0.3)
}

/* FILE: resizable-menu.css.php */
/* ----------------------------------------------------- */

ul.resizable-menu a, ul.resizable-menu span {
  display: block;
  margin: 0;
  padding: 0;
  white-space: nowrap
}

ul.resizable-menu .submenu {
  display: none;
  position: relative
}

ul.resizable-menu .shown {
  display: inline-block
}

ul.resizable-menu ul {
  margin: 0;
  padding: 0;
  position: absolute;
  list-style-type: none;
  display: none;
  border: 1px #ddd solid;
  z-index: 2;
  right: 0;
  padding-bottom: 15px
}

ul.resizable-menu li:hover {

}

ul.resizable-menu li:hover ul, ul.resizable-menu .submenuhover ul {
  display: block;
  background: #fff
}

ul.resizable-menu ul li {
  width: 100%
}

/* FILE: icons.css.php */
.icon {
    margin: 0;
    margin-left: .3em;
    padding: 0 !important;
    width: 16px;
    height: 16px;
}
.icon_fulltext {
    width: 50px;
    height: 19px;
}
.ic_asc_order { background-image: url('./themes/fallen/img/asc_order.png'); }
.ic_b_bookmark { background-image: url('./themes/fallen/img/b_bookmark.png'); }
.ic_b_browse { background-image: url('./themes/fallen/img/b_browse.png'); }
.ic_b_calendar { background-image: url('./themes/fallen/img/b_calendar.png'); }
.ic_b_chart { background-image: url('./themes/fallen/img/b_chart.png'); }
.ic_b_close { background-image: url('./themes/fallen/img/b_close.png'); }
.ic_b_column_add { background-image: url('./themes/fallen/img/b_column_add.png'); }
.ic_b_comment { background-image: url('./themes/fallen/img/b_comment.png'); }
.ic_b_dbstatistics { background-image: url('./themes/fallen/img/b_dbstatistics.png'); }
.ic_b_deltbl { background-image: url('./themes/fallen/img/b_deltbl.png'); }
.ic_b_docs { background-image: url('./themes/fallen/img/b_docs.png'); }
.ic_b_docsql { background-image: url('./themes/fallen/img/b_docsql.png'); }
.ic_b_drop { background-image: url('./themes/fallen/img/b_drop.png'); }
.ic_b_edit { background-image: url('./themes/fallen/img/b_edit.png'); }
.ic_b_empty { background-image: url('./themes/fallen/img/b_empty.png'); }
.ic_b_engine { background-image: url('./themes/fallen/img/b_engine.png'); }
.ic_b_event_add { background-image: url('./themes/fallen/img/b_event_add.png'); }
.ic_b_events { background-image: url('./themes/fallen/img/b_events.png'); }
.ic_b_export { background-image: url('./themes/fallen/img/b_export.png'); }
.ic_b_favorite { background-image: url('./themes/fallen/img/b_favorite.png'); }
.ic_b_find_replace { background-image: url('./themes/fallen/img/b_find_replace.png'); }
.ic_b_firstpage { background-image: url('./themes/fallen/img/b_firstpage.png'); }
.ic_b_ftext { background-image: url('./themes/fallen/img/b_ftext.png'); }
.ic_b_globe { background-image: url('./themes/fallen/img/b_globe.gif'); }
.ic_b_group { background-image: url('./themes/fallen/img/b_group.png'); }
.ic_b_help { background-image: url('./themes/fallen/img/b_help.png'); }
.ic_b_home { background-image: url('./themes/fallen/img/b_home.png'); }
.ic_b_import { background-image: url('./themes/fallen/img/b_import.png'); }
.ic_b_index { background-image: url('./themes/fallen/img/b_index.png'); }
.ic_b_index_add { background-image: url('./themes/fallen/img/b_index_add.png'); }
.ic_b_info { background-image: url('./themes/fallen/img/b_info.png'); width: 11px; height: 11px; }
.ic_b_inline_edit { background-image: url('./themes/fallen/img/b_inline_edit.png'); }
.ic_b_insrow { background-image: url('./themes/fallen/img/b_insrow.png'); }
.ic_b_lastpage { background-image: url('./themes/fallen/img/b_lastpage.png'); }
.ic_b_minus { background-image: url('./themes/fallen/img/b_minus.png'); }
.ic_b_more { background-image: url('./themes/fallen/img/b_more.png'); }
.ic_b_move { background-image: url('./themes/fallen/img/b_move.png'); }
.ic_b_newdb { background-image: url('./themes/fallen/img/b_newdb.png'); }
.ic_b_newtbl { background-image: url('./themes/fallen/img/b_newtbl.png'); }
.ic_b_nextpage { background-image: url('./themes/fallen/img/b_nextpage.png'); }
.ic_b_no_favorite { background-image: url('./themes/fallen/img/b_no_favorite.png'); }
.ic_b_pdfdoc { background-image: url('./themes/fallen/img/b_pdfdoc.png'); }
.ic_b_plugin { background-image: url('./themes/fallen/img/b_plugin.png'); }
.ic_b_plus { background-image: url('./themes/fallen/img/b_plus.png'); }
.ic_b_prevpage { background-image: url('./themes/fallen/img/b_prevpage.png'); }
.ic_b_primary { background-image: url('./themes/fallen/img/b_primary.png'); }
.ic_b_print { background-image: url('./themes/fallen/img/b_print.png'); }
.ic_b_props { background-image: url('./themes/fallen/img/b_props.png'); }
.ic_b_relations { background-image: url('./themes/fallen/img/b_relations.png'); }
.ic_b_report { background-image: url('./themes/fallen/img/b_report.png'); }
.ic_b_routine_add { background-image: url('./themes/fallen/img/b_routine_add.png'); }
.ic_b_routines { background-image: url('./themes/fallen/img/b_routines.png'); }
.ic_b_save { background-image: url('./themes/fallen/img/b_save.png'); }
.ic_b_saveimage { background-image: url('./themes/fallen/img/b_saveimage.png'); }
.ic_b_sbrowse { background-image: url('./themes/fallen/img/b_sbrowse.png'); }
.ic_b_sdb { background-image: url('./themes/fallen/img/b_sdb.png'); width: 10px; height: 10px; }
.ic_b_search { background-image: url('./themes/fallen/img/b_search.png'); }
.ic_b_select { background-image: url('./themes/fallen/img/b_select.png'); }
.ic_b_snewtbl { background-image: url('./themes/fallen/img/b_snewtbl.png'); }
.ic_b_spatial { background-image: url('./themes/fallen/img/b_spatial.png'); }
.ic_b_sql { background-image: url('./themes/fallen/img/b_sql.png'); }
.ic_b_sqldoc { background-image: url('./themes/fallen/img/b_sqldoc.png'); }
.ic_b_sqlhelp { background-image: url('./themes/fallen/img/b_sqlhelp.png'); }
.ic_b_table_add { background-image: url('./themes/fallen/img/b_table_add.png'); }
.ic_b_tblanalyse { background-image: url('./themes/fallen/img/b_tblanalyse.png'); }
.ic_b_tblexport { background-image: url('./themes/fallen/img/b_tblexport.png'); }
.ic_b_tblimport { background-image: url('./themes/fallen/img/b_tblimport.png'); }
.ic_b_tblops { background-image: url('./themes/fallen/img/b_tblops.png'); }
.ic_b_tbloptimize { background-image: url('./themes/fallen/img/b_tbloptimize.png'); }
.ic_b_tipp { background-image: url('./themes/fallen/img/b_tipp.png'); }
.ic_b_trigger_add { background-image: url('./themes/fallen/img/b_trigger_add.png'); }
.ic_b_triggers { background-image: url('./themes/fallen/img/b_triggers.png'); }
.ic_b_undo { background-image: url('./themes/fallen/img/b_undo.png'); }
.ic_b_unique { background-image: url('./themes/fallen/img/b_unique.png'); }
.ic_b_usradd { background-image: url('./themes/fallen/img/b_usradd.png'); }
.ic_b_usrcheck { background-image: url('./themes/fallen/img/b_usrcheck.png'); }
.ic_b_usrdrop { background-image: url('./themes/fallen/img/b_usrdrop.png'); }
.ic_b_usredit { background-image: url('./themes/fallen/img/b_usredit.png'); }
.ic_b_usrlist { background-image: url('./themes/fallen/img/b_usrlist.png'); }
.ic_b_versions { background-image: url('./themes/fallen/img/b_versions.png'); }
.ic_b_view { background-image: url('./themes/fallen/img/b_view.png'); }
.ic_b_view_add { background-image: url('./themes/fallen/img/b_view_add.png'); }
.ic_b_views { background-image: url('./themes/fallen/img/b_views.png'); }
.ic_b_left { background-image: url('./themes/pmahomme/img/b_left.png'); }
.ic_b_right { background-image: url('./themes/pmahomme/img/b_right.png'); }
.ic_bd_browse { background-image: url('./themes/fallen/img/bd_browse.png'); }
.ic_bd_deltbl { background-image: url('./themes/fallen/img/bd_deltbl.png'); }
.ic_bd_drop { background-image: url('./themes/fallen/img/bd_drop.png'); }
.ic_bd_edit { background-image: url('./themes/fallen/img/bd_edit.png'); }
.ic_bd_empty { background-image: url('./themes/fallen/img/bd_empty.png'); }
.ic_bd_export { background-image: url('./themes/fallen/img/bd_export.png'); }
.ic_bd_firstpage { background-image: url('./themes/fallen/img/bd_firstpage.png'); }
.ic_bd_ftext { background-image: url('./themes/fallen/img/bd_ftext.png'); }
.ic_bd_index { background-image: url('./themes/fallen/img/bd_index.png'); }
.ic_bd_insrow { background-image: url('./themes/fallen/img/bd_insrow.png'); }
.ic_bd_lastpage { background-image: url('./themes/fallen/img/bd_lastpage.png'); }
.ic_bd_nextpage { background-image: url('./themes/fallen/img/bd_nextpage.png'); }
.ic_bd_prevpage { background-image: url('./themes/fallen/img/bd_prevpage.png'); }
.ic_bd_primary { background-image: url('./themes/fallen/img/bd_primary.png'); }
.ic_bd_routine_add { background-image: url('./themes/fallen/img/bd_routine_add.png'); }
.ic_bd_sbrowse { background-image: url('./themes/fallen/img/bd_sbrowse.png'); }
.ic_bd_select { background-image: url('./themes/fallen/img/bd_select.png'); }
.ic_bd_spatial { background-image: url('./themes/fallen/img/bd_spatial.png'); }
.ic_bd_unique { background-image: url('./themes/fallen/img/bd_unique.png'); }
.ic_centralColumns { background-image: url('./themes/fallen/img/centralColumns.png'); }
.ic_centralColumns_add { background-image: url('./themes/fallen/img/centralColumns_add.png'); }
.ic_centralColumns_delete { background-image: url('./themes/fallen/img/centralColumns_delete.png'); }
.ic_col_drop { background-image: url('./themes/fallen/img/col_drop.png'); }
.ic_console { background-image: url('./themes/fallen/img/console.png'); }
.ic_database { background-image: url('./themes/fallen/img/database.png'); }
.ic_eye { background-image: url('./themes/fallen/img/eye.png'); }
.ic_eye_grey { background-image: url('./themes/fallen/img/eye_grey.png'); }
.ic_hide { background-image: url('./themes/fallen/img/hide.png'); }
.ic_item { background-image: url('./themes/fallen/img/item.png'); width: 9px; height: 9px; }
.ic_lightbulb { background-image: url('./themes/fallen/img/lightbulb.png'); }
.ic_lightbulb_off { background-image: url('./themes/fallen/img/lightbulb_off.png'); }
.ic_more { background-image: url('./themes/fallen/img/more.png'); width: 13px; }
.ic_new_data { background-image: url('./themes/fallen/img/new_data.png'); }
.ic_new_data_hovered { background-image: url('./themes/fallen/img/new_data_hovered.png'); }
.ic_new_data_selected { background-image: url('./themes/fallen/img/new_data_selected.png'); }
.ic_new_data_selected_hovered { background-image: url('./themes/fallen/img/new_data_selected_hovered.png'); }
.ic_new_struct { background-image: url('./themes/fallen/img/new_struct.png'); }
.ic_new_struct_hovered { background-image: url('./themes/fallen/img/new_struct_hovered.png'); }
.ic_new_struct_selected { background-image: url('./themes/fallen/img/new_struct_selected.png'); }
.ic_new_struct_selected_hovered { background-image: url('./themes/fallen/img/new_struct_selected_hovered.png'); }
.ic_normalize { background-image: url('./themes/fallen/img/normalize.png'); }
.ic_pause { background-image: url('./themes/fallen/img/pause.png'); }
.ic_php_sym { background-image: url('./themes/fallen/img/php_sym.png'); }
.ic_play { background-image: url('./themes/fallen/img/play.png'); }
.ic_s_asc { background-image: url('./themes/fallen/img/s_asc.png'); }
.ic_s_asci { background-image: url('./themes/fallen/img/s_asci.png'); }
.ic_s_attention { background-image: url('./themes/fallen/img/s_attention.png'); }
.ic_s_cancel { background-image: url('./themes/fallen/img/s_cancel.png'); }
.ic_s_cancel2 { background-image: url('./themes/fallen/img/s_cancel2.png'); }
.ic_s_cog { background-image: url('./themes/fallen/img/s_cog.png'); }
.ic_s_db { background-image: url('./themes/fallen/img/s_db.png'); }
.ic_s_desc { background-image: url('./themes/fallen/img/s_desc.png'); }
.ic_s_error { background-image: url('./themes/fallen/img/s_error.png'); }
.ic_s_host { background-image: url('./themes/fallen/img/s_host.png'); }
.ic_s_info { background-image: url('./themes/fallen/img/s_info.png'); }
.ic_s_lang { background-image: url('./themes/fallen/img/s_lang.png'); }
.ic_s_link { background-image: url('./themes/fallen/img/s_link.png'); }
.ic_s_lock { background-image: url('./themes/fallen/img/s_lock.png'); }
.ic_s_loggoff { background-image: url('./themes/fallen/img/s_loggoff.png'); }
.ic_s_notice { background-image: url('./themes/fallen/img/s_notice.png'); }
.ic_s_okay { background-image: url('./themes/fallen/img/s_okay.png'); }
.ic_s_passwd { background-image: url('./themes/fallen/img/s_passwd.png'); }
.ic_s_process { background-image: url('./themes/fallen/img/s_process.png'); }
.ic_s_really { background-image: url('./themes/fallen/img/s_really.png'); width: 11px; height: 11px; }
.ic_s_reload { background-image: url('./themes/fallen/img/s_reload.png'); }
.ic_s_replication { background-image: url('./themes/fallen/img/s_replication.png'); }
.ic_s_rights { background-image: url('./themes/fallen/img/s_rights.png'); }
.ic_s_sortable { background-image: url('./themes/fallen/img/s_sortable.png'); }
.ic_s_status { background-image: url('./themes/fallen/img/s_status.png'); }
.ic_s_success { background-image: url('./themes/fallen/img/s_success.png'); }
.ic_s_sync { background-image: url('./themes/fallen/img/s_sync.png'); }
.ic_s_tbl { background-image: url('./themes/fallen/img/s_tbl.png'); }
.ic_s_theme { background-image: url('./themes/fallen/img/s_theme.png'); }
.ic_s_top { background-image: url('./themes/fallen/img/s_top.png'); }
.ic_s_unlink { background-image: url('./themes/fallen/img/s_unlink.png'); }
.ic_s_vars { background-image: url('./themes/fallen/img/s_vars.png'); }
.ic_s_views { background-image: url('./themes/fallen/img/s_views.png'); }
.ic_show { background-image: url('./themes/fallen/img/show.png'); }
.ic_window-new { background-image: url('./themes/fallen/img/window-new.png'); }
.ic_ajax_clock_small { background-image: url('./themes/fallen/img/ajax_clock_small.gif'); }
.ic_s_partialtext { background-image: url('./themes/fallen/img/s_partialtext.png'); }
.ic_s_fulltext { background-image: url('./themes/fallen/img/s_fulltext.png'); }
