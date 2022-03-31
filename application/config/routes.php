<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'User';

$route['partner'] = 'Partner/index';
$route['partner/adddeal'] = 'Partner/postDeal';
$route['partner/deals'] = 'Partner/allDeals';
$route['partner/mydeals'] = 'Partner/myDeals';
$route['partner/login'] = 'PartnerLogin/login'; 
$route['partnerlogin'] = 'PartnerLogin/loginForm'; 
$route['partnerlogin_api'] = 'PartnerLogin/login_post'; //Adnan (For Login)
$route['partnerregister_api'] = 'PartnerLogin/registration_post'; //Adnan (For registration)
$route['all-bookings/(:num)'] = 'PartnerLogin/allBookings/$1'; //Adnan (For all bookings of a user by id)
$route['partner/deal/(:num)'] = 'Partner/dealDetail/$1';
$route['partner/edit/(:num)'] = 'Partner/editDeal/$1';
$route['partner/edit/deal/image/(:num)'] = 'Partner/editDealImage/$1';
$route['partner/edit/deal/date/(:num)'] = 'Partner/editDealDate/$1';
$route['partner/edit/deal/inclusion/(:num)'] = 'Partner/editDealInclusion/$1';
$route['partner/edit/deal/delete/image/(:num)/(:num)'] = 'Partner/deleteDealImage/$1/$2';
$route['partner/edit/deal/delete/date/(:num)/(:num)'] = 'Partner/deleteDealDate/$1/$2';
$route['postdeal'] = 'Partner/postDealForm';
$route['editdealform/(:num)'] = 'Partner/editDealForm/$1';
$route['partner/learn-how-to-sell'] = 'Partner/learnHowToSell';
$route['partner/add-blogs'] = 'Partner/addBlogs';
$route['add/blog'] = 'Partner/submitBlog';
$route['show-blogs'] = 'Blogs/blogs';
$route['show-blog/(:num)'] = 'Blogs/blog/$1';
$route['partner/advertisement-plan'] = 'Partner/advertisementPlan';
$route['partner-help'] = 'Partner/partnerHelp';

/*******************BOOKING*******************/
$route['partner-booking/(:any)'] = 'Partner/booking/$1';
$route['partner-booking-form'] = 'PartnerBooking/booking_form/';

/*******************BOOKING*******************/

$route['partner-travpay'] = 'Partner/travPay';
$route['partner-travpay-add-money'] = 'Partner/addMoneyToWallet';

$route['partner-ppc'] = 'Partner/ppc';
$route['partner-buy'] = 'Partner/buyPage';
$route['partner-manage-leads'] = 'Partner/manageLeads';
$route['partner-purchase-leads'] = 'Partner/prchasedLeads';
$route['purchase-lead'] = 'Partner/purchaseleads';


$route['partner-contact/(:any)'] = 'Partner/contact/$1';
$route['partner-contact-form'] = 'Partner/contactForm/';
$route['wallet-transactions/(:any)'] = 'Partner/walletTransactions/$1';
// $route['transaction-details'] = 'Partner/transactionDetails/';
$route['transaction-details/(:any)'] = 'Partner/transactionDetails/$1';
$route['send-money-to-bank/(:any)'] = 'Partner/sendMoneyToBank/$1';
$route['send-money-to-bank-form-remit'] = 'Partner/sendMoneyToBankFormRemit/';
$route['send-money-to-bank-form-own'] = 'Partner/sendMoneyToBankFormOwn/';
$route['send-money-to-bank-form-request'] = 'Partner/sendMoneyToBankFormRequest/';
$route['all-payment-requests'] = 'Partner/paymentRequests/';
$route['client-settlement'] = 'Partner/client_settlement/';
$route['partner-booking-cancellation'] = 'Partner/cancellation_form/';
$route['client-settlement-form'] = 'Partner/client_settlement_form/';
$route['partner-booking-cancellation-form'] = 'Partner/cancellation_form_submit/';
$route['currency-tracker'] = 'Partner/currency_tracker/';
$route['partner-terminal'] = 'Partner/terminal_agent/';
$route['edit-partner-deal-price'] = 'Partner/edit_partner_deal_price/';
$route['PR/create-order/(:any)'] = 'PaymentRequest/createOrder/$1';
$route['PR/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)/(:any)']='PaymentRequest/fetchResponse/$1/$2/$3/$4/$5';
$route['rzp-add-money']='RazorPayPayment/createOrder';
$route['rzp-fetch-response/(:any)/(:any)/(:any)/(:any)']='RazorPayPayment/fetchResponse/$1/$2/$3/$4';


// $route['seller'] = 'Seller/index';
$route['seller/post-deal'] = 'Seller/postDeal';
$route['seller/post-deal-from'] = 'Seller/postDealForm';


/*********************************TREK*******************/

$route['seller-hastrek/post'] = 'HasTrek/post';
$route['generate-invoice/(:any)'] = 'Partner/generatePdf/$1';
$route['partner-agent-request-verification']='Partner/requestAgentVerification';
$route['partner-agent-request-verification-form']='Partner/requestAgentVerificationForm';

/*********************************TREK*******************/


