<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clinics')->insert(
            [
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"No-drop Clinic","name_sin"=>"No-drop Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Thorns-Diagnosis Clinic","name_sin"=>"Thorns-Diagnosis Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Vātavyadī Clinic","name_sin"=>"Vātavyadī Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Acid Bile and Catarrh Clinic","name_sin"=>"Acid Bile and Catarrh Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Non-Communicable Diseases Clinic","name_sin"=>"Non-Communicable Diseases Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Skin Diseases Clinic","name_sin"=>"Skin Diseases Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Surgery Clinic","name_sin"=>"Surgery Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Yoga Clinic","name_sin"=>"Yoga Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"Beauty Clinic","name_sin"=>"Beauty Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"doctor_id"=>1,"name_eng"=>"External Clinic","name_sin"=>"External Clinic","recuring"=>"monthly","start-date"=>Carbon::now()->toDateString()],
            ]);
    }
}
