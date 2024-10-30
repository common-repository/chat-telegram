<?php

namespace Ctselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 *
 * Laamya elementor about page section widget.
 *
 * @since 1.0
 */
class Cts_Buttons extends Widget_Base
{

    public function get_name()
    {
        return 'cts-buttons';
    }

    public function get_title()
    {
        return esc_html__('Chat Telegram buttons', 'chat-telegram');
    }

    public function get_icon()
    {
        return 'eicon-headphones';
    }

    public function get_categories()
    {
        return ['cts-elements'];
    }

    protected function _register_controls()
    {


        // ----------------------------------------  Click to dial Buttons Settings ------------------------------

        $this->start_controls_section(
            'cts__general__settings',
            [
                'label' => esc_html__('General settings', 'chat-telegram'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'channel',
            [
                'label'     => esc_html__('Telegram Channgel/Group Link Name', 'chat-telegram'),
                'description' => esc_html__('Add your telegram chanel/group link name.', 'chat-telegram'),
                'label_block' => false,
                'default'   => 'telegram',
                'type'      => Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => esc_html__('Style', 'chat-telegram'),
                'type'  => Controls_Manager::SELECT,
                'label_block' => false,
                'default' => '1',
                'options' => array(
                    '1'  => esc_html__('Advanced button', 'chat-telegram'),
                    '2'  => esc_html__('Basic button', 'chat-telegram'),
                )

            ]
        );

        $this->add_control(
            'agent__photo',
            [
                'label' => esc_html__('Agent photo', 'chat-telegram'),
                'description' => esc_html__('Add agent photo to show in button.', 'chat-telegram'),
                'type'  => Controls_Manager::MEDIA,
                'label_block' => true,
                'default' => [
                    'url' => CTS_DIR_URL . 'assets/image/user.webp',
                ],
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'agent__name',
            [
                'label' => esc_html__('Agent name', 'chat-telegram'),
                'description' => esc_html__('Write agent name to show in button.', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('Robert', 'chat-telegram'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'agent__designation',
            [
                'label' => esc_html__('Agent designation', 'chat-telegram'),
                'description' => esc_html__('Write agent designation to show in button.', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('Sales Support', 'chat-telegram'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'custom__button__label',
            [
                'label' => esc_html__('Button label', 'chat-telegram'),
                'description' => esc_html__('Add custom button label.', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('How can I help you?', 'chat-telegram'),
            ]
        );

        $this->add_control(
            'online__text',
            [
                'label' => esc_html__('Online badget text', 'chat-telegram'),
                'description' => esc_html__('Add custom badget text when user in online.', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('I\'m avaiable', 'chat-telegram'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'offline__text',
            [
                'label' => esc_html__('Offline badget text', 'chat-telegram'),
                'description' => esc_html__('Add custom badget text when user in offline.', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('I\'m offline', 'chat-telegram'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->end_controls_section(); // End section top content


        $this->start_controls_section(
            'cts__availablity__manager',
            [
                'label' => esc_html__('Chat settings', 'chat-telegram'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'style' => '1',
                ],
            ]
        );



        $this->add_control(
            'timezone',
            [
                'label' => esc_html__('Timezone', 'chat-telegram'),
                'description' => esc_html__('When using the date and time from the user browser you can transform it to your current timezone (in case your user is in a different timezone)', 'chat-telegram'),
                'type'  => Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => false,
                'default' => '1',
                'options' => array(
                    '1' => esc_html__('Select timezone', 'chat-telegram'),
                    'Africa/Abidjan' => esc_html__('Africa/Abidjan', 'chat-telegram'),
                    'Africa/Accra' => esc_html__('Africa/Accra', 'chat-telegram'),
                    'Africa/Addis_Ababa' => esc_html__('Africa/Addis_Ababa', 'chat-telegram'),
                    'Africa/Algiers' => esc_html__('Africa/Algiers', 'chat-telegram'),
                    'Africa/Asmara' => esc_html__('Africa/Asmara', 'chat-telegram'),
                    'Africa/Asmera' => esc_html__('Africa/Asmera', 'chat-telegram'),
                    'Africa/Bamako' => esc_html__('Africa/Bamako', 'chat-telegram'),
                    'Africa/Bangui' => esc_html__('Africa/Bangui', 'chat-telegram'),
                    'Africa/Banjul' => esc_html__('Africa/Banjul', 'chat-telegram'),
                    'Africa/Bissau' => esc_html__('Africa/Bissau', 'chat-telegram'),
                    'Africa/Blantyre' => esc_html__('Africa/Blantyre', 'chat-telegram'),
                    'Africa/Brazzaville' => esc_html__('Africa/Brazzaville', 'chat-telegram'),
                    'Africa/Bujumbura' => esc_html__('Africa/Bujumbura', 'chat-telegram'),
                    'Africa/Cairo' => esc_html__('Africa/Cairo', 'chat-telegram'),
                    'Africa/Casablanca' => esc_html__('Africa/Casablanca', 'chat-telegram'),
                    'Africa/Ceuta' => esc_html__('Africa/Ceuta', 'chat-telegram'),
                    'Africa/Conakry' => esc_html__('Africa/Conakry', 'chat-telegram'),
                    'Africa/Dakar' => esc_html__('Africa/Dakar', 'chat-telegram'),
                    'Africa/Dar_es_Salaam' => esc_html__('Africa/Dar_es_Salaam', 'chat-telegram'),
                    'Africa/Djibouti' => esc_html__('Africa/Djibouti', 'chat-telegram'),
                    'Africa/Douala' => esc_html__('Africa/Douala', 'chat-telegram'),
                    'Africa/El_Aaiun' => esc_html__('Africa/El_Aaiun', 'chat-telegram'),
                    'Africa/Freetown' => esc_html__('Africa/Freetown', 'chat-telegram'),
                    'Africa/Gaborone' => esc_html__('Africa/Gaborone', 'chat-telegram'),
                    'Africa/Harare' => esc_html__('Africa/Harare', 'chat-telegram'),
                    'Africa/Johannesburg' => esc_html__('Africa/Johannesburg', 'chat-telegram'),
                    'Africa/Juba' => esc_html__('Africa/Juba', 'chat-telegram'),
                    'Africa/Kampala' => esc_html__('Africa/Kampala', 'chat-telegram'),
                    'Africa/Khartoum' => esc_html__('Africa/Khartoum', 'chat-telegram'),
                    'Africa/Kigali' => esc_html__('Africa/Kigali', 'chat-telegram'),
                    'Africa/Kinshasa' => esc_html__('Africa/Kinshasa', 'chat-telegram'),
                    'Africa/Lagos' => esc_html__('Africa/Lagos', 'chat-telegram'),
                    'Africa/Libreville' => esc_html__('Africa/Libreville', 'chat-telegram'),
                    'Africa/Lome' => esc_html__('Africa/Lome', 'chat-telegram'),
                    'Africa/Luanda' => esc_html__('Africa/Luanda', 'chat-telegram'),
                    'Africa/Lubumbashi' => esc_html__('Africa/Lubumbashi', 'chat-telegram'),
                    'Africa/Lusaka' => esc_html__('Africa/Lusaka', 'chat-telegram'),
                    'Africa/Malabo' => esc_html__('Africa/Malabo', 'chat-telegram'),
                    'Africa/Maputo' => esc_html__('Africa/Maputo', 'chat-telegram'),
                    'Africa/Maseru' => esc_html__('Africa/Maseru', 'chat-telegram'),
                    'Africa/Mbabane' => esc_html__('Africa/Mbabane', 'chat-telegram'),
                    'Africa/Mogadishu' => esc_html__('Africa/Mogadishu', 'chat-telegram'),
                    'Africa/Monrovia' => esc_html__('Africa/Monrovia', 'chat-telegram'),
                    'Africa/Nairobi' => esc_html__('Africa/Nairobi', 'chat-telegram'),
                    'Africa/Ndjamena' => esc_html__('Africa/Ndjamena', 'chat-telegram'),
                    'Africa/Niamey' => esc_html__('Africa/Niamey', 'chat-telegram'),
                    'Africa/Nouakchott' => esc_html__('Africa/Nouakchott', 'chat-telegram'),
                    'Africa/Ouagadougou' => esc_html__('Africa/Ouagadougou', 'chat-telegram'),
                    'Africa/Porto-Novo' => esc_html__('Africa/Porto-Novo', 'chat-telegram'),
                    'Africa/Sao_Tome' => esc_html__('Africa/Sao_Tome', 'chat-telegram'),
                    'Africa/Timbuktu' => esc_html__('Africa/Timbuktu', 'chat-telegram'),
                    'Africa/Tripoli' => esc_html__('Africa/Tripoli', 'chat-telegram'),
                    'Africa/Tunis' => esc_html__('Africa/Tunis', 'chat-telegram'),
                    'Africa/Windhoek' => esc_html__('Africa/Windhoek', 'chat-telegram'),
                    'America/Adak' => esc_html__('America/Adak', 'chat-telegram'),
                    'America/Anchorage' => esc_html__('America/Anchorage', 'chat-telegram'),
                    'America/Anguilla' => esc_html__('America/Anguilla', 'chat-telegram'),
                    'America/Antigua' => esc_html__('America/Antigua', 'chat-telegram'),
                    'America/Araguaina' => esc_html__('America/Araguaina', 'chat-telegram'),
                    'America/Argentina/Buenos_Aires' => esc_html__('America/Argentina/Buenos_Aires', 'chat-telegram'),
                    'America/Argentina/Catamarca' => esc_html__('America/Argentina/Catamarca', 'chat-telegram'),
                    'America/Argentina/ComodRivadavia' => esc_html__('America/Argentina/ComodRivadavia', 'chat-telegram'),
                    'America/Argentina/Cordoba' => esc_html__('America/Argentina/Cordoba', 'chat-telegram'),
                    'America/Argentina/Jujuy' => esc_html__('America/Argentina/Jujuy', 'chat-telegram'),
                    'America/Argentina/La_Rioja' => esc_html__('America/Argentina/La_Rioja', 'chat-telegram'),
                    'America/Argentina/Mendoza' => esc_html__('America/Argentina/Mendoza', 'chat-telegram'),
                    'America/Argentina/Rio_Gallegos' => esc_html__('America/Argentina/Rio_Gallegos', 'chat-telegram'),
                    'America/Argentina/Salta' => esc_html__('America/Argentina/Salta', 'chat-telegram'),
                    'America/Argentina/San_Juan' => esc_html__('America/Argentina/San_Juan', 'chat-telegram'),
                    'America/Argentina/San_Luis' => esc_html__('America/Argentina/San_Luis', 'chat-telegram'),
                    'America/Argentina/Tucuman' => esc_html__('America/Argentina/Tucuman', 'chat-telegram'),
                    'America/Argentina/Ushuaia' => esc_html__('America/Argentina/Ushuaia', 'chat-telegram'),
                    'America/Aruba' => esc_html__('America/Aruba', 'chat-telegram'),
                    'America/Asuncion' => esc_html__('America/Asuncion', 'chat-telegram'),
                    'America/Atikokan' => esc_html__('America/Atikokan', 'chat-telegram'),
                    'America/Atka' => esc_html__('America/Atka', 'chat-telegram'),
                    'America/Bahia' => esc_html__('America/Bahia', 'chat-telegram'),
                    'America/Bahia_Banderas' => esc_html__('America/Bahia_Banderas', 'chat-telegram'),
                    'America/Barbados' => esc_html__('America/Barbados', 'chat-telegram'),
                    'America/Belem' => esc_html__('America/Belem', 'chat-telegram'),
                    'America/Belize' => esc_html__('America/Belize', 'chat-telegram'),
                    'America/Blanc-Sablon' => esc_html__('America/Blanc-Sablon', 'chat-telegram'),
                    'America/Boa_Vista' => esc_html__('America/Boa_Vista', 'chat-telegram'),
                    'America/Bogota' => esc_html__('America/Bogota', 'chat-telegram'),
                    'America/Boise' => esc_html__('America/Boise', 'chat-telegram'),
                    'America/Buenos_Aires' => esc_html__('America/Buenos_Aires', 'chat-telegram'),
                    'America/Cambridge_Bay' => esc_html__('America/Cambridge_Bay', 'chat-telegram'),
                    'America/Campo_Grande' => esc_html__('America/Campo_Grande', 'chat-telegram'),
                    'America/Cancun' => esc_html__('America/Cancun', 'chat-telegram'),
                    'America/Caracas' => esc_html__('America/Caracas', 'chat-telegram'),
                    'America/Catamarca' => esc_html__('America/Catamarca', 'chat-telegram'),
                    'America/Cayenne' => esc_html__('America/Cayenne', 'chat-telegram'),
                    'America/Cayman' => esc_html__('America/Cayman', 'chat-telegram'),
                    'America/Chicago' => esc_html__('America/Chicago', 'chat-telegram'),
                    'America/Chihuahua' => esc_html__('America/Chihuahua', 'chat-telegram'),
                    'America/Coral_Harbour' => esc_html__('America/Coral_Harbour', 'chat-telegram'),
                    'America/Cordoba' => esc_html__('America/Cordoba', 'chat-telegram'),
                    'America/Costa_Rica' => esc_html__('America/Costa_Rica', 'chat-telegram'),
                    'America/Creston' => esc_html__('America/Creston', 'chat-telegram'),
                    'America/Cuiaba' => esc_html__('America/Cuiaba', 'chat-telegram'),
                    'America/Curacao' => esc_html__('America/Curacao', 'chat-telegram'),
                    'America/Danmarkshavn' => esc_html__('America/Danmarkshavn', 'chat-telegram'),
                    'America/Dawson' => esc_html__('America/Dawson', 'chat-telegram'),
                    'America/Araguaina' => esc_html__('America/Araguaina', 'chat-telegram'),
                    'America/Denver' => esc_html__('America/Denver', 'chat-telegram'),
                    'America/Araguaina' => esc_html__('America/Araguaina', 'chat-telegram'),
                    'America/Dominica' => esc_html__('America/Dominica', 'chat-telegram'),
                    'America/Edmonton' => esc_html__('America/Edmonton', 'chat-telegram'),
                    'America/Eirunepe' => esc_html__('America/Eirunepe', 'chat-telegram'),
                    'America/El_Salvador' => esc_html__('America/El_Salvador', 'chat-telegram'),
                    'America/Ensenada' => esc_html__('America/Ensenada', 'chat-telegram'),
                    'America/Fort_Nelson' => esc_html__('America/Fort_Nelson', 'chat-telegram'),
                    'America/Fort_Wayne' => esc_html__('America/Fort_Wayne', 'chat-telegram'),
                    'America/Fortaleza' => esc_html__('America/Fortaleza', 'chat-telegram'),
                    'America/Glace_Bay' => esc_html__('America/Glace_Bay', 'chat-telegram'),
                    'America/Godthab' => esc_html__('America/Godthab', 'chat-telegram'),
                    'America/Goose_Bay' => esc_html__('America/Goose_Bay', 'chat-telegram'),
                    'America/Grand_Turk' => esc_html__('America/Grand_Turk', 'chat-telegram'),
                    'America/Grenada' => esc_html__('America/Grenada', 'chat-telegram'),
                    'America/Guadeloupe' => esc_html__('America/Guadeloupe', 'chat-telegram'),
                    'America/Guatemala' => esc_html__('America/Guatemala', 'chat-telegram'),
                    'America/Guayaquil' => esc_html__('America/Guayaquil', 'chat-telegram'),
                    'America/Guyana' => esc_html__('America/Guyana', 'chat-telegram'),
                    'America/Halifax' => esc_html__('America/Halifax', 'chat-telegram'),
                    'America/Havana' => esc_html__('America/Havana', 'chat-telegram'),
                    'America/Hermosillo' => esc_html__('America/Hermosillo', 'chat-telegram'),
                    'America/Indiana/Indianapolis' => esc_html__('Indiana/Indianapolis', 'chat-telegram'),
                    'America/Indiana/Knox' => esc_html__('America/Indiana/Knox', 'chat-telegram'),
                    'America/Indiana/Marengo' => esc_html__('America/Indiana/Marengo', 'chat-telegram'),
                    'America/Indiana/Petersburg' => esc_html__('America/Indiana/Petersburg', 'chat-telegram'),
                    'America/Indiana/Tell_City' => esc_html__('America/Indiana/Tell_City', 'chat-telegram'),
                    'America/Indiana/Vevay' => esc_html__('America/Indiana/Vevay', 'chat-telegram'),
                    'America/Indiana/Vincennes' => esc_html__('America/Indiana/Vincennes', 'chat-telegram'),
                    'America/Indiana/Winamac' => esc_html__('America/Indiana/Winamac', 'chat-telegram'),
                    'America/Indianapolis' => esc_html__('America/Indianapolis', 'chat-telegram'),
                    'America/Inuvik' => esc_html__('America/Inuvik', 'chat-telegram'),
                    'America/Iqaluit' => esc_html__('America/Iqaluit', 'chat-telegram'),
                    'America/Jamaica' => esc_html__('America/Jamaica', 'chat-telegram'),
                    'America/Jujuy' => esc_html__('America/Jujuy', 'chat-telegram'),
                    'America/Juneau' => esc_html__('America/Juneau', 'chat-telegram'),
                    'America/Kentucky/Louisville' => esc_html__('America/Kentucky/Louisville', 'chat-telegram'),
                    'America/Kentucky/Monticello' => esc_html__('America/Kentucky/Monticello', 'chat-telegram'),
                    'America/Knox_IN' => esc_html__('America/Knox_IN', 'chat-telegram'),
                    'America/Kralendijk' => esc_html__('America/Kralendijk', 'chat-telegram'),
                    'America/La_Paz' => esc_html__('America/La_Paz', 'chat-telegram'),
                    'America/Lima' => esc_html__('America/Lima', 'chat-telegram'),
                    'America/Los_Angeles' => esc_html__('America/Los_Angeles', 'chat-telegram'),
                    'America/Louisville' => esc_html__('America/Louisville', 'chat-telegram'),
                    'America/Lower_Princes' => esc_html__('America/Lower_Princes', 'chat-telegram'),
                    'America/Maceio' => esc_html__('America/Maceio', 'chat-telegram'),
                    'America/Managua' => esc_html__('America/Managua', 'chat-telegram'),
                    'America/Manaus' => esc_html__('America/Manaus', 'chat-telegram'),
                    'America/Marigot' => esc_html__('America/Marigot', 'chat-telegram'),
                    'America/Martinique' => esc_html__('America/Martinique', 'chat-telegram'),
                    'America/Matamoros' => esc_html__('America/Matamoros', 'chat-telegram'),
                    'America/Mazatlan' => esc_html__('America/Mazatlan', 'chat-telegram'),
                    'America/Mendoza' => esc_html__('America/Mendoza', 'chat-telegram'),
                    'America/Menominee' => esc_html__('America/Menominee', 'chat-telegram'),
                    'America/Merida' => esc_html__('America/Merida', 'chat-telegram'),
                    'America/Metlakatla' => esc_html__('America/Metlakatla', 'chat-telegram'),
                    'America/Mexico_City' => esc_html__('America/Mexico_City', 'chat-telegram'),
                    'America/Miquelon' => esc_html__('America/Miquelon', 'chat-telegram'),
                    'America/Moncton' => esc_html__('America/Moncton', 'chat-telegram'),
                    'America/Monterrey' => esc_html__('America/Monterrey', 'chat-telegram'),
                    'America/Montevideo' => esc_html__('America/Montevideo', 'chat-telegram'),
                    'America/Montreal' => esc_html__('America/Montreal', 'chat-telegram'),
                    'America/Montserrat' => esc_html__('America/Montserrat', 'chat-telegram'),
                    'America/Nassau' => esc_html__('America/Nassau', 'chat-telegram'),
                    'America/New_York' => esc_html__('America/New_York', 'chat-telegram'),
                    'America/Nipigon' => esc_html__('America/Nipigon', 'chat-telegram'),
                    'America/Nome' => esc_html__('America/Nome', 'chat-telegram'),
                    'America/Noronha' => esc_html__('America/Noronha', 'chat-telegram'),
                    'America/North_Dakota/Beulah' => esc_html__('America/North_Dakota/Beulah', 'chat-telegram'),
                    'America/North_Dakota/Center' => esc_html__('America/North_Dakota/Center', 'chat-telegram'),
                    'America/North_Dakota/New_Salem' => esc_html__('America/North_Dakota/New_Salem', 'chat-telegram'),
                    'America/Ojinaga' => esc_html__('America/Ojinaga', 'chat-telegram'),
                    'America/Panama' => esc_html__('America/Panama', 'chat-telegram'),
                    'America/Pangnirtung' => esc_html__('America/Pangnirtung', 'chat-telegram'),
                    'America/Paramaribo' => esc_html__('America/Paramaribo', 'chat-telegram'),
                    'America/Phoenix' => esc_html__('America/Phoenix', 'chat-telegram'),
                    'America/Port-au-Prince' => esc_html__('America/Port-au-Prince', 'chat-telegram'),
                    'America/Port_of_Spain' => esc_html__('America/Port_of_Spain', 'chat-telegram'),
                    'America/Porto_Acre' => esc_html__('America/Porto_Acre', 'chat-telegram'),
                    'America/Porto_Velho' => esc_html__('America/Porto_Velho', 'chat-telegram'),
                    'America/Puerto_Rico' => esc_html__('America/Puerto_Rico', 'chat-telegram'),
                    'America/Punta_Arenas' => esc_html__('America/Punta_Arenas', 'chat-telegram'),
                    'America/Rainy_River' => esc_html__('America/Rainy_River', 'chat-telegram'),
                    'America/Rankin_Inlet' => esc_html__('America/Rankin_Inlet', 'chat-telegram'),
                    'America/Recife' => esc_html__('America/Recife', 'chat-telegram'),
                    'America/Regina' => esc_html__('America/Regina', 'chat-telegram'),
                    'America/Resolute' => esc_html__('America/Resolute', 'chat-telegram'),
                    'America/Rio_Branco' => esc_html__('America/Rio_Branco', 'chat-telegram'),
                    'America/Rosario' => esc_html__('America/Rosario', 'chat-telegram'),
                    'America/Santa_Isabel' => esc_html__('America/Santa_Isabel', 'chat-telegram'),
                    'America/Santarem' => esc_html__('America/Santarem', 'chat-telegram'),
                    'America/Santiago' => esc_html__('America/Santiago', 'chat-telegram'),
                    'America/Santo_Domingo' => esc_html__('America/Santo_Domingo', 'chat-telegram'),
                    'America/Sao_Paulo' => esc_html__('America/Sao_Paulo', 'chat-telegram'),
                    'America/Scoresbysund' => esc_html__('America/Scoresbysund', 'chat-telegram'),
                    'America/Shiprock' => esc_html__('America/Shiprock', 'chat-telegram'),
                    'America/Sitka' => esc_html__('America/Sitka', 'chat-telegram'),
                    'America/St_Barthelemy' => esc_html__('America/St_Barthelemy', 'chat-telegram'),
                    'America/St_Johns' => esc_html__('America/St_Johns', 'chat-telegram'),
                    'America/St_Kitts' => esc_html__('America/St_Kitts', 'chat-telegram'),
                    'America/St_Lucia' => esc_html__('America/St_Lucia', 'chat-telegram'),
                    'America/St_Thomas' => esc_html__('America/St_Thomas', 'chat-telegram'),
                    'America/St_Vincent' => esc_html__('America/St_Vincent', 'chat-telegram'),
                    'America/Swift_Current' => esc_html__('America/Swift_Current', 'chat-telegram'),
                    'America/Tegucigalpa' => esc_html__('America/Tegucigalpa', 'chat-telegram'),
                    'America/Thule' => esc_html__('America/Thule', 'chat-telegram'),
                    'America/Thunder_Bay' => esc_html__('America/Thunder_Bay', 'chat-telegram'),
                    'America/Tijuana' => esc_html__('America/Tijuana', 'chat-telegram'),
                    'America/Toronto' => esc_html__('America/Toronto', 'chat-telegram'),
                    'America/Tortola' => esc_html__('America/Tortola', 'chat-telegram'),
                    'America/Vancouver' => esc_html__('America/Vancouver', 'chat-telegram'),
                    'America/Virgin' => esc_html__('America/Virgin', 'chat-telegram'),
                    'America/Whitehorse' => esc_html__('America/Whitehorse', 'chat-telegram'),
                    'America/Winnipeg' => esc_html__('America/Winnipeg', 'chat-telegram'),
                    'America/Yakutat' => esc_html__('America/Yakutat', 'chat-telegram'),
                    'America/Yellowknife' => esc_html__('America/Yellowknife', 'chat-telegram'),
                    'Antarctica/Casey' => esc_html__('Antarctica/Casey', 'chat-telegram'),
                    'Antarctica/Davis' => esc_html__('Antarctica/Davis', 'chat-telegram'),
                    'Antarctica/DumontDUrville' => esc_html__('Antarctica/DumontDUrville', 'chat-telegram'),
                    'Antarctica/Macquarie' => esc_html__('Antarctica/Macquarie', 'chat-telegram'),
                    'Antarctica/Mawson' => esc_html__('Antarctica/Mawson', 'chat-telegram'),
                    'Antarctica/McMurdo' => esc_html__('Antarctica/McMurdo', 'chat-telegram'),
                    'Antarctica/Palmer' => esc_html__('Antarctica/Palmer', 'chat-telegram'),
                    'Antarctica/Rothera' => esc_html__('Antarctica/Rothera', 'chat-telegram'),
                    'Antarctica/South_Pole' => esc_html__('Antarctica/South_Pole', 'chat-telegram'),
                    'Antarctica/Syowa' => esc_html__('Antarctica/Syowa', 'chat-telegram'),
                    'Antarctica/Troll' => esc_html__('Antarctica/Troll', 'chat-telegram'),
                    'Antarctica/Vostok' => esc_html__('Antarctica/Vostok', 'chat-telegram'),
                    'Arctic/Longyearbyen' => esc_html__('Arctic/Longyearbyen', 'chat-telegram'),
                    'Asia/Aden' => esc_html__('Asia/Aden', 'chat-telegram'),
                    'Asia/Almaty' => esc_html__('Asia/Almaty', 'chat-telegram'),
                    'Asia/Amman' => esc_html__('Asia/Amman', 'chat-telegram'),
                    'Asia/Anadyr' => esc_html__('Asia/Anadyr', 'chat-telegram'),
                    'Asia/Aqtau' => esc_html__('Asia/Aqtau', 'chat-telegram'),
                    'Asia/Aqtobe' => esc_html__('Asia/Aqtobe', 'chat-telegram'),
                    'Asia/Ashgabat' => esc_html__('Asia/Ashgabat', 'chat-telegram'),
                    'Asia/Ashkhabad' => esc_html__('Asia/Ashkhabad', 'chat-telegram'),
                    'Asia/Atyrau' => esc_html__('Asia/Atyrau', 'chat-telegram'),
                    'Asia/Baghdad' => esc_html__('Asia/Baghdad', 'chat-telegram'),
                    'Asia/Bahrain' => esc_html__('Asia/Bahrain', 'chat-telegram'),
                    'Asia/Baku' => esc_html__('Asia/Baku', 'chat-telegram'),
                    'Asia/Bangkok' => esc_html__('Asia/Bangkok', 'chat-telegram'),
                    'Asia/Barnaul' => esc_html__('Asia/Barnaul', 'chat-telegram'),
                    'Asia/Beirut' => esc_html__('Asia/Beirut', 'chat-telegram'),
                    'Asia/Bishkek' => esc_html__('Asia/Bishkek', 'chat-telegram'),
                    'Asia/Brunei' => esc_html__('Asia/Brunei', 'chat-telegram'),
                    'Asia/Calcutta' => esc_html__('Asia/Calcutta', 'chat-telegram'),
                    'Asia/Chita' => esc_html__('Asia/Chita', 'chat-telegram'),
                    'Asia/Choibalsan' => esc_html__('Asia/Choibalsan', 'chat-telegram'),
                    'Asia/Chongqing' => esc_html__('Asia/Chongqing', 'chat-telegram'),
                    'Asia/Chungking' => esc_html__('Asia/Chungking', 'chat-telegram'),
                    'Asia/Colombo' => esc_html__('Asia/Colombo', 'chat-telegram'),
                    'Asia/Dacca' => esc_html__('Asia/Dacca', 'chat-telegram'),
                    'Asia/Damascus' => esc_html__('Asia/Damascus', 'chat-telegram'),
                    'Asia/Dhaka' => esc_html__('Asia/Dhaka', 'chat-telegram'),
                    'Asia/Dili' => esc_html__('Asia/Dili', 'chat-telegram'),
                    'Asia/Dubai' => esc_html__('Asia/Dubai', 'chat-telegram'),
                    'Asia/Dushanbe' => esc_html__('Asia/Dushanbe', 'chat-telegram'),
                    'Asia/Famagusta' => esc_html__('Asia/Famagusta', 'chat-telegram'),
                    'Asia/Gaza' => esc_html__('Asia/Gaza', 'chat-telegram'),
                    'Asia/Harbin' => esc_html__('Asia/Harbin', 'chat-telegram'),
                    'Asia/Hebron' => esc_html__('Asia/Hebron', 'chat-telegram'),
                    'Asia/Ho_Chi_Minh' => esc_html__('Asia/Ho_Chi_Minh', 'chat-telegram'),
                    'Asia/Hong_Kong' => esc_html__('Asia/Hong_Kong', 'chat-telegram'),
                    'Asia/Hovd' => esc_html__('Asia/Hovd', 'chat-telegram'),
                    'Asia/Irkutsk' => esc_html__('Asia/Irkutsk', 'chat-telegram'),
                    'Asia/Istanbul' => esc_html__('Asia/Istanbul', 'chat-telegram'),
                    'Asia/Jakarta' => esc_html__('Asia/Jakarta', 'chat-telegram'),
                    'Asia/Jayapura' => esc_html__('Asia/Jayapura', 'chat-telegram'),
                    'Asia/Jerusalem' => esc_html__('Asia/Jerusalem', 'chat-telegram'),
                    'Asia/Kabul' => esc_html__('Asia/Kabul', 'chat-telegram'),
                    'Asia/Kamchatka' => esc_html__('Asia/Kamchatka', 'chat-telegram'),
                    'Asia/Karachi' => esc_html__('Asia/Karachi', 'chat-telegram'),
                    'Asia/Kashgar' => esc_html__('Asia/Kashgar', 'chat-telegram'),
                    'Asia/Kathmandu' => esc_html__('Asia/Kathmandu', 'chat-telegram'),
                    'Asia/Katmandu' => esc_html__('Asia/Katmandu', 'chat-telegram'),
                    'Asia/Khandyga' => esc_html__('Asia/Khandyga', 'chat-telegram'),
                    'Asia/Kolkata' => esc_html__('Asia/Kolkata', 'chat-telegram'),
                    'Asia/Krasnoyarsk' => esc_html__('Asia/Krasnoyarsk', 'chat-telegram'),
                    'Asia/Kuala_Lumpur' => esc_html__('Asia/Kuala_Lumpur', 'chat-telegram'),
                    'Asia/Kuching' => esc_html__('Asia/Kuching', 'chat-telegram'),
                    'Asia/Kuwait' => esc_html__('Asia/Kuwait', 'chat-telegram'),
                    'Asia/Macao' => esc_html__('Asia/Macao', 'chat-telegram'),
                    'Asia/Macau' => esc_html__('Asia/Macau', 'chat-telegram'),
                    'Asia/Magadan' => esc_html__('Asia/Magadan', 'chat-telegram'),
                    'Asia/Makassar' => esc_html__('Asia/Makassar', 'chat-telegram'),
                    'Asia/Manila' => esc_html__('Asia/Manila', 'chat-telegram'),
                    'Asia/Muscat' => esc_html__('Asia/Muscat', 'chat-telegram'),
                    'Asia/Nicosia' => esc_html__('Asia/Nicosia', 'chat-telegram'),
                    'Asia/Novokuznetsk' => esc_html__('Asia/Novokuznetsk', 'chat-telegram'),
                    'Asia/Novosibirsk' => esc_html__('Asia/Novosibirsk', 'chat-telegram'),
                    'Asia/Omsk' => esc_html__('Asia/Omsk', 'chat-telegram'),
                    'Asia/Oral' => esc_html__('Asia/Oral', 'chat-telegram'),
                    'Asia/Phnom_Penh' => esc_html__('Asia/Phnom_Penh', 'chat-telegram'),
                    'Asia/Pontianak' => esc_html__('Asia/Pontianak', 'chat-telegram'),
                    'Asia/Pyongyang' => esc_html__('Asia/Pyongyang', 'chat-telegram'),
                    'Asia/Qatar' => esc_html__('Asia/Qatar', 'chat-telegram'),
                    'Asia/Qyzylorda' => esc_html__('Asia/Qyzylorda', 'chat-telegram'),
                    'Asia/Rangoon' => esc_html__('Asia/Rangoon', 'chat-telegram'),
                    'Asia/Riyadh' => esc_html__('Asia/Riyadh', 'chat-telegram'),
                    'Asia/Saigon' => esc_html__('Asia/Saigon', 'chat-telegram'),
                    'Asia/Sakhalin' => esc_html__('Asia/Sakhalin', 'chat-telegram'),
                    'Asia/Samarkand' => esc_html__('Asia/Samarkand', 'chat-telegram'),
                    'Asia/Seoul' => esc_html__('Asia/Seoul', 'chat-telegram'),
                    'Asia/Shanghai' => esc_html__('Asia/Shanghai', 'chat-telegram'),
                    'Asia/Singapore' => esc_html__('Asia/Singapore', 'chat-telegram'),
                    'Asia/Srednekolymsk' => esc_html__('Asia/Srednekolymsk', 'chat-telegram'),
                    'Asia/Taipei' => esc_html__('Asia/Taipei', 'chat-telegram'),
                    'Asia/Tashkent' => esc_html__('Asia/Tashkent', 'chat-telegram'),
                    'Asia/Tbilisi' => esc_html__('Asia/Tbilisi', 'chat-telegram'),
                    'Asia/Tehran' => esc_html__('Asia/Tehran', 'chat-telegram'),
                    'Asia/Tel_Aviv' => esc_html__('Asia/Tel_Aviv', 'chat-telegram'),
                    'Asia/Thimbu' => esc_html__('Asia/Thimbu', 'chat-telegram'),
                    'Asia/Thimphu' => esc_html__('Asia/Thimphu', 'chat-telegram'),
                    'Asia/Tokyo' => esc_html__('Asia/Tokyo', 'chat-telegram'),
                    'Asia/Tomsk' => esc_html__('Asia/Tomsk', 'chat-telegram'),
                    'Asia/Ujung_Pandang' => esc_html__('Asia/Ujung_Pandang', 'chat-telegram'),
                    'Asia/Ulaanbaatar' => esc_html__('Asia/Ulaanbaatar', 'chat-telegram'),
                    'Asia/Ulan_Bator' => esc_html__('Asia/Ulan_Bator', 'chat-telegram'),
                    'Asia/Urumqi' => esc_html__('Asia/Urumqi', 'chat-telegram'),
                    'Asia/Ust-Nera' => esc_html__('Asia/Ust-Nera', 'chat-telegram'),
                    'Asia/Vientiane' => esc_html__('Asia/Vientiane', 'chat-telegram'),
                    'Asia/Vladivostok' => esc_html__('Asia/Vladivostok', 'chat-telegram'),
                    'Asia/Yakutsk' => esc_html__('Asia/Yakutsk', 'chat-telegram'),
                    'Asia/Yangon' => esc_html__('Asia/Yangon', 'chat-telegram'),
                    'Asia/Yekaterinburg' => esc_html__('Asia/Yekaterinburg', 'chat-telegram'),
                    'Asia/Yerevan' => esc_html__('Asia/Yerevan', 'chat-telegram'),
                    'Atlantic/Azores' => esc_html__('Atlantic/Azores', 'chat-telegram'),
                    'Atlantic/Bermuda' => esc_html__('Atlantic/Bermuda', 'chat-telegram'),
                    'Atlantic/Canary' => esc_html__('Atlantic/Canary', 'chat-telegram'),
                    'Atlantic/Cape_Verde' => esc_html__('Atlantic/Cape_Verde', 'chat-telegram'),
                    'Atlantic/Faeroe' => esc_html__('Atlantic/Faeroe', 'chat-telegram'),
                    'Atlantic/Faroe' => esc_html__('Atlantic/Faroe', 'chat-telegram'),
                    'Atlantic/Jan_Mayen' => esc_html__('Atlantic/Jan_Mayen', 'chat-telegram'),
                    'Atlantic/Madeira' => esc_html__('Atlantic/Madeira', 'chat-telegram'),
                    'Atlantic/Reykjavik' => esc_html__('Atlantic/Reykjavik', 'chat-telegram'),
                    'Atlantic/South_Georgia' => esc_html__('Atlantic/South_Georgia', 'chat-telegram'),
                    'Atlantic/St_Helena' => esc_html__('Atlantic/St_Helena', 'chat-telegram'),
                    'Atlantic/Stanley' => esc_html__('Atlantic/Stanley', 'chat-telegram'),
                    'Australia/ACT' => esc_html__('Australia/ACT', 'chat-telegram'),
                    'Australia/Adelaide' => esc_html__('Australia/Adelaide', 'chat-telegram'),
                    'Australia/Brisbane' => esc_html__('Australia/Brisbane', 'chat-telegram'),
                    'Australia/Broken_Hill' => esc_html__('Asia/Broken_Hill', 'chat-telegram'),
                    'Australia/Canberra' => esc_html__('Australia/Canberra', 'chat-telegram'),
                    'Australia/Currie' => esc_html__('Australia/Currie', 'chat-telegram'),
                    'Australia/Darwin' => esc_html__('Australia/Darwin', 'chat-telegram'),
                    'Australia/Eucla' => esc_html__('Australia/Eucla', 'chat-telegram'),
                    'Australia/Hobart' => esc_html__('Australia/Hobart', 'chat-telegram'),
                    'Australia/LHI' => esc_html__('Australia/LHI', 'chat-telegram'),
                    'Australia/Lindeman' => esc_html__('Australia/Lindeman', 'chat-telegram'),
                    'Australia/Lord_Howe' => esc_html__('Australia/Lord_Howe', 'chat-telegram'),
                    'Australia/Melbourne' => esc_html__('Australia/Melbourne', 'chat-telegram'),
                    'Australia/NSW' => esc_html__('Australia/NSW', 'chat-telegram'),
                    'Australia/North' => esc_html__('Australia/North', 'chat-telegram'),
                    'Australia/Perth' => esc_html__('Australia/Perth', 'chat-telegram'),
                    'Australia/Queensland' => esc_html__('Australia/Queensland', 'chat-telegram'),
                    'Australia/South' => esc_html__('Australia/South', 'chat-telegram'),
                    'Australia/Sydney' => esc_html__('Australia/Sydney', 'chat-telegram'),
                    'Australia/Tasmania' => esc_html__('Australia/Tasmania', 'chat-telegram'),
                    'Australia/Victoria' => esc_html__('Australia/Victoria', 'chat-telegram'),
                    'Australia/West' => esc_html__('Australia/West', 'chat-telegram'),
                    'Australia/Yancowinna' => esc_html__('Australia/Yancowinna', 'chat-telegram'),
                    'Brazil/Acre' => esc_html__('Brazil/Acre', 'chat-telegram'),
                    'Brazil/DeNoronha' => esc_html__('Brazil/DeNoronha', 'chat-telegram'),
                    'Brazil/East' => esc_html__('Brazil/East', 'chat-telegram'),
                    'Brazil/West' => esc_html__('Brazil/West', 'chat-telegram'),
                    'CET' => esc_html__('CET', 'chat-telegram'),
                    'CST6CDT' => esc_html__('CST6CDT', 'chat-telegram'),
                    'Canada/Atlantic' => esc_html__('Canada/Atlantic', 'chat-telegram'),
                    'Canada/Central' => esc_html__('Canada/Central', 'chat-telegram'),
                    'Canada/Eastern' => esc_html__('Canada/Eastern', 'chat-telegram'),
                    'Canada/Mountain' => esc_html__('Canada/Mountain', 'chat-telegram'),
                    'Canada/Newfoundland' => esc_html__('Canada/Newfoundland', 'chat-telegram'),
                    'Canada/Pacific' => esc_html__('Canada/Pacific', 'chat-telegram'),
                    'Canada/Saskatchewan' => esc_html__('Canada/Saskatchewan', 'chat-telegram'),
                    'Canada/Yukon' => esc_html__('Canada/Yukon', 'chat-telegram'),
                    'Chile/Continental' => esc_html__('Chile/Continental', 'chat-telegram'),
                    'Chile/EasterIsland' => esc_html__('Chile/EasterIsland', 'chat-telegram'),
                    'Cuba' => esc_html__('Cuba', 'chat-telegram'),
                    'EET' => esc_html__('EET', 'chat-telegram'),
                    'EST' => esc_html__('EST', 'chat-telegram'),
                    'EST5EDT' => esc_html__('EST5EDT', 'chat-telegram'),
                    'Egypt' => esc_html__('Egypt', 'chat-telegram'),
                    'Eire' => esc_html__('Eire', 'chat-telegram'),
                    'Etc/GMT' => esc_html__('Etc/GMT', 'chat-telegram'),
                    'Etc/GMT+0' => esc_html__('Etc/GMT+0', 'chat-telegram'),
                    'Etc/GMT+1' => esc_html__('Etc/GMT+1', 'chat-telegram'),
                    'Etc/GMT+10' => esc_html__('Etc/GMT+10', 'chat-telegram'),
                    'Etc/GMT+11' => esc_html__('Etc/GMT+11', 'chat-telegram'),
                    'Etc/GMT+12' => esc_html__('Etc/GMT+12', 'chat-telegram'),
                    'Etc/GMT+2' => esc_html__('Etc/GMT+2', 'chat-telegram'),
                    'Etc/GMT+3' => esc_html__('Etc/GMT+3', 'chat-telegram'),
                    'Etc/GMT+4' => esc_html__('Etc/GMT+4', 'chat-telegram'),
                    'Etc/GMT+5' => esc_html__('Etc/GMT+5', 'chat-telegram'),
                    'Etc/GMT+6' => esc_html__('Etc/GMT+6', 'chat-telegram'),
                    'Etc/GMT+7' => esc_html__('Etc/GMT+7', 'chat-telegram'),
                    'Etc/GMT+8' => esc_html__('Etc/GMT+8', 'chat-telegram'),
                    'Etc/GMT+9' => esc_html__('Etc/GMT+9', 'chat-telegram'),
                    'Etc/GMT-0' => esc_html__('Etc/GMT-0', 'chat-telegram'),
                    'Etc/GMT-1' => esc_html__('Etc/GMT-1', 'chat-telegram'),
                    'Etc/GMT-10' => esc_html__('Etc/GMT-10', 'chat-telegram'),
                    'Etc/GMT-11' => esc_html__('Etc/GMT-11', 'chat-telegram'),
                    'Etc/GMT-12' => esc_html__('Etc/GMT-12', 'chat-telegram'),
                    'Etc/GMT-13' => esc_html__('Etc/GMT-13', 'chat-telegram'),
                    'Etc/GMT-14' => esc_html__('Etc/GMT-14', 'chat-telegram'),
                    'Etc/GMT-2' => esc_html__('Etc/GMT-2', 'chat-telegram'),
                    'Etc/GMT-3' => esc_html__('Etc/GMT-3', 'chat-telegram'),
                    'Etc/GMT-4' => esc_html__('Etc/GMT-4', 'chat-telegram'),
                    'Etc/GMT-5' => esc_html__('Etc/GMT-5', 'chat-telegram'),
                    'Etc/GMT-6' => esc_html__('Etc/GMT-6', 'chat-telegram'),
                    'Etc/GMT-7' => esc_html__('Etc/GMT-7', 'chat-telegram'),
                    'Etc/GMT-8' => esc_html__('Etc/GMT-8', 'chat-telegram'),
                    'Etc/GMT-9' => esc_html__('Etc/GMT-9', 'chat-telegram'),
                    'Etc/GMT0' => esc_html__('Etc/GMT0', 'chat-telegram'),
                    'Etc/Greenwich' => esc_html__('Etc/Greenwich', 'chat-telegram'),
                    'Etc/UCT' => esc_html__('Etc/UCT', 'chat-telegram'),
                    'Etc/UTC' => esc_html__('Etc/UTC', 'chat-telegram'),
                    'Etc/Universal' => esc_html__('Etc/Universal', 'chat-telegram'),
                    'Etc/Zulu' => esc_html__('Etc/Zulu', 'chat-telegram'),
                    'Europe/Amsterdam' => esc_html__('Europe/Amsterdam', 'chat-telegram'),
                    'Europe/Andorra' => esc_html__('Europe/Andorra', 'chat-telegram'),
                    'Europe/Astrakhan' => esc_html__('Europe/Astrakhan', 'chat-telegram'),
                    'Europe/Athens' => esc_html__('Europe/Athens', 'chat-telegram'),
                    'Europe/Belfast' => esc_html__('Europe/Belfast', 'chat-telegram'),
                    'Europe/Belgrade' => esc_html__('Europe/Belgrade', 'chat-telegram'),
                    'Europe/Berlin' => esc_html__('Europe/Berlin', 'chat-telegram'),
                    'Europe/Bratislava' => esc_html__('Europe/Bratislava', 'chat-telegram'),
                    'Europe/Brussels' => esc_html__('Europe/Brussels', 'chat-telegram'),
                    'Europe/Bucharest' => esc_html__('Europe/Bucharest', 'chat-telegram'),
                    'Europe/Budapest' => esc_html__('Europe/Budapest', 'chat-telegram'),
                    'Europe/Busingen' => esc_html__('Europe/Busingen', 'chat-telegram'),
                    'Europe/Chisinau' => esc_html__('Europe/Chisinau', 'chat-telegram'),
                    'Europe/Copenhagen' => esc_html__('Europe/Copenhagen', 'chat-telegram'),
                    'Europe/Dublin' => esc_html__('Europe/Dublin', 'chat-telegram'),
                    'Europe/Gibraltar' => esc_html__('Europe/Gibraltar', 'chat-telegram'),
                    'Europe/Guernsey' => esc_html__('Europe/Guernsey', 'chat-telegram'),
                    'Europe/Helsinki' => esc_html__('Europe/Helsinki', 'chat-telegram'),
                    'Europe/Isle_of_Man' => esc_html__('Europe/Isle_of_Man', 'chat-telegram'),
                    'Europe/Istanbul' => esc_html__('Europe/Istanbul', 'chat-telegram'),
                    'Europe/Jersey' => esc_html__('Europe/Jersey', 'chat-telegram'),
                    'Europe/Kaliningrad' => esc_html__('Europe/Kaliningrad', 'chat-telegram'),
                    'Europe/Kiev' => esc_html__('Europe/Kiev', 'chat-telegram'),
                    'Europe/Kirov' => esc_html__('Europe/Kirov', 'chat-telegram'),
                    'Europe/Lisbon' => esc_html__('Europe/Lisbon', 'chat-telegram'),
                    'Europe/Ljubljana' => esc_html__('Europe/Ljubljana', 'chat-telegram'),
                    'Europe/London' => esc_html__('Europe/London', 'chat-telegram'),
                    'Europe/Luxembourg' => esc_html__('Europe/Luxembourg', 'chat-telegram'),
                    'Europe/Madrid' => esc_html__('Europe/Madrid', 'chat-telegram'),
                    'Europe/Malta' => esc_html__('Europe/Malta', 'chat-telegram'),
                    'Europe/Mariehamn' => esc_html__('Europe/Mariehamn', 'chat-telegram'),
                    'Europe/Minsk' => esc_html__('Europe/Minsk', 'chat-telegram'),
                    'Europe/Monaco' => esc_html__('Europe/Monaco', 'chat-telegram'),
                    'Europe/Moscow' => esc_html__('Europe/Moscow', 'chat-telegram'),
                    'Europe/Nicosia' => esc_html__('Europe/Nicosia', 'chat-telegram'),
                    'Europe/Oslo' => esc_html__('Europe/Oslo', 'chat-telegram'),
                    'Europe/Paris' => esc_html__('Europe/Paris', 'chat-telegram'),
                    'Europe/Podgorica' => esc_html__('Europe/Podgorica', 'chat-telegram'),
                    'Europe/Prague' => esc_html__('Europe/Prague', 'chat-telegram'),
                    'Europe/Riga' => esc_html__('Europe/Riga', 'chat-telegram'),
                    'Europe/Rome' => esc_html__('Europe/Rome', 'chat-telegram'),
                    'Europe/Samara' => esc_html__('Europe/Samara', 'chat-telegram'),
                    'Europe/San_Marino' => esc_html__('Europe/San_Marino', 'chat-telegram'),
                    'Europe/Sarajevo' => esc_html__('Europe/Sarajevo', 'chat-telegram'),
                    'Europe/Saratov' => esc_html__('Europe/Saratov', 'chat-telegram'),
                    'Europe/Simferopol' => esc_html__('Europe/Simferopol', 'chat-telegram'),
                    'Europe/Skopje' => esc_html__('Europe/Skopje', 'chat-telegram'),
                    'Europe/Sofia' => esc_html__('Europe/Sofia', 'chat-telegram'),
                    'Europe/Stockholm' => esc_html__('Europe/Stockholm', 'chat-telegram'),
                    'Europe/Tallinn' => esc_html__('Europe/Tallinn', 'chat-telegram'),
                    'Europe/Tirane' => esc_html__('Europe/Tirane', 'chat-telegram'),
                    'Europe/Tiraspol' => esc_html__('Europe/Tiraspol', 'chat-telegram'),
                    'Europe/Ulyanovsk' => esc_html__('Europe/Ulyanovsk', 'chat-telegram'),
                    'Europe/Uzhgorod' => esc_html__('Europe/Uzhgorod', 'chat-telegram'),
                    'Europe/Vaduz' => esc_html__('Europe/Vaduz', 'chat-telegram'),
                    'Europe/Vatican' => esc_html__('Europe/Vatican', 'chat-telegram'),
                    'Europe/Vienna' => esc_html__('Europe/Vienna', 'chat-telegram'),
                    'Europe/Vilnius' => esc_html__('Europe/Vilnius', 'chat-telegram'),
                    'Europe/Volgograd' => esc_html__('Europe/Volgograd', 'chat-telegram'),
                    'Europe/Warsaw' => esc_html__('Europe/Warsaw', 'chat-telegram'),
                    'Europe/Zagreb' => esc_html__('Europe/Zagreb', 'chat-telegram'),
                    'Europe/Zaporozhye' => esc_html__('Europe/Zaporozhye', 'chat-telegram'),
                    'Europe/Zurich' => esc_html__('Europe/Zurich', 'chat-telegram'),
                    'GB' => esc_html__('GB', 'chat-telegram'),
                    'GB-Eire' => esc_html__('GB-Eire', 'chat-telegram'),
                    'GMT' => esc_html__('GMT', 'chat-telegram'),
                    'GMT+0' => esc_html__('GMT+0', 'chat-telegram'),
                    'GMT-0' => esc_html__('GMT-0', 'chat-telegram'),
                    'GMT0' => esc_html__('GMT0', 'chat-telegram'),
                    'Greenwich' => esc_html__('Greenwich', 'chat-telegram'),
                    'HST' => esc_html__('HST', 'chat-telegram'),
                    'Hongkong' => esc_html__('Hongkong', 'chat-telegram'),
                    'Iceland' => esc_html__('Iceland', 'chat-telegram'),
                    'Indian/Antananarivo' => esc_html__('Indian/Antananarivo', 'chat-telegram'),
                    'Indian/Chagos' => esc_html__('Indian/Chagos', 'chat-telegram'),
                    'Indian/Christmas' => esc_html__('Indian/Christmas', 'chat-telegram'),
                    'Indian/Cocos' => esc_html__('Indian/Cocos', 'chat-telegram'),
                    'Indian/Comoro' => esc_html__('Indian/Comoro', 'chat-telegram'),
                    'Indian/Kerguelen' => esc_html__('Indian/Kerguelen', 'chat-telegram'),
                    'Indian/Mahe' => esc_html__('Indian/Mahe', 'chat-telegram'),
                    'Indian/Maldives' => esc_html__('Indian/Maldives', 'chat-telegram'),
                    'Indian/Mauritius' => esc_html__('Indian/Mauritius', 'chat-telegram'),
                    'Indian/Mayotte' => esc_html__('Indian/Mayotte', 'chat-telegram'),
                    'Indian/Reunion' => esc_html__('Indian/Reunion', 'chat-telegram'),
                    'Iran' => esc_html__('Iran', 'chat-telegram'),
                    'Israel' => esc_html__('Israel', 'chat-telegram'),
                    'Jamaica' => esc_html__('Jamaica', 'chat-telegram'),
                    'Japan' => esc_html__('Japan', 'chat-telegram'),
                    'Kwajalein' => esc_html__('Kwajalein', 'chat-telegram'),
                    'Libya' => esc_html__('Libya', 'chat-telegram'),
                    'MET' => esc_html__('MET', 'chat-telegram'),
                    'MST' => esc_html__('MST', 'chat-telegram'),
                    'MST7MDT' => esc_html__('MST7MDT', 'chat-telegram'),
                    'Mexico/BajaNorte' => esc_html__('Mexico/BajaNorte', 'chat-telegram'),
                    'Mexico/BajaSur' => esc_html__('Mexico/BajaSur', 'chat-telegram'),
                    'Mexico/General' => esc_html__('Mexico/General', 'chat-telegram'),
                    'NZ' => esc_html__('NZ', 'chat-telegram'),
                    'NZ-CHAT' => esc_html__('NZ-CHAT', 'chat-telegram'),
                    'Navajo' => esc_html__('Navajo', 'chat-telegram'),
                    'PRC' => esc_html__('PRC', 'chat-telegram'),
                    'PST8PDT' => esc_html__('PST8PDT', 'chat-telegram'),
                    'Pacific/Apia' => esc_html__('Pacific/Apia', 'chat-telegram'),
                    'Pacific/Auckland' => esc_html__('Pacific/Auckland', 'chat-telegram'),
                    'Pacific/Bougainville' => esc_html__('Pacific/Bougainville', 'chat-telegram'),
                    'Pacific/Chatham' => esc_html__('Pacific/Chatham', 'chat-telegram'),
                    'Pacific/Chuuk' => esc_html__('Pacific/Chuuk', 'chat-telegram'),
                    'Pacific/Easter' => esc_html__('Pacific/Easter', 'chat-telegram'),
                    'Pacific/Efate' => esc_html__('Pacific/Efate', 'chat-telegram'),
                    'Pacific/Enderbury' => esc_html__('Pacific/Enderbury', 'chat-telegram'),
                    'Pacific/Fakaofo' => esc_html__('Pacific/Fakaofo', 'chat-telegram'),
                    'Pacific/Fiji' => esc_html__('Pacific/Fiji', 'chat-telegram'),
                    'Pacific/Funafuti' => esc_html__('Pacific/Funafuti', 'chat-telegram'),
                    'Pacific/Galapagos' => esc_html__('Pacific/Galapagos', 'chat-telegram'),
                    'Pacific/Gambier' => esc_html__('Pacific/Gambier', 'chat-telegram'),
                    'Pacific/Guadalcanal' => esc_html__('Pacific/Guadalcanal', 'chat-telegram'),
                    'Pacific/Guam' => esc_html__('Pacific/Guam', 'chat-telegram'),
                    'Pacific/Honolulu' => esc_html__('Pacific/Honolulu', 'chat-telegram'),
                    'Pacific/Johnston' => esc_html__('Pacific/Johnston', 'chat-telegram'),
                    'Pacific/Kiritimati' => esc_html__('Pacific/Kiritimati', 'chat-telegram'),
                    'Pacific/Kosrae' => esc_html__('Pacific/Kosrae', 'chat-telegram'),
                    'Pacific/Kwajalein' => esc_html__('Pacific/Kwajalein', 'chat-telegram'),
                    'Pacific/Majuro' => esc_html__('Pacific/Majuro', 'chat-telegram'),
                    'Pacific/Marquesas' => esc_html__('Pacific/Marquesas', 'chat-telegram'),
                    'Pacific/Midway' => esc_html__('Pacific/Midway', 'chat-telegram'),
                    'Pacific/Nauru' => esc_html__('Pacific/Nauru', 'chat-telegram'),
                    'Pacific/Niue' => esc_html__('Pacific/Niue', 'chat-telegram'),
                    'Pacific/Norfolk' => esc_html__('Pacific/Norfolk', 'chat-telegram'),
                    'Pacific/Noumea' => esc_html__('Pacific/Noumea', 'chat-telegram'),
                    'Pacific/Pago_Pago' => esc_html__('Pacific/Pago_Pago', 'chat-telegram'),
                    'Pacific/Palau' => esc_html__('Pacific/Palau', 'chat-telegram'),
                    'Pacific/Pitcairn' => esc_html__('Pacific/Pitcairn', 'chat-telegram'),
                    'Pacific/Pohnpei' => esc_html__('Pacific/Pohnpei', 'chat-telegram'),
                    'Pacific/Ponape' => esc_html__('Pacific/Ponape', 'chat-telegram'),
                    'Pacific/Port_Moresby' => esc_html__('Pacific/Port_Moresby', 'chat-telegram'),
                    'Pacific/Rarotonga' => esc_html__('Pacific/Rarotonga', 'chat-telegram'),
                    'Pacific/Saipan' => esc_html__('Pacific/Saipan', 'chat-telegram'),
                    'Pacific/Samoa' => esc_html__('Pacific/Samoa', 'chat-telegram'),
                    'Pacific/Tahiti' => esc_html__('Pacific/Tahiti', 'chat-telegram'),
                    'Pacific/Tarawa' => esc_html__('Pacific/Tarawa', 'chat-telegram'),
                    'Pacific/Tongatapu' => esc_html__('Pacific/Tongatapu', 'chat-telegram'),
                    'Pacific/Truk' => esc_html__('Pacific/Truk', 'chat-telegram'),
                    'Pacific/Wake' => esc_html__('Pacific/Wake', 'chat-telegram'),
                    'Pacific/Wallis' => esc_html__('Pacific/Wallis', 'chat-telegram'),
                    'Pacific/Yap' => esc_html__('Pacific/Yap', 'chat-telegram'),
                    'Poland' => esc_html__('Poland', 'chat-telegram'),
                    'Portugal' => esc_html__('Portugal', 'chat-telegram'),
                    'ROC' => esc_html__('ROC', 'chat-telegram'),
                    'ROK' => esc_html__('ROK', 'chat-telegram'),
                    'Singapore' => esc_html__('Singapore', 'chat-telegram'),
                    'Turkey' => esc_html__('Turkey', 'chat-telegram'),
                    'UCT' => esc_html__('UCT', 'chat-telegram'),
                    'US/Alaska' => esc_html__('US/Alaska', 'chat-telegram'),
                    'US/Aleutian' => esc_html__('US/Aleutian', 'chat-telegram'),
                    'US/Arizona' => esc_html__('US/Arizona', 'chat-telegram'),
                    'US/Central' => esc_html__('US/Central', 'chat-telegram'),
                    'US/East-Indiana' => esc_html__('US/East-Indiana', 'chat-telegram'),
                    'US/Eastern' => esc_html__('US/Eastern', 'chat-telegram'),
                    'US/Hawaii' => esc_html__('US/Hawaii', 'chat-telegram'),
                    'US/Indiana-Starke' => esc_html__('US/Indiana-Starke', 'chat-telegram'),
                    'US/Michigan' => esc_html__('US/Michigan', 'chat-telegram'),
                    'US/Mountain' => esc_html__('US/Mountain', 'chat-telegram'),
                    'US/Pacific' => esc_html__('US/Pacific', 'chat-telegram'),
                    'US/Pacific-New' => esc_html__('US/Pacific-New', 'chat-telegram'),
                    'US/Samoa' => esc_html__('US/Samoa', 'chat-telegram'),
                    'UTC' => esc_html__('UTC', 'chat-telegram'),
                    'Universal' => esc_html__('Universal', 'chat-telegram'),
                    'W-SU' => esc_html__('W-SU', 'chat-telegram'),
                    'WET' => esc_html__('WET', 'chat-telegram'),
                )
            ]
        );


        // start sunday popover
        $this->add_control(
            'popover-sunday',
            [
                'label' => esc_html__('Sunday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );


        $this->start_popover();
        $this->add_control(
            'sunday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-sunday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'sunday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-sunday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end sunday popover

        // start monday popover
        $this->add_control(
            'popover-monday',
            [
                'label' => esc_html__('Monday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'monday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-monday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'monday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-monday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end monday popover

        // start tuesday popover
        $this->add_control(
            'popover-tuesday',
            [
                'label' => esc_html__('Tuesday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'tuesday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-tuesday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'tuesday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-tuesday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end tuesday popover

        // start wednesday popover
        $this->add_control(
            'popover-wednesday',
            [
                'label' => esc_html__('Wednesday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'wednesday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-wednesday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'wednesday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-wednesday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end wednesday popover

        // start sunday popover
        $this->add_control(
            'popover-thursday',
            [
                'label' => esc_html__('Thursday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'thursday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-thursday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'thursday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-thursday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end thursday popover

        // start sunday popover
        $this->add_control(
            'popover-friday',
            [
                'label' => esc_html__('Friday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'friday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-friday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'friday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-friday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end friday popover

        $this->add_control(
            'popover-saturday',
            [
                'label' => esc_html__('Saturday', 'ta-chat'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'saturday__start',
            [
                'label' => esc_html__('Start time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-saturday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'saturday__end',
            [
                'label' => esc_html__('End time', 'chat-telegram'),
                'type'  => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-saturday' => 'yes',
                ],
            ]
        );
        $this->end_popover();

        $this->end_controls_section(); // End section top content

        $this->start_controls_section(
            'cts__appearance',
            [
                'label' => esc_html__('Appearance settings', 'chat-telegram'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'visibility',
            [
                'label' => esc_html__('Visibility on', 'chat-telegram'),
                'type'  => Controls_Manager::SELECT2,
                'label_block' => false,
                'default' => 'teleSupport-show-everywhere',
                'options' => array(
                    'teleSupport-show-everywhere'  => esc_html__('Everywhere', 'chat-telegram'),
                    'teleSupport-desktop-only'  => esc_html__('Desktops only', 'chat-telegram'),
                    'teleSupport-tablet-only'  => esc_html__('Tablets only', 'chat-telegram'),
                    'teleSupport-mobile-tablet-only'  => esc_html__('Mobile and tablets', 'chat-telegram'),
                    'teleSupport-mobile-only'  => esc_html__('Mobile only', 'chat-telegram'),
                )

            ]
        );

        $this->add_control(
            'button__sizes',
            [
                'label' => esc_html__('Size', 'chat-telegram'),
                'type'  => Controls_Manager::SELECT,
                'label_block' => false,
                'default' => 'tg-btn-md',
                'options' => array(
                    'tg-btn-sm' => esc_html__('Small', 'chat-telegram'),
                    'tg-btn-md' => esc_html__('Medium', 'chat-telegram'),
                    'tg-btn-lg' => esc_html__('Large', 'chat-telegram'),
                )
            ]
        );

        $this->add_control(
            'bg__color',
            [
                'label' => esc_html__('Backgound color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0088cc',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].tg-btn-bg' => 'background-color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
            'bg__color__hover',
            [
                'label' => esc_html__('Hover backgound color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0278b3',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].tg-btn-bg:hover' => 'background-color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
            'text__color',
            [
                'label' => esc_html__('Text color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].tg-btn-bg' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'text__color__hover',
            [
                'label' => esc_html__('Hover text color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].tg-btn-bg:hover' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__('Border', 'chat-telegram'),
                'selector' => '{{WRAPPER}} .teleSupportButtons, {{WRAPPER}} .teleSupport-button-2',
                'fields_options' => [
                    'border' => [
                        'label' => esc_html__('Border', 'chat-telegram'),
                        'default' => 'solid',
                    ],
                    'width' => [
                        'default' => [
                            'top' => '1',
                            'right' => '1',
                            'bottom' => '1',
                            'left' => '1',
                            'isLinked' => false,
                        ],
                    ],
                    'color' => [
                        'default' => '#0088cc',
                    ],
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border__hover',
                'label' => esc_html__('Hover border', 'chat-telegram'),
                'default' => '#0278b3',
                'selector' => '{{WRAPPER}} .teleSupportButtons:hover, {{WRAPPER}} .teleSupport-button-2:hover',
                'fields_options' => [
                    'border' => [
                        'label' => esc_html__('Hover border', 'chat-telegram'),
                        'default' => 'solid',
                    ],
                    'width' => [
                        'default' => [
                            'top' => '1',
                            'right' => '1',
                            'bottom' => '1',
                            'left' => '1',
                            'isLinked' => false,
                        ],
                    ],
                    'color' => [
                        'default' => '#0278b3',
                    ],
                ],
            ]
        );

        $this->add_control(
            'button__icon',
            [
                'label' => esc_html__('Change icon', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-phone-alt',
                ],
                'condition' => [
                    'style' => '2',
                ],
                'recommended' => [
                    'fa-solid' => [
                        'envelope',
                        'envelope-open',
                        'facebook-messenger',
                    ],
                    'fa-regular' => [
                        'envelope',
                        'envelope-open',
                    ],

                ],
            ]
        );

        $this->add_control(
            'icon__color',
            [
                'label' => esc_html__('Icon color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0088cc',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].tg-btn-bg i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                ],
            ]
        );

        $this->add_control(
            'icon__color__hover',
            [
                'label' => esc_html__('Icon hover color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0278b3',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].tg-btn-bg:hover i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                ],
            ]
        );

        $this->add_control(
            'show__icon__bg__color',
            [
                'label' => esc_html__('Want bg in icon?', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'chat-telegram'),
                'label_off' => esc_html__('No', 'chat-telegram'),
                'return_value' => 'teleSupport-button-3',
                'condition' => [
                    'style' => '2',
                ],
            ]
        );

        $this->add_control(
            'icon__bg__color',
            [
                'label' => esc_html__('Icon bg color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].teleSupport-button-3.tg-btn-bg i' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                    'show__icon__bg__color' => 'teleSupport-button-3',
                ],
            ]
        );

        $this->add_control(
            'icon__bg__color__hover',
            [
                'label' => esc_html__('Icon hover bg color', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} [class*="teleSupport-button-"].teleSupport-button-3.tg-btn-bg:hover i' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                    'show__icon__bg__color' => 'teleSupport-button-3',
                ],
            ]
        );

        $this->add_control(
            'rounded',
            [
                'label' => esc_html__('Rounded?', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'chat-telegram'),
                'label_off' => esc_html__('No', 'chat-telegram'),
                'return_value' => 'tg-btn-rounded',
            ]
        );

        $this->add_control(
            'text_align',
            [
                'label' => esc_html__('Alignment', 'chat-telegram'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'chat-telegram'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'chat-telegram'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'chat-telegram'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .button-wrapper' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section(); // End section top content


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // button settings
        $style = $settings['style'];
        $channel =  $settings['channel'];
        $timezone =  $settings['timezone'];
        $visibility = $settings['visibility'];
        $icon = '';
        if (isset($settings['button__icon'])) {
            $icon = $settings['button__icon']['value'];
        }
        $rounded = $settings['rounded'];
        $icon__bg = $settings['show__icon__bg__color'];
        $sizes = $settings['button__sizes'];
        $photo = '';
        if (isset($settings['agent__photo'])) {
            $photo = $settings['agent__photo']['url'];
        }

        $name = $settings['agent__name'];
        $designation = $settings['agent__designation'];
        $labelText = $settings['custom__button__label'];
        $onlineText = $settings['online__text'];
        $offlineText = $settings['offline__text'];
        // availablity

        $sunday = ($settings['sunday__start'] ? $settings['sunday__start'] : "0:00") . "-" . ($settings['sunday__end'] ? $settings['sunday__end'] : "23:59");
        $monday = ($settings['monday__start'] ? $settings['monday__start'] : "0:00") . "-" . ($settings['monday__end'] ? $settings['monday__end'] : "23:59");
        $tuesday = ($settings['tuesday__start'] ? $settings['tuesday__start'] : "0:00") . "-" . ($settings['tuesday__end'] ? $settings['tuesday__end'] : "23:59");
        $wednesday = ($settings['wednesday__start'] ? $settings['wednesday__start'] : "0:00") . "-" . ($settings['wednesday__end'] ? $settings['wednesday__end'] : "23:59");
        $thursday = ($settings['thursday__start'] ? $settings['thursday__start'] : "0:00") . "-" . ($settings['thursday__end'] ? $settings['thursday__end'] : "23:59");
        $friday = ($settings['friday__start'] ? $settings['friday__start'] : "0:00") . "-" . ($settings['friday__end'] ? $settings['friday__end'] : "23:59");
        $saturday = ($settings['saturday__start'] ? $settings['saturday__start'] : "0:00") . "-" . ($settings['saturday__end'] ? $settings['saturday__end'] : "23:59");
        $teleSupportIcon = $icon ? $icon : "fas fa-phone-alt";

?>
        <?php if ($style == '1') : ?>
            <div class="button-wrapper">

                <button <?php if ($timezone) { ?> data-timezone="<?php esc_attr($timezone); ?>" <?php } ?> class="teleSupportButtons teleSupport-button-4 tg-btn-bg <?php echo esc_attr($visibility); ?> <?php echo esc_attr($rounded); ?> avatar-active <?php echo esc_attr($sizes); ?>" data-btnavailablety='{ "sunday":"<?php echo esc_attr($sunday); ?>", "monday":"<?php echo esc_attr($monday); ?>", "tuesday":"<?php echo esc_attr($tuesday); ?>", "wednesday":"<?php echo esc_attr($wednesday); ?>", "thursday":"<?php echo esc_attr($thursday); ?>", "friday":"<?php echo esc_attr($friday); ?>", "saturday":"<?php echo esc_attr($saturday); ?>" }'>
                    <?php if ($photo) { ?>
                        <img src="<?php echo esc_attr($photo); ?>" />
                    <?php } ?>
                    <div class="info-wrapper">
                        <?php if ($name || $designation) { ?>
                            <p class="info"><?php if ($name) { ?><?php echo esc_html($name); ?><?php } ?> <?php if ($designation) { ?>/ <?php echo esc_html($designation); ?><?php } ?></p>
                        <?php } ?>
                        <?php if ($labelText) { ?>
                            <p class="title"><?php echo esc_html($labelText); ?></p>
                        <?php } ?>
                        <?php if ($onlineText) { ?>
                            <p class="online"><?php echo esc_html($onlineText); ?></p>
                        <?php } ?>
                        <?php if ($offlineText) { ?>
                            <p class="offline"><?php echo esc_html($offlineText); ?></p>
                        <?php } ?>
                    </div>
                    <a href="https://t.me/t.me/<?php echo $channel; ?>" target="_blank"></a>
                </button>
            </div>
        <?php else : ?>
            <div class="button-wrapper">
                <a href="tel:<?php echo $channel; ?>" class="teleSupport-button-2 <?php echo esc_attr($icon__bg); ?> tg-btn-bg <?php echo esc_attr($visibility); ?> <?php echo esc_attr($rounded); ?> <?php echo esc_attr($sizes); ?>">
                    <i class="<?php echo $teleSupportIcon; ?>"></i> <?php if ($labelText) { ?><span><?php echo esc_html($labelText); ?></span><?php } ?>
                </a>
            </div>
        <?php endif; ?>
<?php }
}
