<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Filler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $model = $this->argument('model');
        $model=ucfirst($model);
        if(!class_exists("\App\Models\\$model")){
            $this->error("\nUnknown Model\n");
            return;
        }

        //If you are not be able to understand what is happening here
        //በቃ ፈታ በል ሁሉም ነገር ካልገባኝ አይባልም ፡)
        $data = file_get_contents(database_path("/data/$model.json"));
        $data = json_decode($data);
        $model=ucfirst($model);
        foreach ($data as $value) {
            $value = json_decode(json_encode($value), true);
            $className = "\App\Models\\$model" ;
            $modelClass = new  $className();
            $modelClass::firstOrCreate($value);
        }

        $this->info("Done!");
    }
}
