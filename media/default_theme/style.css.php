<?php
/*
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * This stylesheet is the default stylesheet for Jyraphe.
 * The content is dynamically generated for easier handling.
 */

header('Content-type: text/css');

?>

/* ==========================================================================
   Summary

   1 = Basic Style
   2 = Copyright
   3 = Options
   4 = Upload
   5 = Terms of service
   6 = Install
   7 = Admin
   8 = Download page

   ========================================================================== */

/* ==========================================================================
   1 = Basic Style
   ========================================================================== */

body {
  color: #fff;
  background: #212121;
  margin: 0;
  line-height: 1.5;
  font-family: "Montserrat", sans-serif;
}

#content {
  padding: 2em;
}

h1 a {
  display: block;
  background: url(main-logo.svg) no-repeat;
  background-size: 100% 100%;
  text-indent: -9999px;
  height: 320px;
  margin: 1em auto;
  position: relative;
  left: 0.4em;
}

h2 {
  text-align: center;
  color: #fff;
}

fieldset {
  border: 0;
  padding: 1.5em;
  margin: 0 auto;
  border-radius: 8px;
  width: 20em;
  border: 7px dashed #7d7d7d;
  min-height: 15em;
  min-width: 30em;
  position: relative;
}

legend {
  padding: 0.5em 1em;
  background: #212121;
  color: #e5e5e5;
  font-size: 1.2em;
  display: block;
  min-width: 8em;
  text-align: center;
  display: none;
}

table a {
  color: #fff;
}

table a:hover,
table a:focus {
  text-decoration: none;
}

input[type="submit"] {
  background: #26A790;
  border: 0;
  padding: 0.4em 2.2em;
  font-size: 1.1em;
  color: #FFF;
  cursor: pointer;
  margin: 10px;
  border-radius: 25px;
}

select,
input[type="text"],
input[type="password"] {
  border: 1;
  padding: 5px 5px;
  font-size: 1em;
  border-radius: 9px;
}

select { 
  width: 100%;
  background-color: #26A790;
  border-radius: 0;
  border: none;
  color: white;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  border: 0;
  color: #FFF;
  position: relative;
  background: #1f8b78;
  margin-bottom: 10px;
}

.inner {
  margin-top: 3em;
}

#upload fieldset {
  background: url(upload.svg) no-repeat center;
  -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
      -ms-transition: all 0.5s ease;
       -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
}

#upload fieldset:hover {
  opacity: 1;
}

#upload > form {
  text-align: center;
}

#upload p {
  margin: 0;
}

#file_select {
  position: relative;
  width: 100%;
  height: 20em;
  cursor: pointer;
  opacity: 0;
}
  #upload.file-selected #file_select {
    opacity: 1;
    height: 2em;
  }
  #upload.file-selected fieldset {
    background-image: none;
  }



  @font-face {
    font-family: "Montserrat";
    src: url("font/Montserrat-Regular.ttf") format(truetype);
    font-weight: 500;
    }

  @font-face {
    font-family: "Montserrat";
    src: url("font/Montserrat-Bold.ttf") format(truetype);
    font-weight: 700;
    }

  @font-face {
    font-family: "Montserrat";
    src: url("font/Montserrat-SemiBold.ttf") format(truetype);
    font-weight: 600;
    }



/* ==========================================================================
   2 = Copyright
   ========================================================================== */

#copyright {
  /*display: none; */
  text-align: center;
  font-size: 0.8em;
  color: #bbb;
  margin: 3em auto;
}

#copyright a {
  color: #bbb;
  text-decoration: none;
}

#copyright a:hover,
#copyright a:focus {
  text-decoration: underline;
}

/* ==========================================================================
   3 = Options
   ========================================================================== */

#options {
  color: #fff;
  position: relative;
  z-index: 10;
  width: 100%;
  height: 90%;
}

#options tr { height: 2.7em; }

#option_table tr:first-child {
  width: 100%;
  height: 100%;
}

#option_table td:first-child {
}

#options input[type="submit"] {
  position: relative;
  margin: 1em auto;
  font-family: inherit;
  font-weight: 600;
}

/* ==========================================================================
   4 = Upload
   ========================================================================== */

#upload_finished,
#uploading,
.message,
.info,
.error {
  text-align: center;
  color: #fff;
  padding-left: 3em;
}

#upload_finished > p:nth-child(1) {
  color: #0D9CB2;
  font-weight: bold;
}

#upload_finished_preview {
  display: none;
}

#upload_finished div p:nth-child(1) {
  font-weight: bold;
}

#upload_delete {
  display: none;
}

#upload_finished a {
  text-decoration: none;
  color: #fff;
}

#uploading a {
  font-weight: bold;
  text-decoration: none;
  color: #fff;
}

#uploaded_percentage {
  font-size: 2em;
  font-weight: bold;
}

#upload_finished a:hover,
#uploading a:hover,
#upload_finished a:focus,
#uploading a:focus {
  text-decoration: underline;
}

