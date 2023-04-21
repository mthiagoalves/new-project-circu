<?php

Route::get('/', 'FrontController@getHomepage')->name('homepage');

Route::get('/deals', 'FrontController@getDeals')->name('deals');

Route::get('/isaloni-milan', 'FrontController@getIsaloni')->name('isaloni-milan');

Route::get('/magical-month', 'FrontController@getMagicalWeek')->name('magicalweek');

Route::get('/modern-luxury', 'FrontController@getModernLuxuryNew')->name('modern-luxury');

Route::get('/mid-century', 'FrontController@getMidCenturyNew')->name('mid-century');

Route::get('/trends', 'FrontController@getTrendsNew')->name('trends');

Route::get('/products', 'FrontController@getAllProducts')->name('products');

//Route::get('/products/{product}', 'FrontController@getProduct')->name('product');

Route::get('/products/{product}', 'FrontController@getProduct')->name('product');

Route::get('/products/{product}/test', 'FrontController@getProductTest')->name('productTest');

Route::get('/collections/{collection}', 'FrontController@getCollection')->name('collection');

Route::get('/new-products', 'FrontController@getNewProducts')->name('new-products');

Route::get('/new-products-test', 'FrontController@getNewProductsTest')->name('new-products-test');

Route::get('/category/{category}', 'FrontController@getCategory')->name('category');

Route::get('/stocklist', 'FrontController@getStock')->name('stocklist');

Route::get('/showrooms', 'FrontController@getShowrooms')->name('showrooms');

Route::get('/parents-rooms', 'FrontController@getLandingParents')->name('landing.parents-room');

Route::get('/fresh-summer-sales', 'FrontController@getFreshSummerSales')->name('summer-sales');

Route::get('/circu-pick-your-color', 'FrontController@getLandingCarnival')->name('landing-carnival');

Route::get('/ebook/{ebook}', 'FrontController@getLandingEbook')->name('landing-ebook');

Route::get('/ebook/{ebook}/inspirations', 'FrontController@getLandingEbookPress')->name('landing-ebook-press');

Route::get('/test', 'FrontController@getTest');

Route::get('/finishesold', 'FrontController@getFinishes')->name('finishes-old');

Route::get('/finishes', 'FrontController@getFinishesNew')->name('finishes');

Route::get('/filter-samples/{product_slug}/{search_term}', [
    'uses' => 'FormsController@filterSamples',
    'as' => 'process-form.filterSamples'
]);


Route::get('/interior-design-service', 'FrontController@getIdServices')->name('id-services');

Route::get('/ra-ourhouses', 'FrontController@getRAourhouses')->name('ra-our-houses');

Route::get('/our-magical-rooms-old', 'FrontController@getOurHouses')->name('our-houses');

Route::get('/our-magical-rooms', 'FrontController@getOurHousesNew')->name('our-houses-new');

Route::get('/access-our-magical-rooms', 'FrontController@getAccessOurHousesNew')->name('access-our-houses-new');

Route::get('/our-magical-boy-room', 'FrontController@getOurHousesBoyRoom')->name('our-houses-boy-room');

Route::get('/our-magical-girl-room', 'FrontController@getOurHousesGirlRoom')->name('our-houses-girl-room');

Route::get('/goodnight-spaceman-room', 'FrontController@getOurHousesSpaceman')->name('spaceman-room');

Route::get('/jungle-fun-room', 'FrontController@getOurHousesJungleFun')->name('jungle-fun');

Route::get('/blossom-fairytale-bedroom', 'FrontController@getOurHousesMagicalRoom')->name('blossom-fairytale');

Route::get('/an-outer-space-mission-room', 'FrontController@getOurHousesOuterSpaceMission')->name('an-outer-space-mission-room');

Route::get('/an-undersea-adventure-by-bymura', 'FrontController@getOurHousesUnderseaAdventure')->name('an-undersea-adventure-by-bymura');

Route::get('/candyland-playroom', 'FrontController@getOurHousesCandyland')->name('candyland-playroom');

Route::get('/dreamhouse-adventures-bedroom', 'FrontController@getOurHousesDreamhouseAdventures')->name('dreamhouse-adventures-bedroom');

Route::get('/a-room-above-the-clouds', 'FrontController@getOurHousesRoomAboveClouds')->name('a-room-above-the-clouds');

