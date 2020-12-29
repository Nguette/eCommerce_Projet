<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name"=>'Samsung Mobile',
            "price"=>'60000',
            "description"=>"A Smartphone with 4gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://cdn.samsung.com/etc/designs/smg/global/imgs/Social_Image_Samsung_Mobile_Smartphone_PCD_PF.jpg",
            ],

            [
                "name"=>'Tecno Mobile',
                "price"=>'75000',
                "description"=>"A Smartphone with 4gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://images.hindustantimes.com/tech/rf/image_size_960x540/HT/p2/2018/10/05/Pictures/_c0b1d9bc-c85d-11e8-978e-6307977af0b0.jpg",
                ],

                [
                    "name"=>'refrigerateur',
                    "price"=>'175000',
                    "description"=>"A fridge with much more feature",
                    "category"=>"fridge",
                    "gallery"=>"https://mktg.factosoft.com/consoglobe/image-upload/img/refrigerateur-classeA.jpg",
                    ],

                    [
                        "name"=>'Grandin televiseur',
                        "price"=>'200000',
                        "description"=>"A Smart tv with much more feature",
                        "category"=>"smart tv",
                        "gallery"=>"https://www.bing.com/images/search?view=detailV2&ccid=uN3YjsEt&id=9C57960BE52ACA3A8B5BF871D861B1BAC293D14B&thid=OIP.uN3YjsEtmnGUPABsrno8WwHaFj&mediaurl=https%3a%2f%2fmedia.conforama.fr%2fMedias%2f600000%2f80000%2f7000%2f300%2f30%2fG_687333_A.jpg&exph=600&expw=800&q=image+televiseur+&simid=608031416741990357&ck=AA9546BAEE1121FF755B31B94F9CD295&selectedIndex=10&FORM=IRPRST&ajaxhist=0",
                     ], 
                     
              ]);
    }
}
