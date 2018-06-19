##Introduction
Session option configuration in the previous PHP version is not flexible. We have to change the php.ini file. PHP 7 tries to solve this problem by introducing session start options.

* Explain the background and the problem of using sessions
* Discuss session start options
* Show by example how to use session start options

##Options
* lazy_write Option<br>
Only overwrite any session file is the session data has changed. Turned **ON** by default - better performance
* read_and_close Option<br>
The session data should be read and then the session should immediately be closed unchanged. Available only for **session_start** not php.ini - Avoid locking the session file