Route::get('/green-mint-playroom', 'FrontController@getOurHousesRoomGreenMint')->name('green-mint-playroom');

Route::get('/the-multiverse-bedroom', 'FrontController@getOurHousesRoomTheMultiverseBedroom')->name('the-multiverse-bedroom');

Route::get('/circu-new-showroom', 'FrontController@getCircuNewShowroom')->name('circu-new-showroom');

Route::get('/contact-old', 'FrontController@getContact')->name('contact-old');

Route::get('/contact', 'FrontController@getContactNew')->name('contact');

Route::get('/about-old', 'FrontController@getAbout')->name('about-old');

Route::get('/about', 'FrontController@getAboutNew')->name('about');

Route::get('/download-catalogue', 'FrontController@getCatalogue')->name('catalogue');

Route::get('/download-catalogue-test', 'FrontController@getCatalogueTest')->name('catalogue-test');

Route::get('/download-inspirations-catalogue', 'FrontController@getInspirationsCatalogue')->name('inspirations-catalogue');

Route::get('/request-pricelist-old', 'FrontController@getPricelist')->name('pricelist-old');

Route::get('/request-pricelist', 'FrontController@getPricelistNew')->name('pricelist');

Route::get('/video', 'FrontController@getVideo')->name('video');

Route::get('/press-old', 'FrontController@getPressHome')->name('press-old');

Route::get('/press', 'FrontController@getPressHome2')->name('press');

Route::get('/press/press-clipping/{slug}', 'FrontController@getPressClippingSingle')->name('press-clipping');

Route::get('/press/press-releases/{slug}', 'FrontController@getPressReleaseSingle')->name('press-release');

Route::get('/projects', 'FrontController@getProjects')->name('projects');

Route::get('/projects/{slug}', 'FrontController@getProjectSingle')->name('project');

Route::get('/news/events/{year}/{event}', 'FrontController@getEventLanding')->name('event-landing');

Route::get('/halloween-discount-2018', 'FrontController@getHalloween')->name('event-landing');

Route::get('/modern-luxury-old', 'FrontController@getLandingClassic')->name('landing.classic');

Route::get('/mid-century-old', 'FrontController@getLandingMidCentury')->name('landing.classic');

Route::get('/latest-products', 'FrontController@getLandingNewProducts')->name('landing.newProducts');





Route::get('/pressroom', 'PressroomController@getHomepage')->name('pressroom.home');

Route::get('/pressroom/ambiences', 'PressroomController@getAmbiences')->name('pressroom.ambiences');

Route::get('/pressroom/magical-ambiences', 'PressroomController@getMagicalAmbiences')->name('pressroom.magical-ambiences');

Route::get('/pressroom/products', 'PressroomController@getAllProducts')->name('pressroom.products');

Route::get('/pressroom/products/{product}', 'PressroomController@getProduct')->name('pressroom.product');

Route::get('/pressroom/collections/{collection}', 'PressroomController@getCollection')->name('pressroom.collection');

Route::get('/pressroom/tradeshows/', 'PressroomController@getTradeshows')->name('pressroom.tradeshows');

Route::get('/pressroom/press-releases/', 'PressroomController@getAllPressReleases')->name('pressroom.press-releases');

Route::get('/pressroom/press-releases/{slug}', 'PressroomController@getPressReleaseSingle')->name('pressroom.press-release');

Route::get('/pressroom/press-clipping/', 'PressroomController@getAllPressClipping')->name('pressroom.all-press-clipping');

Route::get('/pressroom/press-clipping/{slug}', 'PressroomController@getPressClippingSingle')->name('pressroom.press-clipping');

Route::get('/pressroom/about/', 'PressroomController@getAbout')->name('pressroom.about');

Route::get('/pressroom/projects', 'PressroomController@getProjects')->name('pressroom.projects');

Route::get('/includes/modal-download-ebooks/{ebook}', 'FrontController@getModalEbooksCatalogues')->name('modal-ebooks-catalogues');

Route::get('/modal-new-test', 'FrontController@getModalNewTest')->name('modal-new-test');

Route::get('/modal-discount-deals-test', 'FrontController@getModalDiscountDeals')->name('modal-discount-deals-test');

Route::get('/modal-id-service', 'FrontController@getModalIdService')->name('modal-id-service');

