<?php
/**
 * This file is part of MySQLDumper released under the GNU/GPL 2 license
 * http://www.mysqldumper.net
 *
 * @package       MySQLDumper
 * @subpackage    Languages
 * @version       $Rev: 1227 $
 * @author        $Author: DSB $
 * Maintained by: binota (19), fmben (413)
 */
$lang=array(
'L_ACTION' => '操作',
'L_ACTIVATED' => '激活',
'L_ACTUALLY_INSERTED_RECORDS' => '到目前为止已成功添加 <b>%s</b> 条记录。',
'L_ACTUALLY_INSERTED_RECORDS_OF' => '到目前为止已有 <b>%s</b> / <b>%s</b> 条记录已经成功增加。',
'L_ADD' => '添加',
'L_ADDED' => '已添加',
'L_ADD_DB_MANUALLY' => '手动添加数据库',
'L_ADD_RECIPIENT' => '添加收件人',
'L_ALL' => '全部',
'L_ANALYZE' => '分析',
'L_ANALYZING_TABLE' => '目前正在分析数据表\'<b>%s</b>\'中的数据。',
'L_ASKDBCOPY' => '你想从数据库 `%s` 复制数据到数据库 `%s` 吗？',
'L_ASKDBDELETE' => '确实删除数据库 `%s` 中的内容么？',
'L_ASKDBEMPTY' => '你想清空数据库 `%s` 吗？',
'L_ASKDELETEFIELD' => '确实要删除这个字段吗？',
'L_ASKDELETERECORD' => '确实要删除这个记录么？',
'L_ASKDELETETABLE' => '确定要删除 `%s` 表吗？',
'L_ASKTABLEEMPTY' => '确定要清空 `%s` 表吗？',
'L_ASKTABLEEMPTYKEYS' => '确定要清空 `%s` 表和重设索引吗？',
'L_ATTACHED_AS_FILE' => '附加文件',
'L_ATTACH_BACKUP' => '附上备份文件',
'L_AUTHENTICATE' => '登录信息',
'L_AUTHORIZE' => '授权',
'L_AUTODELETE' => '自动删除备份',
'L_BACK' => '返回',
'L_BACKUPFILESANZAHL' => '在备份目录里有',
'L_BACKUPS' => '备份文件',
'L_BACKUP_DBS' => '备份数据库',
'L_BACKUP_TABLE_DONE' => 'Dump `%s` 表格已完成。 %s 条记录已经被保存。',
'L_BACK_TO_OVERVIEW' => '数据库概况',
'L_CALL' => '调用',
'L_CANCEL' => '取消',
'L_CANT_CREATE_DIR' => '不能创建目录 \'%s\'。 <br />请使用FTP工具创建。',
'L_CHANGE' => '更改',
'L_CHANGEDIR' => '更改到目录',
'L_CHANGEDIRERROR' => '无法更改目录！',
'L_CHARSET' => '字符集',
'L_CHARSETS' => '字符集',
'L_CHECK' => '检查',
'L_CHECK_DIRS' => '检查我的目录',
'L_CHOOSE_CHARSET' => 'MySQLDumper无法自动检测备份文件的编码。<br /><br />你必须选择备份时的字符集。<br /><br />如果你发现恢复后字符有问题，你可以重复备份操作来选择其他字符集。<br /><br />祝你好运！ :)<br /><br />',
'L_CHOOSE_DB' => '选择数据库',
'L_CLEAR_DATABASE' => '清空数据库',
'L_CLOSE' => '关闭',
'L_COLLATION' => '整理',
'L_COMMAND' => '命令',
'L_COMMAND_AFTER_BACKUP' => '备份后运行命令',
'L_COMMAND_BEFORE_BACKUP' => '备份前运行命令',
'L_COMMENT' => '备注',
'L_COMPRESSED' => '压缩(gz)',
'L_CONFBASIC' => '基本参数',
'L_CONFIG' => '配置',
'L_CONFIGFILE' => '配置文件',
'L_CONFIGFILES' => '配置文件',
'L_CONFIGURATIONS' => '配置',
'L_CONFIG_AUTODELETE' => '自动删除',
'L_CONFIG_CRONPERL' => 'Perl脚本Crondump备份设置',
'L_CONFIG_EMAIL' => '电邮提醒',
'L_CONFIG_FTP' => 'FTP传输备份文件',
'L_CONFIG_HEADLINE' => '配置',
'L_CONFIG_INTERFACE' => '界面',
'L_CONFIG_LOADED' => '配置 "%s" 已经成功导入。',
'L_CONFIRM_CONFIGFILE_DELETE' => '确定要删除配置文件 %s 吗？',
'L_CONFIRM_DELETE_FILE' => '确实要删除文件 \'%s\' 吗？',
'L_CONFIRM_DELETE_TABLES' => '确定要删除选中的表吗？',
'L_CONFIRM_DROP_DATABASES' => '是否真的需要删除选中的数据库？<br /><br />注意：所有的数据会被删除！也许你应该先创建一个备份。',
'L_CONFIRM_RECIPIENT_DELETE' => '确定要删除接受者 "%s" 吗？',
'L_CONFIRM_TRUNCATE_DATABASES' => '您确定要删除所有所选数据库么？<br /><br />注意：所有数据都将被删除！或许您会想要先建立一个备份。',
'L_CONFIRM_TRUNCATE_TABLES' => '确定需要清空表吗？',
'L_CONNECT' => '连接',
'L_CONNECTIONPARS' => '连接参数',
'L_CONNECTTOMYSQL' => '连接到MySQL',
'L_CONTINUE_MULTIPART_RESTORE' => '继续多部分恢复文件 \'%s\' 。',
'L_CONVERTED_FILES' => '转换文件',
'L_CONVERTER' => '备份转换',
'L_CONVERTING' => '正在转换',
'L_CONVERT_FILE' => '需要转换的文件',
'L_CONVERT_FILENAME' => '目标文件名（不帶扩展名）',
'L_CONVERT_FILEREAD' => '读取文件 \'%s\'',
'L_CONVERT_FINISHED' => '转换完成，\'%s\' 成功写入。',
'L_CONVERT_START' => '开始转换',
'L_CONVERT_TITLE' => '转换Dump 到MSD 格式',
'L_CONVERT_WRONG_PARAMETERS' => '错误的参数！转换不可能完成。',
'L_CREATE' => '创建',
'L_CREATED' => '创建完成',
'L_CREATEDIRS' => '创建目录',
'L_CREATE_AUTOINDEX' => '创建自动索引',
'L_CREATE_CONFIGFILE' => '创建一个新的配置文件',
'L_CREATE_DATABASE' => '创建一个新的数据库',
'L_CREATE_TABLE_SAVED' => '表 `%s` 的定义已经被保存。',
'L_CREDITS' => '荣誉 / 帮助',
'L_CRONSCRIPT' => 'Cronscript',
'L_CRON_COMMENT' => '输入备注',
'L_CRON_COMPLETELOG' => '日志输出完成',
'L_CRON_EXECPATH' => 'Perl脚本路径',
'L_CRON_EXTENDER' => '文件扩展名',
'L_CRON_PRINTOUT' => '在屏幕上打印输出',
'L_CSVOPTIONS' => 'CSV选项',
'L_CSV_EOL' => '分隔线使用',
'L_CSV_ERRORCREATETABLE' => '创建表`%s`错误！',
'L_CSV_FIELDCOUNT_NOMATCH' => '字段数和导入的数据不匹配（%d 替换为 %d）',
'L_CSV_FIELDSENCLOSED' => '字段关闭',
'L_CSV_FIELDSEPERATE' => '字段分隔',
'L_CSV_FIELDSESCAPE' => '跳脱字段以',
'L_CSV_FIELDSLINES' => '%d 字段识别，总共 %d 行',
'L_CSV_FILEOPEN' => '打开 CSV 文件',
'L_CSV_NAMEFIRSTLINE' => '第一行是字段名',
'L_CSV_NODATA' => '未找到可导入的数据！',
'L_CSV_NULL' => '替代 NULL 值使用：',
'L_DATABASES_OF_USER' => '用户数据库',
'L_DATABASE_CREATED_FAILED' => '数据库未创建。<br />MySQL 返回：<br/><br />%s',
'L_DATABASE_CREATED_SUCCESS' => '数据库 \'%s\' 成功创建了。',
'L_DATASIZE' => '数据大小',
'L_DATASIZE_INFO' => '这个是记录的大小 - 而不是备份文件的大小',
'L_DAY' => '天',
'L_DAYS' => '天',
'L_DB' => '数据库',
'L_DBCONNECTION' => '数据库连接',
'L_DBPARAMETER' => '数据库参数',
'L_DBS' => '数据库',
'L_DB_ADAPTER' => '数据库Adapter',
'L_DB_BACKUPPARS' => '数据库备份参数',
'L_DB_DEFAULT' => '默认数据库',
'L_DB_HOST' => '主机名',
'L_DB_IN_LIST' => '数据库 \'%s\' 不能增加，因为它已经存在了。',
'L_DB_NAME' => '数据库名',
'L_DB_PASS' => '密码',
'L_DB_SELECT_ERROR' => '<br />错误：<br />选择的数据库 <b>',
'L_DB_SELECT_ERROR2' => '失败！',
'L_DB_USER' => '用户',
'L_DEFAULT_CHARACTER_SET_NAME' => '默认字符集',
'L_DEFAULT_CHARSET' => '默认字符集',
'L_DEFAULT_COLLATION_NAME' => '默认的排序规则',
'L_DELETE' => '删除',
'L_DELETE_DATABASE' => '删除数据库',
'L_DELETE_FILE_ERROR' => '错误删除文件 "%s"！',
'L_DELETE_FILE_SUCCESS' => '文件"%s"删除成功。',
'L_DELETE_HTACCESS' => '删除目录保护（删除.htaccess）',
'L_DESCRIPTION' => '描述',
'L_DESELECT_ALL' => '取消选择所有',
'L_DIR' => '目录',
'L_DISABLEDFUNCTIONS' => '禁用的功能',
'L_DO' => '执行',
'L_DOCRONBUTTON' => '运行Perl Cron脚本',
'L_DONE' => '完成！',
'L_DONT_ATTACH_BACKUP' => '请不要附加备份文件',
'L_DOPERLTEST' => '测试Perl模块',
'L_DOSIMPLETEST' => '测试Perl',
'L_DOWNLOAD_FILE' => '下载文件',
'L_DO_NOW' => '立刻操作',
'L_DUMP' => '备份',
'L_DUMP_ENDERGEBNIS' => '',
'L_DUMP_FILENAME' => '备份文件',
'L_DUMP_HEADLINE' => '正在创建备份...',
'L_DUMP_NOTABLES' => '未找到`%s`数据库里的表',
'L_DUMP_OF_DB_FINISHED' => 'Dump数据库`%s`完成',
'L_DURATION' => '持续时间',
'L_EDIT' => '编辑',
'L_EHRESTORE_CONTINUE' => '继续和记录错误',
'L_EHRESTORE_STOP' => '停止',
'L_EMAIL' => 'E-Mail',
'L_EMAILBODY_ATTACH' => '',
'L_EMAILBODY_FOOTER' => '',
'L_EMAILBODY_MP_ATTACH' => '',
'L_EMAILBODY_MP_NOATTACH' => '',
'L_EMAILBODY_NOATTACH' => '',
'L_EMAILBODY_TOOBIG' => '备份文件超过了最大文件大小 %s，所以没有附加到本邮件里。<br />备份数据库： `%s`<br /><br /><br />以下文件被创建：<br /><br />%s<br /><br /><br />Kind regards<br /><br />MySQLDumper<br />',
'L_EMAIL_ADDRESS' => 'Email地址',
'L_EMAIL_CC' => '抄送',
'L_EMAIL_MAXSIZE' => '最大附件大小',
'L_EMAIL_ONLY_ATTACHMENT' => '...附件而已。',
'L_EMAIL_RECIPIENT' => '接收者',
'L_EMAIL_SENDER' => '邮件发送地址',
'L_EMAIL_START' => '开始发送邮件',
'L_EMAIL_WAS_SEND' => '邮件成功发送到',
'L_EMPTY' => '空的',
'L_EMPTYKEYS' => '清空并重设索引',
'L_EMPTYTABLEBEFORE' => '清空表前',
'L_EMPTY_DB_BEFORE_RESTORE' => '恢复前删除数据表',
'L_ENCODING' => '编码',
'L_ENCRYPTION_TYPE' => '加密类型',
'L_ENGINE' => '引擎',
'L_ENTER_DB_INFO' => '',
'L_ENTRY' => '',
'L_ERROR' => '错误',
'L_ERRORHANDLING_RESTORE' => '恢复时处理发生错误',
'L_ERROR_CONFIGFILE_NAME' => '文件名"%s"包含非法字符',
'L_ERROR_DELETING_CONFIGFILE' => '错误：不能删除配置文件 %s！',
'L_ERROR_LOADING_CONFIGFILE' => '不能加载配置文件"%s"。',
'L_ERROR_LOG' => '错误日志',
'L_ERROR_MULTIPART_RESTORE' => '多文件恢复：不能找到下一个文件 \'%s\'！',
'L_ESTIMATED_END' => '预计结束',
'L_EXCEL2003' => 'Excel 2003',
'L_EXISTS' => '存在的',
'L_EXPORT' => '导出',
'L_EXPORTFINISHED' => '导出完成。',
'L_EXPORTLINES' => '<strong>%s</strong> 行导出',
'L_EXPORTOPTIONS' => '导出选项',
'L_EXTENDEDPARS' => '扩展参数',
'L_FADE_IN_OUT' => '显示 开/关',
'L_FATAL_ERROR_DUMP' => '',
'L_FIELDS' => '字段',
'L_FIELDS_OF_TABLE' => '表字段',
'L_FILE' => '文件',
'L_FILES' => '文件',
'L_FILESIZE' => '文件大小',
'L_FILE_MANAGE' => '文件管理',
'L_FILE_OPEN_ERROR' => '错误：不能你打开文件。',
'L_FILE_SAVED_SUCCESSFULLY' => '文件已经被成功保存。',
'L_FILE_SAVED_UNSUCCESSFULLY' => '文件不能被保存',
'L_FILE_UPLOAD_SUCCESSFULL' => '文件 \'%s\' 成功上传。',
'L_FILTER_BY' => '过滤',
'L_FM_ALERTRESTORE1' => '这个数据库该',
'L_FM_ALERTRESTORE2' => '从这个文件还原记录。',
'L_FM_ALERTRESTORE3' => '？',
'L_FM_ALL_BU' => '全部备份',
'L_FM_ANZ_BU' => '备份',
'L_FM_ASKDELETE1' => '这些文件',
'L_FM_ASKDELETE2' => '确实需要删除？',
'L_FM_ASKDELETE3' => '你需要立刻使用配置规则来执行自动删除吗？',
'L_FM_ASKDELETE4' => '你确定删除所有的备份文件吗？',
'L_FM_ASKDELETE5' => '你确定要删除所有的备份文件使用',
'L_FM_ASKDELETE5_2' => '* ?',
'L_FM_AUTODEL1' => '',
'L_FM_CHOOSE_ENCODING' => '选择备份文件编码',
'L_FM_COMMENT' => '输入备注',
'L_FM_DELETE' => '删除',
'L_FM_DELETE1' => '文件',
'L_FM_DELETE2' => '被成功删除。',
'L_FM_DELETE3' => '不能被删除！',
'L_FM_DELETEALL' => '删除所有备份文件',
'L_FM_DELETEALLFILTER' => '删除文件使用：',
'L_FM_DELETEAUTO' => '手动运行自动删除',
'L_FM_DUMPSETTINGS' => '备份配置',
'L_FM_DUMP_HEADER' => '备份',
'L_FM_FILEDATE' => '文件日期',
'L_FM_FILES1' => '数据库备份',
'L_FM_FILESIZE' => '文件大小',
'L_FM_FILEUPLOAD' => '上传文件',
'L_FM_FREESPACE' => '服务器可用空间',
'L_FM_LAST_BU' => '最后一次备份',
'L_FM_NOFILE' => '你没有选择文件！',
'L_FM_NOFILESFOUND' => '未找到文件。',
'L_FM_RECORDS' => '记录',
'L_FM_RESTORE' => '恢复',
'L_FM_RESTORE_HEADER' => '恢复数据库 `<strong>%s</strong>`',
'L_FM_SELECTTABLES' => '选择表',
'L_FM_STARTDUMP' => '开始新的备份',
'L_FM_TABLES' => '表',
'L_FM_TOTALSIZE' => '总大小',
'L_FM_UPLOADFAILED' => '上传失败！',
'L_FM_UPLOADFILEEXISTS' => '一个相同名字的文件已经存在！',
'L_FM_UPLOADFILEREQUEST' => '请选择一个文件。',
'L_FM_UPLOADMOVEERROR' => '不能移动选择的文件到上传目录。',
'L_FM_UPLOADNOTALLOWED1' => '该文件类型不支持。',
'L_FM_UPLOADNOTALLOWED2' => '确定文件类型为：*.gz 或 *.sql',
'L_FOUND_DB' => '从数据库',
'L_FROMFILE' => '从文件',
'L_FROMTEXTBOX' => '从文本框',
'L_FTP' => 'FTP',
'L_FTP_ADD_CONNECTION' => '新增连接',
'L_FTP_CHOOSE_MODE' => 'FTP传输模式',
'L_FTP_CONFIRM_DELETE' => '该FTP连接确实需要删除吗？',
'L_FTP_CONNECTION' => 'FTP连接',
'L_FTP_CONNECTION_CLOSED' => 'FTP连接关闭',
'L_FTP_CONNECTION_DELETE' => '删除连接',
'L_FTP_CONNECTION_ERROR' => '连接服务器 \'%s\' 使用端口 %s 时无法建立',
'L_FTP_CONNECTION_SUCCESS' => '连接服务器 \'%s\' 使用端口 %s 成功',
'L_FTP_DIR' => '上传目录',
'L_FTP_FILE_TRANSFER_ERROR' => '传输文件 \'%s\' 错误',
'L_FTP_FILE_TRANSFER_SUCCESS' => '文件 \'%s\' 传输成功',
'L_FTP_LOGIN_ERROR' => '禁止用户 \'%s\' 登录',
'L_FTP_LOGIN_SUCCESS' => '使用用户 \'%s\' 登录成功',
'L_FTP_OK' => '连接成功。',
'L_FTP_PASS' => '密码',
'L_FTP_PASSIVE' => '使用被动模式',
'L_FTP_PASV_ERROR' => '切换到被动模式失败',
'L_FTP_PASV_SUCCESS' => '成功切换到被动模式',
'L_FTP_PORT' => '端口',
'L_FTP_SEND_TO' => '',
'L_FTP_SERVER' => '服务器',
'L_FTP_SSL' => '安全SSL FTP连接',
'L_FTP_START' => '开始FTP传输',
'L_FTP_TIMEOUT' => '连接超时',
'L_FTP_TRANSFER' => 'FTP传输',
'L_FTP_USER' => '用户',
'L_FTP_USESSL' => '使用SSL连接',
'L_GENERAL' => '常规',
'L_GZIP' => 'GZip压缩',
'L_GZIP_COMPRESSION' => 'GZip压缩',
'L_HOME' => '首页',
'L_HOUR' => '小时',
'L_HOURS' => '小时',
'L_HTACC_ACTIVATE_REWRITE_ENGINE' => '激活重写',
'L_HTACC_ADD_HANDLER' => '增加handler',
'L_HTACC_CONFIRM_DELETE' => '',
'L_HTACC_CONTENT' => '文件内容',
'L_HTACC_CREATE' => '创建目录保护',
'L_HTACC_CREATED' => '目录保护已经被创建。',
'L_HTACC_CREATE_ERROR' => '',
'L_HTACC_CRYPT' => '最大加密8位字符（Linux和Unix系统）',
'L_HTACC_DENY_ALLOW' => '禁止/允许',
'L_HTACC_DIR_LISTING' => '目录列表',
'L_HTACC_EDIT' => '编辑 .htaccess',
'L_HTACC_ERROR_DOC' => '错误文档',
'L_HTACC_EXAMPLES' => '更多的例子和文档',
'L_HTACC_EXISTS' => '已经有一个目录保护存在。如果你创建一个新的，老的将会被覆盖！',
'L_HTACC_MAKE_EXECUTABLE' => '制作可执行的',
'L_HTACC_MD5' => 'MD5 (Linux 和 Unix 系统)',
'L_HTACC_NO_ENCRYPTION' => '纯文本，不加密（Windows）',
'L_HTACC_NO_USERNAME' => '你必须输入一个名称！',
'L_HTACC_PROPOSED' => '紧急建议',
'L_HTACC_REDIRECT' => '重定向',
'L_HTACC_SCRIPT_EXEC' => '执行脚本',
'L_HTACC_SHA1' => 'SHA1（所有系统）',
'L_HTACC_WARNING' => '注意！.htaccess直接影响浏览器行为。<br />如有错误，将会导致这些页面无法访问。',
'L_IMPORT' => '导入',
'L_IMPORTIEREN' => '导入',
'L_IMPORTOPTIONS' => '导入选项',
'L_IMPORTSOURCE' => '导入源',
'L_IMPORTTABLE' => '在表中导入',
'L_IMPORT_NOTABLE' => '没有选择表来导入！',
'L_IN' => '在',
'L_INDEX_SIZE' => '索引大小',
'L_INFO_ACTDB' => '选择数据库',
'L_INFO_DATABASES' => '可访问的数据库',
'L_INFO_DBEMPTY' => '数据库是空的！',
'L_INFO_FSOCKOPEN_DISABLED' => '',
'L_INFO_LASTUPDATE' => '最后一次更新',
'L_INFO_LOCATION' => '你的位置是',
'L_INFO_NODB' => '数据库不存在。',
'L_INFO_NOPROCESSES' => '没有运行中的进程',
'L_INFO_NOSTATUS' => '没有状态可用',
'L_INFO_NOVARS' => '无变量可用',
'L_INFO_OPTIMIZED' => '优化',
'L_INFO_RECORDS' => '记录',
'L_INFO_SIZE' => '大小',
'L_INFO_SUM' => '总共',
'L_INSTALL' => '安装',
'L_INSTALLED' => '安装',
'L_INSTALL_DB_DEFAULT' => '使用作为默认数据库',
'L_INSTALL_HELP_PORT' => '（留空=默认端口）',
'L_INSTALL_HELP_SOCKET' => '（留空=默认套接字）',
'L_INTERPRETED_AS_BYTES' => '以字节解释',
'L_IS_WRITABLE' => '可写',
'L_KILL_PROCESS' => '停止处理',
'L_LANGUAGE' => '语言',
'L_LANGUAGE_NAME' => 'Chinese Simplified',
'L_LASTBACKUP' => '最后一次备份',
'L_LOAD' => '加载默认设置',
'L_LOAD_DATABASE' => '重新加载数据库',
'L_LOAD_FILE' => '加载文件',
'L_LOG' => '日志',
'L_LOGFILENOTWRITABLE' => '无法写入日志文件！',
'L_LOGFILES' => '日志文件',
'L_LOGGED_IN' => '登录',
'L_LOGIN' => '登录',
'L_LOGIN_AUTOLOGIN' => '自动登录',
'L_LOGIN_INVALID_USER' => '未知的用户名和密码组合。',
'L_LOGOUT' => '退出',
'L_LOG_CREATED' => '日志文件创建了。',
'L_LOG_DELETE' => '删除日志',
'L_LOG_MAXSIZE' => '日志文件最大大小',
'L_LOG_NOT_READABLE' => '日志文件 \'%s\' 不存在或无法读取。',
'L_MAILERROR' => '发送邮件失败！',
'L_MAILPROGRAM' => '邮件程序',
'L_MAXIMUM_LENGTH' => '最大长度',
'L_MAXIMUM_LENGTH_EXPLAIN' => '',
'L_MAXSIZE' => '最大大小',
'L_MAX_BACKUP_FILES_EACH2' => '',
'L_MAX_EXECUTION_TIME' => '最大执行时间',
'L_MAX_UPLOAD_SIZE' => '最大文件大小',
'L_MAX_UPLOAD_SIZE_INFO' => '',
'L_MEMORY' => '内存',
'L_MENU_HIDE' => '隐藏菜单',
'L_MENU_SHOW' => '显示菜单',
'L_MESSAGE' => '信息',
'L_MESSAGE_TYPE' => '信息类型',
'L_MINUTE' => '分',
'L_MINUTES' => '分',
'L_MOBILE_OFF' => '关',
'L_MOBILE_ON' => '开',
'L_MODE_EASY' => '简单',
'L_MODE_EXPERT' => '专家',
'L_MSD_INFO' => 'MySQLDumper-信息',
'L_MSD_MODE' => 'MySQLDumper-模式',
'L_MSD_VERSION' => 'MySQLDumper-版本',
'L_MULTIDUMP' => '多个dump',
'L_MULTIDUMP_FINISHED' => '备份 <b>%d</b> 数据库完成',
'L_MULTIPART_ACTUAL_PART' => '实际的部分',
'L_MULTIPART_SIZE' => '最大文件大小',
'L_MULTI_PART' => '分包备份',
'L_MYSQLVARS' => 'MySQL变量',
'L_MYSQL_CLIENT_VERSION' => 'MySQL客户端',
'L_MYSQL_CONNECTION_ENCODING' => '标准 MySQL 服务器编码',
'L_MYSQL_DATA' => 'MySQL数据',
'L_MYSQL_ROUTINE' => '例行事务',
'L_MYSQL_ROUTINES' => '例行事务',
'L_MYSQL_ROUTINES_EXPLAIN' => '存储函数和存储过程',
'L_MYSQL_TABLES_EXPLAIN' => '',
'L_MYSQL_VERSION' => 'MySQL版本',
'L_MYSQL_VERSION_TOO_OLD' => '',
'L_MYSQL_VIEW' => '视图',
'L_MYSQL_VIEWS' => '视图',
'L_MYSQL_VIEWS_EXPLAIN' => '视图显示（过滤）一个或者多个表的记录，但是不包含任何自己的记录。',
'L_NAME' => '名',
'L_NEW' => '新',
'L_NEWTABLE' => '创建新表',
'L_NEXT_AUTO_INCREMENT' => '下一个自动索引',
'L_NEXT_AUTO_INCREMENT_SHORT' => '自动索引',
'L_NO' => '无',
'L_NOFTPPOSSIBLE' => '你没有FTP功能',
'L_NOGZPOSSIBLE' => '',
'L_NONE' => '没有',
'L_NOREVERSE' => '最老的记录在前',
'L_NOTAVAIL' => '<em>不可用</em>',
'L_NOTHING_TO_DO' => '没什么事情需要做。',
'L_NOTICE' => '通知',
'L_NOTICES' => '通知',
'L_NOT_ACTIVATED' => '未激活',
'L_NOT_SUPPORTED' => '该备份不支持这个功能。',
'L_NO_DB_FOUND' => '',
'L_NO_DB_FOUND_INFO' => '',
'L_NO_DB_SELECTED' => '未选择数据库。',
'L_NO_ENTRIES' => '表是空的，没有任何记录。',
'L_NO_MSD_BACKUPFILE' => '其他脚本备份',
'L_NO_NAME_GIVEN' => '你没有输入一个名字',
'L_NR_OF_QUERIES' => '查询的数量',
'L_NR_OF_RECORDS' => '记录的数量',
'L_NR_TABLES_OPTIMIZED' => '',
'L_NUMBER_OF_FILES_FORM' => '',
'L_OF' => '/',
'L_OK' => '',
'L_OPTIMIZE' => '',
'L_OPTIMIZE_TABLES' => '',
'L_OPTIMIZE_TABLE_ERR' => '',
'L_OPTIMIZE_TABLE_SUCC' => '',
'L_OS' => '',
'L_OVERHEAD' => '',
'L_PAGE' => '',
'L_PAGE_REFRESHS' => '',
'L_PASS' => '',
'L_PASSWORD' => '',
'L_PASSWORDS_UNEQUAL' => '',
'L_PASSWORD_REPEAT' => '',
'L_PASSWORD_STRENGTH' => '',
'L_PERLOUTPUT1' => '',
'L_PERLOUTPUT2' => '',
'L_PERLOUTPUT3' => '',
'L_PERL_COMPLETELOG' => '',
'L_PERL_LOG' => '',
'L_PHPBUG' => '',
'L_PHPMAIL' => '',
'L_PHP_EXTENSIONS' => '',
'L_PHP_LOG' => '',
'L_PHP_VERSION' => '',
'L_PHP_VERSION_TOO_OLD' => '',
'L_POP3_PORT' => '',
'L_POP3_SERVER' => '',
'L_PORT' => '',
'L_POSITION_BC' => '',
'L_POSITION_BL' => '',
'L_POSITION_BR' => '',
'L_POSITION_MC' => '',
'L_POSITION_ML' => '',
'L_POSITION_MR' => '',
'L_POSITION_NOTIFICATIONS' => '',
'L_POSITION_TC' => '',
'L_POSITION_TL' => '',
'L_POSITION_TR' => '',
'L_POSSIBLE_COLLATIONS' => '',
'L_POSSIBLE_COLLATIONS_EXPLAIN' => '',
'L_PREFIX' => '',
'L_PRIMARYKEYS_CHANGED' => '',
'L_PRIMARYKEYS_CHANGINGERROR' => '',
'L_PRIMARYKEYS_SAVE' => '',
'L_PRIMARYKEY_CONFIRMDELETE' => '',
'L_PRIMARYKEY_DELETED' => '',
'L_PRIMARYKEY_FIELD' => '',
'L_PRIMARYKEY_NOTFOUND' => '',
'L_PROCESSKILL1' => '',
'L_PROCESSKILL2' => '',
'L_PROCESSKILL3' => '',
'L_PROCESSKILL4' => '',
'L_PROCESS_ID' => '',
'L_PROGRESS_FILE' => '',
'L_PROGRESS_OVER_ALL' => '',
'L_PROGRESS_TABLE' => '',
'L_PROVIDER' => '',
'L_PROZESSE' => '',
'L_QUERY' => '',
'L_QUERY_TYPE' => '',
'L_RECHTE' => '',
'L_RECORDS' => '',
'L_RECORDS_INSERTED' => '',
'L_RECORDS_OF_TABLE' => '',
'L_RECORDS_PER_PAGECALL' => '',
'L_REFRESHTIME' => '',
'L_REFRESHTIME_PROCESSLIST' => '',
'L_REGISTRATION_DESCRIPTION' => '',
'L_RELOAD' => '',
'L_REMOVE' => '',
'L_REPAIR' => '',
'L_RESET' => '',
'L_RESET_SEARCHWORDS' => '',
'L_RESTORE' => '',
'L_RESTORE_COMPLETE' => '',
'L_RESTORE_DB' => '',
'L_RESTORE_DB_COMPLETE_IN' => '',
'L_RESTORE_OF_TABLES' => '',
'L_RESTORE_TABLE' => '',
'L_RESTORE_TABLES_COMPLETED' => '',
'L_RESTORE_TABLES_COMPLETED0' => '',
'L_RESULT' => '',
'L_REVERSE' => '',
'L_SAFEMODEDESC' => '',
'L_SAVE' => '',
'L_SAVEANDCONTINUE' => '',
'L_SAVE_ERROR' => '',
'L_SAVE_SUCCESS' => '配置成功保存到配置文件 "%s"。',
'L_SAVING_DATA_TO_FILE' => '',
'L_SAVING_DATA_TO_MULTIPART_FILE' => '',
'L_SAVING_DB_FORM' => '',
'L_SAVING_TABLE' => '保存表',
'L_SEARCH_ACCESS_KEYS' => '',
'L_SEARCH_IN_TABLE' => '',
'L_SEARCH_NO_RESULTS' => '',
'L_SEARCH_OPTIONS' => '',
'L_SEARCH_OPTIONS_AND' => '',
'L_SEARCH_OPTIONS_CONCAT' => '',
'L_SEARCH_OPTIONS_OR' => '',
'L_SEARCH_RESULTS' => '',
'L_SECOND' => '',
'L_SECONDS' => '',
'L_SELECT' => '',
'L_SELECTED_FILE' => '',
'L_SELECT_ALL' => '',
'L_SELECT_FILE' => '',
'L_SELECT_LANGUAGE' => '',
'L_SENDMAIL' => '',
'L_SENDRESULTASFILE' => '',
'L_SEND_MAIL_FORM' => '',
'L_SERVER' => '',
'L_SERVERCAPTION' => '',
'L_SETPRIMARYKEYSFOR' => '',
'L_SHOWING_ENTRY_X_TO_Y_OF_Z' => '',
'L_SHOWRESULT' => '',
'L_SHOW_TABLES' => '',
'L_SHOW_TOOLTIPS' => '',
'L_SMTP' => '',
'L_SMTP_HOST' => '',
'L_SMTP_PORT' => '',
'L_SOCKET' => '',
'L_SPEED' => '',
'L_SQLBOX' => '',
'L_SQLBOXHEIGHT' => '',
'L_SQLLIB_ACTIVATEBOARD' => '',
'L_SQLLIB_BOARDS' => '',
'L_SQLLIB_DEACTIVATEBOARD' => '',
'L_SQLLIB_GENERALFUNCTIONS' => '',
'L_SQLLIB_RESETAUTO' => '',
'L_SQLLIMIT' => '',
'L_SQL_ACTIONS' => '',
'L_SQL_AFTER' => '',
'L_SQL_ALLOWDUPS' => '',
'L_SQL_ATPOSITION' => '',
'L_SQL_ATTRIBUTES' => '',
'L_SQL_BACKDBOVERVIEW' => '',
'L_SQL_BEFEHLNEU' => '',
'L_SQL_BEFEHLSAVED1' => '',
'L_SQL_BEFEHLSAVED2' => '',
'L_SQL_BEFEHLSAVED3' => '',
'L_SQL_BEFEHLSAVED4' => '',
'L_SQL_BEFEHLSAVED5' => '',
'L_SQL_BROWSER' => '',
'L_SQL_CARDINALITY' => '',
'L_SQL_CHANGED' => '',
'L_SQL_CHANGEFIELD' => '',
'L_SQL_CHOOSEACTION' => '',
'L_SQL_COLLATENOTMATCH' => '',
'L_SQL_COLUMNS' => '',
'L_SQL_COMMANDS' => '',
'L_SQL_COMMANDS_IN' => '',
'L_SQL_COMMANDS_IN2' => '',
'L_SQL_COPYDATADB' => '',
'L_SQL_COPYSDB' => '',
'L_SQL_COPYTABLE' => '',
'L_SQL_CREATED' => '',
'L_SQL_CREATEINDEX' => '',
'L_SQL_CREATETABLE' => '',
'L_SQL_DATAVIEW' => '',
'L_SQL_DBCOPY' => '',
'L_SQL_DBSCOPY' => '',
'L_SQL_DELETED' => '',
'L_SQL_DESTTABLE_EXISTS' => '',
'L_SQL_EDIT' => '',
'L_SQL_EDITFIELD' => '',
'L_SQL_EDIT_TABLESTRUCTURE' => '',
'L_SQL_EMPTYDB' => '',
'L_SQL_ERROR1' => '',
'L_SQL_ERROR2' => '',
'L_SQL_EXEC' => '',
'L_SQL_EXPORT' => '',
'L_SQL_FIELDDELETE1' => '',
'L_SQL_FIELDNAMENOTVALID' => '',
'L_SQL_FIRST' => '',
'L_SQL_IMEXPORT' => '',
'L_SQL_IMPORT' => '',
'L_SQL_INCOMPLETE_STATEMENT_DETECTED' => '',
'L_SQL_INDEXES' => '',
'L_SQL_INSERTFIELD' => '',
'L_SQL_INSERTNEWFIELD' => '',
'L_SQL_LIBRARY' => '',
'L_SQL_NAMEDEST_MISSING' => '',
'L_SQL_NEWFIELD' => '',
'L_SQL_NODATA' => '',
'L_SQL_NODEST_COPY' => '',
'L_SQL_NOFIELDDELETE' => '',
'L_SQL_NOTABLESINDB' => '',
'L_SQL_NOTABLESSELECTED' => '',
'L_SQL_OPENFILE' => '',
'L_SQL_OPENFILE_BUTTON' => '',
'L_SQL_OUT1' => '',
'L_SQL_OUT2' => '',
'L_SQL_OUT3' => '',
'L_SQL_OUT4' => '',
'L_SQL_OUT5' => '',
'L_SQL_OUTPUT' => '',
'L_SQL_QUERYENTRY' => '',
'L_SQL_RECORDDELETED' => '',
'L_SQL_RECORDEDIT' => '',
'L_SQL_RECORDINSERTED' => '',
'L_SQL_RECORDNEW' => '',
'L_SQL_RECORDUPDATED' => '',
'L_SQL_RENAMEDB' => '',
'L_SQL_RENAMEDTO' => '',
'L_SQL_SCOPY' => '',
'L_SQL_SEARCH' => '',
'L_SQL_SEARCHWORDS' => '',
'L_SQL_SELECTTABLE' => '',
'L_SQL_SERVER' => '',
'L_SQL_SHOWDATATABLE' => '',
'L_SQL_STRUCTUREDATA' => '',
'L_SQL_STRUCTUREONLY' => '',
'L_SQL_TABLEEMPTIED' => '',
'L_SQL_TABLEEMPTIEDKEYS' => '',
'L_SQL_TABLEINDEXES' => '',
'L_SQL_TABLENEW' => '',
'L_SQL_TABLENOINDEXES' => '',
'L_SQL_TABLENONAME' => '',
'L_SQL_TABLESOFDB' => '',
'L_SQL_TABLEVIEW' => '',
'L_SQL_TBLNAMEEMPTY' => '',
'L_SQL_TBLPROPSOF' => '',
'L_SQL_TCOPY' => '',
'L_SQL_UPLOADEDFILE' => '',
'L_SQL_VIEW_COMPACT' => '',
'L_SQL_VIEW_STANDARD' => '',
'L_SQL_VONINS' => '',
'L_SQL_WARNING' => '',
'L_SQL_WASCREATED' => '',
'L_SQL_WASEMPTIED' => '',
'L_STARTDUMP' => '',
'L_START_RESTORE_DB_FILE' => '',
'L_START_SQL_SEARCH' => '',
'L_STATUS' => '',
'L_STEP' => '',
'L_SUCCESS_CONFIGFILE_CREATED' => '',
'L_SUCCESS_DELETING_CONFIGFILE' => '',
'L_SUM_TOTAL' => '',
'L_TABLE' => '',
'L_TABLENAME' => '',
'L_TABLENAME_EXPLAIN' => '',
'L_TABLES' => '',
'L_TABLESELECTION' => '',
'L_TABLE_CREATE_SUCC' => '',
'L_TABLE_TYPE' => '',
'L_TESTCONNECTION' => '',
'L_THEME' => '',
'L_TIME' => '',
'L_TIMESTAMP' => '',
'L_TITLE_INDEX' => '',
'L_TITLE_KEY_FULLTEXT' => '',
'L_TITLE_KEY_PRIMARY' => '',
'L_TITLE_KEY_UNIQUE' => '',
'L_TITLE_MYSQL_HELP' => '',
'L_TITLE_NOKEY' => '',
'L_TITLE_SEARCH' => '',
'L_TITLE_SHOW_DATA' => '',
'L_TITLE_UPLOAD' => '',
'L_TO' => '',
'L_TOOLS' => '',
'L_TOOLS_TOOLBOX' => '',
'L_TRUNCATE' => '',
'L_TRUNCATE_DATABASE' => '',
'L_UNIT_KB' => '',
'L_UNIT_MB' => '',
'L_UNIT_PIXEL' => '',
'L_UNKNOWN' => '',
'L_UNKNOWN_SQLCOMMAND' => '',
'L_UPDATE' => '',
'L_UPDATE_CONNECTION_FAILED' => '',
'L_UPDATE_ERROR_RESPONSE' => '',
'L_UPTO' => '',
'L_USERNAME' => '',
'L_USE_SSL' => '',
'L_VALUE' => '',
'L_VERSIONSINFORMATIONEN' => '',
'L_VIEW' => '',
'L_VISIT_HOMEPAGE' => '',
'L_VOM' => '',
'L_WITH' => '',
'L_WITHATTACH' => '',
'L_WITHOUTATTACH' => '',
'L_WITHPRAEFIX' => '',
'L_WRONGCONNECTIONPARS' => '',
'L_WRONG_CONNECTIONPARS' => '',
'L_WRONG_RIGHTS' => '',
'L_YES' => '',
'L_ZEND_FRAMEWORK_VERSION' => '',
'L_ZEND_ID_ACCESS_NOT_A_DIRECTORY' => '',
'L_ZEND_ID_ACCESS_NOT_A_FILE' => '',
'L_ZEND_ID_ACCESS_NOT_A_LINK' => '',
'L_ZEND_ID_ACCESS_NOT_EXECUTABLE' => '',
'L_ZEND_ID_ACCESS_NOT_EXISTS' => '',
'L_ZEND_ID_ACCESS_NOT_READABLE' => '',
'L_ZEND_ID_ACCESS_NOT_UPLOADED' => '',
'L_ZEND_ID_ACCESS_NOT_WRITABLE' => '',
'L_ZEND_ID_DIGITS_INVALID' => '',
'L_ZEND_ID_DIGITS_STRING_EMPTY' => '',
'L_ZEND_ID_EMAIL_ADDRESS_DOT_ATOM' => '',
'L_ZEND_ID_EMAIL_ADDRESS_INVALID' => '',
'L_ZEND_ID_EMAIL_ADDRESS_INVALID_FORMAT' => '',
'L_ZEND_ID_EMAIL_ADDRESS_INVALID_HOSTNAME' => '',
'L_ZEND_ID_EMAIL_ADDRESS_INVALID_LOCAL_PART' => '',
'L_ZEND_ID_EMAIL_ADDRESS_INVALID_MX_RECORD' => '',
'L_ZEND_ID_EMAIL_ADDRESS_INVALID_SEGMENT' => '',
'L_ZEND_ID_EMAIL_ADDRESS_LENGTH_EXCEEDED' => '',
'L_ZEND_ID_EMAIL_ADDRESS_QUOTED_STRING' => '',
'L_ZEND_ID_HOSTNAME_CANNOT_DECODE_PUNYCODE' => '',
'L_ZEND_ID_HOSTNAME_DASH_CHARACTER' => '',
'L_ZEND_ID_HOSTNAME_INVALID' => '',
'L_ZEND_ID_HOSTNAME_INVALID_HOSTNAME' => '',
'L_ZEND_ID_HOSTNAME_INVALID_HOSTNAME_SCHEMA' => '',
'L_ZEND_ID_HOSTNAME_INVALID_LOCAL_NAME' => '',
'L_ZEND_ID_HOSTNAME_INVALID_URI' => '',
'L_ZEND_ID_HOSTNAME_IP_ADDRESS_NOT_ALLOWED' => '',
'L_ZEND_ID_HOSTNAME_LOCAL_NAME_NOT_ALLOWED' => '',
'L_ZEND_ID_HOSTNAME_UNDECIPHERABLE_TLD' => '',
'L_ZEND_ID_HOSTNAME_UNKNOWN_TLD' => '',
'L_ZEND_ID_IS_EMPTY' => '',
'L_ZEND_ID_MISSING_TOKEN' => '',
'L_ZEND_ID_NOT_DIGITS' => '',
'L_ZEND_ID_NOT_EMPTY_INVALID' => '',
'L_ZEND_ID_NOT_SAME' => '',
);
return $lang;
