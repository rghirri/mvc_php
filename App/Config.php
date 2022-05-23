<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 5.4
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvc';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'cms-user';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'QZ2WnDeiD[EF.fcT';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = 'EWjiXVfsvxCkw2kVjNx691Xfv3GVlkma';

     /**
     * Mailgun API key
     *
     * @var string
     */
    const MAILGUN_API_KEY = '5b46888be40514e9f29406d55f4cbcf7-156db0f1-9a736318';

    /**
     * Mailgun domain
     *
     * @var string
     */
    const MAILGUN_DOMAIN = 'sandbox7f425967d1aa4a79a492f7acabe51bac.mailgun.org';
}