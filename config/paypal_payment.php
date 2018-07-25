<?php

return [
    # Define your application mode here
    'mode' => 'sandbox',

    # Account credentials from developer portal
    'account' => [
        'client_id' => env('PAYPAL_CLIENT_ID', 'AbWTim0GOk8nbzMeLOhuCXXCFeN-j95SS0OcRe_tlm75-RAjC1x5Om7PzbykDVpUPPOm0pg9ZRvHpECb'),
        'client_secret' => env('PAYPAL_CLIENT_SECRET', 'ELjZQT5VRdRR2BQ2XftuGEm1Nul-5ExqASG3MRngCQNz8PhKJ66Pi8rNiiR19oZPeFfs9OMkZfz-IneL'),
    ],

    # Connection Information
    'http' => [
        'connection_time_out' => 30,
        'retry' => 1,
    ],

    # Logging Information
    'log' => [
        'log_enabled' => true,

        # When using a relative path, the log file is created
        # relative to the .php file that is the entry point
        # for this request. You can also provide an absolute
        # path here
        'file_name' => '../PayPal.log',

        # Logging level can be one of FINE, INFO, WARN or ERROR
        # Logging is most verbose in the 'FINE' level and
        # decreases as you proceed towards ERROR
        'log_level' => 'FINE',
    ],
];