$route['seller'] = 'Seller/index';
$route['seller/adddeal'] = 'Seller/postDeal';
$route['seller/deals'] = 'Seller/allDeals';
$route['seller/mydeals'] = 'Seller/myDeals';
$route['seller/login'] = 'SellerLogin/login';
$route['sellerlogin'] = 'SellerLogin/loginForm';

$route['seller/deal/(:num)'] = 'Seller/dealDetail/$1';
$route['seller/edit/(:num)'] = 'Seller/editDeal/$1';
$route['seller/edit/deal/image/(:num)'] = 'Seller/editDealImage/$1';
$route['seller/edit/deal/date/(:num)'] = 'Seller/editDealDate/$1';
$route['seller/edit/deal/inclusion/(:num)'] = 'Seller/editDealInclusion/$1';
$route['seller/edit/deal/delete/image/(:num)/(:num)'] = 'Seller/deleteDealImage/$1/$2';
$route['seller/edit/deal/delete/date/(:num)/(:num)'] = 'Seller/deleteDealDate/$1/$2';


$route['seller/learn-how-to-sell'] = 'Seller/learnHowToSell';
$route['seller/add-blogs'] = 'Seller/addBlogs';
$route['add/blog'] = 'Seller/submitBlog';
$route['show-blogs'] = 'Blogs/blogs';
$route['show-blog/(:num)'] = 'Blogs/blog/$1';
$route['seller/advertisement-plan'] = 'Seller/advertisementPlan';
$route['seller-help'] = 'Seller/partnerHelp';

$route['seller-travpay'] = 'Seller/travPay';
$route['seller-travpay-add-money'] = 'Seller/addMoneyToWallet';

$route['seller-ppc'] = 'Seller/ppc';
$route['seller-buy'] = 'Seller/buyPage';
$route['seller-manage-leads'] = 'Seller/manageLeads';
$route['seller-purchase-leads'] = 'Seller/prchasedLeads';
$route['purchase-lead'] = 'Seller/purchaseleads';


$route['seller-contact/(:any)'] = 'Seller/contact/$1';
$route['seller-contact-form'] = 'Seller/contactForm/';
$route['seller-wallet-transactions/(:any)'] = 'Seller/walletTransactions/$1';
// $route['transaction-details'] = 'Partner/transactionDetails/';
$route['seller-transaction-details/(:any)'] = 'Seller/transactionDetails/$1';
$route['seller-send-money-to-bank/(:any)'] = 'Seller/sendMoneyToBank/$1';
$route['seller-send-money-to-bank-form-remit'] = 'Seller/sendMoneyToBankFormRemit/';
$route['seller-send-money-to-bank-form-own'] = 'Seller/sendMoneyToBankFormOwn/';
$route['seller-send-money-to-bank-form-request'] = 'Seller/sendMoneyToBankFormRequest/';
$route['seller-all-payment-requests'] = 'Seller/paymentRequests/';
$route['seller-client-settlement'] = 'Seller/client_settlement/';
$route['seller-seller-booking-cancellation'] = 'Seller/cancellation_form/';
$route['seller-client-settlement-form'] = 'Seller/client_settlement_form/';
$route['seller-booking-cancellation-form'] = 'Seller/cancellation_form_submit/';
$route['seller-currency-tracker'] = 'Seller/currency_tracker/';
$route['seller-terminal'] = 'Seller/terminal_agent/';
$route['seller-edit-seller-deal-price'] = 'Seller/edit_partner_deal_price/';
$route['seller-PR/create-order/(:any)'] = 'PaymentRequest/createOrder/$1';
$route['seller-PR/rzp-fetch-response/(:any)/(:any)/(:any)/(:any)/(:any)']='PaymentRequest/fetchResponse/$1/$2/$3/$4/$5';
$route['seller-rzp-add-money']='SellerRazorPayPayment/createOrder';
$route['seller-rzp-fetch-response/(:any)/(:any)/(:any)/(:any)']='SellerRazorPayPayment/fetchResponse/$1/$2/$3/$4';


/*********************************FLIGHT START*******************/

$route['search-flight'] = 'Partner/searchFlight';
$route['search-result'] = 'Partner/flightSearchResult';
$route['traveller-details'] = 'Partner/flightTravellersDetails';
$route['app-image-options'] = 'Partner/appImageOptions';
$route['flight-app-image']['POST'] = 'Partner/flightAppImage';
$route['post-app-image']['POST'] = 'Partner/postAppImage';
$route['app-image-edit'] = 'Partner/editAppImageTable';
$route['app-image-update']['POST'] = 'Partner/updateAppImageTable';
$route['app-image-table'] = 'Partner/appImageTable';

/*********************************FLIGHT ENDS*******************/

// $route['seller'] = 'Seller/index';
$route['seller/post-deal'] = 'Seller/postDeal';
$route['seller/post-deal-from'] = 'Flight/postDealForm';


/*********************************TREK*******************/

$route['seller-hastrek/post'] = 'HasTrek/post';
$route['seller-generate-invoice/(:any)'] = 'Seller/generatePdf/$1';
$route['seller-agent-request-verification']='Seller/requestAgentVerification';
$route['seller-agent-request-verification-form']='Seller/requestAgentVerificationForm';

/*********************************TREK*******************/


$route['404_override'] = 'partner/login';
// $route['404_override'] = "errors/page_missing";

$route['translate_uri_dashes'] = FALSE;