Route::get('/modal-we-chat', 'FrontController@getModalWeChat')->name('modal-we-chat');

Route::get('/our-houses/modal-our-houses/', 'FrontController@getModalOurHouses')->name('modal-our-houses');

Route::get('/our-houses/modal-download-pricelist/', 'FrontController@getModalOurHousesDownloadPricelist')->name('modal-download-pricelist-our-houses');

Route::get('/our-houses/modal-get-project-price/', 'FrontController@getModalProjectPrice')->name('modal-get-project-price');

Route::get('/our-houses/modal-get-project-price-blossom/', 'FrontController@getModalProjectPriceBlossom')->name('modal-get-project-price-blossom');

Route::get('/our-houses/modal-get-project-price-outer-space-mission/', 'FrontController@getModalProjectPriceOuterSpaceMission')->name('modal-get-project-price-outer-space-mission');

Route::get('/our-houses/modal-get-project-price-undersea-adventure/', 'FrontController@getModalProjectPriceUnderseaAdventure')->name('modal-get-project-price-undersea-adventure');

Route::get('/our-houses/modal-get-project-price-dreamhouse/', 'FrontController@getModalProjectPriceDreamhouse')->name('modal-get-project-price-dreamhouse');

Route::get('/our-houses/modal-get-project-price-room-above-the-clouds/', 'FrontController@getModalProjectPriceRoomAboveClouds')->name('modal-get-project-price-room-above-the-clouds');

Route::get('/our-houses/modal-get-project-price-room-green-mint-playroom/', 'FrontController@getModalProjectPriceRoomGreenMint')->name('modal-get-project-price-room-green-mint-playroom');

Route::get('/our-houses/modal-get-project-price-candyland/', 'FrontController@getModalProjectPriceCandyland')->name('modal-get-project-price-candyland');

Route::get('/our-houses/modal-get-project-price-jungle-fun/', 'FrontController@getModalProjectPriceJungleFun')->name('modal-get-project-price-jungle-fun');

Route::get('/our-houses/modal-download-ebook/', 'FrontController@getModalOurHousesDownloadEbook')->name('modal-download-ebook-our-houses');

Route::get('/our-houses/modal-download-hr-images-boy/', 'FrontController@getModalOurHousesDownloadHrImagesBoy')->name('modal-download-hr-images-boy');

Route::get('/our-houses/modal-download-hr-images-girl/', 'FrontController@getModalOurHousesDownloadHrImagesGirl')->name('modal-download-hr-images-girl');

Route::get('/includes/modal-entrance-deals/', 'FrontController@getModalEntranceDeals')->name('modal-entrance-deals');

Route::get('/includes/modal-download-stocklist/', 'FrontController@getModalDownloadStocklist')->name('modal-download-stocklist');

Route::get('/includes/modal-download-pricelist/', 'FrontController@getModalDownloadPricelist')->name('modal-download-pricelist');

Route::get('/includes/modal-request-cuppon/', 'FrontController@getModalRequestCuppon')->name('modal-request-cuppon');

Route::get('/includes/modal-request-cuppon-bedroom-1/', 'FrontController@getModalRequestCupponBedroom1')->name('modal-request-cuppon-bedroom-1');

Route::get('/includes/modal-request-cuppon-bedroom-2/', 'FrontController@getModalRequestCupponBedroom2')->name('modal-request-cuppon-bedroom-2');

Route::get('/includes/modal-request-cuppon-bedroom-3/', 'FrontController@getModalRequestCupponBedroom3')->name('modal-request-cuppon-bedroom-3');

Route::get('/includes/modal-search', 'FrontController@getModalSearch')->name('modal-search');

Route::get('/includes/modal-download-moodboard/{moodboard}', 'FrontController@getModalDownloadMoodboard')->name('modal-download-moodboard');

Route::get('/includes/modal-finish-info/{finish}', 'FrontController@getModalFinishInfo')->name('modal-finish-info');

Route::get('/includes/modal-discount-xmas', 'FrontController@getModalDiscountXmas')->name('modal-discount-xmas');

Route::get('/includes/modal-product-price/{product}', 'FrontController@getModalProductPrice')->name('modal-product-price');

Route::get('/includes/modal-product-price-magical-month/{product}', 'FrontController@getModalProductPriceMagicalMonth')->name('modal-product-price-magical-month');

