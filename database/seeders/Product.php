<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-E19',
                'Expiry_Date' => '2025-12-10',
                'Quantity' => 231
            ],
            [
                'Product_ID' => 'CHS010',
                'Product_Name' => 'Cheese Portion Pack',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-E99',
                'Expiry_Date' => '2025-10-29',
                'Quantity' => 484
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-A68',
                'Expiry_Date' => '2025-12-05',
                'Quantity' => 357
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-C79',
                'Expiry_Date' => '2025-10-14',
                'Quantity' => 509
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-B86',
                'Expiry_Date' => '2025-12-12',
                'Quantity' => 500
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-D64',
                'Expiry_Date' => '2025-11-09',
                'Quantity' => 363
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-E22',
                'Expiry_Date' => '2025-10-14',
                'Quantity' => 589
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-B26',
                'Expiry_Date' => '2025-11-14',
                'Quantity' => 191
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-B85',
                'Expiry_Date' => '2025-10-19',
                'Quantity' => 100
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-C83',
                'Expiry_Date' => '2025-11-26',
                'Quantity' => 585
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-A14',
                'Expiry_Date' => '2025-12-10',
                'Quantity' => 255
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-A79',
                'Expiry_Date' => '2025-11-14',
                'Quantity' => 455
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-A95',
                'Expiry_Date' => '2025-12-23',
                'Quantity' => 177
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-D59',
                'Expiry_Date' => '2025-11-16',
                'Quantity' => 379
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-B89',
                'Expiry_Date' => '2025-11-08',
                'Quantity' => 302
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-A76',
                'Expiry_Date' => '2025-12-24',
                'Quantity' => 207
            ],
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-B58',
                'Expiry_Date' => '2025-10-22',
                'Quantity' => 219
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-E22',
                'Expiry_Date' => '2025-11-07',
                'Quantity' => 406
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-C84',
                'Expiry_Date' => '2025-12-15',
                'Quantity' => 384
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-D65',
                'Expiry_Date' => '2025-11-25',
                'Quantity' => 304
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-D50',
                'Expiry_Date' => '2025-11-06',
                'Quantity' => 397
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-D63',
                'Expiry_Date' => '2025-12-30',
                'Quantity' => 114
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-B37',
                'Expiry_Date' => '2026-01-03',
                'Quantity' => 305
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-E95',
                'Expiry_Date' => '2025-12-10',
                'Quantity' => 413
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-B74',
                'Expiry_Date' => '2025-11-21',
                'Quantity' => 552
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-C83',
                'Expiry_Date' => '2025-11-01',
                'Quantity' => 537
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-A49',
                'Expiry_Date' => '2025-12-04',
                'Quantity' => 308
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-C41',
                'Expiry_Date' => '2025-12-03',
                'Quantity' => 319
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-C65',
                'Expiry_Date' => '2025-10-29',
                'Quantity' => 278
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-B81',
                'Expiry_Date' => '2025-11-13',
                'Quantity' => 242
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-D36',
                'Expiry_Date' => '2025-11-06',
                'Quantity' => 444
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-D54',
                'Expiry_Date' => '2025-10-18',
                'Quantity' => 597
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-B95',
                'Expiry_Date' => '2025-12-14',
                'Quantity' => 568
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-A60',
                'Expiry_Date' => '2026-01-03',
                'Quantity' => 351
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-D14',
                'Expiry_Date' => '2025-12-11',
                'Quantity' => 212
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-E39',
                'Expiry_Date' => '2025-10-12',
                'Quantity' => 303
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-D46',
                'Expiry_Date' => '2026-01-04',
                'Quantity' => 380
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-D29',
                'Expiry_Date' => '2025-11-29',
                'Quantity' => 573
            ],
            [
                'Product_ID' => 'CHS010',
                'Product_Name' => 'Cheese Portion Pack',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-E46',
                'Expiry_Date' => '2025-10-11',
                'Quantity' => 510
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-C62',
                'Expiry_Date' => '2025-10-14',
                'Quantity' => 437
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-A71',
                'Expiry_Date' => '2025-11-12',
                'Quantity' => 384
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-E52',
                'Expiry_Date' => '2025-12-11',
                'Quantity' => 478
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-B72',
                'Expiry_Date' => '2025-11-10',
                'Quantity' => 575
            ],
            [
                'Product_ID' => 'CHS010',
                'Product_Name' => 'Cheese Portion Pack',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-D39',
                'Expiry_Date' => '2025-11-11',
                'Quantity' => 281
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-C86',
                'Expiry_Date' => '2025-12-15',
                'Quantity' => 340
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-D40',
                'Expiry_Date' => '2025-11-21',
                'Quantity' => 577
            ],
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-A52',
                'Expiry_Date' => '2025-12-07',
                'Quantity' => 553
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-A37',
                'Expiry_Date' => '2025-11-16',
                'Quantity' => 87
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-A79',
                'Expiry_Date' => '2025-10-16',
                'Quantity' => 201
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-A97',
                'Expiry_Date' => '2025-11-10',
                'Quantity' => 217
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-B47',
                'Expiry_Date' => '2025-11-09',
                'Quantity' => 342
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-C13',
                'Expiry_Date' => '2025-11-10',
                'Quantity' => 260
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-B62',
                'Expiry_Date' => '2025-11-06',
                'Quantity' => 469
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-D14',
                'Expiry_Date' => '2026-01-07',
                'Quantity' => 216
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-D41',
                'Expiry_Date' => '2025-12-17',
                'Quantity' => 586
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-E10',
                'Expiry_Date' => '2025-11-23',
                'Quantity' => 237
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-B97',
                'Expiry_Date' => '2025-10-30',
                'Quantity' => 417
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-B71',
                'Expiry_Date' => '2026-01-05',
                'Quantity' => 173
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-E23',
                'Expiry_Date' => '2025-10-25',
                'Quantity' => 175
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-A38',
                'Expiry_Date' => '2026-01-03',
                'Quantity' => 100
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-C85',
                'Expiry_Date' => '2025-10-23',
                'Quantity' => 291
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-A29',
                'Expiry_Date' => '2025-11-14',
                'Quantity' => 116
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-D21',
                'Expiry_Date' => '2025-11-28',
                'Quantity' => 376
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-E49',
                'Expiry_Date' => '2025-10-25',
                'Quantity' => 585
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-D55',
                'Expiry_Date' => '2026-01-02',
                'Quantity' => 144
            ],
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-A71',
                'Expiry_Date' => '2025-11-26',
                'Quantity' => 135
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-C15',
                'Expiry_Date' => '2025-10-11',
                'Quantity' => 574
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-B86',
                'Expiry_Date' => '2025-10-27',
                'Quantity' => 325
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-A15',
                'Expiry_Date' => '2025-12-03',
                'Quantity' => 145
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-E41',
                'Expiry_Date' => '2025-12-25',
                'Quantity' => 86
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-B14',
                'Expiry_Date' => '2025-11-26',
                'Quantity' => 595
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-E90',
                'Expiry_Date' => '2025-12-27',
                'Quantity' => 557
            ],
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-D85',
                'Expiry_Date' => '2025-10-17',
                'Quantity' => 100
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-D43',
                'Expiry_Date' => '2025-12-13',
                'Quantity' => 133
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-E97',
                'Expiry_Date' => '2025-11-29',
                'Quantity' => 131
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-D63',
                'Expiry_Date' => '2025-11-18',
                'Quantity' => 391
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-D81',
                'Expiry_Date' => '2025-11-03',
                'Quantity' => 600
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-E49',
                'Expiry_Date' => '2025-10-27',
                'Quantity' => 284
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-B24',
                'Expiry_Date' => '2025-10-19',
                'Quantity' => 440
            ],
            [
                'Product_ID' => 'SND004',
                'Product_Name' => 'Chicken Sandwich',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-E58',
                'Expiry_Date' => '2025-11-20',
                'Quantity' => 282
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-D14',
                'Expiry_Date' => '2025-10-12',
                'Quantity' => 434
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-C80',
                'Expiry_Date' => '2025-12-05',
                'Quantity' => 431
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-B34',
                'Expiry_Date' => '2025-10-20',
                'Quantity' => 381
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-E11',
                'Expiry_Date' => '2025-10-24',
                'Quantity' => 312
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-B86',
                'Expiry_Date' => '2025-12-16',
                'Quantity' => 301
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-E64',
                'Expiry_Date' => '2025-11-22',
                'Quantity' => 193
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-D75',
                'Expiry_Date' => '2025-11-28',
                'Quantity' => 594
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-D14',
                'Expiry_Date' => '2025-11-09',
                'Quantity' => 355
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-A12',
                'Expiry_Date' => '2025-11-13',
                'Quantity' => 124
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-A40',
                'Expiry_Date' => '2025-11-24',
                'Quantity' => 174
            ],
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-B85',
                'Expiry_Date' => '2025-12-09',
                'Quantity' => 456
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-C22',
                'Expiry_Date' => '2025-10-27',
                'Quantity' => 474
            ],
            [
                'Product_ID' => 'SNK001',
                'Product_Name' => 'Snack Box Economy',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-B61',
                'Expiry_Date' => '2025-11-09',
                'Quantity' => 218
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '200ml',
                'LOT_Number' => 'LOT-C45',
                'Expiry_Date' => '2025-10-18',
                'Quantity' => 202
            ],
            [
                'Product_ID' => 'CHS010',
                'Product_Name' => 'Cheese Portion Pack',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-C78',
                'Expiry_Date' => '2025-12-16',
                'Quantity' => 381
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-E62',
                'Expiry_Date' => '2025-12-19',
                'Quantity' => 275
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-C79',
                'Expiry_Date' => '2025-12-07',
                'Quantity' => 213
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-B86',
                'Expiry_Date' => '2025-11-23',
                'Quantity' => 334
            ],
            [
                'Product_ID' => 'FRU009',
                'Product_Name' => 'Fruit Cup 150g',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-D98',
                'Expiry_Date' => '2025-12-13',
                'Quantity' => 587
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-B11',
                'Expiry_Date' => '2025-10-31',
                'Quantity' => 360
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-A67',
                'Expiry_Date' => '2025-10-20',
                'Quantity' => 374
            ],
            [
                'Product_ID' => 'CHS010',
                'Product_Name' => 'Cheese Portion Pack',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-C41',
                'Expiry_Date' => '2025-11-19',
                'Quantity' => 300
            ],
            [
                'Product_ID' => 'CHS010',
                'Product_Name' => 'Cheese Portion Pack',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-A49',
                'Expiry_Date' => '2025-10-12',
                'Quantity' => 512
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-A25',
                'Expiry_Date' => '2025-11-18',
                'Quantity' => 292
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-E26',
                'Expiry_Date' => '2025-12-01',
                'Quantity' => 121
            ],
            [
                'Product_ID' => 'COF006',
                'Product_Name' => 'Instant Coffee Stick',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-D33',
                'Expiry_Date' => '2025-12-26',
                'Quantity' => 390
            ],
            [
                'Product_ID' => 'DRK002',
                'Product_Name' => 'Bottled Water 0.5L',
                'Weight_or_Volume' => '300g',
                'LOT_Number' => 'LOT-C54',
                'Expiry_Date' => '2025-12-15',
                'Quantity' => 340
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-E58',
                'Expiry_Date' => '2025-12-20',
                'Quantity' => 173
            ],
            [
                'Product_ID' => 'SAL008',
                'Product_Name' => 'Mixed Salad Bowl',
                'Weight_or_Volume' => '250ml',
                'LOT_Number' => 'LOT-E57',
                'Expiry_Date' => '2025-10-22',
                'Quantity' => 324
            ],
            [
                'Product_ID' => 'BIS007',
                'Product_Name' => 'Sweet Biscuit Pack',
                'Weight_or_Volume' => '180g',
                'LOT_Number' => 'LOT-C22',
                'Expiry_Date' => '2025-12-07',
                'Quantity' => 193
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-C78',
                'Expiry_Date' => '2025-10-26',
                'Quantity' => 458
            ],
            [
                'Product_ID' => 'JCE005',
                'Product_Name' => 'Orange Juice 200ml',
                'Weight_or_Volume' => '100ml',
                'LOT_Number' => 'LOT-A15',
                'Expiry_Date' => '2025-10-18',
                'Quantity' => 434
            ],
            [
                'Product_ID' => 'MLK003',
                'Product_Name' => 'Powdered Milk Sachet',
                'Weight_or_Volume' => '150g',
                'LOT_Number' => 'LOT-A86',
                'Expiry_Date' => '2025-11-20',
                'Quantity' => 541
            ]
        ]);
    }
}
