# phpMyAdmin MySQL-Dump
# version 2.3.3pl1
# http://www.phpmyadmin.net/ (download page)
#
# Host: localhost
# Erstellungszeit: 29. August 2004 um 16:23
# Server Version: 4.00.20
# PHP-Version: 4.3.8
# Datenbank: `arsc3-alpha2`
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_bannlist`
#

CREATE TABLE arsc_bannlist (
  id int(11) NOT NULL auto_increment,
  ip char(15) NOT NULL default '',
  until int(11) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY ip (ip)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_bannlist`
#

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_guestbooks`
#

CREATE TABLE arsc_guestbooks (
  id int(11) NOT NULL auto_increment,
  link_user int(11) NOT NULL default '0',
  date date NOT NULL default '0000-00-00',
  author varchar(64) NOT NULL default '',
  text text NOT NULL,
  PRIMARY KEY  (id),
  KEY link_user (link_user),
  KEY datum (date)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_guestbooks`
#

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_layouts`
#

CREATE TABLE arsc_layouts (
  id int(11) NOT NULL auto_increment,
  name varchar(64) NOT NULL default '',
  default_font_face varchar(64) NOT NULL default '',
  default_font_color varchar(6) NOT NULL default '',
  default_font_size tinyint(4) NOT NULL default '0',
  small_font_face varchar(64) NOT NULL default '',
  small_font_color varchar(6) NOT NULL default '',
  small_font_size tinyint(4) NOT NULL default '0',
  default_background_color varchar(6) NOT NULL default '',
  default_foreground_color varchar(6) NOT NULL default '',
  template_home text NOT NULL,
  template_register text NOT NULL,
  template_roomlist text NOT NULL,
  template_userlist text NOT NULL,
  template_input text NOT NULL,
  template_browser_push_index text NOT NULL,
  PRIMARY KEY  (id),
  UNIQUE KEY name (name)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_layouts`
#

