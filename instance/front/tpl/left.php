<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php print _U; ?>" style="color:#86B414"><img src="<?php print _MEDIA_URL ?>img/logo.png" style="height:25px;"/></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Status <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('') ?>">View conferences</a></li>
                    <li><a href="<?php l('') ?>">View participants</a></li>
                    <li><a href="<?php l('') ?>">View Conferencing Nodes</a></li>
                    <li><a href="<?php l('') ?>">View administrator log</a></li>
                    <li><a href="<?php l('') ?>">View support log</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">System Configuration <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('dns') ?>">DNS servers</a></li>
                    <li><a href="<?php l('ntp') ?>">NTP servers</a></li>
                    <li><a href="<?php l('') ?>">Syslog servers</a></li>
                    <li><a href="<?php l('vm_manager') ?>">VM Manager</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Platform configuration <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('') ?>">Locations</a></li>
                    <li><a href="<?php l('') ?>">Management Node</a></li>
                    <li><a href="<?php l('') ?>">Conferencing Nodes</a></li>
                    <li><a href="<?php l('') ?>">SNMP NMS</a></li>
                    <li><a href="<?php l('') ?>">H.323 Gatekeepers</a></li>
                    <li><a href="<?php l('') ?>">SIP Proxies</a></li>
                    <li><a href="<?php l('') ?>">TURN Servers Licenses</a></li>
                    <li><a href="<?php l('') ?>">TLS Certificates</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Virtual Meeting Room Configuration <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('conference') ?>">Virtual Meeting Room</a></li>
                    <li><a href="<?php l('conferencealiases') ?>">Aliases</a></li>
                    <li><a href="<?php l('') ?>">Automatically dialed participants</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilities <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('') ?>">Diagnostic snapshot</a></li>
                    <li><a href="<?php l('') ?>">Upgrade</a></li>
                </ul>
            </li>
            <li class=""><a href="<?php l('login?logout=1') ?>">Logout</a></li>
        </ul>
    </div>
</nav>