.message,
.error {
  color: #d55548;
  font-style: italic;
  font-weight: bold;
}

#upload_link_email {
  margin-left: 10px;
}

#upload_image_email {
  padding-left: 20px;
  padding-bottom: 15px;
  background: url(email.png) no-repeat;
}

.custom_button {
  background: #26A790;
  border: 0;
  padding: 0.4em 2.2em;
  font-size: 1.1em;
  color: #FFF;
  cursor: pointer;
  margin: 10px;
  border-radius: 25px;
}

#custom_copy {
  padding-left: 20px;
  padding-bottom: 15px;
  background: url(copy.png) no-repeat;
}

.custom_copy_button {
  background: #26A790;
  border: 0;
  color: #FFF;
  cursor: pointer;
  margin: 10px;
  border-radius: 12px;
  font-size: 1em;
  padding: 0.3em 0.5em;
}

.custom_copy_button:hover {
  background: #1f8b78;
}

.display_none {
  display: none;
}

.hr_style {
  width: 20%;
  margin-top: 3rem;
  margin-bottom: 1rem;
}

button {
  text-transform: uppercase;
  font-weight: 600;
  font-family: inherit;
}

/* ==========================================================================
   5 = Terms of service
   ========================================================================== */

textarea[readonly="readonly"] {
  border: 0;
  color: #fff;
  font-family: Arial, sans-serif;
  background: none;
  margin: auto;
  display: block;
}

textarea[readonly="readonly"] + p,
textarea[readonly="readonly"] + p + p {
  text-align: center;
  color: #fff;
}

textarea[readonly="readonly"] + p a,
textarea[readonly="readonly"] + p + p a {
  font-weight: bold;
  text-decoration: none;
  color: #fff;
}

textarea[readonly="readonly"] + p a:hover,
textarea[readonly="readonly"] + p + p a:hover,
textarea[readonly="readonly"] + p a:focus,
textarea[readonly="readonly"] + p + p a:focus {
  text-decoration: underline;
}

/* ==========================================================================
   6 = Install
   ========================================================================== */

#install fieldset,
#install + fieldset {
  width: auto;
  max-width: 50em;
  border: 7px dashed #bcaaa4;
}

#install table,
#install + fieldset table {
  width: 100%;
  border-collapse: collapse;
}

#install td,
#install + fieldset td {
  padding: 0.5em 1em;
  border-bottom: 0;
}

#install td:empty {
  width: 13.1em;
}

#install table form:nth-child(odd),
#install + fieldset tr:nth-child(odd) {
  background: #bcaaa4;
}

#install fieldset > form {
  margin-top: 2em;
  text-align: center;
}

#install form {
  display: table;
  width: 100%;
}

#install td:last-child { text-align: left; }

#install .info { width: 19em; }

#install input[type="submit"] {
  min-width: 10.5em;
}

#install + fieldset table {
  font-size: 0.9em;
}

#install + fieldset td:first-child input[type="submit"] {
  background: none;
  padding: 0;
  color: #000;
  font-weight: bold;
  border-bottom: 0;
}

#install + fieldset td:first-child input[type="submit"]:hover,
#install + fieldset td:first-child input[type="submit"]:focus {
  text-decoration: underline;
}

/* ==========================================================================
   7 = Admin
   ========================================================================== */

#admin fieldset,
#admin + fieldset {
  width: auto;
  max-width: 60em;
  border: 7px dashed #979797;
}

#admin table,
#admin + fieldset table {
  width: 100%;
  border-collapse: collapse;
  border-bottom: 2px solid #FFF;
}

#admin td,
#admin + fieldset td {
  padding: 0.5em 1em;
  border: 2px solid #FFF;
  border-bottom: 0;
}

#admin td:empty {
  width: 13.1em;
}

#admin table form:nth-child(odd),
#admin + fieldset tr:nth-child(odd) {
  background: #353535;
}

#admin fieldset > form {
  margin-top: 2em;
  text-align: center;
}

#admin form {
  display: table;
  width: 100%;
}

#admin td:last-child { text-align: left; }

#admin .info { width: 19em; }

#admin input[type="submit"] {
  min-width: 10.5em;
  font-family: inherit;
  font-weight: 600;
}

#admin + fieldset table {
  font-size: 0.9em;
}

#admin + fieldset td:first-child input[type="submit"] {
  background: none;
  padding: 0;
  color: #000;
  font-weight: bold;
  border-bottom: 0;
}

#admin + fieldset td:first-child input[type="submit"]:hover,
#admin + fieldset td:first-child input[type="submit"]:focus {
  text-decoration: underline;
}

/* ==========================================================================
   8 = Download page
   ========================================================================== */

#self_destruct {
  font-weight: bold;
  color: red;
  background-image: url('pixel_bomb.png');
  background-size: 40px 40px;
  background-repeat: no-repeat;
  padding-left: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
}