INSERT INTO arsc_layouts VALUES (1, 'default', 'Arial', 'FFFFFF', 2, 'Verdana, Arial, sans-serif', 'FFFFFF', 1, '005500', '555555', '<html>\r\n <head>\r\n  <title>\r\n   <%parameters_title%>\r\n  </title>\r\n </head>\r\n <body bgcolor="<%layout_default_background_color%>" text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD">\r\n  <table width="600" align="center" cellspacing="4">\r\n   <tr>\r\n    <td width="400" valign="top">\r\n     <font face="Arial" size="2" color="#FF0000">\r\n      <b>\r\n       <%current_error%>\r\n      </b>\r\n     </font>\r\n     <form action="login.php" method="POST">\r\n      <table>\r\n       <tr>\r\n        <td valign="top">\r\n         <font face="Arial" size="2">\r\n          <b>\r\n           <%lang_entername%>\r\n          </b>\r\n         </font>\r\n        </td>\r\n        <td valign="top">\r\n         <input type="text" name="arsc_user" size="20" maxlength="64" value="<%current_user%>">\r\n        </td>\r\n       </tr>\r\n       <tr>\r\n        <td valign="top">\r\n         <font face="Arial" size="2">\r\n          <b>\r\n           <%lang_enterpassword%>\r\n          </b>\r\n         </font>\r\n        </td>\r\n        <td valign="top">\r\n         <input type="password" name="arsc_password" size="20">\r\n        </td>\r\n       </tr>\r\n       <tr>\r\n        <td>\r\n         <font face="Arial" size="2">\r\n          <b>\r\n           <%lang_selectroom%>\r\n          </b>\r\n         </font>\r\n        </td>\r\n        <td>\r\n         <%layout_room_selection%>\r\n        </td>\r\n       </tr>\r\n       <tr>\r\n        <td>\r\n         <font face="Arial" size="2">\r\n          &nbsp;\r\n         </font>\r\n        </td>\r\n        <td>\r\n         <input type="submit" value="<%lang_startbutton%>">\r\n        </td>\r\n       </tr>\r\n      </table>\r\n      <input type="hidden" name="arsc_chatversion" value="browser_push">\r\n      <input type="hidden" name="arsc_language" value="<%current_language%>">\r\n      <input type="hidden" name="arsc_template" value="html">\r\n     </form>\r\n    </td>\r\n    <td valign="top" bgcolor="#<%layout_default_foreground_color%>">\r\n      <br>\r\n      <font face="Arial" size="2">\r\n       <center>\r\n        <a href="register.php?arsc_language=<%current_language%>"><%lang_clicktoregister%></a>\r\n       </center>\r\n      </font>\r\n      <br>\r\n      <font face="Arial" size="2">\r\n       <b>\r\n        <%lang_usersinchat%>\r\n       </b>\r\n      </font>\r\n      <table width="100%">\r\n      <tr bgcolor="#EEEEEE">\r\n       <td width="50%">\r\n        <font face="Arial" size="2" color="#000000">\r\n         <%lang_usersinchat_name%>\r\n        </font>\r\n       </td>\r\n       <td width="50%">\r\n        <font face="Arial" size="2" color="#000000">\r\n         <%lang_usersinchat_room%>\r\n        </font>\r\n       </td>\r\n      </tr>\r\n     </table>\r\n     <%layout_usersinchat_table%>\r\n    </td>\r\n   </tr>\r\n  </table>\r\n    </td>\r\n </body>\r\n</html>', '<html>\r\n  <head>\r\n   <title>\r\n    <%parameters_title%>\r\n   </title>\r\n  </head>\r\n  <body bgcolor="<%layout_default_background_color%>" text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD">\r\n   <table width="500" align="center" cellpadding="6" bgcolor="<%layout_default_foreground_color%>">\r\n    <tr>\r\n     <td>\r\n      <font face="Arial" size="2" color="#FF0000">\r\n       <b>\r\n        <%current_error%>\r\n       </b>\r\n      </font>\r\n      <form METHOD="POST">\r\n       <input type="hidden" name="arsc_send" value="yes">\r\n       <input type="hidden" name="arsc_language" value="<%current_language%>">\r\n       <font face="Arial" size="2">\r\n        <%lang_register_intro%>\r\n       </font>\r\n       <br>\r\n       <br>\r\n       <table>\r\n        <tr>\r\n         <td>\r\n          <font face="Arial" size="2">\r\n           <b>\r\n            <%lang_register_entername%>\r\n           </b>\r\n          </font>\r\n         </td>\r\n         <td>\r\n          <input type="text" name="arsc_user" size="12" maxlength="12">\r\n         </td>\r\n        </tr>\r\n        <tr>\r\n         <td>\r\n          <font face="Arial" size="2">\r\n           <b>\r\n            <%lang_register_enterpassword%>\r\n           </b>\r\n          </font>\r\n         </td>\r\n         <td>\r\n          <input type="password" name="arsc_password" size="12" maxlength="12">\r\n         </td>\r\n        </tr>\r\n        <tr>\r\n         <td>\r\n          <font face="Arial" size="2">\r\n           <b>\r\n            <%lang_register_enteremail%>\r\n           </b>\r\n          </font>\r\n         </td>\r\n         <td>\r\n          <input type="text" name="arsc_email" size="12">\r\n         </td>\r\n        </tr>\r\n       </table>\r\n       <input type="submit" value="<%lang_register_send%>">\r\n      </form>\r\n     </td>\r\n    </tr>\r\n   </table>\r\n  </body>\r\n </html>', '<html>\r\n <head>\r\n  <title>roomlist</title>\r\n  <%layout_scrolling_script%>\r\n  <%layout_help_script%>\r\n  <%layout_drawboard_script%>\r\n </head>\r\n <body text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD" bgcolor="#<%layout_default_background_color%>" topmargin="0" leftmargin="0" marginleft="0" margintop="0">\r\n  <table width="95%" bgcolor="#<%layout_default_foreground_color%>" align="center">\r\n   <tr>\r\n    <td>\r\n     <%layout_roomlist_form%>\r\n     <div align="right">\r\n      <font face="Arial" size="1">\r\n       <a href="roomlist.php?arsc_sid=<%my_sid%>"><%lang_refresh%></a>\r\n      </font>\r\n     </div>\r\n    </td>\r\n   </tr>\r\n  </table>\r\n  <br>\r\n  <table width="95%" bgcolor="<%layout_default_foreground_color%>" align="center">\r\n   <tr>\r\n    <td>\r\n     <font face="Arial" size="2">\r\n      <b>\r\n       <%lang_otherfunctions%>:\r\n      </b>\r\n      <%layout_scrolling_form%>\r\n      <%layout_drawboard_link%>\r\n      <li> <b><%layout_help_link%></b></li>\r\n      <li> <a href="<%parameters_baseurl%>base/logout.php?arsc_sid=<%my_sid%>&arsc_post_logout=true" target="_parent"><%lang_leave%></a></li>\r\n     </font>\r\n    </td>\r\n   </tr>\r\n  </table>\r\n  <br>\r\n  <%layout_colorselection_table%>\r\n  <!--\r\n  <br>\r\n  <center>\r\n   <a href="http://manuel.kiessling.net/projects/software/arsc/" target="_blank"><img src="../../../base/pic/poweredby.gif" width="158" height="98" border="0" alt="Powered by ARSC"></a>\r\n  </center>\r\n  -->\r\n </body>\r\n</html>\r\n', '<html>\r\n <head>\r\n  <title>userlist</title>\r\n  <%layout_kickuser_script%>\r\n  <%layout_idcard_script%>\r\n\r\n  <script language="JavaScript">\r\n  <!--\r\n   var reloadableFrames=new Array();\r\n   reloadableFrames[0] = "roomlist";\r\n   reloadableFrames[1] = "input";\r\n   reloadableFrames[2] = "empty";\r\n  //-->\r\n  </script>\r\n  <%layout_reloadallframes_script%>\r\n </head>\r\n <body bgcolor="#<%layout_default_background_color%>" text="#FFFFFF" link="#0000FF" vlink="#0000FF" alink="#00FFFF">\r\n  <font face="Arial" size="2">\r\n   <center>\r\n    <%lang_usersinroom%><br>\r\n    <b>\r\n     <%layout_currentroom%>\r\n    </b>\r\n    <font size="1">\r\n     <a href="userlist.php?arsc_sid=<%my_sid%>"><%lang_refresh%></a>\r\n    </font>\r\n   </center>\r\n  </font>\r\n  <br>\r\n  <br>\r\n  <%layout_userlist%>\r\n </body>\r\n</html>', '<html>\r\n <head>\r\n  <title>input</title>\r\n  <%layout_msginput_script%>\r\n </head>\r\n <body bgcolor="#<%layout_default_background_color%>" text="#FFFFFF" link="#0000FF" vlink="#0000FF" alink="#00FFFF" OnLoad="<%layout_msginput_onload%>">\r\n  <form action="chatins.php" method="GET" target="empty" name="f" OnSubmit="return empty_field_and_submit()">\r\n   <input type="text" name="arsc_message" size="50" maxlength="<%parameters_input_maxsize%>" value="<%layout_pretext%>">\r\n  </form>\r\n  <form action="chatins.php" method="GET" target="empty" name="fdummy" OnSubmit="return empty_field_and_submit()">\r\n   <input type="hidden" name="arsc_sid" value="<%my_sid%>">\r\n   <input type="hidden" name="arsc_chatversion" value="<%my_version%>">\r\n   <input type="hidden" name="arsc_message">\r\n  </form>\r\n </body>\r\n</html>', '<html>\r\n <head>\r\n  <title>\r\n   <%parameters_title%>\r\n  </title>\r\n </head>\r\n <frameset cols="220,*" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">\r\n  <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/../shared/browser/roomlist.php?arsc_sid=<%my_sid%>" name="roomlist" scrolling="auto" noresize marginwidth="0" marginheight="0">\r\n  <frameset cols="*,120" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">\r\n   <frameset rows="0,*,60" border="1" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">\r\n    <frame src="../shared/browser/empty.php" name="empty" scrolling="no" noresize marginwidth="0" marginheight="0">\r\n    <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/chatmsg.php?arsc_sid=<%my_sid%>" name="msg" scrolling="auto" noresize marginwidth="2" marginheight="0">\r\n    <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/../shared/browser/input.php?arsc_sid=<%my_sid%>" name="input" scrolling="no" noresize marginwidth="2" marginheight="1">\r\n   </frameset>\r\n   <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/../shared/browser/userlist.php?arsc_sid=<%my_sid%>&arsc_current_room=<%my_room%>" name="userlist" scrolling="auto" noresize marginwidth="2" marginheight="2">\r\n  </frameset>\r\n </frameset>\r\n <noframes>\r\n  Sorry, this version of ARSC needs a browser that understands framesets. But we have a lynx-friendly version too.\r\n </noframes>\r\n</html>');
INSERT INTO arsc_layouts VALUES (2, 'inroom_chat', 'Arial', 'FFFFFF', 2, 'Verdana, Arial, sans-serif', 'FFFFFF', 1, '005500', '555555', '<html>\r\n <head>\r\n  <title>\r\n   <%parameters_title%>\r\n  </title>\r\n </head>\r\n <body bgcolor="<%layout_default_background_color%>" text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD">\r\n  <table width="600" align="center" cellspacing="4">\r\n   <tr>\r\n    <td width="400" valign="top">\r\n     <font face="Arial" size="2" color="#FF0000">\r\n      <b>\r\n       <%current_error%>\r\n      </b>\r\n     </font>\r\n     <form action="login.php" method="POST">\r\n      <table>\r\n       <tr>\r\n        <td valign="top">\r\n         <font face="Arial" size="2">\r\n          <b>\r\n           <%lang_entername%>\r\n          </b>\r\n         </font>\r\n        </td>\r\n        <td valign="top">\r\n         <input type="text" name="arsc_user" size="20" maxlength="64" value="<%current_user%>">\r\n        </td>\r\n       </tr>\r\n       <tr>\r\n        <td valign="top">\r\n         <font face="Arial" size="2">\r\n          <b>\r\n           <%lang_enterpassword%>\r\n          </b>\r\n         </font>\r\n        </td>\r\n        <td valign="top">\r\n         <input type="password" name="arsc_password" size="20">\r\n        </td>\r\n       </tr>\r\n       <tr>\r\n        <td>\r\n         <font face="Arial" size="2">\r\n          <b>\r\n           <%lang_selectroom%>\r\n          </b>\r\n         </font>\r\n        </td>\r\n        <td>\r\n         <%layout_room_selection%>\r\n        </td>\r\n       </tr>\r\n       <tr>\r\n        <td>\r\n         <font face="Arial" size="2">\r\n          &nbsp;\r\n         </font>\r\n        </td>\r\n        <td>\r\n         <input type="submit" value="<%lang_startbutton%>">\r\n        </td>\r\n       </tr>\r\n      </table>\r\n      <input type="hidden" name="arsc_chatversion" value="browser_push">\r\n      <input type="hidden" name="arsc_language" value="<%current_language%>">\r\n      <input type="hidden" name="arsc_template" value="html">\r\n     </form>\r\n    </td>\r\n    <td valign="top" bgcolor="#<%layout_default_foreground_color%>">\r\n      <br>\r\n      <font face="Arial" size="2">\r\n       <center>\r\n        <a href="register.php?arsc_language=<%current_language%>"><%lang_clicktoregister%></a>\r\n       </center>\r\n      </font>\r\n      <br>\r\n      <font face="Arial" size="2">\r\n       <b>\r\n        <%lang_usersinchat%>\r\n       </b>\r\n      </font>\r\n      <table width="100%">\r\n      <tr bgcolor="#EEEEEE">\r\n       <td width="50%">\r\n        <font face="Arial" size="2" color="#000000">\r\n         <%lang_usersinchat_name%>\r\n        </font>\r\n       </td>\r\n       <td width="50%">\r\n        <font face="Arial" size="2" color="#000000">\r\n         <%lang_usersinchat_room%>\r\n        </font>\r\n       </td>\r\n      </tr>\r\n     </table>\r\n     <%layout_usersinchat_table%>\r\n    </td>\r\n   </tr>\r\n  </table>\r\n    </td>\r\n </body>\r\n</html>', '<html>\r\n  <head>\r\n   <title>\r\n    <%parameters_title%>\r\n   </title>\r\n  </head>\r\n  <body bgcolor="<%layout_default_background_color%>" text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD">\r\n   <table width="500" align="center" cellpadding="6" bgcolor="<%layout_default_foreground_color%>">\r\n    <tr>\r\n     <td>\r\n      <font face="Arial" size="2" color="#FF0000">\r\n       <b>\r\n        <%current_error%>\r\n       </b>\r\n      </font>\r\n      <form METHOD="POST">\r\n       <input type="hidden" name="arsc_send" value="yes">\r\n       <input type="hidden" name="arsc_language" value="<%current_language%>">\r\n       <font face="Arial" size="2">\r\n        <%lang_register_intro%>\r\n       </font>\r\n       <br>\r\n       <br>\r\n       <table>\r\n        <tr>\r\n         <td>\r\n          <font face="Arial" size="2">\r\n           <b>\r\n            <%lang_register_entername%>\r\n           </b>\r\n          </font>\r\n         </td>\r\n         <td>\r\n          <input type="text" name="arsc_user" size="12" maxlength="12">\r\n         </td>\r\n        </tr>\r\n        <tr>\r\n         <td>\r\n          <font face="Arial" size="2">\r\n           <b>\r\n            <%lang_register_enterpassword%>\r\n           </b>\r\n          </font>\r\n         </td>\r\n         <td>\r\n          <input type="password" name="arsc_password" size="12" maxlength="12">\r\n         </td>\r\n        </tr>\r\n        <tr>\r\n         <td>\r\n          <font face="Arial" size="2">\r\n           <b>\r\n            <%lang_register_enteremail%>\r\n           </b>\r\n          </font>\r\n         </td>\r\n         <td>\r\n          <input type="text" name="arsc_email" size="12">\r\n         </td>\r\n        </tr>\r\n       </table>\r\n       <input type="submit" value="<%lang_register_send%>">\r\n      </form>\r\n     </td>\r\n    </tr>\r\n   </table>\r\n  </body>\r\n </html>', '<html>\r\n <head>\r\n  <title>roomlist</title>\r\n  <%layout_scrolling_script%>\r\n  <%layout_help_script%>\r\n  <%layout_drawboard_script%>\r\n </head>\r\n <body text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD" bgcolor="#<%layout_default_background_color%>" topmargin="0" leftmargin="0" marginleft="0" margintop="0">\r\n  Hello World\r\n  <img src="../../../base/pic/logo.png" alt="Logo" border="0"><br>\r\n  <table width="95%" bgcolor="#<%layout_default_foreground_color%>" align="center">\r\n   <tr>\r\n    <td>\r\n     <%layout_roomlist_form%>\r\n     <div align="right">\r\n      <font face="Arial" size="1">\r\n       <a href="roomlist.php?arsc_sid=<%my_sid%>"><%lang_refresh%></a>\r\n      </font>\r\n     </div>\r\n    </td>\r\n   </tr>\r\n  </table>\r\n  <br>\r\n  <table width="95%" bgcolor="<%layout_default_foreground_color%>" align="center">\r\n   <tr>\r\n    <td>\r\n     <font face="Arial" size="2">\r\n      <b>\r\n       <%lang_otherfunctions%>:\r\n      </b>\r\n      <%layout_scrolling_form%>\r\n      <%layout_drawboard_link%>\r\n      <li> <b><%layout_help_link%></b></li>\r\n      <li> <a href="<%parameters_baseurl%>base/logout.php?arsc_sid=<%my_sid%>&arsc_post_logout=true" target="_parent"><%lang_leave%></a></li>\r\n     </font>\r\n    </td>\r\n   </tr>\r\n  </table>\r\n  <br>\r\n  <%layout_colorselection_table%>\r\n  <!--\r\n  <br>\r\n  <center>\r\n   <a href="http://manuel.kiessling.net/projects/software/arsc/" target="_blank"><img src="../../../base/pic/poweredby.gif" width="158" height="98" border="0" alt="Powered by ARSC"></a>\r\n  </center>\r\n  -->\r\n </body>\r\n</html>\r\n', '<html>\r\n <head>\r\n  <title>userlist</title>\r\n  <%layout_kickuser_script%>\r\n  <%layout_idcard_script%>\r\n\r\n  <script language="JavaScript">\r\n  <!--\r\n   var reloadableFrames=new Array();\r\n   reloadableFrames[0] = "roomlist";\r\n   reloadableFrames[1] = "input";\r\n   reloadableFrames[2] = "empty";\r\n  //-->\r\n  </script>\r\n  <%layout_reloadallframes_script%>\r\n </head>\r\n <body bgcolor="#<%layout_default_background_color%>" text="#FFFFFF" link="#0000FF" vlink="#0000FF" alink="#00FFFF">\r\n  <font face="Arial" size="2">\r\n   <center>\r\n    <%lang_usersinroom%><br>\r\n    <b>\r\n     <%layout_currentroom%>\r\n    </b>\r\n    <font size="1">\r\n     <a href="userlist.php?arsc_sid=<%my_sid%>"><%lang_refresh%></a>\r\n    </font>\r\n   </center>\r\n  </font>\r\n  <br>\r\n  <br>\r\n  <%layout_userlist%>\r\n </body>\r\n</html>', '<html>\r\n <head>\r\n  <title>input</title>\r\n  <%layout_msginput_script%>\r\n </head>\r\n <body bgcolor="#<%layout_default_background_color%>" text="#FFFFFF" link="#0000FF" vlink="#0000FF" alink="#00FFFF" OnLoad="<%layout_msginput_onload%>">\r\n  <form action="chatins.php" method="GET" target="empty" name="f" OnSubmit="return empty_field_and_submit()">\r\n   <input type="text" name="arsc_message" size="50" maxlength="<%parameters_input_maxsize%>" value="<%layout_pretext%>">\r\n  </form>\r\n  <form action="chatins.php" method="GET" target="empty" name="fdummy" OnSubmit="return empty_field_and_submit()">\r\n   <input type="hidden" name="arsc_sid" value="<%my_sid%>">\r\n   <input type="hidden" name="arsc_chatversion" value="<%my_version%>">\r\n   <input type="hidden" name="arsc_message">\r\n  </form>\r\ntest test test\r\n </body>\r\n</html>', '<html>\r\n <head>\r\n  <title>\r\n   <%parameters_title%>\r\n  </title>\r\n </head>\r\n <frameset cols="220,*" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">\r\n  <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/../shared/browser/roomlist.php?arsc_sid=<%my_sid%>" name="roomlist" scrolling="auto" noresize marginwidth="0" marginheight="0">\r\n  <frameset cols="*,120" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">\r\n   <frameset rows="0,*,60" border="1" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">\r\n    <frame src="../shared/browser/empty.php" name="empty" scrolling="no" noresize marginwidth="0" marginheight="0">\r\n    <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/chatmsg.php?arsc_sid=<%my_sid%>" name="msg" scrolling="auto" noresize marginwidth="2" marginheight="0">\r\n    <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/../shared/browser/input.php?arsc_sid=<%my_sid%>" name="input" scrolling="no" noresize marginwidth="2" marginheight="1">\r\n   </frameset>\r\n   <frame src="http://<%parameters_virtualservers_current%><%parameters_hostname%><%parameters_currentdir%>/../shared/browser/userlist.php?arsc_sid=<%my_sid%>&arsc_current_room=<%my_room%>" name="userlist" scrolling="auto" noresize marginwidth="2" marginheight="2">\r\n  </frameset>\r\n </frameset>\r\n <noframes>\r\n  Sorry, this version of ARSC needs a browser that understands framesets. But we have a lynx-friendly version too.\r\n </noframes>\r\n</html>');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_levels`
#

CREATE TABLE arsc_levels (
  command char(8) NOT NULL default '0',
  level0 tinyint(4) NOT NULL default '0',
  level10 tinyint(4) NOT NULL default '0',
  level20 tinyint(4) NOT NULL default '0',
  level30 tinyint(4) NOT NULL default '0',
  level99 tinyint(4) NOT NULL default '0',
  KEY command (command)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_levels`
