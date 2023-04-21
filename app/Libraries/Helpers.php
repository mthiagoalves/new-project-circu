<?php

use Illuminate\Http\Request;

function checkCurrency($value)
{
    if ($value == "United States") {
        $currency = 2;
    } else if ($value == "China") {
        $currency = 3;
    } else {
        $currency = 1;
    }

    return $currency;
}

function checkCurrencyCountry($value)
{
    if ($value == "United States") {
        $currency = "dollars pricelist";
    } else if ($value == "China") {
        $currency = "china pricelist";
    } else {
        $currency = "euros pricelist";
    }

    return $currency;
}

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
}


class Locate
{
    public $country;
    public $state;
}

function get_country($ip)
{
    if (!(filter_var($ip, FILTER_VALIDATE_IP))) {
        return "Not a valid IP";
    }

    $countries = array(
        "AF" => "Afghanistan",
        "AX" => "Aland Islands",
        "AL" => "Albania",
        "DZ" => "Algeria",
        "AD" => "Andorra",
        "AO" => "Angola",
        "AI" => "Anguilla",
        "AQ" => "Antarctica",
        "AG" => "Antigua and Barbuda",
        "AR" => "Argentina",
        "AM" => "Armenia",
        "AW" => "Aruba",
        "AU" => "Australia",
        "AT" => "Austria",
        "AZ" => "Azerbaijan",
        "BS" => "Bahamas",
        "BH" => "Bahrain",
        "BD" => "Bangladesh",
        "BB" => "Barbados",
        "BY" => "Belarus",
        "BE" => "Belgium",
        "BZ" => "Belize",
        "BJ" => "Benin",
        "BM" => "Bermuda",
        "BT" => "Bhutan",
        "BO" => "Bolivia, Plurinational State of",
        "BQ" => "Bonaire, Sint Eustatius and Saba",
        "BA" => "Bosnia and Herzegovina",
        "BW" => "Botswana",
        "BV" => "Bouvet Island",
        "BR" => "Brazil",
        "IO" => "British Indian Ocean Territory",
        "BN" => "Brunei Darussalam",
        "BG" => "Bulgaria",
        "BF" => "Burkina Faso",
        "BI" => "Burundi",
        "KH" => "Cambodia",
        "CM" => "Cameroon",
        "CA" => "Canada",
        "CV" => "Cape Verde",
        "KY" => "Cayman Islands",
        "CF" => "Central African Republic",
        "TD" => "Chad",
        "CL" => "Chile",
        "CN" => "China",
        "TW" => "Chinese Taipei",
        "CX" => "Christmas Island",
        "CC" => "Cocos (Keeling) Islands",
        "CO" => "Colombia",
        "KM" => "Comoros",
        "CG" => "Congo",
        "CD" => "Congo, the Democratic Republic of the",
        "CK" => "Cook Islands",
        "CR" => "Costa Rica",
        "CI" => "Cote d'Ivoire",
        "HR" => "Croatia",
        "CU" => "Cuba",
        "CW" => "Curaçao",
        "CY" => "Cyprus",
        "CZ" => "Czech Republic",
        "DK" => "Denmark",
        "DJ" => "Djibouti",
        "DM" => "Dominica",
        "DO" => "Dominican Republic",
        "EC" => "Ecuador",
        "EG" => "Egypt",
        "SV" => "El Salvador",
        "GQ" => "Equatorial Guinea",
        "ER" => "Eritrea",
        "EE" => "Estonia",
        "ET" => "Ethiopia",
        "FK" => "Falkland Islands (Malvinas)",
        "FO" => "Faroe Islands",
        "FJ" => "Fiji",
        "FI" => "Finland",
        "FR" => "France",
        "GF" => "French Guiana",
        "PF" => "French Polynesia",
        "TF" => "French Southern Territories",
        "GA" => "Gabon",
        "GM" => "Gambia",
        "GE" => "Georgia",
        "DE" => "Germany",
        "GH" => "Ghana",
        "GI" => "Gibraltar",
        "GR" => "Greece",
        "GL" => "Greenland",
        "GD" => "Grenada",
        "GP" => "Guadeloupe",
        "GT" => "Guatemala",
        "GG" => "Guernsey",
        "GN" => "Guinea",
        "GW" => "Guinea-Bissau",
        "GY" => "Guyana",
        "HT" => "Haiti",
        "HM" => "Heard Island and McDonald Islands",
        "VA" => "Holy See (Vatican City State)",
        "HN" => "Honduras",
        "HU" => "Hungary",
        "IS" => "Iceland",
        "IN" => "India",
        "ID" => "Indonesia",
        "IR" => "Iran, Islamic Republic of",
        "IQ" => "Iraq",
        "IE" => "Ireland",
        "IM" => "Isle of Man",
        "IL" => "Israel",
        "IT" => "Italy",
        "JM" => "Jamaica",
        "JP" => "Japan",
        "JE" => "Jersey",
        "JO" => "Jordan",
        "KZ" => "Kazakhstan",
        "KE" => "Kenya",
        "KI" => "Kiribati",
        "KP" => "Korea, Democratic People’s Republic of",
        "KR" => "Korea, Republic of",
        "KW" => "Kuwait",
        "KG" => "Kyrgyzstan",
        "LA" => "Lao People’s Democratic Republic",
        "LV" => "Latvia",
        "LB" => "Lebanon",
        "LS" => "Lesotho",
        "LR" => "Liberia",
        "LY" => "Libya",
        "LI" => "Liechtenstein",
        "LT" => "Lithuania",
        "LU" => "Luxembourg",
        "MO" => "Macao",
        "MK" => "Macedonia, the former Yugoslav Republic of",
        "MG" => "Madagascar",
        "MW" => "Malawi",
        "MY" => "Malaysia",
        "MV" => "Maldives",
        "ML" => "Mali",
        "MT" => "Malta",
        "MQ" => "Martinique",
        "MR" => "Mauritania",
        "MU" => "Mauritius",
        "YT" => "Mayotte",
        "MX" => "Mexico",
        "MD" => "Moldova, Republic of",
        "MC" => "Monaco",
        "MN" => "Mongolia",
        "ME" => "Montenegro",
        "MS" => "Montserrat",
        "MA" => "Morocco",
        "MZ" => "Mozambique",
        "MM" => "Myanmar",
        "NA" => "Namibia",
        "NR" => "Nauru",
        "NP" => "Nepal",
        "NL" => "Netherlands",
        "NC" => "New Caledonia",
        "NZ" => "New Zealand",
        "NI" => "Nicaragua",
        "NE" => "Niger",
        "NG" => "Nigeria",
        "NU" => "Niue",
        "NF" => "Norfolk Island",
        "NO" => "Norway",
        "OM" => "Oman",
        "PK" => "Pakistan",
        "PS" => "Palestinian Territory, Occupied",
        "PA" => "Panama",
        "PG" => "Papua New Guinea",
        "PY" => "Paraguay",
        "PE" => "Peru",
        "PH" => "Philippines",
        "PN" => "Pitcairn",
        "PS" => "Palestine",
        "PL" => "Poland",
        "PT" => "Portugal",
        "PR" => "Puerto Rico",
        "QA" => "Qatar",
        "RE" => "Reunion",
        "RO" => "Romania",
        "RU" => "Russian Federation",
        "RW" => "Rwanda",
        "BL" => "Saint Barthélemy",
        "SH" => "Saint Helena, Ascension and Tristan da Cunha",
        "KN" => "Saint Kitts and Nevis",
        "LC" => "Saint Lucia",
        "MF" => "Saint Martin (French part)",
        "PM" => "Saint Pierre and Miquelon",
        "VC" => "Saint Vincent and the Grenadines",
        "WS" => "Samoa",
        "SM" => "San Marino",
        "ST" => "Sao Tome and Principe",
        "SA" => "Saudi Arabia",
        "SN" => "Senegal",
        "RS" => "Serbia",
        "SC" => "Seychelles",
        "SL" => "Sierra Leone",
        "SG" => "Singapore",
        "SX" => "Sint Maarten (Dutch part)",
        "SK" => "Slovakia",
        "SI" => "Slovenia",
        "SB" => "Solomon Islands",
        "SO" => "Somalia",
        "ZA" => "South Africa",
        "GS" => "South Georgia and the South Sandwich Islands",
        "SS" => "South Sudan",
        "ES" => "Spain",
        "LK" => "Sri Lanka",
        "SD" => "Sudan",
        "SR" => "Suriname",
        "SJ" => "Svalbard and Jan Mayen",
        "SZ" => "Swaziland",
        "SE" => "Sweden",
        "CH" => "Switzerland",
        "SY" => "Syrian Arab Republic",
        "TWN" => "Taiwan",
        "TJ" => "Tajikistan",
        "TZ" => "Tanzania, United Republic of",
        "TH" => "Thailand",
        "TL" => "Timor-Leste",
        "TG" => "Togo",
        "TK" => "Tokelau",
        "TO" => "Tonga",
        "TT" => "Trinidad and Tobago",
        "TN" => "Tunisia",
        "TR" => "Turkey",
        "TM" => "Turkmenistan",
        "TC" => "Turks and Caicos Islands",
        "TV" => "Tuvalu",
        "UG" => "Uganda",
        "UA" => "Ukraine",
        "AE" => "United Arab Emirates",
        "GB" => "United Kingdom",
        "US" => "United States",
        "UY" => "Uruguay",
        "UZ" => "Uzbekistan",
        "VU" => "Vanuatu",
        "VE" => "Venezuela, Bolivarian Republic of",
        "VN" => "Viet Nam",
        "VG" => "Virgin Islands, British",
        "WF" => "Wallis and Futuna",
        "EH" => "Western Sahara",
        "YE" => "Yemen",
        "ZM" => "Zambia",
        "ZW" => "Zimbabwe",
    );

    $ch = curl_init("http://freegeoip.net/json/{$ip}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);

    $locate = new Locate();
    $details = json_decode($content);
    array_key_exists($details->country_code, $countries) ?
        $locate->country = $countries[$details->country_code] : $locate->country = "";
    $details->country_code == 'US' ?
        $locate->state = $details->region_name : $locate->state = "";
    return $locate;
}

/**
 * [salesForce description]
 * @param  Request $request
 * @param  string  $lead_level
 * @param  [type]  $source
 * @param  string  $category
 * @param  string  $type
 * @param  string  $subType
 * @param  string  $interest
 * @return Boolean
 */

function salesForce(Request $request, $lead_level, $source, $category, $type, $subType, $interest = '', $more_info = '')
{

    // $local = get_country($_SERVER["REMOTE_ADDR"]);

    /*SalesForce*/
    $req = "&email=" . urlencode($request->get('email'));

    if ($request->has('name') != "") {
        $req .= "&first_name=" . urlencode($request->get('name'));
    }
    if ($request->has('last_name') != "") {
        $req .= "&first_name=" . urlencode($request->get('first_name'));
        $req .= "&last_name=" . urlencode($request->get('last_name'));
    }
    if ($request->has('country') != "") {
        $req .= "&country=" . urlencode($request->get('country'));
    }
    if ($request->has('state') != "") {
        $req .= "&state=" . urlencode($request->get('state'));
    }
    if ($request->has('city') != "") {
        $req .= "&city=" . urlencode($request->get('city'));
    }
    if ($request->has('company') != "") {
        $req .= "&company=" . urlencode($request->get('company'));
    }
    if ($request->has('phone') != "") {
        $req .= "&phone=" . urlencode($request->get('phone'));
    }
    if ($request->has('occupation') != "") {
        $req .= "&industry=" . urlencode($request->get('occupation'));
    }
    if ($request->has('hear_about') != "") {
        $req .= "&00Nb0000009UgZ5=" . urlencode($request->get('hear_about'));
    }
    if ($request->has('virtual_meeting') != "") {
        $req .= "&00N3W000000hv6g=" . urlencode("1");
    }
    if($request->has('more_info') != ""){
        $req .= "&00Nb0000009UgZF=" . urlencode($request->get('more_info'));
    }else {
        $req .= "&00Nb0000009UgZF=" . urlencode($more_info);
    }

    if($request->get('product_slug') == "catalogue-annual-sales"){
        $req .= "&tracking_campaign__c=" . 'CIRCU . ANNUAL SALES';
        $req .= "&Campaign_ID=" . '7013W000000LjZlQAK';
        $req .= "&member_status=" . 'Sent';
    }
    
    $parts = parse_url($_REQUEST["origin"]);

    if (isset($parts['query'])) {
        parse_str($parts['query'], $query);


        // if ($query['utm_campaign'] != "") {
        //     $req .= "&tracking_campaign__c=" . urlencode($query['utm_campaign']);
        // }
        if (isset($query['utm_campaign'])) {
            $req .= "&tracking_campaign__c=" . urlencode($query['utm_campaign']);
        }
        // if ($query['utm_source'] != "") {
        //     $req .= "&tracking_source__c=" . urlencode($query['utm_source']);
        // }
        if (isset($query['utm_source'])) {
            $req .= "&tracking_source__c=" . urlencode($query['utm_source']);
        }
        // if ($query['utm_content'] != "") {
        //     $req .= "&tracking_content__c=" . urlencode($query['utm_content']);
        // }
        if (isset($query['utm_content'])) {
            $req .= "&tracking_content__c=" . urlencode($query['utm_content']);
        }
        // if ($query['utm_medium'] != "") {
        //     $req .= "&tracking_medium__c=" . urlencode($query['utm_medium']);
        // }
        if (isset($query['utm_medium'])) {
            $req .= "&tracking_medium__c=" . urlencode($query['utm_medium']);
        }
        if (isset($query['utm_term'])) {
            $req .= "&tracking_term__c=" . urlencode($query['utm_term']);
        }
        // if($query['utm_term'] != "" && isset($query['utm_term'])){
        //      $req .= "&tracking_term__c=" . urlencode($query['utm_term']);
        // }
    }

    $req .= "&00Nb0000009UgZA=" . urlencode($interest);
    $req .= "&00Nb0000009UgZK=" . urlencode($lead_level);
    $req .= "&00N0X00000ADb34=" . urlencode($request->get('origin'));
    $req .= "&00N0X00000ALg1H=" . urlencode($request->get('referrer'));
    $req .= "&00N0X00000ALg1M=" . $_SERVER['HTTP_REFERER'];
    //source
    $req .= "&00Nb000000A1ZxB=" . urlencode($source);
    //category
    $req .= "&00Nb000000A1ZxG=" . urlencode($category);
    //type
    $req .= "&00Nb000000A1ZxV=" . urlencode($type);
    //subtype
    $req .= "&00Nb000000A1Zxf=" . urlencode($subType);
    $req .= "&00Nb000000A9e0M=" . "Circu";
    $req .= "&debug=" . urlencode("1");
    $req .= "&debugEmail=" . "teste.ruben02@gmail.com";
    $req .= "&oid=" . urlencode("00Db0000000ckMX");
    $url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
    $ch = curl_init();
    //set the url,POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    //execute
    $result_sf = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch) . '<br>';
    }
    curl_close($ch);
    /*--------------------------*/

    return true;
}

