<?php
Configure::write('Security.salt', 'TZ1kf5j5Dh5PGMB4P3EmLC9GfgC0mIiMmH4UidjD');
Configure::write('Security.cipherSeed', '04322011600765410553358697711');
Configure::write('Cache.disable', false);
Configure::write('Cache.check', true);
Configure::write('BcEnv.siteUrl', 'http://localhost:8888/basercms/');
Configure::write('BcEnv.sslUrl', '');
Configure::write('BcEnv.mainDomain', '');
Configure::write('BcApp.adminSsl', false);
Configure::write('BcApp.allowedPhpOtherThanAdmins', false);
Cache::config('default', array('engine' => 'File'));
Configure::write('debug', 0);