Route::get('/includes/modal-product-price-gum-chair', 'FrontController@getModalProductPriceGumChair')->name('modal-product-price-gum-chair');

Route::get('/includes/modal-download-history', 'FrontController@getModalDownloadStory')->name('modal-download-history');

Route::get('/includes/modal-subscribe', 'FrontController@getModalSubscribe')->name('modal-subscribe');

Route::get('/includes/modal-contact', 'FrontController@getModalContact')->name('modal-contact');

Route::get('/includes/modal-download-catalogo-2021', 'FrontController@getModalDownloadCatalogo')->name('modal-download-catalogo-2021');

Route::get('/includes/modal-download-catalogo-2022', 'FrontController@getModalDownloadCatalogo')->name('modal-download-catalogo-2022');

Route::get('/includes/modal-download-catalogo-2023', 'FrontController@getModalDownloadCatalogo')->name('modal-download-catalogo-2023');

Route::get('/includes/modal-campaign-price/{product}', 'FrontController@getModalCampaignPrice')->name('modal-campaign-price');

Route::get('/includes/modal-press-release/{slug}', 'FrontController@getModalPressRelease')->name('modal-press-release');

Route::get('/includes/modal-ebook/{ebook}', 'FrontController@getModalEbook')->name('modal-ebook');

Route::get('/includes/modal-hr-images/{slug}', 'FrontController@getModalHRImages')->name('modal-hr-images');

Route::get('/includes/modal-request-price/', 'FrontController@getModalRequestPrice')->name('modal-request-price');

//Route::get('/includes/modal-product-order.blade.php', function () { return view('includes.modal-product-order'); })->name('modal-product-order');

Route::get('/includes/modal-product-order/{product}', 'FrontController@getModalProductOrder')->name('modal-product-order');

// Route::get('/includes/modal-product-info.blade.php', function () { return view('includes.modal-product-info'); })->name('modal-product-info');

Route::get('/includes/modal-product-info/{product}', 'FrontController@getModalProductInfo')->name('modal-product-info');

Route::get('/includes/modal-product-costumize/{product}', 'FrontController@getModalProductCostumize')->name('modal-product-costumize');

Route::get('/includes/modal-product-3d/{product}', 'FrontController@getModalProduct3D')->name('modal-3d-product');

Route::get('/includes/modal-product-sheet/{product}', 'FrontController@getModalProductSheet')->name('modal-product-sheet');

Route::get('/includes/modal-new-product-preview/{name}', 'FrontController@getModalProductPreview')->name('modal-new-product-preview');

Route::get('/includes/modal-product-3d.blade.php', function () {
    return view('includes.modal-product-3d');
})->name('modal-product-3d');

Route::get('/includes/modal-popup/', 'FrontController@getModalPopup')->name('modal-popup');

Route::get('/includes/modal-exit/', 'FrontController@getModalPopupExit')->name('modal-popup-exit');

Route::get('/includes/modal-exit-our-magical-rooms/', 'FrontController@getModalPopupExitOurHouses')->name('modal-popup-exit-our-houses');

Route::get('/includes/modal-downloads-popup/{downloads}', 'FrontController@getModalDownloadsPopup')->name('modal-downloads-popup');


// Route::get('/includes/modal-book-meeting.blade.php', function () { return view('includes.modal-book-meeting'); })->name('modal-book-meeting');

Route::get('/includes/modal-book-meeting/{event}', 'FrontController@getModalBookAMeeting')->name('modal-book-meeting');

Route::get('/includes/modal-book-a-meeting/', 'FrontController@getModalBookMeeting')->name('modal-book-a-meeting');

// Route::get('/includes/modal-press-release.blade.php', function () { return view('includes.modal-press-release'); })->name('modal-press-release');

Route::get('/includes/modal-new-products.blade.php', function () {
    return view('includes.modal-new-products');
})->name('modal-new-products');

// process forms

Route::post('/process/vt-isaloni', 'FormsController@VTIsaloni')->name('process.vt-isaloni');

Route::post('/process/book-a-meeting', 'FormsController@BookAMeeting')->name('process.book-a-meeting');

Route::post('/process/id-service', 'FormsController@IdService')->name('process.id-service');

Route::post('/process/search', 'FormsController@getSearchPage')->name('process.search');

Route::post('/process/our-houses', 'FormsController@OurHouses')->name('process.our-houses');