#

INSERT INTO arsc_levels VALUES ('whois', 0, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('kick', 0, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('bann', 0, 0, 0, 0, 1);
INSERT INTO arsc_levels VALUES ('rip', 0, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('unrip', 0, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('op', 0, 0, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('deop', 0, 0, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('move', 0, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('color', 1, 1, 1, 1, 1);
INSERT INTO arsc_levels VALUES ('msg', 1, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('msgops', 0, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('opcall', 1, 1, 1, 1, 1);
INSERT INTO arsc_levels VALUES ('room', 1, 1, 1, 1, 1);
INSERT INTO arsc_levels VALUES ('invite', 1, 1, 0, 0, 1);
INSERT INTO arsc_levels VALUES ('smilies', 1, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('roomlist', 1, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('userlist', 1, 1, 0, 1, 1);
INSERT INTO arsc_levels VALUES ('croom', 1, 1, 0, 0, 1);
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_parameters`
#

CREATE TABLE arsc_parameters (
  name varchar(255) NOT NULL default '',
  value text NOT NULL,
  UNIQUE KEY name (name),
  KEY name_2 (name)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_parameters`
#

INSERT INTO arsc_parameters VALUES ('socketserver_use', 'no');
INSERT INTO arsc_parameters VALUES ('socketserver_adress', 'localhost');
INSERT INTO arsc_parameters VALUES ('socketserver_port', '8080');
INSERT INTO arsc_parameters VALUES ('socketserver_maximumusers', '200');
INSERT INTO arsc_parameters VALUES ('admin_password', '');
INSERT INTO arsc_parameters VALUES ('activate_counter_pic', 'no');
INSERT INTO arsc_parameters VALUES ('drawboard', 'no');
INSERT INTO arsc_parameters VALUES ('drawboard_width', '400');
INSERT INTO arsc_parameters VALUES ('drawboard_height', '350');
INSERT INTO arsc_parameters VALUES ('drawboard_port', '8081');
INSERT INTO arsc_parameters VALUES ('title', 'ARSC');
INSERT INTO arsc_parameters VALUES ('standard_language', 'english');
INSERT INTO arsc_parameters VALUES ('allow_textformatting', 'yes');
INSERT INTO arsc_parameters VALUES ('smilies', 'yes');
INSERT INTO arsc_parameters VALUES ('smilies_path', 'http://www.example.com/arsc/base/pic/smilies/');
INSERT INTO arsc_parameters VALUES ('socketserver_refresh', '400000');
INSERT INTO arsc_parameters VALUES ('register_force', 'no');
INSERT INTO arsc_parameters VALUES ('show_version_selection', 'no');
INSERT INTO arsc_parameters VALUES ('flood_max', '4');
INSERT INTO arsc_parameters VALUES ('first_user_gets_op', 'no');
INSERT INTO arsc_parameters VALUES ('keep_sended_message', 'no');
INSERT INTO arsc_parameters VALUES ('input_maxsize', '400');
INSERT INTO arsc_parameters VALUES ('register_owner', 'Chatadmin');
INSERT INTO arsc_parameters VALUES ('register_owner_email', 'arsc@example.com');
INSERT INTO arsc_parameters VALUES ('register_homepage', 'http://www.example.com/arsc/');
INSERT INTO arsc_parameters VALUES ('ping', '10');
INSERT INTO arsc_parameters VALUES ('userlist_refresh', '8');
INSERT INTO arsc_parameters VALUES ('ping_text', '600');
INSERT INTO arsc_parameters VALUES ('roomlist_refresh', '240');
INSERT INTO arsc_parameters VALUES ('rowlimit', '100');
INSERT INTO arsc_parameters VALUES ('baseurl', 'http://www.example.com/arsc/');
INSERT INTO arsc_parameters VALUES ('default_layout', '1');
INSERT INTO arsc_parameters VALUES ('virtualservers_name', 'srv%.');
INSERT INTO arsc_parameters VALUES ('virtualservers_use', 'no');
INSERT INTO arsc_parameters VALUES ('logo_path', '');
INSERT INTO arsc_parameters VALUES ('userlist_background_path', '');
INSERT INTO arsc_parameters VALUES ('color_standard_window_background', '');
INSERT INTO arsc_parameters VALUES ('color_msg_window_background', '');
INSERT INTO arsc_parameters VALUES ('color_userlist_window_background', '');
INSERT INTO arsc_parameters VALUES ('color_userlist_window_text', '');
INSERT INTO arsc_parameters VALUES ('color_userlist_window_link', '');
INSERT INTO arsc_parameters VALUES ('color_userlist_window_level0', '');
INSERT INTO arsc_parameters VALUES ('color_userlist_window_level1', '');
INSERT INTO arsc_parameters VALUES ('color_userlist_window_level2', '');
INSERT INTO arsc_parameters VALUES ('color_msginput_window_background', '');
INSERT INTO arsc_parameters VALUES ('color_msginput_window_link', '');
INSERT INTO arsc_parameters VALUES ('color_roomlist_window_background', '');
INSERT INTO arsc_parameters VALUES ('color_roomlist_window_foreground', '');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_registered_users`
#

CREATE TABLE arsc_registered_users (
  id int(11) NOT NULL auto_increment,
  user varchar(64) NOT NULL default '',
  password varchar(40) NOT NULL default '',
  language varchar(32) NOT NULL default '',
  level tinyint(4) NOT NULL default '0',
  color varchar(6) NOT NULL default '000000',
  template int(11) NOT NULL default '0',
  email varchar(128) NOT NULL default '',
  sex tinyint(4) NOT NULL default '0',
  location varchar(255) NOT NULL default '',
  hobbies text NOT NULL,
  flag_guestbook tinyint(4) NOT NULL default '0',
  flag_locked tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY user (user)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_registered_users`
#

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_room_free_for_all`
#

CREATE TABLE arsc_room_free_for_all (
  id int(11) NOT NULL auto_increment,
  message text NOT NULL,
  user varchar(64) NOT NULL default '',
  flag_ripped tinyint(4) NOT NULL default '0',
  sendtime time NOT NULL default '00:00:00',
  timeid bigint(20) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY timeid (timeid),
  KEY flag_ripped (flag_ripped)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_room_free_for_all`
#

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_room_vip_lounge`
#

CREATE TABLE arsc_room_vip_lounge (
  id int(11) NOT NULL auto_increment,
  message text NOT NULL,
  user varchar(64) NOT NULL default '',
  flag_ripped tinyint(4) NOT NULL default '0',
  sendtime time NOT NULL default '00:00:00',
  timeid bigint(20) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY timeid (timeid),
  KEY flag_ripped (flag_ripped),
  KEY flag_ripped_2 (flag_ripped)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_room_vip_lounge`
#

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_rooms`
#

CREATE TABLE arsc_rooms (
  roomname varchar(32) NOT NULL default '',
  roomname_nice varchar(64) NOT NULL default '',
  description text NOT NULL,
  owner varchar(64) NOT NULL default '0',
  password varchar(6) NOT NULL default '',
  type smallint(6) NOT NULL default '0',
  layout_id int(11) NOT NULL default '1',
  PRIMARY KEY  (roomname),
  UNIQUE KEY roomname_nice (roomname_nice),
  UNIQUE KEY roomname (roomname),
  KEY roomname_2 (roomname,owner)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_rooms`
#

INSERT INTO arsc_rooms VALUES ('free_for_all', 'Free For All', 'The lounge is the entry room for all your needs. Get in touch here and explore the other rooms.', '-1', '', 0, 1);
INSERT INTO arsc_rooms VALUES ('vip_lounge', 'VIP Lounge (moderated)', 'This room is moderated.', '-1', '', 2, 1);
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_smilies`
#

CREATE TABLE arsc_smilies (
  id int(11) NOT NULL default '0',
  value char(32) NOT NULL default '',
  UNIQUE KEY id (id),
  KEY id_2 (id)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_smilies`
#

INSERT INTO arsc_smilies VALUES (0, ':-)');
INSERT INTO arsc_smilies VALUES (1, ';-)');
INSERT INTO arsc_smilies VALUES (2, ':-(');
INSERT INTO arsc_smilies VALUES (3, ':-s');
INSERT INTO arsc_smilies VALUES (4, ':-]');
INSERT INTO arsc_smilies VALUES (5, ':-[');
INSERT INTO arsc_smilies VALUES (6, '/love/');
INSERT INTO arsc_smilies VALUES (7, '/smoke/');
INSERT INTO arsc_smilies VALUES (8, '/greet/');
INSERT INTO arsc_smilies VALUES (9, '/sleep/');
INSERT INTO arsc_smilies VALUES (10, '/shy/');
INSERT INTO arsc_smilies VALUES (11, '/tree/');
INSERT INTO arsc_smilies VALUES (12, '/candle/');
INSERT INTO arsc_smilies VALUES (13, '/rudolph/');
INSERT INTO arsc_smilies VALUES (14, '/santa/');
INSERT INTO arsc_smilies VALUES (15, '/snowman/');
INSERT INTO arsc_smilies VALUES (16, '/gift/');
INSERT INTO arsc_smilies VALUES (17, '/roll/');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_templates`
#

CREATE TABLE arsc_templates (
  template varchar(32) NOT NULL default '',
  name varchar(32) NOT NULL default '',
  value text NOT NULL,
  KEY name (name)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_templates`
#

INSERT INTO arsc_templates VALUES ('html', 'normal', '<font face="Arial" size="2" color="{color}"><font color="#999999" size="1">[{sendtime}]</font> <b>&lt;{user}&gt;</b> {message}</font><br>');
INSERT INTO arsc_templates VALUES ('html', 'msg', '<font face="Arial" size="2" color="#000099"><font color="#999999" size="1">[{sendtime}]</font> <b>&lt;{user}&gt;</b> {whispers}: <i>{message}</i></font><br>');
INSERT INTO arsc_templates VALUES ('html', 'msgops', '<font face="Arial" size="2" color="#FF6C00"><font color="#999999" size="1">[{sendtime}]</font> <b>&lt;{user}&gt;</b> {whispersops}: <i>{message}</i></font><br>');
INSERT INTO arsc_templates VALUES ('html', 'me', '<font face="Arial" size="2" color="#9B368A"><font color="#999999" size="1">[{sendtime}]</font> * {user} {message}</font><br>');
INSERT INTO arsc_templates VALUES ('html', 'system', '<font face="Arial" size="2" color="#999999"><font size="1">[{sendtime}]</font> <i><b>{message}</b></i></font><br>');
INSERT INTO arsc_templates VALUES ('xml', 'normal', '<arscmessage><type>normal</type><sendtime>{sendtime}</sendtime><sender>{user}</sender><content>{message}</content></arscmessage>');
INSERT INTO arsc_templates VALUES ('xml', 'msg', '<arscmessage><type>whisper</type><sendtime>{sendtime}</sendtime><sender>{user}</sender><content>{message}</content></arscmessage>');
INSERT INTO arsc_templates VALUES ('xml', 'msgops', '<arscmessage><type>whisperops</type><sendtime>{sendtime}</sendtime><sender>{user}</sender><content>{message}</content></arscmessage>');
INSERT INTO arsc_templates VALUES ('xml', 'me', '<arscmessage><type>me</type><sendtime>{sendtime}</sendtime><sender>{user}</sender><content>{message}</content></arscmessage>');
INSERT INTO arsc_templates VALUES ('xml', 'system', '<arscmessage><type>system</type><sendtime>{sendtime}</sendtime><sender>{user}</sender><content>{message}</content></arscmessage>');
INSERT INTO arsc_templates VALUES ('html_moderate', 'system', '<font face="Arial" size="2" color="#999999"><font size="1">[{sendtime}]</font> <i><b>{message}</b></i></font><br>');
INSERT INTO arsc_templates VALUES ('html_moderate', 'msgops', '<font face="Arial" size="2" color="#FF6C00"><font color="#999999" size="1">[{sendtime}]</font> <b>&lt;{user}&gt;</b> {whispersops}: <i>{message}</i></font><br>');
INSERT INTO arsc_templates VALUES ('html_moderate', 'me', '<font face="Arial" size="2" color="#9B368A"><font color="#999999" size="1">[{sendtime}]</font> * {user} {message}</font><br>');
INSERT INTO arsc_templates VALUES ('html_moderate', 'msg', '<font face="Arial" size="2" color="#000099"><font color="#999999" size="1">[{sendtime}]</font> <b>&lt;{user}&gt;</b> {whispers}: <i>{message}</i></font><br>');
INSERT INTO arsc_templates VALUES ('html_moderate', 'normal', '<font face="Arial" size="2" color="{color}"><font color="#999999" size="1">[{sendtime}]</font> <b>&lt;{user}&gt;</b> <a href="{path}chatins.php?arsc_sid={sid}&arsc_message={moderate_user}:+{moderate_message}&arsc_chatversion=browser_socket" target="empty">{message}</a></font><br>');
# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_traffic`
#

CREATE TABLE arsc_traffic (
  incoming int(11) NOT NULL default '0',
  outgoing int(11) NOT NULL default '0'
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_traffic`
#

# --------------------------------------------------------

#
# Tabellenstruktur für Tabelle `arsc_users`
#

CREATE TABLE arsc_users (
  id int(11) NOT NULL auto_increment,
  user varchar(64) NOT NULL default '',
  lastping int(11) NOT NULL default '0',
  ip varchar(15) NOT NULL default '',
  room varchar(32) NOT NULL default '',
  language varchar(32) NOT NULL default '',
  version varchar(16) NOT NULL default '',
  template varchar(32) NOT NULL default '',
  color varchar(6) NOT NULL default '000000',
  level tinyint(11) NOT NULL default '0',
  flag_ripped tinyint(4) NOT NULL default '0',
  sid varchar(40) NOT NULL default '',
  lastmessageping bigint(20) NOT NULL default '0',
  flood_count tinyint(4) NOT NULL default '0',
  flood_lastmessage text NOT NULL,
  PRIMARY KEY  (id),
  UNIQUE KEY sid (sid),
  KEY lastping (lastping),
  KEY user (user)
) TYPE=MyISAM;

#
# Daten für Tabelle `arsc_users`
#
