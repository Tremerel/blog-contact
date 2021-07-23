<?php
    @ini_set('display_errors', 'on');

    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', '49879d426319a7c8a26f27aa5148dcac');
    define('API_PRIVATE_KEY', 'ddf642dd489fec0453b1c06c313e71b5');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "kevintremerel@gmail.com",
                                'Name' => "Kevin",
                        ],
                        'To' => [
                            [
                                'Email' => "kevintremerel@gmail.com",
                                    'Name' => "Kevin",
                            ]
                        ],
                        'Subject' => "My first Mailjet Email!",
                        'TextPart' => "$userName, $userEmail, $messageSubject, $message",
                    ]
                ]
            ];
                $response = $mj->post(Resources::$Email, ['body' => $body]);
                $response->success();
                header('Location:view/contact.php?status=success');
        }else{
            header('Location:view/contact.php?status=error');
        }

    }
else{
    header('location:view/contact.php');
    die();
}
