<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Initialisation des pays.
 */
class CountryFixtures extends Fixture
{
    final public const COUNTRY_FR = 'country-fr';

    /**
     * <@inheritDoc>.
     */
    public function load(ObjectManager $manager): void
    {
        $countryLabels = [
            'FR' => 'France',
            'MC' => 'Monaco',
            'DE' => 'Allemagne',
            'BE' => 'Belgique',
            'ES' => 'Espagne',
            'IT' => 'Italie',
            'LU' => 'Luxembourg',
            'PT' => 'Portugal',
            'AF' => 'Afghanistan',
            'ZA' => 'Afrique du Sud',
            'AL' => 'Albanie',
            'DZ' => 'Algérie',
            'AD' => 'Andorre',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctique',
            'AG' => 'Antigua-et-Barbuda',
            'AN' => 'Antilles néerlandaises',
            'SA' => 'Arabie saoudite',
            'AR' => 'Argentine',
            'AM' => 'Arménie',
            'AW' => 'Aruba',
            'AU' => 'Australie',
            'AT' => 'Autriche',
            'AZ' => 'Azerbaïdjan',
            'BS' => 'Bahamas',
            'BH' => 'Bahreïn',
            'BD' => 'Bangladesh',
            'BB' => 'Barbade',
            'BY' => 'Bélarus',
            'BZ' => 'Belize',
            'BJ' => 'Bénin',
            'BM' => 'Bermudes',
            'BT' => 'Bhoutan',
            'BO' => 'Bolivie',
            'BA' => 'Bosnie-Herzégovine',
            'BW' => 'Botswana',
            'BR' => 'Brésil',
            'BN' => 'Brunéi Darussalam',
            'BG' => 'Bulgarie',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodge',
            'CM' => 'Cameroun',
            'CA' => 'Canada',
            'CV' => 'Cap-Vert',
            'EA' => 'Ceuta et Melilla',
            'CL' => 'Chili',
            'CN' => 'Chine',
            'CY' => 'Chypre',
            'CO' => 'Colombie',
            'KM' => 'Comores',
            'CG' => 'Congo-Brazzaville',
            'KP' => 'Corée du Nord',
            'KR' => 'Corée du Sud',
            'CR' => 'Costa Rica',
            'CI' => 'Côte d’Ivoire',
            'HR' => 'Croatie',
            'CU' => 'Cuba',
            'DK' => 'Danemark',
            'DG' => 'Diego Garcia',
            'DJ' => 'Djibouti',
            'DM' => 'Dominique',
            'EG' => 'Égypte',
            'SV' => 'El Salvador',
            'AE' => 'Émirats arabes unis',
            'EC' => 'Équateur',
            'ER' => 'Érythrée',
            'EE' => 'Estonie',
            'VA' => 'État de la Cité du Vatican',
            'FM' => 'États fédérés de Micronésie',
            'US' => 'États-Unis',
            'ET' => 'Éthiopie',
            'FJ' => 'Fidji',
            'FI' => 'Finlande',
            'GA' => 'Gabon',
            'GM' => 'Gambie',
            'GE' => 'Géorgie',
            'GS' => 'Géorgie du Sud et les îles Sandwich du Sud',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Grèce',
            'GD' => 'Grenade',
            'GL' => 'Groenland',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernesey',
            'GN' => 'Guinée',
            'GQ' => 'Guinée équatoriale',
            'GW' => 'Guinée-Bissau',
            'GY' => 'Guyana',
            'GF' => 'Guyane française',
            'HT' => 'Haïti',
            'HN' => 'Honduras',
            'HU' => 'Hongrie',
            'BV' => 'Île Bouvet',
            'CX' => 'Île Christmas',
            'CP' => 'Île Clipperton',
            'AC' => "Île de l'Ascension",
            'IM' => 'Île de Man',
            'NF' => 'Île Norfolk',
            'AX' => 'Îles Åland',
            'KY' => 'Îles Caïmans',
            'IC' => 'Îles Canaries',
            'CC' => 'Îles Cocos - Keeling',
            'CK' => 'Îles Cook',
            'FO' => 'Îles Féroé',
            'HM' => 'Îles Heard et MacDonald',
            'FK' => 'Îles Malouines',
            'MP' => 'Îles Mariannes du Nord',
            'MH' => 'Îles Marshall',
            'UM' => 'Îles Mineures Éloignées des États - Unis',
            'SB' => 'Îles Salomon',
            'TC' => 'Îles Turks et Caïques',
            'VG' => 'Îles Vierges britanniques',
            'VI' => 'Îles Vierges des États - Unis',
            'IN' => 'Inde',
            'ID' => 'Indonésie',
            'IQ' => 'Irak',
            'IR' => 'Iran',
            'IE' => 'Irlande',
            'IS' => 'Islande',
            'IL' => 'Israël',
            'JM' => 'Jamaïque',
            'JP' => 'Japon',
            'JE' => 'Jersey',
            'JO' => 'Jordanie',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KG' => 'Kirghizistan',
            'KI' => 'Kiribati',
            'KW' => 'Koweït',
            'LA' => 'Laos',
            'LS' => 'Lesotho',
            'LV' => 'Lettonie',
            'LB' => 'Liban',
            'LR' => 'Libéria',
            'LY' => 'Libye',
            'LI' => 'Liechtenstein',
            'LT' => 'Lituanie',
            'MK' => 'Macédoine',
            'MG' => 'Madagascar',
            'MY' => 'Malaisie',
            'MW' => 'Malawi',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malte',
            'MA' => 'Maroc',
            'MQ' => 'Martinique',
            'MU' => 'Maurice',
            'MR' => 'Mauritanie',
            'YT' => 'Mayotte',
            'MX' => 'Mexique',
            'MD' => 'Moldavie',
            'MN' => 'Mongolie',
            'ME' => 'Monténégro',
            'MS' => 'Montserrat',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibie',
            'NR' => 'Nauru',
            'NP' => 'Népal',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigéria',
            'NU' => 'Niue',
            'NO' => 'Norvège',
            'NC' => 'Nouvelle - Calédonie',
            'NZ' => 'Nouvelle - Zélande',
            'OM' => 'Oman',
            'UG' => 'Ouganda',
            'UZ' => 'Ouzbékistan',
            'PK' => 'Pakistan',
            'PW' => 'Palaos',
            'PA' => 'Panama',
            'PG' => 'Papouasie - Nouvelle - Guinée',
            'PY' => 'Paraguay',
            'NL' => 'Pays - Bas',
            'PE' => 'Pérou',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Pologne',
            'PF' => 'Polynésie française',
            'PR' => 'Porto Rico',
            'QA' => 'Qatar',
            'HK' => 'R . A . S . chinoise de Hong Kong',
            'MO' => 'R . A . S . chinoise de Macao',
            'QO' => 'régions éloignées de l’Océanie',
            'CF' => 'République centrafricaine',
            'CD' => 'République démocratique du Congo',
            'do' => 'République dominicaine',
            'CZ' => 'République tchèque',
            'RE' => 'Réunion',
            'RO' => 'Roumanie',
            'GB' => 'Royaume - Uni',
            'RU' => 'Russie',
            'RW' => 'Rwanda',
            'EH' => 'Sahara occidental',
            'BL' => 'Saint - Barthélémy',
            'KN' => 'Saint - Kitts - et - Nevis',
            'SM' => 'Saint - Marin',
            'MF' => 'Saint - Martin',
            'PM' => 'Saint - Pierre - et - Miquelon',
            'VC' => 'Saint - Vincent - et - les Grenadines',
            'SH' => 'Sainte - Hélène',
            'LC' => 'Sainte - Lucie',
            'WS' => 'Samoa',
            'as' => 'Samoa américaines',
            'ST' => 'Sao Tomé - et - Principe',
            'SN' => 'Sénégal',
            'RS' => 'Serbie',
            'CS' => 'Serbie - et - Monténégro',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapour',
            'SK' => 'Slovaquie',
            'SI' => 'Slovénie',
            'SO' => 'Somalie',
            'SD' => 'Soudan',
            'LK' => 'Sri Lanka',
            'SE' => 'Suède',
            'CH' => 'Suisse',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard et Île Jan Mayen',
            'SZ' => 'Swaziland',
            'SY' => 'Syrie',
            'TJ' => 'Tadjikistan',
            'TW' => 'Taïwan',
            'TZ' => 'Tanzanie',
            'TD' => 'Tchad',
            'TF' => 'Terres australes françaises',
            'IO' => "Territoire britannique de l'océan Indien",
            'PS' => 'Territoire palestinien',
            'TH' => 'Thaïlande',
            'TL' => 'Timor oriental',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinité-et-Tobago',
            'TA' => 'Tristan da Cunha',
            'TN' => 'Tunisie',
            'TM' => 'Turkménistan',
            'TR' => 'Turquie',
            'TV' => 'Tuvalu',
            'UA' => 'Ukraine',
            'EU' => 'Union européenne',
            'UY' => 'Uruguay',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Viêt Nam',
            'WF' => 'Wallis-et-Futuna',
            'YE' => 'Yémen',
            'ZM' => 'Zambie',
            'ZW' => 'Zimbabwe',
        ];

        $i = 0;

        foreach ($countryLabels as $code => $countryLabel) {
            $country = new Country();
            $country->setLabel($countryLabel);
            $country->setCode($code);
            $country->setPosition($i++);
            if ('FR' === $code) {
                $this->addReference(self::COUNTRY_FR, $country);
            }

            $manager->persist($country);
        }

        $manager->flush();
    }
}