Route::post('/process/book-appointment', 'FormsController@BookAppointment')->name('process.book-appointment');

Route::post('/process/our-houses-ebook', 'FormsController@OurHousesEbook')->name('process.our-houses-ebook');

Route::post('/process/ebook-new-our-houses', 'FormsController@EbookNewOurHouses')->name('process.ebook-new-our-houses');

Route::post('/process/hr-images-boy-our-houses', 'FormsController@HRImagesBoyOurHouses')->name('process.hr-images-boy-our-houses');

Route::post('/process/hr-images-girl-our-houses', 'FormsController@HRImagesGirlOurHouses')->name('process.hr-images-girl-our-houses');

Route::post('/process/pricelist-our-houses', 'FormsController@PricelistOurHouses')->name('process.pricelist-our-houses');

Route::post('/process/price-project', 'FormsController@PriceProjectOurHouses')->name('process.get-price-project');

Route::post('/process/subscribe', 'FormsController@subscribe')->name('process.subscribe');

Route::post('/process/discount-anniversary', 'FormsController@dicountAniversary')->name('process.discountanniversary');

Route::post('/process/subscribe-news', 'FormsController@subscribeFooter')->name('process.subscribe-footer');

Route::post('/process/catalogue', 'FormsController@catalogue')->name('process.catalogue');

Route::post('/process/ebook-rooms-new', 'FormsController@ebookRoomsNew')->name('process.ebookroomsnew');

Route::post('/process/ebook', 'FormsController@ebook')->name('process.ebook');

Route::post('/process/catalogue-new', 'FormsController@catalogueNew')->name('process.catalogue-new');

Route::post('/process/contact', 'FormsController@contact')->name('process.contact');

Route::post('/process/pricelist', 'FormsController@pricelist')->name('process.pricelist');

Route::post('/process/pricelist-banner', 'FormsController@pricelistBanner')->name('process.pricelist-banner');

Route::post('/process/pricelist-showroom', 'FormsController@pricelistShowroom')->name('process.pricelist-showroom');

Route::post('/process/pricelist-top', 'FormsController@pricelistPop')->name('process.pricelistPop');

Route::post('/process/catalogue-inspirations', 'FormsController@catalogueInspirations')->name('process.catalogue-inspirations');

Route::post('/process/download-story', 'FormsController@DownloadStory')->name('process.download-story');

Route::post('/process/download-catalogo-2022', 'FormsController@downloadCatalogue2023')->name('process.download-catalogo-2023');

Route::post('/process/download-moodboard/{moodboard}', 'FormsController@DownloadMoodboard')->name('process.download-moodboard');

Route::post('/process/discount-xmas/', 'FormsController@DiscountXmas')->name('process.discount-xmas');

Route::post('/process/product-price/{product}', 'FormsController@ProductPrice')->name('process.product-price');

Route::post('/process/product-price-magical-month/{product}', 'FormsController@ProductPriceMagicalMonth')->name('process.product-price-magical-month');

Route::post('/process/product-price-magical-month-gum-chair', 'FormsController@ProductPriceMagicalMonthGumChair')->name('process.product-price-magical-month-gum-chair');

Route::post('/process/campaign/{product}', 'FormsController@campaignSummerSales')->name('process.campaign');

// Route::post('/process/campaign', 'FormsController@campaignProductoftheWeek')->name('process.campaign');


Route::post('/process/entrance-deals', 'FormsController@EntranceDeals')->name('process.entrance-deals');

Route::post('/process/download-stocklist', 'FormsController@DownloadStocklist')->name('process.download-stocklist');

Route::post('/process/request-cuppon', 'FormsController@RequestCuppon')->name('process.request-cuppon');

Route::post('/process/request-cuppon-bedroom', 'FormsController@RequestCupponBedroom')->name('process.request-cuppon-bedroom');

Route::post('/process/sample-info/{finish}', 'FormsController@SampleInfo')->name('process.sample-info');

Route::post('/process/product-order/{product}', 'FormsController@ProductOrder')->name('process.product-order');

Route::post('/process/product-info/{product}', 'FormsController@ProductInfo')->name('process.product-info');

Route::post('/process/product-costumize/{product}', 'FormsController@ProductCostumize')->name('process.product-costumize');