class ImpactData
{
    protected $source;
    protected $token;
    protected $hostEndPoint;
    protected $hostName;
    protected $ip;
    protected $browserLanguage;
    protected $countryDetected;
    protected $regionDetected;
    /**
     * Constructor with config file from services
     * @param [type] $config
     */
    public function __construct()
    {

        $this->source = 1;
        $this->token = 'R5x8jhBRKUGXmpTLNT9BxYXLfLRfuRzP';
        //$this->hostEndPoint='http://176.221.37.155/api/register';
        $this->hostEndPoint = 'https://impact.webuzz.com.pt/api/register';
        $this->hostName = 'impact.webuzz.com.pt';
        $this->ip = $this->getUserIP();
        $this->browserLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    /**
     * gets the array data fields to send and returns the response from server
     * @return Json
     */

    public function send($jsonContent)
    {
        $jsonContent['source']           = $this->source;
        $jsonContent['token']            = $this->token;
        $jsonContent['ip']               = $this->ip;
        $jsonContent['browser_language'] = $this->browserLanguage;

        $curl_lead = curl_init();

        curl_setopt_array($curl_lead, array(
            CURLOPT_URL            => $this->hostEndPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => array('Host: ' . $this->hostName),
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($jsonContent),
        ));

        $response = curl_exec($curl_lead);
        $err      = curl_error($curl_lead);

        curl_close($curl_lead);

        if ($err) {
            return "cURL Error #:" . $err;
            die();
        }

        return $response;
    }

    private function getUserIP()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }
}
