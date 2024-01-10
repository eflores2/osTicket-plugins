<?php
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__file__).'/include');
return array(
    'id' =>             'auth:ldap', # notrans
    'version' =>        '0.6.3',
    'name' =>           /* trans */ 'LDAP Authentication and Lookup',
    'author' =>         'GSP Avengers',
    'description' =>    /* trans */ 'Provides a configurable authentication backend which works against Microsoft Active Directory and OpenLdap servers',
    'url' =>            'https://github.dev/eflores2/osTicket-plugin',
    'plugin' =>         'authentication.php:LdapAuthPlugin',
    'map' => array(
        'pear-pear.php.net/net_ldap2' => 'include'
    ),
);

?>