Route::post('/process/new-product-preview/', 'FormsController@NewProductPreview')->name('process.new-product-preview');

Route::post('/process/product-downloads', 'FormsController@ProductDownloads')->name('process.product-downloads');

Route::post('/process/product-3d', 'FormsController@Product3D')->name('process.product-3d');

Route::post('/process/product-sheet', 'FormsController@ProductSheet')->name('process.product-sheet');

Route::post('/process/book-meeting', 'FormsController@bookMeeting')->name('process.book-meeting');

Route::post('/process/book-meeting-fair', 'FormsController@bookMeetingFair')->name('process.book-meeting-fair');

Route::post('/process/download-press-release', 'FormsController@pressRelease')->name('process.download-press-release');

Route::post('/process/download-pocket-new-products', 'FormsController@pocketNewProducts')->name('process.download-pocket-new-products');

Route::post('/process/press-register', 'FormsController@PressRegister')->name('process.press-register');

Route::post('/process/press-login', 'FormsController@PressLogin')->name('process.press-login');

Route::post('/process/press-logout', 'FormsController@PressLogout')->name('process.press-logout');

Route::post('/process/product-press-release', 'FormsController@productPressRelease')->name('process.productPressRelease');

Route::post('/process/product-customization', 'FormsController@productCustomization')->name('process.productCustomization');

Route::post('/process/product-moodboard', 'FormsController@productMoodboard')->name('process.productMoodboard');

Route::post('/process/digital-ebook', 'FormsController@downloadEbook')->name('process.downloadEbook');

Route::post('/process/download-ebooks-catalogues/{ebook}', 'FormsController@downloadEbook')->name('process.download-ebooks-catalogues');

Route::post('/process/download-high-resolution', 'FormsController@downloadHRImages')->name('process.downloadHRImages');

Route::post('/process/circu-pick-your-color', 'FormsController@campaignCarnival')->name('process.campaignCarnival');

Route::get('/process-forms/search', [
    'uses' => 'FormsController@search',
    'as' => 'process-form.search'
]);

Route::get('/searchPage', [
    'uses' => 'FormsController@getSearchPage',
    'as' => 'process-form.searchPage'
]);

Route::get('/filter/{search_term}', [
    'uses' => 'FormsController@filter',
    'as' => 'process-form.filterNew'
]);

Route::get('/filter-finishes/{search_terms}', [
    'uses' => 'FormsController@filterSamples',
    'as' => 'process-form.filterFinishesNew'
]);

