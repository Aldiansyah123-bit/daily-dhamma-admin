<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */
    'service_account' => [
        "type" => "service_account",
        "project_id" => "daily-dhamma-dev",
        "private_key_id" => "d6a158ed375d500a02ee42ca08ff4dcddfc83a5b",
        "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDDIMuN667gV80U\nK//6ZfXNTcigPfyGo9p6awUQT5E2YfMT7xCX0xV0KB9StIpHXTHziUCW5ky/102q\nmD2tatOkP/3GIt/dvamXJDd0hY5XzRYqcRbb32i2iYE1rQ7uUCO6mUWzzj2VBhet\nX1HO76joJD1UeqYx1gWTbkv2NiR/q5/1dZ56DWt9Fx32VzGQY6Wb5JQl/u0ibVPQ\nVzo+E0SMNvXh8qVkbsCFmUuNK/oE7JCuRsZ21UGsgkkzikQeWb9ELQI0xOjm4eP/\nAYG91YonxO+q4/AGQV2W+5EvU7zS42TDk75QUh6/FbGujgzVljBxbDa52KMVEyFr\ncN/V++urAgMBAAECggEABCkTfgKrzjxTTkvfTW/V0ckH3Ntg64QAuS/qQhT8zSTT\n71oWNWnxahbVM5IGUsJ/cF8+Bhmmi7V2JtT0l7THVAXcaWq+On/p1JGqC5roiyG2\nY8ch8LZciP4dtapZLMs17Yb29JJt0dr5CvteYmPyfTt+3UULWEKJ5Ao072zHG7u7\n28zV0gmdyy0lKFFzIyaipLRezMNoSW84kOnSSRM3b2qeGDnCFOtKte6uXyOUKLX4\nn6j1yi/A9PYO6vRupghJQooRjndFQdJyZng0DBgazjqXhaN6zCyhCCz3xrHGnCI9\n672ZmRt0sB1BRYSmQeKRMEYgj/sqJU2Tiax8oEH75QKBgQDzuYJ2ykOCq8MLUSGM\nCk3DDXqfuwYweQ7t0NJkhNzlJznzT0mxPbnS2CmggPnjpv1oCSZOXxsvSfArecda\n2L420qypdhMuMFx6v9/c71YqB+Gg768eprCtrqqyWJftzp4Q4lRfCse9pwlLwnwm\nTVK7sqLFle3NE7hjdVvyJt68PQKBgQDM9LNg19fdIXOglQCrePZzdb6RSyyS/7H3\nDqQCJJu1StU9aOdROaBBS3ScfWKK1LsHUTsOStHFNEHDt91+9+Ob68gQ76Qhp/VY\nv1rCwhcmv0EJC7XsF7yk7Mc6edpwfMe0sVlnSBHAX3FPwcO2xoGTFNWdnNQ2nI1Z\nKrjQZGY+BwKBgD2l4dMsTDFEQvyc0/B5Nrwsr6SxiNo/9L/Av0b/uGQaLPVXS9uS\nMmubk8Pue8bSmWx0TAUs11J50E8e6YcYJdz2IwhmPmnDf9DosbZPr6rH/ZFYryIA\npdX4xWKBOETFq4O3zAGSV32oP5izI/YIPvINOFDkIJdr8ortx4kTvek9AoGACuoV\nC1kzM6FuaOTGbls4tJlWlqIsM3/OWFu9PCf66sKbbHPDrb2l3RRJl3PN5ZrCgvc+\nb9poJVpNDkEiWHqW8lyyAMTiNrCdDibSjICNfxC8Q+ENxQ7WiunZCjInAcqDUAoJ\nushJubbbb+XfqEIV8GExpv0NCAN6O39c7CwMjc0CgYAInJoT1Nwhw/oC8cC1WFLN\nvvGul18M9A5OZA3k08IPvXO6kXi4wey3O4QDszeUSbXbL/q2XCuxxq9MkkiO4JKC\noX2sDf0mUAHSLf53yGvyuP/hS9i3M72y5BlgwO97+FORhYeFyVFUuLqSoU53Tpzk\nq+qogdJUacTir6j2nZRhAw==\n-----END PRIVATE KEY-----\n",
        "client_email" => "firebase-adminsdk-auafp@daily-dhamma-dev.iam.gserviceaccount.com",
        "client_id" => "112425182411270380477",
        "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
        "token_uri" => "https://oauth2.googleapis.com/token",
        "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
        "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-auafp%40daily-dhamma-dev.iam.gserviceaccount.com",
        "universe_domain" => "googleapis.com"
    ],

    'database_uri' => env('FIREBASE_DATABASE_URL'),

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

            'credentials' => [
                "type" => "service_account",
                "project_id" => "daily-dhamma-dev",
                "private_key_id" => "d6a158ed375d500a02ee42ca08ff4dcddfc83a5b",
                "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDDIMuN667gV80U\nK//6ZfXNTcigPfyGo9p6awUQT5E2YfMT7xCX0xV0KB9StIpHXTHziUCW5ky/102q\nmD2tatOkP/3GIt/dvamXJDd0hY5XzRYqcRbb32i2iYE1rQ7uUCO6mUWzzj2VBhet\nX1HO76joJD1UeqYx1gWTbkv2NiR/q5/1dZ56DWt9Fx32VzGQY6Wb5JQl/u0ibVPQ\nVzo+E0SMNvXh8qVkbsCFmUuNK/oE7JCuRsZ21UGsgkkzikQeWb9ELQI0xOjm4eP/\nAYG91YonxO+q4/AGQV2W+5EvU7zS42TDk75QUh6/FbGujgzVljBxbDa52KMVEyFr\ncN/V++urAgMBAAECggEABCkTfgKrzjxTTkvfTW/V0ckH3Ntg64QAuS/qQhT8zSTT\n71oWNWnxahbVM5IGUsJ/cF8+Bhmmi7V2JtT0l7THVAXcaWq+On/p1JGqC5roiyG2\nY8ch8LZciP4dtapZLMs17Yb29JJt0dr5CvteYmPyfTt+3UULWEKJ5Ao072zHG7u7\n28zV0gmdyy0lKFFzIyaipLRezMNoSW84kOnSSRM3b2qeGDnCFOtKte6uXyOUKLX4\nn6j1yi/A9PYO6vRupghJQooRjndFQdJyZng0DBgazjqXhaN6zCyhCCz3xrHGnCI9\n672ZmRt0sB1BRYSmQeKRMEYgj/sqJU2Tiax8oEH75QKBgQDzuYJ2ykOCq8MLUSGM\nCk3DDXqfuwYweQ7t0NJkhNzlJznzT0mxPbnS2CmggPnjpv1oCSZOXxsvSfArecda\n2L420qypdhMuMFx6v9/c71YqB+Gg768eprCtrqqyWJftzp4Q4lRfCse9pwlLwnwm\nTVK7sqLFle3NE7hjdVvyJt68PQKBgQDM9LNg19fdIXOglQCrePZzdb6RSyyS/7H3\nDqQCJJu1StU9aOdROaBBS3ScfWKK1LsHUTsOStHFNEHDt91+9+Ob68gQ76Qhp/VY\nv1rCwhcmv0EJC7XsF7yk7Mc6edpwfMe0sVlnSBHAX3FPwcO2xoGTFNWdnNQ2nI1Z\nKrjQZGY+BwKBgD2l4dMsTDFEQvyc0/B5Nrwsr6SxiNo/9L/Av0b/uGQaLPVXS9uS\nMmubk8Pue8bSmWx0TAUs11J50E8e6YcYJdz2IwhmPmnDf9DosbZPr6rH/ZFYryIA\npdX4xWKBOETFq4O3zAGSV32oP5izI/YIPvINOFDkIJdr8ortx4kTvek9AoGACuoV\nC1kzM6FuaOTGbls4tJlWlqIsM3/OWFu9PCf66sKbbHPDrb2l3RRJl3PN5ZrCgvc+\nb9poJVpNDkEiWHqW8lyyAMTiNrCdDibSjICNfxC8Q+ENxQ7WiunZCjInAcqDUAoJ\nushJubbbb+XfqEIV8GExpv0NCAN6O39c7CwMjc0CgYAInJoT1Nwhw/oC8cC1WFLN\nvvGul18M9A5OZA3k08IPvXO6kXi4wey3O4QDszeUSbXbL/q2XCuxxq9MkkiO4JKC\noX2sDf0mUAHSLf53yGvyuP/hS9i3M72y5BlgwO97+FORhYeFyVFUuLqSoU53Tpzk\nq+qogdJUacTir6j2nZRhAw==\n-----END PRIVATE KEY-----\n",
                "client_email" => "firebase-adminsdk-auafp@daily-dhamma-dev.iam.gserviceaccount.com",
                "client_id" => "112425182411270380477",
                "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
                "token_uri" => "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-auafp%40daily-dhamma-dev.iam.gserviceaccount.com",
                "universe_domain" => "googleapis.com"
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firestore Component
             * ------------------------------------------------------------------------
             */

            'firestore' => [

                /*
                 * If you want to access a Firestore database other than the default database,
                 * enter its name here.
                 *
                 * By default, the Firestore client will connect to the `(default)` database.
                 *
                 * https://firebase.google.com/docs/firestore/manage-databases
                 */

                // 'database' => env('FIREBASE_FIRESTORE_DATABASE'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
