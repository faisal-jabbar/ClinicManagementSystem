<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert(
            [
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "dashamulrishtaya", 'name_sinhala' => "dashamulrishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "draksharishtaya", 'name_sinhala' => "draksharishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "nimbarishtaya", 'name_sinhala' => "nimbarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "balarishtaya", 'name_sinhala' => "balarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "musthakarishtaya", 'name_sinhala' => "musthakarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "abhayarishtaya", 'name_sinhala' => "abhayarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "amurtharishtaya", 'name_sinhala' => "amurtharishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "ashwagandharishtaya", 'name_sinhala' => "ashwagandharishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "ashokarishtaya", 'name_sinhala' => "ashokarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "arjunarishtaya", 'name_sinhala' => "arjunarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'arishta','name_english' => "badirarishtaya", 'name_sinhala' => "badirarishtaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "aravindasawaya", 'name_sinhala' => "aravindasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "chandanasawaya", 'name_sinhala' => "chandanasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "kanakasawaya", 'name_sinhala' => "kanakasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "lauhasawaya", 'name_sinhala' => "lauhasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "pippalyadyasawaya", 'name_sinhala' => "pippalyadyasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "punarnawasawaya", 'name_sinhala' => "punarnawasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "sharibhadsawaya", 'name_sinhala' => "sharibhadsawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "ushirasawaya", 'name_sinhala' => "ushirasawaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'Āsava','name_english' => "chirabilwa kwathaya", 'name_sinhala' => "chirabilwa kwathaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'cyrup','name_english' => "wasaka sirap", 'name_sinhala' => "wasaka sirap"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'cyrup','name_english' => "maduka kassa paniya", 'name_sinhala' => "maduka kassa paniya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'cyrup','name_english' => "sidhdhajiwa wartha", 'name_sinhala' => "sidhdhajiwa wartha"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "bhashkara lawana churnaya", 'name_sinhala' => "bhashkara lawana churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "dhathri churnaya", 'name_sinhala' => "dhathri churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "dashangalepa churnaya", 'name_sinhala' => "dashangalepa churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "katphaladi churnaya", 'name_sinhala' => "katphaladi churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "hinguwashtaka churnaya", 'name_sinhala' => "hinguwashtaka churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "manibadhra churnaya", 'name_sinhala' => "manibadhra churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "manjanesruk (Toothpaste)", 'name_sinhala' => "manjanesruk (Toothpaste)"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "pushyanunga churnaya", 'name_sinhala' => "pushyanunga churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "sudarshana churnaya", 'name_sinhala' => "sudarshana churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "thalisadi churnaya", 'name_sinhala' => "thalisadi churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "awipaththikara churnaya", 'name_sinhala' => "awipaththikara churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "sithophaladi churnaya", 'name_sinhala' => "sithophaladi churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "wajrakshara churnaya", 'name_sinhala' => "wajrakshara churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "thriphala churnaya", 'name_sinhala' => "thriphala churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "sukumara churnaya", 'name_sinhala' => "sukumara churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "chirabilwa churnaya", 'name_sinhala' => "chirabilwa churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'cūrṇa','name_english' => "ashwagandha churnaya", 'name_sinhala' => "ashwagandha churnaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "chandraprabha wati", 'name_sinhala' => "chandraprabha wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "gokshuradi guggulu", 'name_sinhala' => "gokshuradi guggulu"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "kaishoraka guggulu", 'name_sinhala' => "kaishoraka guggulu"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "yogaraja guggulu", 'name_sinhala' => "yogaraja guggulu"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "jiwananda wati", 'name_sinhala' => "jiwananda wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "sitharama wati", 'name_sinhala' => "sitharama wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "suranchidura wati", 'name_sinhala' => "suranchidura wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "sarpagandha wati", 'name_sinhala' => "sarpagandha wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "krimghathani wati", 'name_sinhala' => "krimghathani wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'gugguḷu','name_english' => "arogya wardhana wati", 'name_sinhala' => "arogya wardhana wati"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "mruthunjaya rasa", 'name_sinhala' => "mruthunjaya rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "ramhana rasa", 'name_sinhala' => "ramhana rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "swasa kutara rasa", 'name_sinhala' => "swasa kutara rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "thribhuwana kirthi rasa", 'name_sinhala' => "thribhuwana kirthi rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "wathagajendrasinha rasa", 'name_sinhala' => "wathagajendrasinha rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "somanatha rasa", 'name_sinhala' => "somanatha rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "punarnawadi wanpura rasa", 'name_sinhala' => "punarnawadi wanpura rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'sweets','name_english' => "nithyananda rasa", 'name_sinhala' => "nithyananda rasa"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'other','name_english' => "medaharani kwathaya", 'name_sinhala' => "medaharani kwathaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'other','name_english' => "deniba debatu", 'name_sinhala' => "deniba debatu"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'other','name_english' => "madhumebha harani", 'name_sinhala' => "madhumebha harani"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "budhdharaja kalkaya", 'name_sinhala' => "budhdharaja kalkaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "desadun kalkaya", 'name_sinhala' => "desadun kalkaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "nawarathna kalkaya", 'name_sinhala' => "nawarathna kalkaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "sharkaradi kalkaya", 'name_sinhala' => "sharkaradi kalkaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "roganikash lepaya", 'name_sinhala' => "roganikash lepaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "lakshadi lepaya", 'name_sinhala' => "lakshadi lepaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "wachanaprasawaya lepaya", 'name_sinhala' => "wachanaprasawaya lepaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "chandra kalkaya", 'name_sinhala' => "chandra kalkaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "wasawa lepaya", 'name_sinhala' => "wasawa lepaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "kushmanda kawa lepaya 400g", 'name_sinhala' => "kushmanda kawa lepaya 400g"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'pulp','name_english' => "welwa chengayam 400g", 'name_sinhala' => "welwa chengayam 400g"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "batu thailaya", 'name_sinhala' => "batu thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "kolasheleshmadi", 'name_sinhala' => "kolasheleshmadi"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "bhrunga malaka", 'name_sinhala' => "bhrunga malaka"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "narayana thailaya", 'name_sinhala' => "narayana thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "nilyadi thailaya", 'name_sinhala' => "nilyadi thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "nirgundyadi", 'name_sinhala' => "nirgundyadi"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "pata thailaya", 'name_sinhala' => "pata thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "pinda thailaya", 'name_sinhala' => "pinda thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "pinas thailaya", 'name_sinhala' => "pinas thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "sarshapadi thailaya", 'name_sinhala' => "sarshapadi thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "watha widuranga thailaya", 'name_sinhala' => "watha widuranga thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "wisharpahara thailaya", 'name_sinhala' => "wisharpahara thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "thriphala thailaya", 'name_sinhala' => "thriphala thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "irimedadi thailaya", 'name_sinhala' => "irimedadi thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "bakuchi thailaya", 'name_sinhala' => "bakuchi thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "sithodaka thailaya", 'name_sinhala' => "sithodaka thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "sidhdhartha thailaya", 'name_sinhala' => "sidhdhartha thailaya"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'nostrum','name_english' => "sarwawishadi thailaya", 'name_sinhala' => "sarwawishadi thailaya"],

            
        ]);
    }
}
