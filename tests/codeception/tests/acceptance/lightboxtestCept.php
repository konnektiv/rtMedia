<?php

/**
* Scenario : To Check if the media is opening in Light Box.
* Pre-requisite : In backend - Goto rtMedia settings -> Display -> LIST MEDIA VIEW -> Use lightbox to display media. Assuming this option is on.
*/

    use Page\Login as LoginPage;
    use Page\UploadMedia as UploadMediaPage;
    use Page\Lightbox as LightboxPage;

    $userName = 'demo';
    $password = 'demo';

    $I = new AcceptanceTester($scenario);
    $I->wantTo('To check if the lightbox is enabled');

    $loginPage = new LoginPage($I);
    $loginPage->login($userName,$password);

    $uploadmedia = new UploadMediaPage($I);
    $uploadmedia->uploadMediaUsingStartUploadButton($userName);
    $uploadmedia->fisrtThumbnailMedia($I);

    $I->seeElement(LightboxPage::$closeButton);   //The close button will only be visible if the media is opened in Lightbox
    $I->click(LightboxPage::$closeButton);

?>
