<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Productivity extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productivities')->insert([
            [
                'Drawer_ID' => 'DRW_001',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 12,
                'Unique_Item_Types' => 4,
                'Item_List' => 'CUTL01, CUTL02, CUP01, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_002',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 11,
                'Unique_Item_Types' => 5,
                'Item_List' => 'CUP01, BUT02, SNK02, CUTL02, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_003',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 15,
                'Unique_Item_Types' => 7,
                'Item_List' => 'SNK02, BUT02, DRK05, SNK03, STR01, JAM02, CUTL01'
            ],
            [
                'Drawer_ID' => 'DRW_004',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 20,
                'Unique_Item_Types' => 9,
                'Item_List' => 'BUT01, BRD02, FRU01, JAM02, SNK03, STR01, TIS01, JAM01, FRU02'
            ],
            [
                'Drawer_ID' => 'DRW_005',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 12,
                'Unique_Item_Types' => 5,
                'Item_List' => 'FRU01, MIL01, TIS01, DRK05, DRK03'
            ],
            [
                'Drawer_ID' => 'DRW_006',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 36,
                'Unique_Item_Types' => 14,
                'Item_List' => 'BUT01, SNK02, DRK01, SNK01, CUTL02, BRD02, STR01, SNK05, BRD01, DRK05, CUP02, CUTL01, DRK03, SUG01'
            ],
            [
                'Drawer_ID' => 'DRW_007',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 23,
                'Unique_Item_Types' => 10,
                'Item_List' => 'SNK01, CUTL01, STR01, SNK02, CUP02, DRK03, SUG01, TIS01, BUT01, CUP01'
            ],
            [
                'Drawer_ID' => 'DRW_008',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'BUT01, JAM02, NAP01, SNK01, DRK03, DRK04, JAM01, CUP01, TIS01, CUTL01, SNK04, FRU02, SNK02, CUP02, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_009',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 15,
                'Unique_Item_Types' => 7,
                'Item_List' => 'NAP01, DRK03, DRK02, FRU02, CUP01, CUTL01, BUT01'
            ],
            [
                'Drawer_ID' => 'DRW_010',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 29,
                'Unique_Item_Types' => 12,
                'Item_List' => 'SNK05, CUP01, BRD01, SUG01, JAM01, SNK03, TIS01, SNK04, DRK02, STR01, SNK02, DRK04'
            ],
            [
                'Drawer_ID' => 'DRW_011',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 28,
                'Unique_Item_Types' => 11,
                'Item_List' => 'TIS01, JAM01, BRD02, FRU02, SNK05, CUTL02, STR01, SNK04, SNK02, DRK02, NAP01'
            ],
            [
                'Drawer_ID' => 'DRW_012',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 45,
                'Unique_Item_Types' => 17,
                'Item_List' => 'DRK03, SNK04, CUP01, STR01, JAM01, FRU01, CUTL02, TIS01, CUTL01, JAM02, DRK02, NAP01, SNK05, SUG01, SNK02, MIL01, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_013',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 31,
                'Unique_Item_Types' => 13,
                'Item_List' => 'DRK04, SNK01, DRK02, CUP02, SUG01, CUTL01, FRU01, JAM01, SNK05, SNK04, CUTL02, NAP01, MIL01'
            ],
            [
                'Drawer_ID' => 'DRW_014',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 31,
                'Unique_Item_Types' => 13,
                'Item_List' => 'CUP02, DRK05, BRD02, TIS01, SUG01, BRD01, BUT01, SNK01, DRK04, DRK02, BUT02, SNK04, MIL01'
            ],
            [
                'Drawer_ID' => 'DRW_015',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 41,
                'Unique_Item_Types' => 16,
                'Item_List' => 'BUT01, TIS01, CUTL02, STR01, DRK02, BRD01, DRK03, JAM02, SNK03, FRU01, JAM01, SNK04, DRK01, SNK05, SNK02, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_016',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 12,
                'Unique_Item_Types' => 5,
                'Item_List' => 'BRD01, BUT01, NAP01, STR01, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_017',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 18,
                'Unique_Item_Types' => 8,
                'Item_List' => 'DRK05, CUTL02, FRU01, SNK01, SNK03, BUT02, CUP02, DRK01'
            ],
            [
                'Drawer_ID' => 'DRW_018',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 29,
                'Unique_Item_Types' => 12,
                'Item_List' => 'CUP02, SNK02, SNK01, JAM02, BUT02, DRK05, STR01, TIS01, FRU02, DRK02, JAM01, DRK01'
            ],
            [
                'Drawer_ID' => 'DRW_019',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 13,
                'Unique_Item_Types' => 6,
                'Item_List' => 'BRD01, SNK01, JAM02, DRK01, CUP02, SUG01'
            ],
            [
                'Drawer_ID' => 'DRW_020',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'SNK01, DRK01, NAP01, SNK02, DRK03, CUP02, JAM02, MIL01, CUTL02, SUG01, JAM01, FRU02, BUT02, FRU01, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_021',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 12,
                'Unique_Item_Types' => 5,
                'Item_List' => 'BUT01, STR01, DRK03, SNK03, JAM02'
            ],
            [
                'Drawer_ID' => 'DRW_022',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'SNK01, STR01, BRD01, SNK03, JAM02, DRK03, BUT02, JAM01, BRD02, SUG01, SNK05, DRK05, SNK02, FRU01, CUTL01'
            ],
            [
                'Drawer_ID' => 'DRW_023',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 40,
                'Unique_Item_Types' => 16,
                'Item_List' => 'SNK05, DRK05, SNK03, JAM01, STR01, DRK03, FRU01, BUT01, CUP01, SNK01, CUP02, SNK02, BRD02, CUTL02, TIS01, BRD01'
            ],
            [
                'Drawer_ID' => 'DRW_024',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 20,
                'Unique_Item_Types' => 9,
                'Item_List' => 'DRK05, CUTL02, NAP01, CUTL01, DRK02, SNK02, TIS01, SNK05, DRK04'
            ],
            [
                'Drawer_ID' => 'DRW_025',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 22,
                'Unique_Item_Types' => 10,
                'Item_List' => 'TIS01, DRK01, BRD01, FRU01, JAM01, CUP02, JAM02, DRK04, BUT02, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_026',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'CUTL02, SNK05, BUT01, BRD01, DRK05, STR01, SNK03, FRU01, JAM01, DRK04, BUT02, SNK02, DRK03, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_027',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 29,
                'Unique_Item_Types' => 12,
                'Item_List' => 'DRK04, JAM02, CUP01, BRD02, SNK01, BUT01, SNK05, STR01, FRU01, SNK02, SNK04, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_028',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 28,
                'Unique_Item_Types' => 11,
                'Item_List' => 'SNK02, DRK04, JAM01, BRD02, DRK02, SNK03, NAP01, SNK05, FRU01, BUT02, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_029',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 25,
                'Unique_Item_Types' => 11,
                'Item_List' => 'JAM01, DRK01, DRK02, FRU01, DRK04, BUT02, SNK02, NAP01, JAM02, BRD02, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_030',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 31,
                'Unique_Item_Types' => 13,
                'Item_List' => 'SNK03, SNK01, FRU02, DRK01, SNK05, SNK04, BUT02, SUG01, BRD02, BRD01, JAM02, JAM01, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_031',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 21,
                'Unique_Item_Types' => 9,
                'Item_List' => 'DRK03, DRK04, FRU02, BRD02, SNK05, BUT01, TIS01, SNK03, CUTL01'
            ],
            [
                'Drawer_ID' => 'DRW_032',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 23,
                'Unique_Item_Types' => 10,
                'Item_List' => 'FRU01, CUP02, SNK04, DRK05, SUG01, BRD01, JAM01, SNK03, STR01, CUTL02'
            ],
            [
                'Drawer_ID' => 'DRW_033',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'SNK02, JAM01, FRU02, CUP01, DRK01, DRK04, NAP01, BUT01, SNK05, CUTL01, FRU01, STR01, DRK03, BUT02'
            ],
            [
                'Drawer_ID' => 'DRW_034',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'BUT01, JAM02, SNK05, DRK01, FRU01, CUTL01, STR01, BRD01, BRD02, DRK04, CUP02, DRK03, JAM01, SNK02'
            ],
            [
                'Drawer_ID' => 'DRW_035',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 23,
                'Unique_Item_Types' => 10,
                'Item_List' => 'DRK05, DRK03, JAM02, BRD02, DRK04, CUP02, CUTL02, SNK01, SNK04, BUT01'
            ],
            [
                'Drawer_ID' => 'DRW_036',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 30,
                'Unique_Item_Types' => 12,
                'Item_List' => 'DRK05, SNK04, JAM01, DRK02, CUTL02, NAP01, CUTL01, SUG01, SNK01, CUP02, DRK04, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_037',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 28,
                'Unique_Item_Types' => 11,
                'Item_List' => 'SNK01, CUTL02, DRK04, JAM02, SNK03, STR01, SUG01, DRK05, DRK01, DRK03, BRD01'
            ],
            [
                'Drawer_ID' => 'DRW_038',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 25,
                'Unique_Item_Types' => 11,
                'Item_List' => 'JAM01, TIS01, SNK02, BUT01, SNK04, CUTL02, DRK02, DRK05, JAM02, STR01, NAP01'
            ],
            [
                'Drawer_ID' => 'DRW_039',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 12,
                'Unique_Item_Types' => 5,
                'Item_List' => 'CUP02, DRK03, JAM01, NAP01, JAM02'
            ],
            [
                'Drawer_ID' => 'DRW_040',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 37,
                'Unique_Item_Types' => 15,
                'Item_List' => 'DRK02, DRK04, DRK05, BUT01, SNK04, CUTL01, BUT02, CUTL02, CUP01, NAP01, FRU02, BRD02, DRK01, FRU01, SNK05'
            ],
            [
                'Drawer_ID' => 'DRW_041',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 45,
                'Unique_Item_Types' => 17,
                'Item_List' => 'JAM01, SNK03, SNK05, CUP01, DRK04, BUT02, DRK05, BRD02, DRK01, SNK02, NAP01, FRU02, TIS01, DRK02, FRU01, SNK04, BRD01'
            ],
            [
                'Drawer_ID' => 'DRW_042',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 27,
                'Unique_Item_Types' => 11,
                'Item_List' => 'SNK01, FRU01, JAM01, BUT01, JAM02, CUP01, DRK02, FRU02, DRK04, SNK03, SNK05'
            ],
            [
                'Drawer_ID' => 'DRW_043',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 17,
                'Unique_Item_Types' => 8,
                'Item_List' => 'FRU02, DRK02, DRK04, BRD01, BUT01, SNK01, SNK03, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_044',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 22,
                'Unique_Item_Types' => 10,
                'Item_List' => 'FRU01, JAM02, DRK03, BRD01, BUT01, NAP01, SNK01, FRU02, SNK02, JAM01'
            ],
            [
                'Drawer_ID' => 'DRW_045',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'SNK02, FRU02, SNK03, BRD01, SNK04, NAP01, JAM02, BRD02, DRK02, SNK01, CUTL01, TIS01, DRK05, DRK03, JAM01'
            ],
            [
                'Drawer_ID' => 'DRW_046',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 21,
                'Unique_Item_Types' => 9,
                'Item_List' => 'SNK03, CUP02, DRK02, SNK04, TIS01, JAM01, DRK04, DRK03, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_047',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 24,
                'Unique_Item_Types' => 10,
                'Item_List' => 'STR01, JAM01, SNK01, BRD02, FRU02, TIS01, DRK01, JAM02, BRD01, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_048',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'SNK02, JAM02, CUTL01, DRK01, CUP02, TIS01, NAP01, BUT01, BRD02, SNK01, SUG01, DRK04, FRU01, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_049',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 22,
                'Unique_Item_Types' => 10,
                'Item_List' => 'NAP01, DRK03, STR01, DRK02, SNK01, FRU02, BUT02, JAM01, BRD02, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_050',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 17,
                'Unique_Item_Types' => 8,
                'Item_List' => 'DRK01, SNK04, SNK01, JAM02, STR01, TIS01, SNK03, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_051',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 37,
                'Unique_Item_Types' => 15,
                'Item_List' => 'DRK05, JAM01, DRK04, TIS01, BRD01, DRK01, CUTL01, JAM02, SNK04, DRK03, SNK05, BUT01, NAP01, SNK03, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_052',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 20,
                'Unique_Item_Types' => 9,
                'Item_List' => 'FRU02, DRK05, SNK01, SNK03, BUT02, DRK02, JAM02, DRK03, BUT01'
            ],
            [
                'Drawer_ID' => 'DRW_053',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 13,
                'Unique_Item_Types' => 6,
                'Item_List' => 'BUT01, JAM02, DRK04, SNK03, CUP02, SNK02'
            ],
            [
                'Drawer_ID' => 'DRW_054',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 19,
                'Unique_Item_Types' => 9,
                'Item_List' => 'SNK02, TIS01, SNK04, BRD02, JAM01, FRU01, CUTL02, SNK01, BUT02'
            ],
            [
                'Drawer_ID' => 'DRW_055',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 18,
                'Unique_Item_Types' => 8,
                'Item_List' => 'SNK04, DRK01, SNK03, DRK05, DRK02, CUP01, NAP01, JAM01'
            ],
            [
                'Drawer_ID' => 'DRW_056',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 16,
                'Unique_Item_Types' => 7,
                'Item_List' => 'DRK03, SNK03, SNK01, NAP01, DRK05, SNK02, BUT01'
            ],
            [
                'Drawer_ID' => 'DRW_057',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 20,
                'Unique_Item_Types' => 9,
                'Item_List' => 'SNK05, JAM01, SNK04, SNK03, SNK02, NAP01, CUTL02, BRD02, CUTL01'
            ],
            [
                'Drawer_ID' => 'DRW_058',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 18,
                'Unique_Item_Types' => 8,
                'Item_List' => 'CUP02, DRK05, DRK03, CUTL01, FRU01, NAP01, DRK04, BUT02'
            ],
            [
                'Drawer_ID' => 'DRW_059',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 45,
                'Unique_Item_Types' => 17,
                'Item_List' => 'JAM01, SNK04, BRD01, BUT01, JAM02, DRK04, CUP02, FRU01, SUG01, SNK03, FRU02, DRK03, SNK02, CUP01, SNK05, SNK01, DRK01'
            ],
            [
                'Drawer_ID' => 'DRW_060',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'BRD01, NAP01, SNK02, SNK05, SNK04, CUP01, BRD02, JAM01, SUG01, TIS01, SNK03, STR01, DRK02, BUT01, JAM02'
            ],
            [
                'Drawer_ID' => 'DRW_061',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 19,
                'Unique_Item_Types' => 9,
                'Item_List' => 'SNK02, CUTL02, STR01, FRU02, DRK02, JAM02, BUT01, JAM01, SNK05'
            ],
            [
                'Drawer_ID' => 'DRW_062',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 18,
                'Unique_Item_Types' => 8,
                'Item_List' => 'SNK02, DRK04, CUTL01, SNK03, BRD02, STR01, BUT02, JAM01'
            ],
            [
                'Drawer_ID' => 'DRW_063',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 13,
                'Unique_Item_Types' => 6,
                'Item_List' => 'BRD02, BUT02, DRK01, JAM02, JAM01, TIS01'
            ],
            [
                'Drawer_ID' => 'DRW_064',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 25,
                'Unique_Item_Types' => 11,
                'Item_List' => 'BUT01, DRK03, JAM02, JAM01, DRK05, SNK03, SNK04, STR01, DRK04, BRD01, DRK02'
            ],
            [
                'Drawer_ID' => 'DRW_065',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'CUTL02, CUP01, JAM02, STR01, FRU02, DRK02, SNK05, SNK04, BUT02, SNK03, SNK01, DRK04, DRK03, SNK02'
            ],
            [
                'Drawer_ID' => 'DRW_066',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 10,
                'Unique_Item_Types' => 4,
                'Item_List' => 'SNK02, DRK05, BUT01, SNK01'
            ],
            [
                'Drawer_ID' => 'DRW_067',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 35,
                'Unique_Item_Types' => 14,
                'Item_List' => 'CUTL01, DRK05, BRD01, SNK03, SNK02, BUT02, DRK01, NAP01, SNK05, CUP01, SNK04, DRK03, BRD02, TIS01'
            ],
            [
                'Drawer_ID' => 'DRW_068',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 25,
                'Unique_Item_Types' => 11,
                'Item_List' => 'CUP02, DRK05, STR01, SNK03, SNK04, TIS01, SNK01, JAM02, DRK01, CUTL01, DRK02'
            ],
            [
                'Drawer_ID' => 'DRW_069',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 30,
                'Unique_Item_Types' => 12,
                'Item_List' => 'DRK04, BRD01, SNK01, SNK02, BUT02, NAP01, SNK04, DRK02, DRK03, BUT01, SNK03, FRU01'
            ],
            [
                'Drawer_ID' => 'DRW_070',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 14,
                'Unique_Item_Types' => 6,
                'Item_List' => 'DRK01, STR01, BRD01, TIS01, SNK04, DRK04'
            ],
            [
                'Drawer_ID' => 'DRW_071',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 33,
                'Unique_Item_Types' => 14,
                'Item_List' => 'DRK04, SNK02, BUT01, SNK03, STR01, NAP01, BRD02, CUTL02, SNK05, JAM01, SNK04, DRK05, CUP02, CUP01'
            ],
            [
                'Drawer_ID' => 'DRW_072',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'JAM01, FRU02, SNK05, SNK01, TIS01, SUG01, STR01, DRK04, CUP02, DRK01, SNK04, DRK03, CUTL02, DRK05, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_073',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 35,
                'Unique_Item_Types' => 14,
                'Item_List' => 'SNK01, BRD01, CUP02, DRK04, BUT02, DRK05, SUG01, JAM01, DRK02, SNK02, DRK01, NAP01, SNK04, DRK03'
            ],
            [
                'Drawer_ID' => 'DRW_074',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'DRK04, BUT02, CUP01, DRK01, DRK05, BRD01, JAM02, BUT01, NAP01, JAM01, TIS01, SNK03, SNK02, SNK04'
            ],
            [
                'Drawer_ID' => 'DRW_075',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 45,
                'Unique_Item_Types' => 17,
                'Item_List' => 'BRD01, SNK02, DRK02, SNK01, DRK05, CUP01, JAM02, DRK01, CUTL02, FRU02, CUTL01, JAM01, DRK04, TIS01, BUT02, SNK03, STR01'
            ],
            [
                'Drawer_ID' => 'DRW_076',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 30,
                'Unique_Item_Types' => 12,
                'Item_List' => 'SNK04, DRK04, JAM02, FRU02, SNK01, BRD01, CUP02, DRK02, DRK05, JAM01, BUT01, FRU01'
            ],
            [
                'Drawer_ID' => 'DRW_077',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 35,
                'Unique_Item_Types' => 14,
                'Item_List' => 'TIS01, SNK02, STR01, SNK03, CUP02, BUT01, DRK04, SNK04, JAM01, DRK01, NAP01, CUP01, SNK01, FRU02'
            ],
            [
                'Drawer_ID' => 'DRW_078',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 31,
                'Unique_Item_Types' => 13,
                'Item_List' => 'DRK05, SNK01, JAM01, SNK04, CUTL01, FRU02, BRD02, CUTL02, STR01, DRK01, DRK02, SNK03, JAM02'
            ],
            [
                'Drawer_ID' => 'DRW_079',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 37,
                'Unique_Item_Types' => 15,
                'Item_List' => 'SNK02, STR01, NAP01, BRD01, CUTL02, JAM01, BRD02, DRK03, SNK03, FRU01, BUT01, SNK04, CUTL01, DRK01, TIS01'
            ],
            [
                'Drawer_ID' => 'DRW_080',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 35,
                'Unique_Item_Types' => 14,
                'Item_List' => 'DRK01, SNK05, TIS01, FRU02, BUT02, DRK04, JAM02, CUTL01, JAM01, SNK02, SNK01, BUT01, SNK03, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_081',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 30,
                'Unique_Item_Types' => 12,
                'Item_List' => 'JAM01, BUT01, SNK02, SNK01, DRK01, BRD02, DRK05, SNK05, DRK03, FRU01, CUP02, BUT02'
            ],
            [
                'Drawer_ID' => 'DRW_082',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 11,
                'Unique_Item_Types' => 5,
                'Item_List' => 'SNK02, BUT01, STR01, BRD01, FRU01'
            ],
            [
                'Drawer_ID' => 'DRW_083',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 33,
                'Unique_Item_Types' => 14,
                'Item_List' => 'SNK02, DRK01, BRD02, BUT02, FRU02, CUP01, SNK01, SNK04, BUT01, NAP01, CUTL02, DRK04, JAM01, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_084',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 30,
                'Unique_Item_Types' => 12,
                'Item_List' => 'SNK03, DRK01, JAM01, FRU02, DRK04, BUT02, SNK01, SNK02, DRK05, JAM02, SNK04, BUT01'
            ],
            [
                'Drawer_ID' => 'DRW_085',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 13,
                'Unique_Item_Types' => 6,
                'Item_List' => 'BUT01, JAM02, FRU02, CUP01, FRU01, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_086',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 21,
                'Unique_Item_Types' => 9,
                'Item_List' => 'DRK03, SNK04, DRK05, FRU01, SNK02, SNK05, SNK01, CUP01, DRK04'
            ],
            [
                'Drawer_ID' => 'DRW_087',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 16,
                'Unique_Item_Types' => 8,
                'Item_List' => 'JAM02, TIS01, SNK03, JAM01, CUP01, BRD02, NAP01, BUT01'
            ],
            [
                'Drawer_ID' => 'DRW_088',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Amenities',
                'Total_Items' => 42,
                'Unique_Item_Types' => 15,
                'Item_List' => 'STR01, BUT02, CUTL02, BRD02, TIS01, CUP02, SNK02, NAP01, SNK01, FRU02, JAM01, CUTL01, MIL01, DRK02, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_089',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 31,
                'Unique_Item_Types' => 15,
                'Item_List' => 'BUT02, BRD02, BRD01, DRK05, BUT01, TIS01, SNK01, CUP01, DRK01, DRK04, CUTL02, SNK05, JAM01, MIL01, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_090',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 8,
                'Unique_Item_Types' => 4,
                'Item_List' => 'SNK04, STR01, CUP01, JAM01'
            ],
            [
                'Drawer_ID' => 'DRW_091',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 38,
                'Unique_Item_Types' => 15,
                'Item_List' => 'CUTL01, DRK03, JAM02, SNK05, BUT02, SNK01, SNK02, STR01, SNK04, SNK03, DRK05, DRK04, BUT01, SUG01, FRU01'
            ],
            [
                'Drawer_ID' => 'DRW_092',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 13,
                'Unique_Item_Types' => 5,
                'Item_List' => 'SNK05, CUP02, SNK01, MIL01, DRK05'
            ],
            [
                'Drawer_ID' => 'DRW_093',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 42,
                'Unique_Item_Types' => 16,
                'Item_List' => 'JAM01, BRD01, BUT01, SNK04, SNK02, DRK03, FRU01, SNK05, DRK01, DRK02, STR01, SNK03, DRK05, JAM02, BRD02, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_094',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 19,
                'Unique_Item_Types' => 9,
                'Item_List' => 'SNK05, DRK03, BUT02, DRK02, SNK01, SNK04, JAM02, SNK03, BRD02'
            ],
            [
                'Drawer_ID' => 'DRW_095',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 40,
                'Unique_Item_Types' => 16,
                'Item_List' => 'CUTL02, BUT02, SNK03, DRK02, DRK04, BRD02, TIS01, SNK02, FRU01, SNK05, BRD01, CUTL01, DRK03, NAP01, SNK04, STR01'
            ],
            [
                'Drawer_ID' => 'DRW_096',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 16,
                'Unique_Item_Types' => 7,
                'Item_List' => 'STR01, SNK05, BRD01, SNK04, SNK03, FRU01, CUP02'
            ],
            [
                'Drawer_ID' => 'DRW_097',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Beverage',
                'Total_Items' => 29,
                'Unique_Item_Types' => 12,
                'Item_List' => 'SNK01, SNK05, DRK01, FRU01, JAM01, DRK04, SNK03, CUP02, BUT02, TIS01, DRK03, SNK04'
            ],
            [
                'Drawer_ID' => 'DRW_098',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 31,
                'Unique_Item_Types' => 13,
                'Item_List' => 'SNK04, BUT02, DRK03, SNK05, SNK02, BUT01, NAP01, DRK05, CUTL02, TIS01, JAM01, DRK01, SNK03'
            ],
            [
                'Drawer_ID' => 'DRW_099',
                'Flight_Type' => 'Business',
                'Drawer_Category' => 'Breakfast',
                'Total_Items' => 18,
                'Unique_Item_Types' => 8,
                'Item_List' => 'DRK03, DRK05, JAM01, SNK04, SNK05, SNK01, BUT02, SNK02'
            ],
            [
                'Drawer_ID' => 'DRW_100',
                'Flight_Type' => 'Economy',
                'Drawer_Category' => 'Snack',
                'Total_Items' => 34,
                'Unique_Item_Types' => 14,
                'Item_List' => 'SNK02, SNK03, STR01, DRK02, TIS01, SNK04, DRK04, JAM01, BRD01, CUTL02, SNK05, CUTL01, FRU02, DRK01'
            ]
        ]);
    }
}