Route::get('/all-products-initial', [
    'uses' => 'FrontController@Allproducts_initial',
    'as' => 'frontend.all-products-initial-new'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/privacy-policy', 'FrontController@getPrivacyPolicy')->name('privacy-policy');



// Thank you pages

Route::get('/actions/new-ebook-our-houses', 'FrontController@ThankYouPageNewEbookOurHouses')->name('actions.new-ebook-our-houses');

Route::get('/actions/pricelist-our-houses', 'FrontController@ThankYouPagePricelisOurHouses')->name('actions.pricelist-our-houses');

Route::get('/actions/download-3d', 'FrontController@ThankYouPageDownload3d')->name('actions.download-3d');

Route::get('/actions/catalogue', 'FrontController@ThankYouPageCatalogue')->name('actions.catalogue');

Route::get('/actions/download-sheet', 'FrontController@ThankYouPageProductSheet')->name('actions.download-sheet');

Route::get('/actions/get-price', 'FrontController@ThankYouPageGetprice')->name('actions.get-price');

Route::get('/actions/get-price-magical-month', 'FrontController@ThankYouPageGetpriceMagicalMonth')->name('actions.get-price-magical-month');

Route::get('/actions/info', 'FrontController@ThankYouPageInfo')->name('actions.info');

Route::get('/actions/book-meeting', 'FrontController@ThankYouPageBookMeeting')->name('actions.book-meeting');

Route::get('/actions/inspirations-book', 'FrontController@ThankYouPageInspbook')->name('actions.inspirations-book');

Route::get('/actions/newsletter', 'FrontController@ThankYouPageNewsletter')->name('actions.newsletter');

Route::get('/actions/pricelist', 'FrontController@ThankYouPagePricelist')->name('actions.pricelist');

Route::get('/actions/new-catalogue', 'FrontController@ThankYouPageNewCatalogue')->name('actions.new-catalogue');

Route::get('/actions/new-ebook', 'FrontController@ThankYouPageNewEbook')->name('actions.new-ebook');

Route::get('/actions/error', 'FrontController@ActionsError')->name('actions.error');

Route::get('/error500', 'FrontController@ActionsError500')->name('errors.500');

Route::get('/error404', 'FrontController@ActionsError404')->name('errors.404');

Route::get('/actions/download-press-release', 'FrontController@ActionsDownloadPressRelease')->name('actions.download-press-release');

Route::get('/actions/download-pocket', 'FrontController@ActionsPocketNewProducts')->name('actions.download-pocket-new-products');

Route::get('/actions/{product}-press-release', 'FrontController@ThankYouPageProductPressRelease')->name('actions.product-press-release');

Route::get('/actions/request-cuppon', 'FrontController@ThankYouPageRequestCuppon')->name('actions.request-cuppon');

Route::get('/actions/download-stocklist', 'FrontController@ThankYouPageDownloadStocklist')->name('actions.download-stocklist');

// NEW Thank you pages

Route::get('/action/info', 'FrontController@ThankYouPageContact')->name('action.info');

Route::get('/action/subscribe', 'FrontController@ThankYouPageSubscribe')->name('action.subscribe');

Route::get('/action/ebook', 'FrontController@ThankYouPageEbook')->name('action.ebook');

Route::get('/action/catalogue', 'FrontController@ThankYouPageCatalog')->name('action.catalogue');

Route::get('/action/pricelist', 'FrontController@ThankYouPagePriclist')->name('action.pricelist');

Route::get('/action/price-request', 'FrontController@ThankYouPagePriceResquest')->name('action.pricerequest');

Route::get('/action/get-info', 'FrontController@ThankYouPagePriceGentInfo')->name('action.getinfo');

Route::get('/action/spec-request', 'FrontController@ThankYouPageSpecRequest')->name('action.specrequest');


// AUTO REPLY
Route::get('/auto-reply/subscribe', 'FrontController@AutoReplySubscribe')->name('autoreply.subscribe');

Route::get('/auto-reply/info', 'FrontController@AutoReplyInfo')->name('autoreply.info');

Route::get('/auto-reply/pricelist/{currency}', 'FrontController@AutoReplyPricelist')->name('autoreply.pricelist');

Route::get('/auto-reply/stocklist', 'FrontController@AutoReplyStocklist')->name('autoreply.stocklist');

Route::get('/auto-reply/3d-file/{product}', 'FrontController@AutoReply3dFile')->name('autoreply.3d-file');

Route::get('/auto-reply/product-sheet/{product}', 'FrontController@AutoReplyProductSheet')->name('autoreply.product-sheet');

Route::get('/auto-reply/product-info/{product}', 'FrontController@AutoReplyProductInfo')->name('autoreply.product-info');

Route::get('/auto-reply/costumize/{product}', 'FrontController@AutoReplyCostum')->name('autoreply.costum');

Route::get('/auto-reply/get-price/{product}/{currency}', 'FrontController@getAutoResponseProduct')->name('autoresponseproduct');

Route::get('/auto-reply/moodboard/{moodboard}', 'FrontController@AutoReplyMoodboard')->name('autoreply.moodboard');

Route::get('/auto-reply/catalogue/{request}', 'FrontController@AutoReplyCatalogue')->name('autoreply.catalogue');

Route::get('/auto-reply/annual-sale', 'FrontController@AutoReplyAnnualSale')->name('autoreply.annual-sale');

Route::get('/auto-reply/spring-sale', 'FrontController@AutoReplySpringSale')->name('autoreply.spring-sale');

Route::get('/auto-reply/isaloni', 'FrontController@AutoReplyIsaloni')->name('autoreply.isaloni');

Route::get('/auto-reply/discount-xmas', 'FrontController@AutoReplyDiscountXmas')->name('autoreply.discount-xmas');

Route::get('/auto-reply/ebook/{request}', 'FrontController@AutoReplyEbook')->name('autoreply.ebook');

Route::get('/auto-reply/press/{request}', 'FrontController@AutoReplyPress')->name('autoreply.press');

Route::get('/auto-reply/press', 'FrontController@AutoReplyPressRegister')->name('autoreply.pressregister');

//thank you page
Route::get('/thank-you/products/', 'FrontController@ThankYouProducts')->name('thankyou.products');

//Inspirations (Room by Room)
Route::get('/inspirations-waiting', 'FrontController@showAllInspirations')->name('all-inspirations');

Route::get('/inspirations/{slug}', 'FrontController@showProjectClient')->name('show-project');

Route::get('/inspirations/{slug}/old', 'FrontController@showProjectClientWordpress')->name('show-project-old');

Route::get('/inspirations/category/boy-room', 'FrontController@getBoyRoomCategory')->name('boy-room-inspirations'); 

Route::get('/inspirations/category/girl-room', 'FrontController@getGirlRoomCategory')->name('girl-room-inspirations'); 

Route::get('/inspirations/category/play-room', 'FrontController@getPlayRoomCategory')->name('play-room-inspirations'); 

Route::get('/inspirations/category/study-area', 'FrontController@getStudyAreaCategory')->name('study-area-inspirations'); 

Route::get('/inspirations/category/living-room', 'FrontController@geLivingRoomCategory')->name('living-room-inspirations'); 

Route::get('/inspirations/category/nursery-room', 'FrontController@getNurseryRoomCategory')->name('nursery-room-inspirations'); 

Route::get('/inspirations/category/architecture', 'FrontController@getArchitectureCategory')->name('architecture-inspirations'); 

Route::get('/inspirations/category/lifestyle', 'FrontController@getLifestyleCategory')->name('lifestyle-inspirations'); 

Route::get('/dashboard/login', 'FrontController@backofficeLogin')->name('backoffice-login');

Route::post('/process/backoffice-login', 'FormsController@BackofficeLogin')->name('process.backoffice-login');

Route::post('/process/backoffice-logout', 'FormsController@BackofficeLogout')->name('process.backoffice-logout');

//Backoffice
Route::get('/dashboard', 'BackofficeController@getHomepageBackoffice')->name('backoffice.homepage');

Route::get('/dashboard/all-inspirations', 'BackofficeController@allInspirations')->name('backoffice.all-inspirations');

Route::get('/dashboard/new-project', 'BackofficeController@getNewProject')->name('backoffice.new-project');

Route::get('/dashboard/projects/{id}', 'BackofficeController@showProject')->name('backoffice.show-project');

Route::get('/dashboard/projects/edit/{id}', 'BackofficeController@editProject')->name('backoffice.edit-project');

Route::put('/dashboard/projects/update/{id}', 'BackofficeController@updateProject')->name('backoffice.update-project');

Route::match(['get', 'post'],'/dashboard/projects', 'BackofficeController@createNewProject')->name('process-create-new-project');

Route::get('/dashboard/new-projects-list', 'BackofficeController@newProjectList')->name('process-new-project-list');

Route::get('/dashboard/new-project-2', 'BackofficeController@getNewProject2')->name('backoffice.new-project-2');

Route::post('/dashboard/projects-2', 'BackofficeController@createNewProjectDetails')->name('process-create-new-project-2');

Route::delete('/dashboard/projects/{id}', 'BackofficeController@destroyProject')->name('process-delete-project');

Route::post('/dashboard/projects-2/image_upload', 'BackofficeController@uploadImagePost')->name('image-upload');

Route::post('/dashboard/projects/image_upload', 'BackofficeController@uploadImagePost1')->name('image-upload1');

Route::get('/dashboard/seo', 'BackofficeController@allSeo')->name('all-seo');

Route::get('/edit/seo/{id}', 'BackofficeController@editSeo')->name('edit-seo');

Route::put('/update/seo/{id}', 'BackofficeController@updateSeo')->name('update-seo');

Route::get('/dashboard/products', 'BackofficeController@getAllProducts')->name('backoffice-products');

Route::get('/dashboard/product/edit/{id}', 'BackofficeController@editProduct')->name('backoffice-edit-product');

Route::put('/dashboard/product/update/{id}', 'BackofficeController@updateProduct')->name('backoffice-update-product');

Route::post('/dashboard/product/stock/', 'BackofficeController@stocklistUpdate')->name('backoffice-update-stocklist');

Route::post('/dashboard/product/actived/', 'BackofficeController@activeProduct')->name('backoffice-update-active');

Route::get('/dashboard/stocklist', 'BackofficeController@stocklist')->name('backoffice-stocklist');

