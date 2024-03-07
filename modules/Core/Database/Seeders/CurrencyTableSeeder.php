<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = $this->dataCurrency();

        foreach ($records as $record) {
            $response = factory(\Modules\Core\Models\Common\Currency::class)->create($record);
        } //Loop ends
    }

    private function dataCurrency()
    {
        return [
            ['iso_code' => 'AED','iso_digit' => '784','display_value' => 'United Arab Emirates dirham','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'AFN','iso_digit' => '971','display_value' => 'Afghan afghani','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ALL','iso_digit' => '008','display_value' => 'Albanian lek','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'AMD','iso_digit' => '051','display_value' => 'Armenian dram','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ANG','iso_digit' => '532','display_value' => 'Netherlands Antillean guilder','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'AOA','iso_digit' => '973','display_value' => 'Angolan kwanza','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ARS','iso_digit' => '032','display_value' => 'Argentine Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'AUD','iso_digit' => '036','display_value' => 'Australian Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'AWG','iso_digit' => '533','display_value' => 'Aruban florin','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'AZN','iso_digit' => '944','display_value' => 'Azerbaijani manat','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BAM','iso_digit' => '977','display_value' => 'Bosnia and Herzegovina convertible mark','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BBD','iso_digit' => '052','display_value' => 'Barbados Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BDT','iso_digit' => '050','display_value' => 'Bangladeshi taka','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BGN','iso_digit' => '975','display_value' => 'Bulgarian lev','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BHD','iso_digit' => '048','display_value' => 'Bahraini Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'BIF','iso_digit' => '108','display_value' => 'Burundian Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'BMD','iso_digit' => '060','display_value' => 'Bermudian Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BND','iso_digit' => '096','display_value' => 'Brunei Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BOB','iso_digit' => '068','display_value' => 'Boliviano','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BOV','iso_digit' => '984','display_value' => 'Bolivian Mvdol (funds code)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BRL','iso_digit' => '986','display_value' => 'Brazilian real','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BSD','iso_digit' => '044','display_value' => 'Bahamian Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BTN','iso_digit' => '064','display_value' => 'Bhutanese ngultrum','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BWP','iso_digit' => '072','display_value' => 'Botswana pula','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BYN','iso_digit' => '933','display_value' => 'Belarusian Ruble','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'BZD','iso_digit' => '084','display_value' => 'Belize Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CAD','iso_digit' => '124','display_value' => 'Canadian Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CDF','iso_digit' => '976','display_value' => 'Congolese Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CHE','iso_digit' => '947','display_value' => 'WIR Euro (complementary currency)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CHF','iso_digit' => '756','display_value' => 'Swiss Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CHW','iso_digit' => '948','display_value' => 'WIR Franc (complementary currency)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CLF','iso_digit' => '990','display_value' => 'Unidad de Fomento','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '4'],
            ['iso_code' => 'CLP','iso_digit' => '152','display_value' => 'Chilean Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'CNY','iso_digit' => '156','display_value' => 'Chinese Yuan','symbol' => '5143','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'COP','iso_digit' => '170','display_value' => 'Colombian Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'COU','iso_digit' => '970','display_value' => 'Unidad de Valor Real (UVR) (funds code)[8]','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CRC','iso_digit' => '188','display_value' => 'Costa Rican colon','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CUC','iso_digit' => '931','display_value' => 'Cuban convertible Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CUP','iso_digit' => '192','display_value' => 'Cuban Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CVE','iso_digit' => '132','display_value' => 'Cape Verdean escudo','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'CZK','iso_digit' => '203','display_value' => 'Czech koruna','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'DJF','iso_digit' => '262','display_value' => 'Djiboutian Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'DKK','iso_digit' => '208','display_value' => 'Danish Krone','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'DOP','iso_digit' => '214','display_value' => 'Dominican Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'DZD','iso_digit' => '012','display_value' => 'Algerian Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'EGP','iso_digit' => '818','display_value' => 'Egyptian Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ERN','iso_digit' => '232','display_value' => 'Eritrean nakfa','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ETB','iso_digit' => '230','display_value' => 'Ethiopian birr','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'EUR','iso_digit' => '978','display_value' => 'Euro','symbol' => '20AC','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'FJD','iso_digit' => '242','display_value' => 'Fiji Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'FKP','iso_digit' => '238','display_value' => 'Falkland Islands Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GBP','iso_digit' => '826','display_value' => 'Pound sterling','symbol' => '00A3','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GEL','iso_digit' => '981','display_value' => 'Georgian lari','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GHS','iso_digit' => '936','display_value' => 'Ghanaian cedi','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GIP','iso_digit' => '292','display_value' => 'Gibraltar Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GMD','iso_digit' => '270','display_value' => 'Gambian dalasi','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GNF','iso_digit' => '324','display_value' => 'Guinean Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'GTQ','iso_digit' => '320','display_value' => 'Guatemalan quetzal','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'GYD','iso_digit' => '328','display_value' => 'Guyanese Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'HKD','iso_digit' => '344','display_value' => 'Hong Kong Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'HNL','iso_digit' => '340','display_value' => 'Honduran lempira','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'HRK','iso_digit' => '191','display_value' => 'Croatian kuna','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'HTG','iso_digit' => '332','display_value' => 'Haitian gourde','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'HUF','iso_digit' => '348','display_value' => 'Hungarian forint','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'IDR','iso_digit' => '360','display_value' => 'Indonesian rupiah','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ILS','iso_digit' => '376','display_value' => 'Israeli new shekel','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'INR','iso_digit' => '356','display_value' => 'Indian Rupee','symbol' => '20B9','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'IQD','iso_digit' => '368','display_value' => 'Iraqi Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'IRR','iso_digit' => '364','display_value' => 'Iranian Rial','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ISK','iso_digit' => '352','display_value' => 'Icelandic króna','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'JMD','iso_digit' => '388','display_value' => 'Jamaican Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'JOD','iso_digit' => '400','display_value' => 'Jordanian Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'JPY','iso_digit' => '392','display_value' => 'Japanese Yen','symbol' => '00A5','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'KES','iso_digit' => '404','display_value' => 'Kenyan Shilling','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'KGS','iso_digit' => '417','display_value' => 'Kyrgyzstani som','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'KHR','iso_digit' => '116','display_value' => 'Cambodian riel','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'KMF','iso_digit' => '174','display_value' => 'Comoro Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'KPW','iso_digit' => '408','display_value' => 'North Korean won','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'KRW','iso_digit' => '410','display_value' => 'South Korean won','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'KWD','iso_digit' => '414','display_value' => 'Kuwaiti Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'KYD','iso_digit' => '136','display_value' => 'Cayman Islands Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'KZT','iso_digit' => '398','display_value' => 'Kazakhstani tenge','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'LAK','iso_digit' => '418','display_value' => 'Lao kip','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'LBP','iso_digit' => '422','display_value' => 'Lebanese Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'LKR','iso_digit' => '144','display_value' => 'Sri Lankan Rupee','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'LRD','iso_digit' => '430','display_value' => 'Liberian Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'LSL','iso_digit' => '426','display_value' => 'Lesotho loti','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'LYD','iso_digit' => '434','display_value' => 'Libyan Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'MAD','iso_digit' => '504','display_value' => 'Moroccan dirham','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MDL','iso_digit' => '498','display_value' => 'Moldovan leu','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MGA','iso_digit' => '969','display_value' => 'Malagasy ariary','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MKD','iso_digit' => '807','display_value' => 'Macedonian denar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MMK','iso_digit' => '104','display_value' => 'Myanmar Kyat','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MNT','iso_digit' => '496','display_value' => 'Mongolian tögrög','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MOP','iso_digit' => '446','display_value' => 'Macanese pataca','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MRU','iso_digit' => '929','display_value' => 'Mauritanian ouguiya','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MUR','iso_digit' => '480','display_value' => 'Mauritian Rupee','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MVR','iso_digit' => '462','display_value' => 'Maldivian rufiyaa','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MWK','iso_digit' => '454','display_value' => 'Malawian kwacha','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MXN','iso_digit' => '484','display_value' => 'Mexican Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MXV','iso_digit' => '979','display_value' => 'Mexican Unidad de Inversion (UDI) (funds code)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MYR','iso_digit' => '458','display_value' => 'Malaysian ringgit','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'MZN','iso_digit' => '943','display_value' => 'Mozambican metical','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'NAD','iso_digit' => '516','display_value' => 'Namibian Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'NGN','iso_digit' => '566','display_value' => 'Nigerian naira','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'NIO','iso_digit' => '558','display_value' => 'Nicaraguan córdoba','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'NOK','iso_digit' => '578','display_value' => 'Norwegian Krone','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'NPR','iso_digit' => '524','display_value' => 'Nepalese Rupee','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'NZD','iso_digit' => '554','display_value' => 'New Zealand Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'OMR','iso_digit' => '512','display_value' => 'Omani Rial','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'PAB','iso_digit' => '590','display_value' => 'Panamanian balboa','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'PEN','iso_digit' => '604','display_value' => 'Peruvian sol','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'PGK','iso_digit' => '598','display_value' => 'Papua New Guinean kina','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'PHP','iso_digit' => '608','display_value' => 'Philippine Peso[13]','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'PKR','iso_digit' => '586','display_value' => 'Pakistani Rupee','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'PLN','iso_digit' => '985','display_value' => 'Polish złoty','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'PYG','iso_digit' => '600','display_value' => 'Paraguayan guaraní','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'QAR','iso_digit' => '634','display_value' => 'Qatari Riyal','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'RON','iso_digit' => '946','display_value' => 'Romanian leu','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'RSD','iso_digit' => '941','display_value' => 'Serbian Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'RUB','iso_digit' => '643','display_value' => 'Russian Ruble','symbol' => '20BD','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'RWF','iso_digit' => '646','display_value' => 'Rwandan Franc','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'SAR','iso_digit' => '682','display_value' => 'Saudi Riyal','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SBD','iso_digit' => '090','display_value' => 'Solomon Islands Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SCR','iso_digit' => '690','display_value' => 'Seychelles Rupee','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SDG','iso_digit' => '938','display_value' => 'Sudanese Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SEK','iso_digit' => '752','display_value' => 'Swedish krona/kronor','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SGD','iso_digit' => '702','display_value' => 'Singapore Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SHP','iso_digit' => '654','display_value' => 'Saint Helena Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SLL','iso_digit' => '694','display_value' => 'Sierra Leonean leone','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SOS','iso_digit' => '706','display_value' => 'Somali Shilling','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SRD','iso_digit' => '968','display_value' => 'Surinamese Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SSP','iso_digit' => '728','display_value' => 'South Sudanese Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'STN','iso_digit' => '930','display_value' => 'São Tomé and Príncipe dobra','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SVC','iso_digit' => '222','display_value' => 'Salvadoran colón','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SYP','iso_digit' => '760','display_value' => 'Syrian Pound','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'SZL','iso_digit' => '748','display_value' => 'Swazi lilangeni','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'THB','iso_digit' => '764','display_value' => 'Thai baht','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TJS','iso_digit' => '972','display_value' => 'Tajikistani somoni','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TMT','iso_digit' => '934','display_value' => 'Turkmenistan manat','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TND','iso_digit' => '788','display_value' => 'Tunisian Dinar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '3'],
            ['iso_code' => 'TOP','iso_digit' => '776','display_value' => 'Tongan paʻanga','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TRY','iso_digit' => '949','display_value' => 'Turkish lira','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TTD','iso_digit' => '780','display_value' => 'Trinidad and Tobago Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TWD','iso_digit' => '901','display_value' => 'New Taiwan Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'TZS','iso_digit' => '834','display_value' => 'Tanzanian Shilling','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'UAH','iso_digit' => '980','display_value' => 'Ukrainian hryvnia','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'UGX','iso_digit' => '800','display_value' => 'Ugandan Shilling','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'USD','iso_digit' => '840','display_value' => 'United States Dollar','symbol' => '0024','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'USN','iso_digit' => '997','display_value' => 'United States Dollar (next day) (funds code)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'UYI','iso_digit' => '940','display_value' => 'Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'UYU','iso_digit' => '858','display_value' => 'Uruguayan Peso','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'UYW','iso_digit' => '927','display_value' => 'Unidad previsional[15]','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '4'],
            ['iso_code' => 'UZS','iso_digit' => '860','display_value' => 'Uzbekistan som','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'VES','iso_digit' => '928','display_value' => 'Venezuelan bolívar soberano[13]','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'VND','iso_digit' => '704','display_value' => 'Vietnamese đồng','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'VUV','iso_digit' => '548','display_value' => 'Vanuatu vatu','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'WST','iso_digit' => '882','display_value' => 'Samoan tala','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'XAF','iso_digit' => '950','display_value' => 'CFA Franc BEAC','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XAG','iso_digit' => '961','display_value' => 'Silver (one troy ounce)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XAU','iso_digit' => '959','display_value' => 'Gold (one troy ounce)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XBA','iso_digit' => '955','display_value' => 'European Composite Unit (EURCO) (bond market unit)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XBB','iso_digit' => '956','display_value' => 'European Monetary Unit (E.M.U.-6) (bond market unit)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XBC','iso_digit' => '957','display_value' => 'European Unit of Account 9 (E.U.A.-9) (bond market unit)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XBD','iso_digit' => '958','display_value' => 'European Unit of Account 17 (E.U.A.-17) (bond market unit)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XCD','iso_digit' => '951','display_value' => 'East Caribbean Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'XDR','iso_digit' => '960','display_value' => 'Special drawing rights','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XOF','iso_digit' => '952','display_value' => 'CFA Franc BCEAO','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XPD','iso_digit' => '964','display_value' => 'Palladium (one troy ounce)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XPF','iso_digit' => '953','display_value' => 'CFP Franc (Franc Pacifique)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XPT','iso_digit' => '962','display_value' => 'Platinum (one troy ounce)','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XSU','iso_digit' => '994','display_value' => 'SUCRE','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XTS','iso_digit' => '963','display_value' => 'Code reserved for testing','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XUA','iso_digit' => '965','display_value' => 'ADB Unit of Account','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'XXX','iso_digit' => '999','display_value' => 'No currency','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '0'],
            ['iso_code' => 'YER','iso_digit' => '886','display_value' => 'Yemeni Rial','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ZAR','iso_digit' => '710','display_value' => 'South African rand','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ZMW','iso_digit' => '967','display_value' => 'Zambian kwacha','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2'],
            ['iso_code' => 'ZWL','iso_digit' => '932','display_value' => 'Zimbabwean Dollar','symbol' => '','is_symbol_left_pos' => '1','decimal_places' => '2']
        ];
    } //Function ends
}
